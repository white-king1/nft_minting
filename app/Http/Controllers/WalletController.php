<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function wallet(){
        return view('user.wallet');
    }
}
