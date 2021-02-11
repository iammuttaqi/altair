<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurtherSubCategoryImages extends Model
{
    protected $table = "further_sub_category_images";

    public function furtherSubCategoryImagesName()
    {
        return $this->belongsTo('App\Models\FurtherSubCategory','further_sub_category_id');
    }

    public function createdBy()
    {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Users','updated_by');
    }
}
