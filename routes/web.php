<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
//use App\Http\Controllers\ProductController;


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

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     //Route::resource('products', ProductController::class);
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('week','WeekController');
Route::resource('leader','LeaderInformationController');
Route::resource('note','NoteController');
Route::resource('user','UsersController');
Route::resource('users','UserController');
