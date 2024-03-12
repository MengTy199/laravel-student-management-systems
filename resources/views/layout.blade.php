<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap");

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        nav {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
        }

        nav ul,
        nav ul li {
            outline: 0;
        }

        nav ul li a {
            text-decoration: none;
        }

        body {
            font-family: "Nunito", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #212140;
        }

        /* MAIN MENU */

        main {
            display: grid;
            grid-template-columns: 12% 88%;
            width: 100%;
            height: 90vh;
            margin: 40px;
            background: rgb(254, 254, 254);
            box-shadow: 0 0.5px 0 1px rgba(255, 255, 255, 0.23) inset,
                0 1px 0 0 rgba(255, 255, 255, 0.66) inset,
                0 4px 16px rgba(0, 0, 0, 0.12);
            border-radius: 15px;
            z-index: 10;
            overflow: hidden;
        }

        .main-menu {
            overflow: hidden;
            background: rgb(73, 57, 113);
            padding-top: 10px;
            border-radius: 15px 0 0 15px;
            font-family: "Roboto", sans-serif;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
        }

        .main-menu h1 {
            display: block;
            font-size: 1.5rem;
            font-weight: 500;
            text-align: center;
            margin: 0px 0 30px;
            color: #fff;
            font-family: "Nunito", sans-serif;
        }

        .p-logo {
            display: none;
        }

        .nav-item {
            position: relative;
            display: block;
        }

        .nav-item .text {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1rem;
            padding: 15px 0;
            /* margin-left: 10px; */
            /* border-top-left-radius: 20px;
            border-bottom-left-radius: 20px; */
        }

        .nav-icon {
            width: 60px;
            height: 20px;
            font-size: 20px;
        }

        .nav-text {
            display: block;
            width: 120px;
            height: 20px;
        }

        .icons {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        @media (max-width: 1500px) {
            main {
                grid-template-columns: 6% 94%;
            }

            .main-menu h1,h2 {
                display: none;
            }

            .p-logo {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .logo {
                display: block;
                width: 30px;
                align-items: center;
                margin: 20px auto;
                color: #000;
            }

            .p-logo>i {
                font-size: 40px;
            }

            .nav-text {
                display: none;
            }
        }

        @media (max-width: 1310px) {
            main {
                grid-template-columns: 8% 92%;
                margin: 30px;
            }
        }

        @media (max-width: 910px) {
            main {
                grid-template-columns: 10% 90%;
                margin: 20px;
            }
        }

        @media (max-width: 700px) {
            main {
                grid-template-columns: 15% 85%;
            }
        }

        .content {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        a, a:hover{
            color: transparent;
        }
        
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <main>
        <nav class="main-menu">
            <div style="position: relative;">
                <a href="{{url('/home')}}">
                    <h2 style="font-size: 18px; color: rgb(38, 211, 196); position: absolute;  top: 0px; left: 15px;">Admin. </h2>
                    <h1 class="fs-5 " style="margin-bottom: 5px; margin-top: 25px;"> {{ Auth::user()->name }}</h1>
                </a>
                <li class="p-logo">
                    <i class="fa-solid fa-user-tie logo"></i>
                </li>
                <ul class="icons">
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="{{url('/home')}}" class="text">
                            <i class="fa fa-house nav-icon"></i>
                            <span class="nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/student")}}" class="text">
                            <i class="fa-solid fa-user-pen nav-icon"></i>
                            <span class="nav-text">Student</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/teacher")}}" class="text">
                            <i class="fa-solid fa-user-tie nav-icon"></i>
                            <span class="nav-text">Teacher</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/course")}}" class="text">
                            <i class="fa-solid fa-graduation-cap nav-icon"></i>
                            <span class="nav-text">Course</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/batch")}}" class="text">
                            <i class="fa-solid fa-gears nav-icon"></i>
                            <span class="nav-text">Batch</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/enrollment")}}" class="text">
                            <i class="fa-regular fa-pen-to-square nav-icon"></i>
                            <span class="nav-text">Enrollment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{url("/payment")}}" class="text">
                            <i class="fa-solid fa-hand-holding-dollar nav-icon"></i>
                            <span class="nav-text">Payment</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div class=" btn  d-flex flex-row align-items-center " style="width:100%; height: 60px; ">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <div class="nav-item">
                            <div class="text">
                                <i class="fa-solid fa-user-xmark nav-icon"></i>
                                <span class=" nav-text text-light text-center" style="text-decoration: none">{{ __('Log Out') }}</span>
                            </div>
                        </div>
                    </x-responsive-nav-link>
                </form>
            </div>
        </nav>
        <section class="content">
            @yield('content')
            @yield('create')
            @yield('edit')
            @yield('home')
        </section>
    </main>
</body>

</html>