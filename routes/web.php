<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukapController;

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

// Route::get('/', function () {
  //     return view('welcome');
  // });
  
Route::resource('file','File');
Auth::routes();
//route dashboard
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function(){

// Route::resource('users', UserController::class, ['except' => ['create', 'edit']]); 
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//route admin produk beans
Route::get('/adminproduk', 'ProdukController@indexbeans');
Route::post('/adminproduk', 'ProdukController@store');
Route::get('/adminproduk/detail/{produk}', 'ProdukController@show');
// Route::post('/adminproduk/detail/{produk}', 'ProdukController@show');
Route::get('/adminproduk/detail/{produk}/edit', 'ProdukController@edit');
Route::patch('/adminproduk/detail/{produk}', 'ProdukController@update');
Route::get('/adminproduk/detail/{produk}/delete', 'ProdukController@destroy');
//
//route admin produk apparel
Route::get('/adminprodukap', 'ProdukapController@indexapparel');
Route::post('/adminprodukap', 'ProdukapController@store');
Route::get('/adminprodukap/detail/{produkap}', 'ProdukapController@show');
// Route::post('/adminprodukap/detail/{produkap}', 'ProdukapController@show');
Route::get('/adminprodukap/detail/{produkap}/edit', 'ProdukapController@edit');
Route::patch('/adminprodukap/detail/{produkap}', 'ProdukapController@update');
Route::get('/adminprodukap/detail/{produkap}/delete', 'ProdukapController@destroy');
// Route::delete('/pengurus-harian/detail/{leader}', 'LeadersController@destroy'); bajak method agar aman dari delete via url

//route dashboard masukan
Route::get('/masukan', 'CommentsController@index');
});

//route front pengunjung
Route::get('/', 'IndexController@Index');
Route::post('/', 'CommentsController@store');
Route::get('/beranda', 'IndexController@index');
Route::get('/menu', 'MenuController@menu');
Route::get('/produkbeans', 'ProdukController@berandabeans');
Route::get('/produkapparel', 'ProdukapController@berandaapparel');
Route::get('/produkbeans/{produkdetail}', 'DetailController@detailproduct');
Route::get('/produkapparel/{produkdetail}', 'DetailController@detailproductap');
Route::get('/kontak', 'ContactController@kontak');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
