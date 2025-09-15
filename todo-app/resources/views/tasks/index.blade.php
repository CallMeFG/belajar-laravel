@extends('layouts.app')

@section('content')
<h1>Daftar Tugas</h1>
<ul>
    @foreach ($tasks as $task)
    <li>
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">
            {{ $task->title }}
        </a>
        <small>(oleh : {{ $task->user->name }})</small>
    </li>
    @endforeach
</ul>
@endsection