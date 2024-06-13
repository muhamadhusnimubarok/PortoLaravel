<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('FRONT_END.utama');
});
use App\Http\Controllers\PORTOLARAVELController;

Route::get('/', [PORTOLARAVELController::class, 'index']);