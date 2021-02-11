<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModulesSubCategoryFields extends Model
{
    protected $table = "modules_sub_category_fields";

    public function createdBy()
    {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Users','updated_by');
    }
}
