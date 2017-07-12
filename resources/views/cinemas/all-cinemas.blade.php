@extends('master')

@section('sidebar')
@foreach ($cinema as $key => $value)
  <div class="">
    <a href="{{URL::to('/cinemas')}}/{!!$value['cinemaID']!!}"><img src="{{URL::to('/img/cinemas/')}}/{!!$value['cinemaImg']!!}" alt=""></a>
    <div class="">
      <a href="{{URL::to('/cinemas')}}/{!!$value['cinemaID']!!}">{!!$value['cinema']!!}</a>
      <p>{!!$value['address']!!}</p>
      <a href="{{URL::to('/showtimes/byCinema/')}}/{!!$value['cinemaID']!!}">BUY TICKETS</a>

    </div>
  </div>
@endforeach
@endsection
