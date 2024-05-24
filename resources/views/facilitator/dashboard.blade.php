
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Facilitator Dashboard</title>
</head>
<style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #AEB9F6;
        }
        
        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #6B7FE7;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #AEB9F6;
        }


        button {
            padding: 10px 20px;
            background-color: #88D7E9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: lightblue;
        }

</style>
<body>
<nav class="navbar" style="background-color: #5A73F5;">
  <div class="container-fluid">
                 <div class="d-flex align-items-center mb-3 pb-1" style="padding: 20px;">
                    <i class="fa fa-check fa-2x me-3" style="color: #ff6219; font-size: 30px;"></i>
                    <span class="h4 fw-bold mb-0">ATTCheck</span>
                  </div>
   
    <form class="d-flex" method="POST" action="{{ route('facilitator.logout') }}">
        @csrf
        <span class="role h4 -bold mb-0" style="padding: 10px 20px; color:white" >Facilitator</span>
        <button type="submit">Logout</button>
    </form>
  </div>
</nav>
   

@extends('layouts.app')

@section('content')

    <h1>Attendance Table</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
                <th>Time In</th>
                <th>Time Out</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendanceData as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->section }}</td>
                    <td>{{ $student->time_in }}</td>
                    <td>{{ $student->time_out }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


</body>
</html>
