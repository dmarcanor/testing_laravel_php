<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('profile', 'profile');

Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'upload']);

Route::get('/', function () {
    return view('welcome', [
        'tags' => \App\Models\Tag::get()
    ]);
});
