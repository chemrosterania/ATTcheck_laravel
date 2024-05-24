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
</head>
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
            top: 100px;
            padding: 20px;
            background-color: #5776B2; 
            border: 3px solid lightblue;
            border-radius: 0.5rem;
        }
    </style>

<body>
@extends('layouts.app')

@section('content')
<div class="cont">
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('admin.update.student', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
        </div>

        <div class="form-group">
            <label>Year:</label>
            <input type="text" class="form-control" name="year" value="{{ $student->year }}" required>
        </div>

        <div class="form-group">
            <label>Course:</label>
            <input type="text" class="form-control" name="course" value="{{ $student->course }}" required>
        </div>

        <div class="form-group">
            <label>Section:</label>
            <input type="text" name="section" class="form-control" value="{{ $student->section }}" required>
        </div>

        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" value="{{ $student->username }}" required>
        </div>

        <button type="submit"  class="btn btn-primary">Update Student</button>
    </form>
@endsection


</body>
</html>