<div>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Search</li>
                        </ol>
                    </nav>

                        <h2 class="breadcrumb-title"> Mentors Dashboard</h2>

                </div>
                <div class="col-md-4 col-12 d-md-block d-none">
                    <div class="sort-by">

                        <i  wire:loading wire:target="status" class="fa fa-spinner fa-spin" style="font-size: 130%;"></i>
                        <span wire:loading.remove wire:target="status" class="sort-title">Sort by</span>
                        <span class="sortby-fliter">
									<select wire:model="status" class="select form-control">
										<option class="sorting">Select</option>
										<option class="sorting" value="Active">Active</option>
										<option class="sorting" value="Suspended">Suspended</option>
										<option class="sorting" value="Terminated">Terminated</option>
                                        <option class="sorting" value="Completed">Completed</option>
									</select>
								</span>
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

                        @livewire('mentor-sidebar', ['user' => $user])
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
                                        <i wire:loading wire:target="showApps" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading.remove wire:target="showApps" wire:target="status" class="fas fa-edit"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info"  wire:click="showApps" style="cursor:pointer;" >
                                    <h3>{{$menteeNo}}</h3>
                                    <h6>My Apprentices</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i wire:loading wire:target="showRequests" class="fa fa-spinner fa-spin"></i>
                                        <i wire:loading.remove wire:target="showRequests" class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div style="cursor:pointer;" wire:click="showRequests" class="dash-widget-info">
                                    <h3>{{$requestNo}}</h3>
                                    <h6>Request</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($showApps)
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mb-4">Apprentices List</h4>

                                    <div class="card card-table">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                @if($connects)
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>BASIC INFO</th>
                                                            <th>ACCEPTED DATE</th>
                                                            <th class="text-center">STATUS</th>
                                                            <th class="text-center">ACTION</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>


                                                        <!-- class could be pending, accept, reject -->
                                                        <!--Checking for records before fetching-->

                                                        @foreach($connects as $connect)
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{'/mentor/'.$connect->id.'/app'}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{$connect->mentee->ImagePath}}" alt="User Image"></a>
                                                                        <a href="{{'/mentor/'.$connect->id.'/app'}}">{{$connect->mentee->name}} <span>{{$connect->mentee->email}}</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>{{$connect->created_at->format('d M Y')}}</td>


                                                                @if($connect->status == "Suspended")
                                                                    <td class="text-center"><span class="pending">SUSPENDED</span></td>
                                                                @endif

                                                                @if($connect->status == "Active")
                                                                    <td class="text-center"><span class="accept">ACTIVE</span></td>
                                                                @endif

                                                                @if($connect->status == "Completed")
                                                                    <td class="text-center"><span class="accept">COMPLETED</span></td>
                                                                @endif

                                                                @if($connect->status == "Terminated")
                                                                    <td class="text-center"><span class="reject">TERMINATED</span></td>
                                                                @endif

                                                                <td class="text-center"><a href="{{'/mentor/'.$connect->id.'/app'}}" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Platform</a></td>
                                                            </tr>
                                                        @endforeach


                                                        </tbody>
                                                    </table>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                    @if($showRequests)
                        <div>




                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mb-4">Apprenticeship Requests</h4>

                                    <div class="card card-table">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                @if($requests)
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>BASIC INFO</th>
                                                            <th>CREATED DATE</th>
                                                            <th class="text-center">STATUS</th>
                                                            <th class="text-center">ACTION</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>


                                                        <!-- class could be pending, accept, reject -->
                                                        <!--Checking for records before fetching-->

                                                        @foreach($requests as $request)
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="{{'/mentor/'.$request->mentee_id.'/mentee'}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{$request->creator->ImagePath}}" alt="User Image"></a>
                                                                        <a href="{{'/mentor/'.$request->mentee_id.'/mentee'}}">{{$request->creator->name}} <span>{{$request->creator->email}}</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>{{$request->created_at->format('d M Y')}}</td>


                                                                @if($request->status == "Pending")
                                                                    <td class="text-center"><span class="pending">PENDING</span></td>
                                                                @endif

                                                                @if($request->status == "Accepted")
                                                                    <td class="text-center"><span class="accept">ACCEPTED</span></td>
                                                                @endif

                                                                @if($request->status == "Rejected")
                                                                    <td class="text-center"><span class="reject">DECLINED</span></td>
                                                                @endif


                                                                <td class="text-center"><a href="{{'/mentor/'.$request->mentee_id.'/'.$request->id.'/mentee'}}" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> View</a></td>
                                                            </tr>
                                                        @endforeach




                                                        </tbody>
                                                    </table>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    @endif
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
</div>
