<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
    return view('backend.main');
});

Route::get('/',function(){
    return view('frontend.main');
});
