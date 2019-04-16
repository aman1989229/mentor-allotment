@extends('layouts.app')

@section('content')

@include('partials.sidebar')

	<div class="col-md-10">
        <table class="table" style="margin-left: 3%;">
              <thead>
                <tr>
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
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
    @endsection