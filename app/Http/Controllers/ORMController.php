<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
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



        $list = Book::all();

       /* dd($list);*/

       foreach($list as $row)
        {
            echo $row->name."<br/>";
        }

    }
}
