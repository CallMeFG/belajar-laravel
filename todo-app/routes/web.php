<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
//route get
Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('/todos/{id}',[TaskController::class,'show'])->name('tasks.show');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::get('/task/{id}',[TaskController::class,'show'])->name('tasks.show');
Route::get('/tasks/{id}/edit',[TaskController::class,'edit'])->name('tasks.edit');
//route post
Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store'); 
Route::get('/tasks/{id}',[TaskController::class,'update'])->name('tasks.update');
//route delete
Route::delete('/tasks/{id}',[TaskController::class,'destroy'])->name('tasks.destroy');