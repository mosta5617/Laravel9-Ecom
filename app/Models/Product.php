<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_short_desc',
        'product_long_desc',
        'product_price',
        'product_quantity',
        'product_category_name',
        'product_subcategory_name',
        'product_image',
        'product_category_id',
        'product_subcategory_id',
        'slug',
    ];
}
