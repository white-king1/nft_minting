<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function makeDeposit(){
        return view('user.deposit');
    }


    public function depositDetails(Request $request){
        $dpt = new Deposit();
        $dpt->user_id = Auth::user()->id;
        $dpt->account_number = $request->account_number;
        $dpt->deposit_amount = $request->deposit_amount;
        $dpt->crypto_currency = $request->crypto_currency;

        $dpt->save();

        // if ($dpt->save()) {
        //    $all_dpts= Wallet::where('account_number',$request->account_number)->first();
        //    $all_dpts->balance += $dpt->deposit_amount;
        //    $all_dpts->save();
        //     return redirect()->route('make.depositPayment')->with('flash_message', 'Your deposit Was Successfull.')->with('flash_type', 'alert-success');
        // }

       return view ('user.make_deposit_payment')->with('flash_message', 'Your deposit Was Successfull.')->with('flash_type', 'alert-success');
       ;
    }

    public function makeDepositPayment(){
        return view('user.make_deposit_payment');
    }

    // public function justRecievedDeposit($id)
    // {

    //     $justdept = Deposit::where('id', $id)->first();

    //     $now = User::find($justdept->user_id);

    //     if ($justdept->status == 'recieved') {


    //         $insidewallet = Wallet::where('user_id', $id)->first();
    //         $insidewallet->increment('balance', $justdept->deposit_amount);
    //         $insidewallet->save();

    //         $justdept->status = 'received';
    //         $justdept->save();



    //         return view('user.deposit_successful');
    //     }

    //     return back()->with(['error' => 'Transaction cannot be updated']);
    // }

    public function depositSuccessful(){

        $dptdetails = Deposit::where('user_id', Auth::user()->id)->latest()->first();
        return view('user.deposit_successful', compact('dptdetails'));
    }
}
