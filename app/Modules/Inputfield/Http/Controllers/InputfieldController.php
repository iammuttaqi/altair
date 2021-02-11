<?php

namespace App\Modules\Inputfield\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

// Models
use App\Models\InputField;
use App\Models\CompanyProfile;



class InputfieldController extends Controller
{
    public  function index()
    {
        $input_fields    = InputField::all();
        return view("inputfield::index", compact('input_fields'));
    }

    public function create()
    {
        return view("inputfield::create");
    }

    public function store(Request $request)
    {
        $rules = array(
            'name' 			=> 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $user 		= Auth::user()->id;
        $data 		= $request->all();
        
        try{
            $inputfield 			      = new InputField();
            $inputfield->name             = $data['name'];
            $inputfield->slug_name 		  = $data['slug_name'];
            $inputfield->code 		      = $data['code'];
            $inputfield->type             = $data['type'] ? 1 : 'null';
            $inputfield->created_by       = $user;
            $inputfield->updated_by       = $user;

            if ($inputfield->save())
            {
                return redirect()->route("inputfield_index")->with("success","Input Field Created Successfully !!");
            }else
            {
                return redirect()->route("inputfield_index")->with("danger","Something Went Wrong.Please Try Again.");
            }

        }catch (\Exception $exception){
            dd($exception);
            return back()->with("danger","Not Added");
        }
    }

    public function edit($id)
    {
        $input_field    = InputField::find($id);
        return view("inputfield::edit", compact('input_field'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'name' 	=> 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);

        if ($validation->fails())
        {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $user 		= Auth::user()->id;
        $data 		= $request->all();

        try{

            $inputfield 			      = InputField::find($id);
            $inputfield->name             = $data['name'];
            $inputfield->slug_name 		  = $data['slug_name'];
            $inputfield->code 		      = $data['code'];
            $inputfield->type             = $data['type'];
            $inputfield->created_by       = $user;
            $inputfield->updated_by       = $user;

            if ($inputfield->save())
            {
                return redirect()->route("inputfield_index")->with("success","Inputfield Updated Successfully !!");
            }
            else
            {
                return redirect()->route("inputfield_index")->with("danger","Something Went Wrong.Please Try Again.");
            }

        }catch (\Exception $exception){

            return back()->with("danger","Not Added");
        }
    }

    public function destroy($id)
    {
        dd("You are not authorized to perform this operation. Please contact your service provider.");
        // $inputfield = InputField::find($id);

        // if ($inputfield->delete())
        // {
        //     return back()->with("success","Inputfield Deleted Successfully");
        // }
        // else
        // {
        //     return back()->with("danger","Something Went Wrong.Please Try Again.");
        // }
    }

}
