<?php

namespace App\Lib;


use App\Models\Category;
use App\Models\SubCategory;
use App\Models\CategoryValue;
use App\Models\FurtherSubCategory;
use App\Models\FurtherSubCategoryValue;
use App\Models\InputField;
use App\Models\Modules;
use App\Models\SubCategoryValue;

class Helpers
{   
    
    public function getCategoryName($subCatId) {
        $getSubCatId = SubCategory::find($subCatId);
        $getCatId    = Category::find($getSubCatId->category_id);
        return $getCatId->name;
    }
    
    public function getMap($sub_category_id){
        $map_data   = FurtherSubCategory::join('further_sub_category_values','further_sub_category_values.further_sub_category_id','further_sub_category.id')
                            ->join('input_fields','input_fields.id','further_sub_category_values.input_fields_id')
                            ->select('further_sub_category.id as further_sub_category_id','input_fields.slug_name as slug_name',
                                    'further_sub_category_values.further_sub_category_value as further_sub_category_value'
                            )
                            ->where('further_sub_category.sub_category_id', $sub_category_id)
                            ->get();
        
        $maps = [];
        foreach( $map_data as $key => $value ){
            $maps[ $value->further_sub_category_id ]['further_sub_category_id']     = $value->category_id;
            $maps[ $value->further_sub_category_id ][$value->slug_name]             = $value->further_sub_category_value;
        }   
        
        return $maps;
    }
    
    public function getSliders($sub_category_id){
        $slider_data   = FurtherSubCategory::join('further_sub_category_values','further_sub_category_values.further_sub_category_id','further_sub_category.id')
                            ->join('input_fields','input_fields.id','further_sub_category_values.input_fields_id')
                            ->select('further_sub_category.id as further_sub_category_id','input_fields.slug_name as slug_name','further_sub_category_values.further_sub_category_value as further_sub_category_value')
                            ->where('further_sub_category.sub_category_id', $sub_category_id)
                            ->get();
                        
        $sliders = [];
        foreach( $slider_data as $key => $value ){
            $sliders[ $value->further_sub_category_id ]['further_sub_category_id']     = $value->category_id;
            $sliders[ $value->further_sub_category_id ][$value->slug_name]             = $value->further_sub_category_value;
        }   
        
        return $sliders;
    }    
    
    public function getTabs($sub_category_id){
        $tab_data   = FurtherSubCategory::join('further_sub_category_values','further_sub_category_values.further_sub_category_id','further_sub_category.id')
                            ->join('input_fields','input_fields.id','further_sub_category_values.input_fields_id')
                            ->select('further_sub_category.id as further_sub_category_id','input_fields.slug_name as slug_name',
                                    'further_sub_category_values.further_sub_category_value as further_sub_category_value'
                            )
                            ->where('further_sub_category.sub_category_id', $sub_category_id)
                            ->get();
                        
        $tabs = [];
        foreach( $tab_data as $key => $value ){
            $tabs[ $value->further_sub_category_id ]['further_sub_category_id']     = $value->category_id;
            $tabs[ $value->further_sub_category_id ][$value->slug_name]             = $value->further_sub_category_value;
        }   
        
        return $tabs;
    }
    
    public function projectList(){
        
        $project_data   = Modules::join('category','category.modules_id','modules.id')
                            ->join('category_values','category_values.category_id','category.id')
                            ->join('input_fields','input_fields.id','category_values.input_fields_id')
                            ->select('category.id as category_id',
                                    'input_fields.slug_name as slug_name',
                                    'category_values.category_value as category_value'
                            )
                            ->where('modules.slug','project')
                            ->orderBy('category_id', 'ASC')
                            ->get();
                        
        $projects = [];
        foreach( $project_data as $key => $value ){
            $projects[ $value->category_id ]['category_id']      = $value->category_id;
            $projects[ $value->category_id ][$value->slug_name]  = $value->category_value;
        }   
        
        return $projects;
    }
    
    public function companyProfile(){
        $company_profile = Category::join('category_values','category_values.category_id','category.id')
                                        ->join('input_fields','input_fields.id','category_values.input_fields_id')
                                        ->select('category_values.*','input_fields.slug_name as slug_name')
                                        ->where('category.slug','contact')
                                        ->get();

        $companys = [];
        foreach( $company_profile as $key => $value ){
            $companys [0][ $value->slug_name ]  = $value->category_value;
        }
       
        return $companys;
    }
    
