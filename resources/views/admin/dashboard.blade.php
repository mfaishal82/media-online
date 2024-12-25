@extends('layouts.admin-layout')

@section('admin-body')
    <!-- MAIN CONTENT-->
    <div x-data="{ showForm: false }" class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                            <button @click="showForm = !showForm" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">List of news data</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date Published</th>
                                        <th>Title</th>
                                        <th class="text-center">Set Popular</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                                <td>1</td>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary btn-sm">Edit</button>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr> --}}
                                    @forelse ($data as $news)
                                        <tr>
                                            <td>{{ $news->id }}</td>
                                            <td>{{ substr($news->created_at, 0, 10) }}</td>
                                            <td>{{ substr($news->title,0,20) }}...</td>
                                            <td class="text-center">
                                                @if ($news->isPopular == 'false')
                                                    <a href="/admin/dashboard/set-popular/true/{{ $news->id }}"><button
                                                        class="btn {{ $news->isPopular == 'true' ? 'btn-success' : 'btn-secondary' }} btn-sm">
                                                        {{ $news->isPopular }}
                                                    </button></a>
                                                @else
                                                    <a href="/admin/dashboard/set-popular/false/{{ $news->id }}"><button
                                                        class="btn {{ $news->isPopular == 'true' ? 'btn-success' : 'btn-secondary' }} btn-sm">
                                                        {{ $news->isPopular }}
                                                    </button></a>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="/admin/dashboard/edit-news/{{ $news->id }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="/admin/dashboard/delete-news/{{ $news->id }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No data available
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @include('sections.create-news')
                </div>

                <footer class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                    href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
