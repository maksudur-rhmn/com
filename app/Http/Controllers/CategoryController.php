<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
   function create(Request $request)
   {

    $request->validate([
       'category_name' => 'required',
     ]);

    Category::insert([
      'category_name' =>$request->category_name,
      'created_at'    =>Carbon::now(),
    ]);
    return back()->withSuccess('Category Added');
   }
}
