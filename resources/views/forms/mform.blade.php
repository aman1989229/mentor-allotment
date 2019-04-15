@extends('layouts.app')
@section('content')

<div class="row">
	
	<div class="col-md-8 col-md-offset-2" style="margin-left: 30px;">
		<h1 style="text-align: center;"> Upload Your Details</h1>
    
		<hr>
		
		{!! Form::open(['route' => 'form.store','method'=>'POST']) !!}<!-- here form will open only but when we use model lets check edit.php inside posts
       upload a image set (files = true) -->
           {{Form::label('Name', 'Name:')}}
           {{Form::text('name', null,array('class'=>'form-control'))}}
            

           {{Form::label('Request', 'Request:')}}
            {{Form::textarea('requests', null,array('class'=>'form-control'))}}

             {{Form::label('Role', 'Role:'),array('style'=>'margin-top:10px')}}
             {{Form::select('role_id', array('2' => 'User', '3' => 'Mentor'))}}  


           {{Form::submit('Upload Details',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
	</div>

</div>

@endsection