<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\FuncionarioTurnoController;
use App\Http\Controllers\TurnoController;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/', [MenuController::class, 'index'])->name('menu');

    Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');
    Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
    Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
    Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
    
    Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('funcionarios.create');
    Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
    Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('funcionarios.store');
    Route::get('/funcionarios/{funcionario}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
    Route::delete('/funcionarios/{funcionario}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');
    Route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
    Route::put('/funcionarios/{funcionario}', [FuncionarioController::class, 'update'])->name('funcionarios.update');

    Route::get('/cargos/create', [CargoController::class, 'create'])->name('cargos.create');
    Route::get('/cargos', [CargoController::class, 'index'])->name('cargos.index');
    Route::post('/cargos', [CargoController::class, 'store'])->name('cargos.store');
    Route::get('/cargos/{cargo}', [CargoController::class, 'show'])->name('cargos.show');
    Route::delete('/cargos/{cargo}', [CargoController::class, 'destroy'])->name('cargos.destroy');
    Route::get('/cargos/{cargo}/edit', [CargoController::class, 'edit'])->name('cargos.edit');
    Route::put('/cargos/{cargo}', [CargoController::class, 'update'])->name('cargos.update');
    //Route::resource('produtos', ProdutoController::class);

    Route::get('/turnos/create', [TurnoController::class, 'create'])->name('turnos.create');
    Route::get('/turnos', [TurnoController::class, 'index'])->name('turnos.index');
    Route::post('/turnos', [TurnoController::class, 'store'])->name('turnos.store');
    Route::get('/turnos/{turno}', [TurnoController::class, 'show'])->name('turnos.show');
    Route::delete('/turnos/{turno}', [TurnoController::class, 'destroy'])->name('turnos.destroy');
    Route::get('/turnos/{turno}/edit', [TurnoController::class, 'edit'])->name('turnos.edit');
    Route::put('/turnos/{turno}', [TurnoController::class, 'update'])->name('turnos.update');

    Route::get('/funcionarios/turnos/create', [FuncionarioTurnoController::class, 'create'])->name('funcionario.turnos.create');
    Route::post('/funcionarios/turnos', [FuncionarioTurnoController::class, 'store'])->name('funcionario.turnos.store');
});
