<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('pages.Dashboard.user.show');
    }
    public function edit()
    {
        return view('pages.Dashboard.user.edit');
    }
}
