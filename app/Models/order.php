<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class order extends Model
{
    use HasFactory;

    public function resto(): BelongsTo{
        return $this-> belongsTo(restaurent::class,"resto_id");
    }

    public function user(): BelongsTo{
        return $this-> belongsTo(User::class,"user_id");
    }
}