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
        $post = Post::all();
        $cekkosong = ' ';
        $recommendpost = ' ';
        if($post->isEmpty()){
            $cekkosong = 'kosong';
        }else{
            $recommendpost = Post::all()->random(1);
        }
        return view('layouts.main', compact('recommendpost','post','cekkosong'));
    }
    public function UserProfile(){
        return view('profile');
    }
    public function UserExplore(){
        return view('explore');
    }

}
