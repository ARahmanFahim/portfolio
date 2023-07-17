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
                            <th>Title</th>
                            <th>Course Name</th>
                            <th>Duration</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                      @foreach($educations as $education)
                        <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$education->title}}</td>
                            <td>{{$education->name}}</td>
                            <td>{{$education->duration_time}}</td>
                            <td>{{$education->description}}</td>
                            <td>
                                <a href="{{route('edit-education',['id'=>$education->id])}}" class="btn btn-success btn-sm">
                                    <i class="ti-reddit"></i>
                                </a>
                                <a href="{{route('delete-education',['id'=>$education->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
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
