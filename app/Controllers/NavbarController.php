<?php

namespace App\Controllers;

use App\Models\Task;

class NavbarController
{
    /**
     * Show all completed tasks.
     *
     * return view('completed')
     */
    public function completed()
    {
        $tasks = Task::select('*')
            ->where(['is_completed', '=', '1'])
            ->order('updated_at', 'DESC')
            ->limit('5')
            ->get();

        return view('completed', compact('tasks'));
    }

    /**
     * Show about tab page.
     *
     * @return view('about')
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show link tab page.
     *
     * @return views('link')
     */
    public function link()
    {
        return view('link');
    }
}
