<?php

namespace App\Http\Controllers;

use App\Models\Wellcome;
use Illuminate\Http\Request;
use function Illuminate\Process\whenEmpty;

class WellcomeController extends Controller
{
    public function index()
    {
        return view('admin.wellcome.index');
    }
    public function create(Request $request)
    {
        Wellcome::newWellcome($request);
        return back()->with('massage','Save Successfully');
    }
    public function manage()
    {
        return view('admin.wellcome.manage',[
            'welcomes'=>Wellcome::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.wellcome.edit',[
            'editWelcome'=>Wellcome::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        Wellcome::updatedWelcome($request,$id);
        return redirect('/manage-wellcome')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Wellcome::deleteWelcome($id);
        redirect('/manage-wellcome')->with('massage','Update Successfully');
    }
}
