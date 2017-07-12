@extends('master') @section('title', 'dd') @section('sidebar')

<div class="top-banner-wrapper" style="position: relative;">
    <div class="play-bg"></div>
    <div class="showcase" id="showcase-primary">
        <div class="section-body showcase-carousel slick-initialized slick-slider">
            <button type="button"  class="slick-prev slick-arrow" style="display: block;">
                
            </button>
         {{--    <div aria-live="polite" class="slick-list draggable" style="padding: 0px 50px;">
                <div class="slick-track" style="opacity: 1; width: 10000px; transform: translate3d(-2552px, 0px, 0px);">
                    <div class="banner-container slick-slide slick-cloned" >
                        <div class="showcase-card"><img class="__bg" ">
                            <div class="play-trailer __play">
                              
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> --}}
            <ul class="bxslider">
  <li><img src="http://bxslider.com/images/730_200/hill_trees.jpg" /></li>
  <li><img src="http://bxslider.com/images/730_200/me_trees.jpg" /></li>
  <li><img src="http://bxslider.com/images/730_200/houses.jpg" /></li>
</ul>
            <button type="button" class="slick-next slick-arrow" style="display: block;">
              
            </button>
            <ul class="slick-dots" style="display: block;">
                <li class="slick-active">
                    <button type="button" >1</button>
                </li>
                <li >
                    <button type="button" >2</button>
                </li>
            </ul>
        </div>
        <div class="showcase-overlay ">
            <span class="__dismiss icon-cancel _none">

      </span>

        </div>
    </div>
</div>

