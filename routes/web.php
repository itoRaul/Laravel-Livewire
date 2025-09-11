<?php

use App\Http\Livewire\Showtweets;
use Illuminate\Support\Facades\Route;

Route::get('tweets', Showtweets::class)->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
