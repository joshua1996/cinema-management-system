@extends('master') @section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::to('/css/movie-synopsis-v1-b-a8dfe4f789.css') }}"> @endsection @section('sidebar')

<div class="banner-main synopsis-banner">
    <!--  <img src="/img/hp_showcase/antman.jpg" alt="Ant Man" class="__bg"> -->
    <div id="imgBanner" style="background-image:url('/img/movie/banner/{!!$movie['movieBanner']!!}')" class="cover-image"></div>
    <div class="__player-btn __play">

    </div>
    <div class="__overlay"></div>
</div>

<div class="movie-synopsis-content-wrapper ">
    <div class="mv-synopsis-wrapper">
        <div class="poster-container-wrapper">
            <div class="poster-container">
                <div class="poster wow" style="visibility: visible;">

                    <img id="poster" src="/img/{!!$movie['movieImg']!!}">
                </div>

            </div>

        </div>
        <div class="details">
            <div class="general-info">

                <div class="name-rating">

                    <h1 class="__name" id="eventTitle" title="Brindhaavanam">{!!$movie['name']!!}</h1>

                </div>
                <div class="certificate-languages">
                    <span class="__censor">

                            </span>
                    <a href="/chennai/movies/tamil" class="__language" content="Tamil">{!!$movie['languages']!!}</a>
                    <br> @php $genre = $movie['genre']; $str = explode('/', $genre); @endphp @foreach ($str as $key=>$value)
                    <span itemprop="genre" content="Drama" class="__genre-tag">{!!$value!!}</span> @endforeach </div>
                <div class="date-time">
                    <div class="calander-date">
                        <span class="__calander-icon">

                                  </span>

                        <span class="__release-date">{!!$movie['releaseDate']!!}</span>
                    </div>

                    <div class="clock-time">

                        <span class="__time">{!!$movie['runningTime']!!} mins</span>
                    </div>
                </div>
            </div>

            <div class="error-text">

            </div>

            <div class="summary-reviews">
                <div class="tabs">
                    <span class="__tab _active" id="summary">Summary</span>

                </div>
                <div id="mv-summary" class="tab-content">
                    <div class="__heading">SYNOPSIS</div>
                    <div class="synopsis">
                        <blockquote cite="http://in.bookmyshow.com/movies/brindhaavanam/ET00057481">{!!$movie['synopsis']!!}</blockquote>
                    </div>
                    <div class="cast" id="cast">
                        <div class="__heading">LEAD CAST</div>
                        <div class="cast-members showcase" id="cast-carousel">
                            <div class="showcase-carousel slick-initialized slick-slider">

                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 996px; transform: translate3d(0px, 0px, 0px);"><span itemprop="actor" itemscope="" itemtype="http://schema.org/Person" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 164px;"><a class="member-name banner-container" itemprop="url" href="/person/arulnithi-tamilarasu/1043910"><div class="__cast-member" itemprop="name" content="Arulnithi Tamilarasu"><div class="__cast-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;"><meta itemprop="image" content="https://in.bmscdn.com/iedb/artist/images/website/poster/large/arulnithi-tamilarasu-1043910-24-03-2017-17-48-52.jpg"><img alt="Arulnithi Tamilarasu" title="Arulnithi Tamilarasu" data-error="//in.bmscdn.com/webin/profile/user.jpg" class="slick-loading" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/arulnithi-tamilarasu-1043910-24-03-2017-17-48-52.jpg"></div><br>Arulnithi Tamilarasu</div></a></span></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="cast" id="crew">
                        <div class="__heading">CREW</div>
                        <div class="cast-members showcase" id="crew-carousel">
                            <div class="showcase-carousel slick-initialized slick-slider">

                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 1494px; transform: translate3d(0px, 0px, 0px);"><span itemprop="director" itemscope="" itemtype="http://schema.org/Person" class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 164px;"><a class="member-name banner-container" itemprop="url" href="/person/radha-mohan/1758"><div class="__cast-member" itemprop="name" content="Radha Mohan"><div class="__cast-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;"><meta itemprop="image" content="https://in.bmscdn.com/iedb/artist/images/website/poster/large/radha-mohan-1758-24-03-2017-17-35-08.jpg"><img alt="Radha Mohan" title="Radha Mohan" data-error="//in.bmscdn.com/webin/profile/user.jpg" class="slick-loading" src="//in.bmscdn.com/iedb/artist/images/website/poster/large/radha-mohan-1758-24-03-2017-17-35-08.jpg"></div><br>Radha Mohan<br><span class="__role">Director, Writer, Screenplay</span></div>
                                    </a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">

        <div class="right-content">
            <div class="new-ad-spot-syn">

                <!-- /118335522/BMS_MoviesSynopsis_300x250 -->
                <div id="div-gpt-ad-1476078104949-0" style="height:250px; width:300px; margin: auto;">

                </div>
            </div>
            <div class="tab-content">
                <div class="Corporate-Bookings" style="display: block;">
                   <a href="/showtimes/byMovie/{!!$movie['movieID']!!}/{!!$firstDay['showingTime']!!}" class="showtimes btn _cuatro" >Booking Now</a>
                </div>
             
            </div>

        </div>

    </div>
</div>
</div>

<!-- Ends -->

<!-- Viewed also Viewed Implementation -->

{{-- {!!$movie->name!!}
<div>
    <img src="{{ URL::to('/img/'.$movie['movieImg']) }}" />
</div>
<div class="">
    @if ($movie['rating'] != '')
    <img src="{{ URL::to('/img/rating/') }}/rating-{!!$movie['rating']!!}.png" alt=""> @endif

    <table>
        <tr>
            <td>Release Date: </td>
            <td>{!! $movie['releaseDate'] !!}</td>
        </tr>
        <tr>
            <td>Language:</td>
            <td>{!!$movie['languages']!!}</td>
        </tr>
        <tr>
            <td>Subtitle</td>
            <td>{!!$movie['subtitle']!!}</td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>{!!$movie['genre']!!}</td>
        </tr>
        <tr>
            <td>Running Time</td>
            <td>{!!$movie['runningTime']!!} minutes</td>
        </tr>
        <tr>
            <td>Director</td>
            <td>{!!$movie['director']!!}</td>
        </tr>
        <tr>
            <td>Cast</td>
            <td>{!!$movie['cast']!!}</td>
        </tr>
        <tr>
            <td>Distributor</td>
            <td>{!!$movie['distributor']!!}</td>
        </tr>
        <tr>
            <td>Synopsis</td>
            <td>{!!$movie['synopsis']!!}</td>
        </tr>
    </table>
    <a href="{{ URL::to('/showtimes/byMovie') }}/{!!$movie['movieID']!!}">Buy Ticket</a>
</div> --}} @endsection