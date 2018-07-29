<?php

namespace App\Http\Controllers\Bo;

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
