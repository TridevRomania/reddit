<?php

use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetRandomNumberController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return 'hit';
});

Route::get('/getRandomNumber', GetRandomNumberController::class);

Route::get("/posts", [PostController::class, "index"])->name('posts.index');
Route::get("/posts/create", [PostController::class, "create"])->name('posts.create');
Route::get("/posts/edit/{post}", [PostController::class, "edit"])->name('posts.edit');
Route::put("/posts/update/{post}", [PostController::class, "update"])->name('posts.update');
Route::post("/posts", [PostController::class, "store"])->name('posts.store');
Route::get("/posts/{post}", [PostController::class, "show"])->name('posts.show');
Route::delete("/posts/{post}", [PostController::class, "destroy"])->name('posts.destroy');
Route::get('/token', TokenController::class)->name('token.get');
