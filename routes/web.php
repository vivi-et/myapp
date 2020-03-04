<?php
use App\Http\Controllers;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/users/{id}', function($id){
// 	return 'this is user '.$id;
// });

// Route::get('/users/{id}/{name}', function($id, $name){
// 	return 'this is user '.$name.' with an id of '.$id;
// });

Route::get('/', 'PagesController@index');
Route::resource('posts', 'PostsController');
// Route::get('/about','PagesController@about');
// Route::get('/services','PagesController@services');

Route::get('about', function () {
    return view('pages.about');
});

Route::get('make', function () {
    return view('make');
});



Route::get('services', 'PagesController@services');




// Route::get('/{link}', ['uses' => 'PagesController@redirect']);
// Route::post('login', 'LoginController@do')->name('login');
// Route::post('register', 'RegisterController@do')->name('register');

// Route::get('/about', function()
// {
// 	return view('pages.about');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

