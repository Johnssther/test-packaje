<?php

use Fhsinchy\Inspire\Controllers\InspirationController;
use Fhsinchy\Inspire\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('inspire', InspirationController::class);
Route::get('userfind', UserController::class);
