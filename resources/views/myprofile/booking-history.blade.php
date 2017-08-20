@extends('master')

@section('head')
    <link rel="stylesheet" href="/css/myprofile-e7fe515512.css">

@endsection

@section('sidebar')
    <div class="profile-container">
        <div class="header" style="background-image: url('//in.bmscdn.com/webin/profile/user-profile.png');">
            <div class="__cover"></div>
            <div class="profile-wrapper">
                <div class="header-container">
                    <div class="desc">
                        <section class="breadcrumb">
                            <ul>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a href="/" itemprop="url">
                                        <span itemprop="title">Online Tickets</span>
                                    </a>
                                    <span>→</span>
                                </li>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                    <a href="/myprofile/" itemprop="url">
                                        <span itemprop="title">My Profile</span>
                                    </a>
                                    <span>→</span>
                                </li>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" id="li-breadcrumb"
                                    style="">
                                    <a href="/myprofile/booking-history" itemprop="url">
                                        <span itemprop="title" id="breadcrumb-text">Booking History</span>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <div class="user-details">
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
                    <div class="tab-list">
                        <ul class="p-tab bh-tab">
                            <li class="_active"><a href="/myprofile/booking-history/">Booking History</a></li>
                            <li class=""><a href="/myprofile/quikpay/">QuikPay</a></li>
                            <li class=""><a href="/myprofile/experiences">Experiences</a></li>
                            <li class=""><a href="/myprofile/settings/">Settings</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pr-social-links">
                    <a id="aFbLink" style="cursor: pointer;" href="javascript:"
                       onclick="profile.fnConnectSocial('FB'); return false;">
                        <div class="auth-method icon-facebook">

                            <div class="auth-method-title _facebook">
			  	<span class="icon-auth-method _facebook">
					<span class="icon ">
			  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                             xml:space="preserve">
						  <use xlink:href="/icons/common-icons.svg#icon-facebook-modal"></use>
						</svg>
			  		</span>
			  	</span>
                                FACEBOOK
                            </div>
                        </div>
                    </a>
                    <a id="aGplusLink" style="cursor: pointer;" href="javascript:"
                       onclick="profile.fnConnectSocial('PLUS'); return false;">
                        <div class="auth-method icon-googleplus">
                            <div class="auth-method-title _gplus">
				  	<span class="icon-auth-method _gplus">
				  		<span class="icon">
				  			<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                 enable-background="new 0 0 100 100" xml:space="preserve">
							  <use xlink:href="/icons/common-icons.svg#icon-googleplus-modal"></use>
							</svg>
				  		</span>
				  	</span>
                                GOOGLE
                            </div>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="btn _uno"
                       onclick="BMS.Misc.modal('deactivate-account', true);">DEACTIVATE ACCOUNT</a>
                </div>
            </div>
        </div>
        <!-- start of tabs container -->

        <div class="booking-filters tab-list">
            <ul class="p-tab bh-tab">
                <li class="_active" data-id="dBookingNav" render-fn="" id="sixMonths"><a>Recent Bookings</a></li>
                <!-- <li class="" data-id="dBookingNav" render-fn="" id="tktsOnly"><a>Tickets</a></li> -->
                <!-- <li class="" data-id="dBookingNav" id="ticketsAndMerch"><a>Tickets + Merchandise</a></li> -->
                <li class="" data-id="dBookingNav" id="prebookTab"><a>Pre-booking</a></li>
                <li class="" data-id="dBookingNav" id="merchandise"><a>Merchandise</a></li>
                <li class="" data-id="dBookingNav" id="coupons"><a>Coupons</a></li>
            </ul>
        </div>

        <div class="wrapper">

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


            <div class="profile-tabs" data-id="sixMonths" style="display: block;" hasdata="Y"
                 data-role="memberTicketData">
                @if(count($hallseat) > 0)
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                @else
                    <section class="tickets">
                        <ul class="confirmation-list" id="SIXMONTHS">
                            <li class="no-data">You don't seem to have any recent bookings.</li>
                            <div id="allBookings" class="view-all-bookings" onclick="profile.fnLazyLoadOldHistory('N');">
                                View all bookings
                            </div>
                        </ul>
                    </section>
                @endif


            </div>

            <div class="profile-tabs" data-id="allBookings" data-role="memberTicketData" style="display: none;"
                 hasdata="N">
                <section class="tickets">
                    <ul class="confirmation-list" id="ALLBOOKINGS">
                        <li>Getting your booking history...</li>
                    </ul>
                </section>
            </div>
            <!--  <div class="profile-tabs" data-id="ticketsAndMerch" style="display: none;" hasData="N" data-role="memberTicketData">
                   <section class="tickets">
                     <ul class="confirmation-list" id="TICKETSMERCH">
                         <li>Getting your tickets &amp; merchandise data...</li>
                       </ul>
                 </section>
             </div> -->
            <div class="profile-tabs" data-id="merchandise" style="display: none;" hasdata="N"
                 data-role="memberTicketData">
                <section class="tickets">
                    <ul class="confirmation-list" id="MERCH">
                        <li class="init-state">Getting your merchandise data...</li>
                    </ul>
                </section>
            </div>
            <div class="profile-tabs" data-id="prebookTab" style="display: none;" hasdata="N"
                 data-role="memberTicketData">
                <section class="tickets">
                    <ul class="confirmation-list" id="PREBOOKTAB">
                        <li>Getting your pre-booking data...</li>
                    </ul>
                </section>
            </div>
            <!-- <script type="text/template" id="coupon-template"> -->
            <div class="profile-tabs" data-id="coupons" style="display: none;" hasdata="Y" data-role="memberTicketData">
                <section class="tickets">
                    <ul class="confirmation-list" id="CPN">
                        <li class="no-data">You don't seem to have any coupons</li>
                    </ul>
                    <div class="cp_confirmation">
                        <div id="cpnAval" class="cp_confirmTitle" style="display: none;">Coupons Available</div>
                        <div class="cp_confirmdiv" id="dAvailableCoupons"></div>
                        <div class="cp_confirmdiv" id="dExpAvaCoupons">

                        </div>
                        <div id="view-all-cpn" class="view-all-bookings" onclick="profile.showAllCoupons();"
                             style="display: none;">View All Coupons
                        </div>
                    </div>
                    <div id="showExpCpn" class="cp_confirmation" style="display:none;">
                        <div class="cp_confirmTitle">Coupons Expired</div>
                        <div class="cp_confirmdiv" id="dExpCoupons">

                        </div>
                    </div>
                </section>
            </div>
            <!-- </script> -->
            <!-- <div class="profile-tabs" data-id="tktsOnly" style="display: none;" hasData="N" data-role="memberTicketData">
                  <section class="tickets">
                    <ul class="confirmation-list" id="TICKETS">
                        Loading data...
                      </ul>
                </section>
            </div> -->
        </div>
    </div>
@endsection