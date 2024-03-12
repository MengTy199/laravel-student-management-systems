@extends('layout')
@section('edit')
<form action="{{route('payment.update',$payment->id)}}" method="POST" class="card col-sm-12 p-sm-3 p-xl-5  p-2"
    style="width: 100%;">
    <div class="card-header" style="background-color: rgb(73, 57, 113); color: white;">
        Update Payment
    </div>
    @csrf
    @method('put')

    <label>Enrollment No</label><br>
    <select class="form-select form-control @error('gender') is-invalid @enderror " aria-label="Gender" name="gender">
        @foreach ($enrollments as $item => $enrollno)
        <option value="{{$item}}">{{$enrollno}}</option>
        @endforeach
    </select>

    <label>Paid Date</label><br>
    <input value="{{$payment->paid_date}}" type="date" value="2024-01-27" name="paid_date" id="paid_date" class="form-control @error('paid_date') is-invalid @enderror ">
    @error('paid_date')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>
    @enderror

    <label>Amount</label><br>
    <input value="{{$payment->amount}}" type="text" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror ">
    @error('amount')
    <div class="">
        <p class="text-danger">{{ $message }}</p>
    </div>
    @enderror
    <br>
    <button class="btn btn-warning" type="submit" style="max-width: 100px; ">Update</button>
</form>
@endsection