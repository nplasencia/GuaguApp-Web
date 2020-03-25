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

/* All the routes are affected with the RouteServiceProvider. Rules defined in it:
 *
 * · $id -> Only accepts digits [0-9]+ // [\d+]
 *
 *
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('apps', 'AppController@resume');
Route::get('app/new', 'AppController@create');
Route::get('app/{id}', 'AppController@details');