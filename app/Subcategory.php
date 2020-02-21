<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
   use softDeletes;
   protected $fillable = ['subcategory_name'];
}
