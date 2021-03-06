@extends('master')

@section('head')

    <link rel="stylesheet" href="/css/common-page-5cd3482d8d.css">
    <link rel="stylesheet" href="/css/buyspeedtickets-0a7f57693e.css">
@endsection

@section('sidebar')
    <script type="text/javascript">
        $(document).ready(function () {


            $('.buyTicket').on('click', function () {
                var data = {
                    movie: '{{ Route::input('movieID') }}',
                    cinema: $('.selectCinema').val(),
                    showingTime: $('.selectSession').val(),
                    time: $('.selectTime').val()
                }
                $.ajax({
                    type: 'post',
                    url: '/buyTicket',
                    data: data,
                    success: function (data) {
                        window.location.href = '{{URL::to('/Ticketing/selectSeats')}}' + '/' + data.ID;
                    }
                })
            });

            var href = location.href;
            $('._slick').each(function (index) {
                if ($(this).find('.datee').attr('date') == href.match(/([^\/]*)\/*$/)[1])
                {
                    $(this).addClass('_active');
                }
            })
        });
    </script>

    <section class="movie-details">
        <!-- Share buttons for touch devices -->
        <section class="share-button">
            <div class="__share-icons">

            </div>
            <div class="__icon" data-share-button="">
              <span id="__icon-share-logo">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px" enable-background="new 0 0 100 100" xml:space="preserve">
                    <use xlink:href="/icons/common-icons.svg#icon-share-logo"></use>
                  </svg>
              </span>
                <span id="__icon-cancel">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                       x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                  <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
                </svg>
                </span>
            </div>
        </section>
        <!-- Share buttons End -->

        <div class="fix-height-div ">

            <!-- Position absolute divs starts here -->
            <!-- Movie/Cinema BG blur image -->
            <div class="__bg-image">

                <div id="imgBanner" class="st-bg"
                     style="background-image:url('/img/movie/banner/{!!$showing[0]['movieBanner']!!}')"
                     onerror="this.src='//in.bmscdn.com/webin/movies/default.jpg'" alt=""></div>
            </div>

            <div class="top-section-container">
                <div class="movie-details-container">
                    <div class="text-details ">
                        <div class="__info">
                            <a class="__moreinfo" href="/chennai/movies/brindhaavanam/ET00057481"><span><span
                                            class="info-icon __icon"><svg xml:space="preserve"
                                                                          enable-background="new 0 0 100 100"
                                                                          viewBox="0 0 100 100" y="0px" x="0px"
                                                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                          xmlns="http://www.w3.org/2000/svg"
                                                                          version="1.1"><use
                                                    xlink:href="/icons/movies-icons.svg#icon-info"></use></svg></span></span>INFO</a>
                        </div>

                        {{--<div class="st-movie-info">--}}
                        {{----}}
                        {{--<div class="__director-info">--}}
                        {{--<div class="__title">DIRECTOR</div>--}}
                        {{--<span class="__director-name wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}
                        {{--<span class="__dir-img">--}}
                        {{--<span class="__cast-img">--}}
                        {{--<a class="_anchor-person" href="/person/radha-mohan/1758">--}}
                        {{--<img alt="Radha Mohan" title="Radha Mohan" data-error="//in.bmscdn.com/webin/profile/user.jpg" data-src="//in.bmscdn.com/iedb/artist/images/website/poster/large/radha-mohan-1758-24-03-2017-17-35-08.jpg" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/radha-mohan-1758-24-03-2017-17-35-08.jpg"></a>--}}
                        {{--</span>--}}

                        {{--</span>--}}
                        {{--<br>--}}
                        {{--<a class="_anchor-person" href="/person/radha-mohan/1758">--}}
                        {{--<span class="__dir-name">Radha Mohan</span></a>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="__crew-info">--}}
                        {{--<div class="__title">CAST &amp; CREW</div>--}}
                        {{--<span class="__cast-img-name wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}

                        {{--<span class="__cast-img">--}}
                        {{--<a class="_anchor-person" href="/person/arulnithi-tamilarasu/1043910">--}}
                        {{--<img alt="Arulnithi Tamilarasu" title="Arulnithi Tamilarasu" data-error="//in.bmscdn.com/webin/profile/user.jpg" data-src="//in.bmscdn.com/iedb/artist/images/website/poster/large/arulnithi-tamilarasu-1043910-24-03-2017-17-48-52.jpg" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/arulnithi-tamilarasu-1043910-24-03-2017-17-48-52.jpg"></a>--}}
                        {{--</span>--}}
                        {{--<br>--}}
                        {{--<a class="_anchor-person" href="/person/arulnithi-tamilarasu/1043910">--}}
                        {{--<span class="__cast-name">Arulnithi Tamilarasu</span></a>--}}
                        {{--</span>--}}
                        {{--<span class="__cast-img-name wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}

                        {{--<span class="__cast-img">--}}
                        {{--<a class="_anchor-person" href="/person/tanya-ravichandran/1076845">--}}
                        {{--<img alt="Tanya Ravichandran" title="Tanya Ravichandran" data-error="//in.bmscdn.com/webin/profile/user.jpg" data-src="//in.bmscdn.com/iedb/artist/images/website/poster/large/tanya-ravichandran-1076845-22-05-2017-15-04-10.jpg" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/tanya-ravichandran-1076845-22-05-2017-15-04-10.jpg"></a>--}}
                        {{--</span>--}}
                        {{--<br>--}}
                        {{--<a class="_anchor-person" href="/person/tanya-ravichandran/1076845">--}}
                        {{--<span class="__cast-name">Tanya Ravichandran</span></a>--}}
                        {{--</span>--}}
                        {{--<span class="__cast-img-name wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}

                        {{--<span class="__cast-img">--}}
                        {{--<a class="_anchor-person" href="/person/cell-murugan/IEIN083296">--}}
                        {{--<img alt="Cell Murugan" title="Cell Murugan" data-error="//in.bmscdn.com/webin/profile/user.jpg" data-src="//in.bmscdn.com/iedb/artist/images/website/poster/large/cell-murugan-iein083296-22-05-2017-15-04-41.jpg" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/cell-murugan-iein083296-22-05-2017-15-04-41.jpg"></a>--}}
                        {{--</span>--}}
                        {{--<br>--}}
                        {{--<a class="_anchor-person" href="/person/cell-murugan/IEIN083296">--}}
                        {{--<span class="__cast-name">Cell Murugan</span></a>--}}
                        {{--</span>--}}
                        {{--<span class="__cast-img-name wow fadeIn" style="visibility: visible; animation-name: fadeIn;">--}}

                        {{--<span class="__cast-img">--}}
                        {{--<a class="_anchor-person" href="/person/m-s-bhaskar/18309">--}}
                        {{--<img alt="M. S. Bhaskar" title="M. S. Bhaskar" data-error="//in.bmscdn.com/webin/profile/user.jpg" data-src="//in.bmscdn.com/iedb/artist/images/website/poster/large/ms-bhaskar-18309-24-03-2017-15-55-56.jpg" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/ms-bhaskar-18309-24-03-2017-15-55-56.jpg"></a>--}}
                        {{--</span>--}}
                        {{--<br>--}}
                        {{--<a class="_anchor-person" href="/person/m-s-bhaskar/18309">--}}
                        {{--<span class="__cast-name">M. S. Bhaskar</span></a>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <meta itemprop="name" content="Brindhaavanam">
                        <h1>
                            <div class="cinema-name-wrapper">

                                <meta content="https://in.bookmyshow.com/buytickets/brindhaavanam-chennai/movie-chen-ET00057481"
                                      itemprop="url">
                                <a href="/chennai/movies/brindhaavanam/ET00057481">{!!$showing[0]['name']!!}</a>
                            </div>

                            <div class="venue-info-btn-wrapper">
                            </div>

                        </h1>
                        <div class="__more-movie-data">
                                         
                                          
                                                              <span class="__tags">
                                                                @php
                                                                    $genre = $showing[0]['genre'];
                                                                    $str = explode('/', $genre);
                                                                @endphp
                                                                  @foreach ($str as $key=>$value)
                                                                      <span class="__genre-tag">{!!$value!!}</span>
                                                                  @endforeach

                                                                  <span style="display:none">Tamil</span></span>
                            <span class="__release-date dateFormat" content="{!!$showing[0]['releaseDate']!!}"></span>

                            <span class="clock-time-buyticktes">
                                                        <span class="__clock-icon">
                                               <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                                                    xml:space="preserve">
                                            <use xlink:href="/icons/movies-icons.svg#icon-time"></use>
                                          </svg>
                                            </span>
                                @php
                                    function convertToHoursMins($time, $format = '%02d:%02d') {
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
                                @endphp
                                <span class="__time" content="PT130M" itemprop="duration">{!! convertToHoursMins($showing[0]['runningTime'], '%02d hours %02d minutes') !!}</span>
                                            <br>
                                            <span class="__selected-category">3D</span>
                                        </span>
                        </div>
                    </div>

                </div>

                <!-- Movie/Cinema Social list -->
                <div class="social-container">

                </div>
            </div>

        </div>
        <!-- Filter divs -->
        <div class="filters-wrapper  ">
            <div class="filters-container  ">
                <!--          <div class="__img">
                              <img src="/events/moviecard/.jpg" alt="">
                            </div>  -->
                <div class="sticky-filtertitle">Brindhaavanam</div>
                <div class="showtime-filters struktur  ">
                    <div class="date-container " style="width: 814px;">
                        <ul id="showDates">
                            @foreach ($showingDay as $key=>$value)

                                @if ($key == 0)
                                    <li class="_slick" style="left: {!!54 * $key!!}px;">
                                        <a href="/showtimes/byMovie/{!!$value['movieID']!!}/{!!$value['showingTime']!!}">
                                            <span></span>
                                            @php
                                                $time = strtotime($value['showingTime']);
                                            @endphp
                                            <div>{!!date('d', $time)!!}<br>
                                                <span class="datee" date="{!! $value['showingTime'] !!}">TODAY</span>
                                            </div>
                                        </a>
                                    </li>
                                @else
                                    <li class="_slick" style="left: {!!54 * $key + 5!!}px;">
                                        <a href="/showtimes/byMovie/{!!$value['movieID']!!}/{!!$value['showingTime']!!}">
                                            <span></span>
                                            @php
                                                $time = strtotime($value['showingTime']);

                                            @endphp
                                            <div>{!!date('d', $time)!!}<br>
                                                <span class="datee prettyDate"
                                                      date="{!! $value['showingTime'] !!}"></span>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>


                    <div class="dropdown-block ">

                        <button class="btn _default __reset">RESET</button>
                        <button class="btn _tres __done">DONE</button>


                    </div>

                    <div class="showtimes-search">
                        <div class="__search">
                          <span class="icon-search">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                             xml:space="preserve">
                        <use xlink:href="/icons/common-icons.svg#icon-search"></use>
                        </svg>
                      </span>
                            <span class="icon-close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                             xml:space="preserve">
                        <use xlink:href="/icons/common-icons.svg#icon-cancel"></use>
                        </svg>
                      </span>
                            <input type="text" id="fltrsearch" placeholder="Search for a Cinema">
                        </div>
                    </div>
                    <!-- <div class="dropdown loading">  Loading...</div> -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('showtimes')
    <section class="phpShowtimes showtimes">
        <div class="applied-filters wrapper">
            <div class="added-filters">
            </div>
        </div>
        <div class="ad-spot-showtiming-top">


            <div id="div-gpt-ad-1471747028372-0"
                 style="height: 80px; width: 1250px; margin: 0px auto 10px; display: none;">

                <div id="google_ads_iframe_/118335522/BMS_ShowTiming_Top_0__container__" style="border: 0pt none;">
                    <iframe id="google_ads_iframe_/118335522/BMS_ShowTiming_Top_0" title="3rd party ad content"
                            name="google_ads_iframe_/118335522/BMS_ShowTiming_Top_0" width="1250" height="80"
                            scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc=""
                            style="border: 0px; vertical-align: bottom;"></iframe>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="additional-messages"><span class="__icon __close">           <svg version="1.1"
                                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                              x="0px" y="0px"
                                                                                              viewBox="0 0 100 100"
                                                                                              enable-background="new 0 0 100 100"
                                                                                              xml:space="preserve">        <use
                                    xlink:href="/icons/common-icons.svg#icon-cancel"></use>          </svg>          </span>
                    <div class="m-ticket-text"><span class="__icon">         <svg version="1.1"
                                                                                  xmlns="http://www.w3.org/2000/svg"
                                                                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                  x="0px" y="0px" viewBox="0 0 100 100"
                                                                                  enable-background="new 0 0 100 100"
                                                                                  xml:space="preserve">            <use
                                        xlink:href="/icons/buytickets-icons.svg#icon-mobile"></use></svg></span>M-Ticket
                        Available
                    </div>
                    <div class="pipe"></div>
                    <div class="fnb-text"><span class="__icon">     <svg version="1.1"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         x="0px" y="0px" viewBox="0 0 100 100"
                                                                         enable-background="new 0 0 100 100"
                                                                         xml:space="preserve">        <use
                                        xlink:href="/icons/buytickets-icons.svg#icon-fnb"></use>     </svg>      </span>
                        Food &amp; Beverages Available
                    </div>
                </div>
                <div class="ad-spot-showtimes">

                    <!-- /118335522/BMS_ShowTimePage_SkyScraper -->
                    <div id="div-gpt-ad-1476078216990-0" style="display: none;">


                        <div id="google_ads_iframe_/118335522/BMS_ShowTimePage_SkyScraper_0__container__"
                             style="border: 0pt none;">
                            <iframe id="google_ads_iframe_/118335522/BMS_ShowTimePage_SkyScraper_0"
                                    title="3rd party ad content"
                                    name="google_ads_iframe_/118335522/BMS_ShowTimePage_SkyScraper_0" width="120"
                                    height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"
                                    srcdoc="" style="border: 0px; vertical-align: bottom;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="__no-results _none">
                    <div class="__data-not-found">
                        <div class="__icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                                 enable-background="new 0 0 100 100" xml:space="preserve">
                            <use xlink:href="/icons/common-icons.svg#icon-no-result"></use>
                        </svg>
                        </div>
                        <div class="__text"><span class="__red-text">Oops!</span> No results found</div>
                    </div>
                </div>
                <ul id="venuelist">
                    @foreach ($cinema as $key=>$value)

                        <li class="list ">
                            <div class="listing-info">
                                <div class="img-container">

                                    <span class="icon-star star"></span>
                                </div>
                                <div class="details">
                                  <span class="heart-it" data-id="ABMM">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use
                                xlink:href="/icons/movies-icons.svg#icon-heart"></use></svg>
                  </span>
                                    <span class="icon-location">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                      <use xlink:href="/icons/common-icons.svg#icon-location"></use>
                    </svg>
                  </span>
                                    <div class="__name ">
                                        <a class="__venue-name" onclick="BMS.Misc.fnBusy(true);"
                                           href="/buytickets/abirami-cinemas-chennai/cinema-chen-ABMM-MT/20170529">
                                            <strong>{!!$value['cinema']!!}</strong>
                                        </a>
                                        <div class="st-distance _none">
                      <span class="__dis-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100"
                             xml:space="preserve">
                                    <use xlink:href="/icons/common-icons.svg#icon-location"></use>
                                  </svg>
                              </span>
                                            <span class="__distance"></span>
                                        </div>

                                    </div>
                                    <address class="__address">

                                    </address>
                                    <div class="__facilities">
                                    </div>
                                </div>
                            </div>
                            <div class="body ">
                                @php
                                    date_default_timezone_set('Asia/Shanghai');

                                @endphp
                                @foreach ($times as $key1=>$value1)

                                    @if ($value1['cinemaID'] == $value['cinemaID'] && $value1['showingTime'] == $value['showingTime'])

                                        @if (strtotime($value1['time']) > strtotime(date('H:i:s')))
                                            <div data-online="Y">
                                                <a class="__showtime-link  time_vrcenter "
                                                   href="/Ticketing/selectSeats/{!!$value1['showingID']!!}">{!! date('h:i a', strtotime($value1['time'])) !!}</a>
                                            </div>
                                        @else
                                            <div data-online="N" class="_sold _past">
                                                <a>{!! date('h:i a', strtotime($value1['time'])) !!}</a></div>
                                        @endif

                                    @endif

                                @endforeach
                            </div>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
