<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;

class ProductoController extends Controller{
    public function index(){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.crear');
    }

    public function store(StoreProductoRequest $request){
        Producto::create($request->validated());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto){
        return view('productos.ver', compact('producto'));
    }

    public function edit(Producto $producto){
        return view('productos.editar', compact('producto'));
    }

    public function update(UpdateProductoRequest $request, Producto $producto){
        $producto->update($request->validated());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto){
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}