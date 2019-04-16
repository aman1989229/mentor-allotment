<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mentordetail;
use User;
use App\Cgpa;
use Session;
use App\Project;
use App\Detail;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();
        $detail=Project::where('user_id','=',$user->id)->first();
          
        return view('projects.show')->withDetail($detail)->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,array(
           'title'=>'required|max:50',
           'statement'=>'required',
           'description'=>'required',
           'deadline'=>'required'
           
        ));
          $id=$request->input('user_id');
 
        $user=Detail::where('user_id','=',$id)->first();
        $user->status='1';

        $user->save();
        
        
        $project=new Project;
        $project->user_id=$request->user_id;
        $project->title=$request->title;
        $project->statement=$request->statement;
        $project->description=$request->description;
        $project->deadline=$request->deadline;
         
               
        $project->save();
 Session::flash('success','Project Assigned successsfully please click refresh!!!');

         $user = Auth::user();
       $teams = Detail::where('m_assigned',$id)->get();
       
       return view('projects.myteam')->withTeams($teams)->withUser($user);
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detail=Project::where('user_id','=',$id)->first();
        $userstatus=Detail::where('user_id','=',$id)->first();
        $userstatus->status='2';
        $userstatus->save();

        $detail->status='2';
        $detail->save();

        $user=Auth::user();
        $detail=Project::where('user_id','=',$user->id)->first();

        return view('projects.show')->withDetail($detail)->withUser($user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
          $students= Detail::all();
         
        return view('projects.assign')->withStudents($students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request,array(
           'title'=>'required|max:50',
           'statement'=>'required',
           'description'=>'required',
           'deadline'=>'required'
           
        ));
          $id=$request->input('user_id');
 
        $user=Detail::where('user_id','=',$id)->first();
        $user->status='1';

        $user->save();
        
        
        $project=Project::where('user_id','=',$id)->first();
        $project->user_id=$request->user_id;
        $project->title=$request->title;
        $project->statement=$request->statement;
        $project->description=$request->description;
        $project->deadline=$request->deadline;
         
               
        $project->save();
 Session::flash('success','Project details edited successsfully please click refresh!!!');

         $user = Auth::user();
       $teams = Detail::where('m_assigned',$id)->get();
       
       return view('projects.myteam')->withTeams($teams)->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
