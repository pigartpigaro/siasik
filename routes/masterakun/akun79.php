<?php

use App\Http\Controllers\Master\Akun\Permendagri79Controller;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')
->group(function () {

    Route::get('/getakun79',[Permendagri79Controller::class,'getakun79']);
    Route::post('/postakun79',[Permendagri79Controller::class,'postakun79']);
    Route::post('/updateakun79',[Permendagri79Controller::class,'updateakun79']);
    Route::post('/deleteakun79',[Permendagri79Controller::class,'deleteakun79']);
});