<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Entree extends Item
{
    use HasFactory;
    public function restos(): BelongsToMany{
        return $this-> BelongsToMany(Restaurent::class,"resto_id");
    }
}
