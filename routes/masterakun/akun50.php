<?php

use App\Http\Controllers\Master\Akun\Permendagri50Controller;
use Illuminate\Support\Facades\Route;

//PERMENDAGRI50
Route::middleware('auth:api')
->group(function () {
    Route::get('/getakun50',[Permendagri50Controller::class,'getakun50']);
    Route::post('/postakun50',[Permendagri50Controller::class,'postakun50']);
    Route::post('/updateakun50',[Permendagri50Controller::class,'updateakun50']);
    Route::post('/deleteakun50',[Permendagri50Controller::class,'deleteakun50']);

});