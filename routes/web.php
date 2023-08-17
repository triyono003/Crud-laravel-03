<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;


Route::get('/',[HomeController::class,'home']);
Route::get('/profile',[HomeController::class,'profile']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/dashboard',[HomeController::class,'dashboard']);

#Route::get('/note/home',[ActionController::class,'home']);
Route::get('/note/home',[ActionController::class,'show']);
Route::post('/note',[ActionController::class,'create'])
       ->name('create');

Route::get('/note/{note}/edit',[ActionController::class,'edit'])     ->name('edit');
Route::put('/note/{note}',[ActionController::class,'update'])
      ->name('update');
Route::delete('/note/{note}',[ActionController::class,'destroy'])->name('destroy');

Route::get('/users/home',[UserController::class,'show']);
Route::get('/users/{user}/profile',[UserController::class,'profile']);
Route::get('/users/home',[SearchController::class,'search'])->name('search');

#Route::get('/users/home',[RegisterationController::class,'home']);