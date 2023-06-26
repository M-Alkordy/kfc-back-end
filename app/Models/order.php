<?php

namespace App\Models;

use App\Models\branch;
use App\Models\customer;
use App\Models\drink;
use App\Models\menuItem;
use App\Models\salad;
use App\Models\sauce;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class order extends Model
{
    use HasFactory;



    public function branches(): HasMany
    {
        return $this->hasMany(branch::class);

    }

    public function customers(): HasMany
    {
        return $this->hasMany(customer::class);
    }

    public function drinks(): BelongsToMany
    {
        return $this->belongsToMany(drink::class, 'drinks_orders_table', 'drinks_id', 'orders_id');
    }
    public function sauces(): BelongsToMany
    {
        return $this->belongsToMany(sauce::class, 'sauces_orders_table', 'sauces_id', 'orders_id');
    }
    public function salads(): BelongsToMany
    {
        return $this->belongsToMany(salad::class, 'salads_orders_table', 'salads_id', 'orders_id');
    }
    public function menuItems(): BelongsToMany
    {
        return $this->belongsToMany(menuItem::class, 'menu_items_orders_table', 'menu_items_id', 'orders_id');
    }
}