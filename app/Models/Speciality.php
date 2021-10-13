<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speciality extends Model
{
    protected $table = "specialities";
	
    public function users(){
        return $this->belongsToMany(User::class, 'specialityOfSpecialist');
    }
}
