<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Dunia Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/admin/images/favicon.png')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/admin/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/mmenu.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
    <script src="{{asset('public/admin/scripts/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('public/admin/scripts/jquery_custom.js')}}"></script>
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="utf-preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper -->
    <div id="main_wrapper">
        <header id="header_part" class="fixed fullwidth_block dashboard">
            <div id="header" class="not-sticky">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo"> <a href="{{ url('/admin') }}"><img
                                    src="{{asset('public/admin/images/logo.png')}}" alt=""></a> <a
                                href="{{ url('/admin') }}" class="dashboard-logo"><img
                                    src="{{asset('public/admin/images/logo2.png')}}" alt=""></a>
                        </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
                                <span class="utf_inner_button_box">
                                    <span class="utf_inner_section"></span>
                                </span>
                            </button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side">
                        <div class="header_widget">
                            <div class="dashboard_header_button_item has-noti js-item-menu">
                                <i class="sl sl-icon-bell"></i>
                                <div class="dashboard_notifi_dropdown js-dropdown">
                                    <div class="dashboard_notifi_title">
                                        <p>You Have 2 Notifications</p>
                                    </div>
                                    <div class="dashboard_notifi_item">
                                        <div class="bg-c1 red">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="content">
                                            <p>Your Listing <b>Burger House (MG Road)</b> Has Been Approved!</p>
                                            <span class="date">2 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="dashboard_notifi_item">
                                        <div class="bg-c1 green">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <p>You Have 7 Unread Messages</p>
                                            <span class="date">5 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="dashboard_notify_bottom text-center pad-tb-20">
                                        <a href="#">View All Notification</a>
                                    </div>
                                </div>
                            </div>
                            <div class="utf_user_menu">
                                <div class="utf_user_name"><span><img
                                            src="{{asset('public/admin/images/dashboard-avatar.jpg')}}"
                                            alt=""></span>Hi, John!</div>
                                <ul>
                                    <li><a href="{{ url('/admin') }}"><i class="sl sl-icon-layers"></i> Dashboard</a>
                                    </li>
                                    <li><a href="{{ url('/admin/my-profile') }}"><i class="sl sl-icon-user"></i> My
                                            Profile</a></li>
                                    <li><a href="{{ url('/admin/my-listing') }}"><i class="sl sl-icon-list"></i> My
                                            Listing</a></li>
                                    <li><a href="{{ url('/admin/messages') }}"><i class="sl sl-icon-envelope-open"></i>
                                            Messages</a></li>
                                    
                                    <li><a href="{{ url('/admin') }}"><i class="sl sl-icon-power"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>

        <!-- Dashboard -->
        <div id="dashboard">
            <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
            <div class="utf_dashboard_navigation js-scrollbar">
                <div class="utf_dashboard_navigation_inner_block">
                    <ul>
                        <li class="active"><a href="{{ url('/admin') }}"><i class="sl sl-icon-layers"></i> Dashboard</a>
                        </li>
                        <li><a href="{{ url('/admin/add-listing') }}"><i class="sl sl-icon-plus"></i> Add Listing</a>
                        </li>
                        <li>
                            <a href="#"><i class="sl sl-icon-layers"></i> My Listings</a>
                            <ul>
                                <li><a href="{{ url('/admin/my-listing') }}">Active <span
                                            class="nav-tag green">10</span></a>
                                </li>
                                <li><a href="{{ url('/admin/my-listing') }}">Pending <span
                                            class="nav-tag yellow">4</span></a></li>
                                <li><a href="{{ url('/admin/my-listing') }}">Expired <span
                                            class="nav-tag red">8</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/admin/messages') }}"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                        <li>
                            <a href="#"><i class="sl sl-icon-star"></i> Reviews</a>
                            <ul>
                                <li><a href="{{ url('/admin/visitor-review') }}">Visitor Reviews <span
                                            class="nav-tag green">4</span></a></li>
                                <li><a href="{{ url('/admin/submitted-review') }}">Submitted Reviews <span
                                            class="nav-tag yellow">5</span></a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/admin/my-profile') }}"><i class="sl sl-icon-user"></i> My Profile</a></li>
                        <li><a href="{{ url('/admin/change-password') }}"><i class="sl sl-icon-key"></i> Change Password</a>
                        </li>
                        <li><a href="{{ url('/admin') }}"><i class="sl sl-icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>

            <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                <div class="small_dialog_header">
                    <h3>Sign In</h3>
                </div>
                <div class="utf_signin_form style_one">
                    <ul class="utf_tabs_nav">
                        <li class=""><a href="#tab1">Log In</a></li>
                        <li><a href="#tab2">Register</a></li>
                    </ul>
                    <div class="tab_container alt">
                        <div class="tab_content" id="tab1" style="display:none;">
                            <form method="post" class="login">
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username">
                                        <input type="text" class="input-text" name="username" id="username" value=""
                                            placeholder="Username" />
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password">
                                        <input class="input-text" type="password" name="password" id="password"
                                            placeholder="Password" />
                                    </label>
                                </p>
                                <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span
                                        class="lost_password fl_left"> <a href="javascript:void(0);">Forgot
                                            Password?</a> </span>
                                    <div class="checkboxes fl_right">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                <div class="utf_row_form">
                                    <input type="submit" class="button border margin-top-5" name="login"
                                        value="Login" />
                                </div>
                                <div class="utf-login_with my-3">
                                    <span class="txt">Or Login in With</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <a href="javascript:void(0);" class="social_bt facebook_btn mb-0"><i
                                                class="fa fa-facebook"></i> Facebook</a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <a href="javascript:void(0);" class="social_bt google_btn mb-0"><i
                                                class="fa fa-google"></i> Google</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab_content" id="tab2" style="display:none;">
                            <form method="post" class="register">
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="username2">
                                        <input type="text" class="input-text" name="username" id="username2" value=""
                                            placeholder="Username" />
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="email2">
                                        <input type="text" class="input-text" name="email" id="email2" value=""
                                            placeholder="Email" />
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password1">
                                        <input class="input-text" type="password" name="password1" id="password1"
                                            placeholder="Password" />
                                    </label>
                                </p>
                                <p class="utf_row_form utf_form_wide_block">
                                    <label for="password2">
                                        <input class="input-text" type="password" name="password2" id="password2"
                                            placeholder="Confirm Password" />
                                    </label>
                                </p>
                                <input type="submit" class="button border fw margin-top-10" name="register"
                                    value="Register" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>