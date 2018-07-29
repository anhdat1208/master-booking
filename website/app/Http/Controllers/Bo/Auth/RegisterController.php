<?php

namespace App\Http\Controllers\Bo\Auth;

use App\Http\Controllers\Web\Auth\RegisterController as WebRegisterController;

class RegisterController extends WebRegisterController
{
    protected $defaultGuard = 'bo';
    protected $defaultViewFolder = 'bo';
    protected $defaultUserClass = \App\Models\Bo::class;
}