    public function subscribe(){
        $subscribe   = Modules::join('category','category.modules_id','modules.id')
                            ->join('sub_category','sub_category.category_id','category.id')
                            ->join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                            ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                            ->select('sub_category_values.sub_category_value as image')
                            ->where('modules.slug','home')
                            ->where('category.slug', 'subscribe')
                            ->first();
                            
        return $subscribe;
    }
    
    public function getAllModules(){
        return Modules::all();
    }
    
    public function getCategoryId($id){
        $category = Category::select('id')->where('modules_id', $id)->first();
        
        if(isset($category['id'])){
            return $category['id'];
        }else{
            return null;
        }
    }
    
    public function setInputValue($inputId, $inputValue) {
        $input_filed      = InputField::where('id', $inputId)->select('code','type')->first();
        if($input_filed->type == 2) {
            $removeSign       = str_replace('</textarea>',$inputValue.'</textarea>',$input_filed['code']);
            $getCode          = $removeSign;
        } else {
            $removeSign       = trim($input_filed['code'], '>');
            $removeValue      = explode('value=""',$removeSign);
            $pushData         = 'value="'.$inputValue.'">';
            array_push($removeValue, $pushData);
            $getCode          = implode($removeValue);
        }
        return $getCode;
    }
    
    public function setForCategoryValues($categoryId, $inputFieldId) {
        $category_values  = CategoryValue::with('inputFieldId')
                                            ->where('category_id', $categoryId)
                                            ->where('input_fields_id', $inputFieldId)
                                            ->first();
        $input_filed      = InputField::where('id', $inputFieldId)->select('code','type')->first();

        if(isset($category_values)){
            if($input_filed->type == 2) {
                $removeSign       = str_replace('</textarea>',$category_values->category_value.'</textarea>',$input_filed['code']);
                $getCode          = $removeSign;
            } else {
                $removeSign       = trim($input_filed['code'], '>');
                $removeValue      = explode('value=""',$removeSign);
                $pushData         = 'value="'.$category_values->category_value.'">';
                array_push($removeValue, $pushData);
                $getCode          = implode($removeValue);
            }
        } else {
            $getCode = $input_filed->code;
        }
        return $getCode;
    }
    
    public function setForSubCategoryValues($subCategoryId, $inputFieldId) {
        $sub_category_values  = SubCategoryValue::with('inputFieldId')
                                                ->where('sub_category_id', $subCategoryId)
                                                ->where('input_fields_id', $inputFieldId)
                                                ->first();
        $input_filed      = InputField::where('id', $inputFieldId)->select('code','type')->first();
        if(isset($sub_category_values)){
            if($input_filed->type == 2) {
                $removeSign       = str_replace('</textarea>',$sub_category_values->sub_category_value.'</textarea>',$input_filed['code']);
                $getCode          = $removeSign;
            } else {
                $removeSign       = trim($input_filed['code'], '>');
                $removeValue      = explode('value=""',$removeSign);
                $pushData         = 'value="'.$sub_category_values->sub_category_value.'">';
                array_push($removeValue, $pushData);
                $getCode          = implode($removeValue);
            }
        } else {
            $getCode = $input_filed->code;
        }
        return $getCode;
    }
    
    public function setForFurtherSubCategoryValues($furtherSubCategoryId, $inputFieldId) {

        $further_sub_category_values  = FurtherSubCategoryValue::with('inputFieldId')
                                                ->where('further_sub_category_id', $furtherSubCategoryId)
                                                ->where('input_fields_id', $inputFieldId)
                                                ->first();

        $input_filed      = InputField::where('id', $inputFieldId)->select('code','type')->first();
        if(isset($further_sub_category_values)){
            if($input_filed->type == 2) {
                $removeSign       = str_replace('</textarea>',$further_sub_category_values->further_sub_category_value.'</textarea>',$input_filed['code']);
                $getCode          = $removeSign;
            } else {
                $removeSign       = trim($input_filed['code'], '>');
                $removeValue      = explode('value=""',$removeSign);
                $pushData         = 'value="'.$further_sub_category_values->further_sub_category_value.'">';
                array_push($removeValue, $pushData);
                $getCode          = implode($removeValue);
            }
        } else {
            $getCode = $input_filed->code;
        }
        return $getCode;
    }

