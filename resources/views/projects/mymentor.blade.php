@extends('layouts.app')

@section('content')

@include('partials.sidebar')

@if($detail->m_assigned==NULL)
  
  <div style="margin:10%;padding-left: 200px;">
  <marquee direction="left" onmouseover="stop();" onmouseout="start();" >
    <h1>Mentor Not Assigned yet</h1>
  </h1></marquee>
</div>
@else
	<div class="col-md-10" style="margin-left: 280px;">

        <table class="table" style="width:700px;border: 2px solid black;margin-top: -40%">
              <thead>
                <tr>
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                   <tr>
                    <td>@php echo($i++); @endphp </td>
                   	<td>{{ $mentor->name }}</td>
                   	<td><a href="{{route('form.show',$mentor->user_id)}}" class="btn btn-success btn-sm">View</a></td>
                   </tr>
              </tbody>
            </table>

		</div>
    @endif
    @endsection