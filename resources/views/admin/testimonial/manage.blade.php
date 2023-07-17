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
                            <th>Testimonial Image</th>
                            <th>Client Name</th>
                            <th>Designation</th>
                            <th>Work Name</th>
                            <th>Delivery Date</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($tastimonials as $tastimonial)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($tastimonial->image)}}" alt="" width="80" height="100"></td>
                                <td>{{$tastimonial->client_name}}</td>
                                <td>{{$tastimonial->testimonial_designation}}</td>
                                <td>{{$tastimonial->work_name}}</td>
                                <td>{{$tastimonial->delivery_date}}</td>
                                <td>{{$tastimonial->description}}</td>
                                <td>
                                    <a href="{{route('edit-tastimonial',['id'=>$tastimonial->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-reddit "></i>
                                    </a>
                                    <a href="{{route('delete-tastimonial',['id'=>$tastimonial->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
                                        <i class=" fa-sharp fa-solid  ti-trash"></i>
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
