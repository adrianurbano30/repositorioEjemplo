<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Broadcasting\auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest');
    }

    public function index(){

      return view('auth.register');

    }
    public function store(Request $request)
    {
       $this->validate($request,[
         'name'=> 'required|max:255|min:5',
         'username'=> 'required|max:255|min:5|unique:users,id,'.auth()->id(),
         'email'=> 'required|max:255|email|unique:users,id,'.auth()->id(),
         'password'=> 'required|min:8|confirmed'
       ]);

      User::create([
      'name'=>$request->name,
      'username'=>$request->username,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
      ]);
      auth()->attempt($request->only('email','password'));
      return redirect()->route('dashboardIndex');
    }
}
