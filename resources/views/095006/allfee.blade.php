<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 11:16 AM
 */
?>
<html>
<head>
    <title>All Fee Information</title>
    <style>
        body {
            background: #000033;
            color: white;
            margin: 0;
        }
        table{
            margin-left: 20%;
            margin-top: 5%;
            border-collapse: collapse;
            width: 50%;
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
        th {
            background-color: #fab702;
            color: white;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        h3{
            text-align: center;
            margin-top: 5%;
            font-size: 2.5em;
        }
    </style>
</head>
<body>
<div class="topnav">
    <a  href='{!! url('/'); !!}'>Home</a>
    <a href='{!! url('/student'); !!}'>Student</a>
    <a  href='{!! url('/fees'); !!}'>Fees</a>
    <a class="active" href='{!! url('/allfee'); !!}'>All Fees Info</a>
    <a href='{!! url('/search'); !!}'>Search ID</a>
</div><br>
<table>
    <tr>
        <th>Student Id</th>
        <th>Amount</th>
        <th>Date of Payment</th>
    </tr>
    @foreach ($fees as $fee)
        <tr>
            <td>{{$fee->studentId}}</td>
            <td>{{$fee->amount}}</td>
            <td>{{$fee->dateOfPayment}}</td>

            {{--<td>{{$student->firstName}}</td>--}}
        </tr>
    @endforeach
    <h3>TOTAL: Ksh {{$total}}</h3>

</table>
</body>
</html>
