<?php

namespace App\Http\Controllers;

use App\Models\FullItems;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $items = FullItems::all();
        $cart = session()->get('cart', []);
        $cartitems = count($cart);
        $filteritemsonly10 = $items->random(10);
        return view('welcome',compact('items','filteritemsonly10','cartitems'));
    }

    public function profile()
    {
        $registration = Registration::all();
        return view('pages.profile',compact('registration'));
    }

    public function profileedit(Registration $registration, $id)
    {
        $registration = Registration::findOrFail($id);
        return view('edit', compact('registration'));
    }

    public function FAQ()
    {
        return view('_partials._FAQs');
    }
}
