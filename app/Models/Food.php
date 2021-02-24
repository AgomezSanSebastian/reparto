<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    /**
     * Get the Restaurant that owns the Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }



}
