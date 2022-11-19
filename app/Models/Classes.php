<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = "classes";


    function stdInfo()
    {
        return $this->hasMany(Student::class,"classes_id","id");
    }
}
