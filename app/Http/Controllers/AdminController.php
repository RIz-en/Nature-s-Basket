<?php

namespace App\Http\Controllers;

use App\Models\FullItems;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $fruitcount = FullItems::where('category', 'Exotic-Fruit')->count();
        $vegetablecount = FullItems::where('category', 'Vegetables')->count();
        $users = User::all();
        $subscriptionscount = Newsletter::count();
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            return view('admin.dashboard', compact('fruitcount', 'vegetablecount', 'users', 'subscriptionscount'));
        }
    }
}
