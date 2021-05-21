<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('title')</title> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

</head>
<body>
@include('header')
@include('main')
@yield('content')

<script src="{{ asset('js/app.js') }}" type="text/js"></script>
    
</body>
</html>
