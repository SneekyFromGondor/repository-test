<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Raza;
use App\Models\Variante;

class VarianteController extends Controller
{

    public function create()
    {
        $razas = Raza::pluck('nombre', 'id');

        return view('admin.variantes.create', compact('razas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:variantes',
            'raza_id' => 'required',
        ]);

        $variante = Variante::create($request->all());

        return redirect()->route('admin.variantes.edit', $variante);
    }

    public function show($id)
    {
        //
    }

    public function edit(Variante $variante)
    {
        $razas = Raza::pluck('nombre', 'id');

        return view('admin.variantes.edit', compact('variante', 'razas'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
