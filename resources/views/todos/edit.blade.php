@extends('layouts.app')

@section('content')
    <h1>Edit Todo: {{ $todo->title }}</h1>

    <form action="{{ route('todos.update', $todo) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $todo->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $todo->description }}</textarea>
        <br>
        <label for="completed">Status:</label>
        <input type="checkbox" id="completed" name="completed" {{ $todo->completed ? 'checked' : '' }}>
        <br>
        <button type="submit">Update Todo</button>
    </form>
@endsection
