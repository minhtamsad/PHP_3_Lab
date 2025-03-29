<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use function Termwind\render;


class HomeController extends Controller
{
    public function index(){
        return View("client.home");
    }
}
