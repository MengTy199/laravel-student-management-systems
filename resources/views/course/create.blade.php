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
    <form action="{{route('course.store')}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Create Course
        </div>
        @csrf
        @method('post')
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>

        @enderror<label>Subject</label><br>
        <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror ">
        @error('subject')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>
        
        <label> Teacher Name </label> <br>
        <select class="form-select form-control @error('teacher_id') is-invalid @enderror " aria-label="teacher_id"
            name="teacher_id">
            @foreach ($teachers as $item => $name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
        </select>

        <label>Duration</label><br>
        <input type="text" name="duration" id="duration" class="form-control @error('duration') is-invalid @enderror ">
        @error('duration')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br />
        <button class="btn btn-primary" type="submit" style="max-width: 100px; ">Create</button>
    </form>

    @endsection
</body>

</html>