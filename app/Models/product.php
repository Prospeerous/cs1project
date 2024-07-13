<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'farmer_id',
        'product_name',
        'product_description',
        'product_quantity',
        'product_price',
        'product_category',
        'product_image',
    ];

    // Define the relationship with the Merchant model
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}