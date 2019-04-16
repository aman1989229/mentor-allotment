<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Detail;
use App\Mentordetail;
use App\Cgpa;
use Session;
use App\User;

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
           'rno'=>'required|unique'
           
        ));
        //dd($request);
         $user = Auth::user();
    
         $formstatus=User::where('id','=',$user->id)->first();
         $formstatus->form_status='1';
         $formstatus->save();
         $post = new Detail;
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->rno=$request->rno;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
         $post->cgpa=$request->cgpa;

       
              
         $post->save();
         $user=Auth::user();
          Session::flash('success','Details has been saved successsfully please click on refresh!!!');
        //redirect to another base
         return view('home')->withUser($user);;
          }

          else{
            $this->validate($request,array(
           'name'=>'required|max:255',
           'role_id'=>'required'
        ));
        //dd($request);
        
        $user = Auth::user();
    
         $formstatus=User::where('id','=',$user->id)->first();
         $formstatus->form_status='1';
         $formstatus->save();
         
         $post = new Mentordetail;
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
       
              
         $post->save();
           $user = Auth::user();
          Session::flash('success','Details has been saved successsfully please click on refresh!!!');
        //redirect to another base
         return view('home')->withUser($user);;
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
      
        $user = Auth::user();
        if ($user->role_id=='3') {
            $post=Detail::where('user_id','=',$id)->first();
        }
        else{
            $post=Mentordetail::where('user_id','=',$id)->first();
        }

         return view('forms.show')->withPost($post)->withUser($user);

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
        if ($user->role_id=='2') {
            $post=Detail::where('user_id','=',$id)->first();
            return view('forms.uedit')->withPost($post)->withUser($user);
        }
        else{
            $post=Mentordetail::where('user_id','=',$id)->first();
            return view('forms.medit')->withPost($post)->withUser($user);
        }

         

          

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
    
         $formstatus=User::where('id','=',$user->id)->first();
         $formstatus->form_status='1';
         $formstatus->save();
         $post = Detail::where('user_id','=',$id)->first();
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->rno=$request->rno;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
         $post->cgpa=$request->cgpa;

       
              
         $post->save();
         $user=Auth::user();
          Session::flash('success','Details update successsfully please click on refresh!!!');
        //redirect to another base
         return view('home')->withUser($user);;
          }

          else{
            $this->validate($request,array(
           'name'=>'required|max:255',
           'role_id'=>'required'
        ));
        //dd($request);
        
        $user = Auth::user();
    
         $formstatus=User::where('id','=',$user->id)->first();
         $formstatus->form_status='1';
         $formstatus->save();
         
         $post = Mentordetail::where('user_id','=',$id)->first();
           
         $post->user_id=$user->id;
        $post->name=$request->name;
         $post->requests=$request->requests;
         $post->role_id=$request->role_id;
       
              
         $post->save();
           $user = Auth::user();
          Session::flash('success','Details update successsfully please click on refresh!!!');
        //redirect to another base
         return view('home')->withUser($user);;
          }
         


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
