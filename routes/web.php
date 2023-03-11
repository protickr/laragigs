<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/hello', function(){
//    return response('<h1>Hello world!</h1>', 200)->header('Content-Type', 'text/html');
//});
//
//Route::get('/posts/{id}', function ($id){
//    return response("posts {$id}");
//})->where('id', '[0-9]+');

// dump and die
//Route::get('/posts/{id}', function ($id){
//    dd($id);
//})->where('id', '[0-9]+');

// dump die and debug
//Route::get('/posts/{id}', function ($id){
//    ddd($id);
//})->where('id', '[0-9]+');

// Request object
//Route::get('/search', function (Request $request){
////    dd($request);
//    return response("{$request->name} {$request->city}");
//});

// all listing
Route::get('/', function(){
   return view('listings', [
       "heading"=>"latest listings",
       "listings"=> Listing::all()
   ]);
});

//// single listing find
//Route::get('/listings/{id}', function($id){
//    return view('listing', [
//        "listing" => Listing::find($id)
//    ]);
//});

// route model binding
Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
    // returns 404 view if record not found in listings tables
});
