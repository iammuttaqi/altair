<?php

namespace App\Modules\Companyprofile\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyProfile;
use File;
use Storage;

class CompanyprofileController extends Controller
{
    public  function showCompanyProfile()
    {
        $company_profile    = CompanyProfile::first();
        $profiles           = CompanyProfile::all();
        
        return view("companyprofile::index", compact('profiles', 'company_profile'));
    }

    public function addCompanyProfile()
    {
        $company_profile    = CompanyProfile::first();
        
        return view("companyprofile::create", compact('company_profile'));
    }

    public function saveCompanyProfile(Request $request)
    {
       $rules = array(
            'company_name'          => 'required|max:30',
            'company_address'       => 'required',
            'company_email'         => 'required',
            'company_phone'         => 'required',
            // 'company_slogan'     => 'required',
            'publication_status'    => 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);

        if ($validation->fails())
        {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $profile                        = new Companyprofile();
        $profile->company_name          = $request->company_name;
        $profile->company_address       = $request->company_address;
        $profile->company_email         = $request->company_email;
        $profile->company_phone         = $request->company_phone;
        $profile->company_phone_2       = $request->company_phone_2;
        $profile->google_map            = $request->google_map;
        // $profile->company_slogan     = $request->company_slogan;
        $profile->facebook              = $request->facebook;
        $profile->twitter               = $request->twitter;
        $profile->linkedin              = $request->linkedin;
        $profile->youtube              = $request->youtube;
        $profile->navber_text           = $request->navber_text;
        $profile->publication_status    = $request->publication_status;
        $profile->about_keyword         = $request->about_keyword;
        $profile->about_description     = $request->about_description;
        $profile->team_keyword          = $request->team_keyword;
        $profile->team_description      = $request->team_description;
        $profile->gallery_keyword       = $request->gallery_keyword;
        $profile->gallery_description   = $request->gallery_description;
        $profile->service_keyword       = $request->service_keyword;
        $profile->service_description   = $request->service_description;
        $profile->payment_keyword       = $request->payment_keyword;
        $profile->payment_description   = $request->payment_description;
        $profile->category_keyword      = $request->category_keyword;
        $profile->category_description  = $request->category_description;
        $profile->visa_keyword          = $request->visa_keyword;
        $profile->visa_description      = $request->visa_description;
        $profile->contact_keyword       = $request->contact_keyword;
        $profile->contact_description   = $request->contact_description;
        $profile->blog_keyword          = $request->blog_keyword;
        $profile->blog_description      = $request->blog_description;
        $profile->blog_details_keyword  = $request->blog_details_keyword;
        $profile->blog_details_description= $request->blog_details_description;
        $profile->blog_description      = $request->blog_description;
        $profile->blog_description      = $request->blog_description;

       try{
            if($request->hasFile('company_logo'))
            {
                $companyLogo            = $request->file('company_logo');
                $logoName               = time().".".$companyLogo->getClientOriginalExtension();
                $directory              = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                = $directory.$logoName;
                $profile->company_logo  = $logoUrl;
            }

            if($request->hasFile('logo'))
            {   
                $companyLogo                = $request->file('logo');
                $logoName                   = 'right-'.time().".".$companyLogo->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                    = $directory.$logoName;
                $profile->logo              = $logoUrl;
            }

            if($request->hasFile('fav_icon'))
            {   
                $companyLogo                = $request->file('fav_icon');
                $logoName                   = 'fav-'.time().".".$companyLogo->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                    = $directory.$logoName;
                $profileById->fav_icon      = $logoUrl;
            } 
            if($request->hasFile('header_image'))
            {   
                $header                     = $request->file('header_image');
                $logoName                   = 'header-'.time().".".$header->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $header->move(public_path($directory), $logoName);
                $headerUrl                  = $directory.$logoName;
                $profileById->header_image  = $headerUrl;
            }

            $profile->save();

            return redirect()->route("company_profile")->with("success","successfully added");

        }catch (\Exception $exception)
        {
            dd($exception->grtMessage());

            return back()->with("danger","not added");
        }
    }

    public function editCompanyProfile($id)
    {
        $company_profile    = CompanyProfile::first();
        $profileById        = CompanyProfile::find($id);
        
        return view("companyprofile::edit", compact("profileById", 'company_profile'));
    }

    public function updateCompanyProfile(Request $request, $id)
    {

        $rules = array(
            'company_name'          => 'required|max:30',
            'company_address'       => 'required',
            'company_email'         => 'required',
            'company_phone'         => 'required',
            // 'company_slogan'     => 'required',
            'publication_status'    => 'required',
        );

        $validation = Validator::make(\Request::all(),$rules);

        if ($validation->fails())
        {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $profileById                        = CompanyProfile::find($id); 
        $profileById->company_name          = $request->company_name;
        $profileById->company_address       = $request->company_address;
        $profileById->company_email         = $request->company_email;
        $profileById->company_phone         = $request->company_phone;
        $profileById->company_phone_2       = $request->company_phone_2;
        $profileById->google_map            = $request->google_map;
        // $profileById->company_slogan     = $request->company_slogan;
        $profileById->facebook              = $request->facebook;
        $profileById->twitter               = $request->twitter;
        $profileById->linkedin              = $request->linkedin;
        $profileById->youtube               = $request->youtube;
        $profileById->navber_text           = $request->navber_text;
        $profileById->about_keyword         = $request->about_keyword;
        $profileById->about_description     = $request->about_description;
        $profileById->team_keyword          = $request->team_keyword;
        $profileById->team_description      = $request->team_description;
        $profileById->gallery_keyword       = $request->gallery_keyword;
        $profileById->gallery_description   = $request->gallery_description;
        $profileById->service_keyword       = $request->service_keyword;
        $profileById->service_description   = $request->service_description;
        $profileById->payment_keyword       = $request->payment_keyword;
        $profileById->payment_description   = $request->payment_description;
        $profileById->category_keyword      = $request->category_keyword;
        $profileById->category_description  = $request->category_description;
        $profileById->visa_keyword          = $request->visa_keyword;
        $profileById->visa_description      = $request->visa_description;
        $profileById->contact_keyword       = $request->contact_keyword;
        $profileById->contact_description   = $request->contact_description;
        $profileById->blog_keyword          = $request->blog_keyword;
        $profileById->blog_description      = $request->blog_description;

        try{
            if($request->hasFile('company_logo'))
            {   
                if ($profileById['company_logo'] != null)
                {
                    unlink('public/'.$profileById['company_logo']);
                }

                $companyLogo                = $request->file('company_logo');
                $logoName                   = time().".".$companyLogo->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                    = $directory.$logoName;
                $profileById->company_logo  = $logoUrl;
            }

            if($request->hasFile('logo'))
            {   
                if ($profileById['logo'] != null)
                {
                    unlink('public/'.$profileById['logo']);
                }

                $companyLogo                = $request->file('logo');
                $logoName                   = 'right-'.time().".".$companyLogo->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                    = $directory.$logoName;
                $profileById->logo          = $logoUrl;
            }

            if($request->hasFile('fav_icon'))
            {   
                if ($profileById['fav_icon'] != null)
                {
                    unlink('public/'.$profileById['fav_icon']);
                }

                $companyLogo                = $request->file('fav_icon');
                $logoName                   = 'fav-'.time().".".$companyLogo->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $companyLogo->move(public_path($directory), $logoName);
                $logoUrl                    = $directory.$logoName;
                $profileById->fav_icon      = $logoUrl;
            }

            if($request->hasFile('header_image'))
            {   
                if ($profileById['header_image'] != null)
                {
                    unlink('public/'.$profileById['header_image']);
                }

                $header                     = $request->file('header_image');
                $logoName                   = 'header-'.time().".".$header->getClientOriginalExtension();
                $directory                  = 'company-profile-images/';
                $header->move(public_path($directory), $logoName);
                $headerUrl                  = $directory.$logoName;
                $profileById->header_image  = $headerUrl;
            }

            $profileById->save();

            return redirect()->route("company_profile")->with("success","successfully updated");

        }catch (\Exception $exception)
        {
            dd($exception);
            return back()->with("danger","not updated");
        }
    }

    public function deleteCompanyProfile($id)
    {
        $profileById    = CompanyProfile::find($id);

        if ($profileById['company_logo'] != null && Storage::disk('public')->exists('public/', $profileById['company_logo']))
        {
            unlink('public/'.$profileById['company_logo']);
        }
                
        $profileById->delete();

        return back()->with("success","successfully deleted");
    }



}
