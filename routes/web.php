<?php

use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\User_profile_Controller;
use App\Http\Controllers\Users_Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Transaction',[TransactionController::class,'getTransData']);

Route::get('/Users',[Users_Controller::class,'getUsersData']);

Route::get('/Userprofile',[User_profile_Controller::class,'getUserProfileData']);

Route::get('/Admin',[Admin_Controller::class,'getAdminData']);

