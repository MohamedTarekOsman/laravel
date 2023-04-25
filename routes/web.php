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


//make controller in cmd ==> php artisan make:controller controllerName

// Route::get('/', function () {
//     return '<h1>welcome</h1>';
// });


// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return '<h1>welcome</h1>' . $id ." ".$name;
// });


Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/features', 'App\Http\Controllers\PagesController@features');
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::get('/media', 'App\Http\Controllers\MediaController@index');
Route::post('/media', 'App\Http\Controllers\MediaController@store');
Route::delete('/media/{id}', 'App\Http\Controllers\MediaController@destroy');
Route::get('/media/upload', 'App\Http\Controllers\MediaController@create');
Route::get('/media/{id}', 'App\Http\Controllers\MediaController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
