<?php

namespace App\Http\Controllers;
use App\Models\Educations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class EducationController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }
    public function store(Request $request){

     
        $request->validate([
            'institutionname' => 'required',
            'address' => 'required',
            'institutiontype' => 'required',
            'certificatetype' => 'required',
            'grade' => 'required',
        ]);
        
        $institutionname = $request->input('institutionname');
        $address = $request->input('address');
        $institutiontype = $request->input('institutiontype');
        $certificatetype = $request->input('certificatetype');
        $grade = $request->input('grade');
        $user_id = Auth::user()->id;




        $education = new Educations();
        $education->institutionname = $institutionname;
        $education->address = $address;
        $education->institutiontype = $institutiontype;
        $education->certificatetype = $certificatetype;
        $education->grade = $grade;
        $education->user_id = $user_id;
        $education->save();
        
        return redirect()->back()->with('status', 'education Created Successfully');
     }

     public function create(){
        return view('educations.create-educations');
    }

    public function index()
    {
        $educations = DB::table('educations')->select('id','institutionname','institutiontype')->get();

        return view('educations.list-educations')->with('educations', $educations);
    }
}
