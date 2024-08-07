@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Detalles del Producto</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $producto->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nombre</th>
                                <td>{{ $producto->nombre }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Descripción</th>
                                <td>{{ $producto->descripcion }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Precio</th>
                                <td>{{ $producto->precio }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
