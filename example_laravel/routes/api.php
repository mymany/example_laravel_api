<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
    Route::resource('users', 'Api\V1\UserController');
});
