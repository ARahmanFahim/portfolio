<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index()
    {
        return view('admin.settings.index');
    }
    public function create(Request $request)
    {
        Settings::newSettings($request);
        return back()->with('massage','successfully Save');
    }
    public function manage()
    {
        return view('admin.settings.manage',[
            'settings' =>Settings::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.settings.edit',[
            'settingsEdit' =>Settings::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Settings::updatedSettings($request,$id);
        return back()->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Settings::deleteSettings($id);
        return redirect('/manage-settings')->with('manage','Delete Successfully');
    }
}
