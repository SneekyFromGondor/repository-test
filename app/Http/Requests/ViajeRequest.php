<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViajeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $viaje = $this->route()->parameter('viaje');

        $rules = [
            'destino' => 'required',
            'slug' => 'required|unique:viajes',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if($viaje){
            $rules['slug'] = 'required|unique:viajes,slug,' . $viaje->id;
        }

        if($this->status == 2)
        {
            $rules = array_merge($rules, [
                'raza_id' => 'required',
                'cantidad' => 'required',
                'descripcion' => 'required'

            ]);
        }

        return $rules;
    }
}
