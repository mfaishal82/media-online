<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/theme/frontend/css/style.css" />
</head>

<body style="background-image: url('/images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <!-- BEGIN wrapper -->
    <div id="wrapper">
        <!-- BEGIN header -->
        <div id="header">
            <ul>
                <li class="f"><a href="/">Home</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact-us">Contact Page</a></li>
            </ul>
            <p class="links">Subscribe: <a href="/">Posts</a> | <a href="/">Comments</a> | <a
                    href="/">Email</a> </p>
            <div class="break"></div>
            <div class="logo">
                <h1><a href="/">The Fast News</a></h1>
                <p>Breaking News Portal</p>
            </div>
            <div class="ad468x60"> <a href="/"><img width="300" height="80"
                        src="/images/name-logo.jpeg"
                        alt="" /></a> </div>
            <div class="break"></div>
            <ol>
                <li><a href="/">Home</a></li>
                {{-- @foreach ($categories as $item)
                    <li><a href="/category/{{ $item->id }}">{{ $item->name }}</a></li>
                @endforeach --}}
                <li><a href="/category/2">World</a></li>
                <li><a href="/category/4">Technology</a></li>
                <li><a href="/category/1">Cybersecutiy</a></li>
                <li><a href="/category/3">Business</a></li>
                <li><a href="/index">Index</a></li>
            </ol>
            <div class="break"></div>
        </div>
        <!-- END header -->
        <!-- BEGIN content -->
        @yield('content')
        <!-- END content -->
        <!-- BEGIN sidebar -->
        @include('sections.frontend-sidebar')
        <!-- END sidebar -->
        <!-- BEGIN footer -->
        @include('sections.frontend-footer')
        <!-- END footer -->
    </div>
    <!-- END wrapper -->
    {{-- <div align=center>This template downloaded form <a href='/'>free website templates</a></div> --}}
</body>

</html>
