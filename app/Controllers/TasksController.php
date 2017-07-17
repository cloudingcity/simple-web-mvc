<?php

namespace App\Controllers;

class TasksController
{
    /**
     * Show all tasks.
     *
     * @return mixed
     */
    public function index()
    {
//        $task = new Task();
//        $tasks = $task->selectAll();

        return view('tasks');
    }

    public function store()
    {
        echo request('title');

        nl2br(request('body'));

    }
}
