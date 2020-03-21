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

Route::get('ID/{id}',function($id) {
    echo 'ID: '.$id;
 });

 Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

 Route::get('role',[
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
 ]);

 Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
 ]);

 Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
 ]);

 Route::get('/usercontroller/path',[
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
 ]);

 Route::resource('my','MyController');

 class MyClass{
    public $foo = 'bar';
 }
 Route::get('/myclass','ImplicitController@index');

 Route::get('/foo/bar','UriController@index');

 Route::get('/register',function() {
    return view('register');
 });
 Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

 Route::get('/cookie/set','CookieController@setCookie');
 Route::get('/cookie/get','CookieController@getCookie');

 Route::get('/basic_response', function () {
    return 'Hello World';
 });

 Route::get('/header',function() {
    return response("Hello", 200)->header('Content-Type', 'text/html');
 });

 Route::get('/cookie',function() {
    return response("Hello", 200)->header('Content-Type', 'text/html')
       ->withcookie('name','Jordi Garriga');
 });

 Route::get('json',function() {
    return response()->json(['name' => 'Jordi Garriga', 'state' => 'Spain']);
 });

 Route::get('/test', ['as'=>'testing',function() {
    return view('test2');
 }]);
 
 Route::get('redirect',function() {
    return redirect()->route('testing');
 });

 Route::get('/test2', function() {
    return view('test2');
 });

 Route::get('rr','RedirectController@index');
 
 Route::get('/redirectcontroller',function() {
     return redirect()->action('RedirectController@index');
 });