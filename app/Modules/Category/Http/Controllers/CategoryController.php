<?php

namespace App\Modules\Category\Http\Controllers;

use App\Models\CategoryInputValue;
use App\Models\CategoryValue;
use App\Models\InputField;
use App\Models\ProjectRegistration;
use App\Models\SubCategoryInputValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;

//Models
use App\Lib\Helpers;
use App\Models\Users;
use App\Models\Modules;
use App\Models\Category;
use App\Models\Newsletter;
use DB;

class CategoryController extends Controller
{
    public  function index(Request $req)
    {
        $module_id  = $req->module_id;
        $module     = Modules::select('id','slug')->where('id', $module_id)->first();
        $categorys  = Category::where('modules_id', $module_id)->orderBy('modules_id', 'ASC')->get();

        return view("category::index", compact( 'module','categorys'));
    }

    public function create($id)
    {
        $module_id              = $id;
        $module    = Modules::find($module_id);
    	$modules 	            = Modules::all();
    	$category_input_values  = CategoryInputValue::with('inputFieldId')->where('modules_id', $module_id)->get();
        $input_fields           = InputField::all();

        return view("category::create", compact('module_id','modules', 'category_input_values','input_fields', 'module'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'modules_id' 	    => 'required',
            'category_name' 	=> 'required',
        ]);

        $data      = $request->all();
        $module_id = $data['modules_id'];
        DB::beginTransaction();

        try{

            //Insert Data to Category Table
            $category 				= new Category();
            $category->modules_id 	= $data['modules_id'];
            $category->name         = $data['category_name'];
            $category->slug         = str_replace(' ','_',  strtolower($data['category_name']) );
            $category->created_by 	= Auth::user()->id;
            $category->save();
            //Insert Data to Category Table Ends

            //Insert Data to Category Value Table Start
            $category_input_values  = CategoryInputValue::with('inputFieldId')->where('modules_id', $module_id)->get();

            foreach($category_input_values as $key => $category_input_value){
                $category_value 			                    = new CategoryValue();
                $category_value->category_id                    = $category->id;
                $category_value->input_fields_id                = $category_input_value->inputFieldId->id;
                if($category_input_value->inputFieldId->type == 1 && ($category_input_value->inputFieldId->slug_name == isset($data[$category_input_value->inputFieldId->slug_name]))){
                    $forCreateUniqueFile                        = $category_input_value->inputFieldId->id;
                    $image                                      = $data[$category_input_value->inputFieldId->slug_name];
                    $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                    $directory                                  = 'uploads/images/category/';
                    $image->move($directory, $imageName);
                    $imageUrl                                   = $directory.$imageName;
                    $category_value->category_value             = $imageUrl;
                } else {
                    $category_value->category_value             = isset($data[$category_input_value->inputFieldId->slug_name])? $data[$category_input_value->inputFieldId->slug_name] : '';
                }
                $category_value->save();
            }
            //Insert Data to Category Value Table End

            // Insert Data to Sub Category Input Value Table Start
            $getAllInputFieldData  = isset($data['input_fields_id']) ? $data['input_fields_id'] : '';

            if(isset($getAllInputFieldData) && !empty($getAllInputFieldData)) {

                foreach($getAllInputFieldData as $key => $value) {
                    if (isset($key) && isset($getAllInputFieldData[$key])) {
                        $sub_category_input_value                               = new SubCategoryInputValue();
                        $sub_category_input_value->category_id                  = $category->id;
                        $sub_category_input_value->input_fields_id              = $value;
                        $sub_category_input_value->sub_cat_input_name           = $data['sub_cat_input_name'][$key];
                        $sub_category_input_value->created_by                   = Auth::user()->id;
                        $sub_category_input_value->updated_by                   = Auth::user()->id;
                        $sub_category_input_value->save();
                    }
                }

            }
            // Insert Data to Sub Category Input Value Table End

            DB::commit();
            return redirect()->route("category_index",['module_id' => $data['modules_id']])->with("success","Category Created Successfully !!");

        }catch (\Exception $exception){
            DB::rollBack();
            dd($exception);
            $msg = $exception->getMessage();
            return redirect()->route("category_index",['module_id' => $data['modules_id']])->with("danger","Not Added ".$msg);
        }
    }

    public function edit($category_id, $module_id)
    {
       	$modules 	                = Modules::all();
        $module                     = Modules::find($module_id);
       	$category 	                = Category::find($category_id);
        $category_input_values      = CategoryInputValue::with('inputFieldId')->where('modules_id', $module_id)->get();
        $category_values            = CategoryValue::with('inputFieldId')->where('category_id', $category_id)->get();
        $input_fields               = InputField::all();
        $sub_category_input_field   = SubCategoryInputValue::rightjoin('input_fields', 'input_fields.id', 'sub_category_input_values.input_fields_id')
                                                                    ->where('category_id', $category_id)
                                                                    ->get()
                                                                    ->pluck('sub_cat_input_name', 'input_fields_id');

        return view("category::edit", compact('modules', 'category', 'category_input_values', 'category_values', 'input_fields', 'sub_category_input_field', 'category_id', 'module_id', 'module'));
    }

