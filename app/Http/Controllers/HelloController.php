<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function test($id)
    {
        echo "Hello : $id";
    }
}
