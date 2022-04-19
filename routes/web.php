<?php

use App\Http\Controllers\{CsvExportController,CsvImportController,HomeController,TabelaController,UserController};
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/csv/export', [CsvExportController::class, 'export']);
Route::get('/csv/import', [CsvImportController::class, 'show'])->name('csv.show');
Route::post('/csv/import', [CsvImportController::class, 'store'])->name('csv.store');

Route::get('/tabela', [TabelaController::class, 'index'])->name('tabela.index');
Route::get('/tabela', [TabelaController::class, 'show'])->name('tabela.show');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


