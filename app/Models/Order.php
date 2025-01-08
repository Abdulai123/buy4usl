<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'ref',
        'user_id',
        'shein_url',
        'price_from_shein',
        'price_in_nle',
        'total_cost',
        'delivery_type',
        'delivery_cost',
        'status',
        'address',
        'product_images',
    ];

}
