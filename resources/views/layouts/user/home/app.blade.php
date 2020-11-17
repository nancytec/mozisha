
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{$data['description']}}" />
    <meta name="keywords" content="{{$data['keywords']}}" />
    <meta name="DC.title" content="{{$data['dc_title']}}" />
    <meta name="copyright" content="Copyright-Mozisha.net: {{date("Y", time())}}" />
    <meta name="robots" content="index,index" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="Mozisha international">
    <title>{{$data['title']}}</title>
    <link rel="icon" href="{{asset('user/home/assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/animate.css')}}">
    <link href="{{asset('user/home/assets/css/LineIcons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/lightcase.cs')}}s">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/font-awesome.css')}}" >
    <link rel="stylesheet" href="{{asset('user/home/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/iconmind/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/digital-agency.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('user/home/assets/css/custom.css')}}">
{{--    <link rel="stylesheet" href="{{asset('admin/css/toastr.css')}}">--}}
    <!--Laravel livewire styles  -->
    <livewire:styles />
</head>
<body id="top-page" class="search color1" style="font-size: 90%">
<!-- preloader-->
<div id="loading">
    <div id="loading-center" style="background-color: #420175;">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>

<!--search-body-->
<div class="search-area">
    <div class="close-search">
        <span></span>
        <span></span>
    </div>
    <form action="#" class="search-form">
        <input type="text" name="search" placeholder="Write & Press Enter">
        <button><i class="fa fa-search"></i></button>

    </form>
</div>

