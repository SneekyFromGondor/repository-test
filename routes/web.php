<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;

Route::get('/', [ViajeController::class, 'index'])->name('viajes.index');

Route::get('viajes/{viaje}', [ViajeController::class, 'show'])->name('viajes.show');

Route::get('raza/{raza}', [ViajeController::class, 'raza'])->name('viajes.raza');

Route::get('cachorrxs', [ViajeController::class, 'cachorrxs'])->name('viajes.cachorrxs');


