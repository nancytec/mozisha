<div>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!--Admin header-->
        <livewire:admin-header />
        <!-- /Admin header-->

        <!-- Admin siebar-->
        <x-admin_sidebar />
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">{{$event->theme}}</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Subscribers</li>

                            </ul>
                            <x-alert />
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->



                <div class="row">
                    <div class="col-md-12">

                        <!-- Recent Orders -->
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Booking List: Total {{$count}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if($subs)
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Booking Time</th>
                                                <th>Event_ID</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($subs as $sub)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="/subscriber/{{$sub->id}}/profile" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{$sub->ImagePath}}" alt="User Image"></a>
                                                            <a href="/subscriber/{{$sub->id}}/profile">{{$sub->name}}</a>
                                                        </h2>
                                                    </td>
                                                    <td>{{$sub->phone}}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="mailto:{{$sub->email}}" target="_blank" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{$sub->ImagePath}}" alt="User Image"></a>
                                                            <a href="mailto:{{$sub->email}}" target="_blank">{{$sub->email}} </a>
                                                        </h2>
                                                    </td>
                                                    <td>{{$sub->created_at->format('d-M-Y')}} <span class="text-primary d-block">{{$sub->created_at->format('h:iA')}}</span></td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="/event/{{$sub->event_id}}" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{$sub->ImagePath}}" alt="User Image"></a>
                                                            <a href="/event/{{$sub->event_id}}">{{$sub->event_id}} </a>
                                                        </h2>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            {{ $subs->links('components.admin.pagination-links') /* For pagination links */}}
                                            <!-- Pagination -->
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->

                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
</div>

