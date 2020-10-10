<?php
// Frontend Route

//========= index =========//

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'FrontendController@index')->name('web.index');
    
    // Blogs
    Route::group(['namespace' => 'Blog'], function () {
        // Blog
        Route::get('/posts/{slug}/{id}', 'BlogsController@showPost')->name('web.viewPost');
    
        Route::get('/blog', 'BlogsController@blog')->name('web.blog');
        
        // //========= blog details =========//
        // Route::get('/blog-details', function () {
        //     return view('web.blog-details');
        // })->name('web.blog-details');
    });

    // Appointment
    Route::group(['namespace' => 'Appointment'], function () {
        // Route::post('/appointment', 'AppointmentController@index')->name('web.appointment');
        Route::post('/appointment', 'AppointmentController@index')->name('web.ajax.appointment');
        
    });
});
