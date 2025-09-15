<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            1 => ['title' => 'Tutorial Laravel untuk Pemula'],
            2 => ['title' => 'Pentingnya Memahami Routing'],
            3 => ['title' => 'Apa itu MVC?'],
        ];
        return view('posts.index', ['posts' => $posts]);
    }
    public function detail($id){
        $posts = [
            1 => ['title' => 'belajar laravel 12 mudah dengan callmefg!'],
            2 => ['title' => 'alasan Routing itu harus dipahami!'],
            3 => ['title' => 'apa itu Routing?'],
        ];
        if (!array_key_exists($id, $posts)) {
            abort(404);
        }
        $post = $posts[$id];
        return view('posts.show', ['post' => $post]);
    }
}
