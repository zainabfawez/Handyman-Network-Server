<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class projectPhoto extends Model
{
    protected $table = "project_photos";
	
    public function project(){
        return $this->belongsTo(project::class);
    }
    
        
    
}
