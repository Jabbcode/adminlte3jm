<?php

use App\Http\Controllers\Admin\ClienteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InventaryController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\BuyController;
use App\Http\Controllers\Admin\SellController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

// Rutas resource

Route::resource('products', InventaryController::class)->names('admin.products');

Route::resource('proveedors', ProveedorController::class)->names('admin.proveedors');

Route::resource('clients', ClienteController::class)->names('admin.clients');

Route::resource('compras', BuyController::class)->names('admin.compras');

Route::resource('ventas', SellController::class)->names('admin.ventas');
