<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(App\Http\Controllers\DataBarangController::class)->group(function () {
    Route::get('/data-barang', 'index')->name('data-barang');
    Route::post('/import-data-barang', 'import_excel')->name('import-data-barang');
    Route::post('/data-barang', 'store')->name('data-barang');
    Route::put('/data-barang/{id}', 'update')->name('edit-data-barang');
    Route::delete('/data-barang/{id}', 'destroy')->name('delete-data-barang');
});

// Route::post('/import-data-barang', [App\Http\Controllers\DataBarangController::class, 'import_excel'])->name('import-data-barang');