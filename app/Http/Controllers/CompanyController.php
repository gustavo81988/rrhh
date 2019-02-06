<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Auth::user()->role != 'admin',403);
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Auth::user()->role != 'admin',403);

        Company::create($request->all());
        return back();
    }

    public function user(){
        $companies = Company::all();
        return view('companies.user',compact('companies'));
    }

    public function register(Request $request){

        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        DB::table('users_companies')->insert(
            ['user_id' => $user->id, 'company_id' => request('company_id')]
        );
        return back();
    }

    public function select(Request $request){
        session(['company' => request('company_id')]);
        return back();
    }

    public function addForm(User $user){
        abort_if(Auth::user()->role != 'admin',403);
        $companies = Company::all();
        return view('companies.add',[
            'companies' => $companies,
            'user' => $user,
        ]);
    }

    public function add(Request $request){
        abort_if(Auth::user()->role != 'admin',403);
        DB::table('users_companies')->insert(
            ['user_id' => $request->user_id, 'company_id' => $request->company_id]
        );
        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}