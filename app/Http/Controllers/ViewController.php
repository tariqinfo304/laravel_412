<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    function index()
    {
        $name = "tariq";
        $arr = [
            [
                "Id" => 1,
                "name" => "Ali"
            ],
            [
                "Id" => 2,
                "name" => "Hassan"
            ],
            [
                "Id" => 3,
                "name" => "Zaib"
            ],
            [
                "Id" => 4,
                "name" => "Shah Shb"
            ]
        ];



        //return view("hello",["name" => $name])->with("list",$arr);


        //return view("hello");
        //return view("hello",["name" => $name,"list" => $arr]);
        //return view("student.table");

        // if(View::exists("tariq"))
        // {
        //     return view("tariq");
        // }
        // else
        // {
        //     return view("hello",["name" => $name])->with("list",$arr);
        // }



        return view("child");
    }
}
