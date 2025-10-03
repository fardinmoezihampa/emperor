<?php

use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Settings\Footer\Label;
use App\Livewire\Admin\Settings\Footer\Social;
use App\Livewire\Client\Home\Index;
use Illuminate\Support\Facades\Route;


Route::get('/', Index::class)->name('home');

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
Route::get('/admin/settings/footer/label', Label::class)->name('admin.settings.footer.label');
Route::get('/admin/settings/footer/social', Social::class)->name('admin.settings.footer.social');


/*
Route::get('/', function () {
    return view('welcome');
});*/
