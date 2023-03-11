<?php

use App\Http\Controllers\ListingController;
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

//// single listing find
//Route::get('/listings/{id}', function($id){
//    return view('listing', [
//        "listing" => Listing::find($id)
//    ]);
//});

// all listing
Route::get('/', [ListingController::class, 'index']);

// route model binding
Route::get('/listings/{listing}', [ListingController::class, 'show']);
