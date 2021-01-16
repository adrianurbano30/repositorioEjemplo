<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserpostController extends Controller
{
    public function index(User $user)
    {
    	$post = $user->post()->with(['user','likes'])->paginate(20);
		return view('users.post.index',compact('user','post'));
    }
}