<!-- start header section -->
<header class="header style1 transparent-header">
    <!-- headertop -->
    <div class="header-top d-none d-lg-flex">
        <div class="headertop-left">
            <ul class="site-info m-0 p-0 list-unstyled">
                <li><a href="tel:4484 4873 7363"><i class="fa fa-mobile-phone"></i> +234 905 651 6559</a></li>
                <li><a href="mailto:info@mozisha.com" target="_top"><i class="fa fa-send-o"></i> info@mozisha.com</a></li>
            </ul>
        </div>

        <div class="headertop-right d-flex flex-wrap">
            <!-- signIn option -->
            @if(Auth::user())
                @if(Auth::user()->hasRole('mentor'))
                    <div class="signin-option">
                        <a href="{{route('mentor.dashboard')}}">Dashboard</a>
                        <span>/</span>
                        <a href="{{route('logout')}}">Sign out</a>
                    </div>
                @endif
                @if(Auth::user()->hasRole('mentee'))
                        <div class="signin-option">
                            <a href="{{route('mentee.dashboard')}}">Dashboard</a>
                            <span>/</span>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                @endif
                    @if(Auth::user()->hasRole('administrator'))
                        <div class="signin-option">
                            <a href="{{route('admin.home')}}">Admin</a>
                            <span>/</span>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                    @endif
                    @if(Auth::user()->hasRole('superadministrator'))
                        <div class="signin-option">
                            <a href="{{route('admin.home')}}">Admin</a>
                            <span>/</span>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                    @endif
                    @if(Auth::user()->hasRole('developer'))
                        <div class="signin-option">
                            <a href="{{route('admin.home')}}">Admin</a>
                            <span>/</span>
                            <a href="{{route('logout')}}">Sign out</a>
                        </div>
                    @endif

            @else
                <div class="signin-option">
                    <a href="{{route('user.login')}}">Log In</a>
                    <span>/</span>
                    <a href="{{route('user.account')}}">Sign Up</a>
                </div>
            @endif


            <!-- language option -->
            <div class="language-option dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Pidgin/a>
                        <a class="dropdown-item" href="#">Igbo</a>
                        <a class="dropdown-item" href="#">Yoruba</a>
                        <a class="dropdown-item" href="#">Hausa</a>
                </div>
            </div>

            <!-- search option -->
            <div class="search-option">
                <i class="fa fa-search"></i>
            </div>

            <!-- social-media -->
            <ul class="social-media-list d-flex m-0 p-0 list-unstyled">
                <li><a href="https://www.facebook.com/fluxthemeOfficial/"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/fluxtheme"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/flux-theme/"><i class="fa fa-linkedin-in"></i></a></li>
                <li><a href="https://www.instagram.com/FluxThemeOfficial/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo-v"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- main menu area -->
    <div class="main-menu-area mega-menu-header animated">
        <div class="row m-0 align-items-center">
            <div class="col-lg-2 p-0 d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a class="navbar-brand" href="{{'homepage'}}"><img class="lazy" src="{{asset('user/home/assets/images/logo-black.png')}}" alt="logo"></a>
                    <a class="navbar-brand navbar-brand2" href="{{route('homepage')}}"><img class="lazy" src="{{asset('user/home/assets/images/logo-white.png')}}" alt="logo"></a>
                </div>
                <div class="menu-bar d-lg-none" style="background-color: #420175 !important;">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-lg-10 d-none d-lg-block p-0 d-lg-flex align-items-center justify-content-end justify-content-xl-end">
                <div class="d-lg-flex flex-wrap justify-content-start">
                    <ul class="nav-menu d-lg-flex flex-wrap list-unstyled m-0 justify-content-center">

                        <li class="nav-item @if(Route::currentRouteName() == 'homepage') active @endif "><a href="{{route('homepage')}}">Home</a></li>


                        <li class="nav-item mega-menu"><a href="#">Apprenticeship<i class="fa fa-angle-down"></i></a>
                            <div class="mega-menu-fullwidth dark" style="background-color: #420175 !important;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">For Mentors/Businesses</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="{{route('mentor.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Creates a business account</a></li>
                                                <li><a href="{{route('mentor.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Update your business profile </a></li>
                                                <li><a href="{{route('mentor.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Post an apprenticeship program </a></li>
                                                <li><a href="{{route('mentor.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Get apprentices to grow your business</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">For Apprentices</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="{{route('mentee.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Creates an apprentice account</a></li>
                                                <li><a href="{{route('mentee.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Update your profile </a></li>
                                                <li><a href="{{route('mentee.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Match with a business</a></li>
                                                <li><a href="{{route('mentee.register')}}"><i class="fa fa-check-circle"></i> &nbsp; Apply your skill practically</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">Get started</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="{{route('user.login')}}">Log in</a></li>
                                                <li><a href="{{route('user.account')}}">Sign up</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item mega-menu"><a href="#">Mozilearn<i class="fa fa-angle-down"></i></a>
                            <div class="mega-menu-fullwidth dark" style="background-color: #420175 !important;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">For Instructors</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Create a tutor account</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Update your career profile</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Request for approval</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Upload courses</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Follow up students</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">For Learners</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Create a student account</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Browse through our courses</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Pick a suitable course</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Learn practically</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Follow up tutors</a></li>
                                            </ul>
                                        </div>



                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">Get started</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="{{route('coming_soon')}}">Login</a></li>
                                                <li><a href="{{route('coming_soon')}}">Sign up</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item mega-menu"><a href="#">Mozilance<i class="fa fa-angle-down"></i></a>
                            <div class="mega-menu-fullwidth dark" style="background-color: #420175 !important;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">How freelancing works</h3>
                                            <ul class="mega-menu-list">
                                                    <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Create a freelance account</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Update your career profile</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Upload your recent projects</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Provide a link to your portfolio</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Watch out for available hires.</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">How Hiring works</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Create a hirer account</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Update your profile</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Post available task</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Select a competent freelancer.</a></li>
                                                <li><a href="#"><i class="fa fa-check-circle"></i> &nbsp; Make job payments.</a></li>
                                            </ul>
                                        </div>



                                        <div class="col-lg-3">
                                            <h3 class="mega-menu-list-title">Get started</h3>
                                            <ul class="mega-menu-list">
                                                <li><a href="{{route('coming_soon')}}">Login</a></li>
                                                <li><a href="{{route('coming_soon')}}">Sign up</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item @if(Route::currentRouteName() == 'team') active @endif "><a href="{{route('team')}}">Team</a></li>
                        <li class="nav-item @if(Route::currentRouteName() == 'about') active @endif "><a href="{{route('about')}}">About</a></li>

                    </ul>
                </div>
                <div class="menu-action-area d-none d-xl-flex flex-wrap justify-content-end ml_lg--30">
                    <ul class="menu-action list-unstyled m-0 p-0 d-flex flex-wrap justify-content-end">
                        <li><a class="da-custom-btn btn-border-radius40" href="{{route('user.account')}}"><span>Get Started</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- mobile menu area-->
        <div class="mobile-menu-area d-lg-none" >
            <div class="m-menu-header" >
                    <span class="close-bar" style="background-color: #420175 !important;">
                        <span></span>
                        <span></span>
                    </span>
            </div>
            <div class="mobile-menu">
                <ul class="m-menu">
                    <li class="open @if(Route::currentRouteName() == 'homepage') m-active @endif "><a href="{{route('about')}}"><a href="{{route('homepage')}}">Home <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
                    </li>
                    <li><a>Apprenticeship <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="mobile-submenu">
                            <li><a href="{{route('user.login')}}">Login</a></li>
                            <li><a href="{{route('user.account')}}">Button</a></li>
                        </ul>
                    </li>
                    <li><a>Mozilearn <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="mobile-submenu">
                            <li><a href="{{route('coming_soon')}}">Explore</a></li>
                            <li><a href="{{route('coming_soon')}}">Login</a></li>
                            <li><a href="{{route('coming_soon')}}">Button</a></li>
                        </ul>
                    </li>
                    <li><a>Mozilance <span class="arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="mobile-submenu">
                            <li><a href="{{route('coming_soon')}}">Explore</a></li>
                            <li><a href="{{route('coming_soon')}}">Login</a></li>
                            <li><a href="{{route('coming_soon')}}">Button</a></li>
                        </ul>
                    </li>

                    <li class="nav-item @if(Route::currentRouteName() == 'about') m-active @endif "><a href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a href="{{route('team')}}">Team</a></li>
                   @if(Auth::user())
                        @if(Auth::user()->hasRole('mentor'))
                            <li class="nav-item"><a href="{{route('mentor.dashboard')}}">Dashboard</a></li>
                        @endif
                        @if(Auth::user()->hasRole('mentee'))
                            <li class="nav-item"><a href="{{route('mentee.dashboard')}}">Dashboard</a></li>
                        @endif
                   @else
                        <li class="nav-item"><a href="{{route('user.login')}}">Login</a></li>
                   @endif

                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header section -->



