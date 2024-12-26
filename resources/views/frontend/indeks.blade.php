@extends('layouts.frontend-layout')

@section('title')
    Index Data
@endsection

@section('content')
<style>
    .news-container {
        display: inline-block;
        max-width: 60%;
        padding: 20px;
    }

    .news-title {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .news-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
    }

    .news-card:hover {
        transform: translateY(-5px);
    }

    .news-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .news-content {
        padding: 15px;
    }

    .news-header {
        color: #2563eb;
        font-size: 18px;
        margin: 0 0 10px 0;
    }

    .category-badge {
        display: inline-block;
        background-color: #22c55e;
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .news-text {
        color: #4b5563;
        margin: 10px 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .news-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        color: #6b7280;
        font-size: 14px;
    }

    .news-footer {
        padding: 15px;
        border-top: 1px solid #ddd;
        background-color: #f8f9fa;
    }
    </style>

    <div class="news-container">
        <h2 class="news-title">Index Data Table</h2>
        <form class="search" action="/search-index" style="margin-top: 10px; margin-bottom: 20px;">
            <input type="text" name="keywordIndex" id="s" placeholder="Search index here..." />
            <button type="submit" style="cursor: pointer;">Search</button>
        </form>
        <div class="news-grid">
            @foreach ($data as $item)
                <div class="news-card">
                    <img src="/images/{{ $item->img }}" alt="{{ $item->title }}" class="news-image">
                    <div class="news-content">
                        <h5 class="news-header">{{ $item->title }}</h5>
                        <span class="category-badge">{{ $item->categoryName }}</span>
                        <p class="news-text">{{ substr($item->content, 0, 200) }}</p>
                        <div class="news-meta">
                            <small>ID: {{ $item->news_id }}</small>
                            <small>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</small>
                        </div>
                    </div>
                    <div class="news-footer">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
