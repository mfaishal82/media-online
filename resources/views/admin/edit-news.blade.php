@extends('layouts.admin-layout')

@section('admin-body')
    <div class="col-lg-6" style="margin-top: 100px;">
        <div class="card">
            <div class="card-header">
                <strong>Add News</strong> Data
            </div>
            <div class="card-body card-block">
                <form action="/admin/dashboard/create-news" method="post" enctype="multipart/form-data" class="form-horizontal"
                    id="newsForm">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="title" name="title" placeholder="Input Title" required
                                class="form-control" value="{{ $data->title }}">
                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="content" id="content" rows="9" placeholder="Content..." required class="form-control">0___>
                                {{ $data->content }}
                            </textarea>
                            </pre>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="category" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category" id="SelectLm" required class="form-control-sm form-control">
                                @foreach ( $categories as $category )
                                    <option value="{{ $category->name }}" {{ $category->name === $data->name ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="img" class=" form-control-label">Image input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="img" name="img" required class="form-control-file">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('button[type="reset"]').addEventListener('click', function(e) {
            e.preventDefault();

            document.getElementById('title').value = '';
            document.getElementById('content').value = '';
            document.getElementById('SelectLm').value = '0';
            document.getElementById('img').value = '';

            const imgPreview = document.querySelector('.img-preview');
            if (imgPreview) {
                imgPreview.src = '';
                imgPreview.style.display = 'none';
            }
        });
    </script>
@endsection
