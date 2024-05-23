<?php

namespace App\Http\Controllers;

use App\ArtImage;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function wallet(){
        $artCount = ArtImage::count();

        return view('user.wallet', compact('artCount'));
    }


    public function adminWallet(){
        $artCount = ArtImage::count();

        return view('user.admin_wallet', compact('artCount'));
    }


}
