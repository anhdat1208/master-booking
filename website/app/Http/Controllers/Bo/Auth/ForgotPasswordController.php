<?php

namespace App\Http\Controllers\Bo\Auth;

use App\Http\Controllers\Web\Auth\ForgotPasswordController as WebForgotPasswordController;

class ForgotPasswordController extends WebForgotPasswordController
{
    protected $defaultGuard = 'bo';
    protected $defaultViewFolder = 'bo';
}
