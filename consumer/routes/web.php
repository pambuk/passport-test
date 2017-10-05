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
    return view('welcome');
});

Route::get('/get-token', function () {
    $query = http_build_query([
        'client_id' => 6,
        'redirect_uri' => 'http://passport-consumer.app/show-token',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://passport-test.app/oauth/authorize?' . $query);
});

Route::get('/show-token', function (\Illuminate\Http\Request $request) {
    dd($request->input('code'));
});