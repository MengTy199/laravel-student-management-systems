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
    <form action="{{route('payment.store')}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
        style="width: 100%;">
        <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
            Create Payment
        </div>
        @csrf
        @method('post')

        <label>Enrollment No</label><br>
        <select class="form-select form-control @error('enrollment_id') is-invalid @enderror "
            aria-label="enrollment_id" name="enrollment_id">
            @foreach ($enrollments as $item => $enrollno)
            <option value="{{$item}}">{{$enrollno}}</option>
            @endforeach
        </select>
        @error('enrollment_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <label>Paid Date</label><br>
        <input type="date" value="2024-01-27" name="paid_date" id="paid_date"
            class="form-control @error('paid_date') is-invalid @enderror ">

        @error('paid_date')
        <div class="">
            <p class="text-danger">{{ $message }}</p>
        </div>
        @enderror

        <label>Amount</label><br>
        <input type="text" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror ">
        @error('amount')
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