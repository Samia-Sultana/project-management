@extends('master')
@section('milestoneDetail')

<?php

use App\Models\User;

?>


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

        <li class="submenu">
          <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
          <ul style="display: none;">
            <li><a href="{{route('project')}}">Projects</a></li>
            <li><a href="{{route('milestone')}}">Tasks</a></li>
            <li><a href="task-board.html">Task Board</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</div>

<div class="page-wrapper">

  <div class="content container">

    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="page-title">{{$milestoneDetail[0]->milestone_name}}</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Task Board</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row board-view-header">

      <div class="col-12 text-end">
        <a href="#" class="btn btn-white float-end ms-2" data-bs-toggle="modal" data-bs-target="#add_task_board"><i class="fa fa-plus"></i> Create Task</a>
      </div>

    </div>



   

    @foreach($milestoneDetail as $task)

    <?php
    $users = User::all()->toArray();
    $members = explode(",", $task->user_id);

    ?>
   

    <div class="kanban-board card mb-0 ">

      <div class="card-body">
        <div class="kanban-cont">

          <div class="kanban-list kanban-list1 kanban-danger">

            <div class="kanban-wrap">
              <div class="card panel">
                <div class="kanban-box">
                  <div class="task-board-header">
                    <div class="avatar">
                      <a href="" class="rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#status_user-{{$task->task_id}}"><i class="fas fa-square"></i></a>
                    </div>
                    <span class="status-title"><a href="task-view.html">{{$task->task_name}}</a></span>
                    <div class="dropdown kanban-task-action">
                      <a href="" data-bs-toggle="dropdown">
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_modal_{{$task->task_id}}">Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project_{{$task->task_id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                      </div>
                    </div>
                  </div>
                  <div class="task-board-body">
                    <div class="kanban-info">
                    </div>
                    <div class="kanban-footer">
                      <span class="task-info-cont">
                        <span class="task-date"><i class="fa fa-clock-o"></i> {{$task->task_end_date}}</span>
                        <span class="task-priority badge bg-inverse-danger">{{$task->task_priority}}</span>
                      </span>
                      <span class="task-users">
                        <div class="avatar-group">


                        @foreach($members as $key=>$member)
                          <?php
                          $teamMember = App\Models\User::find($member);

                          ?>

                          <div class="avatar">

@if($teamMember)
<img class="avatar-img rounded-circle border border-white" alt="{{$teamMember->name}}" src="{{asset('assets/img/profiles/avatar-02.jpg')}}">

