@extends('master')

@section('sidebar')
 <div style="    margin-top: 113px;">
 	 <p>done</p>
  <p>this is your movie code</p>
  <p>{!! $userid !!}</p>
  <a href="{{ route('index') }}">back</a>
 </div>
@endsection
