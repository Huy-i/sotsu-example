<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class HomeController extends Controller
{

    public function home()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        $categories=Category::all();

        return view('home.index',compact('user','categories'));
    }
}
