<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Fast News</title>
    <link rel="stylesheet" type="text/css" href="/theme/frontend/css/style.css" />
</head>

<body style="background-image: url('/images/bg.jpg'); background-size: cover; background-repeat: no-repeat;">
    <!-- BEGIN wrapper -->
    <div id="wrapper">
        <!-- BEGIN header -->
        <div id="header">
            <ul>
                <li class="f"><a href="/">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="page.html">Demo Page</a></li>
                <li><a href="contact.html">Contact Page</a></li>
            </ul>
            <p class="links">Subscribe: <a href="/">Posts</a> | <a href="/">Comments</a> | <a
                    href="/">Email</a> </p>
            <div class="break"></div>
            <div class="logo">
                <h1><a href="/">The Fast News</a></h1>
                <p>Breaking News Portal</p>
            </div>
            <div class="ad468x60"> <a href="/"><img width="300" height="80"
                        src="https://d2c0db5b8fb27c1c9887-9b32efc83a6b298bb22e7a1df0837426.ssl.cf2.rackcdn.com/17460994-logo-1200x432.jpeg#1200x432"
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
            </ol>
            <div class="break"></div>
        </div>
        <!-- END header -->
        <!-- BEGIN content -->
        @yield('content')
        <!-- END content -->
        <!-- BEGIN sidebar -->
        <div id="sidebar">
            <!-- begin search -->
            <form class="search" action="/">
                <input type="text" name="s" id="s" />
                <button type="submit">Search</button>
            </form>
            <!-- end search -->
            <div class="wrapper">
                <!-- begin popular posts -->
                <h2>Popular Posts</h2>
                <ul>
                    {{-- @foreach ($isPopular as $item)
                        <li><a href="/post/{{ $item->id }}">{{ substr($item->title, 0, 35) }}...</a></li>
                    @endforeach --}}
                    <li><a href="/">Make Money Online Creating Websites</a></li>
                    <li><a href="/">Top 100 Internet Marketing Tips</a></li>
                    <li><a href="/">Tutorial: How to add Videos in your Post</a></li>
                    <li><a href="/">Sample Post Unordered List</a></li>
                    <li><a href="/">Sample Post Blockquote</a></li>
                </ul>
                <!-- end popular posts -->
                <!-- begin flickr photos -->
                <h2>Flickr Photos</h2>
                <div class="flickr"> <a href="/"><img src="/theme/frontend/images/_thumb3.jpg"
                            alt="" /></a> <a href="/"><img src="/theme/frontend/images/_thumb4.jpg"
                            alt="" /></a> <a href="/"><img src="/theme/frontend/images/_thumb5.jpg"
                            alt="" /></a> <a href="/"><img src="/theme/frontend/images/_thumb6.jpg"
                            alt="" /></a> <a href="/"><img src="/theme/frontend/images/_thumb7.jpg"
                            alt="" /></a> <a href="/"><img src="/theme/frontend/images/_thumb8.jpg"
                            alt="" /></a> </div>
                <!-- end flickr photos -->
                <!-- begin featured video -->
                <h2>Live Weather</h2>
                <div id="ww_cf7b9dea5707a" v='1.3' loc='auto'
                    a='{"t":"responsive","lang":"id","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","sl_tof":"3"}'>
                    <a href="https://weatherwidget.org/" id="ww_cf7b9dea5707a_u" target="_blank">Weather Widget</a>
                </div>
                <script async src="https://app3.weatherwidget.org/js/?id=ww_cf7b9dea5707a"></script>
                <!-- end featured video -->
                <!-- begin tags -->
                <h2>Tags</h2>
                <div class="tags"> </div>
                <!-- end tags -->
                <!-- BEGIN left -->
                <div class="l sbar">
                    <!-- begin categories -->
                    <h2>Categories</h2>
                    <ul>
                        <li><a href="/category/2">World</a></li>
                        <li><a href="/category/4">Technology</a></li>
                        <li><a href="/category/1">Cybersecutiy</a></li>
                        <li><a href="/category/3">Business</a></li>
                    </ul>
                    <!-- end categories -->
                    <!-- begin pages -->
                    <h2>Pages</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/">About</a></li>
                        <li><a href="/">Contact</a></li>
                    </ul>
                    <!-- end pages -->
                </div>
                <!-- END left -->
                <!-- BEGIN right -->
                <div class="r sbar">
                    <!-- begin archives -->
                    <h2>Archives</h2>
                    <ul>
                        <li><a href="/">August 2008</a></li>
                        <li><a href="/">July 2008</a></li>
                        <li><a href="/">June 2008</a></li>
                        <li><a href="/">May 2008</a></li>
                        <li><a href="/">April 2008</a></li>
                        <li><a href="/">March 2008</a></li>
                    </ul>
                    <!-- end archives -->
                    <!-- begin blogroll -->
                    <h2>Blogroll</h2>
                    <ul>
                        <li><a href="/">Carlos</a></li>
                        <li><a href="/">Digital Point Forum</a></li>
                        <li><a href="/">Eric's Photo Gallery</a></li>
                        <li><a href="/">Fashion Trends</a></li>
                        <li><a href="/">Google Scoreboard</a></li>
                        <li><a href="/">Marketing Forum</a></li>
                    </ul>
                    <!-- end blogroll -->
                    <!-- begin meta -->
                    {{-- <h2>Meta</h2>
                    <ul>
                        <li><a href="/">Login</a></li>
                    </ul> --}}
                    <!-- end meta -->
                </div>
                <!-- END right -->
            </div>
        </div>
        <!-- END sidebar -->
        <!-- BEGIN footer -->
        <div id="footer" style="margin-left: -6px; margin-right: -6px">
            <p>Copyright &copy; {{ now()->year }} - <a href="/">The Fast News</a> &middot; All Rights Reserved
            </p>
            <p>Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a>
                {{-- | Get More <a href="/">Free CSS Templates</a></p> --}}
        </div>
        <!-- END footer -->
    </div>
    <!-- END wrapper -->
    {{-- <div align=center>This template downloaded form <a href='/'>free website templates</a></div> --}}
</body>

</html>
