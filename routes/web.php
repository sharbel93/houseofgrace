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
Route::get('/contact', 'ViewPageController@getContact')->name('contact');
Route::get('/Lords-kitchen', 'ViewPageController@getLordsKitchen')->name('lordskitchen');
Route::get('/senior-pastor', 'ViewPageController@getSeniorPastor')->name('senior-pastor');
Route::get('/ministries/man-power', 'ViewPageController@getManPower')->name('man');
Route::get('/ministries/women-of-worth', 'ViewPageController@getWomenOfWorth')->name('women');
Route::get('/ministries/blast-youth-ministry', 'ViewPageController@getBlastYouth')->name('blast');
Route::get('/ministries/oasis-of-grace-children-ministry', 'ViewPageController@getOasisGrace')->name('oasis');
Route::get('/ministries/throne-room-experience', 'ViewPageController@getThroneRoom')->name('throne');
Route::get('/ministries/grace-groups', 'ViewPageController@getGraceGroups')->name('grace');
Route::get('/ministries/care-&-follow-up', 'ViewPageController@getCareFollowUp')->name('care');
Route::get('/ministries/focus-on-family', 'ViewPageController@getFocusFamily')->name('focus');
Route::get('/programmes/the-journey', 'ViewPageController@getTheJourney')->name('journey');
Route::get('/programmes/leave-&-cleave', 'ViewPageController@getLeaveandCleave')->name('leave');
Route::get('/programmes/serve-the-lord', 'ViewPageController@getServetheLord')->name('serve');

