<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    function open()
    {
        return view('095006.search');
    }

    function search()
    {
        $q = Input::get ( 'studentno' );
        if ($q != ''){
            $id = Fee::where('studentId','LIKE','%'.$q.'%')->get();

            if(count($id) > 0){
                return view('095006.search')->withDetails($id)->withQuery($q);
            }
        }return view('095006.search')->withMessage("No StudentID found");
    }
}
