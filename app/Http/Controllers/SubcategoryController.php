<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use Carbon\Carbon;

class SubcategoryController extends Controller
{
   function subcat_create(Request $request)
   {
      $request->validate([
        'subcategory_name' => 'required',
      ]);


      Subcategory::insert([
       'subcategory_name'  =>$request->subcategory_name,
       'created_at'        =>Carbon::now(),
     ]);
     return back()->withSub('Subcategory Added');
   }

}
