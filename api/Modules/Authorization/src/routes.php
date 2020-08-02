<?php

use Illuminate\Support\Facades\Route;


Route::post('/login', 'api\v1\AuthController@login' ) ;
Route::post('/auth', 'api\v1\AuthController@auth' ) ;
