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
                            <th>Company Name</th>
                            <th>Designation</th>
                            <th>Duration</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($experiences as $experience)
                        <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$experience->name}}</td>
                            <td>{{$experience->designation}}</td>
                            <td>{{$experience->duration_time}}</td>
                            <td>{{$experience->description}}</td>
                            <td>
                                <a href={{route('edit-experience',['id'=>$experience->id])}}" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{route('delete-experience',['id'=>$experience->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
                                    <i class="fa-solid fa-trash"></i>

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




