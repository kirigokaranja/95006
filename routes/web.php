<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('095006.home');
});

//OPEN STUDENT FORM
Route::get('/student','StudentController@openstudentform');

//ADD NEW STUDENT
Route::post('/student/new','StudentController@newstudent');

//OPEN FEES FORM
Route::get('/fees','FeeController@feeform');

//ADD FEE DETAILS
Route::post('/fees/new', 'FeeController@newfees');

//VIEW ALL FEE INFORMATION
Route::get('/allfee','FeeController@show');

//SHOW SEARCH PAGE
Route::get('/search', 'QueryController@open');

//SEARCH STUDENT NUMBER
Route::post('/searching', 'QueryController@search');