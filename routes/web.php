<?php

use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user/subscribe', function (Request $request) {
    $payLink = $request->user()->newSubscription('subtwo', $premium = 15822)
        ->returnTo(route('dashboard'))
        ->create();

    return view('billing', ['payLink' => $payLink]);
});

Route::get('/user', function (Request $request) {
    $subscription = $request->user()->subscription('subtwo');

    return view('user', ['subscription' => $subscription]);
})->name('user');

require __DIR__.'/auth.php';
