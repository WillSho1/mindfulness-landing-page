<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PageNavigationController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::get('/', [PageNavigationController::class, 'index'])->name('index');
    Route::post('/contact', [ContactFormController::class, 'contactFormSubmit'])->name('contact.submit');
});
