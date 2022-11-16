<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', [UserController::class, 'show']); */

Route::get('/', function () {
  return redirect('/listings');
});

Route::get('/listings',[ListingController::class, 'index']);

Route::get('/listing/{listing}', [ListingController::class, 'show']);

Route::get('/test', function () {
  return view('test');
});
