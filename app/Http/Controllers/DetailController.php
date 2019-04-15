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

}
