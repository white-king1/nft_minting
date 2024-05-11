<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MintController extends Controller
{
    public function mintMyArts(){
        return view('user.mint');
    }
}
