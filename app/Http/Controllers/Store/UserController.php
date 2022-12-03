<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register()
    {
        return view("store.user.register");
    }
    function register_save(Request $request)
    {
        $request->validate([
            "name" =>"required",
            "email" => "required",
            "password" => "required"
        ]);

        $u = new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($request->password);
        $u->save();

        echo "saved";
        //return view("store.user.register");
    }
}
