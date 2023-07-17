@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Contact</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('update-settings',['id'=>$settingsEdit])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="form-group row">
                                <label class="form-label col-sm-3 control-label" for="web">Contact Image </label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="input-file-now" class="dropify" />
                                    <img src="{{asset($settingsEdit->image)}}" alt="" height="60" width="80">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-sm-3 control-label" for="web">Resume </label>
                                <div class="col-sm-9">
                                    <input type="file" name="resume" id="input-file-now" class="dropify" />
                                    <img src="{{asset($settingsEdit->resume)}}" alt="" height="60" width="80">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$settingsEdit->name}}" name="name" id="exampleInputuname3" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label">Designation<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$settingsEdit->designation}}" name="designation" id="exampleInputuname34" placeholder="designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label"> Description<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description"   id="exampleInputEmail3" placeholder=" Description">{{$settingsEdit->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Phone<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="number" value="{{$settingsEdit->number}}" id="exampleInputuname3" placeholder=" Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" value="{{$settingsEdit->email}}" id="exampleInputuname3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label">facebook Link<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="facebook_link" value="{{$settingsEdit->facebook_link}}" id="exampleInputuname34" placeholder="Facebook Link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label">Twitter Link<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="twitter_link" value="{{$settingsEdit->twitter_link}}" id="exampleInputuname34" placeholder="Twitter Link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label">Instagram Link<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="insta_link" value="{{$settingsEdit->insta_link}}"  id="exampleInputuname34" placeholder="Instagram Link">
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update  Contact</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
