<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;

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
    return view('laravel1.welcome');
})->name('');

//Route::get('route1', function () {
//    return view('route1');
//})->name('route1');

//Route::get('route1/{Name?}', function($Name=NULL) {
//    echo $Name;
//    return view('route1', compact("Name"));
//})->name('route1');

Route::get('route1/{Name?}', 'RouteController@naming')->name('route1');

Route::get('route1_post', 'RouteController@naming_index')->name('route1_post_index');
Route::post('route1_post', 'RouteController@naming_redirect')->name('route1_post');
Route::get('route1_post/{Name}', 'RouteController@naming_post')->name('route1_post_name');

Route::get('route2_post', 'RouteController@naming2_index')->name('route2_post');
Route::post('route2_post', 'RouteController@naming2_redirect')->name('route2_redirect');

Route::get('route3_post/{Name?}', 'RouteController@naming3_index')->name('route3_post');
Route::post('route3_post', 'RouteController@naming3_redirect')->name('route3_redirect');

//Route::get('route_views', function () {
//    DB::table('views')->increment('count', 1);
//    $views_count = App\Views::all();
//    $usernames = App\RandomUsers::all();
////    $random_users = App\RandomUsers::generate();
//    return view('route_views', compact('views_count', 'usernames'));
//})->name('route_views');

Route::get('route_views', 'RouteController@viewing')->name('route_views');
