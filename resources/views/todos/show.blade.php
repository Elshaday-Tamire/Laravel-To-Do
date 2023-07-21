@extends('layouts.app')

@section('content')
    <h1>{{ $todo->title }}</h1>

    <p>Description: {{ $todo->description }}</p>
    <p>Status: {{ $todo->completed ? 'Completed' : 'Not Completed' }}</p>

    <a href="{{ route('todos.edit', $todo) }}">Edit</a>

    <form action="{{ route('todos.destroy', $todo) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
    </form>
@endsection
