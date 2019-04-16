@extends('layouts.app')

@section('content')

<div class="row">
	
	<div class="col-md-8 col-md-offset-2" style="margin-left: 30px;">
		<h1 style="text-align: center;"> Project Details</h1>
		<hr>
		
		{!! Form::open(['route'=>'project.store','method'=>'POST']) !!}
           {{Form::label('Title', 'Title:')}}
           {{Form::text('title', null,array('class'=>'form-control'))}}

           {{Form::label('statement', 'Statement:')}}
           {{Form::text('statement', null,array('class'=>'form-control'))}}            

           {{Form::label('Description', 'Description:')}}
            {{Form::textarea('description', null,array('class'=>'form-control'))}}

             {{Form::label('deadline', 'Deadline:')}}
           {{Form::text('deadline', null,array('class'=>'form-control'))}}

           {{Form::label('assigned to', 'Assigned To:')}}
            
            <select class="form-control" name="user_id">
            <option>select</option>
                @foreach($students as $student)
                <option value="{{$student->user_id}}">{{$student->name}}</option>
                @endforeach
              </select>
         

           {{Form::submit('Assign Project',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
	</div>

</div>

@endsection