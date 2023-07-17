@extends('admin.master')

@section('content')
    <div class="row mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <table id="myTable" class="table table-striped border">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Type</th>
                            <th>Portfolio Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($portfolio as $item)
                        <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->type}}</td>
                                <td><img src="{{asset($item->image)}}" alt="" width="80" height="100"></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <a href="{{route('edit-portfolio',['id'=>$item->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-reddit"></i>
                                    </a>
                                    <a href="{{route('delete-portfolio',['id'=>$item->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
