<?php

use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return redirect()->route('app.index');
});

Route::group(['namespace' => '\App\Http\Controllers\App'], function () {

    Route::get('/home', 'AppController@index')->name('app.index');

    Route::group(['namespace' => 'Game'], function () {
        Route::get('/games', 'IndexController')->name('app.game.index');;
        Route::get('/games/{game}', 'ShowController')->name('app.game.show');
    });
});

Auth::routes();

Route::group(['namespace' => '\App\Http\Controllers\Auth'], function () {
    Route::get('/login', 'LoginController@index')->name('auth.login.index');
    Route::post('/login', 'LoginController@login')->name('auth.login.post');
    Route::post('/logout', 'LoginController@logout')->name('auth.logout.post');

    Route::get('/register', 'RegisterController@index')->name('auth.register.index');
    Route::post('/register', 'RegisterController@register')->name('auth.register.post');
});


Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::group(['namespace' => 'Game'], function () {
        Route::get('/games', 'IndexController')->name('admin.game.index');
        Route::get('/games/create', 'CreateController')->name('admin.game.create');
        Route::post('/games', 'StoreController')->name('admin.game.store');
        Route::get('/games/edit/{game}', 'EditController')->name('admin.game.edit');
        Route::patch('/games/{game}', 'UpdateController')->name('admin.game.update');
        Route::delete('/games/{game}', 'DestroyController')->name('admin.game.delete');
    });

    Route::group(['namespace' => 'Genre'], function () {
        Route::get('/genres', 'IndexController')->name('admin.genre.index');
        Route::get('/genres/create', 'CreateController')->name('admin.genre.create');
        Route::post('/genres', 'StoreController')->name('admin.genre.store');
        Route::delete('/genres/{genre}', 'DestroyController')->name('admin.genre.delete');
    });

});

