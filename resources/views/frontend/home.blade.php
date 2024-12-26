@extends('layouts.frontend-layout')

@section('title')
The Fast News
@endsection

@section('content')
<div id="content">
    <!-- begin post -->
    @foreach ( $data as $news )
        <div class="post">
            <div class="thumb"><a href="/detail/{{ $news->news_id }}"><img src="/images/{{ $news->img }}" alt="" /></a></div>
            <h2><a href="/detail/{{ $news->news_id }}">{{ $news->title }}</a></h2>
            <p class="date" style="cursor: default"><u>Posted on {{ $news->created_at }} by admin</u></p>
            <p style="cursor: default">{{ substr($news->content, 0, 300) }}... </p>
            <a class="continue" href="/detail/{{ $news->news_id }}">Continue Reading</a>
        </div>
        <!-- end post -->
    @endforeach
    {{-- <div class="post">
        <div class="thumb"><a href="/"><img src="/theme/frontend/images/_thumb2.jpg" alt="" /></a></div>
        <h2><a href="/">A cras tincidunt, ut tellus et Gravida Ipsum</a></h2>
        <p class="date"><u>Posted on January 7, 2008 by admin</u></p>
        <p>Elementum ea, nibh et, velit sed sagittis. Ipsum libero. Viverra integer enim, sed dolor. Inceptos
            elit, vitae et. Eget eget nec, lectus nisl, vehicula est feugiat. cum condimentum mattis dui fusce
            ut, vel convallis suspendisse suspendisse sed in. Libero blandit curae at magna ut, id mauris
            suspendisse ligula neque integer non.</p>
        <a class="continue" href="/">Continue Reading</a>
    </div>
    <!-- end post -->
    <!-- begin post navigation -->
    {{-- <div class="postnav">
        <ul>
            <li><a href="/">1</a></li>
            <li><a href="/">2</a></li>
            <li><a href="/">&raquo;</a></li>
        </ul>
        <div class="break"></div>
    </div> --}}
    <!-- end post navigation -->
</div>
@endsection
