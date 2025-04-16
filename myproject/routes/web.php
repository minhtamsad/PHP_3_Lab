<?php

use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, "index"]);
// Route::get('/lienhe', [ContractController::class, "index"]);
// Route::get('/login', [AuthController::class, "login"]);
// Route::get('/register', [AuthController::class, "register"]);
// Route::get('/new/{id}', [NewController::class, "index"]);
Route::get('/tintrongloai/{id}', [NewController::class, "tintrongloai"]);
Route::get('/lab2', [NewController::class, "lab2"]);
Route::get('/lab2bai2', [NewController::class, 'lab2bai2']);
/// dạ thầy 3 cái router trên là bài lab3 nha thầy //
