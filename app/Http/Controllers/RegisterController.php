<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index(Request $req)
    {
        if ($req->session()->get("isLogged")){
            return redirect('/login');
        }
        return view('register');
    }

    function doPost(Request $req){
        $name = $req->input("name");
        $username = $req->input("username");
        $password = $req->input("password");
        $school = $req->input("school");
        $password = Hash::make($password);

        if (Student::where("username", $username)->first() != null){
            $req->session()->flash('status', 'User already exists !');
            return redirect('/register');


        }
        $student = new Student();

        $student->name = $name;
        $student->username = $username;
        $student->school = $school;
        $student->password = $password;

        $student->save();
        $req->session()->flash('status', 'Successfully Registered');
        return redirect('/register');
    }
}
