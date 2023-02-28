<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Dunia</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/web/images/favicon.png')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/web/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('public/web/css/mmenu.css')}}">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
    <script src="{{asset('public/web/scripts/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('public/web/scripts/jquery_custom.js')}}"></script>
    <script src="{{asset('public/web/scripts/color_switcher.js')}}"></script>
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
        <header id="header_part" class="fullwidth">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo"> <a href="{{ url('/') }}"><img src="{{asset('public/web/images/logo.png')}}"
                                    alt=""></a> </div>
                        <div class="mmenu-trigger">
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="utf_right_side">
                        <div class="header_widget"> <a href="#dialog_signin_part"
                                class="button border sign-in popup-with-zoom-anim"><i class="fa fa-sign-in"></i> Sign
                                In</a> <a href="dashboard_add_listing.html" class="button border with-icon"><i
                                    class="sl sl-icon-user"></i> Add Listing</a></div>
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
                                                <input type="text" class="input-text" name="username" id="username"
                                                    value="" placeholder="Username" />
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
                                                <input type="text" class="input-text" name="username" id="username2"
                                                    value="" placeholder="Username" />
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
                                                <input class="input-text" type="password" name="password1"
                                                    id="password1" placeholder="Password" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="password2">
                                                <input class="input-text" type="password" name="password2"
                                                    id="password2" placeholder="Confirm Password" />
                                            </label>
                                        </p>
                                        <input type="submit" class="button border fw margin-top-10" name="register"
                                            value="Register" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>