<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get all of the Users for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get all of the Foods for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Foods()
    {
        return $this->hasMany(Food::class);
    }
}
