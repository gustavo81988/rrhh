<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getCompaniesAttribute()
    {
        $companies  = DB::table('companies')->select('companies.id','companies.name')
          ->join('users_companies', 'companies.id', '=', 'users_companies.company_id')
          ->where('users_companies.user_id', '=', $this->id)
          ->get()->pluck('name','id')->toArray();
        return $companies;
    }

    public function getCompanyAttribute()
    {
        $company  = session('company');
        return $company;
    }
}
