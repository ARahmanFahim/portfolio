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
                            <th> Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Massage</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($contacts as $contact)
                            <tbody>
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->number}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td>

                                    <a href="{{route('delete-contact',['id'=>$contact->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are sure to delete This');">
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
