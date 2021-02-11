<?php

namespace App\Modules\Subcategory\Http\Controllers;

use App\Models\FurtherSubCategoryInputValue;
use App\Models\InputField;
use App\Models\Modules;
use App\Models\SubCategoryInputValue;
use App\Models\SubCategoryValue;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;

//Models
use App\Lib\Helpers;
use App\Models\Users;
use App\Models\Category;
use App\Models\SubCategory;
use Response;
use DB;
use Auth;

class SubcategoryController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->module_id)){
            $module_id = $request->module_id;
            $module    = Modules::find($module_id);
            $sub_categories = SubCategory::join('category','category.id','sub_category.category_id')
                                            ->select('sub_category.id','sub_category.name','sub_category.category_id', 'sub_category.created_at', 'sub_category.updated_at')
                                            ->where('category.modules_id', $module_id)
                                            ->get();
        }

        return view("subcategory::index", compact('module_id','sub_categories', 'module'));
    }

    public function create($module_id)
    {
        $module         = Modules::find($module_id);
    	$categoryies    = Category::where('modules_id', $module_id)->get();
    
        return view("subcategory::create", compact('module_id','categoryies', 'module'));
    }

    public function createSubcat($module_id, $category_id) {

        $moduleId       = $module_id;
        $module         = Modules::find($module_id);
        $categoryId     = $category_id;
        
        $sub_category_input_values  = SubCategoryInputValue::with('inputFieldId')
                                                            ->join('category','category.id','sub_category_input_values.category_id')
                                                            ->select('sub_category_input_values.id','sub_category_input_values.sub_cat_input_name','sub_category_input_values.category_id','sub_category_input_values.input_fields_id')
                                                            ->where('sub_category_input_values.category_id', $categoryId)
                                                            ->get();
        $input_fields   = InputField::all();
        $category       = Category::where('id', $categoryId)->first();
       
        return view("subcategory::create-subcat", compact('module_id','category', 'sub_category_input_values','input_fields', 'categoryId', 'module'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' 	        => 'required',
            'sub_category_name' 	=> 'required',
        ]);

        $module_id    = $request->module_id;
        $category_id  = $request->category_id;
        $data         = $request->all();
        DB::beginTransaction();

        try{

            /*Insert Data to Category Table*/
            
            $sub_category 				= new SubCategory();
            $sub_category->category_id 	= $data['category_id'];
            $sub_category->name         = $data['sub_category_name'];
            $sub_category->sub_cat_slug = str_replace(' ','_',  strtolower($data['sub_category_name']) );
            $sub_category->created_by 	= Auth::user()->id;
            $sub_category->save();
            
            /*Insert Data to Category Table Ends*/

            /* Insert Data to Sub Category Value Table */


            $sub_category_input_values  = SubCategoryInputValue::with('inputFieldId')->where('category_id', $category_id)->get();
            foreach($sub_category_input_values as $key => $sub_category_input_value){
                $sub_category_value 			                = new SubCategoryValue();
                $sub_category_value->sub_category_id            = $sub_category->id;
                $sub_category_value->input_fields_id            = $sub_category_input_value->inputFieldId->id;
                if($sub_category_input_value->inputFieldId->type == 1 && ($sub_category_input_value->inputFieldId->slug_name == isset($data[$sub_category_input_value->inputFieldId->slug_name]))){
                    $forCreateUniqueFile                        = $sub_category_input_value->inputFieldId->id;
                    $image                                      = $data[$sub_category_input_value->inputFieldId->slug_name];
                    $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                    $directory                                  = 'uploads/images/category/';
                    $image->move($directory, $imageName);
                    $imageUrl                                   = $directory.$imageName;
                    $sub_category_value->sub_category_value     = $imageUrl;
                } else {
                    $sub_category_value->sub_category_value     = isset($data[$sub_category_input_value->inputFieldId->slug_name])? $data[$sub_category_input_value->inputFieldId->slug_name] : '';
                }
                $sub_category_value->save();
            }
            /* Insert Data to Sub Category Value Table Ends*/

            /* Insert Data to Further Sub Category Input Value Table */
            $getAllInputFieldData  = (isset($data['input_fields_id']))? $data['input_fields_id']: '';
            if( isset($getAllInputFieldData) && !empty($getAllInputFieldData) ) {
                foreach ($getAllInputFieldData as $key => $value) {

                    if(isset($key) && isset($getAllInputFieldData[$key])) {

                        $further_sub_category_input_value 			                        = new FurtherSubCategoryInputValue();
                        $further_sub_category_input_value->sub_category_id                  = $sub_category->id;
                        $further_sub_category_input_value->input_fields_id                  = $value;

                        $further_sub_category_input_value->further_sub_cat_input_name       = $data['further_sub_cat_input_name'][$key];
                        $further_sub_category_input_value->created_by    	                = Auth::user()->id;
                        $further_sub_category_input_value->updated_by    	                = Auth::user()->id;
                        $further_sub_category_input_value->save();

                    }
                }
            }
            /* Insert Data to Further Sub Category Input Value Table */

            DB::commit();
            return redirect()->route("sub_category_index",['module_id'=>$module_id])->with("success","Sub Category Created Successfully !!");

        }catch (\Exception $exception){
            $msg = $exception->getMessage();
            DB::rollBack();
            return redirect()->route("sub_category_index",['module_id'=>$module_id ])->with("danger","Not Added ".$msg);
        }
    }

    public function edit($module_id, $category_id, $sub_category_id)
    {
        $module    = Modules::find($module_id);
        $category                   = Category::find($category_id);
        $sub_category_input_values  = SubCategoryInputValue::join('category','category.id','sub_category_input_values.category_id')
                                                            ->select('sub_category_input_values.id','sub_category_input_values.sub_cat_input_name',
                                                                'sub_category_input_values.category_id','sub_category_input_values.input_fields_id')
                                                            ->where('sub_category_input_values.category_id', $category_id)
                                                            ->get();
        $sub_category_values        = SubCategoryValue::where('sub_category_id', $sub_category_id)->get();
        $sub_category               = SubCategory::find($sub_category_id);
        $input_fields               = InputField::all();
        // $furtherSubCatInputField use for get the input value use pluk for get the modify array
        $furtherSubCatInputField    = FurtherSubCategoryInputValue::rightjoin('input_fields', 'input_fields.id', 'further_sub_category_input_values.input_fields_id')
                                                                    ->where('sub_category_id', $sub_category_id)
                                                                    ->get()
                                                                    ->pluck('further_sub_cat_input_name', 'input_fields_id');
        return view("subcategory::edit", compact('module_id','category', 'sub_category_values', 'sub_category_input_values', 'input_fields', 'sub_category', 'furtherSubCatInputField', 'category_id','sub_category_id', 'module'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category_id' 	        => 'required',
            'sub_category_name' 	=> 'required',
        ]);

        $module_id    = $request->module_id;
        $category_id  = $request->category_id;
        $data         = $request->all();
        DB::beginTransaction();

        try{

            /*Insert Data to Category Table*/
            $sub_category 				= SubCategory::find($id);
            $sub_category->category_id 	= $data['category_id'];
            $sub_category->name         = $data['sub_category_name'];
            $sub_category->sub_cat_slug = str_replace(' ','_',  strtolower($data['sub_category_name']) );
            $sub_category->created_by 	= Auth::user()->id;
            $sub_category->update();
            /*Insert Data to Category Table Ends*/


            $sub_category_input_values  = SubCategoryInputValue::with('inputFieldId')->where('category_id', $category_id)->get();
            foreach ($sub_category_input_values as $key => $sub_category_input_value) {
                $checkSubCategoryValue = SubCategoryValue::with('inputFieldId')->where('sub_category_id', $id)->where('input_fields_id', $sub_category_input_value->input_fields_id)->first();
                if(isset($checkSubCategoryValue)){
                    $sub_category_value                                 = new SubCategoryValue();
                    $sub_category_value->sub_category_id                = $sub_category->id;
                    $sub_category_value->input_fields_id                = $sub_category_input_value->inputFieldId->id;
                    if($sub_category_input_value->inputFieldId->type == 1 && ($sub_category_input_value->inputFieldId->slug_name == isset($data[$sub_category_input_value->inputFieldId->slug_name]))){
                        $helper = new Helpers();
                        $helper->deleteFile($checkSubCategoryValue->sub_category_value);
                        $forCreateUniqueFile                        = $sub_category_input_value->inputFieldId->id;
                        $image                                      = $data[$sub_category_input_value->inputFieldId->slug_name];
                        $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                  = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                   = $directory.$imageName;
                        $sub_category_value->sub_category_value     = $imageUrl;
                    } else {
                        if($sub_category_input_value->inputFieldId->type == 1) {
                            $sub_category_value->sub_category_value   = $checkSubCategoryValue->sub_category_value;
                        } else {
                            $sub_category_value->sub_category_value   = isset($data[$sub_category_input_value->inputFieldId->slug_name])? $data[$sub_category_input_value->inputFieldId->slug_name] : '';
                        }
                    }
                    $sub_category_value->save();
                    $sub_category_value_delete 			              = $checkSubCategoryValue->delete();
                } else {

                    $sub_category_value                             = new SubCategoryValue();
                    $sub_category_value->sub_category_id            = $sub_category->id;
                    $sub_category_value->input_fields_id            = $sub_category_input_value->inputFieldId->id;
                    if($sub_category_input_value->inputFieldId->type == 1 && ($sub_category_input_value->inputFieldId->slug_name == isset($data[$sub_category_input_value->inputFieldId->slug_name]))){
                        $forCreateUniqueFile                        = $sub_category_input_value->inputFieldId->id;
                        $image                                      = $data[$sub_category_input_value->inputFieldId->slug_name];
                        $imageName                                  = time().$forCreateUniqueFile.".".$image->getClientOriginalExtension();
                        $directory                                  = 'uploads/images/category/';
                        $image->move($directory, $imageName);
                        $imageUrl                                   = $directory.$imageName;
                        $sub_category_value->sub_category_value     = $imageUrl;
                    } else {
                        $sub_category_value->sub_category_value     = isset($data[$sub_category_input_value->inputFieldId->slug_name])? $data[$sub_category_input_value->inputFieldId->slug_name] : '';
                    }
                    $sub_category_value->save();
                }
            }

            /* Insert Data to Further Sub Category Input Value Table */
            $delete_previous_further_sub_category_input_value = FurtherSubCategoryInputValue::where('sub_category_id', $id)->delete();
            $getAllInputFieldData  = (isset($data['input_fields_id']))? $data['input_fields_id']: '';
            if( isset($getAllInputFieldData) && !empty($getAllInputFieldData) ) {
                foreach ($getAllInputFieldData as $key => $value) {
                    if(isset($key) && isset($getAllInputFieldData[$key])) {

                        $further_sub_category_input_value 			                        = new FurtherSubCategoryInputValue();
                        $further_sub_category_input_value->sub_category_id                  = $sub_category->id;
                        $further_sub_category_input_value->input_fields_id                  = $value;
                        $further_sub_category_input_value->further_sub_cat_input_name       = $data['further_sub_cat_input_name'][$key];
                        $further_sub_category_input_value->created_by    	                = Auth::user()->id;
                        $further_sub_category_input_value->updated_by    	                = Auth::user()->id;
                        $further_sub_category_input_value->save();

                    }
                }
            }
            /* Insert Data to Further Sub Category Input Value Table */

            DB::commit();
            return redirect()->route("sub_category_index",['module_id'=>$module_id])->with("success","Sub Category Created Successfully !!");

        }catch (\Exception $exception){
            dd($exception);
            $msg = $exception->getMessage();
            DB::rollBack();
            return redirect()->route("sub_category_index",['module_id'=>$module_id])->with("danger","Not Added ");
        }
    }

    public function destroy($module_id, $sub_category_id)
    {
        $subcategory   = SubCategory::find($sub_category_id);

        $checkFileType = SubCategoryValue::where('sub_category_id', $sub_category_id)->get();

        foreach ($checkFileType as $key => $value) {

            if($value->inputFieldId->type == 1){
                $helper = new Helpers();
                $helper->deleteFile($value->sub_category_value);
            }

        }

        if ($subcategory->delete())
        {
            return redirect()->route("sub_category_index",['module_id' => $module_id])->with("success","Sub Category Deleted Successfully");
        }
        else
        {
        	return back()->with("danger","Something Went Wrong.Please Try Again.");
        }
        
    }

    public function checkCategoryFields($categoryId)
    {
        $data = Category::where('category.id', $categoryId)
                                ->join('modules', 'modules.id', 'category.modules_id')
                                ->join('modules_sub_category_fields', 'modules_sub_category_fields.modules_id', 'category.modules_id')
                                ->first();

        return Response::json($data);
    }

}
   