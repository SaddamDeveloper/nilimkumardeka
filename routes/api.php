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
Route::get('numbers/list','Api\SlotController@slotNumbers');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Appointment
Route::group(['namespace' => 'Frontend'], function(){
    Route::group(['namespace' => 'Appointment'], function () {
        // Route::post('/appointment', 'AppointmentController@index')->name('web.appointment');
        Route::post('/ appointment', 'AppointmentController@index')->name('web.ajax.appointment');
        
    });
});