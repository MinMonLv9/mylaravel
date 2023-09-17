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
            <form action="{{url('staffprocess/search')}}" method="GET">
                <div class="input-group">
                    <div class="col-9 form-outline">
                        <input type="search" id="form1" name="keyword" class="form-control" />
                    </div>
                    <button type="submit" class="col-2 btn btn-primary">
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
        @forelse($staff as $staffs)
            @if ($loop->first)
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            @endif
            <tr>
                <td>{{ $staffs->staffname }}</td>
                <td>{{ $staffs->address }}</td>
                <td>{{ $staffs->phone }}</td>
                <td>{{ $staffs->email }}</td>
                <td>{{ $staffs->roleid }}</td>
                <td>{{ $staffs->status }}</td>
                <td class="btn-group">
                    <a class="btn btn-warning border rounded-1"
                        href="{{ route('staffprocess.edit', ['staffprocess' => $staffs->id]) }}">
                        Edit
                    </a>
                    <form action="{{ url('staffprocess', [$staffs->id]) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger border rounded-1" value="DELETE">
                    </form>
                </td>
                </td>
            </tr>
        @empty
            <tr>
                <td> <strong>No record to display</strong></td>
            </tr>
        @endforelse
    </table>
    {{-- table end --}}
    {{-- Paginator-start --}}
    <div class="">
        {{ $staff->links() }}
    </div>
    {{-- Paginator-end --}}
@endsection
