@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Footer</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('update-footer',['id'=>$editFooter->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="form-group row">
                                <label class="form-label col-sm-3 control-label" for="web">Footer Image </label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="input-file-now" class="dropify" />
                                    <img src="{{$editFooter->image}}" alt="" width="120" height="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label"> Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{$editFooter->name}}" id="exampleInputuname3" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label"> Designation<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="designation" value="{{$editFooter->designation}}" id="exampleInputuname34" placeholder=" designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description"  id="exampleInputEmail3" placeholder=" Description">{{$editFooter->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname35" class="col-sm-3 control-label">Phone Number<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="number" value="{{$editFooter->number}}" id="exampleInputuname35" placeholder="Write Your Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname36" class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" value="{{$editFooter->email}}" id="exampleInputuname36" placeholder="Write your Email">
                                </div>
                            </div>

                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success waves-effect waves-light text-white">UpdateFooter</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
