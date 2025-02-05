<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'color', 'category_id', 'system', 'status', 
        'front_port', 'display_size', 'product_size', 
        'package_size', 'net_weight', 'gross_weight', 
        'quantity', 'rating', 'image'
    ];
}

