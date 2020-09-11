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

    Route::get('/admin/pessoas',['as'=>'admin.pessoas','uses'=>'PessoaController@index']);
    Route::get('/admin/pessoas/adicionar',['as'=>'admin.pessoas.adicionar','uses'=>'PessoaController@adicionar']);
    Route::post('/admin/pessoas/salvar',['as'=>'admin.pessoas.salvar','uses'=>'PessoaController@salvar']);
    Route::get('/admin/pessoas/editar/{id}',['as'=>'admin.pessoas.editar','uses'=>'PessoaController@editar']);
    Route::put('/admin/pessoas/atualizar/{id}',['as'=>'admin.pessoas.atualizar','uses'=>'PessoaController@atualizar']);
    Route::get('/admin/pessoas/deletar/{id}',['as'=>'admin.pessoas.deletar','uses'=>'PessoaController@deletar']);

    Route::get('/admin/hotels',['as'=>'admin.hotels','uses'=>'HotelController@index']);
    Route::get('/admin/hotels/adicionar',['as'=>'admin.hotels.adicionar','uses'=>'HotelController@adicionar']);
    Route::post('/admin/hotels/salvar',['as'=>'admin.hotels.salvar','uses'=>'HotelController@salvar']);
    Route::get('/admin/hotels/editar/{id}',['as'=>'admin.hotels.editar','uses'=>'HotelController@editar']);    
    Route::put('/admin/hotels/atualizar/{id}',['as'=>'admin.hotels.atualizar','uses'=>'HotelController@atualizar']);
    Route::get('/admin/hotels/deletar/{id}',['as'=>'admin.hotels.deletar','uses'=>'HotelController@deletar']);

    
    Route::get('/admin/municipios',['as'=>'admin.municipios','uses'=>'MunicipioController@index']);
    Route::get('/admin/municipios/adicionar',['as'=>'admin.municipios.adicionar','uses'=>'MunicipioController@adicionar']);
    Route::post('/admin/municipios/salvar',['as'=>'admin.municipios.salvar','uses'=>'MunicipioController@salvar']);
    Route::get('/admin/municipios/editar/{id}',['as'=>'admin.municipios.editar','uses'=>'MunicipioController@editar']);
    Route::put('/admin/municipios/atualizar/{id}',['as'=>'admin.municipios.atualizar','uses'=>'MunicipioController@atualizar']);
    Route::get('/admin/municipios/deletar/{id}',['as'=>'admin.municipios.deletar','uses'=>'MunicipioController@deletar']);
    
    
    Route::get('/admin/users',['as'=>'admin.users','uses'=>'UserController@index']);
    Route::get('/admin/users/adicionar',['as'=>'admin.users.adicionar','uses'=>'UserController@adicionar']);
    Route::post('/admin/users/salvar',['as'=>'admin.users.salvar','uses'=>'UserController@salvar']);
    Route::get('/admin/users/editar/{id}',['as'=>'admin.users.editar','uses'=>'UserController@editar']);
    Route::put('/admin/users/atualizar/{id}',['as'=>'admin.users.atualizar','uses'=>'UserController@atualizar']);
    Route::get('/admin/users/deletar/{id}',['as'=>'admin.users.deletar','uses'=>'UserController@deletar']);
});

