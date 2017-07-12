@extends('master')

@section('sidebar')
<h1>{!!$cinema['cinema']!!}</h1>
<div class="">
  <img src="{{URL::to('/img/cinemas/')}}/{!!$cinema['cinemaImg']!!}" alt="">
  <label for="">{!!$cinema['address']!!}</label>
</div>
<a href="{{URL::to('/showtimes/byCinema/')}}/{!!$cinema['cinemaID']!!}">BUY TICKET</a>
<div class="">
  <p>Number of Hall: {!!$cinema['hall']!!}</p>
</div>
@endsection
