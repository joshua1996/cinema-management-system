@extends('master') @section('sidebar')
<style media="screen">
    dl {
        width: 100%;
        overflow: hidden;
        padding: 0;
        margin: 0
    }
    
    dt {
        float: left;
        width: 50%;
        padding: 0;
        margin: 0
    }
    
    dd {
        float: left;
        width: 50%;
        padding: 0;
        margin: 0;
        text-align: right;
    }
</style>

<script type="text/javascript">
    $(document).ready(function() {
        $('.nextToPayment').on('click', function() {
            if ($('.checkBoxTerm').prop('checked')) {
                var data = {
                    name: $('#username').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    userid: '{!! $hallseat[0]->userid !!}'
                }
                $.ajax({
                    type: 'post',
                    url: '/nextToPayment',
                    data: data,
                    success: function(data) {
                        window.location.href = '{{ URL::to(' / getCheckout ') }}/' + data;
                    }
                });
            } else {
                alert('you must accept term and condition before going next page');
            }

        });

        var d = new Date();
        d.setMinutes(d.getMinutes() + 10);

        $("#timeCountDown")
            .countdown(d, function(event) {
                $(this).text(
                    event.strftime('%M:%S')
                );
            });

        function timeOut() {
            $.ajax({
                type: 'post',
                url: '/timeOut',
                data: '',
                success: function(data) {
                    $('.confirmSection').html(data);
                }
            });
        }

        setTimeout(timeOut, 600000);

    });
</script>

