<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;   
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('users.signin')->with('message','註冊成功~');
        
    }
    public function getSignin()
    {
        return view('users.signin');
    }
    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'phone' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) 
        {
            return redirect('/diningmethod')->with('message','登入成功!!');
        }
        return redirect()->back()->with('error','電話or密碼錯誤!!');
        
    }
    public function getProfile()
    {
        return view('users.profile');
    }
    public function getLogout()
    {
        Auth::logout();
    }
}