    public function update(Request $request, $category_id, $module_id)
    {
        $this->validate($request,[
            'modules_id' 	    => 'required',
            'category_name' 	=> 'required',
        ]);

        $data  = $request->all();

        DB::beginTransaction();

        try{

            //Insert Data to Category Table
            $category 				= Category::find($category_id);
            $category->modules_id 	= $data['modules_id'];
            $category->slug         = str_replace(' ','_',  strtolower($data['category_name']) );
            $category->name         = $data['category_name'];
            $category->updated_by 	= Auth::user()->id;
            $category->update();
            //Insert Data to Category Table Ends
            $category_input_values  = CategoryInputValue::with('inputFieldId')->where('modules_id', $module_id)->get();

            foreach ($category_input_values as $key => $category_input_value) {

                $checkCategoryValue = CategoryValue::with('inputFieldId')->where('category_id', $category_id)->where('input_fields_id', $category_input_value->input_fields_id)->first();

                if(isset($checkCategoryValue)){
                    $category_value                                 = new CategoryValue();
                    $category_value->category_id                    = $category->id;
                    $category_value->input_fields_id                = $category_input_value->inputFieldId->id;

                    if($category_input_value->inputFieldId->type == 1 && ($category_input_value->inputFieldId->slug_name == isset($data[$category_input_value->inputFieldId->slug_name]))){

                        $helper = new Helpers();
                        $helper->deleteFile($checkCategoryValue->category_value);
                        $forCreateUniqueFile                        = $category_input_value->inputFieldId->id;
                        $image                                      = $data[$category_input_value->inputFieldId->slug_name];
                        $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                  = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                   = $directory.$imageName;
                        $category_value->category_value             = $imageUrl;

                    } else {

                        if($category_input_value->inputFieldId->type == 1) {
                            $category_value->category_value         = $checkCategoryValue->category_value;
                        } else {
                            $category_value->category_value         = isset($data[$category_input_value->inputFieldId->slug_name])? $data[$category_input_value->inputFieldId->slug_name] : '';
                        }

                    }

                    $category_value->save();
                    $category_value_delete 			                = $checkCategoryValue->delete();

                } else {

                    $category_value                                 = new CategoryValue();
                    $category_value->category_id                    = $category->id;
                    $category_value->input_fields_id                = $category_input_value->inputFieldId->id;

                    if($category_input_value->inputFieldId->type == 1 && ($category_input_value->inputFieldId->slug_name == isset($data[$category_input_value->inputFieldId->slug_name]))){

                        $forCreateUniqueFile                        = $category_input_value->inputFieldId->id;
                        $image                                      = $data[$category_input_value->inputFieldId->slug_name];
                        $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                  = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                   = $directory.$imageName;
                        $category_value->category_value             = $imageUrl;

                    } else {

                        $category_value->category_value             = isset($data[$category_input_value->inputFieldId->slug_name])? $data[$category_input_value->inputFieldId->slug_name] : '';

                    }

                    $category_value->save();

                }
            }
            /* Insert Data to Sub Category Input Value Table */

                $delete_previous_sub_category_input_value = SubCategoryInputValue::where('category_id', $category->id)->delete();

                $getAllInputFieldData  = isset($data['input_fields_id']) ? $data['input_fields_id'] : '';

                if(isset($getAllInputFieldData) && !empty($getAllInputFieldData)) {

                    foreach($getAllInputFieldData as $key => $value) {

                        if (isset($key) && isset($getAllInputFieldData[$key])) {

                            $sub_category_input_value                               = new SubCategoryInputValue();
                            $sub_category_input_value->category_id                  = $category->id;
                            $sub_category_input_value->input_fields_id              = $value;

                            $sub_category_input_value->sub_cat_input_name           = $data['sub_cat_input_name'][$key];
                            $sub_category_input_value->created_by                   = Auth::user()->id;
                            $sub_category_input_value->updated_by                   = Auth::user()->id;

                            $sub_category_input_value->save();

                        }
                    }
                }

            /* Insert Data to Sub Category Input Value Table */

            DB::commit();
            return redirect()->route("category_index", ['module_id' => $module_id])->with("success","Category Updated Successfully !!");

        }catch (\Exception $exception){
            DB::rollBack();
            $msg = $exception->getMessage(); dd($msg);
            return redirect()->route("category_index", ['module_id' => $module_id])->with("danger","Not Updated ".$msg);
        }
    }

    public function destroy($id)
    {

        dd("You are not authorized to perform this operation.");

        // $category      = Category::find($id);
        // $checkFileType = CategoryValue::where('category_id', $id)->get();
        // foreach ($checkFileType as $key => $value) {
        //     if($value->inputFieldId->type == 1){
        //         $helper = new Helpers();
        //         $helper->deleteFile($value->category_value);
        //     }
        // }
        // if ($category->delete())
        // {
        // 	return back()->with("success","Category Deleted Successfully");
        // }else
        // {
        // 	return back()->with("danger","Something Went Wrong.Please Try Again.");
        // }
    }
    
    public function prjectRegistrationIndex() {
        $allProjectRegistration = ProjectRegistration::all();
        return view("category::register.index", compact('allProjectRegistration'));
    }
    
    public function prjectRegistrationView($id) {
        $getProjectRegistration = ProjectRegistration::find($id);
        return view("category::register.view", compact('getProjectRegistration'));
    }
    
    public function prjectRegistrationDelete($id) {
        $getProjectRegistration = ProjectRegistration::find($id);
        $getProjectRegistration->delete();
        return redirect()->route("project_registration_index")->with("danger","Delete");
    }

    public function subscriptionList()
    {
        $subscriptions = Newsletter::orderBy('created_at', 'DESC')->get();
        return view('category::subscriptions', compact('subscriptions'));
    }

    public function subcriptionDelete($id)
    {
        Newsletter::where('id', $id)->delete();
        return back()->with("success", "Subscription deleted successfully");
    }

}
