<div>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
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

                                        <div class="profile-img" style=" margin: auto;">
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
                        @livewire('mentee-sidebar', ['user' => $user])
                    </div>
                    <!-- /Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12 col-lg-4 dash-board-list blue">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>{{$appointmentNo}}</h3>
                                    <h6>Appointments</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list yellow">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i wire:loading wire:target="showMentors" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading.remove wire:target="showMentors" class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info"  wire:click="showMentors" style="cursor:pointer;" >
                                    <h3>{{$mentorNo}}</h3>
                                    <h6>Active Mentors</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i wire:loading wire:target="showRequests" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading.remove wire:target="showRequests" class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                                <div style="cursor:pointer;" wire:click="showRequests" class="dash-widget-info">
                                    <h3>{{$requestNo}}</h3>
                                    <h6>Request</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($showMentors)
                    @livewire('all-mentors')
                    @endif
                    @if($showRequests)
                    @livewire('all-requests')
                    @endif
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
</div>
