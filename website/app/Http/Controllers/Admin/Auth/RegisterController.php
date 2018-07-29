<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Web\Auth\RegisterController as WebRegisterController;

class RegisterController extends WebRegisterController
{
    protected $defaultGuard = 'admin';
    protected $defaultViewFolder = 'admin';
    protected $defaultUserClass = \App\Models\Admin::class;
}
