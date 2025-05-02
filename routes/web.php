<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');

//Route::resource('produtos', ProdutoController::class);

