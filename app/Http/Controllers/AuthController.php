<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function signup()
    {
        return view('pages.auth.signup');
    }
}
