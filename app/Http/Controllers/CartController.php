<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FullItems;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function productstocart(FullItems $items, Request $request)
    {
        $items = FullItems::all();
        // $filterfruits = FullItems::where('category','Exotic-Fruit')->paginate(10, ['*'], 'fruits');
        // $filterveggie = FullItems::where('category','Vegetables')->paginate(10, ['*'], 'vegetables');
        $filterfruits = FullItems::where('category','Exotic-Fruit')->get();
        $filterveggie = FullItems::where('category','Vegetables')->get();
        return view('cart.productstocart', compact('items', 'filterfruits', 'filterveggie'));
    }

    public function hello(FullItems $items)
    {
        $items = FullItems::all();
        $filterfruits = FullItems::where('category','Exotic-Fruit')->get();
        // dd($filterfruits);
        $filterveggie = FullItems::where('category','Vegetables')->get();
        return view('##', compact('items', 'filterfruits', 'filterveggie'));
    }

    public function cartstore(FullItems $items, Request $request)
    {
        $items = [
            'id' => $request->input('item_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'quantity' => $request->input('quantity'),
            'filename' => $request->input('filename'),
        ];
        // dd($items);
        $cart = session()->get('cart', []);

        if (isset($cart[$items['id']]) && isset($cart[$items['id']]['quantity'])) {
            $cart[$items['id']]['quantity'] += $request->input('quantity');
        } else {
            $cart[$items['id']] = [
                'id' => $items['id'],
                'name' => $items['name'],
                'category' => $items['category'],
                'price' => $items['price'],
                'filename' => $items['filename'],
                'quantity' => $request->input('quantity'),
            ];
        }
        session()->put('cart', $cart);

        return back()->with('success',"Added to Cart");
        // return response()->json(['success' => true]);
    }

    public function cart(FullItems $items)
    {
        $items = FullItems::all();
        $cart = session()->get('cart', []);
        $cartitems = count($cart);
        // dd($cartitems);
        $totalprice = 0;
        foreach ($cart as $product) {
            $totalprice += ($product['price'] * $product['quantity']);
        }
        session(['totalprice' => $totalprice]);

        return view('cart.cart', compact('items', 'cartitems', 'totalprice'), ['cart' => $cart]);
    }

    public function cartclear()
    {
        session()->forget('cart');
        return redirect()->route('cart')->with('success', 'Your cart has been cleared.');
    }
}
