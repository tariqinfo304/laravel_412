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

        //dd(app()->get("session"));
       //dd(session("user"));
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

        return redirect("store/user/login");
    }

    function login()
    {
        return view("store.user.login");
    }

    function check_login(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $u = User::where("email",$req->username)->first();

        if(!empty($u))
        {
            if(Hash::check($req->password,$u->password))
            {
                session(["user"=>$u]);
                return redirect("store");
            }
        }
        return back()->with(["msg"=>"Username/Password is incorrect"]);
    }


    function logout()
    {
        session()->forget("user");
        session()->flush();

        return redirect("/store/user/login");
    }
}