@endif
                          </div>
                          @endforeach

                          <div class="avatar">
                            <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal" data-bs-target="#assign_user-{{$task->task_id}}"><i class="fa fa-plus"></i></a>
                          </div>
                        </div>

                      </span>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>




        </div>
      </div>


    </div>

    @endforeach



  </div>


  <div id="add_task_board" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Task Board</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{route('createTask')}}" method="POST">
            @csrf

            <input type="hidden" name="milestone_id" value="{{$milestoneDetail[0]->id}}">
            <div class="form-group">
              <label>Task Name</label>
              <input type="text" class="form-control" name="task_name">
            </div>


            <div class="form-group">
              <label>Start Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text" name="start_date">
              </div>
            </div>

            <div class="form-group">
              <label>End Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text" name="end_date">
              </div>
            </div>



            <div class="form-group">
              <label>Status</label>
              <select class="select" name="status">
                <option value="Review">REVIEW</option>
                <option value="In progress">IN PROGRESS</option>
                <option value="Complete">COMPLETE</option>
              </select>
            </div>

            <div class="form-group">
              <label>Priority</label>
              <select class="select" name="priority">
                <option value="High">High</option>
                <option value="Medium">Medium</option>
                <option value="Low">Low</option>
              </select>
            </div>


            <div class="m-t-20 text-center">
              <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="edit_task_board" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Task Board</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Task Board Name</label>
              <input type="text" class="form-control" value="Pending">
            </div>
            <div class="form-group task-board-color">
              <label>Task Board Color</label>
              <div class="board-color-list">
                <label class="board-control board-primary">
                  <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-success">
                  <input name="radio" type="radio" class="board-control-input" value="success">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-info">
                  <input name="radio" type="radio" class="board-control-input" value="info">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-purple">
                  <input name="radio" type="radio" class="board-control-input" value="purple">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-warning">
                  <input name="radio" type="radio" class="board-control-input" value="warning">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-danger">
                  <input name="radio" type="radio" class="board-control-input" value="danger">
                  <span class="board-indicator"></span>
                </label>
              </div>
            </div>
            <div class="m-t-20 text-center">
              <button class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="edit_task_board" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Task Board</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Task Board Name</label>
              <input type="text" class="form-control" value="Pending">
            </div>
            <div class="form-group task-board-color">
              <label>Task Board Color</label>
              <div class="board-color-list">
                <label class="board-control board-primary">
                  <input name="radio" type="radio" class="board-control-input" value="primary" checked="">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-success">
                  <input name="radio" type="radio" class="board-control-input" value="success">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-info">
                  <input name="radio" type="radio" class="board-control-input" value="info">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-purple">
                  <input name="radio" type="radio" class="board-control-input" value="purple">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-warning">
                  <input name="radio" type="radio" class="board-control-input" value="warning">
                  <span class="board-indicator"></span>
                </label>
                <label class="board-control board-danger">
                  <input name="radio" type="radio" class="board-control-input" value="danger">
                  <span class="board-indicator"></span>
                </label>
              </div>
            </div>
            <div class="m-t-20 text-center">
              <button class="btn btn-primary btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @foreach($milestoneDetail as $task)
  <div id="status_user-{{$task->task_id}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Assign the user to this project</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div>
            <form action="{{route('updateTaskStatus')}}" method="POST">
              @csrf
              <input type="hidden" name="task_id" value="{{$task->task_id}}">
              <input type="hidden" name="milestone_id" value="{{$task->id}}">

              <select class="select" name="status">
                <option value="{{$task->task_status}}">{{$task->task_status}}</option>

                <option value="To do">To do</option>
                <option value="In progress">IN PROGRESS</option>
                <option value="Done">Done</option>
                <option value="Complete">COMPLETE</option>
              </select>
              <div class="submit-section">
                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @foreach($milestoneDetail as $task)
  <div id="assign_user-{{$task->task_id}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Assign the user to this project</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          @php
          $users = App\Models\User::all();
          $taskEmployeeId = explode(',' , $task->user_id);
          $taskEmployeeName = explode(',', $task->user_name);
          @endphp
          <form action="{{route('assignEmployee')}}" method="POST">
            @csrf
            <input type="hidden" name="milestone_id" value="{{$task->id}}">
            <input type="hidden" name="task_id" value="{{$task->task_id}}">
            <select multiple name="user_id[]" class="select">
              @foreach($users as $user)
              <option value="{{$user->id}}" {{ in_array($user->id, $taskEmployeeId) ? 'selected' : '' }}>{{$user->name}}</option>
              @endforeach
            </select>

            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  @endforeach

  <div id="add_task_modal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Task</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label>Task Name</label>
              <input type="text" class="form-control">
            </div>


            <div class="form-group">
              <label>Start Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text">
              </div>
            </div>

            <div class="form-group">
              <label>End Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text">
              </div>
            </div>



            <div class="form-group">
              <label>Status</label>
              <select class="select">
                <option>REVIEW</option>
                <option>IN PROGRESS</option>
                <option>COMPLETE</option>
              </select>
            </div>

            <div class="form-group">
              <label>Priority</label>
              <select class="select">
                <option>High</option>
                <option>Medium</option>
                <option>Low</option>
              </select>
            </div>
            <div class="submit-section text-center">
              <button class="btn btn-primary submit-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@foreach($milestoneDetail as $task)
  <div id="edit_task_modal_{{$task->task_id}}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Task</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{route('updateTask')}}" method="POST">
            @csrf
            <input type="hidden" name="milestone_id" value="{{$task->id}}">

            <input type="hidden" name="task_id" value="{{$task->task_id}}">
            <div class="form-group">
              <label>Task Name</label>
              <input type="text" class="form-control" name="task_name" value="{{$task->task_name}}">
            </div>


            <div class="form-group">
              <label>Start Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text" name="task_start_date"  value="{{$task->task_start_date}}">
              </div>
            </div>

            <div class="form-group">
              <label>End Date</label>
              <div class="cal-icon">
                <input class="form-control datetimepicker" type="text" name="task_end_date"  value="{{$task->task_end_date}}">
              </div>
            </div>



            <div class="form-group">
              <label>Status</label>
              <select class="select" name="task_status" >
                <option value="{{$task->task_status}}">{{$task->task_status}}</option>
                <option value="REVIEW">REVIEW</option>
                <option value="IN PROGRESS">IN PROGRESS</option>
                <option value="COMPLETE">COMPLETE</option>
              </select>
            </div>

            <div class="form-group">
              <label>Priority</label>
              <select class="select" name="task_priority" >
              <option value="{{$task->task_priority}}">{{$task->task_priority}}</option>

                <option value="High">High</option>
                <option value="Medium">Medium</option>
                <option value="Low">Low</option>
              </select>
            </div>
            <div class="submit-section text-center">
              <button class="btn btn-primary submit-btn" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
<div class="modal custom-modal fade" id="delete_project_{{$task->task_id}}" role="dialog">
    <form action="{{route('deleteTask')}}" method="POST" id="delete_project_form_{{$task->task_id}}">
        @csrf
        <input type="hidden" name="task_id" value="{{$task->task_id}}">
        <input type="hidden" name="milestone_id" value="{{$task->id}}">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Task</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-primary continue-btn" href="#" onclick="document.getElementById('delete_project_form_{{$task->task_id}}').submit(); return false;">
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




@endsection