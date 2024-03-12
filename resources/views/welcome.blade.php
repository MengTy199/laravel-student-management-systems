<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class=" position-relative d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <div class="card col-xl-3 col-sm-5 col-md-6 col-11" >
            <div class="card-header">
                <p class="text-center fs-4  ">Student Management System</p>
            </div>
            <div class="card-body d-flex justify-content-between align-items-center flex-column ">
                <div class="d-flex flex-column align-items-center">
                    <div class="admin">
                        <i class="fa-solid fa-user-tie" style="font-size: 7rem; "></i>
                    </div>
                    <div class="py-2">
                        <h1>Admin</h1>
                    </div>
                </div>
                @if (Route::has('login'))
                <div class="d-flex flex-row justify-content-end align-items-end ">
                    <div>
                        @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                        @endauth
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>