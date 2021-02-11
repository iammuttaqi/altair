<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your InputfieldController. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'inputfield', 'middleware'=>'auth'], function () {
    Route::get("/", "InputfieldController@index")->name("inputfield_index");
    Route::get("/create", "InputfieldController@create")->name("inputfield_create");
    Route::post("/store", "InputfieldController@store")->name("inputfield_store");
    Route::get("/edit/{id}", "InputfieldController@edit")->name("inputfield_edit");
    Route::post("/update/{id}", "InputfieldController@update")->name("inputfield_update");
    Route::get("/delete/{id}", "InputfieldController@destroy")->name("inputfield_delete");

    Route::get("/up/{id}", "InputfieldController@up")->name("inputfield_up");
    Route::get("/down/{id}", "InputfieldController@down")->name("inputfield_down");
});
