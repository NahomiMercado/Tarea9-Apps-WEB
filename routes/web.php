<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task9Controller;

Route::get('/', [Task9Controller::class, 'home'])->name('home');
Route::get('/photos', [Task9Controller::class, 'photos'])->name('photos');
Route::get('/contact', [Task9Controller::class, 'contact'])->name('contact');