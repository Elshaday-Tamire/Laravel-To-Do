@extends('layouts.app')

@section('content')
    <h1>Todos</h1>

    <ul>
        @foreach ($todos as $todo)
            <li>
                <a href="{{ route('todos.show', $todo) }}">{{ $todo->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
