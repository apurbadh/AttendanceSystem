<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $req) {
        if (!$req->session()->get("isLogged")){
            return redirect('/login');
        }
        return view("home");
    }

    function doPost(Request $request) {
        $username = $request->session()->get("username");
        $name = Student::where("username", $username)->first()->name;
        $school = Student::where("username", $username)->first()->school;
        $username = Student::where("username", $username)->first()->username;

        $date = date('Y-m-d');
        $time = date('H:i:s');

        $test = Attendance::where("username", $username)->first();

        if ($test != null && $test->date == $date){
            $request->session()->flash('status', 'Your attendance has already been counted !');
            return redirect('/');
        }
        $attendance = new Attendance();
        $attendance->username = $username;
        $attendance->school = $school;
        $attendance->name = $name;
        $attendance->date = $date;
        $attendance->time = $time;

        $attendance->save();
        return redirect("/");
    }
}
