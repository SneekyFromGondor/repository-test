<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Raza;

class Navigation extends Component
{
    public function render()
    {
        $razas = Raza::all();

        return view('livewire.navigation', compact('razas'));
    }
}
