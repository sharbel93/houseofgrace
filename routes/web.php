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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ViewPageController@getIndex');
Route::get('/about', 'ViewPageController@getAbout')->name('about');
Route::get('/ministries', 'ViewPageController@getMinistries')->name('ministries');
Route::get('/departments', 'ViewPageController@getDepartments')->name('departments');
Route::get('/programmes', 'ViewPageController@getProgrammes')->name('programmes');
Route::get('/blog', 'ViewPageController@getBlog')->name('blog');
Route::get('/contact', 'ViewPageController@getBlog')->name('contact');
Route::get('/Lords-kitchen', 'ViewPageController@getLordsKitchen')->name('lordskitchen');
Route::get('/senior-pastor', 'ViewPageController@getSeniorPastor')->name('senior-pastor');
