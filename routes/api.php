<?php

use App\Http\Controllers\Master\Akun\Kepmendagri50Controller;
use App\Http\Controllers\Master\Akun\Permendagri79Controller;
use App\Http\Controllers\Master\Akun\Permendagri108Controller;
use App\Http\Controllers\Master\Akun\PSAP13Controller;
use App\Http\Controllers\Master\Akun\Kepmendagri50CController;
use App\Http\Controllers\Master\Akun\Kepmendagri50EController;
use App\Http\Controllers\Master\Akun\Mirroring50Controller;
use App\Http\Controllers\Master\Kegiatan\KegiatanBludController;
use App\Http\Controllers\Master\Organisasi\OrganisasiBludController;
use App\Helpers\Routes\RouteHelper;
use App\Http\Controllers\Master\Organisasi\Pihak3Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::prefix('masterakun')->group(function () {
//     RouteHelper::includeRouteFiles(__DIR__ . '/masterakun');
// });
//KEPMENDAGRI50
Route::get('/getakun50',[Kepmendagri50Controller::class,'getakun50']);
Route::post('/postakun50',[Kepmendagri50Controller::class,'postakun50']);
Route::post('/updateakun50',[Kepmendagri50Controller::class,'updateakun50']);
Route::post('/deleteakun50',[Kepmendagri50Controller::class,'deleteakun50']);

//PERMENDAGRI79
Route::get('/getakun79',[Permendagri79Controller::class,'getakun79']);
Route::post('/postakun79',[Permendagri79Controller::class,'postakun79']);
Route::post('/updateakun79',[Permendagri79Controller::class,'updateakun79']);
Route::post('/deleteakun79',[Permendagri79Controller::class,'deleteakun79']);

//PERMENDAGRI108
Route::get('/getakun108',[Permendagri108Controller::class,'getakun108']);
Route::post('/postakun108',[Permendagri108Controller::class,'postakun108']);
Route::post('/updateakun108',[Permendagri108Controller::class,'updateakun108']);
Route::post('/deleteakun108',[Permendagri108Controller::class,'deleteakun108']);

//PSAP13
Route::get('/getakun13',[PSAP13Controller::class,'getakun13']);
Route::post('/postakun13',[PSAP13Controller::class,'postakun13']);
Route::post('/updateakun13',[PSAP13Controller::class,'updateakun13']);
Route::post('/deleteakun13',[PSAP13Controller::class,'deleteakun13']);

//KEPMENDAGRI50c
Route::get('/get50c',[Kepmendagri50CController::class,'get50c']);
Route::post('/post50c',[Kepmendagri50CController::class,'post50c']);
Route::post('/update50c',[Kepmendagri50CController::class,'update50c']);
Route::post('/delete50c',[Kepmendagri50CController::class,'delete50c']);

//KEPMENDAGRI50e
Route::get('/get50e',[Kepmendagri50EController::class,'get50e']);
Route::post('/post50e',[Kepmendagri50EController::class,'post50e']);
Route::post('/update50e',[Kepmendagri50EController::class,'update50e']);
Route::post('/delete50e',[Kepmendagri50EController::class,'delete50e']);

//AKUN50MIRRORING
Route::get('/getm50',[Mirroring50Controller::class,'getm50']);
Route::post('/postm50',[Mirroring50Controller::class,'postm50']);
Route::post('/updatem50',[Mirroring50Controller::class,'updatem50']);
Route::post('/deletem50',[Mirroring50Controller::class,'deletem50']);

//KEGIATAN BLUD
Route::get('/getkblud',[KegiatanBludController::class,'getkblud']);
Route::post('/postkblud',[KegiatanBludController::class,'postkblud']);
Route::post('/updatekblud',[KegiatanBludController::class,'updatekblud']);
Route::post('/deletekblud',[KegiatanBludController::class,'deletekblud']);

//ORGANISASI
Route::get('/getorg',[OrganisasiBludController::class,'getorg']);
Route::post('/postorg',[OrganisasiBludController::class,'postorg']);
Route::post('/updateorg',[OrganisasiBludController::class,'updateorg']);
Route::post('/deleteorg',[OrganisasiBludController::class,'deleteorg']);

//PIHAK 3
Route::get('/getpihak3',[Pihak3Controller::class,'getpihak3']);
Route::post('/postpihak3',[Pihak3Controller::class,'postpihak3']);
Route::post('/updatepihak3',[Pihak3Controller::class,'updatepihak3']);
Route::post('/deletepihak3',[Pihak3Controller::class,'deletepihak3']);