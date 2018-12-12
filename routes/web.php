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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ViewPageController@getIndex');
Route::get('/about', 'ViewPageController@getAbout')->name('about');
Route::get('/departments', 'ViewPageController@getDepartments')->name('departments');
// Blog
Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@getIndex')->name('blog');
    Route::get('/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('/category/{category}','BlogController@getCategories')->name('category');
    Route::get('/tag/{tag}','BlogController@getTag')->name('tag');
});


// Comments
Route::prefix('comments')->group(function() {
    Route::post('/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
});
//Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
//Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
//Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
//Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
//Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

Route::get('/contact', 'ViewPageController@getContact')->name('contact');
Route::get('/Lords-kitchen', 'ViewPageController@getLordsKitchen')->name('lordskitchen');
Route::get('/senior-pastor', 'ViewPageController@getSeniorPastor')->name('senior-pastor');
Route::post('/contact_form', 'ViewPageController@getContactEmail')->name('contactform');

Route::prefix('ministries')->group(function() {
    Route::get('/', 'ViewPageController@getMinistries')->name('ministries');
    Route::get('/man-power', 'ViewPageController@getManPower')->name('man');
    Route::get('/women-of-worth', 'ViewPageController@getWomenOfWorth')->name('women');
    Route::get('/blast-youth-ministry', 'ViewPageController@getBlastYouth')->name('blast');
    Route::get('/oasis-of-grace-children-ministry', 'ViewPageController@getOasisGrace')->name('oasis');
    Route::get('/throne-room-experience', 'ViewPageController@getThroneRoom')->name('throne');
    Route::get('/grace-groups', 'ViewPageController@getGraceGroups')->name('grace');
    Route::get('/care-&-follow-up', 'ViewPageController@getCareFollowUp')->name('care');
    Route::get('/focus-on-family', 'ViewPageController@getFocusFamily')->name('focus');
});


Route::prefix('programmes')->group(function() {
    Route::get('/', 'ViewPageController@getProgrammes')->name('programmes');
    Route::get('/the-journey', 'ViewPageController@getTheJourney')->name('journey');
    Route::get('/leave-&-cleave', 'ViewPageController@getLeaveandCleave')->name('leave');
    Route::get('/serve-the-lord', 'ViewPageController@getServetheLord')->name('serve');
});

Route::group(['prefix' => 'manage', 'middleware' =>
    ['auth','role:superadministrator|administrator|editor|author|contributor']], function() {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('admin.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' =>
        'destroy']);
    Route::resource('/roles', 'RoleController', ['except' =>
        'destroy']);
    Route::resource('/posts', 'PostController');
// Categories
    Route::resource('/categories','CategoryController', ['except' =>'create']);

//tags
    Route::resource('/tags','TagController', ['except' =>'create']);
});

