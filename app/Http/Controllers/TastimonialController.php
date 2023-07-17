<?php

namespace App\Http\Controllers;

use App\Models\Tastimonial;
use Illuminate\Http\Request;

class TastimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.index');
    }
    public function manage()
    {
        return view('admin.testimonial.manage',[
          'tastimonials'=>  Tastimonial::all()
        ]);
    }
    public function create(Request $request)
    {
        Tastimonial::newTestimonial($request);
        return back()->with('massage','Save Successfully');
    }
    public function edit($id)
    {
        return view('admin.testimonial.edit',[
            'tastimonialEdit' =>Tastimonial::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Tastimonial::updatedTestimonial($request,$id);
        return redirect('/manage-tastimonial')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Tastimonial::deleteTestimonial($id);
        return redirect('manage-tastimonial')->with('massage','delete successfully');
    }

}
