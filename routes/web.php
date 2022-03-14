<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('hello', function (){
    return "hello my friends";
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/goodbye/{name?}', function ($name=null) {
    $x = "Good Bye " . $name;
    return $x;
});


Route::view('/myView','pages.myView');

Route::prefix('prefix')->group(function (){
    Route::get('example1',function (){
       return "صفحه فرضی اول";
    });
    Route::get('example2',function (){
       return "صفحه فرضی دوم";
    });
});

Route::get('/users',[UserController::class,'index']);
Route::post('users',[UserController::class, 'create']);
Route::get("show/{id}", [UserController::class, 'showID']);

Route::resource('posts', PostController::class);

