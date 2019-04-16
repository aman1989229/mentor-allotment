@extends('layouts.app')

@section('content')
<style type="text/css">
  .display-4{
    font-size:8px;
    display:inline;
    margin-left: 25%;
  }
</style>

<div class="jumbotron" style="margin: auto;width: 60%;border: 3px solid #73AD21;padding: 15px;"  >
  
  <span style="margin-left: 210px;height: 120px; text-align: center;"><img src="/img/sea.jpg" alt="User's Profile" style="width:40%;height: 50%; border-radius: 250px;"></span>
  <table style="margin-left: 150px;margin-top: 40px;"><tr>
  <td class="display-4" style="font-size:30px;padding-left: 10px;">Name:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$post->name}}</td></span></tr>
  <tr>
  @if($user->role_id=='3')
   <td class="display-4" style="font-size:30px;padding-left: 10px;">Registration No:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$post->rno}}</td></tr>
   <tr><td class="display-4" style="font-size:30px;padding-left: 10px;">CGPA:</td><td class="display-4" style="font-size:27px;padding-left: 30px;">
    @if($post->cgpa=='1') Above 9.5 @endif
    @if($post->cgpa=='2')Between 9.5-8.5 @endif
    @if($post->cgpa=='3')Between 8.5-7.5 @endif
    @if($post->cgpa=='4')Below 7.5 @endif
   </td></tr></table>
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
