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
//    return view('welcome');
    return 'Hello fucker';
});

Route::get('/admin', function () {
    return 'admin page';
});

Route::get('/butts/{id}/{name}', function ($id, $name) {
    return 'Here is the id: ' . $id . ' and the name: ' . $name;
});

Route::get('/example/admin', array('as' => 'admin.home', function () {
    $url = route('admin.home');
    return 'this URL is: ' . $url;
}));

Route::get('/checking/{id}', '\App\Http\Controllers\PostsController@index' );

Route::get('/contact', '\App\Http\Controllers\PostsController@contact');

Route::get('posts/{id}/{name}', '\App\Http\Controllers\PostsController@show_post');

//Route::resource('posts', '\App\Http\Controllers\PostsController');
