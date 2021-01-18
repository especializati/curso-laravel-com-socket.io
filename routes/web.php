<?php

use App\Events\PostCreated;
use App\Http\Controllers\SiteController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/create-post', function () {
    $user = User::first();

    $post = $user->posts()->create([
        'title' => Str::random(150),
        'body' => Str::random(400),
    ]);

    // event(new PostCreated($post));

    return 'ok';
});

Route::get('/', [SiteController::class, 'index']);
