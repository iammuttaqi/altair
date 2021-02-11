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

Route::group(['prefix' => 'category','middleware'=>'auth'], function () {
    Route::get("/", "CategoryController@index")->name("category_index");
    Route::get("/create/{module_id}", "CategoryController@create")->name("category_create");
    Route::post("/store", "CategoryController@store")->name("category_store");
    Route::get("/edit/{category_id}/{module_id}", "CategoryController@edit")->name("category_edit");
    Route::post("/update/{category_id}/{module_id}", "CategoryController@update")->name("category_update");
    Route::get("/delete/{id}", "CategoryController@destroy")->name("category_delete");
    
    Route::get("/up/{id}", "CategoryController@up")->name("category_up");
    Route::get("/down/{id}", "CategoryController@down")->name("category_down");
    
    
    Route::get("/project/registration/index", "CategoryController@prjectRegistrationIndex")->name('project_registration_index');
    Route::get("/project/registration/view/{id}", "CategoryController@prjectRegistrationView")->name('project_registration_view');
    Route::get("/project/registration/delete/{id}", "CategoryController@prjectRegistrationDelete")->name('project_registration_delete');

    Route::get('/subscriptions', 'CategoryController@subscriptionList')->name('subscription_list');

    Route::get('subcription/delete/{id}', 'CategoryController@subcriptionDelete')->name('subcription_delete');
    
});
