<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users  = DB::table('users')->select('users.*')
          ->join('users_companies', 'users.id', '=', 'users_companies.user_id')
          ->where('users_companies.company_id', '=', session('company'))
          ->get();
        return view('users.index',compact('users'));
    }

    public function edit(User $user){
        return view('users.edit', [
            'user'=> $user,
        ]);
    }
}
