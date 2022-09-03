<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function list()
    {
        $publicationDetails = DB::table('publicationdetails')->select('id','name','journalname','year')->get();
        return view('publicationDetails.list-publication-details')->with('publicationDetails', $publicationDetails);
    }

    public function edit($id){
        $publicationDetail = new PublicationDetails();
        $publicationDetail = publicationdetails::where('id', $id)->first();
        if(auth()->user()->id !== $publicationDetail->user->id){
            abort(403);
        }
        return view('publicationDetails.edit-publication-details', compact('publicationDetail'));
    }

    public function update(Request $request, PublicationDetails $publicationDetail){
        if(auth()->user()->id !== $publicationDetail->user->id){
            abort(403);
        }
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

        
        $publicationDetail->name = $name;
        $publicationDetail->journalname = $journalname;
        $publicationDetail->year = $year;
        $publicationDetail->sourcelink = $sourcelink;
        $publicationDetail->publicationdetails = $publicationdetails;
        $publicationDetail->save();
        
        return redirect()->back()->with('status', 'Publication Details Updated Successfully');
    }
}
