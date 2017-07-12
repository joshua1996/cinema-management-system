@extends('master')

@section('sidebar')

  <script type="text/javascript">
    $(document).ready(function(){
    //  console.log('{{ Route::input('cinemaID') }}');
      $('.selectMovie').on('change', function(){
        var cinema = '{{ Route::input('cinemaID') }}';
        $.ajax({
          type:'post',
          url:'/movieGetSession',
          data:{cinema: cinema, movie: $('.selectMovie').val()},
          success:function(data){
            console.log(data);
            $('.selectSession').empty().append('<option disabled="" selected="" value="">Select a Session</option>');
            $.each(data, function(index, value){
              var weekday=new Array(7);
              weekday[0]="Sunday";
              weekday[1]="Monday";
              weekday[2]="Tuesday";
              weekday[3]="Wednesday";
              weekday[4]="Thursday";
              weekday[5]="Friday";
              weekday[6]="Saturday";

              var d = new Date(value.showingTime);
              var n = weekday[d.getDay()];

              $('.selectSession').append($('<option>').val(value.showingTime).text(value.showingTime + ' (' + n + ')'));
            });
          }
        });
      });

      $('.selectSession').on('change', function(){
        var regexExp = /(\d+)[-.\/](\d+)[-.\/](\d+)/g;
        var matches = regexExp.exec($('.selectSession').val());
        var data = {
          showingTime: $('.selectSession').val(),
          cinemaID: '{{ Route::input('cinemaID') }}',
          movieID: $('.selectMovie').val()
        }
        console.log(data);
        $.ajax({
          type:'post',
          url:'/sessionGetTime',
          data: data,
          success:function(e){
            $('.selectTime').empty().append('<option disabled="" selected="" value="">Select a Time</option>');
            $.each(e, function(index, value){
                $('.selectTime').append($('<option>').val(value.time).text(value.time));
            });
          }
        });
      });

      $('.buyTicket').on('click', function(){
        var data = {
          movie:$('.selectMovie').val(),
          cinema: '{{ Route::input('cinemaID') }}',
          showingTime: $('.selectSession').val(),
          time: $('.selectTime').val()
        }
        $.ajax({
          type:'post',
          url:'/buyTicket',
          data:data,
          success:function(data){
              window.location.href = '{{URL::to('/Ticketing/selectSeats')}}' + '/' + data.ID;
          }
        })
      });

      //
    });
  </script>

  <select class="selectMovie">
    <option disabled selected value>Select a Movie</option>
    @foreach ($showing as $key => $showingList)
    <option value="{{$showingList['movieID']}}">{{$showingList['name']}}</option>
    @endforeach
  </select>

<div class="">
  <select class="selectSession">
    <option disabled selected value>Select a Session</option>
  </select>
</div>

  <div class="">

    <select class="selectTime" name="">
      <option disabled selected value="">Select a Time</option>
    </select>
  </div>
  <button class="buyTicket">Continue To Buy Tickets</button>
@endsection
