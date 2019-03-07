<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' => 'Api'], function () {
    Route::group([
        'namespace' => 'Auth',
        'prefix' => 'auth'
    ], function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    });
    Route::group([
        //'middleware' => 'auth:api'
    ], function () {
        Route::get('/bills', 'BillController@index');
        Route::get('/bills/{bill}', 'BillController@show');
        Route::post('/bills', 'BillController@store');
        Route::put('/bills/{bill}', 'BillController@update');
        Route::delete('/bills/{bill}', 'BillController@destroy');
    
        Route::get('/houses', 'HouseController@index');
        Route::get('/houses/{house}', 'HouseController@show');
        Route::post('/houses', 'HouseController@store');
        Route::put('/houses/{house}', 'HouseController@update');
        Route::delete('/houses/{house}', 'HouseController@destroy');
        Route::get('/houses/{id}/bills', 'HouseController@getHouseBills');

    
        Route::get('/expenses', 'ExpenseController@index');
        Route::get('/expenses/{expense}', 'ExpenseController@show');
        Route::post('/expenses', 'ExpenseController@store');
        Route::put('/expenses/{expense}', 'ExpenseController@update');
        Route::delete('/expenses/{expense}', 'ExpenseController@destroy');
    
        Route::get('/savings', 'SavingController@index');
        Route::get('/savings/{saving}', 'SavingController@show');
        Route::post('/savings', 'SavingController@store');
        Route::put('/savings/{saving}', 'SavingController@update');
        Route::delete('/savings/{saving}', 'SavingController@destroy');
    });
});
