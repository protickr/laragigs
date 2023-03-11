<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // all listings
     public function index(){
         return view('listings.index', [
             "heading"=>"latest listings",
             "listings"=> Listing::all()
         ]);
     }

     // single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
        // returns 404 view if record not found in listings tables
    }
}
