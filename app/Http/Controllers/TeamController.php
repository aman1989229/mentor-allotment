<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Detail;
use App\Mentordetail;
use User;
use App\Team;
use App\Cgpa;
use Session;
use App\Project;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
       $teams = Detail::where('m_assigned',$id)->get();
       
       return view('projects.myteam')->withTeams($teams)->withUser($user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $user = Auth::user();
            $assign=Detail::where('user_id','=',$id)->first();

            $assign->assigned='1';
            $assign->m_assigned=$user->id;
            $assign->save();

            $team=new Team;
            $team->user_id=$user->id;
            $team->student_id=$assign->user_id;
            $team->save();
            Session::flash('success','Added into Team successsfully!!!');
           $user = Auth::user();
       $teams = Detail::where('m_assigned',$user->id)->get();
       
       return view('projects.myteam')->withTeams($teams)->withUser($user);
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
           $post=Team::where('student_id','=',$id)->first();
            $project=Project::where('user_id','=',$id)->first();
            $user=Detail::where('user_id','=',$id)->first();
            $user->status='3';
            $user->m_assigned=NULL;
            $user->assigned='2';
            $user->save();
            $post->delete(); 
            if($project!=NULL)
           { $project->delete();
              Session::flash('success','Removed successsfully!!!');
           }

            $user = Auth::user();
       $teams = Detail::where('m_assigned',$user->id)->get();
       
       return view('projects.myteam')->withTeams($teams)->withUser($user);
 
    }
}
