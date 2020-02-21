<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use App\Mail\ProductMailer;
use Image;
use Mail;

class ProductController extends Controller
{
   public function __construct()
   {
     $this->middleware('verified');
   }
   function product_insert(Request $request)
   {
    $request->validate([
    'product_name'         => 'required',
    'product_price'        => 'required | numeric',
    'product_quantity'     => 'required | numeric',
    'product_category'     => 'required',
    'product_subcategory'  => 'required',
    'product_description'  => 'required',
    'product_brand'        => 'required',
    'product_activation'   => 'required',
    'featured_photo'       => 'required',
    'child_photo1'         => 'required',
    'child_photo2'         => 'required',
    'child_photo3'         => 'required',
    'form_checked'         => 'required'
    ]);

      $last_inserted_id =   Product::insertGetId([
        'product_name'         =>$request->product_name,
        'product_price'        =>$request->product_price,
        'product_quantity'     =>$request->product_quantity,
        'product_category'     =>$request->product_category,
        'product_subcategory'  =>$request->product_subcategory,
        'product_description'  =>$request->product_description,
        'product_brand'        =>$request->product_brand,
        'product_activation'   =>$request->product_activation,
        'featured_photo'       =>$request->featured_photo,
        'child_photo1'         =>$request->child_photo1,
        'child_photo2'         =>$request->child_photo2,
        'child_photo3'         =>$request->child_photo3,
        'form_checked'         =>$request->form_checked,
        'created_at'           =>Carbon::now()
      ]);

     if($request->hasFile('featured_photo'))
     {
       $photo_upload = $request->featured_photo;
       $photo_extension = $photo_upload->getClientOriginalExtension();
       $photo_name = "ECOM_feature_" . $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/products/'.$photo_name),100);
       Product::find($last_inserted_id)->update([
         'featured_photo'    => $photo_name,
       ]);
     }
     if($request->hasFile('child_photo1'))
     {
       $photo_upload = $request->featured_photo;
       $photo_extension = $photo_upload->getClientOriginalExtension();
       $photo_name = "ECOM_child_photo1_" . $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/products/'.$photo_name),100);
       Product::find($last_inserted_id)->update([
         'child_photo1'    => $photo_name,
       ]);
     }
     if($request->hasFile('child_photo2'))
     {
       $photo_upload = $request->featured_photo;
       $photo_extension = $photo_upload->getClientOriginalExtension();
       $photo_name = "ECOM_child_photo2_" . $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/products/'.$photo_name),100);
       Product::find($last_inserted_id)->update([
         'child_photo2'    => $photo_name,
       ]);
     }
     if($request->hasFile('child_photo3'))
     {
       $photo_upload = $request->featured_photo;
       $photo_extension = $photo_upload->getClientOriginalExtension();
       $photo_name = "ECOM_child_photo3_" . $last_inserted_id . "." . $photo_extension;
       Image::make($photo_upload)->resize(800,600)->save(base_path('public/uploads/products/'.$photo_name),100);
       Product::find($last_inserted_id)->update([
         'child_photo3'    => $photo_name,
       ]);
     }

     $product_name = $request->product_name;
     $product_price = $request->product_price;
     $product_quantity = $request->product_quantity;
     $product_category = $request->product_category;
     $product_subcategory = $request->product_subcategory;


     Mail::to('spu.rahman@gmail.com')->send(new ProductMailer($product_name,$product_price,$product_quantity,$product_category,$product_subcategory));



    return back()->withProduct('Product Added Successfully');
   }


    // END
}
