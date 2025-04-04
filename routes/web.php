<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FleetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::controller(ServicesController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('residential-moving', 'residentialMoving')->name('residential-moving');
    Route::get('commercial-moving', 'commercialMoving')->name('commercial-moving');
    Route::get('fast-freight', 'fastFreight')->name('fast-freight');
    Route::get('furniture-assembly', 'furnitureAssembly')->name('furniture-assembly');
    Route::get('professional-packaging', 'professionalPackaging')->name('professional-packaging');
    Route::get('interstate-moving', 'interstateMoving')->name('interstate-moving');
});
Route::get('/fleet', FleetController::class)->name('fleet');
Route::get('/regions', RegionsController::class)->name('regions');
