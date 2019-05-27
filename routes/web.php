<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
});

Route::get('/', function () {
    return view('auth.login');
});

// Login routes
Route::get('/login', 'Auth\LoginController@login');
Route::post('/loginPost', 'Auth\LoginController@loginPost');
Route::get('/logout', 'LoginController@logout');
// Route::get('/home', function () {
//     return view('home');
// });

//create change
Route::get('createNewChange', function(){
    return view('app.createchange');
});
Route::get('attachmentsList', function(){
    return view('app.attachmentsList');
});


Route::get('summernotes', function(){
    return view('summernote');
});


//tools
Route::get('/tools', function(){
  return view('tools.tools1');
});
Route::post('ed', 'EDecryptController@encrypt');
