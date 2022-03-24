<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ContactUSController;

Route::get('/', [ViajeController::class, 'inicio'])->name('index');

Route::get('/traslados', [ViajeController::class, 'index'])->name('viajes.index');

Route::get('viajes/{viaje}', [ViajeController::class, 'show'])->name('viajes.show');

Route::get('raza/{raza}', [ViajeController::class, 'raza'])->name('viajes.raza');

Route::get('cachorrxs', [ViajeController::class, 'cachorrxs'])->name('viajes.cachorrxs');

Route::get('contacto', [ContactUSController::class, 'contactus'])->name('contacto');

Route::post('contacto', [ContactUSController::class,'contactUSPost'])->name('contacto.contactUSPost');



