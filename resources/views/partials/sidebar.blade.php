<html><head>
    <style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>
<div class="col-md-2">

<div class="wrapper" >
    <!-- Sidebar -->
    <nav id="sidebar" style="background-color: darkblue;width:10%;">
        <div class="sidebar-header"style="background-color: black; color: white;text-decoration: underline;">
          @if($user->role_id=='2')
            <span class="col-md-5" style="margin-left: 25px; text-align: center;"><img src="/img/user.gif" alt="User's Profile" style="width:50%; border-radius: 50px;"></span>
            @else 
            <span class="col-md-5" style="margin-left: 25px; text-align: center;"><img src="/img/prof.gif" alt="User's Profile" style="width:50%; border-radius: 50px;border:1px solid white;"></span>
             @endif
            <span class="col-md-7" style="margin-left: 18px; text-align: center;"><h4>Dashboard</h4></span>
            
        </div>
        <div class="col-md-12">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{route('details')}}" >Upload Details</a>
            </li>
           <hr style="background-color: black;" />

           @if($user->form_status=='1')
           @if($user->role_id=='2')
            <li class="active">
                <a href="{{route('dashboard')}}">Mentors</a>
                
            </li>
            <li class="active">
                <a href="{{route('mentor.index')}}">Your Mentor</a>
              </li>
              <li class="active">
                <a href="{{route('project.index')}}">Your Project</a>
              </li>
             @else   
                <li class="active">
                <a href="{{route('dashboard')}}">Students</a>
                
            </li>
            <li class="active">
                <a href="{{route('team.show',$user->id)}}">My Team</a>

            </li>
             @endif
             @endif
            <hr style="background-color: black;" />
        </ul>
      </div>
    </nav>

</div>
  </div>
  </body>
  </html>