<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/awal',function(){
    return view('welcome');
});
Route::get('/homee', function () {
    return view('tamplate.index');
});

Route::get('/home_awal', function () {
    return view('tamplate.home_awal');
});

Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/log',function(){
    return view('admin.loginn');
});

Route::get('/loginn',function(){
    return view('tamplate.loginn');
});
Route::get('/register',function(){
    return view('auth.register');
});
Route::get('/edit',function(){
    return view('admin.edit');
});

Route::get('/trans', function(){
    return view('kasir.form_transaksi');
});

Route::get('/kasir',function(){
    return view('kasir.index');
});

// Route::get('/form_makanan','MakananController@index');
Route::get('/createmakanan/form','MakananController@create');
Route::post('/createmakanan','MakananController@store');
Route::get('/makanan','MakananController@showw');


Route::get('/kasir/daftar_makanan','MakananController@show');

// Route::post('/logiin', 'LoginController@loginSubmit');

Route::get('/edit/{id}','MakananController@edit');
Route::put('/update/{id}','MakananController@update');
Route::get('/hapus/{id}','MakananController@delete_menu');


Route::get('/beli/{id}','MakananController@editt');
Route::put('/updatee/{id}','MakananController@updatee');


// Route::get('/home_user', 'Akun@index');
// Route::get('/login', 'Akun@login');
// Route::post('/loginPost', 'Akun@loginPost');
// Route::get('/register', 'Akun@register');
// Route::post('/registerPost', 'Akun@registerPost');
// Route::get('/logout', 'Akun@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
