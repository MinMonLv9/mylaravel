@extends('layout.registerlayout')
@section('title', 'Staffs Login')
@section('left-content')
    {{-- content-box-start --}}
    {{-- title-start --}}
    <div class="row">
        <div class="col-6 mt-5 text-lg mb-4">
            <h2 class="w-100 bold">Staff Login</h2>
        </div>
    </div>
    {{-- title-end --}}
    {{-- form-start --}}
    <form action="{{ url('staffvalidate') }}" method="post">
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
                        <input class="border border-0" type="email" name="staffemail" placeholder="Your Email"
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
                        <input class="border border-0" type="password" name="staffpassword" placeholder="Your Password"
                            id="">
                    </div>
                    {{-- input-password-end --}}
                </div>
            </div>
        </div>
        {{-- inputbox-password-end --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
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
                <button class="form-control w-10 text-white bg-info" type="submit" name="submit"
                    value="Login">Login</button>
            </div>
        </div>
        {{-- submit-button-end --}}
    </form>
    {{-- form-end --}}
@endsection
@section('right-content')
    {{-- right-content-start --}}
    <div class="col-7 mt-3 ps-3 pt-5 pb-0" style="background: url()">
        {{-- image-start --}}
        <div class="row">
            <div class="col-12">
                <img class="w-100" src="{{ URL::asset('/images/Daco_5140907.png') }}" alt="">
            </div>
        </div>
        {{-- image-end --}}
    </div>
    {{-- right-content-end --}}
@endsection
