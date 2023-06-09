<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Selection;
use App\Models\Plat;
use App\Models\Entree;
use App\Models\Dessert;
use App\Models\Restaurent;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model

{
    use HasFactory;

    public function selections(): BelongsToMany
    {
        return $this->belongsToMany(Selection::class,"item_selection");
    }

    public function entree(): BelongsTo{
        return $this-> BelongsTo(Entree::class,"entree_id");
    }

    public function plat(): BelongsTo{
        return $this-> BelongsTo(Plat::class,"plat_id");
    }

    public function dessert(): BelongsTo{
        return $this-> BelongsTo(Dessert::class,"dessert_id");
    }

    public function resto(): BelongsTo{
        return $this-> BelongsTo(Restaurent::class,"resto_id");
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'resto_id',
    ];

}


