@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Information</h4>

<div class="col-xxl">


    <form action="{{route('admin.brandlist.update', $brandlist->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf

    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Brand promotion List</h5>
        <small class="text-muted float-end">Input Information</small>
      </div>
      <div class="card-body">


        <div class="row mb-3">
            <label for="iconSelector" class="col-sm-2 col-form-label">Icon select</label>
            <div class="col-sm-10">
                <select id="iconSelector" class="form-select " name="icon" required>
                    <option value="{{ $brandlist->icon }}">select Icon</option>
                    <option value="fa fa-user-tie fa-2x">User</option>
                    <option value="fa fa-chart-pie fa-2x">Pie Chart</option>
                    <option value="fa fa-chart-line fa-2x">Line Chart</option>
                    <option value="fa fa-heart fa-2x">Heart</option>
                    <option value="fa fa-globe fa-2x">Globe</option>
                    <option value="fa fa-gift fa-2x">Gift</option>
                    <option value="fa fa-check fa-2x">Check</option>
                    <option value="fa fa-music fa-2x">Music</option>
                    <option value="fa fa-star fa-2x">Star</option>
                    </select>
            </div>
        </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" value="{{ $brandlist->title }}"   />
            </div>
          </div>

          {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" rows="4" cols="50" id="point1" name="point1"  >{{ $brandlist->point1 }}  </textarea>
            </div>
          </div> --}}

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="editor">Description</label>
            <div class="col-sm-10">
                <textarea id="editor" name="point1"> {{ $brandlist->point1 }}</textarea>
                {{-- <textarea type="text" class="form-control" id="point1" name="point1"  ></textarea> --}}

            </div>
        </div>


          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
          </div>
    </form>

      </div>
    </div>
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
