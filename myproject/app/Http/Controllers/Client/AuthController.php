<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login(){
        return View("client.auth.login");
    }
    public function Register(){
        return View("client.auth.register");
    }
}
