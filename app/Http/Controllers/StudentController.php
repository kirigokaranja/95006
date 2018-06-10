<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function openstudentform()
    {
        return view('095006.student');
    }

    function newstudent()
    {

        $this->validate(request(),[
            'studentNumber' => 'required|unique:students|integer',
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required|date',
            'address' => 'required',
        ]);
//        KIRIGO

        $student = new Student();
        $student->studentNumber = request('studentNumber');
        $student->firstName = request('firstname');
        $student->lastName = request('lastname');
        $student->dob = request('dob');
        $student->address = request('address');
        $student->save();
        return redirect('/fees');
    }
}
