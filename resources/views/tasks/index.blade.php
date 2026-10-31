<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tasks</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff8f2;
            color: #75172d;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
        }

        header {
            margin-top: 25px;
            padding: 25px;
            background: #fef9b7;
            border-radius: 25px;
            box-shadow: 0 6px 0 #fbdd95;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            color: #ce4a4a;
        }

        nav a {
            margin-left: 15px;
            color: #ce4a4a;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 45px 0;
        }

        .task-card {
            margin-top: 18px;
            padding: 20px;
            background: white;
            border: 3px solid #ffb8e3;
            border-radius: 20px;
        }

        .task-card h2 {
            color: #75172d;
        }

        .task-card p {
            margin-top: 8px;
            color: #ce4a4a;
        }

        .status {
            display: inline-block;
            margin-top: 12px;
            padding: 5px 12px;
            border-radius: 20px;
            background: #ff819c;
            color: white;
            font-size: 13px;
        }

        footer {
            padding: 25px 0;
            text-align: center;
            color: #ce4a4a;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>All Tasks</h1>

        <nav>
            <a href="/">Home</a>
            <a href="/tasks">Tasks</a>
            <a href="/profile">Profile</a>
            <a href="/about">About</a>
        </nav>
    </header>

    <main>
        <h2>Task List</h2>

        @forelse ($tasks as $task)
            <div class="task-card">
                <h2>{{ $task->title }}</h2>
                <p>Date: {{ $task->task_date->format('F d, Y') }}</p>
                <span class="status">{{ ucfirst($task->status) }}</span>
            </div>
        @empty
            <p>No tasks found.</p>
        @endforelse
    </main>

    <footer>
        <p>© 2026 Tasks for Today</p>
    </footer>
</div>

</body>
</html>