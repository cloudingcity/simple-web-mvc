<?php

namespace App\Controllers;

use App\Models\Task;

class CompletedController
{
    /**
     * Show all completed tasks.
     *
     * return view('completed')
     */
    public function index()
    {
        $tasks = Task::select('*')
            ->where(['is_completed', '=', '1'], ['deleted_at', 'is', 'NULL'])
            ->order('updated_at', 'DESC')
            ->limit('5')
            ->get();

        return view('completed', compact('tasks'));
    }


    /**
     * Delete task.
     *
     * @return redirect('completed');
     */
    public function destroy()
    {
        Task::select()
            ->where(['id', '=', request('id')])
            ->update(['deleted_at', date('Y-m-d H:i:s')]);

        return redirect('completed');
    }
}
