<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('asset/backend/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


</head>
<body>
@yield('content')
<!--   Core JS Files   -->
<script src="{{asset('asset/backend/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/backend/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('asset/backend/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

<script>

    $(document).ready(function() {
        $.noConflict();
        $('#table').DataTable();
    } );
</script>

</body>
</html>
