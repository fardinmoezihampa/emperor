<?php

use App\Livewire\Client\Home\Index;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',Index::class)->name('home');
