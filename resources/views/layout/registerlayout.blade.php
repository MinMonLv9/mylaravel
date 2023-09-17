<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c12ad53612.js" crossorigin="anonymous"></script>
    {{-- cssstyle --}}
    <style>
        input:focus{
            outline: none;
        }
    </style>
    {{-- cssstyle --}}
</head>
<body style="background-color: #f8f8f8">
    <div class="container-fluid">
        {{-- content-box-start --}}
        <div class="container shadow align-content-center mx-auto mt-5 bg-white border rounded-3">
            {{-- content-start --}}
            <div class="row p-5">
                {{-- left-content-start --}}
                <div class="col-5 px-5 pt-3 pb-0">
                    @yield('left-content')
                </div>
                {{-- left-content-end --}}
                {{-- right-content-start --}}
                @yield('right-content')
                {{-- right-content-end --}}
            </div>
            {{-- content-end --}}
        </div>
        {{-- content-box-end --}}
    </div>

    {{-- javascript and jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @yield('scripts')
    {{-- javascript and jquery cdn --}}
</body>
</html>
