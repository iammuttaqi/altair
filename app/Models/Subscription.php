<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = "subscriptions";
    
    public function createdBy()
    {
        return $this->belongsTo('App\Models\Users','created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\Models\Users','updated_by');
    }
}
