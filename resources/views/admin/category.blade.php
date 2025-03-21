@extends('layouts.admin-layout')

@section('title-page')
Dashboard - Category
@endsection

@section('admin-body')
    <!-- MAIN CONTENT-->
    <div x-data="{ showForm: false }" class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">overview</h2>
                            <button @click="showForm = !showForm " class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">List of category</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($data as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->categoryName }}</td>
                                            <td class="text-center">
                                                <a href="/admin/category/delete-category/{{ $category->id }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data tersedia
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    @include('sections.create-category')
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
