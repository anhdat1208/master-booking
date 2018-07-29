<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Web\Auth\ResetPasswordController as WebResetPasswordController;

class ResetPasswordController extends WebResetPasswordController
{
    protected $defaultGuard = 'admin';
    protected $defaultViewFolder = 'admin';
}
