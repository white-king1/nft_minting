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
    Route::get('/list_of_art_collection', 'UploadController@listOfArtCollection')->name('list.collection');
    Route::get('/multiple_image_page','MultimageController@multImage')->name('multi.image');
    Route::post('/post_multimage_page','MultimageController@postmultImage')->name('postmulti.image');
    Route::get('/withdrawal', 'WithdrawalController@makeWithdrawal')->name('make.withdrawal');
    Route::post('/withdrawal_details', 'WithdrawalController@withdrawalDetails')->name('withdrawal.details');
    Route::get('/make_withdrawal_payment', 'WithdrawalController@makeWithdrawPayment')->name('make.withdrawalPayment');
    Route::get('/withdrawal_in_progress', 'WithdrawalController@withdrawalInProgress')->name('withdrawal.inprogress');


    Route::get('/deposit', 'DepositController@makeDeposit')->name('make.deposit');
    Route::post('/deposit_details', 'DepositController@depositDetails')->name('deposit.details');
    Route::get('/make_deposit_payment', 'DepositController@makeDepositPayment')->name('make.depositPayment');
    Route::get('/deposit_in_progress', 'DepositController@DepositSuccessful')->name('deposit.successful');
    Route::post('/just_recieved_deposit/{id}', 'DepositController@justRecievedDeposit')->name('just.recieveddeposit');






});

// ADMIN MIDDLEWARE AUTHENTICATION ACCESS ROUTE
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@redirect')->name('redirect');
    Route::get('/admin-dashboard', 'AdminController@admin')->name('admin');
    Route::get('/all_users', 'AllUsersController@allUsers')->name('all.users');
    Route::get('/delete_users/{id}', 'AllUsersController@deleteUsers')->name('delete.users');
    Route::get('/restrict_users/{id}', 'AllUsersController@restrictUsers')->name('restrict.users');
    Route::get('/transfer', 'TransferController@makeTransfer')->name('make.transfer');
    Route::post('/transfer_details', 'TransferController@transferDetails')->name('transfer.details');
    Route::get('/admin_withdrawal', 'WithdrawalController@adminWithdrawal')->name('admin.withdrawal');
    Route::post('/admin_withdrawal_details', 'WithdrawalController@adminwithdrawalDetails')->name('admin.withdrawaldetails');
    Route::get('/admin_withdrawal_successful', 'WithdrawalController@adminWithdrawalSuccessful')->name('admin.withdrawalsuccessful');
    Route::get('/all_withdrawals', 'WithdrawalController@allWithdrawals')->name('all.withdrawals');
    Route::get('/paid_withdrawals/{id}', 'WithdrawalController@paidWithdrawals')->name('paid.withdrawals');
    Route::get('/recieved_deposit/{id}', 'WithdrawalController@recievedDeposit')->name('recieved.deposit');



    Route::get('/admin_wallet', 'WalletController@adminWallet')->name('admin.wallet');
    Route::get('/all_arts_collection_list', 'UploadController@artCollectionList')->name('art.collectionlist');







});
