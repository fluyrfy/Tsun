<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;   
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function getSignup()
    {
        return view('users.signup');
    }
    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $users=new User;
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->password = bcrypt($request->input('password'));
        $users->save();
        return back()->with('message','註冊成功~');
        
    }
}
