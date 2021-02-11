<?php
namespace App\Lib;

use App\Models\Category;
use App\Models\Modules;
use App\Models\SubCategory;
use http\Env\Request;

class Header {

    public function menuOurPeople() {
        $ourPeople = Modules::join('category', 'category.modules_id', 'modules.id')
                                ->where('modules.slug','like','%our_people%')
                                ->get()
                                ->pluck('name','id')
                                ->toArray();
        $getOurPeople = array_slice($ourPeople,1,null,true);
        return $getOurPeople;
    }

    public function menuAreaOfPractice() {
        $areaOfPracticeNav = Modules::join('category', 'category.modules_id', 'modules.id')
                                    ->join('category_values', 'category_values.category_id','category.id' )
                                    ->join('input_fields', 'input_fields.id', 'category_values.input_fields_id')
                                    ->where('modules.slug', 'areas_of_practice')
                                    ->where('input_fields.slug_name', 'title')
                                    ->select('category_values.category_id', 'input_fields.slug_name','category_values.category_value')
                                    ->get()
                                    ->pluck('category_value','category_id');
        return $areaOfPracticeNav;
    }

    public function menuPublicationList() {
        $publicationListNav = Modules::join('category', 'category.modules_id', 'modules.id')
                                    ->where('modules.slug', 'publication')
                                    ->select('category.id', 'category.name')
                                    ->get()
                                    ->pluck('name','id');
        return $publicationListNav;
    }

    public function getLogo() {
        $logoIcon    = SubCategory::with('subCatValueId')
                                    ->where('sub_category.sub_cat_slug', 'logo')
                                    ->first();
        $getLogoIcon = $logoIcon->subCatValueId->sub_category_value;
        return $getLogoIcon;
    }

    public function getOffice1Info() {
        $office1Info    = SubCategory::join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                                                ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                                                ->where('sub_category.sub_cat_slug', 'office_1_details')
                                                ->get()
                                                ->pluck('sub_category_value', 'slug_name');
        $getOffice1Info = $office1Info;
        return $getOffice1Info;
    }

    public function getOffice2Info() {
        $office2Info    = SubCategory::join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                                        ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                                        ->where('sub_category.sub_cat_slug', 'office_2_details')
                                        ->get()
                                        ->pluck('sub_category_value', 'slug_name');
        $getOffice2Info = $office2Info;
        return $getOffice2Info;
    }

    public function getFooterAboutUs() {
        $footerAboutUsDetails  = SubCategory::join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                                            ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                                            ->where('sub_category.sub_cat_slug', 'footer_about_us_details')
                                            ->get()
                                            ->pluck('sub_category_value', 'slug_name');
        $getFooterAboutUsDetails = $footerAboutUsDetails;
        return $getFooterAboutUsDetails;
    }

    public function getUsefullLink() {
        $footerAboutUsDetails  =    Category::join('sub_category','sub_category.category_id','category.id')
                                            ->join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                                            ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                                            ->where('category.slug', 'footer_useful_links')
                                            ->get();
        foreach( $footerAboutUsDetails as $key => $value ){
            $getFooterAboutUsDetails [ $value->sub_category_id ][ $value->slug_name ] = $value->sub_category_value;
        }
        return $getFooterAboutUsDetails;
    }

    public function getSocialInfo() {
        $socialInfo = Category::join('sub_category','sub_category.category_id','category.id')
                                ->join('sub_category_values','sub_category_values.sub_category_id','sub_category.id')
                                ->join('input_fields','input_fields.id','sub_category_values.input_fields_id')
                                ->where('category.slug', 'social_link')
                                ->get()
                                ->pluck('sub_category_value','slug_name');
        return $socialInfo;
    }

    public function pathOfUrl() {
        $extendPath = $_SERVER['REQUEST_URI'];
        $p = explode('/', $extendPath);
        return $p[1];
    }
}