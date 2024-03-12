@extends('layout')
@section('home')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        .title {
            width: 100%;
            background: rgb(73, 57, 113);
            ;
        }


        @media (max-width: 700px) {
            .example-1 {
                position: relative;
                overflow-y: scroll;
                height: 77vh;
            }
        }
    </style>

<body>
    <div style="width: 100%; height: 100%;" class="">
        <div class="title">
            <div class="text-center py-2">
                <h1 class="text-white text-capitalize fs-2">student management systems</h1>
            </div>
        </div>
        <div class="card col-sm-12 overflow-hidden px-3 py-4  " style="width: 100%; height: 93%;">
            <div class="d-flex mb-0 example-1 scrollbar-ripe-malinka">
                <div class=" grid row  gap-4 row-cols-1 row-cols-md-3 row-cols-xxl-4 justify-content-center p-sm-1 ">
                    <div class="card p-2 col align-item-center">
                        <div class="card-header bg-info">
                            <h1 class="text-center fs-3">Student</h1>
                        </div>
                        <div class="card-body  d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left text-info"><i class="fa-solid fa-user " style="font-size: 6rem; "></i>
                            </div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Student </div>
                                <div class="result">
                                    <h1>{{$totalStudents}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-2 col">
                        <div class="card-header bg-secondary ">
                            <h1 class="text-center fs-3">Teacher</h1>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left"><i class="fa-solid fa-user-tie text-dark "
                                    style="font-size: 6rem"></i></i></div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Teacher </div>
                                <div class="result">
                                    <h1>{{$totalTeachers}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 col">
                        <div class="card-header bg-success ">
                            <h1 class="text-center fs-3">Course</h1>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left"><i class="fa-solid fa-graduation-cap text-success"
                                    style="font-size: 6rem;"></i></div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Course </div>
                                <div class="result">
                                    <h1>{{$totalCourse}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 col align-self-start">
                        <div class="card-header bg-danger">
                            <h1 class="text-center fs-3">Batch</h1>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left"><i class="fa-solid fa-gears text-danger" style="font-size: 6rem;"></i>
                            </div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Batch </div>
                                <div class="result">
                                    <h1>{{$totalBatch}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 col align-self-start">
                        <div class="card-header " style="background: rgb(201, 28, 201)">
                            <h1 class="text-center fs-3">Enrollment</h1>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left"><i class="fa-regular fa-pen-to-square "
                                    style="font-size: 6rem; color: rgb(201, 28, 201)"></i></div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Enrollment </div>
                                <div class="result">
                                    <h1>{{$totalEnrollment}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 col align-self-start">
                        <div class="card-header bg-primary">
                            <h1 class="text-center fs-3">Payment</h1>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between align-items-center" style="">
                            <div class="left"><i class="fa-solid fa-hand-holding-dollar text-primary "
                                    style="font-size: 6rem;"></i></div>
                            <div class="right flex-column d-flex align-items-center justify-content-between">
                                <div class="total">Total Payment </div>
                                <div class="result">
                                    <h1>{{$totalPayment}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- <script>
        function showAutoAlert(message) {
        const alertElement = document.createElement('p');
        alertElement.classList.add('alert'); // Use CSS to style the alert
        alertElement.textContent = message;
        document.body.appendChild(alertElement);
      
        setTimeout(() => {
          alertElement.remove();
        }, 2000); // Adjust timeout as needed
      }
      
      showAutoAlert("You're logged in!");
    </script> --}}
</body>

</html>

@endsection