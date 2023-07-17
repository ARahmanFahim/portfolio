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
                            <th> Image</th>
                            <th> Name</th>
                            <th>Designation</th>
                            <th>Description</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>facebook Link</th>
                            <th>Twitter Link</th>
                            <th>Instagram Link</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($settings as $setting)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($setting->image)}}" alt="" width="80" height="100"></td>
                                <td>{{$setting->name}}</td>
                                <td>{{$setting->designation}}</td>
                                <td>{{$setting->description}}</td>
                                <td>{{$setting->number}}</td>
                                <td>{{$setting->email}}</td>
                                <td>{{$setting->facebook_link}}</td>
                                <td>{{$setting->twitter_link}}</td>
                                <td>{{$setting->intsa_link}}</td>
                                <td>
                                    <a href="{{route('edit-settings',['id'=>$setting->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti-reddit"></i>
                                    </a>
                                    <a href="{{route('delete-settings',['id'=>$setting->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
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
