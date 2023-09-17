@extends('layout.shopOwnerlayout')
@section('title', 'Shop Detail')
@section('ContentB_DataArea')
    <!--table list area!-->
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
    <form action="{{ route('shopprocess.update', ['shopprocess' => $shop->id]) }}" method="POST"
        enctype="multipart/form-data">
        @method('PATCH') @csrf
        <div class="flex justify-content-between">
            <h1>Shop Information</h1>
            <div>
                <a class="btn btn-primary" href="{{ url('shopdashboard') }}">
                    Back
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="{{ $shop->id }}">
        <div class="form-group">
            <img src="{{ asset('upload/' . $shop->image) }}" class="w-40" />
        </div>
        <div class="form-group">
            <label for="shopname">shop Name</label>
            <input type="text" class="form-control" name="shopname" value="{{ $shop->shopname }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="" class="form-control">{{ $shop->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="township">Township</label>
            <textarea name="township" id="" class="form-control">{{ $shop->township }}</textarea>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <textarea name="city" id="" class="form-control">{{ $shop->city }}</textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $shop->email }}">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary text-dark">Update</button>
        </div>
    </form>
@endsection
