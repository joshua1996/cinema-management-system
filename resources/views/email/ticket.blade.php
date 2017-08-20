<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://jeromeetienne.github.io/jquery-qrcode/src/jquery.qrcode.js"></script>
    <script type="text/javascript" src="http://jeromeetienne.github.io/jquery-qrcode/src/qrcode.js"></script>
</head>
<body>

This is Your Movie Ticket ID <br>

<div id="qrcode"></div>
<h1>{{ $data[0]->userid }} </h1>
<script>
    $(document).ready(function () {
        $('#qrcode').qrcode("{{ $data[0]->userid }} ");
    });
</script>
</body>
</html>