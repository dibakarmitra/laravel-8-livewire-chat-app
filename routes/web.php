<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', \App\Http\Livewire\ChatBox::class)->name('home');
    Route::get('/signout', function () {
        Auth::logout();
        return redirect(route('home'));
    })->name('signout');
});

Route::get('/', function () {
    return redirect(route('home'));
});

Route::group(['middleware' => 'guest'], function () {

    Route::get('/signin', \App\Http\Livewire\Auth\Signin::class)->name('login');

    Route::get('/signup', \App\Http\Livewire\Auth\Signup::class)->name('signup');
});

// Temp---

Route::get('/mc', \App\Http\Livewire\Chat\MessageCreate::class)->name('mc');
Route::get('/ms', \App\Http\Livewire\Chat\MessageShow::class)->name('ms');
