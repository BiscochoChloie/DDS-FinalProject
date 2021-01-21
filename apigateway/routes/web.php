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
    return view('welcome');
});

$router->group(['middleware' => 'client.credentials'],function () use ($router){

$router->get('/payroll1', 'User1Controller@index');
$router->post('/payroll1', 'User1Controller@create');
$router->get('/payroll1/{id}', 'User1Controller@read');
$router->put('/payroll1/{id}', 'User1Controller@update');
$router->delete('/payroll1/{id}', 'User1Controller@delete');

$router->get('/payroll2', 'User2Controller@index');
$router->post('/payroll2', 'User2Controller@create');
$router->get('/payroll2/{id}', 'User2Controller@read');
$router->put('/payroll2/{id}', 'User2Controller@update');
$router->delete('/payroll2/{id}', 'User2Controller@delete');

});