@extends('admin.layouts.template')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> Update Information</h4>

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
        <strong>Success!</strong>{{session('success')}}
    </div>
@endif

    <form action="{{route('admin.updatehome')}}" method="POST"  enctype="multipart/form-data">
        @csrf


    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Update Home Info</h5>
        <small class="text-muted float-end">Input Information</small>
      </div>
      <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Logo</label>
            <div class="col-sm-10">
                <img style="height: 50px;" src="{{url($main->logo) }} " class="img-thumbnail">
              <input type="file" class="form-control" id="logo" name="logo"  />
            </div>
            <label class="col-sm-2 col-form-label" for="basic-default-name">Home Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="home_title" name="home_title" value="{{ $main->home_title }}"  />
            </div>
            <label class="col-sm-2 col-form-label" for="basic-default-name">Home Sub Title</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="home_subtitle" name="home_subtitle" value="" >{{ $main->home_subtitle }}</textarea>
            </div>
            <label class="col-sm-2 col-form-label" for="basic-default-name">Home Image</label>
            <div class="col-sm-10">
                <img style="height:30vh" src="{{url($main->home_pic) }} " class="img-thumbnail">
              <input type="file" class="form-control" id="home_pic" name="home_pic"  />
            </div>
          </div>
      </div>
    </div>

    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Update About Info</h5>
          <small class="text-muted float-end">Input Information</small>
        </div>
        <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">About Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="about_title" name="about_title" value="{{ $main->about_title }}"  />
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">About Sub Title</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="about_substitle" name="about_substitle" value="" >{{ $main->about_substitle }}</textarea>
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">About Image</label>
              <div class="col-sm-10">
                  <img style="height:30vh" src="{{url($main->about_pic) }} " class="img-thumbnail">
                <input type="file" class="form-control" id="about_pic" name="about_pic"  />
              </div>
            </div>
        </div>
      </div>


      {{-- brand --}}

      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Update Brand Info</h5>
          <small class="text-muted float-end">Input Information</small>
        </div>
        <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="brand_title" name="brand_title" value="{{ $main->brand_title }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Sub Title</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="brand_subtitle" name="brand_subtitle" >{{ $main->brand_subtitle }}</textarea>
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Image</label>
              <div class="col-sm-10">
                  <img style="height:30vh" src="{{url($main->brand_pic) }} " class="img-thumbnail">
                <input type="file" class="form-control" id="brand_pic" name="brand_pic"  />
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Mid Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="brand_mid_title" name="brand_mid_title" value="{{ $main->brand_mid_title }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Footer Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="brand_footer_title" name="brand_footer_title" value="{{ $main->brand_footer_title }}"  />
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Footer Sub Title</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" id="brand_footer_subtitle" name="brand_footer_subtitle" >{{ $main->brand_footer_subtitle }}</textarea>
              </div>
              <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Footer Image</label>
              <div class="col-sm-10">
                  <img style="height:30vh" src="{{url($main->brand_footer_pic) }} " class="img-thumbnail">
                <input type="file" class="form-control" id="brand_footer_pic" name="brand_footer_pic"  />
              </div>
            </div>
        </div>
      </div>

      {{-- others --}}

      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Update Others Info</h5>
          <small class="text-muted float-end">Input Information</small>
        </div>
        <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Work Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="work_title" name="work_title" value="{{ $main->work_title }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Voucher Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="voucher_title" name="voucher_title" value="{{ $main->voucher_title }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Contact Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="contact_title" name="contact_title" value="{{ $main->contact_title }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Contact Location</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="contact_location" name="contact_location" value="{{ $main->contact_location }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Contact Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="contact_mail" name="contact_mail" value="{{ $main->contact_mail }}"  />
              </div>

              <label class="col-sm-2 col-form-label" for="basic-default-name">Footer Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="footer_name" name="footer_name" value="{{ $main->footer_name }}"  />
              </div>

            </div>
        </div>
      </div>






      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
</form>

  </div>
</div>
@endsection
