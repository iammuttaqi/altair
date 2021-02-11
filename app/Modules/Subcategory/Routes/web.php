<?php

Route::group(['prefix' => 'sub-category','middleware'=>'auth'], function () {

    Route::get("/{module_id}", "SubcategoryController@index")->name("sub_category_index");
    Route::get("/create/{module_id}", "SubcategoryController@create")->name("sub_category_create");
    Route::get("/create-subcat/{module_id}/{category_id}", "SubcategoryController@createSubcat")->name("sub_category_create_subcat");
    Route::post("/store", "SubcategoryController@store")->name("sub_category_store");
    Route::get("/edit/{module_id}/{category_id}/{sub_category_id}", "SubcategoryController@edit")->name("sub_category_edit");
    Route::post("/update/{id}", "SubcategoryController@update")->name("sub_category_update");
    Route::get("/delete/{module_id}/{sub_category_id}", "SubcategoryController@destroy")->name("sub_category_delete");

});
