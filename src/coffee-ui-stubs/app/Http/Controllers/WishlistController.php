<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function show()
    {
       return view('pages.Dashboard.shop.wishlist');
    }
}
