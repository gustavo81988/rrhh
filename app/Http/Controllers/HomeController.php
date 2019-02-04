<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users  = DB::table('users')->select('users.*')
          ->join('users_companies', 'users.id', '=', 'users_companies.user_id')
          ->where('users_companies.company_id', '=', session('company'))
          ->get();
        return view('welcome',compact('users'));
    }
}
