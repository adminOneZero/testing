<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class profilesController extends Controller
{
    //
    public function __construct()
  {
      $this->middleware('auth');
  }

  public function profile(){
    // return view('edit', compact('task'));
    // dd(Auth::user()->avatar);
    return view('profile',['user' => Auth::user() ]);
    // return veiw('profile');
    // compact('user',User::user);
  }


}
