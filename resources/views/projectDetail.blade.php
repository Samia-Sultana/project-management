@extends('master')
@section('projectDetail')



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

          <li><a href="{{route('project')}}">Projects</a></li>
                <li><a href="{{route('userList')}}">User List</a></li>


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
          <h3 class="page-title">{{$projectDetail->project_name}}</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Project</li>
          </ul>
        </div>
        <div class="col-auto float-end ms-auto">
          <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa fa-plus"></i> Create Milestone</a>
        </div>
      </div>
      <div class="row board-view-header mt-md-3">
        <div class="col-12">
          <div class="pro-progress">
            <div class="pro-progress-bar">
              <h4>Progress</h4>
              <div class="progress">
              <?php
              $milestones = App\Models\Milestone::where('project_id',$projectDetail->id)->get();
              $progress = 0;
              foreach($milestones as $milestone){
                if ($milestone->milestone_status === 'COMPLETE') {
                  $progress += $milestone->milestone_percentage;
              }
              }

                             ?>
                <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progress; ?>%;"
></div>
              </div>
              <span>{{$progress}}%</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 col-xl-9">
        <div class="card">
          <div class="card-body">
            <div class="project-task">
              <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
                <li class="nav-item"><a class="nav-link active" href="#all_tasks" data-bs-toggle="tab" aria-expanded="true">All Milestones</a></li>
                <li class="nav-item"><a class="nav-link" href="#pending_tasks" data-bs-toggle="tab" aria-expanded="false"> In Progress</a></li>
                <li class="nav-item"><a class="nav-link" href="#completed_tasks" data-bs-toggle="tab" aria-expanded="false">Completed Milestones</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane show active" id="all_tasks">
                  <div class="task-wrapper">
                    <div class="task-list-container">
                      <div class="task-list-body">
                        <ul id="task-list">
                          @php
                          $milestoneIdArray = explode(',',$projectDetail->milestone_id);
                          $milestoneNameArray = explode(',',$projectDetail->milestone_name);

                          @endphp

                          @if($projectDetail->milestone_id != null)
                          @foreach($milestoneIdArray as $key=>$value)
                          <li class="task">
                            <div class="task-container">
                              <div class="avatar">
                                <a href="" class="rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#status_user_{{$value}}"><i class="fas fa-square"></i></a>
                              </div>
                              <a class="task-label" href="{{route('milestoneDetail', ['id1' => $projectDetail->id, 'id2' => $milestoneIdArray[$key]])}}">{{$milestoneNameArray[$key]}}</a>
                              <span class="task-action-btn task-btn-right">
                                <span class="">
                                  <?php
                                  $milestoneInfo = App\Models\Milestone::find($value);
                                  ?>
                                  {{$milestoneInfo->milestone_status}}
                                </span>
                                <span class="action-circle large" title="Edit">
                                  <a href="" data-bs-toggle="modal" data-bs-target="#edit_milestone-{{$milestoneIdArray[$key]}}"><i class="fa fa-user-plus"></i></a>
                                </span>
                                <span class="action-circle large delete-btn" title="Delete Task">
                                  <i class="material-icons">delete</i>
                                </span>
                              </span>
                            </div>
                          </li>
                          @endforeach
                          @endif

                        </ul>
                      </div>
                      <div class="task-list-footer">
                        <div class="new-task-wrapper">
                          <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                          <span class="error-message hidden">You need to enter a task first</span>
                          <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                          <span class="btn" id="close-task-panel">Close</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="pending_tasks">
                  <div class="tab-pane show active" id="all_tasks">
                    <div class="task-wrapper">
                      <div class="task-list-container">
                        <div class="task-list-body">
                          <ul id="task-list">
                            @php
                            $milestoneIdArray = explode(',',$projectDetail->milestone_id);
                            $milestoneNameArray = explode(',',$projectDetail->milestone_name);

                            @endphp

                            @if($projectDetail->milestone_id != null)
                            @foreach($milestoneIdArray as $key=>$value)
                            <?php
                            $milestoneInfo = App\Models\Milestone::find($value);
                            ?>
                            @if($milestoneInfo->milestone_status == 'IN PROGRESS')
                            <li class="task">
                              <div class="task-container">
                                <div class="avatar">
                                  <a href="" class="rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#status_user_{{$value}}"><i class="fas fa-square"></i></a>
                                </div>
                                <a class="task-label" href="{{route('milestoneDetail', ['id1' => $projectDetail->id, 'id2' => $milestoneIdArray[$key]])}}">{{$milestoneNameArray[$key]}}</a>
                                <span class="task-action-btn task-btn-right">
                                  <span class="">

                                    {{$milestoneInfo->milestone_status}}
                                  </span>
                                  <span class="action-circle large" title="Edit">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#edit_milestone-{{$milestoneIdArray[$key]}}"><i class="fa fa-user-plus"></i></a>
                                  </span>
                                  <span class="action-circle large delete-btn" title="Delete Task">
                                    <i class="material-icons">delete</i>
                                  </span>
                                </span>
                              </div>
                            </li>
                            @endif
                            @endforeach
                            @endif

                          </ul>
                        </div>
                        <div class="task-list-footer">
                          <div class="new-task-wrapper">
                            <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                            <span class="error-message hidden">You need to enter a task first</span>
                            <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                            <span class="btn" id="close-task-panel">Close</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="tab-pane" id="completed_tasks">
                <div class="tab-pane show active" id="all_tasks">
                    <div class="task-wrapper">
                      <div class="task-list-container">
                        <div class="task-list-body">
                          <ul id="task-list">
                            @php
                            $milestoneIdArray = explode(',',$projectDetail->milestone_id);
                            $milestoneNameArray = explode(',',$projectDetail->milestone_name);

                            @endphp

                            @if($projectDetail->milestone_id != null)
                            @foreach($milestoneIdArray as $key=>$value)
                            <?php
                            $milestoneInfo = App\Models\Milestone::find($value);
                            ?>
                            @if($milestoneInfo->milestone_status == 'COMPLETE')
                            <li class="task">
                              <div class="task-container">
                                <div class="avatar">
                                  <a href="" class="rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#status_user_{{$value}}"><i class="fas fa-square"></i></a>
                                </div>
                                <a class="task-label" href="{{route('milestoneDetail', ['id1' => $projectDetail->id, 'id2' => $milestoneIdArray[$key]])}}">{{$milestoneNameArray[$key]}}</a>
                                <span class="task-action-btn task-btn-right">
                                  <span class="">

                                    {{$milestoneInfo->milestone_status}}
                                  </span>
                                  <span class="action-circle large" title="Edit">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#edit_milestone-{{$milestoneIdArray[$key]}}"><i class="fa fa-user-plus"></i></a>
                                  </span>
                                  <span class="action-circle large delete-btn" title="Delete Task">
                                    <i class="material-icons">delete</i>
                                  </span>
                                </span>
                              </div>
                            </li>
                            @endif
                            @endforeach
                            @endif

                          </ul>
                        </div>
                        <div class="task-list-footer">
                          <div class="new-task-wrapper">
                            <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                            <span class="error-message hidden">You need to enter a task first</span>
                            <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                            <span class="btn" id="close-task-panel">Close</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="project-title">
              <h5 class="card-title">{{$projectDetail->project_name}}</h5>
              <small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open
                  tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks
                  completed</span></small>
            </div>
            <p>{{$projectDetail->project_description}}</p>
            <p></p>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-xl-3">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title m-b-15">Project details</h6>
            <table class="table table-striped table-border">
              <tbody>
                <tr>
                  <td>Cost:</td>
                  <td class="text-end">{{$projectDetail->project_budget}}</td>
                </tr>

                <tr>
                  <td>In Date:</td>
                  <td class="text-end">{{$projectDetail->project_start_date}}</td>
                </tr>
                <tr>
                  <td>Deadline:</td>
                  <td class="text-end">{{$projectDetail->project_end_date}}</td>
                  <td class="text-end"></td>
                </tr>
                <tr>
                  <td>Priority:</td>
                  <td class="text-end">
                    <div class="btn-group">
                      <a href="#" class="badge badge-danger dropdown-toggle" data-bs-toggle="dropdown">{{$projectDetail->project_priority}} </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Highest
                          priority</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> High
                          priority</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-primary"></i> Normal
                          priority</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Low
                          priority</a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Status:</td>
                  <td class="text-end">{{$projectDetail->project_status}}</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
        <div class="card project-user">
          <div class="card-body">
            <h6 class="card-title m-b-20">Assigned Project Manager </h6>
            <ul class="list-box">

              <li>
                <a href="#">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></span>
                    </div>
                    <div class="list-body">
                      <?php
                      $manager = App\Models\User::find($projectDetail->project_manager);
                      ?>
                      <span class="message-author">{{$manager->name}}</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Project Manager</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card project-user">
          <div class="card-body">
            <h6 class="card-title m-b-20">
              Assigned users
            </h6>
            <ul class="list-box">
              @php
              $idArray = explode(",", $projectDetail->user_id);
              $nameArray = explode(",", $projectDetail->user_name);
              $emailArray = explode(",", $projectDetail->user_email);
              @endphp
              @foreach($idArray as $key=>$value)
              <li>
                <a href="profile.html">
                  <div class="list-item">
                    <div class="list-left">
                      <span class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></span>
                    </div>
                    <div class="list-body">
                      <span class="message-author">{{$nameArray[$key]}}</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Web Designer</span>
                    </div>
                  </div>
                </a>
              </li>
              @endforeach

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="assign_leader" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Assign Leader to this project</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="input-group m-b-30">
            <input placeholder="Search to add a leader" class="form-control search-input" type="text">
            <button class="btn btn-primary">Search</button>
          </div>
          <div>
            <ul class="chat-user-list">
              <li>
                <a href="#">
                  <div class="media d-flex">
                    <span class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">Richard Miles</div>
                      <span class="designation">Web Developer</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="media d-flex">
                    <span class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></span>
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">John Smith</div>
                      <span class="designation">Android Developer</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="media d-flex">
                    <span class="avatar">
                      <img alt="" src="assets/img/profiles/avatar-16.jpg">
                    </span>
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">Jeffery Lalor</div>
                      <span class="designation">Team Leader</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="submit-section">
            <button class="btn btn-primary submit-btn">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  @foreach($milestoneIdArray as $key=>$value)
  <div id="status_user_{{$value}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">

          <div>
            <ul class="chat-user-list milestone-status-list">
              <li data-status="TO DO">
                <a href="#">
                  <div class="media d-flex">
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">TO DO</div>
                    </div>
                  </div>
                </a>
              </li>

              <li data-status="IN PROGRESS">
                <a href="#">
                  <div class="media d-flex">
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">IN PROGRESS</div>
                    </div>
                  </div>
                </a>
              </li>

              <li data-status="DONE">
                <a href="#">
                  <div class="media d-flex">
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">DONE</div>
                    </div>
                  </div>
                </a>
              </li>
              <li data-status="COMPLETE">
                <a href="#">
                  <div class="media d-flex">
                    <div class="media-body align-self-center text-nowrap">
                      <div class="user-name">COMPLETE</div>
                    </div>
                  </div>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <form id="milestone-status-change" action="{{route('updateMilestoneStatus')}}" method="post">
    @csrf
    <input type="hidden" name="status" id="status_input">
    <input type="hidden" name="milestone_id" id="milestone_id_input">
    <!-- Your form fields here -->
  </form>


  <div id="edit_project" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create Milestone</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('createMilestone')}}" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{$projectDetail->id}}">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Milestone Name</label>
                  <input class="form-control" type="text" name="name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text" name="start_date">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>End Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text" name="end_date">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Budget</label>
                  <input class="form-control" type="text" name="budget">
                </div>
              </div>

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


            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @foreach($milestoneIdArray as $key=>$value)
  <div id="edit_milestone-{{$milestoneIdArray[$key]}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Milestone</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('updateMilestone')}}" method="POST">
            @csrf
            <input type="hidden" name="project_id" value="{{$projectDetail->id}}">
            <input type="hidden" name="milestone_id" value="{{$milestoneIdArray[$key]}}">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Milestone Name</label>
                  <input class="form-control" type="text" name="milestone_name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text" name="milestone_start_date">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>End Date</label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text" name="milestone_end_date">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Budget</label>
                  <input class="form-control" type="text" name="milestone_budget">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label>Priority</label>
                  <select class="select" name="milestone_priority">
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="select" name="milestone_status">
                    <option>Active</option>
                    <option>Inactive</option>
                  </select>
                </div>
              </div>

            </div>


            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>



<script>
  // Get all the list items
  var listItems = document.querySelectorAll('.milestone-status-list li');

  // Attach a click event listener to each list item
  listItems.forEach(function(item) {
    item.addEventListener('click', function() {
      // Get the status value and milestone id
      var status = item.dataset.status;
      var milestoneId = this.closest('.modal').id.split('_')[2];
      console.log(status, milestoneId);

      // Set the value of the hidden input fields
      document.getElementById('status_input').value = status;
      document.getElementById('milestone_id_input').value = milestoneId;

      // Submit the form
      document.getElementById('milestone-status-change').submit();
    });
  });
</script>



@endsection