<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location_lat',
        'location_lng',
    ];

    public function countries(): HasMany
    {
        return $this->hasMany(country::class);
    }
}



