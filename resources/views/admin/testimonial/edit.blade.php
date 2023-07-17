@extends('admin.master')
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Portfolio</h4>
                    <hr>
                    <h3 class="text-center text-danger">{{session('massage')}}</h3>
                    <form class="form-horizontal p-t-20" action="{{route('update-tastimonial',['id'=>$tastimonialEdit->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="form-group row">
                                <label class="form-label col-sm-3 control-label" for="web">Testimonial Image </label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" id="input-file-now" class="dropify" />
                                    <img src="{{asset($tastimonialEdit->image)}}" alt="" height="100" width="120">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Client Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="client_name" value="{{$tastimonialEdit->client_name}}" id="exampleInputuname3" placeholder="client Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname34" class="col-sm-3 control-label"> Testimonial Designation<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="testimonial_designation" value="{{$tastimonialEdit->testimonial_designation}}" id="exampleInputuname34" placeholder="testimonial designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname35" class="col-sm-3 control-label">Testimonial Work Name<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="work_name" value="{{$tastimonialEdit->work_name}}" id="exampleInputuname35" placeholder="testimonial work name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname36" class="col-sm-3 control-label">Testimonial Delivary Date<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="delivery_date" value="{{$tastimonialEdit->delivery_date}}" id="exampleInputuname36" placeholder="testimonial delivary date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Testimonial Description<span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description">{{$tastimonialEdit->description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Testimonial</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
