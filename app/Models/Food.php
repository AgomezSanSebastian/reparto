<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'Foods';

    /**
     * Get the Restaurant that owns the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    /**
     * Get all of the Order_details for the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Order_details()
    {
        return $this->hasMany(Order_details::class);
    }



}
