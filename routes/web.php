<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact','ContactController@Index');

Route::get('/about','AboutController@Index');

Route::get('laracast',function(){
	return view('pages.laracast');
})->name('laracast');

Route::get('privacy/terms',function(){
	return view('pages.privacy');
})->name('privacy');

Route::get(md5('user/Ashikur093'),function(){
	return view('pages.user');
})->name('user');