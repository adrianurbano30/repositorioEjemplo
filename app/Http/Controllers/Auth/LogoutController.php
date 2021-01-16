<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Broadcasting\auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
   public function store(){
   	auth()->logout();
   	return redirect()->route('inicio');
   }
}
