<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Web\Auth\LoginController as WebLoginController;

class LoginController extends WebLoginController
{
    protected $defaultGuard = 'admin';
    protected $defaultViewFolder = 'admin';
}
