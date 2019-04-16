<!DOCTYPE html>
<html>
<head>
	<style>
		.container-fluid{
			padding-top: 60px;
			padding-right:5px;
			padding-left: 20px;
			
		}
		.panel{
			width: 250px;
			height: 280px;
			padding-left: 20px;
			padding-right: 2px;
			border-radius: 20% 0 20% 0;
			float: left;
		}
		.widget{
			padding: 2px;
			margin: 0px;
			float: left;
			border:1px solid black;
		}
		.panel-content{
			text-align: center;
			color: white;
			margin: 20px;
		}
		.btn-primary{
			margin-top: 120px;
		}
	</style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="row">
@include('partials.sidebar')

@if($user->role_id=='3')
<div class="col-md-10" style="background-color: lightgray;">
<h3 style="margin-left: 50px;margin-top: 30px;">Select students(CGPA-wise):</h3>
  <div class="clearfix container-fluid row" style="margin-left: 10px;">
    <div class="col-sm-3" >
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image: url('img/gip4.gif')">
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="detail/?cgpa=1" class="btn btn-primary">Above 9.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image: url('img/giphy.gif')">
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="detail/?cgpa=2" class="btn btn-primary">Between 9.5 and 8.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image: url('img/gip2.gif')">
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="detail/?cgpa=3" class="btn btn-primary">Between 8.5 and 7.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image: url('img/gip3.gif')">	
    		<div class="panel-content">
    			
        	<i class="voyager-group"></i>        
        	<a href="detail/?cgpa=4" class="btn btn-primary">Below 7.5</a>
    	</div>
		</div>
	</div>
</div>
</div>
@else
<div class="col-md-10" style="background-color: lightgray;">
	<h3 style="margin-left: 50px;margin-top: 30px;">Mentors available:</h3>
    	<div class="panel widget center bgimage" style="margin-left:380px;margin-top:40px;overflow:hidden;background-image: url('img/tenor.gif')">
    	
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="detail" class="btn btn-primary">Mentors</a>
    	</div>
		</div>
	</div>

@endif
	</div>

@endsection
</body></html>