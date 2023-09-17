    {{-- messagebox start --}}
    @if (Session::has('message'))
        <div class="row alert {{ Session::get('alert-class') }} alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    {{-- messagebox end --}}
    @extends('layout.registerlayout')
    @section('left-content')
        {{-- title-start --}}
        <div class="row">
            <div class="col-6 text-lg mb-4">
                <h3 class="w-100 bold">Shop Login</h3>
            </div>
        </div>
        {{-- title-end --}}
        {{-- form-start --}}
        <form action="{{ url('shopValidate') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- inputbox-email-start --}}
            <div class="row border-bottom border-dark text-dark mb-4">
                <div class="col-12 mb-1">
                    <div class="row">
                        {{-- email-icon-start --}}
                        <div class="col-1">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        {{-- email-icon-end --}}
                        {{-- input-email-start --}}
                        <div class="col-11 ps-2">
                            <input class="border border-0" type="email" name="email" placeholder="Your Email"
                                id="">
                        </div>
                        {{-- input-email-end --}}
                    </div>
                </div>
            </div>
            {{-- inputbox-email-end --}}
            {{-- inputbox-password-start --}}
            <div class="row border-bottom border-dark text-dark mb-4">
                <div class="col-12 mb-1">
                    <div class="row">
                        {{-- password-icon-start --}}
                        <div class="col-1">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        {{-- password-icon-end --}}
                        {{-- input-password-start --}}
                        <div class="col-11 ps-2">
                            <input class="border border-0" type="password" name="password" placeholder="Your Password"
                                id="">
                        </div>
                        {{-- input-password-end --}}
                    </div>
                </div>
            </div>
            {{-- inputbox-password-end --}}
            @if (isset($error['emailErr']))
                <div class="error">{{ $error['emailErr'] }}</div>
            @endif
            @if (isset($error['passwordErr']))
                <div class="error">{{ $error['passwordErr'] }}</div>
            @endif
            @if (isset($error))
                <div class="error">{{ $error }}</div>
            @endif
            {{-- checkbox-start --}}
            <div class="row mb-4">
                <div class="col-12 mb-1">
                    <span>
                        <input type="checkbox" name="" id="">
                    </span>
                    <span class="ps-2">
                        I agree all the terms and conditions
                    </span>
                </div>
            </div>
            {{-- checkbox-end --}}
            {{-- submit-button-start --}}
            <div class="row">
                <div class="col-4 mb-1">
                    <button class="form-control w-10 text-white bg-info" type="submit">Login</button>
                </div>
            </div>
            {{-- submit-button-end --}}
        </form>
        {{-- form-end --}}
    @endsection
    @section('right-content')
        <div class="col-7 mt-3 ps-3 pt-5 pb-0  border rounded-2"
            style="background: url({{ URL::asset('/images/shrimp-pad-thai-white-background.jpg') }}); background-size:cover; ">
            {{-- image-start --}}
            <div class="row">
                <div class="col-12">
                    <img class="w-100"
                        src="{{ URL::asset('/images/company-name-low-resolution-logo-black-on-transparent-background.png') }}"
                        alt="">
                </div>
            </div>
            {{-- image-end --}}
            {{-- login-link-start --}}
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="col-3 mx-auto">
                        <a class="link text-dark mx-auto" href="">Terms and Conditions</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- login-link-end --}}
    @endsection
