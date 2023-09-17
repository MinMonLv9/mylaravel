<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- title-start --}}
    <title>@yield('title')</title>
    {{-- title-end --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c12ad53612.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid" style="background-color: #f1f1f1;">
        {{-- noti-bar-start --}}
        <div class="row align-content-center"
            style="height:70px; display:flex; justify-content: flex-end; font-size:20px; background-color:#1F2937;">
            {{-- account-box-start --}}
            <div class="col-2">
                <div class="d-inline-flex text-white">
                    @if (Session::has('staff'))
                        <a href="{{ route('staffprocess.show', [Session::get('staff')['id']]) }}">
                            {{ Session::get('staff')['staffname'] }}
                        </a>
                    @else
                        {{ url('/stafflogin') }}
                    @endif
                </div>
            </div>
            {{-- account-box-end --}}
            {{-- logout-box-start --}}
            <div class="col-1">
                <a class="text-white link-underline link-underline-opacity-0"
                    href="{{ url('staffprocess/logout') }}">Logout</a>
            </div>
            {{-- logout-box-end --}}
        </div>
        {{-- noti-bar-end --}}
        <div class="container mw-100">
            {{-- banner-start --}}
            {{-- <div class="row mt-4">
            @yield("banner image")
        </div> --}}
            {{-- banner-end --}}
            {{-- navbar-start --}}
            <div class="row pt-2 mb-2">
                <nav class="col-12 navbar navbar-expand-lg navbar-dark p-1 border border-dark rounded-1"
                    style="background-color:#254252;">
                    <div class="container-fluid">
                        {{-- navbar-logo-start --}}
                        <div class="navbar-brand">
                            <strong>
                                Logo
                            </strong>
                        </div>
                        {{-- navbar-logo-end --}}
                        {{-- nav-links-start --}}
                        <div class="collapse navbar-collapse"
                            style="display: flex; justify-content:flex-end; font-size:20px;" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('staffprocess') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('shopprocess') }}">Shop Requests</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('staffprocess/stafflist') }}">Staffs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('roleprocess') }}">Roles</a>
                                </li>
                            </ul>
                        </div>
                        {{-- nav-links-end --}}
                    </div>
                </nav>
            </div>
            {{-- navbar-end --}}
            {{-- content-start --}}
            <div class="row" style="">
                {{-- sidebar-start --}}
                <div id="sidebarMenu" class="col-2 border rounded-2 collapse d-lg-block sidebar collapse bg-white">
                    <div class="list-group list-group-flush mt-2">
                        <a href="" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-line fa-fw"></i><span>Add New Book</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-line fa-fw"></i><span>Publishers</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-chart-pie fa-fw"></i><span>Orders</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-bar fa-fw"></i><span>FAQs</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-globe fa-fw"></i><span>Calendar</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-building fa-fw"></i><span>Accounts</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-calendar fa-fw"></i><span>Sales</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-users fa-fw"></i><span>Staffs</span></a>
                        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-money-bill fa-fw"></i><span>Messages</span></a>
                    </div>
                </div>
                <!-- sidebar-end -->
                {{-- main-content-start --}}
                <div class="col-10">
                    <div class="row ms-1  border rounded-2 p-2" style="background-color:#E4E6E7 ;">
                        @yield('ContentB_DataArea')
                    </div>
                </div>
                {{-- main-content-end --}}
            </div>
            {{-- content-end --}}
            {{-- footer-start --}}
            <div class="row mt-2">
                <div class="col-12 border rounded-1 text-center p-4" style="color:white; background-color: #475E67;">
                    144 Strand Road, Lanmadaw
                    +959770055943
                    <hr>
                    © 2023 Copyright:
                    <a class="text-reset fw-bold" href="">MinnMon</a>
                </div>
                <!-- Copyright -->
            </div>
            {{-- footer-end --}}
        </div>
        {{-- javascript and jquery cdn --}}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
        @yield('scripts')
        {{-- javascript and jquery cdn --}}
</body>

</html>
