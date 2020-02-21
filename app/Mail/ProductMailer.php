<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $product_name = " ";
     public $product_price   = " ";
     public $product_quantity = " ";
     public $product_category = " ";
     public $product_subcategory = " ";

    public function __construct($product_name,$product_price,$product_quantity,$product_category,$product_subcategory)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
        $this->product_category = $product_category;
        $this->product_subcategory = $product_subcategory;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $product_name = "";
         $product_price   = " ";
         $product_quantity = " ";
         $product_category = " ";
         $product_subcategory = " ";
        return $this->view('email.productmailer', compact('product_name', 'product_price', 'product_quantity', 'product_category', 'product_subcategory'));
    }
}
