<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'nombre' => 'required|string|max:20',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
        ];
    }
}