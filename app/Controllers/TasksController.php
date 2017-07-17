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
        $tasks = Task::select('*')
            ->order('created_at', 'DESC')
            ->limit('5')
            ->get();
        return view('tasks', compact('tasks'));
    }

    /**
     * Store datas.
     */
    public function store()
    {
        Task::create([
            'title' => request('title'),
            'body' => nl2br(request('body')),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('tasks');
    }
}
