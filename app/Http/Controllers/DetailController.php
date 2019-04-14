<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use User;
use Illuminate\Support\Facades\Auth;


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
}
