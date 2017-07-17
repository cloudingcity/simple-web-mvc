<?php

namespace App\Controllers;

class NavbarController
{
    /**
     * Show about tab page.
     *
     * @return view()
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show link tab page.
     *
     * @return views()
     */
    public function link()
    {
        return view('link');
    }
}
