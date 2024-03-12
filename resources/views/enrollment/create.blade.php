<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    @extends('layout')
    @section('create')
    <form action="{{route('enrollment.store')}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Create Eronllment
        </div>
        @csrf
        @method('post')

        <label>Enroll NO</label><br>
        <input type="text" name="enroll_no" id="enroll_no"
            class="form-control @error('enroll_no') is-invalid @enderror ">
        @error('enroll_no')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror

        <label>Student Name</label><br>
        <select class="form-select form-control @error('student_id') is-invalid @enderror " aria-label="stud" name="student_id">
            @foreach ($students as $item => $name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
        </select>
        <br> 
        <label>Batch</label><br>
        <select class="form-select form-control @error('batch_id') is-invalid @enderror " aria-label="batch_id" name="batch_id">
            @foreach ($batches as $item => $name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
        </select>
        <br>

        <label>Join Date</label><br>
        <input type="date" value="2024-01-27" name="join_date" id="join_date" class="form-control @error('join_date') is-invalid @enderror ">
        @error('join_date')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>
        <label>Fee</label><br>
        <input type="text" name="fee" id="fee" class="form-control @error('fee') is-invalid @enderror ">
        @error('fee')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>
        <button class="btn btn-primary" type="submit" style="max-width: 100px; ">Create</button>
    </form>
    @endsection
</body>

</html>