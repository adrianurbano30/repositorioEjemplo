<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Contracts\Broadcasting\auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard');
    }
}
