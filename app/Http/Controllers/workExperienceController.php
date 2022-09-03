<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class workExperienceController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except(['index', 'show']);
    }
    public function store(Request $request){
        $request->validate([
            'position' => 'required',
            'companyname' => 'required',
            'timeperiod' => 'required',
            'description' => 'required',
        ]);

        $position = $request->input('position');
        $companyname = $request->input('companyname');
        $timeperiod = $request->input('timeperiod');
        $description = $request->input('description');
        $user_id = Auth::user()->id;


        $workExperience = new WorkExperience();
        $workExperience->position = $position;
        $workExperience->companyname = $companyname;
        $workExperience->timeperiod = $timeperiod;
        $workExperience->description = $description;
        $workExperience->user_id = $user_id;
        $workExperience->save();
        
        return redirect()->back()->with('status', 'Work Experience Created Successfully');
     }

     public function create(){
        return view('workExperience.create-work-experience');
    }

    public function list()
    {
        $workExperiences = DB::table('work_experience')->select('id','position','timeperiod')->get();
        return view('workExperience.list-work-experience')->with('workExperiences', $workExperiences);
    }


    public function edit($id){
        $workExperience = new WorkExperience();
        $workExperience = workExperience::where('id', $id)->first();
        if(auth()->user()->id !== $workExperience->user->id){
            abort(403);
        }
        return view('workExperience.edit-work-experience', compact('workExperience'));
    }

    public function update(Request $request, WorkExperience $workExperience){
        if(auth()->user()->id !== $workExperience->user->id){
            abort(403);
        }
        $request->validate([
            'position' => 'required',
            'companyname' => 'required',
            'timeperiod' => 'required',
            'description' => 'required',
        ]);
        $position = $request->input('position');
        $companyname = $request->input('companyname');
        $timeperiod = $request->input('timeperiod');
        $description = $request->input('description');

        
        $workExperience->position = $position;
        $workExperience->companyname = $companyname;
        $workExperience->timeperiod = $timeperiod;
        $workExperience->description = $description;
        $workExperience->save();
        
        return redirect()->back()->with('status', 'Work Experience Updated Successfully');
    }
}
