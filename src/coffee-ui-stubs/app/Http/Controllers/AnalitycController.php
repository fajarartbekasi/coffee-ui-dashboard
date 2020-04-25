<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalitycController extends Controller
{
    public function index()
    {
        return view('pages.Dashboard.analityc');
    }
}