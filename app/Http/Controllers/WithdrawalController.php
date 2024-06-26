<?php

namespace App\Http\Controllers;

use App\AdminWithdrawal;
use App\Deposit;
use App\User;
use App\Wallet;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function makeWithdrawal()
    {
        return view('user.make_withdrawal');
    }

    public function withdrawalDetails(Request $request)
    {
        if (Auth::user()->wallet->balance <= $request->withdrawal_amount) {
            return redirect()->back()->with('flash_message', 'You have insufficient Balance .')
                ->with('flash_type', 'alert-success');
        } else {
            $wtd = new Withdrawal();
            $wtd->crypto_currency = $request->crypto_currency;
            $wtd->user_id = Auth::user()->id;

            $wtd->wallet_address = $request->wallet_address;
            $wtd->account_number = $request->account_number;
            $wtd->withdrawal_amount = $request->withdrawal_amount;
            $wtd->save();

            if ($wtd->save()) {
                $all_wtds = Wallet::where('account_number', $request->account_number)->first();
                $all_wtds->balance -= $wtd->withdrawal_amount;
                $all_wtds->save();
                return redirect()->route('make.withdrawalPayment')->with('flash_message', 'Successfull Withdrawal.')->with('flash_type', 'alert-success');
            }

            return view('user.make_withdrawal_payment', compact('all_wtds'));
        }
    }

    public function makeWithdrawPayment()
    {
        return view('user.make_withdrawal_payment');
    }

    public function withdrawalInProgress()
    {

        $wtdetails = Withdrawal::where('user_id', Auth::user()->id)->latest()->first();
        return view('user.withdrawal_in_progress', compact('wtdetails'));
    }

    public function adminWithdrawal()
    {
        return view('user.admin_withdrawal');
    }

    public function adminwithdrawalDetails(Request $request)
    {

            $adminwtd = new AdminWithdrawal();
            $adminwtd->account_number = $request->account_number;
            $adminwtd->adminwithdrawal_amount = $request->adminwithdrawal_amount;
            $adminwtd->save();

            if ($adminwtd->save()) {
                $all_adminwtds = Wallet::where('account_number', $request->account_number)->first();
                $all_adminwtds->balance -= $adminwtd->adminwithdrawal_amount;
                $all_adminwtds->save();
                return redirect()->back()->with('flash_message', 'Your Withdrawal Was Successfull.')->with('flash_type', 'alert-success');
            }

            return view ('user.admin_withdrawal',compact('all_adminwtds'));

    }

    public function allWithdrawals()
    {
        $user = User::latest()->get();
        $all_withdrawals = Withdrawal::latest()->get();
        $all_deposits = Deposit::latest()->get();


        return view('user.all_withdrawals', compact('all_withdrawals', 'user', 'all_deposits'));
    }

    public function paidWithdrawals($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->status = 'paid';
        $withdraw->save();
        return redirect()->route('all.withdrawals');
    }



    public function recievedDeposit($id)
{
    $dept = Deposit::find($id);

    if (!$dept) {
        return redirect()->route('all.withdrawals')->with('error', 'Deposit record not found.');
    }

    if ($dept->status == 'pending') {
        $insidewallet = Wallet::where('user_id', $dept->user_id)->first();

        if (!$insidewallet) {
            return redirect()->route('all.withdrawals')->with('error', 'Wallet not found.');
        }

        $insidewallet->increment('balance', $dept->deposit_amount);

        $dept->status = 'recieved';
        $dept->save();

        return redirect()->route('all.withdrawals')->with('success', 'Deposit received and wallet balance updated.');
    }

    return redirect()->route('all.withdrawals')->with('error', 'Deposit is not pending.');
}



}
