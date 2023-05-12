<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurent extends Model
{
    use HasFactory;

    public function orders(): HasMany{
        return $this-> hasMany(Order::class,"resto_id");
    }

    public function selection(): HasMany{
        return $this-> hasMany(Selection::class,"selection_id");
    }
}
