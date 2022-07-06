<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{


    //
    public function regist(){
        return view('regist/regist');
    }

    public function registuser(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'employee' => $request->employee,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password), 
        ]);

        return redirect('/');
    }

    public function loginprocess(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        return redirect('/');
      }
/*
    public function loginprocess(Request $request){
        $email= $request->post('email');
        $password = $request->post('password');
        $user = User::where([['email',$email],['password', $password]]);
        if($user!=null){
            return redirect('dashboard', compact('user'));
        }
        return redirect('/');
    }
*/
    public function logoutprocess(){
        Auth::logout();
        return redirect('/');
    }
}


