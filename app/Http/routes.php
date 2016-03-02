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

Theme::set('absis-hero');

Route::get('/','HeroController@index');

Route::get('/login',function(){
	return view('main.login');
});

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

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::group(['middleware'=>'setTheme:ab-theme'], function() {
//     // ... Add your routes here 
//     // The ADMIN_THEME will be applied.

//     Route::get('/', function () {
//     	return view('index');
// 	});
// });

Route::group(['prefix' => 'admin', 'middleware'=>['web']], function() {
    // ... Add your routes here 
    // The ADMIN_THEME will be applied.

    Route::get('/',function(){
    	return "admin nih";
    });
});

Route::group(['prefix' => 'guru', 'middleware'=>['web']], function() {
    // ... Add your routes here 
    // The ADMIN_THEME will be applied.

    Route::get('/',function(){
    	return "guru nih";
    });
});

Route::group(['prefix' => 'tu', 'middleware'=>['web']], function() {
    // ... Add your routes here 
    // The ADMIN_THEME will be applied.

    Route::get('/',function(){
    	return "tu nih";
    });
});

Route::group(['prefix' => 'ortu', 'middleware'=>['web']], function() {
    // ... Add your routes here 
    // The ADMIN_THEME will be applied.

    Route::get('/',function(){
    	return "siswa nih";
    });
});

Route::group(['prefix' => 'siswa', 'middleware'=>['web']], function() {
    // ... Add your routes here 
    // The ADMIN_THEME will be applied.

    Route::get('/',function(){
    	return "siswa nih";
    });
});
