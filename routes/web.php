<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


// Listar todos los productos
Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

// Mostrar el formulario para crear un nuevo producto
Route::get('productos/crear', [ProductoController::class, 'create'])->name('productos.create');

// Guardar un nuevo producto
Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');

// Mostrar un producto específico
Route::get('productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');

// Mostrar el formulario para editar un producto existente
Route::get('productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

// Actualizar un producto existente
Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');

// Eliminar un producto existente
Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

