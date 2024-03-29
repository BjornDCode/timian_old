<?php

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
    return view('home');
});

Auth::routes();

Route::post('/stripe/webhook', 'StripeWebhooksController@handleWebhook');

Route::get('/plans', 'SubscriptionsController@index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::post('/subscribe', 'SubscriptionsController@create');
Route::get('/subscribed', 'SubscriptionsController@subscribed');
