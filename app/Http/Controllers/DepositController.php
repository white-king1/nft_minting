<?php

namespace App\Http\Controllers;

use App\Deposit;
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
        $dpt->save();

        if ($dpt->save()) {
           $all_dpts= Wallet::where('account_number',$request->account_number)->first();
           $all_dpts->balance += $dpt->deposit_amount;
           $all_dpts->save();
            return redirect()->route('make.depositPayment')->with('flash_message', 'Your deposit Was Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.make_deposit_payment',compact('all_dpts'));
    }

    public function makeDepositPayment(){
        return view('user.make_deposit_payment');
    }

    public function depositSuccessful(){

        $dptdetails = Deposit::where('user_id', Auth::user()->id)->first();
        return view('user.deposit_successful', compact('dptdetails'));
    }
}
