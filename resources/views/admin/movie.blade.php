@extends('layouts.l_dashboard')
@section('page_heading', 'movie')

@section('section')



<div class="col-sm-12">
	<div class="panel-body">
	<table class="table tablesorter"  id="myTable">
	<thead>
		<tr>
			<th></th>
			<th>Image</th>
			<th>Name</th>
			<th>movieID</th>
			<th>releaseDate</th>
			<th>languages</th>
			<th>runningTime</th>
			<th>subtitle</th>
			<th>genre</th>
			<th>rating</th>
			<th></th>
		</tr>
	</thead>
{{-- 	<tbody>
	@foreach ($movie as $key=>$value)
		<tr>
			<td><img height="75" src="{{ asset('/img/') }}/{!!$value->movieImg!!}"></td>
			<td>{!!$value->name!!}</td>
			<td>{!!$value->movieID!!}</td>
			<td>{!!$value->releaseDate!!}</td>
			<td>{!!$value->languages!!}</td>
			<td>{!!$value->runningTime!!}</td>
			<td>{!!$value->subtitle!!}</td>
			<td>{!!$value->genre!!}</td>
			<td>{!!$value->rating!!}</td>
			<td><button>EDIT</button></td>
		</tr>
	@endforeach
		
	</tbody> --}}
</table>			</div>
</div>

<script>
    
	$(document).ready(function(){
		 var template = Handlebars.compile($("#details-template").html());

		 var table =  $('#myTable').DataTable({
	    	processing:true,
	    	serverSide: true,
	    	ajax: '{{ route('getMovie') }}',
	    	columns:[
	    	{
                "className":      'details-control',
                "orderable":      false,
                "searchable":     false,
                "data":           null,
                "defaultContent": ''
            },
	    		{data: 'movieImg'},
	    		{data: 'name', name: 'name'},
	    		{data: 'movieID', name: 'movieID'},
	    		{data: 'releaseDate', name: 'releaseDate'},
	    		{data: 'languages', name: 'languages'},
	    		{data: 'runningTime', name: 'runningTime'},
	    		{data: 'subtitle', name: 'subtitle'},
	    		{data: 'genre', name: 'genre'},
	    		{data: 'rating', name: 'rating'},
	    		{data: 'action',  name: 'action', orderable: false, searchable: false}
	    	],
	    	order: [[1, 'asc']]
	    });

		  $('#myTable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( template(row.data()) ).show();
            tr.addClass('shown');
        }
	   	});   
		  //

//		 $('#myTable tbody').on('click', '.edit', function(){
//		 	var a = $(this).attr('movieID');
//		 	$.ajax({
//				url: '/admin/editMovie/'+a,
//				type: 'post',
//				data: '',
//				success: function (data) {
//
//                }
//			})
//		 });

	});    
</script>

@include('Handlebars.DetailsTemplate')
@stop