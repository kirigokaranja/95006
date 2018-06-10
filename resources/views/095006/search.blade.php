<?php
/**
 * Created by PhpStorm.
 * User: Shron
 * Date: 6/9/2018
 * Time: 1:55 PM
 */
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        form{
            width: 25%;
            margin: 3%;
            margin-left: 40%;
            margin-top: 5%;
        }
        p{text-align: center;font-size: 1.5em;}
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
        body {
            background: #000033;
            color: white;
            margin: 0;
        }
        table{
            margin-left: 30%;
            margin-top: 5%;
            border-collapse: collapse;
            width: 50%;
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
    <a href='{!! url('/allfee'); !!}'>All Fees Info</a>
    <a class="active" href='{!! url('/search'); !!}'>Search ID</a>
</div>
<form action="/searching" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="studentno"
               placeholder="Search studentNumber"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
@if(isset($details))
    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h3>Student Fee Details</h3>
    <table>
        <tr>
            <th>Student Number</th>
            <th>Amount</th>
        </tr>
        @foreach($details as $id)
            <tr>
                <td>{{$id->studentId}}</td>
                <td>{{$id->amount}}</td>
            </tr>
        @endforeach
    </table>
    @elseif(isset($message))
    <p>{{$message}}</p>
@endif
</body>
</html>
