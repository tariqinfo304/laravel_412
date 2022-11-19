<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = "student";


    function classInfo()
    {
        return $this->hasOne(Classes::class,"id","classes_id");
    }

    function bookList()
    {
        return $this->belongsToMany(Book::class,"student_book","book_id","student_id");
    }
}
