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
                    @if($apps_no < 2)
                        <h2 class="breadcrumb-title">{{$apps_no}} match found for : Mentors In  Nigeria</h2>
                    @else
                        <h2 class="breadcrumb-title">{{$apps_no}} matches found for : Mentors In  Nigeria</h2>
                    @endif

                </div>
                <div class="col-md-4 col-12 d-md-block d-none">
                    <div class="sort-by">
                        <span class="sort-title">Sort by</span>
                        <span class="sortby-fliter">
									<select class="select">
										<option>Select</option>
										<option class="sorting">Rating</option>
										<option class="sorting">Popular</option>
										<option class="sorting">Latest</option>
										<option class="sorting">Free</option>
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
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Gender</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type" checked>
                                        <span class="checkmark"></span> Male
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Female
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Select Courses</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Digital Marketer

                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> UNIX, Calculus, Trigonometry
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Computer Programming
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> ASP.NET,Computer Gaming
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> HTML, Css
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> VB, VB.net
                                    </label>
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" style="background-color: #420175; border-color: #420175;" class="btn btn-block">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->

                </div>

                <div class="col-md-12 col-lg-8 col-xl-9">

                    @if($apps)
                        @foreach($apps as $app)
                        <!-- Mentor Widget -->
                        <div class="card">
                            <div class="card-body">
                                <div class="mentor-widget">
                                    <div class="user-info-left">
                                        <div class="mentor-img">
                                            <a href="profile.html">
                                                <img src="{{$app->creator->ImagePath}}" style="width: 100%; height: 100%;" class="img-fluid" alt="User Image">
                                            </a>
                                        </div>
                                        <div class="user-info-cont">
                                            <h4 class="usr-name"><a href="profile.html">{{$app->creator->name}}</a></h4>
                                            <p class="mentor-type">{{$app->title}}</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"></span>
                                            </div>
                                            <div class="mentor-details">
                                                <p class="user-location"><i class="fas fa-clock"></i> {{$app->created_at->diffForHumans()}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info-right">
                                        <div class="user-infos">
                                            <ul>
                                                <li><i class="fas fa-map-marker-alt"></i> {{$app->company}}</li>
                                                <li><i class="fas fa-edit"></i> Mentorship, {{$app->mentor_period}}hrs/wk</li>
                                                <li><i class="far fa-hourglass"></i> {{$app->start_month.',  '. $app->start_year}} - {{$app->end_month.',  '. $app->end_year}} <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i> </li>
                                            </ul>
                                        </div>
                                        <div class="mentor-booking"  >
                                            <a  href="/apprenticeship/{{$app->id}}/view" class="apt-btn" style="border-color: #420175; background-color: #420175;" href="booking.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentor Widget -->
                        @endforeach
                            {{ $apps->links('components.user.pagination-links') /* For pagination links */}}
                    @endif

{{--                    <div class="load-more text-center">--}}
{{--                        <a class="btn btn-primary btn-sm" style="border-color: #420175; background-color: #420175;" href="javascript:void(0);">Load More</a>--}}
{{--                    </div>--}}
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
</div>
