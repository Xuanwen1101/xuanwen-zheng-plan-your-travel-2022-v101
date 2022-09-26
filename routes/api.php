<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\Plan;
use App\Models\Place;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/plans', function(){

  $plans = Plan::orderBy('created_at')->get();

  foreach ($plans as $key => $plan) {
    $plans[$key]['user'] = User::where('id', $plan['user_id'])->first();
  }

  return $plans;

});

// dynamic route for plan content
Route::get('/plans/{plan}', function(Plan $plan){

  $plan['content'] = User::where('id', $plan['id'])->first();

  return $plan;

});

Route::get('/places', function(){

  $places = Place::orderBy('created_at')->get();

  foreach ($places as $key => $place) {
    $places[$key]['user'] = User::where('id', $place['user_id'])->first();
    $places[$key]['plan'] = Plan::where('id', $place['plan_id'])->first();
  }

  return $places;

});

// dynamic route for place content
Route::get('/places/{place}', function(Place $place){

  $place['user'] = User::where('id', $place['id'])->first();

  return $place;

});


