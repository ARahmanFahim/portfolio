<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationContrller extends Controller
{

    public function index()
    {
        return view('admin.education.index');
    }
    public function create(Request $request)
    {
        Education::newEducation($request);
        return back()->with('massage','successfully Save');
    }
    public function manage()
    {
        return view('admin.education.manage',[
            'educations' =>Education::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.education.edit',[
            'editEducation' =>Education::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Education::updatedEducation($request,$id);
        return redirect('/manage-education')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Education::deleteEducation($id);
        return redirect('/manage-education')->with('manage','Delete Successfully');
    }
}
