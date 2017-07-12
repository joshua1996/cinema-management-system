<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>SB Admin v2.0 in Laravel 5</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/handlebars-v4.0.10.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
	<link rel="stylesheet" href="{{ asset("css/font-awesome.css") }}">
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset("css/styles.css") }}" />
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
	
	 <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
</head>
<body>
	@yield('body')

</body>
</html>