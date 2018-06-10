<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 5:51 AM
 */?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student and Fees</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <style>
        body{
            background: #000033;
            color: white;
        }
        .display-4  h1{
            font-size: 50pt;
            text-align: center;
            margin-top: 30pt;
            color: #fab702;
        }
        hr{
            margin-left: 25%;
            margin-right: 25%;
            border-top: 3px double #8c8b8b;
        }
        .buttonClass{
            margin-left: 35%;
            padding-top: 5%;
        }
        .btn{
            margin-right: 5%;
            padding: 30px;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>

<div class="display-4 font-weight-normal">
<h1>Welcome</h1>
    <hr>
</div>
<div class="buttonClass">
    <a href='{!! url('/student'); !!}'><button  class="btn btn-outline-warning btn-lg btn-rounded waves-effect">Register Student</button></a>
    <a href='{!! url('/fees'); !!}'><button type="button" class="btn btn-outline-warning btn-lg btn-rounded waves-effect">Pay Fees</button></a>
</div>
</body>
</html>
