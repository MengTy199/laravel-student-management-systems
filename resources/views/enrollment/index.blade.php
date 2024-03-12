@extends('layout')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<style>
    .modal-backdrop {
        display: none;
    }

    .my-custom-scrollbar {
        position: relative;
        height: 70vh;
        overflow: auto;
    }

    .table-wrapper-scroll-y {
        display: block;
    }
</style>
<div class="card col-sm-12" style="max-width: 100%; height: 100%;">
    @if (session('create'))
    <div class="alert alert-success">
        {{ session('create') }}
    </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-success">
        {{ session('delete') }}
    </div>
    @endif
    @if (session('update'))
    <div class="alert alert-success">
        {{ session('update') }}
    </div>
    @endif
    <div class="card-header">
        <p class="text-bold py-2 fs-4 text-primary fw-bold"> Enrollment</p>
    </div>
    <div class="card-body px-5">
        <a href="{{route('enrollment.create')}}" class="btn btn-success btn-sm" title="Add New Enrollment">
            <i class="fa fa-plus"></i> Add New
        </a>
        <br>
        <br>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enroll NO</th>
                        <th>Batch Name</th>
                        <th>Student Name</th>
                        <th>Join Date</th>
                        <th>Fee</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enrollments as $key => $enrollment)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$enrollment->enroll_no}}</td>
                        <td>{{$enrollment->batch->name}}</td>
                        <td>{{$enrollment->student->name}}</td>
                        <td>{{$enrollment->join_date}}</td>
                        <td><span style="font-size: 14px; ">$</span>{{$enrollment->fee }}</td>
                        <td class="d-flex algin-item-center justify-content-center">
                            <a href="{{route('enrollment.edit',$enrollment->id )}}" title="enrollment">
                                <button class="btn ">
                                    <i class="fa-regular fa-pen-to-square fs-4 text-warning"></i>
                                </button>
                            </a>
                            <form action="{{route('enrollment.destroy', $enrollment->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn " data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fa-solid fa-trash fs-4 text-danger"></i> </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection