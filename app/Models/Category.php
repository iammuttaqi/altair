<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function moduleName()
    {
        return $this->belongsTo('App\Models\Modules','modules_id');
    }

    public function createdBy()
    {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Users','updated_by');
    }

    public function categoryValueId() {
        return $this->hasOne('App\Models\CategoryValue', 'category_id');
    }
}
