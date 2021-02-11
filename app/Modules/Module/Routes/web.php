<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'module','middleware'=>'auth'], function () {
    Route::get("/", "ModuleController@index")->name("module_index");
    Route::get("/create", "ModuleController@create")->name("module_create");
    Route::post("/store", "ModuleController@store")->name("module_store");
    Route::get("/edit/{id}", "ModuleController@edit")->name("module_cedit");
    Route::post("/update/{id}", "ModuleController@update")->name("module_update");
    Route::get("/delete/{id}", "ModuleController@destroy")->name("module_delete");
    
    Route::get("/up/{id}", "ModuleController@up")->name("module_up");
    Route::get("/down/{id}", "ModuleController@down")->name("module_down");
});

Route::group(['prefix' => 'module/modulevalue','middleware'=>'auth'], function () {
    Route::get("/", "ModuleValueController@index")->name("modulevalue_index");
    Route::get("/create", "ModuleValueController@create")->name("modulevalue_create");
    Route::post("/store", "ModuleValueController@store")->name("modulevalue_store");
    Route::get("/edit/{id}", "ModuleValueController@edit")->name("modulevalue_edit");
    Route::post("/update/{id}", "ModuleValueController@update")->name("modulevalue_update");
    Route::get("/delete/{id}", "ModuleValueController@destroy")->name("modulevalue_delete");

    Route::get("/up/{id}", "ModuleValueController@up")->name("modulevalue_up");
    Route::get("/down/{id}", "ModuleValueController@down")->name("modulevalue_down");
});
