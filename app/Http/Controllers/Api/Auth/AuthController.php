<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        return "Ok";
    }

    public function Registration(Request $request)
    {
        return "Registration Ok";
    }
}
