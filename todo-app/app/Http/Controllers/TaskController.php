<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks=Task::with('user')->latest()->get();
        return view('tasks.index',['tasks'=>$tasks]);
    }
    public function show($id){
        $task=Task::with('user')->findOrFail($id);
        return view('tasks.show',['task'=>$task]);
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'nullable'
        ]);
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('tasks.index');
    }
    public function edit($id){
        $task=Task::findOrFail($id);
        return view('tasks.edit',['task'=>$task]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required|max:100',
            'description'=>'nullable'
        ]);
        $task=Task::findOrFail($id);
        $task->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('tasks.show',['id'=>$task->id]);
    }
    public function destroy($id){
        $task=Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
