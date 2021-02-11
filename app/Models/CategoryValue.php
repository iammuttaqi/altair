<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryValue extends Model
{
    protected $table = "category_values";

    public function categoryId()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }
}
