<!DOCTYPE html>
<html class="no-js"  lang="en">
<head>
    <?php  date_default_timezone_set('Asia/Colombo');  ?>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SL Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('layouts.frontend_n.header')
</head>
<body>
    @include('layouts.frontend_n.nav')



    @yield('content')




    @include('layouts.frontend_n.footer')
</body>
</html>