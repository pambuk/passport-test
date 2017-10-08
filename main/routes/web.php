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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cow', function () {
    $cow = \Cowsayphp\Farm::create(\Cowsayphp\Farm\Cow::class);
    echo '<pre>'.$cow->say('Howdy!').'</pre>';
});

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 3,
        'redirect_uri' => 'http://passport-test.app/auth/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://passport-test.app/oauth/authorize?'.$query);
});
