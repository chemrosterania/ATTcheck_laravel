<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Admin Dashboard</title>
</head>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #AEB9F6  ;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #333;
        }
        h1{
            text-align:center;
            border: 2px solid #d1c7bd;
        }

        

        .btn:hover {
            opacity: 0.9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
    
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .col-md-6 {
            width: 48%;
        }

        .adminlo {
            padding: 10px 20px;
            background-color: #88D7E9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .adminlo:hover {
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
   
    <form class="d-flex" method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <span class="role h4 -bold mb-0" style="padding: 10px 20px; color: white;" >Admin Dashboard</span>
        <button class="adminlo" type="submit">Logout</button>
    </form>
  </div>
</nav>

    <div class="row">
            
            <div class="col">
                <a href="{{ route('admin.add.student') }}" type="button" class="btn btn-outline-secondary"  style="position: relative; left: 150px"><strong>Add Student</strong></a>
            </div>
            <div class="col">
                <a href="{{ route('admin.add.facilitator') }}" type="button" class="btn btn-outline-primary"  style="position: relative; right: 450px"><strong>Add Facilitator</strong></a>
            </div>
    </div>

    <!-- <div class="row row-cols-md-3 g-4" style="position:relative; margin-top: 100px; margin-bottom: 100px;">
  <div class="stu col" style="position:relative; left: 10%;">
    <div class="card h-70 w-50" style="background-color: #E19393;">
      <div class="card-body">
        <h2 class="card-title">20</h2>
        <p class="card-text">Total Number of Students</p>
      </div>
    
    </div>
  </div>
  <div class="fasi col" style="position:relative; right: 40%; ">
    <div class="card h-70 w-50" style="background-color: #A7C2A6;">
      <div class="card-body">
        <h2 class="card-title">5</h2>
        <p class="card-text">Total Number of Facilitator</p>
      </div>
    
    </div>
  </div>
  
    </div>
  </div>
</div> -->

    @extends('layouts.app')

    @section('content')
    <div class="container">
    <h2>Student Attendance Table</h2>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Year</th>
                        <th>Department</th>
                        <th>Section</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->year }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->section }}</td>
                            <td>{{ $student->time_in }}</td>
                            <td>{{ $student->time_out }}</td>
                          
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

        <div class="container" >
            

            <h2>Students</h2>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Year</th>
                        <th>Department</th>
                        <th>Section</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->year }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->section }}</td>
                            <td>
                                <a href="{{ route('admin.edit.student', ['id' => $student->id]) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('admin.delete.student', ['id' => $student->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2>Facilitators</h2>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilitators as $facilitator)
                        <tr>
                            <td>{{ $facilitator->name }}</td>
                            <td>{{ $facilitator->username }}</td>
                            <td>
                                <a href="{{ route('admin.edit.facilitator', ['id' => $facilitator->id]) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('admin.delete.facilitator', ['id' => $facilitator->id]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

    

</body>
</html>
