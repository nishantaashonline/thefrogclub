<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::group(['middleware' => ['auth','profile']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');



});
// profile complete route
Route::group(['middleware' => ['auth']], function () {

    Route::post('/basic_profile_update', [HomeController::class, 'basic_profile_update'])->name('basic_profile_update');
    Route::get('/basic-profile', [HomeController::class, 'basicprofile'])->name('basicprofile');
    Route::get('/add-grand-father', [HomeController::class, 'addgrandfather'])->name('addgrandfather');
    Route::post('/store-grand-father', [HomeController::class, 'storegrandfather'])->name('storegrandfather');
    Route::get('/add-father', [HomeController::class, 'addfather'])->name('addfather');
    Route::post('/store-father', [HomeController::class, 'storefather'])->name('storefather');
    Route::get('/add-mother', [HomeController::class, 'addmother'])->name('addmother');
    Route::post('/store-mother', [HomeController::class, 'storemother'])->name('storemother');

});

// admin route
Route::group(['middleware' => 'is_admin','prefix'=>"admin"], function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

});
