<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>应用程序名称 - @yield('title')</title>
    <script src="{{ URL::to('/js/jquery-3.1.1.js')}}"></script>
    <script src="{{ URL::to('/js/jquery.countdown.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('/js/jquery.slides.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('/js/jquery.validate.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ URL::to('/js/jquery-dateFormat.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/js/prettydate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/js/jquery.bxslider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/js/html5lightbox.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/movies-5178d9b695.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/jquery.bxslider.css') }}">
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    @yield('head')
</head>

<body class="buyticket-page">
  

    <div class="main-body-wrapper ">
        <header style="display: block;">
            <nav id="navbar" class="navbar ">
                <div class="select-overlay"></div>
                <div class="primary desktop-nav">
                    <div>
                        <div id="nav-highlighter"></div>
                        <div class="home-link">
                            <a href="https://in.bookmyshow.com/"><span class="home-icon" ></span></a>
                        </div>
                        <ul class="__left">
                            <li class="dd-wrapper">
                                <a class="dd-trigger nav-link current-page" href="/movie/now-showing">MOVIES</a>
                            </li>
                        </ul>
                        
                          <ul class="__right">
                          @if (Auth::guard('member')->guest())
                            <li class="login">
                                <a style="display: block;" class="signin" id="preSignIn" href="javascript:;">SIGN IN</a>
                                <a id="postSignIn" href="javascript:;" style="display: none;" class="user-img"><img id="loggedInImg" alt="User image"></a>
                                <div class="signed-in nav-tip">
                                    <div class="head" id="signInUName">
                                        <div>
                                            <span>Welcome back</span>
                                            <br>
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li class="wallet-header">
                                                <a href="https://in.bookmyshow.com/myprofile/mywallet/" class="wallet-link">
                                                    <span class="icon">

                                    </span>
                                                    <span class="__wallet-text">MyWallet</span>
                                                </a>
                                                <span class="__wallet-balance" style="display: none;"></span>
                                                <div class="__wallet-reel">
                                                    <div class="mini"></div>
                                                </div>
                                                <span class="__wallet-header-btn" style="display: none;">
                              <a href="https://in.bookmyshow.com/myprofile/mywallet/" class="btn _cuatro" data-wallet-text="ADD CASH" data-wallet-activate="ACTIVATE NOW">
                              </a>
                            </span>
                                            </li>
                                            <li>
                                                <a href="https://in.bookmyshow.com/myprofile/year-at-2016">
                                                    <span class="icon">

                                      </span> 2016 in review
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://in.bookmyshow.com/myprofile/booking-history">
                                                    <span class="icon">

                                    </span> Booking History
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://in.bookmyshow.com/myprofile/quikpay">
                                                    <span class="icon">

                                    </span> QuikPay
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://in.bookmyshow.com/myprofile/experiences">
                                                    <span class="icon">

                                    </span> Experiences
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://in.bookmyshow.com/myprofile/settings">
                                                    <span class="icon">

                                    Settings
                                  </a>
                                </li>                               
                                  <li>
                                    <a href="ss">
                                      <span class="icon">

                                    </span> Sign Out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="location-container">
                                <a data-nav-menu="Region" data-group="top-nav" class="location" id="dTopRgnDD" href="javascript:;" >
                                    <span data-nav-menu="Region" class="icon-location">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                  <use xlink:href="/icons/common-icons.svg#icon-location"></use>
                              </svg>
                            </span>
                                    <span id="spnSelectedRegion">SIGN UP</span>
                                </a>
                                <!-- Location search dropdown starts here -->
                                <div class="location-search-container nav-tip" data-id="dTopRgnDD" data-role="dHeaderDD">
                                    <div class="__dd-trianglel"></div>
                                    <div class="__dd-sec-top struktur">
                                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="form-input __input _default tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input class="form-input __input _default tt-input" id="inp_RegionSearch_top" type="text" placeholder="ENTER YOUR CITY" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Montserrat, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizeLegibility; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-result"></div></div></span>
                                        <div data-id="inp_RegionSearch_top" style="position: absolute; display: none; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 1px solid rgb(73, 186, 142); padding: 10px; width: 85%; max-height: 190px; overflow-y: auto;">
                                            <ul id="uRgnLst_top"></ul>
                                        </div>
                                    </div>
                                    <div class="__dd-sec-bottom">
                                        <div class="__dropdown-head">
                                            TOP SEARCHED
                                        </div>
                                        <div class="__top-cities">
                                            <a href="">National Capital Region (NCR)</a> <a href="">Mumbai</a> <a href="">Pune</a> <a href="">Bengaluru</a> <a href="">Chennai</a> <a href="">Hyderabad</a> <a href="">Kolkata</a>
                                        </div>
                                        <a class="__view-all-cities" href="">All Cities</a>
                                    </div>
                                </div>
                            </li>
                       
                        @else
                       <li class="login _logged">
                      <a data-nav-menu="Profile" data-group="top-nav" id="preSignIn" style="display: none;" class="signin" data-modal="signinPopup" href="javascript:;">SIGN IN</a>
                                              <a data-nav-menu="Profile" data-group="top-nav" id="postSignIn" href="javascript:;" onclick="" style="display: block;" class="user-img"><img id="loggedInImg" src="/img/default-user.png" alt="User image"></a>
                      

                                          <div class="signed-in nav-tip" data-role="dHeaderDD" data-id="postSignIn" style="display: none;">
                            <div class="head" id="signInUName">
                              <div>
                                <span>Welcome back</span><br>
                                <strong>{!!Auth::guard('member')->user()->name!!} </strong>                                
                              </div>
                            </div>
                            <div class="body">
                              <ul>
                                <li class="wallet-header">
                                  <a href="/myprofile/mywallet/" class="wallet-link">
                                    <span class="icon">
                                      <svg class="svg-wallet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-wallet"></use>
                                      </svg>
                                    </span>
                                    <span class="__wallet-text">MyWallet</span>
                                  </a>
                                  <span class="__wallet-balance" style="display: none;"></span>
                            <div class="__wallet-reel" style="display: none;">
                              <div class="mini"></div>
                            </div>
                            <span class="__wallet-header-btn" style="">
                              <a href="/myprofile/mywallet/" class="btn _cuatro" data-wallet-text="ADD CASH" data-wallet-activate="ACTIVATE NOW">ACTIVATE NOW</a>
                            </span>
                                </li>
                                <li>
                                  <a href="/myprofile/year-at-2016">
                                      <span class="icon">
                                      <svg class="svg-year-review" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-year-review"></use>
                                      </svg>
                                      </span>
                                      2016 in review                                    
                                  </a>
                                </li> 
                                  <li>
                                    <a href="/myprofile/booking-history">
                                      <span class="icon">
                                      <svg class="svg-booking" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-booking-history"></use>
                                      </svg>
                                    </span>
                                    Booking History
                                  </a>
                                </li>
                                  <li>
                                    <a href="/myprofile/quikpay">
                                      <span class="icon">
                                      <svg class="svg-qp" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-quick-pay"></use>
                                      </svg>
                                    </span>
                                    QuikPay
                                  </a>
                                </li>
                                  <li>
                                    <a href="/myprofile/experiences">
                                      <span class="icon">
                                      <svg class="svg-exp" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-experience"></use>
                                      </svg>
                                    </span>
                                    Experiences
                                  </a>
                                </li>                               
                                  <li>
                                    <a href="/myprofile/settings">
                                      <span class="icon">
                                      <svg class="svg-setting" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-setting"></use>
                                      </svg>
                                    </span>
                                    Settings
                                  </a>
                                </li>                               
                                  <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      <span class="icon">
                                      <svg class="svg-signout" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/common-icons.svg#icon-log-out"></use>
                                      </svg>
                                    </span>
                                    Sign Out
                                  </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                              </ul>
                            </div>
                        </div>
                      </li>
                        @endif
                         </ul>
                    </div>
                </div>
                <!-- End of primary nav -->
                <!-- Secondary nav -->
                <div class="secondary  desktop-nav">
                    <div>
                        <div class="brand" style="display: block;">
                            <a class="logo" title="BookMyShow" href="http://in.bookmyshow.com/">
                                <img src="/img/UA_Cinemas_logo.svg.png" alt="" height="50px">
                            </a>
                        </div>

                        <!-- For testing - will be cleaned before going live -->
                        <!-- https://www.loc.gov/standards/iso639-2/php/code_list.php -->

                        <div class="__brand-promo">

                            <!--  <a href="/sports/indian-cricket/t20-premier-league"> -->
                            <span class="__icon">
                                    <!--<img src="//in.bmscdn.com/webin/static-sports/static/ipl/ipl-logo-bms.png">-->
                </span>

                        </div>
                    </div>

                </div>
            </nav>
            <!-- End of Secondary nav -->
        </header>

        @section('sidebar') 这是 master 的侧边栏。 @show
    </div>
    @section('showtimes') @show {{--
    <div class="row">
        <div class="col-4">
            <p>
                <a href="/">My Cinema</a>
            </p>
        </div>
        <div class="col-4">
            <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                <input type="text" class="form-control" placeholder="Search for...">
            </div>
        </div>
        @if (Auth::guard('member')->guest())
        <div class="col-4">
            {{ Form::open(['method'=> 'post', 'url'=> '/login' ]) }}
            <input type="text" name="email" value="" placeholder="email">
            <input type="text" name="password" value="" placeholder="password">
            <input type="submit" name="" value="LOGIN"> {{ Form::close() }}
            <a href="{!!URL::to('/movieclub/createmember')!!}">REGISTER</a>
            <strong>{{ $errors->first('password') }}</strong>
        </div>
        @else {{ Auth::guard('member')->user()->name }}
        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @endif

    </div>
    <div>
        <a href="{{ URL::to('/movie/now-showing')}}">movies</a>
        <a href="{{ URL::to('/cinemas/all-cinemas')}}">cinemas</a>
    </div>
    @section('sidebar') 这是 master 的侧边栏。 @show
    <div class="container">
        @yield('content')
    </div> --}}

    <div class="modal popovers-modal">

        <!-- Global overlay -->
        <div class="__overlay" style="opacity: 1; display: none;"></div>
        <div class="__overlay-scroll-signin"></div>

        <!-- Signin modal -->
        <div class="popover _signin-signup-popover" id="signinPopup" style="display: none; top: 201px;">
            <div class="popover-container">
                <div class="__header">
                    SIGN IN
                    <span class="__dismiss">X</span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column signin-column">
                            <div class="section-head">
                                <h2>A world of <span class="jenna-sue">Entertainment Awaits.</span></h2>
                                <p>Instant sign in with</p>
                            </div>
                            <div class="social-links">
                                <a style="cursor: pointer;" href="{{ route('facebookLogin') }}">
                                    <div class="auth-method icon-facebook">

                                        <div class="auth-method-title _facebook">
                                            <span class="icon-auth-method _facebook">
                  <span class="icon ">

                    </span>
                                            </span>
                                            FACEBOOK</div>
                                    </div>
                                </a>
                                <a style="cursor: pointer;" href="javascript:" onclick="BMS.SignIn.fnGPlusWrapper(); return false;">
                                    <div class="auth-method icon-googleplus">
                                        <div class="auth-method-title _gplus">
                                            <span class="icon-auth-method _gplus">
                      <span class="icon">

                      </span>
                                            </span>
                                            GOOGLE</div>
                                    </div>
                                </a>
                            </div>
                            <div class="divider">
                                <span class="or">OR</span>
                            </div>
                            <div class="signin-with-username">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <span class="error-heading">error : </span> oops please enter a valid email address.
                                    </span>
                                </p>
                                <form class="signin-form struktur" id="iUserNameParent" method="post" action="/login">
                                    {{ csrf_field() }}
                                    <input name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="email-input" placeholder="Enter your Email ID" id="iUserName" required="" minlength="1">
                                    <div id="dSignInErrorEmail" class="form-messages _success" style="display: none;"></div>

                                    <input name="password" type="password" minlength="1" class="password-input" placeholder="Enter your password" id="iPwd" autocomplete="off">
                                    <div id="dSignInErrorPassword" class="form-messages _success" style="display: none;"></div>
                                   
                                        <input type="submit" class="submit-form" value="SIGN IN"></input>
                                   
                                </form>
                                <div class="forgot-password">
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                        <span class="__text" data-modal="forgotPopup">FORGOT PASSWORD?</span>
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <aside class="column signup-redirect" style="display:none;">
                            <div class="heading">Still haven't <span class="jenna-sue-red">signed up?</span></div>
                            <div class="registration">
                                <span class="icon">

              </span>
                            </div>
                            <div class="description">
                                <p>Want to rate and review movies you've watched?
                                    <br> All you need to do is sign up!</p>
                            </div>
                            <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                <div class="signup-now-button btn _uno" data-modal="signupPopup">SIGN UP NOW</div>
                            </a>
                        </aside>
                    </div>
                    <div class="redirect-bottom">
                        <p>Still not connected?<a class="signup-now-button" data-modal="signupPopup">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signup modal -->
        <div class="popover _signin-signup-popover" id="signupPopup">
            <div class="popover-container">
                <div class="__header">
                    SIGN UP
                    <span class="__dismiss">X
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column signin-column">
                            <div class="section-head">
                                <h3>Want to be a part of the <span class="jenna-sue">Awesomeness?</span></h3>
                            </div>
                            <div class="social-links">
                                <a style="cursor: pointer;" href="javascript:" onclick="BMS.SignIn.fnFbWrapper(); return false;">
                                    <div class="auth-method icon-facebook">

                                        <div class="auth-method-title _facebook">
                                            <span class="icon-auth-method  _facebook">
                  <span class="icon">

                      </span>
                                            </span>
                                            FACEBOOK</div>
                                    </div>
                                </a>
                                <a style="cursor: pointer;" href="javascript:" onclick="BMS.SignIn.fnGPlusWrapper(); return false;">
                                    <div class="auth-method icon-googleplus">

                                        <div class="auth-method-title _gplus">
                                            <span class="icon-auth-method _gplus">
                    <span class="icon">

                      </span>
                                            </span>
                                            GOOGLE</div>
                                    </div>
                                </a>
                            </div>
                            <div class="divider"><span class="or">OR</span></div>
                            <div class="signup-with-username">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <b>error : </b> oops please enter a valid email address.
                </span>
                                    <b></b>
                                </p>
                                <form class="signup-form struktur" id="iSignUpParent" method="post" action="/movieclub/createmember">
                                    {{ csrf_field() }}
                                    <input type="text" name="fullname" class="email-input" placeholder="NAME">
                                    <input name="email" type="text" class="email-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="EMAIL" id="iRegUserEmail" required="">
                                    <div id="dSignUpErrorEmail" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>

                                    <input name="password" type="password" class="password-input" placeholder="PASSWORD" id="iRegPwd">
                                    <div id="dSignUpErrorPassword" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>

                                    <input type="password" class="confirm-password-input" placeholder="CONFIRM PASSWORD" id="iRegCnfPwd">
                                    <div id="dSignUpErrorCnfPassword" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>
                                   
                                        <input type="submit" class="submit-form" value="SIGN UP"></input>
                                   
                                </form>
                            </div>
                        </aside>
                        <aside class="column signup-description" style="display:none;">
                            <div class="heading">Be a part of an <span class="bold">Entertainment Extravaganza</span></div>
                            <ol class="description">
                                <li class="list">Want to rate and review movies you've watched.</li>
                                <li class="list">Grab the best seats in the house.</li>
                                <li class="list">Keep up with our amazing offers and discounts.</li>
                                <li class="list">Make your payments fast and secure. Quikpay and other exciting stuffs!</li>
                                <li class="list">Booking tickets has never been this hassle-free.</li>
                                <li class="list">Make the most of our amazing features!</li>
                            </ol>
                        </aside>
                    </div>
                    <div class="redirect-bottom">
                        <p>Already Connected?<a class="signup-now-button" data-modal="signinPopup">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forgot password modal -->
        <div class="popover _forgot-password" id="forgotPopup">
            <div class="popover-container">
                <div class="__header">
                    FORGOT PASSWORD
                    <span class="__dismiss">

        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column">
                            <div class="section-head">
                                <h4>Don't worry, <span class="jenna-sue">we've all been there.</span></h4>
                                <p>We can help! All you need to do is enter your email ID and follow the instructions!</p>
                            </div>
                            <div class="form-section">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <span class="error-heading">error : </span> oops please enter a valid email address.
                                    </span>
                                </p>
                                <form class="form struktur" id="iForgotEmailParent">
                                    <input type="text" id="iForgotEmail" class="email-input" placeholder="EMAIL ADDRESS">
                                    <div id="dForgotError" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>
                                    <!-- <div class="filed-error">
                  <p class="__text">error</p>
                </div> -->
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                        <div onclick="BMS.SignIn.fnResetPwd();" class="submit-form">SEND INSTRUCTIONS</div>
                                    </a>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Signin strip/modal(onscroll) section -->
        <div class="popover _signin-signup-popover _signin-signup-popover-fixed _fixed-bottom" id="signinPopupFixed" style="display: none;">
            <div class="popover-container">
                <div class="__header">
                    SIGN IN
                    <span class="__dismiss-fixed">

        </span>
                </div>
                <div class="body">
                    <span class="__dismiss-fixed-1">

        </span>
                    <div class="body-wrapper">
                        <aside class="column signin-column">
                            <div class="section-head">
                                <h2>A world of <span class="jenna-sue">Entertainment Awaits.</span></h2>
                                <p>Instant sign in with</p>
                                <div class="signin-btns-fixed-bottom">
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies" data-modal="signinPopup">
                                        <div class="signin-signup-popup-btn">SIGN IN</div>
                                    </a>
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies" data-modal="signupPopup">
                                        <div class="signin-signup-popup-btn">SIGN UP</div>
                                    </a>
                                </div>
                            </div>
                            <div class="social-links">
                                <a style="cursor: pointer;" href="javascript:" onclick="BMS.SignIn.fnFbWrapper(); return false;">
                                    <div class="auth-method icon-facebook">

                                        <div class="auth-method-title _facebook">
                                            <span class="icon-auth-method _facebook">
                  <span class="icon">

                    </span>
                                            </span>
                                            FACEBOOK</div>
                                    </div>
                                </a>
                                <a style="cursor: pointer;" href="javascript:" onclick="BMS.SignIn.fnGPlusWrapper(); return false;">
                                    <div class="auth-method icon-googleplus">
                                        <div class="auth-method-title _gplus">
                                            <span class="icon-auth-method _gplus">
                      <span class="icon">

                      </span>
                                            </span>
                                            GOOGLE</div>
                                    </div>
                                </a>
                            </div>
                            <div class="divider">
                                <span class="or">OR</span>
                            </div>
                            <div class="signin-with-username">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <span class="error-heading">error : </span> oops please enter a valid email address.
                                    </span>
                                </p>
                                <form class="signin-form struktur" id="iUserNameParentFixed">
                                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="email-input" placeholder="Enter your Email ID" id="iUserNameFixed" required="" minlength="1">
                                    <div id="dSignInErrorEmailFixed" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>

                                    <input type="password" minlength="1" class="password-input" placeholder="Enter your password" id="iPwdFixed" autocomplete="off">
                                    <div id="dSignInErrorPasswordFixed" class="form-messages _success" style="display: none;">
                                        <p class="__text"></p>
                                    </div>
                                    <!-- <div style="display: none;" class="form-messages _success" id="dAfterSignInSuccess">
                  <p class="__text">Welcome back,<span id="spnUName"></span></p>
                </div> -->
                                    <a href="javascript:;" onclick="BMS.SignIn.fnValLogIn({'username':'iUserNameFixed', 'password':'iPwdFixed', 'usernameParent':'iUserNameParentFixed', 'errorEmail':'dSignInErrorEmailFixed', 'errorPassword':'dSignInErrorPasswordFixed'}); return false;">
                                        <div class="submit-form">SIGN IN</div>
                                    </a>
                                </form>
                                <div class="forgot-password">
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                        <span class="__text" data-modal="forgotPopup">FORGOT PASSWORD?</span>
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <aside class="column signup-redirect" style="display:none;">
                            <div class="heading">Still haven't <span class="jenna-sue-red">signed up?</span></div>
                            <div class="registration">
                                <span class="icon">

              </span>
                            </div>
                            <div class="description">
                                <p>Want to rate and review movies you've watched?
                                    <br> All you need to do is sign up!</p>
                            </div>
                            <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                <div class="signup-now-button btn _uno" data-modal="signupPopup">SIGN UP NOW</div>
                            </a>
                        </aside>
                    </div>
                    <div class="redirect-bottom">
                        <p>Still not connected?<a class="signup-now-button" data-modal="signupPopup">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resend confirmation modal -->
        <div class="popover _resend-confirmation-popover" id="resendCofirmationPopup">
            <div class="popover-container">
                <div class="__header">
                    RESEND CONFIRMATION
                    <span class="__dismiss">

        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column">
                            <div class="section-head">
                                <h5>Lost your confirmation details?</h5>
                                <p>No worries, just enter the info you gave while booking &amp; we'll resend it in a jiffy!</p>
                            </div>
                            <div class="form-section struktur">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <span class="error-heading">error : </span> oops please enter a valid email address.
                                    </span>
                                </p>
                                <form class="form struktur" id="errDivFRGParent">
                                    <input type="email" value="" id="iResendConfEmail" class="email-input" placeholder="EMAIL ADDRESS">
                                    <div class="_error" id="errDivFRGEmail" style="display: none;"> </div>

                                    <input type="text" value="" maxlength="10" id="iResendConfMobile" class="email-input" placeholder="mobile number">
                                    <div class="_error" id="errDivFRGMobile" style="display: none;"> </div>

                                    <div class="filed-error">
                                        <p class="__text">error</p>
                                    </div>
                                    <!-- <div class="_error" id="errDivFRG" style="display: none;"> </div> -->
                                    <div>
                                        <div id="btnRes" onclick="BMS.SignIn.fnValRes();" class="submit-form">RESEND</div>
                                        <a id="btndisab" href="javascript:;" class="btn _disable" style="display:none;">Please wait...</a>
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Newsletters modal -->
        <div class="popover _subscribe-popover" id="subscribeNewsletters">
            <div class="popover-container">
                <div class="__header">
                    SUBSCRIBE TO NEWSLETTERS
                    <span class="__dismiss">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column">
                            <div class="section-head">
                                <h6>Never miss an <span class="jenna-sue">update</span>  from us!</h6>
                                <p>Subscribe to our free newsletters for latest updates on movies, events, plays, sports &amp; new products!</p>
                            </div>
                            <div class="form-section">
                                <p class="error-message">
                                    <span class="__exclaim-icon"></span>
                                    <span class="message">
                  <span class="error-heading">error : </span> oops please enter a valid email address.
                                    </span>
                                </p>
                                <form class="form struktur" id="subEmailmobParent">
                                    <input type="text" id="subEmailmob" class="email-input" placeholder="email Address or mobile number">

                                    <div class="filed-error">
                                        <p class="__text">error</p>
                                    </div>
                                    <div class="_error" id="errDivSUB" style="display: none;"> </div>
                                    <a href="./Chennai Movie Tickets Online Booking &amp; Showtimes near you - BookMyShow_files/movies">
                                        <div onclick="BMS.SignIn.fnDoSubMail();" class="submit-form">SUBSCRIBE NOW</div>
                                    </a>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corporate Booking  modal -->
        <div class="popover _subscribe-popover crp_bking_popup" id="dEvCorpBookPopup">
            <div class="popover-container">
                <div class="__header">Corporate Booking
                    <span class="__dismiss">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <aside class="column">
                            <div class="form-section">
                                <form class="form struktur" onsubmit="fnSubmitEvCorpDetails(); return false;">
                                    <div class="box-container">
                                        <!--YOUR FIRST NAME-->
                                        <div class="box first-name">
                                            <input type="text" class="first-name-input" placeholder="FIRST NAME" id="txtEvCorpFirstName" onkeypress="maxLimitForInputdEvCorpBook(50)">
                                        </div>
                                        <!--YOUR LAST NAME-->
                                        <div class="box last-name">
                                            <input type="text" class="last-name-input" placeholder="YOUR LAST NAME" id="txtEvCorpLastName" onkeypress="maxLimitForInputdEvCorpBook(50)">
                                        </div>
                                    </div>

                                    <div class="box-container">
                                        <!--COMPANY NAME-->
                                        <div class="box company-name">
                                            <input type="text" class="company-name-input" placeholder="COMPANY NAME" id="txtEvCorpCompanyName" onkeypress="maxLimitForInputdEvCorpBook(50)">
                                        </div>
                                        <!--QUANTITY-->
                                        <div class="box quantity-bx">
                                            <input type="text" class="quantity-input" placeholder="QUANTITY" id="txtEvCorpQty" onkeypress="maxLimitForInputdEvCorpBook(5)">
                                        </div>
                                    </div>

                                    <div class="box-container">
                                        <!--CONTACT NUMBER-->
                                        <div class="box contact-number">
                                            <input type="text" class="quantity-input" placeholder="CONTACT NUMBER" id="txtEvCorpMobile" onkeypress="maxLimitForInputdEvCorpBook(10)">
                                        </div>
                                        <!--EMAIL ID-->
                                        <div class="box email-id">
                                            <input type="text" class="email-input" placeholder="EMAIL" id="txtEvCorpEmail" onkeypress="maxLimitForInputdEvCorpBook(100)">
                                        </div>
                                    </div>

                                    <div class="box-container">
                                        <!--CITY-->
                                        <div class="box city">
                                            <select id="txtEvCorpCity" class="txtCity">
                                                <option value="City">City</option>
                                            </select>
                                            <i class="downChevron">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xlink:href="/icons/common-icons.svg#icon-arrow-down-new"></use>
                      </svg>
                    </i>
                                        </div>

                                        <!--Captcha-->
                                        <div class="box">
                                            <!-- <img src="" alt="Captcha" id="imgEvCorpCaptcha" class="captCha"/>
                    <input id="txtEvCorpCaptcha" class="verify _form-input" type="text" placeholder="VERIFY THE CODE">
                    <p>Can’t see the image? <a class="_red-color" href="javascript:;" onclick="$('#imgEvCorpCaptcha').attr('src', '/captcha/captcha?_=' + $.now());">Reload</a></p> -->
                                            <div id="recaptcha2"></div>
                                        </div>
                                    </div>

                                    <div id="errEvCorpErr" class="error"></div>

                                    <button class="btn _cuatro " id="btnEvCorpBookSubmit" type="submit">SUBMIT</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corpporate booking feedback modal -->
        <div class="popover _corporate-bookings-popup" id="dEvCorpBookFeedbackPopup">
            <div id="dEvCorpBookSuccess" class="popover-container none">
                <div class="__header">
                    <span>Successful</span>
                    <span class="__dismiss">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <p class="msg">Thank You!</p>
                        <p class="msg2">Your Response has been received successfully.</p>
                        <p class="msg2">We will get back to you shortly.</p>
                    </div>
                    <button class="btn _cuatro" onclick="BMS.Misc.modal('dEvCorpBookPopup', false);">Close</button>
                </div>
            </div>
            <div id="dEvCorpBookError" class="popover-container none">
                <div class="__header">
                    <span>Unsuccessful</span>
                    <span class="__dismiss">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <p class="msg">Sorry!</p>
                        <p class="msg2">There seems to be some problem sending the request.</p>
                        <p class="msg2">Please try again later.</p>
                    </div>
                    <button class="btn _cuatro" onclick="BMS.Misc.modal('dEvCorpBookPopup', false);">Close</button>
                </div>
            </div>
        </div>

        <!--Report Abuse PopUp starts here -->

        <div class="popover" id="report-abuse-footer">
            <div class="report-abuse-wrapper">
                <h2 class="__heading"> Report wrong or missing information
          <span class="__report-content-close">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
          <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
          </span>
        </h2>
                <div class="report-form-body">
                    <div class="row report-form">
                        <div class="input-container category">
                            <select name="category" id="categorySelectfooter" required="" title="Select a valid category" tabindex="1" placeholder="-- Select a Category --">
                                <!-- <option value="null">--Select a Category--</option> -->
                                <option value="poster">Poster</option>
                                <option value="release">Release Date</option>
                                <option value="synopsis">Synopsis</option>
                                <option value="cast">Cast/Crew</option>
                                <option value="others">Others</option>
                            </select>
                            <span class="__error-text">Select a valid category</span>
                        </div>
                        <div class="input-container details">
                            <textarea class="__text-area" title="Enter valid details" name="details" placeholder="Tell us more..." maxlength="500" tabindex="2" id="idetailsfooter"></textarea>
                        </div>
                        <div class="input-container name">
                            <select name="title" id="title" class="title">
                                <option value="1">Mr</option>
                                <option value="2">Mrs</option>
                                <option value="4">Ms</option>
                            </select>
                            <input type="text" title="Enter a valid Name" tabindex="3" id="fnamefooter" placeholder="Name">
                            <input type="text" title="Enter a valid Name" tabindex="4" id="lnamefooter" placeholder="LastName">
                        </div>
                        <div class="input-container association">
                            <input type="text" title="Association with the movie" tabindex="5" id="iassociationfooter" placeholder="Association with the content">
                        </div>
                        <div class="input-container email">
                            <input type="text" title="Enter a valid Email" tabindex="6" id="iemailfooter" placeholder="Email">
                            <input type="text" title="Phone number" tabindex="7" id="iphonenumberfooter" placeholder="Phone number" maxlength="10">
                        </div>
                        <div class="input-container pr-house">
                            <input type="text" tabindex="8" title="Production House" id="ipr-housefooter" placeholder="Name of Production House/PR Agency">
                        </div>
                        <div class="input-container mv-social-links">
                            <input type="text" tabindex="9" title="Social Media Links" id="sm-linksfooter" placeholder="Content's official social media links">
                        </div>
                        <div class="input-container mv-social-links">
                            <input type="text" tabindex="10" title="Social Media Links" id="sm-description" placeholder="Url of the reported content.">
                        </div>
                        <div class="input-container captcha-container" id="recaptcha1">
                            <!-- Captcha container to be kept blank -->
                        </div>
                        <button class="input-container btn _cuatro __btn-submit report-content-submit" tabindex="10" id="btnSubmitfooter">Report</button>
                    </div>
                    <div class="input-container report-abuse-terms">
                        <input type="checkbox" name="terms" value="terms" class="tnc_check" id="report-tnc"> “I have a good faith belief that the use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law.” AND “The information in this notification is accurate, and I am the owner, or an agent authorized to act on behalf of the owner, of an exclusive right that is allegedly infringed.”
                    </div>
                    <div class="policy-container">
                        <p><a href="https://in.bookmyshow.com/terms-and-conditions?id=reportcontent" class="report-content-policy-link" target="_blank">Notice and Take Down policy</a></p>
                    </div>
                    <div class="success-message _hide">
                        <p>Thank you for your valuable input!
                            <br>Do you want to report anything else?
                            <a href="javascript:;" id="reportScreensuc" class="__report-link"> Report</a>
                        </p>
                    </div>
                    <div class="error-popup-message _hide">
                        <p>Something went wrong,
                            <br>Please try again.
                            <a href="javascript:;" id="reportScreenfail" class="__report-link">Report</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Report Abuse PopUp ends here -->

        <!-- Location modal -->
        <div class="popover _location-popup" id="locationPopup">
            <div class="location-header struktur">
                <span class="__dismiss">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
          <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
        </svg>
      </span>
                <span class="__icon-back">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
          <use xlink:href="/icons/common-icons.svg#icon-go-back"></use>
        </svg>
      </span>
                <span class="__text" id="spnRgnHeadTxt">PICK YOUR STATE</span>
                <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="form-input .l-input _dos tt-hint" type="text" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input class="form-input .l-input _dos tt-input" type="text" placeholder="ENTER YOUR CITY" id="inp_RegionSearch" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Montserrat, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizeLegibility; text-transform: none;"></pre><div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-result"></div></div></span>
                <div data-id="inp_RegionSearch" class="inp-rgn-callout">
                    <ul></ul>
                </div>
            </div>

            <div class="location-container">
                <div class="location-pill-container" id="div_States"></div>

                <div class="city-list">
                    <div class="__city-banner"></div>
                    <div class="__list" id="div_CityName"></div>
                </div>
            </div>
        </div>

        <!-- Feedback modal -->
        <div class="popover _feedback-popup" id="feedbackPopup">
            <div class="popover-container">
                <div class="__header">
                    <div class="body-wrapper">
                        <aside class="column">
                            <div class="section-head">
                                <h5></h5>
                                <p class="__message-definition" id="submsg"></p>
                            </div>
                            <button class="btn _cuatro">BACK HOME</button>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews and rating modal -->
        <div class="popover _review-rating-popover" id="reviewRating">
            <div class="popover-container">
                <div class="__header">
                    <!-- REVIEW &amp; RATING -->
                    <span class="popover-event-name" id="spnRatingMovieTitle"></span>
                    <span class="__dismiss">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="rating-column __your-rating">
                                <div class="heading">
                                    <div class="__head-text">YOUR RATING</div>
                                    <div class="rating-details">
                                        <ul class="rating-stars" id="popover-stars">
                                            <li class="stars">
                                                <span class="ratingSpan js-ratingSpan" data-value="0.5">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-left"></use></svg>
                                    </span>
                                                <span class="ratingSpan js-ratingSpan" data-value="1.0">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-right"></use></svg>
                                    </span>
                                            </li>
                                            <li class="stars">
                                                <span class="ratingSpan js-ratingSpan" data-value="1.5">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-left"></use></svg>
                                    </span>
                                                <span class="ratingSpan js-ratingSpan" data-value="2.0">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-right"></use></svg>
                                    </span>
                                            </li>
                                            <li class="stars">
                                                <span class="ratingSpan js-ratingSpan" data-value="2.5">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-left"></use></svg>
                                    </span>
                                                <span class="ratingSpan js-ratingSpan" data-value="3.0">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-right"></use></svg>
                                    </span>
                                            </li>
                                            <li class="stars">
                                                <span class="ratingSpan js-ratingSpan" data-value="3.5">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-left"></use></svg>
                                    </span>
                                                <span class="ratingSpan js-ratingSpan" data-value="4.0">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-right"></use></svg>
                                    </span>
                                            </li>
                                            <li class="stars">
                                                <span class="ratingSpan js-ratingSpan" data-value="4.5">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-left"></use></svg>
                                    </span>
                                                <span class="ratingSpan js-ratingSpan" data-value="5.0">
                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 100" enable-background="new 0 0 50 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-ratingstar-right"></use></svg>
                                    </span>
                                            </li>
                                        </ul>
                                        <div class="rate-o-meter" id="popover-score">0.5</div>
                                    </div>
                                </div>
                                <span id="popover-rating-num-error" class="form-message" style="display: none;"></span>
                            </aside>
                            <aside class="review-column">
                                <div class="myAccordion section-head">
                                    <span id="div-overall-rating">
                  <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <use xlink:href="/icons/common-icons.svg#icon-plus"></use>
                  </svg>
                </span>
                                    <h2 style="color:#666">Would you like to write a review? (Optional)</h2>
                                    <!-- <p>All you need to do is enter your...</p> -->
                                </div>
                                <div id="div-review-form" class="tnc review-form-wrapper" style="display:none;">
                                    <span id="popover-rating-error" class="form-message" style="display: none;"></span>
                                    <form class="signin-form review-form struktur">
                                        <input type="text" id="review-title" class="title" placeholder="REVIEW TITLE">
                                        <textarea rows="8" onkeyup="return BMS.Ratings.fnCheckReviewTxt(this);" cols="50" id="review-text" class="review-description" placeholder="Highlight what you particularly liked or disliked in the movie and why ?"></textarea>
                                    </form>
                                    <span class="__min-char" id="review-count-span">Minimum Characters: <span class="__count" id="review-chars-count">140</span></span>
                                </div>
                            </aside>

                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer-wrapper">
                            <div class="activity-sharer">
                                <form class="struktur">
                                    <input type="hidden" id="ecode" value="">
                                    <input id="activity-sharing" type="checkbox" name="activity-sharing">
                                    <!--<label for="activity-sharing">
                                  <span class="__tick">
                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                          <use xlink:href="/icons/payments-icons.svg#icon-tick"></use>
                                      </svg>
                                  </span>Share activity with Facebook</label>-->
                                    <a class="submit-activity" id="submitBtnRnR">SUBMIT</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews and Rating Response modal -->
        <div id="review-rating-response" class="popover _review-rating-popover">
            <div class="popover-container">
                <div class="__header">
                    <!-- REVIEW &amp; RATING -->
                    <span class="popover-event-name"></span>
                    <span class="__dismiss">
          <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="__success-screen">
                                <div class="__tick-icon">
                                    <svg style="fill:@theme-action-contrast-dos; width: 25px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                        <use xlink:href="/icons/common-icons.svg#icon-tick"></use>
                                    </svg>
                                </div>
                                <div id="popover-rating-msg" class="__text"></div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="create-exp-success" class="popover _review-rating-popover">
            <div class="popover-container">
                <div class="__header">
                    <!-- REVIEW &amp; RATING -->
                    <span class="popover-event-name">SUCCESS!</span>
                    <span class="__dismiss" onclick="gotoProfile();">
          <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
          </svg>
        </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="__success-screen">
                                <div class="cheers-icon">
                                    <svg style="fill:@theme-action-contrast-dos; width: 25px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                        <use xlink:href="/icons/common-icons.svg#icon-congratulation"></use>
                                    </svg>
                                </div>
                                <div id="experience-success-msg" class="__text"><span style="color: red;">Congratulations!</span> Your Experience has been succsessfully published</div>
                                <div class="ex-share-box">
                                    <span class="__share-text">All you need to do is share it with world! </span>
                                    <div id="social-sharer"></div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popover" id="error-div">
            <div class="popover-container">
                <div class="__header">
                    <span class="popover-event-name"></span>
                    <span class="__dismiss">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
              </svg>
            </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="error-div-modal">
                            <div class="lhs">
                                <div class="errorlogo">
                                    <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                        <use xlink:href="/icons/common-icons.svg#icon-global-error"></use>
                                    </svg>
                                </div>
                                <div class="msgcontent">
                                    <div class="errormsg">
                                        <p class="msg"><span>Whoa!</span> Something is not right. </p>
                                        <p id="globalErrMsg" class="refresh">Please refresh the page and try again</p>
                                        <p class="errbtns">
                                            <a href="javascript:window.location.reload();">Refresh </a>
                                            <!-- <a href="#">Report this</a> -->
                                        </p>
                                        <div id="dActualErrorMsg" class="msg" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rhs">
                                <div class="contact-us">
                                    <p><span>HelpDesk@bookmyshow.com</span></p>
                                    <p>044 4043 5050, 044 6654 5050</p>
                                </div>
                            </div>
                            <!-- <div class="myCross">
                          <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                              <use xlink:href="/icons/common-icons.svg#icon-cancel" />
                          </svg>
                      </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- for sports errors -->
        <div class="popover" id="error-sports-div">
            <div class="popover-container">
                <div class="__header">
                    <span class="popover-event-name"></span>
                    <span class="__dismiss">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
              </svg>
            </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="error-div-modal">
                            <div class="lhs">
                                <div class="errorlogo">
                                    <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                        <use xlink:href="/icons/common-icons.svg#icon-error-global-sports"></use>
                                    </svg>
                                </div>
                                <div class="msgcontent">
                                    <div class="errormsg">
                                        <p class="sports-msg"><span>Whoa!</span> Something is not right. </p>
                                        <p id="globalSportsErrMsg" class="refresh">Please refresh the page and try again</p>
                                        <p class="errbtns">
                                            <a href="javascript:window.location.reload();">Refresh </a>
                                            <!-- <a href="#">Report this</a> -->
                                        </p>
                                        <div id="dActualSportsErrorMsg" class="msg" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rhs">
                                <div class="contact-us">
                                    <p><span>HelpDesk@bookmyshow.com</span></p>
                                    <p>044 4043 5050, 044 6654 5050</p>
                                </div>
                            </div>
                            <!-- <div class="myCross">
                          <svg xml:space="preserve" enable-background="new 0 0 100 100" viewBox="0 0 100 100" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                              <use xlink:href="/icons/common-icons.svg#icon-cancel" />
                          </svg>
                      </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Welcome modal -->
        <div class="popover _welcome" id="dAfterSignInSuccess">
            <div class="welcome-header">
                <span class="__icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-welcome"></use></svg>
      </span>
            </div>

            <div class="greeting-container">
                <div class="greeting">
                    <h4 class="__message">Welcome back, <span class="__name" id="spnUName"></span></h4>
                    <p class="__other-message">Your tickets are waiting to be Booked!</p>
                </div>
            </div>
        </div>

        <!-- showtimes category modal -->
        <div class="popover _showtimes-category-popover" id="StCategoryPopup">
            <div class="popover-container">
                <div class="__header">
                    <span class="__show-timing">8.30 PM</span>
                    <div class="__status" id="showtime-availability">FILLING FAST</div>
                    <span class="__dismiss">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
                    </svg>
                </span>
                </div>
                <div class="body" id="showtime-categories">
                    <div class="__categories">
                        <div class="__type-cat">
                            <span class="__type">3D Exclusive</span>
                            <br>
                            <span class="__cat _available">Available</span>
                        </div>
                        <div class="__price">
                            Rs.200
                        </div>
                    </div>
                    <div class="__categories">
                        <div class="__type-cat">
                            <span class="__type">3D Exclusive</span>
                            <br>
                            <span class="__cat _available">Available</span>
                        </div>
                        <div class="__price">
                            Rs.200
                        </div>
                    </div>
                    <div class="__categories">
                        <div class="__type-cat">
                            <span class="__type">3D Exclusive</span>
                            <br>
                            <span class="__cat _available">Available</span>
                        </div>
                        <div class="__price">
                            Rs.200
                        </div>
                    </div>
                </div>
                <a class="btn _tres __proceed" id="showtime-proceed-touch">PROCEED</a>
            </div>
        </div>

        <div class="popover" id="deactivate-account">
            <div class="popover-container">
                <div class="__header">
                    <span class="popover-event-name"></span>
                    <span class="__dismiss">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
              </svg>
            </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="__success-screen __deactivate-text">

                                <p class="__text">Are you sure you want to deactivate your account? Click ok to proceed or cancel</p>

                                <a href="javascript:void(0);" onclick="BMS.SignIn.fnDeactivateAccnt();">OK</a>
                                <a href="javascript:void(0);" onclick="BMS.Misc.modal('deactivate-account', false);">Cancel</a>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popover _resend-confirmation-popover" id="galPopup">
            <div class="popover-container">
                <div class="body-slick">
                    <div class="body-wrapper">
                        <a class="icon-cancel" onclick="BMS.Misc.modal('galPopup',false);">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <use xlink:href="/icons/common-icons.svg#icon-cancel" style="fill: #EFE9E9;"></use>
                            </svg>
                        </a>

                        <div class="slick-images" id="galLightBox">
                            <div class="main-img-slider">
                            </div>
                            <ul class="thumb-nav">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for fnb seat delivery -->
        <div class="popover _fnb-delivery-popup" id="fnbSeatDelivery">
            <div class="popover-container">
                <div class="__header">
                    <div class="__delivery-type">Select delivery type</div>
                    <span class="__dismiss">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
                    </svg>
                </span>
                </div>
                <div class="body" id="fnb-delivery">
                    <div class="delivery-types">
                        <div id="__pick-up">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <use xlink:href="/icons/fnb-icons.svg#icon-Icon_Pick-Up"></use>
                            </svg>
                            <span class="__fnb-text">Pick-Up</span>
                        </div>
                        <div id="__seat-delivery">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <use xlink:href="/icons/fnb-icons.svg#icon-Icon_Seat-Delivery"></use>
                            </svg>
                            <span class="__fnb-text">Seat Delivery</span>
                        </div>
                        <span class="__top-circle">
                    </span>
                        <span class="__bottom-circle">
                    </span>
                        <span class="__or-circle">or
                    </span>
                    </div>
                    <div class="select-type">
                        <div id="__pickup-option">
                            Pick it up anytime during the show
                        </div>
                        <div id="__seat-del">
                            <label>
                                <input type="radio" style="left:-8px;position:relative;top:-5px;" name="delivery-time" id="deliver-before-show"><span class="radio-element">Before Show</span></label>
                            <label>
                                <input type="radio" style="left:-8px;position:relative;top:-5px;" name="delivery-time" id="interval"><span class="radio-element">During Interval</span></label>
                        </div>
                    </div>
                </div>
                <a class="btn __proceed" id="order-proceed">PROCEED</a>
            </div>
        </div>
        <!--Error Section for FNB-->
        <div class="popover fnb-limit-div" id="fnb-limit-error">
            <div class="popover-container">
                <div class="__header">
                    <span class="popover-event-name">Maximum Limit Error</span>
                    <span class="__dismiss">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
              </svg>
            </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="__success-screen __deactivate-text">
                                <p class="__text">Oops you have exceeded order limit.</p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Error Section for FNB-->

        <!-- FNB - Showdate validity popup -->
        <div class="popover fnb-showdate-validity" id="fnb-showdate-validity">
            <div class="popover-container">
                <div class="__header">
                    <span class="popover-event-name">OOPS!</span>
                    <span class="__redirect">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
              </svg>
          </span>
                </div>
                <div class="body">
                    <div class="body-wrapper">
                        <div class="column-wrapper">
                            <aside class="__success-screen __deactivate-text">
                                <p class="__text validity-error"></p>
                            </aside>
                        </div>
                    </div>
                </div>
                <a class="btn __proceed" id="other-active-bookings">OKAY</a>
            </div>
        </div>

        <!-- Modal for Home Delivery and webpickup -->
        <!-- End -->
    </div>
  <script type="text/javascript">
        $(document).ready(function() {

            $('#preSignIn').on('click', function() {
                $('body').toggleClass('_fixed');
                $('.main-body-wrapper').toggleClass('_make-blur');
                $('.__overlay').css('display', 'block');
                $('#signinPopup').css('display', 'block');
            });

            $('.__dismiss').on('click', function() {
                $('body').toggleClass('_fixed');
                $('.main-body-wrapper').toggleClass('_make-blur');
                $('.__overlay').css('display', 'none');
                $('#signinPopup').css('display', 'none');
                $('#signupPopup').css('display', 'none');
            });

          $("a[data-modal='signupPopup']").on('click', function(){
            $('#signinPopup').css('display', 'none');
            $('#signupPopup').css('display', 'block');
            $('#signupPopup').css('top', '199.5px');
          });
          $("a[data-modal='signinPopup']").on('click', function(){
            $('#signinPopup').css('display', 'block');
            $('#signupPopup').css('display', 'none');
           // $('#signupPopup').css('top', '199.5px');
          });

            $("#dTopRgnDD").on('click', function(){
                $('body').toggleClass('_fixed');
                $('.main-body-wrapper').toggleClass('_make-blur');
                $('.__overlay').css('display', 'block');
                $('#signinPopup').css('display', 'none');
                $('#signupPopup').css('display', 'block');
                $('#signupPopup').css('top', '199.5px');
            });


          $('.login._logged').on('click', function(){
            if ($('.signed-in.nav-tip').css('display') == 'none') {
              $('.signed-in.nav-tip').css('display', 'block');
            }else{
              $('.signed-in.nav-tip').css('display', 'none');
            }
          });

          $('.dateFormat').each(function(key, value){
            $(this).html($.format.date(new Date($(value).attr('content')), "MMM dd, yyyy"));
          });

          $('.prettyDate').each(function(key, value){
            $(this).html($.format.date(new Date($(this).attr('date')), 'E'));
          });
//
        });
    </script>
</body>

</html>