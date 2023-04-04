@extends('master')
@section('project')


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
        <h3>Dreamguy's Technologies</h3>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <ul class="nav user-menu">

        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="search.html">
                    <input class="form-control" type="text" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </li>


        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                <img src="{{asset('assets/img/flags/us.png')}}" alt="" height="20"> <span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('assets/img/flags/us.png')}}" alt="" height="16"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('assets/img/flags/fr.png')}}" alt="" height="16"> French
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('assets/img/flags/es.png')}}" alt="" height="16"> Spanish
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{asset('assets/img/flags/de.png')}}" alt="" height="16"> German
                </a>
            </div>
        </li>


        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa fa-bell-o"></i> <span class="badge rounded-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{asset('assets/img/profiles/avatar-03.jpg')}}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name
                                            <span class="noti-title">Appointment booking with payment gateway</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{asset('assets/img/profiles/avatar-06.jpg')}}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span>
                                            to project <span class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{asset('assets/img/profiles/avatar-17.jpg')}}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{asset('assets/img/profiles/avatar-13.jpg')}}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>


        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fa fa-comment-o"></i> <span class="badge rounded-pill">8</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Messages</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="{{asset('assets/img/profiles/avatar-09.jpg')}}">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles </span>
                                        <span class="message-time">12:28 AM</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="{{asset('assets/img/profiles/avatar-02.jpg')}}">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <span class="message-time">6 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="{{asset('assets/img/profiles/avatar-03.jpg')}}">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Tarah Shropshire </span>
                                        <span class="message-time">5 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="{{asset('assets/img/profiles/avatar-05.jpg')}}">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Mike Litorus</span>
                                        <span class="message-time">3 Mar</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="chat.html">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar">
                                            <img alt="" src="{{asset('assets/img/profiles/avatar-08.jpg')}}">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author"> Catherine Manseau </span>
                                        <span class="message-time">27 Feb</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.html">View all Messages</a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img src="{{asset('assets/img/profiles/avatar-21.jpg')}}" alt="">
                    <span class="status online"></span></span>
                <span>Admin</span>
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
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="active" href="admin-dashboard.html">Admin Dashboard</a></li>
                        <li><a href="employee-dashboard.html">Employee Dashboard</a></li>
                    </ul>
                </li>

                <li><a href="{{route('project')}}">Projects</a></li>
                <li><a href="{{route('userList')}}">User List</a></li>


            </ul>
        </div>
    </div>
</div>

