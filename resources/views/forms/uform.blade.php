<div style="background-color:  #D8D9DC">
@extends('layouts.app')
@section('content')

<div class="row"style="background-image: url('img/15.jfif');background-repeat: no-repeat;background-size:100% 100%;">
	
	<div class="col-md-8 col-md-offset-2" style="margin: 10px;margin-left: 200px;padding:40px;border: 4px solid black;border-radius: 70px 0 70px 0;color: white;font-size:19px;">
		<h1 style="text-align: center;"> Upload Your Details</h1>
		<hr style="background-color: white;">
		<div style="margin-left: 10px; color: white;"> 
		{!! Form::open(['route' => 'form.store','method'=>'POST']) !!}<!-- here form will open only but when we use model lets check edit.php inside posts
       upload a image set (files = true) -->
           {{Form::label('Name', 'Name:')}}
           {{Form::text('name', null,array('class'=>'form-control'))}}
<br/>
           {{Form::label('Registration', 'Registration no:')}}
           {{Form::text('rno', null,array('class'=>'form-control'))}}            
<br/>
           {{Form::label('Request', 'Request:')}}
            {{Form::textarea('requests', null,array('class'=>'form-control'))}}
<br/>
             {{Form::label('Role', 'Role:'),array('style'=>'margin-top:10px')}}
             {{Form::select('role_id', array('2' => 'User', '3' => 'Mentor'))}}  
<br/>
             {{Form::label('CGPA', 'CGPA:'),array('style'=>'margin-top:10px')}}
             {{Form::select('cgpa', array('1' => 'above:9.5', '2' => 'between:9.5-8.5','3'=>'between:8.5-7.5','4'=>'below:7.5'))}}  

           {{Form::submit('Upload Details',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
	</div></div>

</div>

@endsection