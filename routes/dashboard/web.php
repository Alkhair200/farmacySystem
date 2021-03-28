<?php

use Illuminate\Support\Facades\Route;
const PAGINATION_COUNT = 3;
Route::middleware(['auth'])->group(function(){

    route::get('/index' ,[App\Http\Controllers\Dashboard\DashboardController::class,'index'])->name('index');

// user Route
Route::resource('users', UserController::class)->except(['show']);

// Route::get('/test', function () {
//     return "Hello";
// });
});