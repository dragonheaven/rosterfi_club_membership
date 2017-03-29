<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', function() {
    return Redirect::to('/');
});

Route::get('/', function () { return view('home'); });
Auth::routes();
Route::get('/validate-email', function () { return view('auth/validate_email'); });
Route::get('/validate/{id}/{emailValidation}', 'AccountController@validateemail');

Route::group(['middleware' => ['app']], function () {
    Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
    Route::get('/account/settings', 'AccountController@settings')->middleware('auth');
    Route::post('/account/settings', 'AccountController@update')->middleware('auth');
    Route::post('/account/changepassword', 'AccountController@changepassword')->middleware('auth');
});

//User images
Route::get('/userimages/{filename}', function ($filename)
{
    $path = storage_path() . '/app/user_images/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//User Clubs - temporary


Route::get('/myclub', function() {
    return view('club/myclub')->with('page', 'Welcome');
});

Route::get('/myaccount', function () {
   return view('account/myaccount')->with('page', 'myaccount');
});

Route::get('/configclub', function () {
   return view('club/configclub')->with('page', 'clubs');
});

Route::get('/configevent', function () {
   return view('event/configevent')->with('page', 'events');
});



Route::get('/social/{provider}', 'AccountController@redirectToProvider');
Route::get('/social/{provider}/callback', 'AccountController@handleProviderCallback');