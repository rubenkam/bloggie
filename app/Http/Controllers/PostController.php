<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

  public function index()
  {

    

    $posts = Post::latest()->get();

    return view('posts')->with(compact('posts'));
  }

  public function show($id)
  {

    $post = Post::with('comments')->find($id);
    if (!$post) {
      return abort('404');
    }
    return view('show')->with(compact('post'));
  }


  public function create()
  {
    return view('create');
  }

  public function store()
  {
    // dd(request()->all());

    // $request = request->all();
    //
      // $post = new Post;
    //
    // $post->title = $request->title
    // $post->body = $request->body
    //
    //
    // $post->save();
    if (Auth::user()->role == 0)
        return back();

    $this->validate(request(), [

      'title' => 'required',
      'body' => 'required'

    ]);




    $post = new Post;

    $post->title = request('title');
    $post->body = request('body');
    $post->user_id = Auth::user()->id;

    $post->save();

    // Post::create([
    //   'title' => request('title'),
    //   'body'  => request('body')
    // ]);


    return redirect('/posts');


  }

}
