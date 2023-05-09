<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function checkout()
    {
        $VAT_value = 0.00;
        $Delivery_charge = 50.00;
        $cart = session()->get('cart', []);
        $cartitems = count($cart);

        $totalprice = 0;
        foreach ($cart as $product) {
            $totalprice += ($product['price'] * $product['quantity']);
        }
        session(['totalprice' => $totalprice]);
        // dd($totalprice);
        return view('checkout.checkoutpage1',['VAT_value'=>$VAT_value,'Delivery_charge'=>$Delivery_charge,'cart'=>$cart],compact('totalprice','cartitems'));
    }
}
