<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    /** NOTE ~ Show Login Page */
    public function showLogin()
    {
        return view('admin.auth.login');
    }
    /** NOTE ~ Show Forgot Password Page */
    public function showForgotPassword()
    {
        return view('admin.auth.forgot_password');
    }
}
