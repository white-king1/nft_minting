<?php

use App\Http\Controllers\MintController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index' )->name('welcome');

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function () {

});

// USER MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/', 'DashboardController@index')->name('user.dashboard');
    Route::get('/user_wallet', 'WalletController@wallet')->name('user.wallet');
    Route::get('/mint_my_arts', 'MintController@mintMyArts')->name('user.mint');
    Route::get('/upload_arts', 'UploadController@uploadArts')->name('upload.arts');
    Route::post('/post_uploaded_arts', 'UploadController@postUploadedArts')->name('post.uploadedarts');
    Route::get('/art_mint_confrimation','UploadController@mintConfirm')->name('mint.confirm');
    Route::get('/make_payments', 'UploadController@makePayments')->name('make.payments');
    Route::get('/transaction_in_progress', 'UploadController@transactProgress')->name('transact.progress');
    Route::get('/art_collection_details/{id}', 'UploadController@artCollectiondetails')->name('art.collectiondetails');

    Route::get('/multiple_image_page','MultimageController@multImage')->name('multi.image');
    Route::post('/post_multimage_page','MultimageController@postmultImage')->name('postmulti.image');


});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@redirect')->name('redirect');
    Route::get('/admin-dashboard', 'AdminController@admin')->name('admin');
    Route::get('/all_users', 'AllUsersController@allUsers')->name('all.users');
    Route::get('/delete_users/{id}', 'AllUsersController@deleteUsers')->name('delete.users');
    Route::get('/restrict_users/{id}', 'AllUsersController@restrictUsers')->name('restrict.users');



});
