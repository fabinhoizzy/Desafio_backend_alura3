<?php

use App\Http\Controllers\CsvExportController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TabelaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

Route::get('/csv/export', [CsvExportController::class, 'export']);
Route::get('/csv/import', [CsvImportController::class, 'show'])->name('csv.show');
Route::post('/csv/import', [CsvImportController::class, 'store'])->name('csv.store');

Route::get('/tabela/index', [TabelaController::class, 'index'])->name('tabela.index');
Route::get('/tabela/show', [TabelaController::class, 'show'])->name('tabela.show');


Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

});

require __DIR__.'/auth.php';
