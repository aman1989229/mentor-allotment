@extends('layouts.app')

@section('content')
<div class="row">
  @include('partials.sidebar')

		<div class="col-md-10" style="float: left;">
      
			     <table class="table" style="margin-left: 3%; margin-top: 4%;float: left; border:2px solid black;width:990px;">
              <thead>
                <tr>
                  @if($user->role_id=='3')
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Registraion No:</th>
                  <th scope="col">CGPA(Out of 10)</th>
                  <th scope="col">Status</th><th></th>
                  @else
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th><th></th>
                  
                  @endif
                </tr>
              </thead>
              <tbody>
                @php
                $i=1;
                @endphp
                @foreach($lists as $list)
                   <tr>
                    <td>@php echo($i++); @endphp </td>
                     @if($user->role_id=='3')
                   	<td>{{ $list->name }}</td>
                   	<td>{{ $list->rno }}</td>
                    <td>@if($list->cgpa=='1') Above 9.5 @endif
                        @if($list->cgpa=='2')Between 9.5-8.5 @endif
                        @if($list->cgpa=='3')Between 8.5-7.5 @endif
                        @if($list->cgpa=='4')Below 7.5 @endif</td>
                     @else
                      <td>{{ $list->name }}</td>
                     @endif
                     @if($user->role_id=='3')
                        @if($list->assigned=='2')
                     <td><a href="{{route('team.edit',$list->user_id)}}" class="btn btn-success btn-sm">Not Assigned</a></td>
                     @else
                     <td><a href="#" class="btn btn-danger btn-sm">Assigned</a></td>
                     @endif
                     @endif
                   	<td><a href="{{route('form.show',$list->user_id)}}" class="btn btn-success btn-sm">View</a></td>
                   </tr>
                   
                  @endforeach
              </tbody>
            </table>
            </div>
            <!--pagination links starts here-->
           <div class="text-center" style="margin-left: 45%;">
              {!! $lists->links();!!}
            </div>
		</div>
    
     @endsection