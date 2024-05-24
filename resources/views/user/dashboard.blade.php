<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>User Dashboard</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #AEB9F6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }
        h1 {
            color: black;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 500px;
            height:310px;
        }
        form {
            margin: 20px 0;
        }
        .in {
            position: relative;
            width:100px;
            height: 100px;
            background-color: #3cb043;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            right: 15%;
            font-size: 23px;
            margin: 4px 2px;    
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }
        .in:hover {
            background-color: lightgreen;
        }
        .in:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .out {
            position: relative;
            width:100px;
            height: 100px;
            background-color: #ff3333;
            color: white;
            border: none;
            /* padding: 10px 15px; */
            text-align: center;
            text-decoration: none;
            left: 10%;
            bottom: 127px;
            font-size: 23px;
            margin: 4px 2px;    
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
        }
        .out:hover {
            background-color: pink;
        }
        .out:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .logout{
            position: relative;
            width:85px;
            height: 40px;
            background-color: #5A73F5;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            border-radius: 0.5rem;
            bottom: 100px;
        }




       
    </style>
</head>

<body>

    <!-- <h1>Welcome to User Dashboard</h1> -->
<div class="">
    @extends('layouts.app')

    @section('content')

       
        <div class="d-flex align-items-center mb-3 pb-1" style="justify-content: center;text-align: center;">
                    <i class="fa fa-check fa-2x me-3" style="color: #ff6219; font-size: 55px;"></i>
                    <span class="h1 fw-bold mb-0" >ATTCheck</span>
                  </div>       
            <form id="timeInForm" method="POST" action="{{ route('user.timein') }}">
                @csrf
                <button class="in" id="timeInBtn" type="submit" onclick="disableButton('timeInBtn')">Time In</button>
            </form>

            <form id="timeOutForm" method="POST" action="{{ route('user.timeout') }}">
                @csrf
                <button class="out" id="timeOutBtn" type="submit" onclick="disableButton('timeOutBtn')">Time Out</button>
            </form>


            <form method="POST" action="{{ route('user.logout') }}">
                @csrf
                <button class="logout" type="submit">Logout</button>
            </form>
        @endsection
    </div>
</body>
</html>
