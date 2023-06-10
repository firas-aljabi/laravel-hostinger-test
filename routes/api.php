<?php

use App\Http\Controllers\tapsLocationController;
use App\Http\Controllers\users_info;
use App\Http\Controllers\users_infoController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/signup', [UsersController::class, 'register']);
Route::post('/login', [UsersController::class, 'loginuser']);
Route::get('/listallusers', [users_infoController::class, 'list']);
Route::get('/geTheCustomer/{emailLogedIn}', [users_infoController::class, 'geTheCustomer']);
Route::post('/addcutomer', [users_infoController::class, 'addDetails']);
Route::post('/updateCustomer/{emailLogedIn}', [users_infoController::class, 'updateCustomer']);
Route::get('/listlocations', [tapsLocationController::class, 'listlocations']);
Route::get('/gettaps/{personName}', [tapsLocationController::class, 'gettaps']);
Route::post('/addtap', [tapsLocationController::class, 'addtap']);