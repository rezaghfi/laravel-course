<?php

use App\Http\Controllers\PostsController;
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
    return view('welcome');
});

Route::get('/post/{id}', function($id){
    $x = "hello" . $id;
    return $x;
});


Route::get("index", [PostsController::class, 'index']);
Route::get("reza", 'App\Http\Controllers\PostsController@reza');
Route::get("show/{id}", [PostsController::class, 'showMyView']);

