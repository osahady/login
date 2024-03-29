<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

 

    return view('welcome');
    
    // if(Auth::check()){
    //     return "the user is logged in";
    // }

    // $username = 'osahady@gmail.com';
    // $password = 'doyouknow';
    // if (Auth::atempt(['username'=>$username, 'password'=>$password])) {
    //     return redirect()->intended('/admin');
    // }

    // Auth::logout();
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware' =>['role', 'auth', 'web'],  function(){
    return "Middleware role";
}]);

// Route::get('/admin/user/roles',   function(){
//     return "Middleware role";
// })->middleware('role', 'auth');

Route::get('/admin', 'AdminController@index');