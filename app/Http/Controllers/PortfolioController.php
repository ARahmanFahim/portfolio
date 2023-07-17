<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('admin.portfolio.index');
    }
    public function manage()
    {
        return view('admin.portfolio.manage',[
            'portfolio'=>Portfolio::all(),
        ]);

    }
    public function create(Request $request)
    {
        Portfolio::newPortfolio($request);
        return back()->with('massage','Portfolio successfully Save');
    }
    public function edit($id)
    {
        $itemEdit=Portfolio::find($id);
//        dd($itemEdit);
        return view('admin.portfolio.edit',compact('itemEdit'));
    }
    public function update(Request $request,$id)
    {
        Portfolio::updatedPortfolio($request,$id);
        return redirect('/manage-portfolio')->with('massage','Update Successfully');
    }
    public function delete($id)
    {
        Portfolio::deletePortfolio($id);
        return redirect('manage-portfolio')->with('massage','Delete Successfully');
    }
}
