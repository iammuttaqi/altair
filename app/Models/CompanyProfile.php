<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = "company_profiles";

    public function createdBy()
    {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Users','updated_by');
    }
}
