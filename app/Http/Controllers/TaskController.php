<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // Static data for now — no DB yet
        $tasks = collect([
            ['id' => 1, 'title' => 'Install NativePHP',      'done' => true],
            ['id' => 2, 'title' => 'Open a window',           'done' => true],
            ['id' => 3, 'title' => 'Render a task list',      'done' => false],
            ['id' => 4, 'title' => 'Add SQLite persistence',  'done' => false],
        ]);

        return view('tasks.index', compact('tasks'));
    }
}
