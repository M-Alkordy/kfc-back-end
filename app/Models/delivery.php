<?php

namespace App\Models;

use App\Models\order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_lat',
        'location_lng',
        'phone',
        'nick_name',
        'name_card',
        'card-num',
        'expiration_date',
        'cvv',
        'zip_code'
    ];

    public function orderDelivery(): HasMany
    {
        return $this->hasMany(order::class);
    }
}