@extends('layout.shopOwnerlayout')
@section('title', 'Shop Detail')
@section('CategoryActive', 'bg-gray-900')
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
@endsection
