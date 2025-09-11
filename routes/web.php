<?php

use App\Http\Livewire\Showtweets;
use Illuminate\Support\Facades\Route;

Route::get('tweets', Showtweets::class);


Route::get('/', function () {
    return view('welcome');
});
