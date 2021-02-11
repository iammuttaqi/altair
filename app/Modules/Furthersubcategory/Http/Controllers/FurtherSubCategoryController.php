<?php

namespace App\Modules\Furthersubcategory\Http\Controllers;

use App\Lib\Helpers;
use App\Models\FurtherSubCategoryInputValue;
use App\Models\FurtherSubCategoryValue;
use App\Models\Modules;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\InputField;
use File;
use DB;

//Models
use App\Models\Users;
use App\Models\SubCategory;
use App\Models\FurtherSubCategory;

class FurtherSubCategoryController extends Controller
{
    public  function index(Request $request)
    {
        $module_id  = $request->module_id;
        $module     = Modules::find($module_id);
        $further_sub_categories 	= FurtherSubCategory::join('sub_category','further_sub_category.sub_category_id','sub_category.id')
                                                    ->join('category', 'sub_category.category_id', 'category.id')
                                                    ->join('modules', 'category.modules_id', 'modules.id')
                                                    ->select('further_sub_category.id', 'further_sub_category.name', 'further_sub_category.sub_category_id as sub_category_id')
                                                    ->with('subCategoryId')
                                                    ->where('modules.id', $module_id)
                                                    ->get();
        return view("furthersubcategory::index", compact('module_id','module','further_sub_categories'));
    }

    public function create($module_id)
    { 
        $module     = Modules::find($module_id);
        $sub_categories              = SubCategory::join('category', 'category.id', 'sub_category.category_id')
                                                    ->join('modules', 'category.modules_id', 'modules.id')
                                                    ->select('sub_category.id', 'sub_category.name', 'category.name as category_name')
                                                    ->where('modules.id', $module_id)
                                                    ->get();

        return view("furthersubcategory::create", compact('module_id','sub_categories', 'module'));
    }

    public function createFurtherSubCat($module_id, $sub_category_id)
    {  
        $module     = Modules::find($module_id);
        $sub_category                         = SubCategory::where('id', $sub_category_id)->get()->first();

        $further_sub_category_input_values    = FurtherSubCategoryInputValue::join('sub_category', 'further_sub_category_input_values.sub_category_id', 'sub_category.id' )
                                                            ->join('category', 'sub_category.category_id', 'category.id')
                                                            ->join('modules', 'category.modules_id', 'modules.id')
                                                            ->where('modules.id', $module_id)
                                                            ->where('further_sub_category_input_values.sub_category_id', $sub_category_id)
    	                                                    ->get();

        return view("furthersubcategory::create-further-subcat", compact('module_id','sub_category_id','sub_category','further_sub_category_input_values', 'module'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'sub_category_id' 	            => 'required',
            'further_sub_category_name' 	=> 'required',
        ]);

        $module_id        = $request->module_id;
        $sub_category_id  = $request->sub_category_id;
        $data             = $request->all();

        DB::beginTransaction();

        try{

            /*Insert Data to FurtherSubCategory Table*/
            $further_sub_category 				        = new FurtherSubCategory();
            $further_sub_category->sub_category_id 	    = $data['sub_category_id'];
            $further_sub_category->name                 = $data['further_sub_category_name'];
            $further_sub_category->further_sub_cat_slug = str_replace(' ','_',  strtolower($data['further_sub_category_name']) );
            $further_sub_category->created_by 	        = Auth::user()->id;
            $further_sub_category->save();
            /*Insert Data to FurtherSubCategory Table Ends*/

            $further_sub_category_input_values  = FurtherSubCategoryInputValue::with('inputFieldId')->where('sub_category_id', $sub_category_id)->get();

            foreach($further_sub_category_input_values as $key => $further_sub_category_input_value){
                $further_sub_category_value 			                = new FurtherSubCategoryValue();
                $further_sub_category_value->further_sub_category_id    = $further_sub_category->id;
                $further_sub_category_value->input_fields_id            = $further_sub_category_input_value->inputFieldId->id;
                if($further_sub_category_input_value->inputFieldId->type == 1 && ($further_sub_category_input_value->inputFieldId->slug_name == isset($data[$further_sub_category_input_value->inputFieldId->slug_name]))){
                    $forCreateUniqueFile                                = $further_sub_category_input_value->inputFieldId->id;
                    $image                                              = $data[$further_sub_category_input_value->inputFieldId->slug_name];
                    $imageName                                          = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                    $directory                                          = 'uploads/images/category/';
                    $image->move($directory, $imageName);
                    $imageUrl                                           = $directory.$imageName;
                    $further_sub_category_value->further_sub_category_value  = $imageUrl;
                } else {
                    $further_sub_category_value->further_sub_category_value  = isset($data[$further_sub_category_input_value->inputFieldId->slug_name])? $data[$further_sub_category_input_value->inputFieldId->slug_name] : '';
                }
                $further_sub_category_value->save();
            }

            /* Insert Data to FurtherSubCategoryValue Table Ends*/

            DB::commit();
            return redirect()->route("further_subcategory_index",['module_id'=>$module_id])->with("success","Further Sub Category Created Successfully !!");

        }catch (\Exception $exception){
            dd($exception);
            $msg = $exception->getMessage(); dd($msg);
            DB::rollBack();
            return redirect()->route("further_subcategory_index",['module_id'=>$module_id ])->with("danger","Not Added ".$msg);
        }
    }

