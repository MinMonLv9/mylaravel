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
    <div class="flex justify-content-between">
        <h1>Shop Information</h1>
        <div>
            <a class="btn btn-primary" href="{{ route('shopprocess.edit', [Session::get('shop')['id']]) }}">
                Edit
            </a>
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
        <input type="text" class="form-control" name="shopname" value="{{ $shop->shopname }}" readonly>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" id="" class="form-control" readonly>{{ $shop->address }}</textarea>
    </div>
    <div class="form-group">
        <label for="address">Township</label>
        <textarea name="address" id="" class="form-control" readonly>{{ $shop->township }}</textarea>
    </div>
    <div class="form-group">
        <label for="address">City</label>
        <textarea name="address" id="" class="form-control" readonly>{{ $shop->city }}</textarea>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="{{ $shop->email }}" readonly>
    </div>
@endsection
