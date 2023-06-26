<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pickup extends Model
{
    use HasFactory;


    public function orderPickup(): HasMany
    {
        return $this->hasMany(order::class);
    }

}