<?php

namespace App\Http\Controllers;

use App\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    function show()
    {
        $fees = Fee::all();
        $total = Fee::all()->sum('amount');
        return view('095006.allfee', ['fees' => $fees], ['total' => $total]);
    }
//    {
//        $student = Student::all();
//        $fees = $student->fee;
//        return view('095006.allfee', ['fees' => $fees], ['student' => $student]);
//    }

    function feeform()
    {
        return view('095006.fees');
    }
    function newfees()
    {

        $this->validate(request(), [
            'studentId' => 'required|integer|exists:students,studentNumber',
            'amount' => 'required|integer',
            'dateOfPayment' => 'required',
        ]);

        // $message = ['studentId.exists' =>"user no not found"];

        $fees = new Fee();
        $fees->studentId = request('studentId');
        $fees->amount = request('amount');
        $fees->dateOfPayment = request('dateOfPayment');
        $fees->save();
        return redirect('/allfee');
    }
}
