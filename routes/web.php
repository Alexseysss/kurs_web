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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});
Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function () {
        Route::post('/', 'StoreController')->name('post.like.store');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Putevka', 'prefix' => 'putevkas'], function () {
        Route::get('/', 'IndexController')->name('admin.putevka.index');
        Route::get('/create', 'CreateController')->name('admin.putevka.create');
        Route::post('/', 'StoreController')->name('admin.putevka.store');
        Route::get('/{putevka}', 'ShowController')->name('admin.putevka.show');
        Route::get('/{putevka}/edit', 'EditController')->name('admin.putevka.edit');
        Route::patch('/{putevka}', 'UpdateController')->name('admin.putevka.update');
        Route::delete('/{putevka}', 'DeleteController')->name('admin.putevka.delete');
    });
    Route::group(['namespace' => 'Room', 'prefix' => 'rooms'], function () {
        Route::get('/', 'IndexController')->name('admin.room.index');
        Route::get('/create', 'CreateController')->name('admin.room.create');
        Route::post('/', 'StoreController')->name('admin.room.store');
        Route::get('/{room}', 'ShowController')->name('admin.room.show');
        Route::get('/{room}/edit', 'EditController')->name('admin.room.edit');
        Route::patch('/{room}', 'UpdateController')->name('admin.room.update');
        Route::delete('/{room}', 'DeleteController')->name('admin.room.delete');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });
});

Route::group(['namespace' => 'Client', 'prefix' => 'client', 'middleware' => ['auth', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('client.main.index');
    });
    Route::group(['namespace' => 'Putevka', 'prefix' => 'putevkas'], function () {
        Route::get('/', 'IndexController')->name('client.putevka.index');
        Route::get('/create', 'CreateController')->name('client.putevka.create');
        Route::post('/', 'StoreController')->name('client.putevka.store');
        Route::get('/{putevka}', 'ShowController')->name('client.putevka.show');
        Route::get('/{putevka}/edit', 'EditController')->name('client.putevka.edit');
        Route::patch('/{putevka}', 'UpdateController')->name('client.putevka.update');
    });
    Route::group(['namespace' => 'Room', 'prefix' => 'rooms'], function () {
        Route::get('/{room}', 'ShowController')->name('client.room.show');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/{user}', 'ShowController')->name('client.user.show');
        Route::get('/{user}/edit', 'EditController')->name('client.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('client.user.update');
    });
    Route::group(['namespace' => 'Liked', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('client.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('client.liked.delete');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function () {
        Route::get('/', 'IndexController')->name('client.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('client.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('client.comment.update');
        Route::delete('/{comment}', 'DeleteController')->name('client.comment.delete');
    });
});





/*
Route::get('/', function () {
    return view('welcome');
});

*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
