<div x-show="showForm"
    style=" position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;">
    <div class="col-lg-6" @click.away="showForm = false"
        style=" position: fixed;
                height: screen;
                right: 0;
                top: 80px;
                bottom: 0;
                margin: 0;
                z-index: 9999;
                box-shadow: 50px">
        <div class="card">
            <div class="card-header">
                <strong>Add News</strong> Data
            </div>
            <div class="card-body card-block">
                <form action="/admin/category/create-category" method="post" enctype="multipart/form-data"
                    class="form-horizontal" id="newsForm">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="category" class=" form-control-label">Category Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="category" name="categoryName" placeholder="Input category name"
                                required class="form-control">
                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
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
</div>

<script>
    document.querySelector('button[type="reset"]').addEventListener('click', function(e) {
        e.preventDefault();

        document.getElementById('category').value = '';

    });
</script>
