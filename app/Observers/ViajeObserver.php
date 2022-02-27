<?php

namespace App\Observers;

use App\Models\Viaje;

use Illuminate\Support\Facades\Storage;

class ViajeObserver
{
    public function created(Viaje $viaje)
    {
        //
    }

    public function deleted(Viaje $viaje)
    {
        if($viaje->image())
        {
             Storage::delete($viaje->image->url);
        }
    }
}
