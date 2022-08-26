<?php

namespace App\Http\Controllers;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDetailsController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }
    public function store(Request $request){

     
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'github' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkdin' => 'required',
            'interest' => 'required',
            'about' => 'required',
        ]);
        
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $github = $request->input('github');
        $youtube = $request->input('youtube');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $linkdin = $request->input('linkdin');
        $interest = $request->input('interest');
        $user_id = Auth::user()->id;
        $about = $request->input('about');



        $userDetail = new UserDetails();
        $userDetail->name = $name;
        $userDetail->mobile = $mobile;
        $userDetail->email= $email;
        $userDetail->github= $github;
        $userDetail->youtube = $youtube;
        $userDetail->facebook = $facebook;
        $userDetail->twitter = $twitter;
        $userDetail->linkdin = $linkdin;
        $userDetail->interest = $interest;
        $userDetail->user_id = $user_id;
        $userDetail->about = $about;
        $userDetail->save();
        
        return redirect()->back()->with('status', 'User Details Created Successfully');
     }

     public function create(){
        return view('userDetails.create-user-details');
    }

    public function edit(){
        $userDetail = new UserDetails();
        $userDetail = userdetails::where('id', 1)->first();
        return view('userDetails.update-user-details', compact('userDetail'));
    }
    public function update(Request $request,UserDetails $userDetail){
        if(auth()->user()->id !== $userDetail->user->id){
            abort(403);
        }
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'github' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkdin' => 'required',
            'interest' => 'required',
            'about' => 'required',
        ]);
        


        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $github = $request->input('github');
        $youtube = $request->input('youtube');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $linkdin = $request->input('linkdin');
        $interest = $request->input('interest');
        $user_id = Auth::user()->id;
        $about = $request->input('about');


        $userDetail = new UserDetails();
        $userDetail = userdetails::where('id', 1)->first();
        $userDetail->name = $name;
        $userDetail->mobile = $mobile;
        $userDetail->email= $email;
        $userDetail->github= $github;
        $userDetail->youtube = $youtube;
        $userDetail->facebook = $facebook;
        $userDetail->twitter = $twitter;
        $userDetail->linkdin = $linkdin;
        $userDetail->interest = $interest;
        $userDetail->user_id = $user_id;
        $userDetail->about = $about;
        $userDetail->save();
        

        
        return redirect()->back()->with('status', 'User Details Edited Successfully');
    }

    public function show(UserDetails $userDetail){
        $userDetail = new UserDetails();
        $userDetail = userdetails::where('id', 1)->first();
        $educations = DB::table('educations')->select('institutionname','address','institutiontype','certificatetype','grade')->get();
        return view('profile', compact('userDetail','educations'));
    }
}
