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

Route::group(['prefix' => 'profile','middleware'=>'auth'], function () {
    Route::get("/", "CompanyprofileController@showCompanyProfile")->name("company_profile");
    Route::get("/add-profile", "CompanyprofileController@addCompanyProfile")->name("add-profile");
    Route::post("/save-profile", "CompanyprofileController@saveCompanyProfile")->name("save-profile");
    Route::get("/edit-profile/{id}", "CompanyprofileController@editCompanyProfile")->name("edit-profile");
    Route::post("/update-profile/{id}", "CompanyprofileController@updateCompanyProfile")->name("update-profile");
    Route::get("/delete-profile/{id}", "CompanyprofileController@deleteCompanyProfile")->name("delete-profile");
});
