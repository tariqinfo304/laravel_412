<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class HomeController extends Controller
{
    function index()
    {

        //hashing//

        // $hash = Hash::make("tariq");
        // echo $hash ."<br/>";

        // if(Hash::check("tariq",$hash))
        // {
        //     echo "Good";
        // }

        // $crypt = Crypt::encryptString("tariq");

        // echo $crypt ."<br>";

        // echo Crypt::decryptString($crypt);
        // die();
        return view("store.home");
    }
}
