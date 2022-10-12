<?php

use Fhsinchy\Inspire\Controllers\InspirationController;
use Fhsinchy\Inspire\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::name('inspire.')->group(function () {
    Route::get('inspire', InspirationController::class)->name("inspire");
    Route::get('userfind', UserController::class);
    
    Route::resource('contacts', 'Fhsinchy\Inspire\Controllers\ContactController')->except('destroy');    
});