<div class="page-content-wrapper ">
    <div class="movies-landing">
        <div class="mv-type-selection">
            <div class="mv-section-header">
                <div class="mv-section-head">
                    <div class="__section-head">
                        MOVIES
                        <div class="__red-bar"></div>
                    </div>
                    <div class="__tab-row">
                        <div class="btn-group">
                            <a class="btn _uno tab-btn _active" id="now-showing-btn" href="/movie/now-showing">NOW SHOWING</a>
                            <a class="btn _uno tab-btn " id="coming-soon-btn"  href="/movie/coming-soon" >COMING SOON</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEOF IF CONDITION TO HIDE NOW SHOWING DATA ON COMING SOON PAGE -->
            <div class="tab-content-wrapper _active" id="now-showing" name="now-showing">
                <section class="now-showing filter-now-showing">

                    <!-- Movie cards -->
                    <div class="row">
                        <!-- Filter for non-touch device -->
                        <div class="__col-filters">
                            <!-- Filters Start -->
                            <div class="search-container search-pagewise">
                                <div class="__search">
                                    <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                                        <input type="text" id="ajax-typeahead" class="__seach-input typeahead tt-input" placeholder="Search for Movies" autocomplete="off" style="position: relative; vertical-align: top; background-color: transparent;">
                                        <div class="tt-menu tt-empty" style="position: absolute;top: 100%;left: 0px;z-index: 100;display: none;">
                                        <div class="tt-dataset tt-dataset-ajax-search">
                                            <div class="tt-category">Movies</div>

                                        </div>
                                        </div>
                                    </span>
                                    <div class="__search-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                            <use xlink:href="/icons/common-icons.svg#icon-search"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="__heading">
                                <span class="__heading-text">Filter By</span>
                                <span class="__filters-clear" style="display: none;">CLEAR ALL <span>
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-cancel"></use></svg>
                        </span>
                                </span>
                            </div>

                            <div class="filters">
                                <div class="__filter-title">
                                    <label>LANGUAGE</label>
                                </div>
                                <div class="language __filter-list">
                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="Chinese"> <span class="checkbox-label"><a class="_anchor-filter">Chinese</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="English"> <span class="checkbox-label"><a class="_anchor-filter">English</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="Malay"> <span class="checkbox-label"><a class="_anchor-filter" >Malay</a></span>
                                        </span>
                                    </p>
                                    <!-- <span class="__more-filters"> + More</span> -->
                                </div>
                            </div>

                            <div class="filters genre-filter">
                                <div class="__filter-title">
                                    <label>GENRE</label>

                                </div>

                                <div class="genre __filter-list">

                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="Action"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/action">Action</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="adventure" class="__checkbox">
                              <input type="checkbox" value="Adventure"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/adventure">Adventure</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="animation" class="__checkbox">
                              <input type="checkbox" value="Animation"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/animation">Animation</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="biography" class="__checkbox">
                              <input type="checkbox" value="Biography"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/biography">Biography</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="comedy" class="__checkbox">
                              <input type="checkbox" value="Comedy"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/comedy">Comedy</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="drama" class="__checkbox">
                              <input type="checkbox" value="Drama"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/drama">Drama</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="family" class="__checkbox">
                              <input type="checkbox" value="Family"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/family">Family</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="fantasy" class="__checkbox">
                              <input type="checkbox" value="Fantasy"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/fantasy">Fantasy</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="horror" class="__checkbox">
                              <input type="checkbox" value="Horror"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/horror">Horror</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="romance" class="__checkbox">
                              <input type="checkbox" value="Romance"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/romance">Romance</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="sci-fi" class="__checkbox">
                              <input type="checkbox" value="Scifi"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/scifi">Sci-fi</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="sports " class="__checkbox">
                              <input type="checkbox" value="Sports"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/sports">Sports </a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span data-filter="thriller" class="__checkbox">
                              <input type="checkbox" value="Thriller"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/thriller">Thriller</a></span>
                                        </span>
                                    </p>
                                    <!-- <span class="__more-filters"> + More</span> -->
                                </div>
                                <a href="javascript:;" class="__overlay">
                                    <i class="__icon icon-arrow-down"></i>
                                    <!-- &nbsp;&nbsp;<i class="__icon icon-arrow-down"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><use xlink:href="/icons/common-icons.svg#icon-arrow-down-new"></use></svg></i> -->
                                </a>
                            </div>

                            <div class="filters">
                                <div class="__filter-title">
                                    <label>FORMAT</label>
                                </div>
                                <div class="format __filter-list">
                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="2D"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/2d">2D</a></span>
                                        </span>
                                    </p>
                                    <p class="__filter">
                                        <span class="__checkbox">
                              <input type="checkbox" value="3D"> <span class="checkbox-label"><a class="_anchor-filter" href="/chennai/movies/3d">3D</a></span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Filters End -->
                        <div class="__col-now-showing">
                            <!-- Just for you starts -->
                          
                            <div class="mv-row">
                                @foreach ($showing as $key => $value)

                                <div class="wow fadeIn movie-card-container" style="visibility: visible; animation-name: fadeIn;" languages="{!!$value['languages']!!}" genre="{!!$value['genre']!!}">
                                    <div class="movie-card ns-card-single">
                                        <div class="card-container">
                                            <div class="poster-container-img">
                                                <img class="__poster" src="{{URL::to('/img/')}}/{!!$value['movieImg']!!}">
                                            </div>
                                            <div class="poster-container">
                                                <div class="__overlay"></div>
                                                <div class="__recommended">
                                                    <div class="__container">
                                                        <span class="__recommended-icon">=
            </span>
                                                        <span class="__title">
              <span>RECOMMENDED</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="show-more-info non-touch">
                                                    <ul class="info-list">
                                                        <li class="info-list-elements"><span class="tooltip">INFO</span><a href="/movie/{!!$value['movieID']!!}"><span class="info-icon white-icon"></span></a></li>
                                                        <li class="info-list-elements"><span class="tooltip">TRAILER</span><a href="/chennai/movies/brindhaavanam/ET00057481#trailer"><span class="trailer-icon white-icon"></span></a></li>
                                                    </ul>
                                                   
                                                </div>

                                            </div>
                                            <div class="detail">
                                                <div class="__name overflowEllipses">
                                                    <a class="__movie-name" href="/movie/{!!$value['movieID']!!}">{!!$value['name']!!}</a>
                                                </div>

                                                <div class="languages">
                                                    <ul class="language-list">
                                                        <li class="__language">{!!$value['languages']!!}</li>
                                                    </ul>
                                                </div>
                                                <div class="genre-list">
                                                    @php $genre = $value['genre']; $str = explode('/', $genre); @endphp @foreach ($str as $key=>$value1)
                                                    <a href="/chennai/movies/drama">
                                                        <div class="__rounded-box __genre" >{!!$value1!!}</div>
                                                    </a>
                                                    @endforeach

                                                </div>
                                                <div class="show-details">
                                                    <div class="cinema">

                                                        <div class="__location overflowEllipses"></div>
                                                    </div>
                                                    <div class="showtimes">

                                                        <a href="" class="more-showtimes"><small>more shows</small></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="experience-holder" style="z-index: -1;">
                                                <div class="experience-list">
                                                    <section class="language-based-formats">
                                                        <h2 class="header">Tamil</h2>
                                                        <div class="content"><a href="/buytickets/brindhaavanam-chennai/movie-chen-ET00057481-MT/20170529/"><span class="__format">2D</span></a></div>
                                                    </section>
                                                </div>

                                            </div>
                                            <div class="book-button">
                                                <a href="/showtimes/byMovie/{!!$value['movieID']!!}/{!!$value['showingTime']!!}">
                                                    <div class="__container">BOOK NOW</div>
                                                </a>
                                            </div>
                                            <span class="hideExperience">
        <span class="__text icon">

        </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                          
                        </div>
                    </div>
                </section>

                <!-- Reviews and Top movies start -->

                <!-- Featured Trailers -->
                <section class="featured-trailers" id="next-change"></section>
                <div class="future-info">
                    <div class="wrapper">
                        <div class="footer_link_container">
                        </div>
                        <div class="divider">
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>

                <!-- Featured trailer Ends -->
                <!--</div>
        </div>-->
                <!-- END OF IF CONDITION TO HIDE NOW SHOWING DATA ON COMING SOON PAGE -->
                <!-- END OF IF CONDITION TO HIDE COMING SOON DATA ON NOW SHOWING PAGE -->
            </div>
        </div>
        <!-- movies landing ends -->

    </div>
