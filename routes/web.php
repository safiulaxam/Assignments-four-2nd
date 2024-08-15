<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;







Route::get('/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');























