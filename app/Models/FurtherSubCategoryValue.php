<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurtherSubCategoryValue extends Model
{
    protected $table = "further_sub_category_values";

    public function subCategoryId()
    {
        return $this->belongsTo('App\Models\SubCategory','sub_category_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }

}
