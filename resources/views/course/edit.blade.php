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
    <form action="{{route('course.update', $course->id)}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Update Course
        </div>
        @csrf
        @method('put')
        <label>Name</label><br>
        <input value="{{$course->name}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>

        @enderror<label>Subject</label><br>
        <input value="{{$course->subject}}" type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror ">
        @error('subject')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>

        <label>Duration</label><br>
        <input value="{{$course->duration}}" type="text" name="duration" id="duration" class="form-control @error('duration') is-invalid @enderror ">
        @error('duration')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br />
        <button class="btn btn-warning" type="submit" style="max-width: 100px; ">Update</button>
    </form>

    @endsection
</body>

</html>