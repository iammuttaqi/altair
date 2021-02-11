<?php

namespace App\Modules\Module\Http\Controllers;

use App\Models\CategoryInputValue;
use App\Models\InputField;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use File;

//Models
use App\Models\Users;
use App\Models\CompanyProfile;
use App\Models\Modules;
use DB;

class ModuleController extends Controller
{
    public  function index()
    {
        $modules    = Modules::orderBy('serial', 'ASC')->get();

        return view("module::index", compact('modules'));
    }

    public function create()
    {   
        $input_fields   = InputField::all();
        return view("module::create", compact('input_fields'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'module_name'  =>'required',
        ]);

        $data 		= $request->all();

        DB::beginTransaction();
        try{

            /* Insert Data in Module Table */

            $module 			            = new Modules();
            $module->name                   = $data['module_name'];
            $module->icon_code              = $data['icon_code'];
            $module->slug                   = str_replace(' ','_',  strtolower($data['module_name']) );
            $module->category               = isset($data['category']) ? $data['category'] : null;
            $module->sub_category           = isset($data['sub_category']) ? $data['sub_category'] : null;
            $module->further_sub_category   = isset($data['further_sub_category']) ? $data['further_sub_category'] : null;
            $module->created_by             = Auth::user()->id;
            $module->save();

            if ($module->save()){

                /* Insert Data in Category Input Value Table */

                $getAllInputFieldData  = isset($data['input_fields_id']) ? $data['input_fields_id'] : '';

                if(isset($getAllInputFieldData) && !empty($getAllInputFieldData)) {

                    foreach($getAllInputFieldData as $key => $value) {

                        if (isset($key) && isset($getAllInputFieldData[$key])) {

                            $category_input_value                               = new CategoryInputValue();
                            $category_input_value->modules_id                   = $module->id;
                            $category_input_value->input_fields_id              = $value;
                            $category_input_value->name                         = $data['name'][$key];
                            $category_input_value->created_by                   = Auth::user()->id;
                            $category_input_value->updated_by                   = Auth::user()->id;
                            $category_input_value->save();

                        }
                    }
                }


                DB::commit();
                return redirect()->route("module_index")->with("success","Module Created Successfully !!");
                /* Insert Data in Category Input Value Table  Ends*/

            }

            /* Insert Data in Module Table Ends*/

        }catch (\Exception $exception){
            DB::rollBack();
            $msg = $exception->getMessage(); dd($msg);
            return back()->with("danger","Not Created ".$msg);
        }
    }

    public function edit($id)
    {
       	$module                     = Modules::find($id);
        $input_fields               = InputField::all();
        $category_input_value       = CategoryInputValue::where('modules_id',$module->id)
                                                        ->get()
                                                        ->pluck('name', 'input_fields_id');
        return view("module::edit", compact('module','input_fields','category_input_value'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'module_name'  =>'required',
        ]);

        $data 		= $request->all();

        DB::beginTransaction();
        try{

            /* Insert Data in Module Table */

            $module 			            = Modules::find($id);
            $module->name                   = $data['module_name'];
            $module->icon_code              = $data['icon_code'];
            $module->slug                   = str_replace(' ','_',  strtolower($data['module_name']) );
            $module->category               = isset($data['category']) ? $data['category'] : null;
            $module->sub_category           = isset($data['sub_category']) ? $data['sub_category'] : null;
            $module->further_sub_category   = isset($data['further_sub_category']) ? $data['further_sub_category'] : null;
            $module->updated_by             = Auth::user()->id;
            $module->update();

            if ($module->update()){
                /* Insert Data in Category Input Value Table */

                $delete_previous_category_input_value = CategoryInputValue::where('modules_id', $module->id)->delete();

                $getAllInputFieldData  = isset($data['input_fields_id']) ? $data['input_fields_id'] : '';

                if(isset($getAllInputFieldData) && !empty($getAllInputFieldData)) {

                    foreach($getAllInputFieldData as $key => $value) {

                        if (isset($key) && isset($getAllInputFieldData[$key])) {

                            $category_input_value                               = new CategoryInputValue();
                            $category_input_value->modules_id                   = $module->id;
                            $category_input_value->input_fields_id              = $value;

                            $category_input_value->name                         = $data['name'][$key];
                            $category_input_value->created_by                   = Auth::user()->id;
                            $category_input_value->updated_by                   = Auth::user()->id;

                            $category_input_value->save();

                        }
                    }
                }


                DB::commit();
                return redirect()->route("module_index")->with("success","Module Updated Successfully !!");
                /* Insert Data in Category Input Value Table  Ends*/

            }

            /* Insert Data in Module Table Ends*/

        }catch (\Exception $exception){
            DB::rollBack();
            dd($exception);
            $msg = $exception->getMessage();
            return back()->with("danger","Not Created ".$msg);
        }
    }

    public function destroy($id)
    {

        // dd("You are not authorized to perform this operation.");        
        
        $module = Modules::find($id);
        
        if ($module->delete())
        {
        	return back()->with("success","Module Deleted Successfully");
        }else
        {
        	return back()->with("danger","Something Went Wrong.Please Try Again.");
        }
    }
}
