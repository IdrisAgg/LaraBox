<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Specialisation extends Model
{
    use HasFactory;

    public function resto(): HasMany{
        return $this-> hasMany(Restaurent::class,"resto_id");
    }

    protected $fillable = [
        'nom',
        'tempsXp',
    ];
}
