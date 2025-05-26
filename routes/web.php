<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);
Route::get('/check-role', function() {
    return auth()->user()->isAdmin()
        ? "Вы админ"
        : "Вы не админ";
})->middleware('auth');
