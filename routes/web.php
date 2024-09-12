<?php

use App\Http\Controllers\PageNavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageNavigationController::class, 'index'])->name('index');
