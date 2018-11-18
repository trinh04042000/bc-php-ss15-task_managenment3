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

Route::prefix('customer')->group(function () {
    //Route::get('index', function () {

        //return view('modules.index');
    //});

    //Route::get('create', function () {
         //return view('modules.xem');
    //});
    //Route::get('create1', function () {
        //return view('modules.xem1');
    //})->name('xem1');


    //Route::get('create2', function () {
        //return view('modules.xem2');
    //})->name('xem2');


    //Route::get('create3', function () {
        //return view('modules.xem3');
    //})->name('xem3');

    //Route::get('create4', function () {
        //return view('modules.xem4');
    //})->name('xem4');


    //Route::get('create5', function () {
        //return view('modules.repair');
    //})->name('repair');


    //Route::get('delete', function () {
        //return view('modules.delete');
    //})->name('delete');

    Route::get('index', 'CustomerController@index');

    Route::get('create', 'CustomerController@create');

    Route::post('store', 'CustomerController@store');

    Route::get('{id}/show', 'CustomerController@show');

    Route::get('{id}/edit', 'CustomerController@edit');

    Route::patch('{id}/update', 'CustomerController@update');

    Route::delete('{id}', 'CustomerController@destroy');

});