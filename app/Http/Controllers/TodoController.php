<?php
namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // List all todos
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    // Show the form to create a new todo
    public function create()
    {
        return view('todos.create');
    }

    // Store a new todo
    public function store(Request $request)
    {
        // Validate the request data (title, description, etc.)
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            // Add more validation rules as needed
        ]);

        // Create and save the new todo
        $todo = new Todo($validatedData);
        $todo->save();

        return redirect()->route('todos.index');
    }

    // Show a specific todo
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    // Show the form to edit a todo
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    // Update a specific todo
    public function update(Request $request, Todo $todo)
    {
        // Validate the request data (title, description, etc.)
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            // Add more validation rules as needed
        ]);

        // Update and save the todo
        $todo->update($validatedData);

        return redirect()->route('todos.show', $todo);
    }

    // Delete a specific todo
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
