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

use Ixudra\Curl\Facades\Curl;

Route::get('/', function () {
    $args = ['rate' => 0];

    $response = Curl::to('https://www.bitstamp.net/api/v2/ticker/btcusd')
        ->asJson()
        ->get();

    if(array_key_exists('last', $response))
    {
        $args = ['rate' => $response->last];
    }
    return view('welcome', $args);
});
