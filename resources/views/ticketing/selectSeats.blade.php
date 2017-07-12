@extends('master')
@section('title', 'myCinema')
@section('sidebar')

  <script type="text/javascript">
    $(document).ready(function(){
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
      $('.time').html(tConvert('17:00:00'));
    });
  </script>
<p>
  {!!$showing->cinema!!}
</p>
<p>{!!$showing->address!!}</p>
<p>{!!$showing->name!!}</p>
<p class="time">{!! $showing->time !!}</p>
<p>{!!$showing->showingHall!!}</p>
@endsection