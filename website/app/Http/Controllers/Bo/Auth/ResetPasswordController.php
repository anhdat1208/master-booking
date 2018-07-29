<?php

namespace App\Http\Controllers\Bo\Auth;

use App\Http\Controllers\Web\Auth\ResetPasswordController as WebResetPasswordController;

class ResetPasswordController extends WebResetPasswordController
{
    protected $defaultGuard = 'bo';
    protected $defaultViewFolder = 'bo';
}
