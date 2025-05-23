<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BukuController::class, 'index'])->name('book.index');
Route::post('/book', [BukuController::class, 'store'])->name('book.store');
Route::get("/book/{id}/edit", [BukuController::class, 'edit'])->name('book.edit');
Route::put('/book/{id}', [BukuController::class, 'update'])->name('book.update');
Route::delete('/book/{id}/delete', [BukuController::class, 'destroy'])->name('book.destroy');