<?php

namespace App\Http\Controllers;

use App\ArtImage;
use App\User;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    public function allUsers()
    {
        $usercount = User::where('usertype', 'user')->count();
        $artCount = ArtImage::count();


        $all_users = User::where('usertype','user')->latest()->get();
        return view('user.all_users', compact('all_users', 'usercount', 'artCount'));
    }

    public function deleteUsers($id)
    {
          $user = User::find($id);
          $user->delete();
          return redirect()->route('all.users');
    }

    public function restrictUsers($id)
    {
          $user = User::find($id);
          $user->status ='restricted';
          $user->save();
          return redirect()->route('all.users');
    }
}
