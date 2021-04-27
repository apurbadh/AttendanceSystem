<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class LogController extends Controller
{
    function index(Request $req)
    {
        if (!$req->session()->get("isLogged")){
            return redirect('/login');
        }
        if ($req->input("data") == "yours"){
            $logs = Attendance::all()->where("username", $req->session()->get("username")[0]);
        }else if ($req->input("data")  == "school" ){
            $school = Student::all()->where("username", $req->session()->get("username")[0])->first()->school;
            $logs = Attendance::all()->where("school", $school);
        }else {
            $logs = Attendance::all();
        }
        return view("logs", ["logs" => $logs]);
    }


}
