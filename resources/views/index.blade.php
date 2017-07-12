@extends('master')
@section('title', '首页')

@section('sidebar')
    {{-- @parent --}}
<script type="text/javascript">

$( document ).ready(function() {

    $('.selectMovie').on('change', function(){
      var movie = $(this).val();
      $.ajax({
               type:'POST',
               url:'/movieGetCinema',
               data:{movie : movie},
               success:function(data){
                  console.log(data);
                  console.log(data[0].cinemaID);
                  $('.selectCinema').empty().append('<option disabled selected value>Select a Cinema</option>');
                    $('.selectSession').empty().append('<option disabled="" selected="" value="">Select a Session</option>');
                  $.each(data, function(index, value){
                    $('.selectCinema').append($('<option>').val(value.cinemaID).text(value.cinema));
                  });
               }
            });
    });

  $('.selectCinema').on('change', function(){
    var cinema = $(this).val();
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
      cinemaID: $('.selectCinema').val(),
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
      movie: $('.selectMovie').val(),
      cinema: $('.selectCinema').val(),
      showingTime: $('.selectSession').val(),
      time: $('.selectTime').val()
    }
    $.ajax({
      type:'post',
      url:'/buyTicket',
      data:data,
      success:function(data){
        //console.log(data);
          window.location.href = '{{URL::to('/Ticketing/selectSeats')}}' + '/' + data.ID;
      }
    })
  });

  function tConvert(time) {
    // Check correct time format and split into components
    time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

    if (time.length > 1) { // If time format correct
      time = time.slice (1);  // Remove full string match value
      time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
      time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join (''); // return adjusted time or original string
  }

  $(function(){
       $("#slides").slidesjs({
         width: 940,
         height: 528
       });
     });

});


</script>


<div id="slides">
   <img src="http://placehold.it/940x528">
   <img src="http://placehold.it/940x528">
   <img src="http://placehold.it/940x528">
   <img src="http://placehold.it/940x528">
   <img src="http://placehold.it/940x528">
 </div>

    <p>
      index
    </p>

    <div>
      <p>
        SELECT MOVIE
      </p>
      <select class="selectMovie">
        <option disabled selected value>Select a Movie</option>
        @foreach ($showing as $key => $showingList)
        <option value="{{$showingList['movieID']}}">{{$showingList['name']}}</option>
        @endforeach
      </select>
    </div>
    <div>
      <p>
        SELECT CINEMA
      </p>
      <select class='selectCinema'>
        <option disabled selected value>Select a Cinema</option>
      </select>

      <p>
        SELECT A SESSION
      </p>
      <select class="selectSession">
        <option disabled selected value>Select a Session</option>
      </select>

      <div class="">
        <label for="">SELECT A TIME</label>
        <select class="selectTime" name="">
          <option disabled selected value="">Select a Time</option>
        </select>
      </div>
      <button class="buyTicket">Continue To Buy Tickets</button>
    </div>
@endsection
