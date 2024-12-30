<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{

    // show all listings
    public function index()
    {
        return view('listings.index');
    }

    // show single listing
    public function show()
    {
        return view('listings.show');
    }
}
