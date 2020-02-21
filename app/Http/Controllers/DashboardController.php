<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Brand;

class DashboardController extends Controller
{
    // middleware

    public  function __construct()
    {
      $this->middleware('auth');
      $this->middleware('verified');
    }

    // dashboard_index

    function dashboard_index()
    {
     return view('dashboard.homepage.dashboard_index');
    }
    // add_product
     function add_product()
     {
       $categories = Category::all();
       $subcategories = Subcategory::all();
       $brands = Brand::all();
       return view('dashboard.product.add_product', compact('categories', 'subcategories', 'brands'));
     }
    // END
}
