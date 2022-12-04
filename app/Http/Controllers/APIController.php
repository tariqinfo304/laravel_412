<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function list()
    {
       return response()->json(\App\Models\ProductModel::all());
    }

    function user_list()
    {
       return response()->json(\App\Models\User::all());
    }
}
