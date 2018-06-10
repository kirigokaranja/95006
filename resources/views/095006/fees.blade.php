<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 6:06 AM
 */
?>
    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees Payment</title>
    <style>
        body{
            background: #000033;
            color: black;
            margin: 0;
        }
        .form{
            border-radius: 0.5em;
            box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
            background: white;
            display: block;
            max-width: 480px;
            overflow: hidden;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            padding: 2em;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
            width: 98%;
        }
        .form h1{
            font-size: 2em;
            margin: 0 0 0.5em 0;
            text-align: center;
            font-family: 'Cookie', cursive;
        }
        .form form label{
            border-bottom: 1px solid #333;
            display: block;
            font-size: 1.2em;
            margin-bottom: 0.5em;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form label input{
            background: none;
            border: none;
            line-height: 1em;
            font-weight: 300;
            padding: 0.125em 0.25em;
            width: 100%;
        }
        .form form label span.label-text{
            display: block;
            font-size: 0.8em;
            font-weight: bold;
            text-transform: uppercase;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form button.submit{
            background: rgba(255,255,255,0.25);
            border: 1px solid #333;
            line-height: 1em;
            padding: 20px;
            font-size: large;
            margin-left: 40%;
            -webkit-transition: all 0.25s;
            transition: all 0.25s;
        }
        .form form button:hover,
        .form form button:focus,
        .form form button:active,
        .form form button.loading{
            background: #333;
            color: #fff;
            outline: none;
        }
        .alert{
            background: pink;
            color: red;
            border-radius: 10px;
            border: solid 1px;
            padding-bottom: 15px;
        }
        ul {
            list-style-type: none;
            margin: 10px;
            padding: 0;
        }
        .topnav {
            overflow: hidden;
            background-color: #fab702;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 24px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: #000033;
        }

        .topnav a.active {
            background-color: #000033;
            color: white;
        }
    </style>
</head>
<body>
<div class="topnav">
    <a  href='{!! url('/'); !!}'>Home</a>
    <a href='{!! url('/student'); !!}'>Student</a>
    <a class="active" href='{!! url('/fees'); !!}'>Fees</a>
    <a href='{!! url('/allfee'); !!}'>All Fees Info</a>
    <a href='{!! url('/search'); !!}'>Search ID</a>
</div>
<div class="form">
<form method="post" action="/fees/new">
    {{csrf_field()}}
    <h1>Fee Payment</h1>
    <label></label>
    <label>
        <span class="label-text">Student Number</span>
        <input type="text" name="studentId" >
    </label>
    <label>
        <span class="label-text">Amount</span>
        <input type="text" name="amount" >
    </label>
    <label >
        <span class="label-text">Date Of Payment</span>
        <input type="date" name="dateOfPayment">
    </label><br>
    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach ($errors->get('studentId') as $message) {
    {{$message}}
    }
@endforeach
    <div class="text-center">
        <button class="submit" type="submit" name="Login">Add Fee</button>
    </div><br>
</form>
</div>
</body>
</html>