    public function edit($module_id, $sub_category_id, $further_sub_category_id)
    {
        $module     = Modules::find($module_id);
        $sub_category                           = SubCategory::Find($sub_category_id);
       	$furtherSubCategory 	                = FurtherSubCategory::find($further_sub_category_id);
       	$furtherSubCategoryValues               = FurtherSubCategoryValue::Where('further_sub_category_id', $further_sub_category_id)->get()->pluck('further_sub_category_value','input_fields_id');
        $further_sub_category_input_values      = FurtherSubCategoryInputValue::where('sub_category_id', $sub_category_id)
                                                                           ->get();
        return view("furthersubcategory::edit", compact('module_id', 'sub_category_id', 'further_sub_category_id', 'sub_category' ,'furtherSubCategory','further_sub_category_input_values', 'furtherSubCategoryValues', 'module'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'sub_category_id' 	            => 'required',
            'further_sub_category_name' 	=> 'required',
        ]);

        $module_id        = $request->module_id;
        $sub_category_id  = $request->sub_category_id;
        $data             = $request->all();
        DB::beginTransaction();

        try{

            /*Insert Data to FurtherSubCategory Table*/
            $further_sub_category 				        = FurtherSubCategory::find($id);
            $further_sub_category->sub_category_id 	    = $data['sub_category_id'];
            $further_sub_category->name                 = $data['further_sub_category_name'];
            $further_sub_category->further_sub_cat_slug = str_replace(' ','_',  strtolower($data['further_sub_category_name']) );
            $further_sub_category->created_by 	        = Auth::user()->id;
            $further_sub_category->update();
            /*Insert Data to FurtherSubCategory Table Ends*/

            /* Insert Data to FurtherSubCategoryValue Table */


            $further_sub_category_values  = FurtherSubCategoryInputValue::with('inputFieldId')->where('sub_category_id', $sub_category_id)->get();
            foreach ($further_sub_category_values as $key => $further_sub_category_input_value) {
                
                $checkFurtherSubCategoryValue = FurtherSubCategoryValue::with('inputFieldId')->where('further_sub_category_id', $id)->where('input_fields_id', $further_sub_category_input_value->input_fields_id)->first();
                
                if(isset($checkFurtherSubCategoryValue)){
                    
                    $further_sub_category_value                                 = new FurtherSubCategoryValue();
                    $further_sub_category_value->further_sub_category_id        = $further_sub_category->id;
                    $further_sub_category_value->input_fields_id                = $further_sub_category_input_value->inputFieldId->id;
                    
                    if($further_sub_category_input_value->inputFieldId->type == 1 && ($further_sub_category_input_value->inputFieldId->slug_name == isset($data[$further_sub_category_input_value->inputFieldId->slug_name]))){
                        
                        $helper = new Helpers();
                        $helper->deleteFile($checkFurtherSubCategoryValue->further_sub_category_value);
                        $forCreateUniqueFile                        = $further_sub_category_input_value->inputFieldId->id;
                        $image                                      = $data[$further_sub_category_input_value->inputFieldId->slug_name];
                        $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                  = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                   = $directory.$imageName;
                        $further_sub_category_value->further_sub_category_value     = $imageUrl;
                        
                    } else {
                        if($further_sub_category_input_value->inputFieldId->type == 1) {
                            $further_sub_category_value->further_sub_category_value   = $checkFurtherSubCategoryValue->further_sub_category_value;
                        } else {
                            $further_sub_category_value->further_sub_category_value   = isset($data[$further_sub_category_input_value->inputFieldId->slug_name])? $data[$further_sub_category_input_value->inputFieldId->slug_name] : '';
                        }
                    }
                    $further_sub_category_value->save();
                    $further_sub_category_value_delete 			              = $checkFurtherSubCategoryValue->delete();
                    
                } else {
                    
                    $further_sub_category_value                             = new FurtherSubCategoryValue();
                    $further_sub_category_value->further_sub_category_id    = $further_sub_category->id;
                    $further_sub_category_value->input_fields_id            = $further_sub_category_input_value->inputFieldId->id;
                    if($further_sub_category_input_value->inputFieldId->type == 1 && ($further_sub_category_input_value->inputFieldId->slug_name == isset($data[$further_sub_category_input_value->inputFieldId->slug_name]))){
                        
                        $forCreateUniqueFile                                    = $further_sub_category_input_value->inputFieldId->id;
                        $image                                                  = $data[$further_sub_category_input_value->inputFieldId->slug_name];
                        $imageName                                              = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                              = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                               = $directory.$imageName;
                        $further_sub_category_value->further_sub_category_value = $imageUrl;
                        
                    } else {
                        $further_sub_category_value->further_sub_category_value     = isset($data[$further_sub_category_input_value->inputFieldId->slug_name])? $data[$further_sub_category_input_value->inputFieldId->slug_name] : '';
                    }
                    $further_sub_category_value->save();
                }
            }


            /* Insert Data to FurtherSubCategoryValue Table Ends*/

            DB::commit();
            return redirect()->route("further_subcategory_index",['module_id'=>$module_id])->with("success","Further Sub Category Updated Successfully !!");

        }catch (\Exception $exception){
            dd($exception);
            $msg = $exception->getMessage();
            DB::rollBack();
            return redirect()->route("further_subcategory_index",['module_id'=>$module_id ])->with("danger","Not Added ".$msg);
        }
    }

    public function destroy($module_id, $further_sub_category_id)
    {

        $further_sub_category   = FurtherSubCategory::find($further_sub_category_id);
        $checkFileType          = FurtherSubCategoryValue::where('further_sub_category_id', $further_sub_category_id)->get();
        
        foreach ($checkFileType as $key => $value) {
            
            if($value->inputFieldId->type == 1){
                
                $helper = new Helpers();
                $helper->deleteFile($value->further_sub_category_value);
                
            }
        }

        if ($further_sub_category->delete())
        {
        	return back()->with("success","Further Sub Category Deleted Successfully");
        }else
        {
        	return back()->with("danger","Something Went Wrong.Please Try Again.");
        }
    }

}
