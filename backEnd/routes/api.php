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


Route::get('/add',function (Request $request){

    return response()->json(
        [
            'name'=>'chathuranga',
            'age'=>'24'

        ]
    );

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
return $request->user();
});


Route::get('/get',[
    'uses'=>'ImagController@returnAll'
]);

 Route::POST('/add1',[
    'uses'=>'ImagController@ImageAdd'
]);

 Route::delete('/delete/{id}',[
     'uses'=>'ImagController@deleteImage'
 ]);

 Route::get('/getsearch/{search}',[
     'uses'=>'ImagController@search'
 ]);