<?php

namespace App\Http\Controllers\Bo\Auth;

use App\Http\Controllers\Web\Auth\LoginController as WebLoginController;

class LoginController extends WebLoginController
{
    protected $defaultGuard = 'bo';
    protected $defaultViewFolder = 'bo';
}
