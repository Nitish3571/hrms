<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



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

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    // return view('dashboard.dashboard');
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('dashboard',function()
    {
        return view('dashboard.dashboard');
    });
    Route::get('dashboard',function()
    {
        return view('dashboard.dashboard');
    });
});

// Auth::routes();

// // -----------------------------login----------------------------------------//
// Route::controller(LoginController::class)->group(function () {
//     Route::get('/login', 'login')->name('login');
//     Route::post('/login', 'authenticate');
//     Route::get('/logout', 'logout')->name('logout');
// });




Route::get('/login', "App\Http\Controllers\LoginController@login")->name('login');
Route::post('/login', "App\Http\Controllers\LoginController@authenticate");
// Route::get('/login', "App\Http\Controllers\Auth\LoginController@login")->name('login');
