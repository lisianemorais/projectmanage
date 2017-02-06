<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/**
 * Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'

	Route::post('oauth/access_token', function(){
	return Response::json(Authorizer::issueAccessToken());
/ /Route::group(['middleware'=>'oauth'], function(){

});

]);
*/

//Route::group([ 'prefix'=>'admin', 'middleware'=>'auth'], function(){
 

//Route::get('/',  'ProjectController@home' );

Route::get('/', ['middleware' => 'auth', 'uses' => 'ProjectController@home' ]);


Route::group(['prefix'=>'clientes', 'middleware'=>'auth'], function(){
	Route::get(''            , ['as' => 'clientes.index'  , 'uses' => 'ClientesController@index']  );
	Route::post(''           , ['as' => 'clientes.store'  , 'uses' => 'ClientesController@store']   );
	Route::get('/{id}'       , ['as' => 'clientes.edit'   , 'uses' => 'ClientesController@show'] );
	Route::get('destroy/{id}', ['as' => 'clientes.destroy', 'uses' => 'ClientesController@destroy']  );
	Route::put('update/{id}' , ['as' => 'clientes.update' , 'uses' => 'ClientesController@update']);
});



Route::group(['prefix'=>'projetos','middleware'=>'auth'], function(){
	Route::get(''            , ['as' => 'projetos.index'  , 'uses' => 'ProjectController@index']  );
	Route::post(''           , ['as' => 'projetos.store'  , 'uses' => 'ProjectController@store']   );
	Route::get('/{id}'       , ['as' => 'projetos.edit'   , 'uses' => 'ProjectController@show'] );
	Route::get('destroy/{id}', ['as' => 'projetos.destroy', 'uses' => 'ProjectController@destroy']  );
	Route::put('update/{id}' , ['as' => 'projetos.update' , 'uses' => 'ProjectController@update']);
});

//Route::resource('clientes', 'ClientesController', [ 'except'=>['create']]);



Route::post('projetos/{id}/arquivo' , 'ArquivosProjectController@store'   );

Route::group(['prefix'=>'users'], function(){
	Route::get(''            , ['as' => 'users.index'  , 'uses' => 'UsersController@index']  );
	Route::post(''           , ['as' => 'users.store'  , 'uses' => 'UsersController@store']   );
	Route::get('/{id}'       , ['as' => 'users.edit'   , 'uses' => 'UsersController@show'] );
	Route::get('destroy/{id}', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']  );
	Route::put('update/{id}' , ['as' => 'users.update' , 'uses' => 'UsersController@update']);
});

Route::get('auth/login' , 'Auth\AuthController@getLogin');
Route::post('auth/login' , 'Auth\AuthController@postLogin');
Route::get('auth/logout' , ['as'=>'auth.logout', 'uses'=> 'Auth\AuthController@getLogout']);

Route::get('auth/register' , 'Auth\AuthController@getRegister');
Route::post('auth/register' , 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('recuperar-senha', 'Auth\PasswordController@getEmail');
Route::post('recuperar-senha', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('resetar-senha/{token}', 'Auth\PasswordController@getReset');
Route::post('resetar-senha/', 'Auth\PasswordController@postReset');




