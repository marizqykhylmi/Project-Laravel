<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'color',
        'category',
        'system',
        'power_suply',
        'status',
        'front_port',
        'display_size',
        'product_size',
        'package_size',
        'net_weight',
        'gross_weight',
        'quantity',
        'rating',
        'price',
        'image'
    ];
}