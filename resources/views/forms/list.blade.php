@extends('layouts.app')

@section('content')
<div class="row">
  @include('partials.sidebar')

		<div class="col-md-10">
	       	 
          
			     <table class="table" style="margin-left: 3%; margin-top: 4%;">
              <thead>
                <tr>
                  @if($user->role_id=='3')
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  <th scope="col">Registraion No:</th>
                  <th scope="col">CGPA(Out of 10)</th>
                  @else
                  <th scope="col">S.n.</th>
                  <th scope="col">Name</th>
                  
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
                   	<td><a href="{{route('form.show',$list->id)}}" class="btn btn-success btn-sm">View</a></td>
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