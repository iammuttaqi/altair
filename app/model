<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    public function package()
    {
        return $this->hasMany('App\Models\Package','service_id');
    }
}
