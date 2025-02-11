<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller

{
    //
    function index(){
        return view("register");
    }
    function create(Request $req){
        $obj_user = new User;
        $obj_user -> name = $req -> input('name');
        $obj_user -> email = $req -> email;
        $obj_user -> password = $req -> password;
        $obj_user -> save();

        return redirect('/users');
    }
}