</div>

<script>
  $(document).ready(function(){

     $('.genre input[type=checkbox], .language input[type=checkbox]').on('change', function(){
         if ($('.language input:checkbox:checked').length == 0) {
             $('.__filters-clear').css('display', 'none');
        }else{
            $('.__filters-clear').css('display', 'block');
        }
        var re = new RegExp($('.language input[type= checkbox]:checked, .genre input[type=checkbox]:checked').map(function() {
                              return this.value;
                           }).get().join("|") );
        console.log(re);
        $('.wow.fadeIn.movie-card-container').each(function(){
            var $this = $(this);
            $this[re.source!="" && (re.test($this.attr("languages")) || re.test($this.attr("genre") )) ? "show": "hide"]();
           // $this[re.source!="" && re.test($this.attr("genre") ) ? "show": "hide"]();
        });
     });

    $('.__filters-clear').on('click', function(){
        $('.__filters-clear').css('display', 'none');
        $('.language input[type=checkbox]').each(function(){
            $(this).prop('checked', false);
        });
        $('.wow.fadeIn.movie-card-container').each(function(){
            var $this = $(this);
            $this["show"]();
        });
    });

    $('#ajax-typeahead').on('input', function(){
        if ($(this).val() != '') {
                 var data = {
            movie : $(this).val()
        }
        $.ajax({
                url: '/searchMovie',
                type: 'get',
                data: data,
                success: function (data) {

                    $('.tt-menu.tt-empty').show();
                    $('.tt-menu.tt-empty .tt-dataset.tt-dataset-ajax-search').empty();
                    $.each(data, function(index, value){
                        $('.tt-menu.tt-empty .tt-dataset.tt-dataset-ajax-search').append('<div class="tt-suggestion tt-selectable"><strong class="tt-highlight">'+value.name+'</div>');
                    });
               }
            });
    }else{
        $('.tt-menu.tt-empty').hide();
    }
   
    });

    $('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
    //
  });
</script>

{{-- <a href="{{URL::to('/movie/now-showing')}}">NOW SHOWING</a>
<a href="{{URL::to('/movie/coming-soon')}}">COMING SOON</a>

<select class="selectCinema" name="">
    <option value="all">All Cinema</option>
    @foreach ($cinema as $key => $value)
    <option value="{!!$value['cinemaID']!!}">{!!$value['cinema']!!}</option>
    @endforeach
</select>
<select class="selectRating" name="">
    <option value="all">All Ratings</option>
    <option value="U">U</option>
    <option value="P13">P13</option>
    <option value="18">18</option>
</select>
<select class="selectLanguage" name="">
    <option value="all">All languages</option>
    <option value="English">English</option>
    <option value="Cantonese">Cantonese</option>
    <option value="Mandarin">Mandarin</option>
</select>

<section class="movieList">
    @foreach ($movie as $key => $value)
    <article>
        <a><img src="{!! URL::to('/img/'.$value['movieImg']) !!}" /></a>
        <p>
            <a href='/movie/{!! $value[' movieID '] !!}'>{!! $value['name'] !!}</a>
        </p>
    </article>
    @endforeach
</section> --}} @endsection