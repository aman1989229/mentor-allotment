@extends('layouts.app')

@section('content')


<div class="jumbotron" style="margin: auto;width: 60%;border: 3px solid #73AD21;padding: 10px;"  >
  <h2 class="display-4" style="display: inline;margin-left: 25%">Name: {{$post->name}}</h2>
  @if($user->role_id=='3')
   <h2 class="display-4" style="display: inline;margin-left: 25%">Registration No: {{$post->rno}}</h2>
   <h2 class="display-4" style="display: inline;margin-left: 25%">CGPA:
   	@if($post->cgpa=='1') Above 9.5 @endif
    @if($post->cgpa=='2')Between 9.5-8.5 @endif
    @if($post->cgpa=='3')Between 8.5-7.5 @endif
    @if($post->cgpa=='4')Below 7.5 @endif
   </h2>
   @endif
  <br><br>
  <br>
  <h2>Request : </h2>
  <p class="lead" style="margin-top: 10px;">{{$post->requests}}</p>
  <hr class="my-4">
 <!-- @if($post->availability=="Yes")
  <div style="width:70%; border:2; font-weight:bolder; font-size: 20px;" class="alert alert-success">Available</div> -->
  <a class="btn btn-warning btn-lg" href="#" style="margin-left: 5px;">Make Request</a>
 <!-- @else
  <div style="width:70%; border:2; font-weight:bolder; font-size: 20px;"  class="alert alert-danger">Booked</div>-->
  <a href="#" class="btn-danger btn-lg">Convert into Pdf</a>
  @endif
</div>

@endsection
