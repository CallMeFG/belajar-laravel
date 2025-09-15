@extends('layouts.app')

@section('content')
    <h1>Daftar Artikel Blog</h1>

    <ul>
        @foreach ($posts as $id => $post)
            <li>
                <a href="{{ route('posts.show', ['id' => $id]) }}">
                    {{ $post['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection