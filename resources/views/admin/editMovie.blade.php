@extends('layouts.l_dashboard')
@section('page_heading', 'movie')

@section('section')

    <div class="col-lg-6">
        <div class="form-group">
            <img src="{{ asset('/img/') }}/{!! $movie->movieImg !!}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
            @php
            $movieID = $movie->movieID;

            @endphp
            <form action="{{route('editMoviePost', ['movieID' => $movieID])}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>File input</label>
                <input id="imgInp" type="file" name="photo">
                <label>Name</label>
                <input name="movieName" class="form-control" placeholder="" value="{!! $movie->name !!}">
                <label>movieID</label>
                <input class="form-control" placeholder="" value="{!! $movie->movieID !!}">
                <label>release Date</label>
                <input name="releaseDate" class="form-control" id="datepicker" placeholder="" value="{!! $movie->releaseDate !!}">
                <label>languages</label>
                <input name="languages" class="form-control" placeholder="" value="{!! $movie->languages !!}">
                <label>running time</label>
                <input name="runningTime" class="form-control" placeholder="" value="{!! $movie->runningTime !!}">
                <label>rating</label>
                <input name="rating" class="form-control" placeholder="" value="{!! $movie->rating !!}">
                <input type="submit" value="Edit">
            </form>



        </div>
    </div>

    <script>

        $(document).ready(function () {
            $( function() {
//                $( "#datepicker" ).datepicker();
//                $( "#datepicker" ).datepicker('setDate', '2017-02-02');
//                $( "#datepicker" ).datepicker("option", "dateFormat", "yy-mm-dd");

                $('#datepicker').datepicker({
                    dateFormat: 'yy-mm-dd'
                });

            } );

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.img-thumbnail').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
        });

    </script>
@stop