@yield('content')


<!--  footer section start  -->
<footer class="footer footer1">
    <div class="footertop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 p-0">
                    <div class="footer-widget">
                        <a href="#" class="footer-logo" style="color: orange;font-weight: bold;"><img class="lazy" style="max-width: 28%;" src="{{asset('user/home/assets/images/logo-black.png')}}" alt="logo" ></a>
                        <p class="address">
                            Lagos: D2, Road 3B, Diamond Estate, Lagos, Nigeria<br/>
                            Ondo: 156 Ondo-Ore Road, Beside Adesuper Bakery, Ondo City, Nigeria
                        </p>
                        <ul class="footer-site-info">
                            <li><a href="tel:1(800) 32134343">++234 905 651 6559 ,+234 803 442 5355
                                </a></li>
                            <li><a href="mailto:info@mozisha.com">info@mozisha.com
                                </a></li>
                        </ul>
                        <!-- <a href="#" class="googlemap">Google Map</a> -->
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 p-0">
                    <div class="footer-widget">
                        <h4 class="footer-title">Navigate</h4>
                        <ul class="footer-menu">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li><a href="{{route('team')}}">Team</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('user.login')}}">Login</a></li>
                            <!-- <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Element</a></li>
                            <li><a href="#">Features</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-3 p-0">
                    <div class="footer-widget">
                        <h4 class="footer-title">Insight</h4>
                        <ul class="linklist">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Work Proces</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Features</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-3 p-0">
                    <div class="footer-widget">
                        <h4 class="footer-title">Newsletter</h4>
                        <form action="#">
                            <input type="text" name="email" placeholder="Enter Your Email">
                            <button class="submit"><i class="fa- fa-email"></i></button>
                        </form>
                        <p>Subscribe to our mailing list to receive new updates and special offers and other information</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footerbottom">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <p class="m-0 copy-right">&copy; Copyright 2020 | <a href="index.html">Mozisha</a> Powered by <a href="https://fluxtheme.com/" target="_blank">Mozisha International</a> | All Rights Reserved</p>

                <!-- social-media -->
                <ul class="social-media-list d-flex flex-wrap m-0 p-0 list-unstyled">
                    <li><a href="https://www.facebook.com/fluxthemeOfficial/"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/fluxtheme"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/flux-theme/"><i class="fa fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.instagram.com/FluxThemeOfficial/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo-v"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--  footer section end  -->

<a href="#top-page"  class="to-top js-scroll-trigger" style="background-color: #420175 !important;"><i class="fa fa-arrow-up"></i></a>


<script src='{{asset('user/home/assets/js/jquery.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/bootstrap.bundle.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/swiper.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/waypoints.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/counterup.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/isotope.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/lightcase.js')}}'></script>
<script src='{{asset('user/home/assets/js/wow.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/jquery-easeing.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/jquery.countdown.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/scroll-nav.js')}}'></script>
<script src='{{asset('user/home/assets/js/simpleParallax.js')}}'></script>
<script src='{{asset('user/home/assets/js/flip.min.js')}}'></script>
<script src='{{asset('user/home/assets/js/functions.js')}}'></script>
<script src='{{asset('user/home/assets/js/webfont.js')}}'></script>
<livewire:scripts />
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script  src="{{asset('admin/js/toastr.js')}}"></script>
<script>
    window.livewire.on('alert', param => {
        toastr[param['type']](param['message'], param['type']);
    });
</script>
</body>
</html>