    public function deleteFile($path) {
        
        //$path = str_replace('public/', ' ', $path);
        
        if($path != null) {
            unlink($path);
        }
    }

    public function getFooterImage() {
        $ourPortfolioData  = Modules::join('category','category.modules_id','modules.id')
            ->join('sub_category','sub_category.category_id','category.id')
            ->join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
            ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
            ->select('category.id as category_id', 'sub_category.id as sub_category_id', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
            ->where('modules.slug','home')
            ->where('category.slug', 'our_portfolio')
            ->orderBy('category_id', 'ASC')
            ->get();
        $ourPortfolios = [];
        foreach( $ourPortfolioData as $key => $value ){
            $ourPortfolios[ 'sub_category_id' ]  = $value->sub_category_id;
            $ourPortfolios[ $value->slug_name ]  = $value->sub_category_value;
        }
        return $ourPortfolios;
    }

    public function getServices() {
        $servicesData     = Modules::leftjoin('category', 'category.modules_id', 'modules.id')
                            ->leftjoin('sub_category','sub_category.category_id','category.id')
                            ->select('category.id as category_id', 'category.name as category_name', 'sub_category.id as sub_category_id', 'sub_category.name as sub_category_name')
                            ->where('modules.slug', 'services')
                            ->orderBy('sub_category_id', 'ASC')
                            ->get();

        $categories = [];
        $services   = [];
        foreach( $servicesData as $key => $value )
        {
            $categories[ $value->category_id ]['id']                                                   = $value->category_id;
            $categories[ $value->category_id ]['name']                                                 = $value->category_name;
            $services [ $value->category_id ][ $value->sub_category_id ]['id']                         = $value->sub_category_id;
            $services [ $value->category_id ][ $value->sub_category_id ]['name']                       = $value->sub_category_name;
        }

        $data[0]    = $categories;
        $data[1]    = $services;

        return $data;
    }

    public function getClients() {
        // Clients Data
        $clientsData   = Modules::leftjoin('category','category.modules_id','modules.id')
                            ->leftjoin('sub_category','sub_category.category_id','category.id')
                            ->leftjoin('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                            ->leftjoin('input_fields','input_fields.id','sub_category_values.input_fields_id')
                            ->select('sub_category.id as sub_category_id', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
                            ->where('modules.slug','clients')
                            ->where('category.slug', 'clients')
                            ->orderBy('sub_category_id', 'ASC')
                            ->get();

        $clients = [];
        foreach( $clientsData as $key => $value ){
            $clients [ $value->sub_category_id ][ $value->slug_name ] = $value->sub_category_value;
        }

        return $clients;
    }

    public function getContactInformation() {
        // Contact Data
        $contactData = Modules::leftjoin('category','category.modules_id','modules.id')
                            ->leftjoin('sub_category','sub_category.category_id','category.id')
                            ->leftjoin('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                            ->leftjoin('input_fields','input_fields.id','sub_category_values.input_fields_id')
                            ->select('sub_category.name as sub_category_name', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
                            ->where('modules.slug','settings')
                            ->where('category.slug', 'contact_information')
                            ->orderBy('sub_category_id', 'ASC')
                            ->get();

        $contact     = [];
        foreach( $contactData as $key => $value ){
            $contact [ $value->sub_category_name ] = $value->sub_category_value;
        }

        return $contact;
    }

    public function getOtherInformation() {
        // Other Data
        $otherData = Modules::leftjoin('category','category.modules_id','modules.id')
                            ->leftjoin('sub_category','sub_category.category_id','category.id')
                            ->leftjoin('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                            ->leftjoin('input_fields','input_fields.id','sub_category_values.input_fields_id')
                            ->select('sub_category.name as sub_category_name', 'input_fields.slug_name as slug_name', 'sub_category_values.sub_category_value as sub_category_value')
                            ->where('modules.slug','settings')
                            ->where('category.slug', 'other_information')
                            ->orderBy('sub_category_id', 'ASC')
                            ->get();

        $other     = [];
        foreach( $otherData as $key => $value ){
            $other [ $value->sub_category_name ] = $value->sub_category_value;
        }

        return $other;
    }
}