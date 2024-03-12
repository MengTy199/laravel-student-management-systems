
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
    @section('edit')
    <form action="{{route('batch.update',$batch->id)}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Update Batch
        </div>
        @csrf
        @method('put')

        <label>Name</label><br>
        <input value="{{$batch->name}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror ">
        @error('name')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>
        
        <label> Name </label> <br>
        <select class="form-select form-control @error('course_id') is-invalid @enderror " aria-label="course_id"
            name="course_id">
            @foreach ($courses as $item => $name)
            <option value="{{$item}}">{{$name}}</option>
            @endforeach
        </select>
        <br>
        <label >Start Date</label><br>
        <input value="{{$batch->start_date}}" type="date" name="start_date" id="amount" class="form-control @error('amount') is-invalid @enderror ">
        @error('start_date')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror
        <br>
        <button class="btn btn-warning" type="submit" style="max-width: 100px; ">Update</button>
    </form>
    @endsection
</body>

</html>