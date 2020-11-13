<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\Post;

class UserLayoutsController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('/layouts/main');
    }


    public function UserIndex(){
        $recommendpost = Post::all()->random(1);
        $post = Post::all();
        return view('layouts.main', compact('recommendpost','post'));
    }
    public function UserProfile(){
        return view('profile');
    }
    public function UserExplore(){
        return view('explore');
    }

}
