<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InventaryController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('products', InventaryController::class)->names('admin.products');