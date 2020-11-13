<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('layouts.main');
    }
    public function UserProfile(){
        return view('profile');
    }
    public function UserExplore(){
        return view('explore');
    }

}