<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Projects</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>

                </div>
            </div>
        </div>

        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" name="project_name">
                    <label class="focus-label">Project Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating" name="project_priority">
                    <label class="focus-label">Priority</label>
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
                                <th>Project Name</th>
                                <th>Progress</th>
                                <th>Project Manager</th>
                                <th>Team</th>
                                <th>Deadline</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $item)
                            <tr>
                                <td>
                                    <a href="{{route('projectDetail',  ['id' => $item->id ])}}">{{$item->project_name}}</a>
                                </td>
                                <td>
                                    <?php
                                    $completedMilestones = explode(',', $item->milestone_status);
                                    $percentages = explode(',', $item->milestone_percentage);
                                    $numMilestones = count($completedMilestones);
                                    $numCompletedMilestones = 0;
                                    $progress = 0;
                                    for ($i = 0; $i < $numMilestones/2; $i++) {
                                        if ($completedMilestones[$i] === 'COMPLETE') {
                                            $numCompletedMilestones++;
                                            $progress += $percentages[$i];
                                        } else {
                                            // Handle in-progress milestone
                                        }
                                    }
                                    ?>



            <div class="progress progress-xs mb-0">
                <div class="bg-success" role="progressbar" data-bs-toggle="tooltip" title="{{$progress}}%" style="width: 40%" data-bs-original-title="{{$progress}}%" aria-label="{{$progress}}%"></div>
            </div>
            </td>
            <td>
                <ul class="team-members">
                    <li>
                        <a href="#" data-bs-toggle="tooltip" title="{{$item->project_manager_name}}"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
                    </li>
                </ul>
            </td>
            <td class="update-team">
                <form method="post" action="{{route('updateProjectTeam')}}">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$item->id}}">
                    <div class="dropdown action-label">
                        <?php
                        $members = explode(",", $item->team_members);
                        $newUsers = array_filter($users, function ($user) use ($members) {
                            return !in_array($user['id'], $members);
                        });

                        ?>
                                                <i class="fa fa-users text-danger"></i>

                        @foreach($members as $member)
                        <?php
                        $teamMember = App\Models\User::find($member);
                        ?>
                        <a href="">{{$teamMember->name}}</a>
                        @endforeach
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> </a>

                        <div class="dropdown-menu dropdown-menu-for-team">
                            @foreach($newUsers as $user)
                            <a class="dropdown-item team-item" href="#" data-status="{{$user['id']}}"><span class="avatar flex-shrink-0"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span> {{$user['name']}}</a>
                            @endforeach
                        </div>
                    </div>
                </form>
            </td>
            <td>{{$item->project_end_date}} </td>
            <td class="update-priority">
                <form method="post" action="{{route('updateProjectPriority')}}">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$item->id}}">
                    <div class="dropdown action-label">
                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle priority-value" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> {{$item->project_priority}} </a>
                        <div class="dropdown-menu dropdown-menu-for-priority">
                            <a class="dropdown-item priority-item" href="#" data-status="High"><i class="fa fa-dot-circle-o text-danger"></i> High</a>
                            <a class="dropdown-item priority-item" href="#" data-status="Medium"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a>
                            <a class="dropdown-item priority-item" href="#" data-status="Low"><i class="fa fa-dot-circle-o text-success"></i> Low</a>
                        </div>
                    </div>
                </form>
            </td>
            <td class="update-status">
                <form method="post" action="{{route('updateProjectStatus')}}">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$item->id}}">
                    <div class="dropdown action-label">
                        <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-dot-circle-o text-success"></i> {{$item->project_status}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-for-status">
                            <a class="dropdown-item status-item" href="#" data-status="active"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                            <a class="dropdown-item status-item" href="#" data-status="inactive"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                        </div>
                    </div>
                </form>

            </td>
            <td class="text-end">
                <div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project_{{$item->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project_{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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


<div id="create_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Project</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('createProject')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text" name="projectName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" name="startDate">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" name="endDate">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Budget</label>
                                <input class="form-control" type="text" name="budget">
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select" name="priority">
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="status">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Manager</label>
                                <?php
                                $users = App\Models\User::all();
                                ?>
                                <select class="select" name="projectManager">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team Members</label>
                                <select multiple name="teamMembers[]" class="select">

                                    <?php
                                    $users = App\Models\User::all();
                                    ?>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach($projects as $item)
<div id="edit_project_{{$item->id}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Project</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('updateProject')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="project_id">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text" name="project_name" value="{{$item->project_name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" name="project_start_date" value="{{$item->project_start_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" name="project_end_date" value="{{$item->project_end_date}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Budget</label>
                                <input class="form-control" type="text" name="project_budget" value="{{$item->project_budget}}">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="project_status" value="{{$item->project_status}}">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select" name="project_priority" value="{{$item->project_priority}}">
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Manager</label>
                                <select class="select" name="project_manager" value="{{$item->project_manager}}">
                                    <?php
                                    $users = App\Models\User::all();
                                    ?>
                                    <option value="{{$item->project_manager}}">{{$item->project_manager_name}}</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team Members</label>

                                <select multiple name="teamMembers[]" class="select">

                                    @foreach($members as $member)
                                    <?php
                                    $teamMember = App\Models\User::find($member);
                                    ?>
                                    <option value="{{$teamMember->id}}">{{$teamMember->name}}</option>
                                    @endforeach
                                    @foreach($newUsers as $user)
                                    <option value="{{$user['id']}}">{{$user['name']}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="project_description" value="{{$item->project_description}}"></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal custom-modal fade" id="delete_project_{{$item->id}}" role="dialog">
    <form action="{{route('deleteProject')}}" method="POST" id="delete_project_form_{{$item->id}}">
        @csrf
        <input type="hidden" name="project_id" value="{{$item->id}}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Project</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-primary continue-btn" href="#" onclick="document.getElementById('delete_project_form_{{$item->id}}').submit(); return false;">
                                    Delete
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endforeach

</div>



<div id="create_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Project</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="select">
                                    <option>Global Technologies</option>
                                    <option>Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Rate</label>
                                <input placeholder="$50" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select class="select">
                                    <option>Hourly</option>
                                    <option>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Leader</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Leader</label>
                                <div class="project-members">
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Members</label>
                                <div class="project-members">
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                    </a>
                                    <span class="all-team">+2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <div id="editor"></div>
                    </div>
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="edit_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Project</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" value="Project Management" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="select">
                                    <option>Global Technologies</option>
                                    <option>Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Rate</label>
                                <input placeholder="$50" class="form-control" value="$5000" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select class="select">
                                    <option>Hourly</option>
                                    <option selected>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option selected>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Project Leader</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Leader</label>
                                <div class="project-members">
                                    <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Members</label>
                                <div class="project-members">
                                    <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                                        <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                                        <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                                        <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                    </a>
                                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                    </a>
                                    <span class="all-team">+2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal custom-modal fade" id="delete_project" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Project</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    document.querySelector('table').addEventListener('click', function(event) {
        if (event.target.matches('.status-item')) {
            event.preventDefault();

            const status = event.target.getAttribute('data-status');
            const form = event.target.closest('td.update-status').querySelector('form');
            const statusInput = document.createElement('input');
            statusInput.setAttribute('type', 'hidden');
            statusInput.setAttribute('name', 'project_status');
            statusInput.setAttribute('value', status);
            form.appendChild(statusInput);
            console.log(status, form);

            form.submit();


            // form.querySelector('input[name="project_status"]').value = status;
            form.submit();
        }
    });
</script>




<script>
    document.querySelector('table').addEventListener('click', function(event) {
        if (event.target.matches('.priority-item')) {
            event.preventDefault();
            console.log('kiiiiiii');
            const priority = event.target.getAttribute('data-status');
            console.log(priority);

            const form = event.target.closest('td.update-priority').querySelector('form');
            const priorityInput = document.createElement('input');
            priorityInput.setAttribute('type', 'hidden');
            priorityInput.setAttribute('name', 'project_priority');
            priorityInput.setAttribute('value', priority);
            form.appendChild(priorityInput);


            form.submit();


            // form.querySelector('input[name="project_status"]').value = status;
            form.submit();
        }
    });
</script>


<script>
    document.querySelector('table').addEventListener('click', function(event) {
        if (event.target.matches('.team-item')) {
            event.preventDefault();
            console.log('jiiiiiii');
            const user = event.target.getAttribute('data-status');
            console.log(user);

            const form = event.target.closest('td.update-team').querySelector('form');
            const userInput = document.createElement('input');
            userInput.setAttribute('type', 'hidden');
            userInput.setAttribute('name', 'user');
            userInput.setAttribute('value', user);
            form.appendChild(userInput);
            form.submit();

        }
    });
</script>


<script>
    $(document).ready(function() {

        const searchBtn = document.querySelector('.btn-search');

        // get the input fields
        const projectNameInput = document.querySelector('input[name="project_name"]');
        const projectPriorityInput = document.querySelector('input[name="project_priority"]');
        const dateInput = document.querySelector('input[name="deadline"]');

        // get all the table rows
        const rows = document.querySelectorAll('table tbody tr');

        // add event listener to the search button
        searchBtn.addEventListener('click', () => {
            // get the input values
            const projectName = projectNameInput.value.toLowerCase();
            const projectPriority = projectPriorityInput.value.toLowerCase();
            const date = dateInput.value;

            // loop through the rows and hide/show based on the input values
            rows.forEach(row => {
                const project = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const priority = row.querySelector('td.update-priority .priority-value').textContent.toLowerCase();
                const deadline = row.querySelector('td:nth-child(5)').textContent;
                console.log(project, priority, deadline);

                if ((projectName && project.includes(projectName)) || (projectPriority && priority.includes(projectPriority)) || (date && deadline.includes(date))) {
                    console.log('new');

                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

    });
</script>




@endsection