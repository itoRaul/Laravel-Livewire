<?php

use App\Http\Livewire\Showtweets;
use App\Http\Livewire\User\UploadPhoto;
use Illuminate\Support\Facades\Route;

Route::get('upload', UploadPhoto::class)->name('upload.photo.user')->middleware('auth');

Route::get('tweets', Showtweets::class)->name('tweets.index')->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
