<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index(Request $req) {
        if ($req->session()->get("isLogged")){
            return redirect('/login');
        }
        return view('login');
    }
    function doPost(Request $req){
        $username = $req->input("name");
        $password = $req->input("password" );
        $student = Student::where("username", $username)->first();
        if ($student == null) {
            $req->session()->flash('status', "User doesn't exist !");
            return redirect('/login');
        }
        if (Hash::check($password, $student->password) == 1){
            $req->session()->push("isLogged", true);
            $req->session()->push("username",$username );
            return redirect('/');
        }else{
            $req->session()->flash('status', "Password doesn't match !");
            return redirect('/login');
        }

    }
}
