<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- title-start --}}
    <title>@yield("title")</title>
    {{-- title-end --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c12ad53612.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid" style="background-color: #E2DDBF;">
        <div class="row align-content-center" style="height:70px; display:flex; justify-content: flex-end; font-size:20px; background-color:#183153;">
            {{-- account-box-start --}}
            <div class="col-2">
                <div class="row text-white">
                    @yield("accountbox")
                </div>
            </div>
            {{-- account-box-end --}}
            {{-- logout-box-start --}}
            <div class="col-1">
                <a class="text-white link-underline link-underline-opacity-0" href="">Logout</a>
            </div>
            {{-- logout-box-end --}}
        </div>
        {{-- noti-bar-end --}}
        <div class="container">
        {{-- banner-start --}}
        <div class="row mt-4">
            @yield('banner image')
        </div>
        {{-- banner-end --}}
        {{-- navbar-start --}}
        <div class="row pt-2 mb-2">
            <nav class="col-12 navbar navbar-expand-lg navbar-dark p-1 border border-dark rounded-1" style="background-color:#254252;">
                <div class="container-fluid">
                    {{-- navbar-logo-start --}}
                    <div class="navbar-brand">
                        <strong>
                            Logo
                        </strong>
                    </div>
                    {{-- navbar-logo-end --}}
                    {{-- nav-links-start --}}
                  <div class="collapse navbar-collapse" style="display: flex; justify-content:flex-end; font-size:20px;" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Request Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('status')" href="#">My Requests</a>
                        </li>
                    </ul>
                  </div>
                  {{-- nav-links-end --}}
                </div>
              </nav>
        </div>
        {{-- navbar-end --}}
        {{-- content-start --}}
        <div class="row border rounded-1" style="">
            {{-- sidebar-start --}}
            <div id="sidebarMenu" class="col-3 collapse d-lg-block sidebar collapse bg-white">
                <div class="list-group list-group-flush mt-2">
                    @section('sidebar')
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
                        <i class="fas fa-chart-area fa-fw"></i><span>All</span>
                    </a>
                    {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                        ><i class="fas fa-lock fa-fw"></i><span>Categories</span></a
                    > --}}
                    @show
                </div>
            </div>
            <!-- sidebar-end -->
            {{-- main-content-start --}}
            <div class="col-9" style="background-color:#E4E6E7 ;">
                @yield("ContentB_DataArea")
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @yield('scripts')
    {{-- javascript and jquery cdn --}}
</body>
</html>
