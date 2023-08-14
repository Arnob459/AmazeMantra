@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Add  Information</h4>

<div class="col-xxl">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success alert-dismissible">
        {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
        <strong>Success!</strong>{{session('success')}}
    </div>
@endif

    <form action="{{route('admin.brandlist.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf


    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Brand promotion List</h5>
        <small class="text-muted float-end">Input Information</small>
      </div>
      <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Font Awesome Icon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="icon" name="icon" placeholder="fa fa-user-tie fa-2x"  />
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" name="title"  />
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Point No:1</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="point1" name="point1"  > </textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Point No:2</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="point2" name="point2"  ></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Point No:3</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="point3" name="point3" ></textarea>
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
