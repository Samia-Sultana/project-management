@extends('master')
@section('userList')

<div class="header">

    <div class="header-left">
        <a href="admin-dashboard.html" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" width="40" height="40" alt="">
        </a>
        <a href="admin-dashboard.html" class="logo2">
            <img src="{{asset('assets/img/logo2.png')}}" width="40" height="40" alt="">
        </a>
    </div>

    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="page-title-box">
        <h3>Aveenir IT</h3>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <ul class="nav user-menu">

      



        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{asset('assets/img/profiles/avatar-21.jpg')}}" alt="">
                    <span class="status online"></span></span>
                <span>{{Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>

            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
        </div>
    </div>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <nav class="greedys sidebar-horizantal">
                <ul class="list-inline-item list-unstyled links">
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li><a href="{{route('dashboard')}}">Dashboard</a></li>


                    <li class="submenu">
                        <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('project')}}">Projects</a></li>
                            <li><a href="{{route('milestone')}}">Tasks</a></li>
                            <li><a href="task-board.html">Task Board</a></li>
                        </ul>
                    </li>

                </ul>

            </nav>
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li><a href="{{route('dashboard')}}">Dashboard</a></li>

                <li><a href="{{route('project')}}">Projects</a></li>
                <li><a href="{{route('userList')}}">User List</a></li>

                <li><a href="{{route('attendance')}}">Attendance</a></li>


            </ul>
        </div>
    </div>
</div>


<div class="page-wrapper">

<div class="content container-fluid">

  <div class="page-header">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title">Employee</h3>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Employee</li>
        </ul>
      </div>
      
    </div>
  </div>



  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped custom-table datatable">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th class="text-nowrap">Join Date</th>
              <th class="text-end no-sort">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>
                <h2 class="table-avatar">
                  <a href="profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                  <a href="profile.html">{{$user->name}} <span>{{$user->designation}}</span></a>
                </h2>
              </td>
              <td><a href="#">{{$user->email}}</a></td>
              <td>{{$user->phone}}</td>
              <td>{{$user->joining_date}}</td>
              <td>
                <div class="dropdown">
                  <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">{{$user->designation}} </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Software Engineer</a>
                    <a class="dropdown-item" href="#">Software Tester</a>
                    <a class="dropdown-item" href="#">Frontend Developer</a>
                    <a class="dropdown-item" href="#">UI/UX Developer</a>
                  </div>
                </div>
              </td>
              <td class="text-end">
                <div class="dropdown dropdown-action">
                  <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="material-icons">more_vert</i></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i
                        class="fa fa-pencil m-r-5"></i> Edit</a>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i
                        class="fa fa-trash-o m-r-5"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
           
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection