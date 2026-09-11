<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskr</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f5f5f5;
            color: #1a1a1a;
        }
        /* 
         * -webkit-app-region: drag lets the user drag the window by this bar.
         * Required if you ever use titleBarHidden() — harmless otherwise.
         */
        header {
            background: #2d2d2d;
            color: #fff;
            padding: 16px 24px;
            font-size: 18px;
            font-weight: 600;
            -webkit-app-region: drag;
            user-select: none;
        }
        .task-list {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .task {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 15px;
        }
        .task.done { opacity: 0.5; text-decoration: line-through; }
        .badge {
            font-size: 12px;
            padding: 2px 8px;
            border-radius: 999px;
            background: #e8f5e9;
            color: #388e3c;
        }
        .task.done .badge { background: #eeeeee; color: #9e9e9e; }
    </style>
</head>
<body>
    <header>Taskr — {{ $tasks->count() }} tasks</header>

    <div class="task-list">
        @forelse ($tasks as $task)
            <div class="task {{ $task['done'] ? 'done' : '' }}">
                <span style="flex:1">{{ $task['title'] }}</span>
                <span class="badge">{{ $task['done'] ? '✓ done' : 'pending' }}</span>
            </div>
        @empty
            <p>No tasks yet.</p>
        @endforelse
    </div>
</body>
</html>