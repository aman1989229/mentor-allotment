<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Detail;
use App\Mentordetail;
use User;
use App\Cgpa;
use Session;

class FormController extends Controller
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
          $user = Auth::user();
          if ($user->role_id=='2') {
              
              $this->validate($request,array(
           'name'=>'required|max:255',
           'role_id'=>'required',
           'cgpa'=>'required',
           'rno'=>'required'
           
        ));
        //dd($request);
         $user = Auth::user();
         $post = new Detail;
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->rno=$request->rno;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
         $post->cgpa=$request->cgpa;
       
              
         $post->save();

          Session::flash('success','Details has been saved successsfully!!!');
        //redirect to another base
         return view('forms.show');
          }

          else{
            $this->validate($request,array(
           'name'=>'required|max:255',
           'role_id'=>'required'
        ));
        //dd($request);
        
         $post = new Mentordetail;
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
       
              
         $post->save();

          Session::flash('success','Details has been saved successsfully!!!');
        //redirect to another base
         return view('forms.show');
          }
         
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
    }
}
