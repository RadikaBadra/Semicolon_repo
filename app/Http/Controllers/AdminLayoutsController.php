<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLayoutsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index(){
        return view('admin');
    }
}
