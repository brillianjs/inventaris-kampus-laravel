<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controller\UserController;

// use App\Http\Controllers\DataMasukController;
// use App\Http\Controllers\DataPenyimpananController;
// use App\Http\Controllers\DataController;
// use App\Exports\DataMasukExport;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');

Route::controller(App\Http\Controllers\DataMasukController::class)->group(function () {
    Route::get('/data-masuk', 'index')->name('data-masuk');
    Route::post('/data-masuk', 'store')->name('data-masuk');
    Route::put('/data-masuk/{id}', 'update')->name('edit-data-masuk');
    Route::delete('/data-masuk/{id}', 'destroy')->name('delete-data-masuk');
    Route::post('/import-data-masuk', 'import_excel')->name('import-data-masuk');
    Route::get('/export-data-masuk', 'export_excel')->name('export-data-masuk');
});

Route::controller(App\Http\Controllers\DataPenyimpananController::class)->group(function () {
    Route::get('/data-penyimpanan', 'index')->name('data-penyimpanan');
    Route::post('/data-penyimpanan', 'store')->name('data-penyimpanan');
    Route::put('/data-penyimpanan/{id}', 'update')->name('edit-data-penyimpanan');
    Route::delete('/data-penyimpanan/{id}', 'destroy')->name('delete-data-penyimpanan');
    Route::post('/import-data-penyimpanan', 'import_excel')->name('import-data-penyimpanan');
    Route::get('/export-data-penyimpanan', 'export_excel')->name('export-data-penyimpanan');
});


Route::controller(App\Http\Controllers\DataPeminjamanController::class)->group(function () {
    Route::get('/data-peminjaman', 'index')->name('data-peminjaman');
    Route::post('/data-peminjaman', 'store')->name('data-peminjaman');
    Route::put('/data-peminjaman/{id}', 'update')->name('edit-data-peminjaman');
    Route::delete('/data-peminjaman/{id}', 'destroy')->name('delete-data-peminjaman');
    Route::post('/import-data-peminjaman', 'import_excel')->name('import-data-peminjaman');
    Route::get('/export-data-peminjaman', 'export_excel')->name('export-data-peminjaman');
});