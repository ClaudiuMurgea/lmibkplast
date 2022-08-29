<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, "index"]);
Route::get('/test', function() {
    return view('test');
});
Route::get('/qr-code', function () {
    return \QrCode::size(120)
        ->generate('{"merchantId":"SITM2202280707","classId":"01","operationId":"0600","other":{"merchantInfo":"clasic","extSysData":"2 00:1b:eb:96:6f:cc"}}');
});

