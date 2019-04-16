@extends('layouts.app')

@section('content')
<style type="text/css">
  .display-4{
    font-size:8px;
    display:inline;
    margin-left: 25%;
  }
</style>

@if($detail==NULL)
<div style="margin:10%;padding-left: 200px;">
  <marquee direction="left" onmouseover="stop();" onmouseout="start();" ><h1>No Project Assigned Yet!!</h1></marquee>
</div>
@else
<div class="jumbotron" style="margin: auto;width: 60%;border: 3px solid #73AD21;padding: 15px;"  >
  
  <span style="margin-left: 210px;height: 120px; text-align: center;"><img src="/img/sea.jpg" alt="User's Profile" style="width:40%;height: 50%; border-radius: 250px;"></span>
  <table style="margin-left: 150px;margin-top: 40px;"><tr>
  <td class="display-4" style="font-size:30px;padding-left: 10px;">Title:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$detail->title}}</td></span></tr>
  <tr>
   <td class="display-4" style="font-size:30px;padding-left: 10px;">Statement:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$detail->statement}}</td></tr>
   <tr>
   <td class="display-4" style="font-size:30px;padding-left: 10px;">Description:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$detail->description}}</td></tr>
   <tr>
   <td class="display-4" style="font-size:30px;padding-left: 10px;">Deadline:</td><td class="display-4" style="font-size:27px;padding-left: 30px;"> {{$detail->deadline}}</td></tr>
   <tr>
   
 </table>
   @if($detail->status=='1')
   <a href="{{url('change/'.$detail->user_id)}}" class="btn-danger btn-lg btn-block" style="text-align: center;">Change status as Project Completed</a>
   @endif
</div>
@endif

@endsection
