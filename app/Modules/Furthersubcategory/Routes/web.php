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

Route::group(['prefix' => 'further-sub-category','middleware'=>'auth'], function () {

    Route::get("/{module_id}", "FurtherSubCategoryController@index")->name("further_subcategory_index");
    Route::get("/create/{module_id}", "FurtherSubCategoryController@create")->name("further_subcategory_create");
    Route::get("/create-further-subcat/{module_id}/{sub_category_id}", "FurtherSubCategoryController@createFurtherSubCat")->name("further_subcategory_create_further_subcat");
    Route::post("/store", "FurtherSubCategoryController@store")->name("further_subcategory_store");
    Route::get("/edit/{module_id}/{sub_category_id}/{further_sub_category_id}", "FurtherSubCategoryController@edit")->name("further_subcategory_edit");
    Route::post("/update/{id}", "FurtherSubCategoryController@update")->name("further_subcategory_update");
    Route::get("/delete/{module_id}/{further_sub_category_id}", "FurtherSubCategoryController@destroy")->name("further_subcategory_delete");

});

