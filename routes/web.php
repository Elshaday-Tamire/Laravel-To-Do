<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\TodoController;

// List all todos
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Show the form to create a new todo
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');

// Store a new todo
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

// Show a specific todo
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');

// Show the form to edit a todo
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todos.edit');

// Update a specific todo
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

// Delete a specific todo
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

