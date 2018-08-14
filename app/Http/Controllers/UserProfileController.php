<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;

class UserProfileController extends Controller
{

    public function __construct()
{

    $this->middleware('auth');

}
    //
    public function show()
{
    return view('profile', ['user' => Auth::user()] );
}

    public function update_avatar(Request $request){

      if ($request->hasFile('avatar')) {
        # code...
        $avatar = $request->file('avatar');
        $filename = time() .'.'. $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/' . $filename) );

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }
return view('profile', ['user' => Auth::user()] );
}


}
