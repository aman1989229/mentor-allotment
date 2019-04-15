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
			height: 360px;
			padding-left: 20px;
			padding-right: 2px;
			border-radius: 30px;
			float: left;
		}
		.widget{
			padding: 2px;
			margin: 0px;
			float: left;
			border-bottom: 6px solid blue;
			border-right: 6px solid blue;
		}
		.panel-content{
			text-align: center;
			color: white;
			margin: 20px;
		}
	</style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="row">
@include('partials.sidebar')

<div class="col-md-10">

  <div class="clearfix container-fluid row" style="margin-left: 10px;">
    <div class="col-sm-3" >
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/assets?path=images%2Fwidget-backgrounds%2F01.jpg');">
    	
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="#" class="btn btn-primary">Above 9.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/assets?path=images%2Fwidget-backgrounds%2F01.jpg');">
    	
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="#" class="btn btn-primary">Between 9.5 and 8.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/assets?path=images%2Fwidget-backgrounds%2F01.jpg');">
    	
    		<div class="panel-content">
        	<i class="voyager-group"></i>        
        	<a href="#" class="btn btn-primary">Between 8.5 and 7.5</a>
    	</div>
		</div>
	</div>
	<div class="col-sm-3">
    	<div class="panel widget center bgimage" style="margin-bottom:0;overflow:hidden;background-image:url('http://127.0.0.1:8000/admin/assets?path=images%2Fwidget-backgrounds%2F01.jpg');">
    	
    		<div class="panel-content">
    			
        	<i class="voyager-group"></i>        
        	<a href="#" class="btn btn-primary">Below 7.5</a>
    	</div>
		</div>
	</div>

</div></div>
	</div>

@endsection
</body></html>