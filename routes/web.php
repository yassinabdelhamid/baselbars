<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\IndexController@show')->name('index');

Route::get('/getRequest', function(){
    if(Request::ajax()){
        return 'getRequest has loaded';
    }
});