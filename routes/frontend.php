<?php
// Frontend Route

//========= index =========//
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

//========= blog =========//
Route::get('/blog', function () {
    return view('web.blog');
})->name('web.blog');

//========= blog details =========//
Route::get('/blog-details', function () {
    return view('web.blog-details');
})->name('web.blog-details');