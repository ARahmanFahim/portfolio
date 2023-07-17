<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        return view('admin.footer.index');
    }
    public function create(Request $request)
    {
        Footer::newFooter($request);
        return back()->with('massage','Save Successfully');
    }
    public function manage()
    {
        return view('admin.footer.manage',[
          'footers' => Footer::all()
        ]);
    }
    public function edit($id)
    {
        return view('admin.footer.edit',[
            'editFooter'=>Footer::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        Footer::updatedFooter($request,$id);
        redirect('/manage-footer')->with('massage','update Successfully');
    }
    public function delete($id)
    {
        Footer::deleteFooter($id);
        redirect('/manage-footer')->with('massage','Delete Successfully');
    }
}
