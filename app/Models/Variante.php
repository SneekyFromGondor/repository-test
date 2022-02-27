<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'raza_id'];

   public function razas()
    {
        return $this->hasMany(Raza::class);
    }
}
