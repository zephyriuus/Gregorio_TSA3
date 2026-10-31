<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskAndUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'alezzandra',
            'full_name' => 'Alezzandra Gregorio',
            'email' => 'alezzandra@example.com',
        ]);

        Task::create([
            'title' => 'Review Laravel requirements',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Complete database migration',
            'status' => 'completed',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Create task management views',
            'status' => 'pending',
            'task_date' => now()->toDateString(),
        ]);

        Task::create([
            'title' => 'Prepare project documentation',
            'status' => 'pending',
            'task_date' => now()->subDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Test application routes',
            'status' => 'completed',
            'task_date' => now()->subDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Check database records',
            'status' => 'pending',
            'task_date' => now()->subDays(2)->toDateString(),
        ]);

        Task::create([
            'title' => 'Improve page styling',
            'status' => 'pending',
            'task_date' => now()->addDay()->toDateString(),
        ]);

        Task::create([
            'title' => 'Prepare GitHub submission',
            'status' => 'pending',
            'task_date' => now()->addDay()->toDateString(),
        ]);
    }
}