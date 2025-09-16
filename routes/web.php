<?php

use App\Http\Controllers\Biografia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('principal')->controller(Biografia::class)->group(function () {

    Route::get('/',"info");

});