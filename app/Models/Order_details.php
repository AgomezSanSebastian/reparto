<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;

    protected $table = 'Order_details';

    /**
     * Get all of the Orders for the Order_details
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Get all of the Foods for the Order_details
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Foods()
    {
        return $this->hasMany(Food::class);
    }

    /**
     * Get the Food that owns the Order_details
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Food()
    {
        return $this->belongsTo(Food::class, 'food_id');
    }
}
