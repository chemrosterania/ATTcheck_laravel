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
            top: 100px;
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
        <h1>Edit Facilitator</h1>
        <form action="{{ route('admin.update.facilitator', ['id' => $facilitator->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $facilitator->name }}">
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $facilitator->department }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Facilitator</button>
        </form>
    </div>
@endsection

</body>
</html>