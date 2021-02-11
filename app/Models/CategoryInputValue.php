<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryInputValue extends Model
{
    protected $table = 'category_input_values';

    public function moduleId()
    {
        return $this->belongsTo('App\Models\Modules','modules_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }
}
