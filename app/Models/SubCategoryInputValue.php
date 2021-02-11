<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategoryInputValue extends Model
{
    protected $table = "sub_category_input_values";

    public function categoryId()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }

}
