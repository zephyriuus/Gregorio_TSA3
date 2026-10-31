<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('task_date')->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function profile()
    {
        $user = User::first();

        return view('profile', [
            'user' => $user,
        ]);
    }

    public function about()
    {
        return view('about');
    }
}