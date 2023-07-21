@extends('layouts.app')

@section('content')
    <h1>Add New Todo</h1>

    <form action="{{ route('todos.store') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Add Todo</button>
    </form>
@endsection
