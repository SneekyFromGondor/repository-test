<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Raza;
use App\Models\User;

use App\Http\Requests\ViajeRequest;
use Illuminate\Support\Facades\Storage;

class ViajeController extends Controller
{
    public function index()
    {
        return view('admin.viajes.index');
    }

    public function create()
    {
        $razas = Raza::pluck('nombre', 'id');
        $users = User::pluck('name', 'id');

        return view('admin.viajes.create', compact('razas', 'users'));
    }

    public function store(ViajeRequest $request)
    {
        $viajes = Viaje::create($request->all());

        if($request->file('file'))
        {
            $url = Storage::put('public/viajes', $request->file('file'));

            $viajes->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('admin.viajes.edit', $viajes)->with('info', 'El viaje se cargo con exito');
    }

    public function show(Viaje $viaje)
    {
        return view('admin.viajes.show', compact('viaje'));
    }

    public function edit(Viaje $viaje)
    {
        $razas = Raza::pluck('nombre', 'id');
        $users = User::pluck('name', 'id');

        return view('admin.viajes.edit', compact('viaje', 'razas', 'users'));
    }

    public function update(ViajeRequest $request, Viaje $viaje)
    {
        $viaje->update($request->all());

        if($request->file('file'))
        {
            $url = Storage::put('public/viajes', $request->file('file'));

            if($viaje->image)
            {
                Storage::delete($viaje->image->url);

                $viaje->image->update([
                    'url' => $url
                ]);
            }
            else
            {
                $viaje->image()->create([
                'url' => $url
            ]);
            }
        }

        return redirect()->route('admin.viajes.edit', $viaje)->with('info', 'El viaje se actualizo con exito');
    }

    public function destroy(Viaje $viaje)
    {
        $viaje->delete();

        return redirect()->route('admin.viajes.index', $viaje)->with('info', 'El viaje se elimino con exito');
    }
}
