@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Experience</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('update-experience',['id'=>$editExperience->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Company Name<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$editExperience->name}}" id="exampleInputuname4" placeholder="course name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname4" class="col-sm-3 control-label">Designation<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="designation" value="{{$editExperience->designation}}" id="exampleInputuname4" placeholder="designation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname5" class="col-sm-3 control-label">Duration Time<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="duration_time" value="{{$editExperience->duration_time}}" id="exampleInputuname5" placeholder="duration time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description"  id="exampleInputEmail3" placeholder=" Description">{{$editExperience->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Experience</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
