<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'variando'];

    protected $casts = [
                        'variando' => 'array'
                        ];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion uno a muchos

    public function viajes()
    {
        return $this->hasMany(Viaje::class);
    }

    public function variante()
    {
        return $this->belongsTo(Variante::class);
    }

    //Relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
