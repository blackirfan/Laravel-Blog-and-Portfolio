<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationDetails;
use Illuminate\Support\Facades\Auth;

class PublicationDetailsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'journalname' => 'required',
            'year' => 'required',
            'sourcelink' => 'required',
            'publicationdetails' => 'required',
        ]);
        
        $name = $request->input('name');
        $journalname = $request->input('journalname');
        $year = $request->input('year');
        $sourcelink = $request->input('sourcelink');
        $publicationdetails = $request->input('publicationdetails');
        $user_id = Auth::user()->id;




        $publicationDetail = new PublicationDetails();
        $publicationDetail->name = $name;
        $publicationDetail->journalname = $journalname;
        $publicationDetail->year = $year;
        $publicationDetail->sourcelink = $sourcelink;
        $publicationDetail->publicationdetails = $publicationdetails;
        $publicationDetail->user_id = $user_id;
        $publicationDetail->save();
        
        return redirect()->back()->with('status', 'publication detail Created Successfully');
     }

     public function create(){
        return view('publicationDetails.create-publication-details');
    }
}
