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

    $obj = new \stdClass();

    $obj->name = 'ahmed';
    $obj->id = 5;
    $obj->gender = 'male';
    return view('welcome');
    //return view('welcome', compact('obj'));

});

Route::get('index', 'Front\UserController@getIndex');


Route::get('/testo/{id}', function ($id) {
    return 'dddd'.$id;
});

// id? if you don't set id, this will show default return string
Route::get('/test2/{id?}', function ($id) {
    return 'dddd'.$id;
});

Route::get('/welcome', function () {
    return 'Welcome';
})->name('page1');

Route::get('/hello', function () {
    return 'Hello';
})->name('page2');



Route::namespace('Front')->group(function(){
    Route::get('users', 'UserController@showUserName');
});
/*
Route::prefix('users')->group(function(){
    // *** Route::get('users/show', 'UserController@showUserName');
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
});

Route::group(['prefix' => 'users'], function(){
    Route::get('show', 'UserController@showUserName');
    Route::delete('delete', 'UserController@showUserName');
    Route::get('edit', 'UserController@showUserName');
    Route::put('update', 'UserController@showUserName');
});

Route::get('check', function(){
    return 'middleware';
})->middleware('auth');
*/
//Route::get('second', 'Admin\SecondController@showString');

Route::group(['namespace' => 'Admin'], function(){
    Route::get('second', 'SecondController@showString');
    Route::get('second1', 'SecondController@showString1');
    Route::get('second2', 'SecondController@showString2');
    Route::get('second3', 'SecondController@showString3');
});

// Auth
/*Route::get('users', 'UserController@index')->middleware('auth');*/
/* //Auth
Route::group(['middleware' => 'auth'], function(){
    Route::get('users', 'UserController@index');
});
*/

Route::get('login', function(){
    return 'Must be login to access this Route';
})->name('login');


Route::resource('news', 'NewsController');



Route::get('/about', function () {   
    return view('about');
});