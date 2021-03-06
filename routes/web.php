<?php

Route::get('/', ['middleware' =>'guest', function(){
  return view('auth.login');
}]);

Auth::routes();

Route::get('/pro',function(){
  return view('pro');
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

    Route::get('/home','HomeController@index')->name('home');

    Route::resource('company', 'CompanyController')->except([
        'show'
    ]);

    Route::resource('user', 'UserController')->except([
        'show'
    ]);

    Route::post('/company/register', 'CompanyController@register')->name('company.register');
    Route::post('/company/destroyuser/{user}/{company}', 'CompanyController@destroyuser')->name('company.destroyuser');
    Route::get('/company/user'    , 'CompanyController@user')->name('company.user');
    Route::get('/company/add/{user}' , 'CompanyController@addForm')->name('company.addform');
    Route::post('/company/add' , 'CompanyController@add')->name('company.add');

    Route::post('/company/select','CompanyController@select')->name('company.select');

});
