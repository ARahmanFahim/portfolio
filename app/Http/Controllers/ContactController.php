<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Request $request)
    {
//       dd($request);
        Contact::newContact($request);
        return back()->with('massage','Save Successfully');
    }

    public function manage()
    {
        return view('admin.contact.manage',[
           'contacts' =>Contact::all()
        ]);
    }

    public function delete($id)
    {
        Contact::deleteContact($id);
       return redirect('/manage-contact')->with('massage','Delete Successfully');
    }
}
