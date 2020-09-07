<?php

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

Route::get('/', function () {
    return view('index');

});


Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);


Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/hotels',['as'=>'admin.hotels','uses'=>'HotelController@index']);
    Route::get('/admin/hotels/adicionar',['as'=>'admin.hotels.adicionar','uses'=>'HotelController@adicionar']);
    Route::post('/admin/hotels/salvar',['as'=>'admin.hotels.salvar','uses'=>'HotelController@salvar']);
    Route::get('/admin/hotels/editar/{id}',['as'=>'admin.hotels.editar','uses'=>'HotelController@editar']);
});
