<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Raza;
use App\Models\Variante;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::where('status', 2)->latest('id')->paginate(8);

        return view('viajes.index', compact('viajes'));
    }

    public function show(Viaje $viaje)
    {
        $similares = Viaje::where('raza_id', $viaje->raza_id)
                            ->where('status', 2)
                            ->where('id', '!=', $viaje->id)
                            ->latest('id')
                            ->take(4)
                            ->get();

        return view('viajes.show', compact('viaje', 'similares'));
    }

    public function raza(Raza $raza)
    {
        $viajes = Viaje::where('raza_id', $raza->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);

        return view('viajes.raza', compact('viajes', 'raza'));
    }

    public function cachorrxs()
    {
        $cachorrxs = Raza::get();
        $vars = Variante::get();

        return view('viajes.cachorrxs', compact('cachorrxs', 'vars'));

    }
}
