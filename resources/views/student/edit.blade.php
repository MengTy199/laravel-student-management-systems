@extends('layout')
@section('edit')

<form action="{{route('student.update',$student->id)}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
    style="width: 100%;">
    <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
        Update Student
    </div>
    @csrf
    @method('put')
    <label>Name</label><br>
    <input value="{{$student->name}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror ">
    @error('name')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>

    @enderror<label>Address</label><br>
    <input value="{{$student->address}}" type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror ">
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

    <label>Age</label><br>
    <input value="{{$student->age}}" type="text" name="age" id="age" class="form-control @error('age') is-invalid @enderror ">
    @error('age')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>
    @enderror

    <label>Date Of Birth</label><br>
    <input value="{{$student->date_of_birth}}" type="date" name="date_of_birth" id="age" class="form-control @error('age') is-invalid @enderror ">
    @error('date_of_birth')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>
    @enderror

    <label>Phone</label><br>
    <input value="{{$student->phone}}" type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror ">
    @error('phone')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>
    @enderror
    <br />
    <button class="btn btn-warning" type="submit" style="max-width: 100px; ">Update</button>
</form>


@endsection