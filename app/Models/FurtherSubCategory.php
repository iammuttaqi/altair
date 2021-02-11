<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurtherSubCategory extends Model
{
    protected $table = 'further_sub_category';

    public function subCategoryId()
    {
        return $this->belongsTo('App\Models\SubCategory','sub_category_id');
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
