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
    <form action="{{route('teacher.store')}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Create New teacher
        </div>
        @csrf
        @method('post')
        <label>Name</label><br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>

        @enderror<label>Address</label><br>
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror ">
        @error('address')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror

        <label>Gender</label><br>
        <select class="form-select form-control @error('gender') is-invalid @enderror " aria-label="Gender" name="gender">
            <option selected value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>>
        </select>
        @error('gender')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>

        <label>Age</label><br>
        <input type="text" name="age" id="age" class="form-control @error('age') is-invalid @enderror ">
        @error('age')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror

        <label>Phone</label><br>
        <input type="number" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror ">
        @error('phone')
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