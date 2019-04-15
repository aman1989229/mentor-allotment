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


class DetailController extends Controller
{
    //
     public function index()
    {   
    	$user = Auth::user();
    	if ($user->role_id=='2') {
    		return view('forms.uform')->withUser($user);
    	}
    	else
    	return view('forms.mform')->withUser($user);	
    }


    
   public function dashboard()
    {         $user=Auth::user();
             return view('forms.dashboard')->withUser($user);
    }
   
   public function students()
    {   
        $user = Auth::user();
        if ($user->role_id=='3') {
            $lists = Detail::paginate(10);
            
        }
        else{
            $lists = Mentordetail::paginate(10);
        
    }
       return view('forms.list')->withLists($lists)->withUser($user); 

    }

    public function cgpa()
       {   
          
          $user = Auth::user();
        if (request()->has('cgpa')) {
            $lists=Detail::where('cgpa',request('cgpa'))->paginate(5);
        }
       else
       {
         $lists = Mentordetail::paginate(5);
       }
        return view('forms.list')->withLists($lists)->withUser($user);
     
      }


     public function assign($id)
    {        
              $user = Auth::user();
            $assign=Detail::find($id);

            $assign->assigned='1';
            $assign->m_assigned=$user->id;

            return view('dashboard');
    }
      
}
