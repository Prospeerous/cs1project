<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    // Define the relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Define the relationship with the Order model
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
