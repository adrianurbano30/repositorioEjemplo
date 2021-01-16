<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Broadcasting\auth;
use Illuminate\Http\Request;

class PostController extends Controller
{



  public function index(){

   $post = Post::latest()->with(['user','likes'])->paginate(20);

   return view('post.index',compact('post'));
  }

  public function show(Post $post)
  {
     return view('post.show',compact('post'));
  }

  public function store(Request $request)
  {
      $this->validate($request,[
      'body'=> 'required',
      ]);
      $request->user()->post()->create([
        'body'=>$request->body,
      ]);
      return back();
  }

  public function destroy(Post $post)
  {
      $this->authorize('delete',$post);
     $post->delete();
     return back();
  }
}