<section class="bkf-layout" id="seat-layout" style="display: block;">
   
    <div class="container">
        <header class="bkf-header">
            <span id="disback" onclick="fnCanTr()" class="st-back-btn">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
        <use xlink:href="/icons/common-icons.svg#icon-go-back"></use>
      </svg>
    </span>
            <div class="header-container">
                <h2>
          <!-- Event name -->
          <span class="__event-name"><a id="strEvtName" href="/movies/brindhaavanam/ET00057481">{!!$hallseat[0]['name']!!}</a></span>
          <span class="icon-a" id="sen_a" style="display: none;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <use xlink:href="/icons/common-icons.svg#icon-a"></use>
            </svg>
          </span>
          <span class="icon-u" id="sen_u" style="display: inline-block;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <use xlink:href="/icons/common-icons.svg#icon-u"></use>
            </svg>
          </span>
          <span class="icon-ua" id="sen_ua" style="display: none;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <use xlink:href="/icons/common-icons.svg#icon-ua"></use>
            </svg>
          </span>
        <!-- Event details such as venue name and timing -->
          <span class="__event-details">
            <span id="strDate" style="display: inline-block;">{!!$hallseat[0]['showingTime']!!}, {!!$hallseat[0]['time']!!}</span>
            <br>
            <span id="strVenName">{!!$hallseat[0]['cinema']!!}</span>
          </span>
        </h2>

                <!-- Event componets such as quantity and showtimes -->
                <div class="event-components" id="evcomp" style="display: none;">
                    <div id="mob-qty" class="mob-btn" onclick="javascript:BMS.Misc.modal('qty-sel', 1);">No. OF TICKETS | <span id="mobintQty">6</span></div>
                    <div id="mob-stm" class="mob-btn" onclick="javascript:BMS.Misc.modal('show-sel', 1);">SHOWTIMES</div>
                    <div></div>
                    <div class="no-of-tickets">
                        No. of Tickets
                        <br>
                        <div class="dropdown">
                            <div class="qty-icons" style="display: none;">
                                <span id="auto" class="icon-auto hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-auto"></use>
                  </svg>
                </span>
                                <span id="bus" class="icon-bus hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-bus"></use>
                  </svg>
                </span>
                                <span id="car" class="icon-car hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-car"></use>
                  </svg>
                </span>
                                <span id="cycle" class="icon-cycle hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-cycle"></use>
                  </svg>
                </span>
                                <span id="motorbike" class="icon-motorbike hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-motorbike"></use>
                  </svg>
                </span>
                                <span class="icon-motorbike">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-motorbike"></use>
                  </svg>
                </span>
                                <span id="xuv" class="icon-xuv hdsvg" style="display: none;">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/vehicles-icons.svg#icon-xuv"></use>
                  </svg>
                </span>
                            </div>
                            <div id="intQty" class="__text">6</div>
                            <span class="icon-arrow-down">
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                  <use xlink:href="/icons/common-icons.svg#icon-arrow-down-new"></use>
                              </svg>
                          </span>
                            <ul id="SLcmbQty" class="__menu">
                                <li id="1">1</li>
                                <li id="2">2</li>
                                <li id="3">3</li>
                                <li id="4">4</li>
                                <li id="5">5</li>
                                <li id="6">6</li>
                                <li id="7">7</li>
                                <li id="8">8</li>
                                <li id="9">9</li>
                                <li id="10">10</li>
                            </ul>
                        </div>
                    </div>
                    <div class="show-times" style="margin-left: 48px;">
                        Showtime
                        <br>
                        <div class="least-showtimes">
                            <ul id="seatShtm">
                                <li id="1890" class="_active"><a href="javascript:;">01:15 PM</a></li>
                            </ul>
                        </div>
                        <div id="mrshtime" class="more-shows-container" style="display: none;">
                            more shows
                            <ul class="more-shows" id="mrshow"></ul>
                        </div>
                    </div>
                </div>
                <div id="mobile-date-container" class="__event-date-container">
                    <div class="__event-date-wrapper">
                        <div class="__calendar-strip __calendar-strip-one"></div>
                        <div class="__calendar-strip __calendar-strip-two"></div>
                        <div class="__calendar-strip __calendar-strip-three"></div>
                        <div class="__calendar-strip __calendar-strip-four"></div>
                        <div class="__event-date-holder-one">
                            <p id="mobweekday">Tom</p>
                            <div class="__event-date-holder-two">
                                <span id="mobdate">31</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-adult-movie" id="SetaErrMsg" style="display: none;">
                    <span class="icon-error">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <use xlink:href="/icons/common-icons.svg#icon-error"></use>
            </svg>
          </span>
                    <span class="error-text" id="SLNew_CenMsg" style="display:none;"></span>
                </div>
               
            </div>
        

          
        </header>
        <!-- Seat layout sections starts here  -->
       

        <!-- add ons sections (such as fnb and bookasmile) starts here  -->
        <section id="bksmile" class="bkf-container _add-ons struktur" style="display: block;">

            <div id="fnbcont" class="add-ons-container">
                <!-- Book A Smile Container -->
             

                <div class="fnb-container" id="shfnb" style="">
                    <div class="fnb-section">
                        <div class="block">
                            <h2 class="__heading-text-plus-red" id="grab-a-bite">Grab a <span>bite!</span><br><!--<span class="sub-head" id="text-none">Now get your favorite snack at a discounted price !!!</span>--></h2>
                            <div class="exclusive-fullmenu-container" style="display:none;">
                                <div class="tabs-menu tabs-active" onclick="exclFullmenuCategorization(this, 'EXCLUSIVE');"> EXCLUSIVE MENU </div>
                                <div class="tabs-menu" onclick="exclFullmenuCategorization(this, 'FULL');"> CINEMA MENU </div>
                            </div>
                            <span class="sub-head fc-text" id="text-none"><span class="highlight-text">Exclusively </span>available on BookMyShow!</span>
                            <div class="fnb-filters" id="bkng-flow-filters" style="display:none;"></div>
                            <div class="fnb-container" id="fnbcall">
                                @foreach ($foodDrink as $key => $value)
                                <aside class="fnb-body" data-category="EX" style="display: block;">
                                    <div class="fnb-div">
                                        <div class="img">
                                            <img src="/img/foodDrink/{!!$value['image']!!}">
                                            <div class="price-tag">
                                                <span class="__amount">
               RM {!!$value['price']!!}
            </span>
                                                <span class="__price-tag all-excl-combos"></span>
                                            </div>
                                            <div class="company-logo" style="display: none;"><img src="//in.bmscdn.com/inventory/company/web/ABMM.jpg"></div>
                                        </div>
                                        <div class="description" id="desc_1011359">
                                            <div class="foodtype-indicator veg-combo">
                                                <div class="__circle"></div>
                                            </div>
                                            <div class="item-desc">
                                                <h2><span class="_veg"></span><span class="detail-sname item-sname">{!!$value['name']!!}</span></h2>
                                                <p class="tr-desc" style="display: block;">{!!$value['foodDetail']!!}</p>
                                                <p style="display: none;" class="detail-desc">Puri + Dosa + Sambar Vada + Pongal + Sweet + Fresh Juice 250ml</p>
                                            </div>
                                            <div class="qty" style="top: 35px;">
                                                <span id="add-btn_1011359" class="add-btn" foodname="{!!$value['name']!!}" price="{!!$value['price']!!}">ADD</span>
                                                <span id="rm_1011359" style="display:none;" class="icon-minus" foodname="{!!$value['name']!!}" cal="add">+</span>
                                                <span id="FD_1011359" class="__holder"></span>
                                                <span id="add_1011359" style="display:none;" class="icon-minus" foodname="{!!$value['name']!!}" cal="remove">-</span>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                @endforeach

                            </div>
                            <div class="fnb-error">Oops you have exceeded order limit. Only 5 items per ticket </div>

                        </div>
                    </div>
                </div>

                <!-- Pay Later -->

              
                <div class="bkf-notes">

                    <span id="fnb-flow-notes" class="__transaction-info" style="">Note:
              <ol>
                <li>Images are for representation purposes only</li>
                <li>Prices inclusive of taxes</li>
              </ol>
            </span>
                    <span id="CPGR-3D" class="__transaction-info" style="display: none;">3D Movies : Customer need to pay additional charges at the box office for 3D glasses.</span>
                    <span id="FNSD-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 30 and DEPOSIT (refundable) of Rs. 20 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNAM-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 30 and DEPOSIT (refundable) of Rs. 20 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNAS-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 100 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNBH-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 30 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNBP-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs.30 and DEPOSIT (refundable) of Rs. 100 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNCH-3D" class="__transaction-info" style="display: none;">For 3D Glasses an Usage DEPOSIT (refundable) of Rs. 20 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNGW-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 30 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNKT-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 30 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNLK-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 30 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNPN-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs. 20 and DEPOSIT (refundable) of Rs. 30 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNAN-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE DEPOSIT (refundable) of Rs. 50 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNCM-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE DEPOSIT (refundable) of Rs. 100 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNCO-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs.30 and DEPOSIT (refundable) of Rs.50 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNBG-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs.30 and DEPOSIT (refundable) of Rs. 50 will have to be paid per ticket at the Cinema.</span>
                    <span id="FNJJ-3D" class="__transaction-info" style="display: none;">For 3D Glasses an USAGE CHARGE (non-refundable) of Rs.30 and DEPOSIT (refundable) of Rs. 20 will have to be paid per ticket at the Cinema.</span>
                    <div id="DTLP" class="__transaction-info" style="display: none;">
                        <ol>
                            <li><strong>1.</strong> Children above 2 years will require full ticket. They will not be allowed inside without tickets, and NO refund for tickets either.</li>
                            <li><strong>2.</strong> Water, Eatables, Cigarette, Paan, Tobacco, Lighter, Matchbox, Drinks, Alcohol, etc. shall <strong><i><u>STRICTLY NOT</u></i></strong> be permitted inside the premises.</li>
                            <li><strong>3.</strong> Patrons under influence of alcohol shall <strong><i><u>STRICTLY NOT</u></i></strong> be permitted inside the premises.</li>
                        </ol>
                    </div>
                    <span id="dChildNote3Yrs" class="__transaction-info" style="display:none;">
              <!-- Children 3 years and above will require a separate ticket. -->
              Kids above the age of 3 years will be charged separately.
            </span>
                    <span id="dFNote" class="__transaction-info" style="display:none; text-align:justify;">
              <strong>Please Note: For 3D glasses: </strong>
              <br>
              Bangalore: Rs.30 (non-refundable usage charge) collected online as 'additional charges' &amp; Rs.50 refundable deposit payable at the cinema<br>
              Bhopal: Rs.20 (non-refundable usage charge) collected online as 'additional charges' &amp; Rs.100 refundable deposit payable at the cinema<br>
              Other centers: Rs.20 OR 30 (non-refundable usage charge) &amp; Rs.50 OR 100 (refundable deposit) payable at the cinema.<br>
            </span>
                    <span class="__transaction-info" id="fdNote" style="display:none;">
              Bring along your confimation printout to collect the food combo.
            </span>
                    <span class="__transaction-info" id="dABICNote" style="display: none;">
              Ticket Categories with Massage/Recliner feature and/or 3D movies may incur an extra charge. Please check the exact amount on the payment page before proceeding
            </span>
                    <span class="__transaction-info" id="dPrintSMSCompulsoryNote" style="display: none;">
              Customers have to carry the printout and SMS of the booking confirmation in order to collect the tickets at the Booking Counter without which the cinema will not issue tickets.
            </span>
                    <span class="__transaction-info" id="dPrintOutComp" style="display: none;">
              Printout is Mandatory in order to collect the tickets at the Booking Counter.
            </span>
                    <span class="__transaction-info" id="dPrsdNote" style="display: none;">An amount of ₹ 20/- per head shall be charged towards the hiring of 3D glasses for 3D movies and the same has to be paid at box office while you collect your tickets.</span>
                    <span id="spNote" class="__transaction-info">
                                                        <!--An Internet handling fee (per ticket) will be levied. Check the same before completing the transaction.-->
            </span>
                    <span id="dFunChandigarhFreePepsi" class="__transaction-info" style="display: none;">
              <!--Free 300ml Pepsi with every ticket purchased. To be collected from the Box Office. Offer valid till stocks last. T&amp;C apply.-->
            </span>
                    <span class="__transaction-info" style="color:red;display: none;" id="dPrasadsLargeNotImax">
              Please note that the movies being played on PRASADS LARGE SCREEN are not an IMAX presentation.
            </span>
                    <span id="spAjantaTheaterNotes" class="__transaction-info" style="display:none;">
              Print out compulsory while exchanging your tickets.<br>
              Booked tickets will not have allocated seats.<br>
              Seats are alloted on the basis of first come first serve.<br>
              Collect the tickets 30 mins prior to the show.<br>
            </span>
                    <div class="__transaction-info" id="dPrithviNotes" style="display: none;">
                        <strong>Important Notes: </strong>
                        <ol style="margin: 5px 0 0 20px; list-style-type: decimal;">
                            <li>The No Late Admittance rule will be strictly enforced. Kindly arrive early.</li>
                            <li>The Right of Admission is reserved.</li>
                            <li>After purchase, no tickets will be refunded or exchanged.</li>
                            <li>Children below the age of 6 years will not be allowed to enter.</li>
                            <li>In case of a children's show, children below the age of 3 years will not be allowed to enter.</li>
                            <li>Vehicles cannot be parked inside Janki Kutir.</li>
                            <li>The Pay &amp; Park, located opposite Mahesh Lunch Home, can be used for parking.</li>
                        </ol>
                    </div>
                    <div class="__transaction-info" id="inoxnotes" style="display: none;">
                        Inox T&amp;C:
                        <ul style="margin: 5px 0 0 8px; list-style-type: decimal;">
                            <li>Children above the age of 3 will need a separate ticket ,children will not be allowed in Adult movie .</li>
                            <li>Please carry a valid age proof for A rated movies -18 years and over only would be given entry .</li>
                            <li>Tickets are not refundable or transferable .</li>
                            <li>Outside food and beverages are not allowed ,Right of admission is reserved.</li>
                        </ul>
                    </div>
                    <span class="__transaction-info" id="d3DNoteOS" style="display: none;">For 3D Glasses a refundable/non-refundable amount may have to be paid per ticket at the cinema. The exact amount will be intimated at the cinema.<br></span>
                    <span id="unpaNote" class="__transaction-info" style="display:none;">
              1. An internet handling fee will be levied. Please check the same before completing the transaction.<br>
              <!-- 2. You can only pay via Cash at the box office. Credit and Debit cards will not be accepted. Please carry change for quicker and hassle free payment at the box office. <br/>-->
              2. You can only pay online to confirm your booking upto <strong class="cuthour"></strong> before the show.<br>
            </span>
                </div>
            </div>
            <!-- Order summary section -->

            <div class="bkf-order-summary-container">
                <div class="order-summary-section">
                    <div class="order-summarywrap">
                        <div class="order-summary">
                            <span class="__circle-left"></span>
                            <span class="__circle-right"></span>
                            <h2>Booking Summary</h2>

                            <ul class="__details">
                                <li>
                                    <div class="__ticket-cat">
                                        @php $seatArr = array(); foreach ($hallseat as $key => $value) { array_push($seatArr, $value['seat']); } @endphp
                                        <span id="TickCat" class="__seat-type">{!!implode(',', $seatArr)!!}<span id="TickQuantity"> ( {!!count($seatArr)!!} Tickets )</span></span>

                                    </div>
                                    @php $price = count($seatArr) * $hallseat[0]['price']; @endphp
                                    <div><span id="seatPri" class="__seat-price">RM {!!number_format($price, 2)!!}</span></div>
                                </li>

                                <li>
                                    <div>
                                        <p>
                                            <span class="__up-icon up-icon-tax">
                        <svg width="100%" height="100%" version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/fnb-icons.svg#icon-downwards"></use></svg>
                      </span>
                                            <span class="__down-icon down-icon-tax" onclick="showTaxBreakup('hide', this)" style="display:none;">
                        <svg width="100%" height="100%" version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/fnb-icons.svg#icon-dropdown"></use></svg>
                      </span>
                                            <span>Internet handling fees</span>
                                        </p>
                                    </div>
                                    <div><span id="bkfee">RM {!!$hallseat[0]['bookingFee']!!}</span></div>
                                    <div class="__breakdown" id="intHandlingFeeBreakdown">
                                        <ul>
                                            <li><span>Booking Fees</span><span>RM {!!$hallseat[0]['bookingFee']!!}</span></ul>
                                    </div>
                                    </li>

                                    <li id="dOtherCharges" style="display:none;"></li>
                                    <li class="_total-section">
                                        <div>
                                            Sub total
                                        </div>
                                        <div><span id="subTT" class="__sub-total">RM {!!number_format($price + $hallseat[0]['bookingFee'], 2)!!}</span></div>
                                    </li>
                                    <li id="fdd" class="__fnb-section" style="display:none;">
                                        <div>
                                            <span class="__up-icon up-icon-fandb" onclick="showBeverages();" style="display:none;">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/fnb-icons.svg#icon-downwards"></use></svg>
                      </span>
                                            <span class="__down-icon down-icon-fandb" onclick="showBeverages();">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/icons/fnb-icons.svg#icon-dropdown"></use></svg>
                      </span>Food &amp; Beverage<span class="__trash-icon" onclick="fnRemoveAllItems();">
                                          </span>
                                        </div>
                                        <div id="fnbTotal"></div>
                                        <p id="fnbDiscount" style="display:none;" class="__discount-text">You've got Rs. <span></span></p>
                                    </li>
                                    <li>
                                        <ul id="FCDtl" style="display:none;">

                                        </ul>
                                    </li>
                                    <li style="display: none;">
                                        <h3 id="cpnfdd" class="__fnb-section" style="display:none;">Coupons <a id="cpnfdAll" onclick="showCoupons('cpnDeta','cpnfdAll');" href="javascript:;">Hide All</a></h3>
                                    </li>
                                    <li style="display: none;">
                                        <ul id="cpnDeta" style="display:none;"></ul>
                                    </li>
                                    <li id="OffDis" style="display:none;"></li>
                            </ul>
                        </div>
                        <div class="_total-section amt-payable">
                            <div>
                                Amount Payable
                            </div>
                            <div><span id="ttPrice" class="__amount-payable">RM {!!number_format($price + $hallseat[0]['bookingFee'], 2)!!}</span></div>
                        </div>
                    </div>
                    <div id="seatErr" class="form-messages"></div>
                   
                    <div class="__order-summary-btn">
                        <a id="btnseatdisab" href="javascript:;" class="btn _disable" style="display: none;">Please wait...</a>

                        <a id="prePay" class="btn _cuatro __fnb-btn" href="#" style="display: inline-block;"><span class="__totalinbtn" style="display: inline;">TOTAL: <span id="PayTotal">RM {!!number_format($price + $hallseat[0]['bookingFee'], 2)!!}</span></span>Proceed</a>
                        <a id="payLat" class="btn _cuatro" style="display:none;" onclick="fnBookTrans();" href="javascript:;">Confirm Reservation</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('.up-icon-tax').on('click', function() {
                if ($('.__breakdown').css('display') == 'none') {
                    $('.__breakdown').css('display', 'block');
                } else {
                    $('.__breakdown').css('display', 'none');
                }
            });
            $('.add-btn').on('click', function() {
                addFood($(this).attr('price'), $(this).attr('foodname'));
                $('#fdd').css('display', 'block');
                $('#FCDtl').css('display', 'block');
                $('#FCDtl').append('<li class="liFB" foodname="' + $(this).attr('foodname') + '"><div><p><span class="icon-cancel"></span><span>' + $(this).attr('foodname') + '</span> (Qt. 1)</p></div><div><span>RM ' + $(this).attr('price') + '</span></div></li>');
                $(this).css('display', 'none');
                $(this).nextAll('.icon-minus').css('display', 'block');
                $(this).nextAll('.__holder').html('1');
            });

            $('.icon-minus').on('click', function() {
                if ($(this).attr('cal') == 'add') {
                    var count = $(this).nextAll('.__holder').html();
                    count++;
                    $(this).nextAll('.__holder').html(count);
                    addFood($(this).prev($('.add-btn')).attr('price'), $(this).prev($('.add-btn')).attr('foodname'));
                } else {
                    var count = $(this).prevAll('.__holder').html();
                    count--;
                    $(this).prevAll('.__holder').html(count);
                    if (count == 0) {
                        $(this).css('display', 'none');
                        $(this).prevAll('.icon-minus').css('display', 'none');
                        $(this).prevAll('.__holder').html('');
                        $(this).prevAll('.add-btn').css('display', 'block');
                    }
                    removeFood($(this).prevAll('.add-btn').attr('price'), $(this).prevAll('.add-btn').attr('foodname'));
                }
            });

            $('#prePay').on('click', function(){
                $.get('/checklogin', function(data){
                   // data.status == false ? $('#payLat').show() : goToPay();
                })
            });
            //
        });
        var foodArr = [];
        var foodTypeArr = [];
        var foodPriceTotal = 0.00;

        function addFood(price, foodname) {
            foodPriceTotal = 0.00;
            foodArr.push(price);
            $.each(foodArr, function(e) {
                foodPriceTotal += parseFloat(this);
            });
            foodPriceTotal = parseFloat(foodPriceTotal).toFixed(2);
            $('#fnbTotal').html('RM ' + foodPriceTotal);

            if (foodTypeArr.hasOwnProperty(foodname)) {
                foodTypeArr[foodname] = foodTypeArr[foodname] + 1;
                $('#FCDtl').find('.liFB[foodname=\'' + foodname + '\']').replaceWith('<li class="liFB" foodname="' + foodname + '"><div><p><span class="icon-cancel"></span><span>' + foodname + '</span> (Qt. ' + foodTypeArr[foodname] + ')</p></div><div><span>RM ' + parseFloat(price * foodTypeArr[foodname]).toFixed(2) + '</span></div></li>')

            } else {
                foodTypeArr[foodname] = 1;
            }
            amountPay(parseFloat(price * foodTypeArr[foodname]).toFixed(2));
        }

        function removeFood(price, foodname) {
            foodPriceTotal = 0.00;
            foodArr.splice(foodArr.indexOf(price), 1);
            $.each(foodArr, function(e) {
                foodPriceTotal += parseFloat(this);
            });
            foodPriceTotal = parseFloat(foodPriceTotal).toFixed(2);
            $('#fnbTotal').html('RM ' + foodPriceTotal);

            foodTypeArr[foodname] = foodTypeArr[foodname] - 1;
            $('#FCDtl').find('.liFB[foodname=\'' + foodname + '\']').replaceWith('<li class="liFB" foodname="' + foodname + '"><div><p><span class="icon-cancel"></span><span>' + foodname + '</span> (Qt. ' + foodTypeArr[foodname] + ')</p></div><div><span>RM ' + parseFloat(price * foodTypeArr[foodname]).toFixed(2) + '</span></div></li>')
            if (foodTypeArr[foodname] == 0) {
                $('#FCDtl').find('.liFB[foodname=\'' + foodname + '\']').remove();
                $('#fdd').remove();

            }
            amountPay(parseFloat(price * foodTypeArr[foodname]).toFixed(2));
        }

        function amountPay(price) {
            foodPriceTotal = 0.00;
            $.each(foodArr, function(e) {
                foodPriceTotal += parseFloat(this);
            });
            var a = {!!number_format($price + $hallseat[0]['bookingFee'], 2) !!};
            var b = a + foodPriceTotal;
            $('#ttPrice').html('RM' + parseFloat(b).toFixed(2));
            $('#PayTotal').html('RM' + parseFloat(b).toFixed(2));
        }

        @if (Auth::guard('member')->check())
            function goToPay(){
            var data = {
                email: '{!! Auth::guard('member')->user()->email !!}'
            }
           // $.post('/getCheckout', data);
           $.ajax({
                   url: '/getCheckout',
                   type: 'post',
                   data: data,
                   success: function (data) {
                     console.log(data);
                        window.location.href= data;
                   }
               });
        }
        @endif
        
    </script>
</section>

@endsection