<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guests;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Guests::orderBy('id', 'desc')->get();
        $data = array('students'=>$user, 'instructors'=>'hadi', 'instituitions'=>'itb');
        return response()->view('home', $data, 200);
    }
}
