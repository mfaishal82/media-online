@extends('layouts.frontend-layout')

{{-- @include('css.style') --}}

@section('title', 'Category')

@section('content')
<div class="post" style="max-width: 300px; margin: 20px; padding-bottom: 5px; display: inline-block;">

    @foreach ($data as $news)
            <div class="thumb"><a href="/detail/{{ $news->news_id }}"><img src="/images/{{ $news->img }}" alt="" style="max-width: 300px;" /></a></div>
            <div style="margin: 10px; margin-bottom: 20px;">
                <h2><a href="/detail/{{ $news->news_id }}">{{ $news->title }}</a></h2>
                <p class="date" style="cursor: default"><u>Posted on {{ $news->created_at }} by admin</u></p>
                <p style="cursor: default">{{ substr($news->content, 0, 300) }}... </p>
                <a class="continue" style="background-color: red; color: white; padding: 5px; margin-left: 5px; margin-top: 50px;" href="/detail/{{ $news->news_id }}">Continue Reading</a>
            </div>
            @endforeach
        </div>
@endsection
