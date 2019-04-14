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
    	return view('forms.form')->withUser($user);
    }
}
