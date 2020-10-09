<?php
// Admin Dashboard Route

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','LoginController@showLoginForm')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');
    Route::post('logout', 'LoginController@logout')->name('admin.logout');

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard');
        
        Route::get('/change/password/form', 'LoginController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'LoginController@changePassword')->name('admin.change_password');

        // Blog
        Route::group(['namespace' => 'Blog'], function () {
            Route::get('/blog', 'BlogsController@index')->name('admin.blog');
            Route::post('/store/blog', 'BlogsController@store')->name('admin.store_blog');
            Route::get('/blog/list', 'BlogsController@list')->name('admin.blog_list');
            Route::get('/posts/list', 'BlogsController@show')->name('admin.ajax.show_post');
            Route::get('/get/post/{id}','BlogsController@singlePost')->name('admin.post_view');
            Route::get('/edit/post/{id}','BlogsController@editPost')->name('admin.post_edit');
            Route::post('/update/post','BlogsController@updatePost')->name('admin.update_post');
            Route::get('/delete/post/{id}','BlogsController@deletePost')->name('admin.post_delete');
            Route::get('/status/post/{id}/{status}','BlogsController@statusPost')->name('admin.post_status');

            /** Category CK Editor Image Upload **/
            Route::post('ck-editor-image-upload','BlogsController@ckEditorImageUpload')->name('admin.ck_editor_image_upload');
        });

        // Appointment
        Route::group(['namespace' => 'Appointment'], function (){
            Route::get('/appointments', 'AppointmentController@index')->name('admin.appointment');
            Route::get('/view/appointment', 'AppointmentController@view')->name('admin.ajax.get_appointment');
            Route::get('/show/{id}', 'AppointmentController@show')->name('admin.appointment_view');
            Route::get('/delete/{id}', 'AppointmentController@destroy')->name('admin.appointment_delete');
        });
    });
});