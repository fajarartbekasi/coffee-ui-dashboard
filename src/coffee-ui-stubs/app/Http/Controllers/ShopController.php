<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('pages.Dashboard.shop.index');
    }
    public function show()
    {
        return view('pages.Dashboard.shop.show');
    }
    public function create()
    {
        return view('pages.Dashboard.shop.checkout');
    }
}
