<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValentineController;   

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ValentineController::class, 'index']);