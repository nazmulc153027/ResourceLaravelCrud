<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/add-item', ItemController::class);
Route::get('/search', [ItemController::class, 'search']);
// Route::get('/add-item', [SearchController::class, 'autocomplete'])->name('autocomplete');