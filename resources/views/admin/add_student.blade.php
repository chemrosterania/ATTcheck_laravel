<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #AEB9F6  ;
            margin: 0;
            padding: 0;
        }
        
        .cont{
            position: relative;
            width: 350px;
            left: 35%;
            top: 60px;
            padding: 20px;
            background-color: #5776B2; 
            border: 3px solid lightblue;
            border-radius: 0.5rem;
        }
        </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="cont">
        <h2>Add Student</h2>

        <form method="POST" action="{{ route('admin.store.student') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year') }}">
                @error('year')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" value="{{ old('course') }}">
                @error('course')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" name="section" id="section" class="form-control" value="{{ old('section') }}">
                @error('section')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
@endsection

</body>
</html>

