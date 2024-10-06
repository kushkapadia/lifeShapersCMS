<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function login(Request $request){
       $incomingFields = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
       ]);
     
    //    if(auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password'] ])){
    //         $request->session()->regenerate();
    //    }else{
    //     return redirect('/');
    //    }

  $user = User::create($incomingFields);
  auth()->login($user);
  return redirect('/');
    
    }

    public function logout(Request $request){
        auth()->logout();
        return redirect('/');
    }
}
