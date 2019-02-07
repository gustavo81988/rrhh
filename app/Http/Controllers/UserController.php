<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\user;
use App\Company;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        abort_if(Auth::user()->role != 'admin',403);
        $user = auth()->user();
        if($user->role != 'admin'){
            $users  = DB::table('users')->select('*')
              ->where('id', '=', $user->id)
              ->get();
        }else{
            $users  = DB::table('users')->select('users.*')
              ->join('users_companies', 'users.id', '=', 'users_companies.user_id')
              ->where('users_companies.company_id', '=', session('company'))
              ->get();
        }

        return view('users.index',compact('users'));
    }

    public function create(){
        abort_if(Auth::user()->role != 'admin',403);
        $companies = Company::all();
        return view('users.create',compact('companies'));
    }

    public function store(StoreUser $request){
        abort_if(Auth::user()->role != 'admin',403);
        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        DB::table('users_companies')->insert(
            ['user_id' => $user->id, 'company_id' => request('company_id')]
        );
        return redirect()->route('user.index');
    }

    public function edit(User $user){
        abort_if(Auth::user()->role != 'admin',403);
        return view('users.edit', [
            'user'=> $user
        ]);
    }

    public function update(UpdateUser $request, User $user){
        abort_if(Auth::user()->role != 'admin',403);
        $user->update($request->validated());
        return redirect()->route('user.index');
    }

    public function destroy(User $user){
        abort_if(Auth::user()->role != 'admin',403);
        $active = !($user->active);
        $user->update(['active' => $active]);
        return back();
    }
}
