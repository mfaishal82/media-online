@extends('layouts.frontend-layout')

@section('title')
Index Data
@endsection

@section('content')
    <div class="single">
        <h2>Index Data Table</h2>
        <div style="width: 65%;">
            <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td,
                th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even) {
                    background-color: #dddddd;
                }
            </style>
            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Published Date</th>
                        <th>Title</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->news_id }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->categoryName }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>l
        </div>
    </div>
@endsection
