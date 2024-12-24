@extends('layouts.frontend-layout')

@section('content')
<div id="content">
    <!-- begin post -->
        <div
            style="padding: 10px; max-width: 100%;"
        >
            <div class="thumb"><a href="/"><img src="{{ $data->img }}" alt="" /></a></div>
            <h2 style="margin-top: 5px; font-size: 20px"><a>{{ $data->title }}</a></h2>
            <p class="date" style="margin-top: 5px; font-weight: 900"><u>Posted on {{ $data->created_at }} by admin</u></p>
            <pre style="margin-top: 10px; font-weight: 500; font-size: 16px; white-space: pre-wrap;">{{ $data->content }}</pre>
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
