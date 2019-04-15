@extends('layouts.app')

@section('content')

<div class="row">
	
	<div class="col-md-8 col-md-offset-2" style="margin-left: 30px;">
		<h1 style="text-align: center;"> Project Details</h1>
		<hr>
		
		{!! Form::open(['route' => 'team.store','method'=>'POST']) !!}<!-- here form will open only but when we use model lets check edit.php inside posts
       upload a image set (files = true) -->
           {{Form::label('Title', 'Title:')}}
           {{Form::text('pname', null,array('class'=>'form-control'))}}

           {{Form::label('statement', 'Statement:')}}
           {{Form::text('statement', null,array('class'=>'form-control'))}}            

           {{Form::label('Description', 'Description:')}}
            {{Form::textarea('description', null,array('class'=>'form-control'))}}

             {{Form::label('deadline', 'Deadline:')}}
           {{Form::text('deadline', null,array('class'=>'form-control'))}}

         

           {{Form::submit('Assign Project',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
	</div>

</div>

@endsection