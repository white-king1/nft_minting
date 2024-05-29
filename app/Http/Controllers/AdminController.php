<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('user.admin_dashboard');
    }
}
