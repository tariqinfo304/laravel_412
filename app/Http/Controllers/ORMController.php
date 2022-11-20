<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Student;
use App\Models\Classes;
use DB;

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

       /*
       $s = Student::find(2);
       echo $s->name."<br/>";
       foreach($s->bookList as $row)
       {
        echo $row->name."<br>";
       }
       */


       ////////////
       // Query Builder CURD
       ///////////////


       //Create
       // DB::table('book')->insert([
       //      "name" => "C++",
       //      "price" => 24,
       //      "author_name" => "ABC"
       // ]);

       //Update

       // DB::table("book")
       //  ->where("book_id","3")
       //  ->update(["name" => "C++ updated"]);

       //Delete

      // DB::table("book")->where("book_id",3)->delete();

       //Select
       /*
       $list = DB::table("book")->where("author_name","ABC")->get();
       foreach($list as $row)
            echo $row->name."<br>";
        */

        //One to one

        // $list = DB::table("classes")
        // ->join("student","classes.id","=","student.classes_id")
        // ->select("classes.name as class_name","student.name as std_name")
        // ->get();


        // dd($list);

        //Many to many

        // $list = DB::table("student as s")
        // ->join("student_book as sb","s.id","=","sb.student_id")
        // ->join("book as b","sb.book_id","=","b.book_id")
        // ->select("s.name as std_name","b.name as book_name")
        // ->get();

        // dd($list);



        $list = Student::orderBy("name","DESC")
                        ->take(1)
                        ->get();

        foreach($list as $row)
            echo $row->name."<br>";


    }
}
