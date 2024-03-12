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
        <p class="text-bold py-2 fs-4 text-primary fw-bold"> Payment</p>
    </div>
    <div class="card-body px-5">
        <a href="{{route('payment.create')}}" class="btn btn-success btn-sm" title="Add New Payment">
            <i class="fa fa-plus"></i> Add New
        </a>
        <br>
        <br>
        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table  table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment NO</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $key => $payment)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$payment->enrollment->enroll_no}}</td>
                        <td>{{$payment->paid_date}}</td>
                        <td><span style="font-size: 14px; ">$</span>{{$payment->amount }}</td>
                        <td class="d-flex algin-item-center justify-content-center">
                            <a href="{{route('payment.edit',$payment->id )}}" title="payment">
                                <button class="btn ">
                                    <i class="fa-regular fa-pen-to-square fs-4 text-warning"></i>
                                </button>
                            </a>
                            <form action="{{route('payment.destroy', $payment->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn " data-toggle="modal" data-target="#staticBackdrop">
                                    <i class="fa-solid fa-trash fs-4 text-danger"></i> </button>
                            </form>
                            <a href="{{url("/report/report1/".$payment->id)}}" title="payment">
                                <button class="btn ">
                                    <i class="fa-solid fa-print fs-4 text-primary"></i>
                                </button>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection