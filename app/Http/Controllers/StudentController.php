<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStd(){
        $student= \App\Models\student::all();
        return view('listStudent',['stud'=>$student]);
    }
}
