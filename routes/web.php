<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\Suggetions\SuggetionController;
use App\Http\Controllers\RequestController;


use App\Http\Controllers\PostController;
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
    Route::get('/add-grand-mother', [HomeController::class, 'addgrandmother'])->name('addgrandmother');
    Route::post('/store-grand-mother', [HomeController::class, 'storegrandmother'])->name('storegrandmother');
    Route::get('/add-father', [HomeController::class, 'addfather'])->name('addfather');
    Route::post('/store-father', [HomeController::class, 'storefather'])->name('storefather');
    Route::get('/add-mother', [HomeController::class, 'addmother'])->name('addmother');
    Route::post('/store-mother', [HomeController::class, 'storemother'])->name('storemother');
    Route::get('/add-wife', [HomeController::class, 'addwife'])->name('addwife');
    Route::post('/store-wife', [HomeController::class, 'storewife'])->name('storewife');
    Route::get('/add-brother', [HomeController::class, 'addbrother'])->name('addbrother');
    Route::post('/store-brother', [HomeController::class, 'storebrother'])->name('storebrother');
    Route::get('/add-child', [HomeController::class, 'addchild'])->name('addchild');
    Route::post('/store-child', [HomeController::class, 'storechild'])->name('storechild');
    Route::get('/add-sister', [HomeController::class, 'addsister'])->name('addsister');
    Route::post('/store-sister', [HomeController::class, 'storesister'])->name('storesister');
    Route::get('/family-member', [FamilyController::class, 'familylist'])->name('familymember');
    Route::get('/add-member', [FamilyController::class, 'addmember'])->name('addmember');
    Route::post('/memberstore', [FamilyController::class, 'memberstore'])->name('member.store');
    Route::get('/you-have', [HomeController::class, 'youhave'])->name('youhave');
    Route::get('/you-have-brother', [HomeController::class, 'youhavebrother'])->name('you.have.brother');
    Route::get('/you-have-sister', [HomeController::class, 'youhavesister'])->name('you.have.sister');
    Route::get('/you-have-child', [HomeController::class, 'youhavechild'])->name('you.have.child');
    Route::get('/commentstore', [PostController::class, 'commentstore'])->name('post.comment.store');
    Route::resource('post', PostController::class);


    // Suggestins

    Route::get('/suggetions', [SuggetionController::class, 'suggetions'])->name('suggetions');
    Route::get('Request-Sent', [RequestController::class, 'request_sent'])->name('request_sent');
    Route::get('Delete-Request', [RequestController::class, 'delete_request'])->name('delete_request');
    Route::get('Approve-Request', [RequestController::class, 'approve_request'])->name('approve_request');
    // End Suggestins

});

// admin route
Route::group(['middleware' => 'is_admin','prefix'=>"admin"], function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');

});
