<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Web\Auth\ForgotPasswordController as WebForgotPasswordController;

class ForgotPasswordController extends WebForgotPasswordController
{
    protected $defaultGuard = 'admin';
    protected $defaultViewFolder = 'admin';
}
