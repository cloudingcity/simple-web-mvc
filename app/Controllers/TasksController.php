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
            ->where(['is_completed', '=', 0], ['deleted_at', 'is', 'NULL'])
            ->order('created_at', 'DESC')
            ->limit('5')
            ->get();

        return view('tasks', compact('tasks'));
    }

    /**
     * Create task.
     *
     * @return redirect('tasks');
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

    /**
     * Completed task.
     *
     * @return redirect('tasks');
     */
    public function update()
    {
        Task::select()
            ->where(['id', '=', request('id')])
            ->update(['is_completed', 1], ['updated_at', date('Y-m-d H:i:s')]);

        return redirect('tasks');
    }

    /**
     * Delete task.
     *
     * @return redirect('tasks');
     */
    public function destroy()
    {
        Task::select()
            ->where(['id', '=', request('id')])
            ->update(['deleted_at', date('Y-m-d H:i:s')]);

        return redirect('tasks');
    }
}
