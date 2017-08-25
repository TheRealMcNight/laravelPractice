<?php

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


    /* gets returns the var values based on url
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user ' . $name . ' with and id of ' . $id;         
    });
    */

/* Another method to change view pages
Route::get('/about', function(){
    return view('pages.about');         
    });

Route::get('/services', function(){
    return view('pages.services');         
    });
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
