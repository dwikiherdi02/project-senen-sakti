<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/welcome', function () {
    return view('welcome');
});

Volt::route('/', 'pages.landingpage.index')->name('landingpage.index');
Volt::route('/menu', 'pages.menu.index')->name('menu.index');
