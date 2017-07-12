
@foreach ($showing as $key=>$value)
   <div class="wow fadeIn movie-card-container" style="visibility: visible; animation-name: fadeIn;" languages="{!!$value['languages']!!}">
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
                        <div class="__rounded-box __genre">{!!$value1!!}</div>
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