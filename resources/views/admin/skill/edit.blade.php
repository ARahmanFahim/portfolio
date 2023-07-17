@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Experience</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('update-skill',['id'=>$editSkill->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Type </label>
                            <div class="col-md-9">
                                <div class="form-group has-success">
                                    <select class="form-control form-select" name="type" id="type">
                                        <option >---Select Type---</option>
                                        <option value="design">Design Skill</option>
                                        <option value="development">Development Skill</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label"> Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{$editSkill->name}}" id="exampleInputuname3" placeholder=" Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Experience<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="experience" value="{{$editSkill->experience}}" id="exampleInputEmail3" placeholder="experience">
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
    <script>
        document.getElementById('type').value="{{$editSkill->type}}"
    </script>
@endsection
