<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ResourceController;

Route::get('/', [SiteController::class, 'Home']);
Route::get('/about/{name}', [SiteController::class, 'About']);
Route::get('/contact', [SiteController::class, 'Contact']);

// this a single action routerurce
Route::get('/singleController',SingleController::class);

// this a single resourceController routerurce
Route::resource('resourceController', ResourceController::class);