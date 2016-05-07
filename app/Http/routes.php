<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return redirect('login');
    });
    Route::get('login', function () {
    	$message='';
        return view('login',compact('message'));
    });
    Route::post('login','controller_si_asdos@login');
    Route::get('admin','controller_si_asdos@admin');
    Route::get('mahasiswa','controller_si_asdos@mahasiswa');
    Route::get('mahasiswa/daftar','controller_si_asdos@list_asdos');
    Route::post('mahasiswa','controller_si_asdos@liat_history');
    Route::get('mahasiswa/logout','controller_si_asdos@logout');
    Route::get('admin/logout','controller_si_asdos@logout');
    Route::get('logout','controller_si_asdos@logout');
    Route::post('admin','controller_si_asdos@liat_history');
    Route::post('mahasiswa/daftar','controller_si_asdos@daftar');
    Route::get('admin/get_asdos','controller_si_asdos@list_bakal_asdos');
    Route::any('admin/set_asdos/{id}','controller_si_asdos@menerima_asdos');
});
