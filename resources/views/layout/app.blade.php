<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="TBD">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}"/>
    <title>ST Company</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet" type='text/css' media="all"/>
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet" type='text/css' media="all"/>

    <!--     Fonts and icons     -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" type='text/css' media="all">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css' media="all">
</head>
<body class="landing-page">

<div class="loading ">
    <div class="loading-container">
        <p>Fetching...</p>
        <img class="loader" src="{{ asset('img/rubik.svg') }}" alt="Loading..."/>
    </div>
</div>

@extends('layout.navbar')

<div class="wrapper">
    @yield('content')

    @extends('layout.footer')
</div>
</body>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<script>
    particlesJS.load('particles-js', 'assets/particles.json');
</script>

<!-- Cookie Consent by https://www.TermsFeed.com -->
<script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/3.0.0/cookie-consent.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"en","website_name":"stcompany.org"});
    }, 5000);
</script>

<noscript>Cookie Consent by <a href="https://www.TermsFeed.com/">TermsFeed Generator</a></noscript>
<!-- End Cookie Consent -->
</html>
