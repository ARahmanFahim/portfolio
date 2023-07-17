<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkilController extends Controller
{
    public function index()
    {
        return view('admin.skill.index');
    }
    public function create(Request $request)
    {
//        dd($request->all());
        Skill::newSkill($request);
        return back()->with('massage','SAve Successfully');
    }
    public function manage()
    {
        return view('admin.skill.manage',[
            'skills'=>Skill::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.skill.edit',[
            'editSkill'=>Skill::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        Skill::updatedExperience($request,$id);
        redirect('/manage-skill')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Skill::deleteExperience($id);
        redirect('/manage-skill')->with('massage','delete Successfully');
    }
}
