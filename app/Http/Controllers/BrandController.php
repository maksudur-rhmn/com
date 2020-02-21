<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Carbon\Carbon;
class BrandController extends Controller
{

    function brand_create(Request $request)
    {
      $request->validate([
        'brand_name' => 'required',
      ]);

      Brand::insert([
        'brand_name'    =>$request->brand_name,
        'created_at'    =>Carbon::now(),
      ]);
      return back()->withBrand('Brand name added');
    }
}
