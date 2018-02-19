<?php
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('install',function(){
	Artisan::call('migrate:refresh',['--seed' => 'default']);
	return redirect('/');
}); 
$router->get('/', 'UserController@manage');
$router->get('api/users', 'UserController@index');
$router->get('api/user/{id}', 'UserController@show');
$router->post('api/update/{update}', 'UserController@store');
$router->delete('api/delete/{id}', 'UserController@destroy');
$router->post('api/store', 'UserController@store');
