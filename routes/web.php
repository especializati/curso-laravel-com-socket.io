<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/create-post', function () {
    $user = User::first();

    $user->posts()->create([
        'title' => Str::random(150),
        'body' => Str::random(400),
    ]);

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
