<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function signin()
    {
        return view('pages.auth.signin');
    }
}
