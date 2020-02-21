<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'product_name',
      'product_price',
      'product_quantity',
      'product_category',
      'product_subcategory',
      'product_description',
      'product_brand',
      'product_activation',
      'featured_photo',
      'child_photo1',
      'child_photo2',
      'child_photo3',
      'form_checked'
    ];
}
