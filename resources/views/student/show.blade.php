{{-- <td>{{$loop->iteration}}</td> --}}

@extends('layout')

@section('show')
<div class="card col-sm-10  m-5" style="height: 70%; max-width: 100%;">
    <div class="card card-header">
        <h1 class="text-center fs-2 text-primary">View Student</h1>
    </div>
    <div class="card-body text-center">                                 
        <h5 class="card-text text-primary">Name: </h5>
        <p class="card-text">{{$students->name}}</p>
        <h5 class="card-title text-primary">Age</h5>
        <p class="card-text">{{$students->age}}</p>
        <h5 class="card-title text-primary">Gender</h5>
        <p class="card-text">{{$students->gender}}</p>
        <h5 class="card-title text-primary">Address</h5>
        <p class="card-text">{{$students->address}}</p>
        <h5 class="card-title text-primary">Phone</h5>
        <p class="card-text">{{$students->phone}}</p>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>

        <div class="btn btn-primary">
            <a class="fs-5 decoration-none" href="{{route('student.index')}}" style="color: white; text-decoration: none;">
                Back
            </a>
        </div>
    </div>
</div>
@endsection