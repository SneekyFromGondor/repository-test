<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Viaje;

use Livewire\WithPagination;

class ViajesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $viajes = Viaje::where('destino', 'LIKE','%' . $this->search . '%')
                        ->latest('id')
                        ->paginate();

        return view('livewire.admin.viajes-index', compact('viajes'));
    }
}
