<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Item;

class Plat extends Item
{
    use HasFactory;

    public function item(): BelongsTo{
        return $this->belongsTo(Item::class,"item_id");
    }

    protected $fillable = [
        'gras',
        'lvlPiment',
    ];
}
