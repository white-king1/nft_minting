<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\Wallet;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function makeTransfer(){
        return view('user.make_transfer');
    }

    public function transferDetails(Request $request){
        $tf = new Transfer();
        $tf->account_number = $request->account_number;
        $tf->transfer_amount = $request->transfer_amount;
        $tf->save();

        if ($tf->save()) {
            $all_tfs= Wallet::where('account_number',$request->account_number)->first();
            $all_tfs->balance += $tf->transfer_amount;
            $all_tfs->save();
            return redirect()->back()->with('flash_message', 'Your Transfer Was Successfull.')->with('flash_type', 'alert-success');
        }

       return view ('user.transfer',compact('all_tfs'));
    }
}
