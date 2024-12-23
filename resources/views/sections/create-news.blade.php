<div x-show="showForm" 
    style=" position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;"
>
    <div class="col-lg-6" @click.away="showForm = false"
        style=" position: fixed;
                height: screen;
                right: 0;
                top: 80px;
                bottom: 0;
                margin: 0;
                z-index: 9999;
                box-shadow: 50px"
    >
        <div class="card">
            <div class="card-header">
                <strong>Add News</strong> Data
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" id="newsForm">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="title" class=" form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="title" name="title" placeholder="Input Title" required class="form-control">
                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="content" class=" form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="content" id="content" rows="9" placeholder="Content..." required class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="category" class=" form-control-label">Select Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category" id="SelectLm" required class="form-control-sm form-control">
                                <option value="0">Please select</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="image" class=" form-control-label">Image input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="image" name="image" required class="form-control-file">
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
    
    document.getElementById('title').value = '';
    document.getElementById('content').value = '';
    document.getElementById('SelectLm').value = '0';
    document.getElementById('image').value = '';
    
    const imagePreview = document.querySelector('.image-preview');
    if (imagePreview) {
        imagePreview.src = '';
        imagePreview.style.display = 'none';
    }
});
</script>