@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add  Information</h4>

<div class="col-xxl">
    <form action="{{route('admin.voucher.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf


    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add List</h5>
      </div>
      <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title" required />
            </div>
        </div>


          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> Image</label>
            <div class="col-sm-10">
            <label >Supported files: jpeg, jpg, png. | Will be resized to: 800x500 px.</label>

              <input type="file" class="form-control" id="picture" name="picture" required />
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
@endsection
