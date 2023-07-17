<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Features;
use App\Models\Portfolio;
use App\Models\Settings;
use App\Models\Tastimonial;
use App\Models\Wellcome;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class HomeController extends Controller
{
    public function index()
    {
        $portfolio=Portfolio::where('type','portfolio')->get();
        $blog = Portfolio::where('type','blog')->get();
//        dd($blog);
        //dd($portfolio);
        $welcome=Wellcome::where('id',2)->get();
        //dd($welcome);

        $features =Features::all();

        $education = Education::all();

        $testimonial =Tastimonial::all();

        $experience= Experience::all();


        $contact =Contact::all();
        return view('frontEnd.home.index',compact('portfolio','blog','welcome','features','education','testimonial','contact','experience'));


    }
}
