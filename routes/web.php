<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Route::get('/', function () {
//     return view('listings', [
//         'listings' => Listing::all()
//     ]);
// });


// Single Listing
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }

// });



// Route::get('/listings/{listing}', function (Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);
// });


//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);


//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
