@extends('master')
@section('attendance')

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
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="admin-dashboard.html">Admin Dashboard</a></li>
                            <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                        </ul>
                    </li>

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
                    <h3 class="page-title">Attendance</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Attendance</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <form action="{{route('giveAttendance')}}" method="POST" id="attendance_form">
                        @csrf
                        <button onclick="getLocation();   return false;" class="btn add-btn " >Give Attendance</button>
                    </form>
                    <p id="location"></p>
                    <p id="status"></p>


                </div>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" name="employee">
                    <label class="focus-label">Employee</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <div class="cal-icon">
                        <input class="form-control datetimepicker" type="text" name="deadline">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <button class="btn btn-success w-100 btn-search"> Search </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>In Time</th>
                                <th>Employee</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($attendances as $item)

                            <tr>
                                <td>{{$item->date}}</td>
                                <td>{{$item->inTime}}</td>
                                <td>
                                    <?php
                                    $user = App\Models\User::find($item->user_id);
                                    ?>
                                    {{$user->name}}
                                </td>
                            </tr>

                                @endforeach





                            </tr>




                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
</div>



        <script>
            let givenLocationAl = 23.7700754;
            let givenLocationLo = 90.3533886;

            function getLocation() {
                console.log('two times') ;
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                // document.getElementById("location").innerHTML = "Latitude and Longitude: " + position.coords.latitude + ", " + position.coords.longitude;

                let value = Math.sqrt(Math.pow(givenLocationAl - position.coords.latitude, 2) + Math.pow(givenLocationLo - position.coords.longitude, 2));
                console.log(value);

                if (value <= 0.005) {
                    var form = document.getElementById('attendance_form');
                    form.submit();

                } else {
                    document.getElementById("status").innerHTML = "You are Out";
                    return false;

                }
            }
        </script>

        @endsection