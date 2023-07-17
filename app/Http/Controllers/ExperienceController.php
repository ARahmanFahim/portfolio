<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return view('admin.experience.index');
    }
    public function create(Request $request)
    {
        Experience::newExperience($request);
        return back()->with('massage','successfully Save');
    }
    public function manage()
    {
        return view('admin.experience.manage',[
           'experiences' =>Experience::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.experience.edit',[
           'editExperience' =>Experience::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Experience::updatedExperience($request,$id);
        return redirect('/manage-experience')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Experience::deleteExperience($id);
        return redirect('/manage-experience')->with('manage','Delete Successfully');
    }
}
