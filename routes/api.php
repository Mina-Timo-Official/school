<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('orderSchool', [SchoolController::class, 'orderSchool']);
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::resource('students', StudentController::class);
});

//Route::group(['middleware' => ['auth']], function () {
//    Route::resource('students', StudentController::class);
//});
