<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected  $primaryKey="book_id";
    protected $table="book";

    
    public $timestamps = false;


    function stdList()
    {
        return $this->belongsToMany(Student::class,"student_book","student_id","book_id");
    }
}
