<?php

namespace App\Controllers;

use App\Models\Task;

class TasksController
{
    /**
     * Show all tasks.
     *
     * @return view()
     */
    public function index()
    {
        $tasks = Task::get();
        return view('tasks', compact('tasks'));
    }

    public function store()
    {
        echo request('title');

        nl2br(request('body'));

    }
}
