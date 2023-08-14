@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Information</h4>

<div class="col-xxl">

    <form action="{{route('admin.link.update', $link->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf

    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Contact Information</h5>
      </div>
      <div class="card-body">

        <div class="row mb-3">
            <label for="iconSelector" class="col-sm-2 col-form-label">Icon select</label>
            <div class="col-sm-10">
                <select id="iconSelector" class="form-select " name="icon" required>
                <option value="{{ $link->icon }}">Select New icon</option>
                <option value="fab fa-facebook">Facebook</option>
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-linkedin">Linkedin</option>
                <option value="fab fa-youtube">Youtube</option>
                <option value="fab fa-instagram">Instagram</option>
                </select>
            </div>
        </div>



          {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Icon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="icon" name="icon" value="{{ $link->icon }}"    />
            </div>
        </div> --}}

            <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Link address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="link" name="link" value="{{ $link->link }}"   />
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>

          </div>
      </div>
    </div>
    </form>
  </div>
</div>
@endsection
