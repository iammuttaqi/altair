<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FurtherSubCategoryInputValue extends Model
{
    protected $table = "further_sub_category_input_values";

    public function furtherSubCategoryId()
    {
        return $this->belongsTo('App\Models\FurtherSubCategory','further_sub_category_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }

}
