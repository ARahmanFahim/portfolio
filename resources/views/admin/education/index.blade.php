@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Education</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('create-education')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Title<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" id="exampleInputuname4" placeholder="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Course Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="exampleInputuname4" placeholder="course name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Duration Time<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="duration_time" id="exampleInputuname5" placeholder="duration time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder=" Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create new Education</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
