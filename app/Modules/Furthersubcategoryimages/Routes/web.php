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

Route::group(['prefix' => 'furthersubcategoryimages','middleware'=>'auth'], function () {
    Route::get("/index/{id}", "FurtherSubCategoryImagesController@index")->name("further_subcategory_images_index");
    Route::get("/create", "FurtherSubCategoryImagesController@create")->name("further_subcategory_images_create");
    Route::post("/store", "FurtherSubCategoryImagesController@store")->name("further_subcategory_images_store");
    Route::get("/edit/{id}", "FurtherSubCategoryImagesController@edit")->name("further_subcategory_images_cedit");
    Route::post("/update/{id}", "FurtherSubCategoryImagesController@update")->name("further_subcategory_images_update");
    Route::get("/delete/{id}", "FurtherSubCategoryImagesController@destroy")->name("further_subcategory_images_delete");
});