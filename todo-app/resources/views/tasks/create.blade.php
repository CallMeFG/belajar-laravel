@extends('layouts.app')
@section('content')
    <h1>Buat Todo Baru</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Judul Todo:</label><br>
            <input type="text" name="title" id="title">
            @error('title')
                <div style="color:red;font-size:0.8rem;">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="description">Deskripsi:</label><br>
            <textarea name="description" id="description"></textarea>
        </div>
        <br>
        <button type="submit">Simpan Todo</button>
    </form>
@endsection