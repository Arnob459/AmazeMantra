@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add Information</h4>

<div class="col-xxl">

    <form action="{{route('admin.work.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf


    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Work  List</h5>
      </div>
      <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="number" name="number" required  />
            </div>
        </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" required />
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="editor">Description</label>
            <div class="col-sm-10">
                <textarea id="editor" name="description" required></textarea>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </div>

          </div>
      </div>
    </div>
</form>

  </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: '#editor',
        plugins: 'link image lists',
        toolbar: 'undo redo | styleselect | bold italic | link image | bullist numlist',
        menubar: false
    });
</script>
@endsection
