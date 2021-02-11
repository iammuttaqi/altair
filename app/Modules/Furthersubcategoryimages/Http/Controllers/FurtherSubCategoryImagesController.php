<?php

namespace App\Modules\Furthersubcategoryimages\Http\Controllers;

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
use App\Models\ModulesSubCategoryFields;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\FurtherSubCategory;
use App\Models\FurtherSubCategoryImages;

class FurtherSubCategoryImagesController extends Controller
{
    public  function index($id)
    {
        $company_profile            = CompanyProfile::first();
        $furthersubcategoryimagess 	= FurtherSubCategoryImages::where('further_sub_category_id', $id)->get();
        
        return view("furthersubcategoryimages::index", compact('furthersubcategoryimagess', 'company_profile'));
    }

    public function create()
    {
        $company_profile        = CompanyProfile::first();
    	$furthersubcategorys 	= FurtherSubCategory::all();
        return view("furthersubcategoryimages::create", compact('furthersubcategorys', 'company_profile'));
    }

    public function store(Request $request)
    {
       	$rules = array(
            'further_sub_category_id' 	=> 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        $user 		= Auth::user()->id;
        $data 		= $request->all();
        $check      = FurtherSubCategoryImages::where('further_sub_category_id', $data['further_sub_category_id'])->count();

        if (!isset($data['image_url_1']) && !isset($data['image_url_2']) && !isset($data['image_url_3']) && !isset($data['image_url_4']) && !isset($data['image_url_5']))
        {
        	return back()->with("danger","Please Select At Least One Image To Continue.");
        }

        try{

	        if($request->hasFile('image_url_1'))
            {	
            	$further_sub_category_images 							= new FurtherSubCategoryImages();
                $further_sub_category_images->further_sub_category_id   = $data['further_sub_category_id'];
		        $further_sub_category_images->note 	                    = $data['note_1'];
		        $further_sub_category_images->created_by 				= $user;

                $companyLogo 											= $request->file('image_url_1');
                $logoName 												= time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }

            if($request->hasFile('image_url_2'))
            {	
            	$further_sub_category_images 							= new FurtherSubCategoryImages();
		        $further_sub_category_images->further_sub_category_id 	= $data['further_sub_category_id'];
                $further_sub_category_images->note                      = $data['note_2'];
		        $further_sub_category_images->created_by 				= $user;

                $companyLogo 											= $request->file('image_url_2');
                $logoName 												= '2'.time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }


            if($request->hasFile('image_url_3'))
            {	
            	$further_sub_category_images 							= new FurtherSubCategoryImages();
		        $further_sub_category_images->further_sub_category_id 	= $data['further_sub_category_id'];
                $further_sub_category_images->note                      = $data['note_3'];
		        $further_sub_category_images->created_by 				= $user;

                $companyLogo 											= $request->file('image_url_3');
                $logoName 												= '3'.time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }


            if($request->hasFile('image_url_4'))
            {	
            	$further_sub_category_images 							= new FurtherSubCategoryImages();
		        $further_sub_category_images->further_sub_category_id 	= $data['further_sub_category_id'];
                $further_sub_category_images->note                      = $data['note_4'];
		        $further_sub_category_images->created_by 				= $user;

                $companyLogo 											= $request->file('image_url_4');
                $logoName 												= '4'.time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }

            if($request->hasFile('image_url_5'))
            {	
            	$further_sub_category_images 							= new FurtherSubCategoryImages();
		        $further_sub_category_images->further_sub_category_id 	= $data['further_sub_category_id'];
                $further_sub_category_images->note                      = $data['note_5'];
		        $further_sub_category_images->created_by 				= $user;

                $companyLogo 											= $request->file('image_url_5');
                $logoName 												= '5'.time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }

            return redirect()->back()->with("success","Further Sub Category Images Created Successfully !!");
            
        }catch (\Exception $exception){
            dd($exception);
            return back()->with("danger","Not Added");
        }
    }

    public function edit($id)
    {
        $company_profile            = CompanyProfile::first();
       	$furthersubcategoryimage    = FurtherSubCategoryImages::find($id);

        return view("furthersubcategoryimages::edit", compact('furthersubcategorys', 'furthersubcategoryimage', 'company_profile'));
    }

    public function update(Request $request, $id)
    {
       	$rules = array(
            'further_sub_category_id' 	=> 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        $user 		= Auth::user()->id;
        $data 		= $request->all();

        try{

	        if($request->hasFile('image_url_1'))
            {	
            	$further_sub_category_images 							= FurtherSubCategoryImages::find($id);

            	if($further_sub_category_images->image_url != null)
		        {
		        	unlink($further_sub_category_images['image_url']);
		        }

            	$further_sub_category_images->note 						= $data['note'];
		        $further_sub_category_images->updated_by 				= $user;

                $companyLogo 											= $request->file('image_url_1');
                $logoName 												= time().".".$companyLogo->getClientOriginalExtension();
                $directory 												= 'category-images/';
                $companyLogo->move($directory, $logoName);
                $logoUrl 												= $directory.$logoName;
                $further_sub_category_images->image_url 				= $logoUrl;
		        $further_sub_category_images->save();
            }

            return redirect(route('further_subcategory_images_index', $data['index_id']))->with("success","Further Sub Category Images Updated Successfully !!");
            
        }catch (\Exception $exception){
            dd($exception);
            return back()->with("danger","Not Added");
        }
    }

    public function destroy($id)
    {
        $further_sub_category_images = FurtherSubCategoryImages::find($id);

		
		if($further_sub_category_images->image_url != null)
        {
        	unlink($further_sub_category_images['image_url']);
        }
		

        $further_sub_category_images->delete();
        
        return back()->with("success","Images Deleted Successfully");  
    }

}
