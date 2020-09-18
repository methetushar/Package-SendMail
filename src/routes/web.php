<?php


use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'tusharahmed\Contact\Http\Controllers'],function(){
    Route::get('/contact','ContactController@ContactForm');
    Route::post('/contact','ContactController@store')->name('contact');
});
