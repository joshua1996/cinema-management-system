@extends('master')
@section('head')
    <link rel="stylesheet" href="/css/myprofile-e7fe515512.css">
    <script type="text/javascript" src="/js/jquery.qrcode.min.js"></script>
@endsection
@section('sidebar')
    {{--<div style="    margin-top: 113px;">--}}
    {{--<p>done</p>--}}
    {{--<p>this is your movie code</p>--}}
    {{--<p>{!! $userid !!}</p>--}}
    {{--<a href="{{ route('index') }}">back</a>--}}
    {{--</div>--}}
    <div class="quikpay-page profile-container ">
        <div class="header" style="background-image: url('//in.bmscdn.com/webin/profile/user-profile.png');">
            <div class="__cover"></div>
            <div class="profile-wrapper">
                <div class="header-container">
                    <div class="desc">

                        <div class="user-details" style="margin-bottom: 62px;">
                            <div class="__gravatar">
                                <img id="iUserProfileImage" src="{{ Auth::guard('member')->user()->profile }}" alt="">
                                <span class="icon-fb" data-role="social-icons" data-id="FB">
				  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                 enable-background="new 0 0 100 100" xml:space="preserve">
							  <use xlink:href="/icons/common-icons.svg#icon-facebook-modal"></use>
							</svg>
				  		</span>
                                <span class="icon-gplus" data-role="social-icons" data-id="PLUS">
				  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                 enable-background="new 0 0 100 100" xml:space="preserve">
							  <use xlink:href="/icons/common-icons.svg#icon-googleplus-modal"></use>
							</svg>
				  		</span>
                                <span class="icon-my" data-role="social-icons" data-id="EMAIL">
				  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                 enable-background="new 0 0 100 100" xml:space="preserve">
							  <use xlink:href="/icons/common-icons.svg#icon-my"></use>
							</svg>
				  		</span>
                            </div>
                            <div class="text">
                                <h1 class="__name" id="uName">{{ Auth::guard('member')->user()->name }}</h1>
                                <p class="__number" id="uMobile"></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- start of tabs container -->


        </div>
        <div class="wrapper">
            <div class="profile-tabs">
                <div class="defination" id="dQuikpayFeatures" style="">
                    <h1>Payment Complete</h1>
                    <p>This is your Movie Ticket ID</p>

                </div>
                <div class="quikpay">
                    <aside class="section">
                        <div class="container">
                            <div id="qrcode"></div>
                        </div>
                    </aside>


                </div>
            </div>
            <!-- Virtual DOM for Common Tickets Template HTML -->

            <!-- Only for Tickets -->


            <!-- RESEND CONF && PRINTBOOKING INFO.  HandleBar => RESENDPRINTINVITE -->


            <!-- INVITE FRIENDS.  HandleBar => INVITEFRIENDS -->


            <!-- UNPAID ACTIONS.  HandleBar => UNPAIDACTIONS -->


            <!-- REVIEW && RATINGS. handleBar => REVIEWRATING  -->


            <!-- ORDER FOOD AND BEVERAGES.  HandleBar => ORDERFNB -->


            <!-- Add Coupons.  HandleBar => ADDCOUPONS -->


            <!-- FNB TRANSACTION.  HandleBar => FNBTRANSTEMPLATE -->


            <!-- Food and beverage order in merchandise template HandleBar => ORDEREDFNB-->


            <!-- For Tickets + Merchandise. HandleBar => MERCHDATA -->


            <!-- For TicketData in Tickets + Merchandise. HandleBar => TICKETDATA -->


            <!-- Only for Merchandise -->


            <!-- Coupons Repeater Template -->


            <!-- END - Virtual DOM for Common Tickets Template HTML -->


        {{--<div class="profile-tabs" data-id="sixMonths" style="display: block;" hasdata="Y"--}}
        {{--data-role="memberTicketData">--}}


        {{--</div>--}}

        {{--<div class="profile-tabs" data-id="allBookings" data-role="memberTicketData" style="display: none;"--}}
        {{--hasdata="N">--}}
        {{--<section class="tickets">--}}
        {{--<ul class="confirmation-list" id="ALLBOOKINGS">--}}
        {{--<li>Getting your booking history...</li>--}}
        {{--</ul>--}}
        {{--</section>--}}
        {{--</div>--}}
        {{--<!--  <div class="profile-tabs" data-id="ticketsAndMerch" style="display: none;" hasData="N" data-role="memberTicketData">--}}
        {{--<section class="tickets">--}}
        {{--<ul class="confirmation-list" id="TICKETSMERCH">--}}
        {{--<li>Getting your tickets &amp; merchandise data...</li>--}}
        {{--</ul>--}}
        {{--</section>--}}
        {{--</div> -->--}}
        {{--<div class="profile-tabs" data-id="merchandise" style="display: none;" hasdata="N"--}}
        {{--data-role="memberTicketData">--}}
        {{--<section class="tickets">--}}
        {{--<ul class="confirmation-list" id="MERCH">--}}
        {{--<li class="init-state">Getting your merchandise data...</li>--}}
        {{--</ul>--}}
        {{--</section>--}}
        {{--</div>--}}
        {{--<div class="profile-tabs" data-id="prebookTab" style="display: none;" hasdata="N"--}}
        {{--data-role="memberTicketData">--}}
        {{--<section class="tickets">--}}
        {{--<ul class="confirmation-list" id="PREBOOKTAB">--}}
        {{--<li>Getting your pre-booking data...</li>--}}
        {{--</ul>--}}
        {{--</section>--}}
        {{--</div>--}}
        {{--<!-- <script type="text/template" id="coupon-template"> -->--}}
        {{--<div class="profile-tabs" data-id="coupons" style="display: none;" hasdata="Y"--}}
        {{--data-role="memberTicketData">--}}
        {{--<section class="tickets">--}}
        {{--<ul class="confirmation-list" id="CPN">--}}
        {{--<li class="no-data">You don't seem to have any coupons</li>--}}
        {{--</ul>--}}
        {{--<div class="cp_confirmation">--}}
        {{--<div id="cpnAval" class="cp_confirmTitle" style="display: none;">Coupons Available</div>--}}
        {{--<div class="cp_confirmdiv" id="dAvailableCoupons"></div>--}}
        {{--<div class="cp_confirmdiv" id="dExpAvaCoupons">--}}

        {{--</div>--}}
        {{--<div id="view-all-cpn" class="view-all-bookings" onclick="profile.showAllCoupons();"--}}
        {{--style="display: none;">View All Coupons--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div id="showExpCpn" class="cp_confirmation" style="display:none;">--}}
        {{--<div class="cp_confirmTitle">Coupons Expired</div>--}}
        {{--<div class="cp_confirmdiv" id="dExpCoupons">--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        {{--</div>--}}
        <!-- </script> -->
            <!-- <div class="profile-tabs" data-id="tktsOnly" style="display: none;" hasData="N" data-role="memberTicketData">
                  <section class="tickets">
                    <ul class="confirmation-list" id="TICKETS">
                        Loading data...
                      </ul>
                </section>
            </div> -->
        </div>

        <script>
            $(document).ready(function () {
                console.log('{{ $userid }}');
                $('#qrcode').qrcode("{{ $userid }}");
            });
        </script>
    </div>
@endsection
