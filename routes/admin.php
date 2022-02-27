<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RazaController;
use App\Http\Controllers\Admin\ViajeController;
use App\Http\Controllers\Admin\VarianteController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('razas', RazaController::class)->names('admin.razas');

Route::resource('viajes', ViajeController::class)->names('admin.viajes');

Route::resource('variantes', VarianteController::class)->names('admin.variantes');
