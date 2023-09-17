@extends('layout.stafflayout')
@section('title', 'Staffs Dashboard')
@section('banner image')
    {{-- bannerimage-start --}}
    {{-- <div class="banner"  style="padding:0;">
    <img class="border border-0 rounded-1" src="https://amycastro.com/wp-content/uploads/2016/07/AdobeStock_112329391-1-e1467827012763.jpg" width="100%" height="500px">
</div> --}}
    {{-- bannerimage-end --}}
@endsection
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
    {{-- search and dropdowns start --}}
    <div class="row mt-3 mb-3">
        {{-- search-start --}}
        <div class="col-6">
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
        <div class="col-6">
            <div class="row justify-content-end ">
                {{-- dropdown1-start --}}
                <div class="col-6">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Roles
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            {{-- @foreach ($categorydata as $category)
                            <option class="dropdown-item" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach --}}
                        </div>
                    </div>
                </div>
                {{-- dropdown1-end --}}
                <div class="col-6">
                    <a class="btn btn-primary" href="{{ route('staffprocess.create') }}">
                        <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                        Add Staff
                    </a>
                </div>
                {{-- add-button-end --}}
            </div>
        </div>
    </div>
    {{-- search and dropdowns end --}}
    {{-- table start --}}
    <table class="table">
        <h2>Today Requests</h2>
        @forelse($todayRequest as $todayRequest)
            @if ($loop->first)
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Shop Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Township</th>
                        <th scope="col">City</th>
                        <th scope="col">Email</th>
                        <th scope="col">Request Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            @endif
            <tr>
                <td><img src="{{ asset('upload/' . $todayRequest->image) }}" width="100" height="100px" alt="">
                </td>
                <td>{{ $todayRequest->shopname }}</td>
                <td>{{ $todayRequest->address }}</td>
                <td>{{ $todayRequest->township }}</td>
                <td>{{ $todayRequest->city }}</td>
                <td>{{ $todayRequest->email }}</td>
                <td>{{ $todayRequest->requestdate }}</td>
                <td>{{ $todayRequest->status }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-primary border rounded-1"
                            href="{{ url('shopprocess/' . $todayRequest->shopid . '/approve') }}">
                            Approve
                        </a>
                        <a class="btn btn-danger border rounded-1"
                            href="{{ url('shopprocess/' . $todayRequest->shopid . '/decline') }}">
                            Decline
                        </a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td> <strong>No record to display</strong></td>
            </tr>
        @endforelse
    </table>
    {{-- table end --}}
@endsection
{{-- side-bar-start --}}
@section('sidebar')
    @parent
    {{-- <a href="{{route('todayRequestprocess.create')}}" class="list-group-item list-group-item-action py-2 ripple"
        ><i class="fas fa-chart-line fa-fw"></i><span>Add New todayRequest</span>
    </a> --}}
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
@endsection
{{-- side-bar-end --}}
