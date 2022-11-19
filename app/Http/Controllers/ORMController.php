<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Student;
use App\Models\Classes;

class ORMController extends Controller
{
    function index()
    {
        

        //Ceate
        // $b = new Book();
        // $b->name = "Laravel";
        // $b->price = 12.34;
        // $b->author_name=  "Tariq";
        // $b->save();

        //Update

        // $b = Book::find(1);
        // $b->name = "PHP-updated";
        // $b->save();


        //Removed

        // $b = Book::find(1);
        // $b->delete();



      //  $list = Book::all();

       /* dd($list);*/

       // foreach($list as $row)
       //  {
       //      echo $row->name."<br/>";
       //  }


       //one to one

       // $std = Student::find(1);

       // echo $std->name;
       // echo $std->classInfo->name;

       // One to Many

       // $class = Classes::find(1);

       // echo $class->name ."<br/>";

       // foreach($class->stdInfo as $row)
       //  echo $row->name."<br>";
       // //dd($class->stdInfo);


       //Many to Many

       // $b = Book::find(1);

       // echo $b->name."<br/>";
       // foreach($b->stdList as $row)
       // {
       //  echo $row->name."<br>";
       // }

       $s = Student::find(2);
       echo $s->name."<br/>";
       foreach($s->bookList as $row)
       {
        echo $row->name."<br>";
       }

    }
}
