<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@showPage');
    Route::get('/regulament', 'RegulamentController@showPage');
    Route::get('/despre', 'DespreController@showPage');
    Route::get('/editia2016', 'Editia2016@showPage');
    Route::get('/parteneri', 'ParteneriController@showPage');
    Route::get('/contact', 'ContactController@showPage');
    Route::get('/inscrie-te', 'InscrieteController@showPage');
    Route::get('/inscrie-te/{sectiune?}', 'InscrieteController@showPageWith');
    Route::get('/calendar', 'CalendarController@showPage');
    Route::get('/login', 'AuthController@loginView');
    Route::get('/sectiunea-web', 'AuthController@showSectiuneWeb');
    Route::get('/sectiunea-algoritmica', 'AuthController@showSectiuneAlgo');
    Route::get('/sectiunea-gamedev', 'AuthController@showSectiuneGamedev');
    Route::get('/changepass', 'AuthController@showChangePass');
    //Route::get('/algoritmica', 'ParteneriController@showAlgo');
    Route::get('/pages/{page}', 'HomeController@showPages');
    Route::get('/algoritmica', 'AlgoritmicaController@showPage');
	Route::get('/webmobile', 'WebMobileController@showPage');
	Route::get('/gamedev', 'GameDevController@showPage');
   // Route::get('/finala', 'HomeController@finala');
    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/');
    });
    Route::post('/request/saveRepo', 'AuthController@saveRepo');
    Route::post('/requests/apreciaza', 'HomeController@apreciaza');
    Route::post('/requests/sendContact', 'ContactController@send');
    Route::post('/request/inscrie', 'InscrieteController@inscrie');
    Route::post('/request/login', 'AuthController@authenticate');
    Route::post('/request/changepass', 'AuthController@changePass');
    /*
     * Route::get('/testEmail', function() {
        Mail::send('emails.reminder', ['data'=>array()], function ($m) {
            $m->from('fiicode.concurs@gmail.com', 'Your Application');
            $m->to('stoian.ioan.catalin@gmail.com', 'Stoian Catalin')->subject('Your Reminder!');
        });
    });
     */
});
