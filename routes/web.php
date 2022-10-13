<?php


use App\Http\Controllers\ConsoleController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\SearchController;


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



Route::get('/', function () {
    return view('welcome');
});

// Login & Dashboard Routes
Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

// User Routes
Route::get('/console/users/register', [UsersController::class, 'registerForm']);
Route::post('/console/users/register', [UsersController::class, 'register']);

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

// Plan Routes
Route::get('/console/plans/list', [PlansController::class, 'list'])->middleware('auth');
Route::get('/console/plans/add', [PlansController::class, 'addForm'])->middleware('auth');
Route::post('/console/plans/add', [PlansController::class, 'add'])->middleware('auth');
Route::get('/console/plans/edit/{plan:id}', [PlansController::class, 'editForm'])->where('plan', '[0-9]+')->middleware('auth');
Route::post('/console/plans/edit/{plan:id}', [PlansController::class, 'edit'])->where('plan', '[0-9]+')->middleware('auth');
Route::get('/console/plans/delete/{plan:id}', [PlansController::class, 'delete'])->where('plan', '[0-9]+')->middleware('auth');

// Place Routes
Route::get('/console/places/list', [PlacesController::class, 'list'])->middleware('auth');
Route::get('/console/places/add', [PlacesController::class, 'addForm'])->middleware('auth');
Route::post('/console/places/add', [PlacesController::class, 'add'])->middleware('auth');
Route::get('/console/places/edit/{place:id}', [PlacesController::class, 'editForm'])->where('place', '[0-9]+')->middleware('auth');
Route::post('/console/places/edit/{place:id}', [PlacesController::class, 'edit'])->where('place', '[0-9]+')->middleware('auth');
Route::get('/console/places/delete/{place:id}', [PlacesController::class, 'delete'])->where('place', '[0-9]+')->middleware('auth');

// Route::get('/console/places/save/{place_id:google_id}', [PlacesController::class, 'saveForm'])->middleware('auth');
// Route::post('/console/places/save/{place_id:google_id}', [PlacesController::class, 'save'])->middleware('auth');

// Search Routes
Route::get('/console/search/google', [SearchController::class, 'searchPlace'])->middleware('auth');
Route::get('/console/search/list', [SearchController::class, 'list'])->middleware('auth');
Route::get('/console/search/save/{place_id:google_id}', [SearchController::class, 'saveForm'])->middleware('auth');
Route::post('/console/search/save/{place_id:google_id}', [SearchController::class, 'save'])->middleware('auth');