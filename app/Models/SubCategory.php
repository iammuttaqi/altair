<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_category";

    public function categoryId()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function subCatValueId() {
        return $this->hasOne('App\Models\SubCategoryValue', 'sub_category_id');
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
