<div>
    <style>
        .text-xs{
            color: red;
        }
    </style>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Apprenticeship</li>
                        </ol>
                    </nav>

                    <h2 class="breadcrumb-title"> Apprenticeship Dashboard</h2>

                </div>
                <div class="col-md-4 col-12 d-md-block d-none">
                    <div class="sort-by">

                        <i  wire:loading wire:target="status" class="fa fa-spinner fa-spin" style="font-size: 130%;"></i>
                        <span wire:loading.remove wire:target="status" class="sort-title">{{$user->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Sidebar -->
                    <div class="profile-sidebar">
                        <div class="user-widget">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <div class="change-avatar" style=" width: 40%; margin: auto;  text-align: center;">

                                        <div class="profile-img">
                                            <img src="{{$user->ImagePath}}" style="border-radius: 50px;" alt="User Image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="user-info-cont">
                                <h4 class="usr-name">{{$user->name}}</h4>
                                <p class="mentor-type">{{$user->email}}</p>
                            </div>
                        </div>

                        <div>
                            <div class="progress-bar-custom">


                                <h6>Apprenticeship progress.</h6>

                                <div class="pro-progress">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 80%; background-color: #420175 !important;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="tooltip" style="background-color: #420175;">58%</div>
                                </div>
                            </div>

                            <div class="custom-sidebar-nav">
                                <ul>
                                    <li wire:click="showDashboard()"><a href="#"><i class="fas fa-home"></i>Dashboard <span><i wire:loading.remove wire:target="showDashboard" class="fas fa-chevron-right"></i> <i wire:loading wire:target="showDashboard" class="fa fa-spinner fa-spin"></i></span></a></li>
                                    <li><a class="edit-link" data-toggle="modal" href="#mentee_new_meeting"><i class="fas fa-clock"></i>Book Meeting <span><i class="fas fa-chevron-right"></i></span></a></li>
                                    <li wire:click="showSetGoal()"><a href="#" class="edit-link" href="#" ><i class="fas fa-clock"></i>Goal <span><i wire:loading.remove wire:target="showSetGoal" class="fas fa-chevron-right"></i> <i wire:loading wire:target="showSetGoal" class="fa fa-spinner fa-spin"></i></span></a></li>
                                    <li wire:click="showAllTask()"><a href="#"><i class="fas fa-hourglass-end"></i>My tasks <span><i wire:loading.remove wire:target="showAllTask" class="fas fa-chevron-right"></i> <i wire:loading wire:target="showAllTask" class="fa fa-spinner fa-spin"></i></span><span><i class="fas fa-chevron-right"></i></span></a></li>
                                    <li><a href="{{route('mentee.profile')}}"><i class="fas fa-user-cog"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
                                    <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Sidebar -->

                </div>

            @if($showDashboard)
                <!---The top three boxed segment--->
                <div class="col-md-7 col-lg-8 col-xl-9">

                        <div class="row">
                            <div class="col-md-12 col-lg-4 dash-board-list blue">
                                <div class="dash-widget">
                                    <div class="circle-bar">
                                        <div class="icon-col">
                                            <i wire:loading wire:target="showAppointments" class="fa fa-spinner fa-spin"></i>
                                            <i class="fas fa-users" wire:loading.remove wire:target="showAppointments" ></i>
                                        </div>
                                    </div>
                                    <div class="dash-widget-info" wire:click="showAppointments()" style="cursor:pointer;">
                                        <h3>{{$appointmentNo}}</h3>
                                        <h6>Appointments</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 dash-board-list yellow">
                                <div class="dash-widget">
                                    <div class="circle-bar">
                                        <div class="icon-col">
                                            <i wire:loading wire:target="showAllTask" class="fa fa-spinner fa-spin"></i>
                                            <i wire:loading.remove wire:target="showAllTask" wire:target="status" class="fas fa-edit"></i>
                                        </div>
                                    </div>
                                    <div class="dash-widget-info"  wire:click="showAllTask()" style="cursor:pointer;" >
                                        <h3>{{$taskNo}}</h3>
                                        <h6> Tasks</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 dash-board-list pink">
                                <div class="dash-widget">
                                    <div class="circle-bar">
                                        <div class="icon-col">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                    </div>
                                    <div style="cursor:pointer;"  class="dash-widget-info">
                                        <h3>{{$responseNo}}</h3>
                                        <h6>Responses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

            @endif
            <!---The Set Goal segment--->
                @if($showSetGoal)
                    @livewire('mentee-app-goal', ['conn' => $conn])
                @endif

                @if($showAllTask)
                    @livewire('mentee-app-tasks', ['conn' => $conn])
                @endif

                @if($showViewTask)
                    @livewire('mentor-app-all-task', ['conn' => $conn, 'task_id' => $task_id])
                @endif

                @if($showAppointments)
                    @livewire('mentee-appointments', ['conn' => $conn])
                @endif
            </div>

            <div class="row">






            </div>

        </div>

    </div>
    <!-- /Page Content -->
</div>
