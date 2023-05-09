<?php

namespace App\Http\Controllers;

use App\Models\FullItems;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('nav.contact');
    }

    public function blog()
    {
        // $images = FullItems::where('path', 'LIKE', '%images/%')->get(); // get only the images by checking the path column
        // // return view('images', compact('images'));
        // dd($images);
        return view('nav.blog');
    }
}
