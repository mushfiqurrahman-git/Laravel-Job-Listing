<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//All listings

Route::get('/',[ListingController::class,'index']);

//show create form

Route::get('/listings/create',[ListingController::class,'create']);


//Store listing data
Route::post('/listings',[ListingController::class,'store']);

//Show Edit form

Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Update edit form
Route::put('/listings/{listing}',[ListingController::class,'update']);

//Delete listing 
Route::delete('/listings/{listing}',[ListingController::class,'destroy']);
//Single Listing

Route::get('/listings/{listing}',
[ListingController::class,'show']);


