<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Item;
class Restaurent extends Model
{
    use HasFactory;

    public function orders(): HasMany{
        return $this-> hasMany(Order::class,"resto_id");
    }

    public function resas(): HasMany{
        return $this-> hasMany(Reservation::class,"resto_id");
    }

    public function selection(): HasMany{
        return $this-> hasMany(Selection::class,"selection_id");
    }

    public function items(): HasMany{
        return $this-> hasMany(Item::class,"selection_id");
    }

    protected $fillable = [
        'nom',
        'ville',
        'adresse',
        'horaireDebut',
        'horaireFin',
        'numero',
        'localisation',
        'image'
    ];
}
