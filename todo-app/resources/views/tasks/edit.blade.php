@extends('layouts.app')
@section('content')
    <h1>Edit Todo</h1>
    <form action="{{ route('tasks.update',['id'=>$task->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Judul Todo:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}">
            @error('title')
                <div style="color: red;font-size:0.8rem;">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description">{{ $task->description }}</textarea>
        </div>
        <br>
        <button type="submit">Update Todo</button>
    </form>
@endsection