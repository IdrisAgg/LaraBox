<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Item extends Model

{
    use HasFactory;

    public function selections(): BelongsToMany
    {
        return $this->belongsToMany(Selection::class,"select_id");
    }

    public function entree(): BelongsTo{
        return $this-> belongsTo(Entree::class,"entree_id");
    }

    public function plat(): BelongsTo{
        return $this-> belongsTo(Plat::class,"plat_id");
    }

    public function dessert(): BelongsTo{
        return $this-> belongsTo(Dessert::class,"dessert_id");
    }

}


