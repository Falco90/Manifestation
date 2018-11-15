<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Open+Sans+Condensed:300|Raleway|Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href={{ asset('css/main.css') }}>
</head>
<body>
<div class="gradient-overlay"></div>
@include('includes.navbar')
        <div class="container">
        @yield('content')
        </div>
</body>
</html>