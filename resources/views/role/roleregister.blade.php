<style>
    input:focus{
        outline: none;
    }
</style>
@extends('layout.stafflayout')
@section("title","Roles")
@section('accountbox')
{{-- accountbox-start --}}
<div class="row text-white">
    <i class="col-3">
        <img class=" border rounded-circle  w-100" src="data:image/jpeg;base64,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" alt="">
    </i>
        Username
</div>
{{-- accountbox-end --}}
@endsection
@section("ContentB_DataArea")
<!--table list area!-->
{{-- messagebox start--}}
@if (Session::has('message'))
<div class="row alert {{Session::get('alert-class')}} alert-dismissible fade show" role="alert">
    <strong>{{Session::get('message')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- messagebox end--}}
{{-- search and dropdowns start --}}
<div class="row mt-3 mb-3">
    {{-- search-start --}}
    <div class="col-8">
        <form action="" method="POST">
            <div class="input-group">
                <div class="col-9 form-outline">
                  <input type="search" id="form1" class="form-control" />
                </div>
                <button type="button" class="col-2 btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    {{-- search-end --}}
    {{-- add-button-start --}}
    <div class="col-2 offset-2 justify-content-end ">
        <a class="btn btn-primary" href="{{url('roleprocess')}}">
            Back
        </a>
    </div>
    {{-- add-button-end --}}
</div>
{{-- search and dropdowns end --}}
{{-- table start --}}
<table class="table">
    <div class="container-fluid">
        {{-- content-box-start --}}
        <div class="container shadow align-content-center mx-auto mt-2 bg-white border rounded-3">
            {{-- content-start --}}
            <div class="row p-3">
                {{-- left-content-start --}}
                <div class="col-5 px-5 pt-3 pb-0">
                    {{-- title-start --}}
                    <div class="row">
                        <div class="col-6 text-lg mb-4">
                            <h2 class="w-100 bold">Role Register</h2>
                        </div>
                    </div>
                    {{-- title-end --}}
                    {{-- form-start --}}
                    <form action="{{route('roleprocess.store')}}" method="post">
                    @csrf
                        {{-- inputbox-name-start --}}
                        <div class="row border-bottom border-dark text-dark mb-4">
                            <div class="col-12 mb-1">
                                <div class="row">
                                    {{-- user-icon-start --}}
                                    <div class="col-1">
                                        <i class="fa-solid fa-user mt-2"></i>
                                    </div>
                                    {{-- user-icon-end --}}
                                    {{-- input-name-start --}}
                                    <div class="col-11 ps-2">
                                        <input class="w-100 shadow-none border border-0" type="text" name="rolename" placeholder="New role" id="">
                                    </div>
                                    {{-- input-name-end --}}
                                </div>
                            </div>
                        </div>
                        {{-- inputbox-name-end --}}
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
                                <button class="form-control w-10 text-white bg-info" type="submit" >Add</button>
                            </div>
                            <div class="col-4 mb-1">
                                <a class="btn form-control w-10 text-white bg-danger" href="{{url('roleprocess/cancelprocess')}}">Cancel</a>
                            </div>
                        </div>
                        {{-- submit-button-end --}}
                    </form>
                    {{-- form-end --}}
                </div>
                {{-- left-content-end --}}
                {{-- right-content-start --}}
                <div class="col-7 mt-3 ps-3 pt-5 pb-0" style="background: url()">
                    {{-- image-start --}}
                    <div class="row">
                        <div class="col-12">
                            <img class="w-100" src="{{URL::asset('/images/Daco_5140907.png')}}" alt="">
                        </div>
                    </div>
                    {{-- image-end --}}
                </div>
                {{-- right-content-end --}}
            </div>
            {{-- content-end --}}
        </div>
        {{-- content-box-end --}}
    </div>
        </tbody>
    </table>
    {{-- table end --}}
</table>
{{-- table-end --}}
@endsection