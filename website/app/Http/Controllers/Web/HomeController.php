<?php

namespace App\Http\Controllers\Web;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->defaultViewFolder . '.home');
    }
}
