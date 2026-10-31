<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $tasks = Task::whereDate('task_date', today())
        ->orderBy('task_date')
        ->get();

    return view('home.index', [
        'tasks' => $tasks,
    ]);
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/profile', [TaskController::class, 'profile']);
Route::get('/about', [TaskController::class, 'about']);