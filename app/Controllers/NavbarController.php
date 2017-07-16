<?php

namespace App\Controllers;

class NavbarController
{
    public function task()
    {
        return view('task');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
