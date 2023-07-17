<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('admin.features.index');
    }
    public function create(Request  $request)
    {
        Features::newFeatures($request);
        return back()->with('massage','Save Successfully');
    }
    public function manage()
    {
        return view('admin.features.manage',[
            'features'=>Features::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.features.edit',[
            'featureEdit'=>Features::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Features::updateFeatures($request,$id);
        return redirect('/manage-features')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Features::deleteFeatures($id);
        return redirect('/manage-features')->with('massage','Delete Successfully');
    }
}
