<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model
use App\Post;
use App\User;

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
        $userinformation = auth()->user();

        //POST
        $post = Post::all();
        $cekpost = ' ';
        $recommendpost = ' ';
        if($post->isEmpty()){
            $cekpost = 'kosong';
        }else{
            $recommendpost = Post::all()->random(1);
        }

        //USER
        $user = User::where('id', '!=', $userinformation->id)->get();
        $cekuser = ' ';
        $recommenduser = ' ';
        if($user->isEmpty()){
            $cekuser = 'kosong';
        }else if(count($user) < 5){
            $cekuser = 'kosong';
        }else{
            $recommenduser = $user->random(5);
        }


        return view('layouts.main', compact('recommendpost', 'post', 'cekpost', 'cekuser', 'recommenduser'));
    }
    public function UserProfile(){
        $userinfo = auth()->user();

        //Menghitung jumlah post
        $post = Post::where('user_id', '=', $userinfo->id)->get();
        
        return view('profile', compact('post'));
    }
    public function UserExplore(){
        return view('explore');
    }

}
