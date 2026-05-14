<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/c', function () {
    return "c";
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('posts',PostController::class);