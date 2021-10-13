<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table = "projects";
	
    public function photos(){
        return $this->hasMany(projectPhoto::class);
    }

}