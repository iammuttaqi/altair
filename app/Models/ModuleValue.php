<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleValue extends Model
{
    protected $table = 'modules_values';

    public function moduleId(){
        return $this->belongsTo('App\Models\Modules','modules_id');
    }

    public function inputFieldId()
    {
        return $this->belongsTo('App\Models\InputField','input_fields_id');
    }

}
