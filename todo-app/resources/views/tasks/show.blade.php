@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p><strong>Dibuat oleh :</strong>{{ $task->user->name }} </p>
    <hr>
    <p>{{ $task->description }}</p>
    <p>Status: {{ $task->is_completed ? 'Selesai' : 'Belum Selesai' }}</p>
    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit Todo</a>
    <form action="{{ route('tasks.destroy',['id'=>$task->id]) }} "
        method="POST" style="displat:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclieck="return confirm('apakah anda yakin ingin menghapus ini?')">
            Hapus Todo
        </button>
    </form>
    <a href="{{ route('tasks.index') }}">Kembali ke Daftar Tugas</a>
@endsection