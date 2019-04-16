@extends('layouts.app')

@section('content')

@include('partials.sidebar')
@if($user->form_status=='2')
<div class="col-md-10" style="margin-left: 280px;margin-top: -30%;">
<marquee direction="left" onmouseover="stop();" onmouseout="start();" class="marquee1" style=" border:1px solid black; background-image: linear-gradient(to bottom right, blue, gray);color:white;width:90%;height: 100px;font-size: 45px;padding-top: 15px;border-radius: 40px 0 40px 0;text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, 2px 2px 0 #000;">Please Update your Details to view your Mentor and assigned projects.</marquee>
</div>
@endif
@endsection
