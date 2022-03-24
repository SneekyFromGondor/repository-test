<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Raza;

class RazaController extends Controller
{

    public function index()
    {
        $razas = Raza::all();

        return view('admin.razas.index', compact('razas'));
    }

    public function create()
    {
        return view('admin.razas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:razas',
        ]);

        $raza = Raza::create([
            'nombre' => $request->nombre,
            'slug' => $request->slug,
            'variando' => array(
                'var_nombre' => $request->var_name,
                'tamaño' => $request->var_tam,
                'color' => $request->var_color
            )
        ]);

        return redirect()->route('admin.razas.edit', $raza);

    }

    public function show(Request $request)
    {

    }

    public function edit(Raza $raza)
    {
        return view('admin.razas.edit', compact('raza'));
    }

    public function update(Request $request, Raza $raza)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:razas,slug,$raza->id"
        ]);

        $raza->update($request->all());



        return redirect()->route('admin.razas.edit', $raza)->with('info', 'La raza se actualizo con exito');
    }

    public function destroy(Raza $raza)
    {
        $raza->delete();

        return redirect()->route('admin.razas.index')->with('info', 'La raza se elimino con exito');
    }
}
