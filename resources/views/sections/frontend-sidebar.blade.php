<div id="sidebar">
    <!-- begin search -->
    <form class="search" action="/search">
        <input type="text" name="keyword" id="s" placeholder="Search here..." />
        <button type="submit" style="cursor: pointer;">Search</button>
    </form>
    <!-- end search -->
    <div class="wrapper">
        @if (Request::is('/'))
            <!-- begin popular posts -->
            <h2>Popular Posts</h2>
            <ul>
                {{-- @foreach ($isPopular as $item)
                <li><a href="/post/{{ $item->id }}">{{ substr($item->title, 0, 35) }}...</a></li>
            @endforeach --}}
                @foreach ($popularPost as $item)
                    <li><a href="/detail/{{ $item->id}}">{{ substr($item->title, 0, 35) }}...</a></li>
                @endforeach
                {{-- <li><a href="/">Make Money Online Creating Websites</a></li>
                <li><a href="/">Top 100 Internet Marketing Tips</a></li>
                <li><a href="/">Tutorial: How to add Videos in your Post</a></li>
                <li><a href="/">Sample Post Unordered List</a></li>
                <li><a href="/">Sample Post Blockquote</a></li> --}}
            </ul>
        @endif
        <!-- end popular posts -->
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
            <h2>Live Cross Currency Rates</h2>

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
            {{-- <h2>Blogroll</h2>
            <ul>
                <li><a href="/">Carlos</a></li>
                <li><a href="/">Digital Point Forum</a></li>
                <li><a href="/">Eric's Photo Gallery</a></li>
                <li><a href="/">Fashion Trends</a></li>
                <li><a href="/">Google Scoreboard</a></li>
                <li><a href="/">Marketing Forum</a></li>
            </ul> --}}
            <!-- end blogroll -->
            <!-- begin meta -->
            {{-- <h2>Meta</h2>
            <ul>
                <li><a href="/">Login</a></li>
            </ul> --}}
            <!-- end meta -->
        </div>
        <!-- END right -->
        <br>
        <iframe
            src="https://id.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&pairs=1,2,9326,9379,1491"
            width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0"
            marginheight="0"></iframe>
        <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Didukung Oleh <a
                href="https://id.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link"
                target="_blank" rel="nofollow">Investing.com</a></div>
    </div>
</div>
