<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'merchant_id',
        'product_id',
        'quantity',
        'total',
        'status',
];
    // Define the relationship with the Merchant model
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    // Define the relationship with the Product model
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}