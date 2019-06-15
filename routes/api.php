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

Route::get('v1/opportunities', 'api\OpportunitesController@list')->name('list');
Route::get('v1/opportunities/{id}', 'api\OpportunitesController@find')->name('find');

Route::post('v1/opportunities', 'api\OpportunitesController@store')->name('store');


Route::get('v1/works', 'api\OpportunitesController@works')->name('works');
Route::post('v1/works', 'api\OpportunitesController@store_work')->name('works.store');
