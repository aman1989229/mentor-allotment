@extends('layouts.app')

@section('content')

@include('partials.sidebar')

	<div class="col-md-10">
        <table class="table" style="margin-left: 3%;">
              <thead>
                <tr>
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Registration No:</th>
                  <th scope="col">Project Status</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($teams as $team)
                   <tr>
                    <td>@php echo($i++); @endphp </td>
                   	<td>{{ $team->name }}</td>
                   	<td>{{ $team->rno }}</td>
                   	<td>@if($team->status=='1') Working@endif
                        @if($list->cgpa=='2')Completed @endif
                        @if($list->cgpa=='3')Project Not Assigned @endif
                   	<td><a href="#" class="btn btn-success btn-sm">View</a></td>
                   </tr>
                   
                  @endforeach
              </tbody>
            </table>

		</div>

@endsection