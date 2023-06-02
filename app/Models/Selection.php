<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Item;
use App\Models\Restaurent;


class Selection extends Model
{
    use HasFactory;

    public function resto(): BelongsTo{
        return $this-> belongsTo(Restaurent::class,"resto_id");
    }

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class,"item_selection");
    }

}
