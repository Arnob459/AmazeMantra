@extends('admin.layouts.template')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Brand</h4>
    @include('alart.messages')

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Brand Layout</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.brand.update')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="brand_title" id="brand_title" value="{{ $main->brand_title }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message" >Subtitle</label>
                    <div class="col-sm-10">
                      <textarea id="basic-default-message" name="brand_subtitle" class="form-control" required >{{ $main->brand_subtitle }}
                      </textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                        <img style="height:100px;" src="{{url($main->brand_pic) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png. | Will be resized to: 1000x1000 px.</label>
                        <input type="file" class="form-control" id="brand_pic" name="brand_pic"  />
                    </div>
                </div>

                 <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Mid-Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="brand_mid_title" id="brand_mid_title" value="{{ $main->brand_mid_title }}" required />
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">End-Title</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="brand_footer_title" id="brand_footer_title" value="{{ $main->brand_footer_title }}" required/>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message" >End-Subtitle</label>
                    <div class="col-sm-10">
                      <textarea id="basic-default-message" name="brand_footer_subtitle" class="form-control" required>{{ $main->brand_footer_subtitle }}
                      </textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">End-Image</label>
                    <div class="col-sm-10">
                        <img style="height:100px;" src="{{url($main->brand_footer_pic) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png. | Will be resized to: 796x788 px.</label>
                        <input type="file" class="form-control" id="imageInput"  onchange="validateImageSize()" name="brand_footer_pic"  />
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
        </div>
      </div>


      <div class="card">
        <h5 class="card-header">Brand Promotion Information</h5>

        <nav class="navbar navbar-example navbar-expand-lg ">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbar-ex-3">
                  <a class="btn btn-outline-primary" href="{{ route('admin.brandlist.create') }}">+ Add New</a>
              </div>
            </div>
          </nav>

        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th>Actions</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Description</th>

              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($brandlists as $brandlist)
              <tr>
                <td>
                    <a href="{{ route('admin.brandlist.edit', $brandlist->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.brandlist.delete', $brandlist->id) }}" class="btn btn-warning">Delete</a>

                </td>
                {{-- <td>{{ $brandlist->icon }}</td> --}}
                <td>
                <i class="{{ $brandlist->icon }}"></i>
                </td>
                <td>{{ $brandlist->title }}</td>
                <td>{!! $brandlist->point1  !!}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>


    </div>
    <!-- / Content -->
    <script>
        function validateImageSize() {
            const input = document.getElementById('imageInput');
            const errorMessage = document.getElementById('errorMessage');
            const maxFileSizeMB = 1; // Maximum file size in megabytes

            if (input.files.length > 0) {
                const fileSizeMB = input.files[0].size / (1024 * 1024); // Convert to megabytes
                if (fileSizeMB > maxFileSizeMB) {
                    errorMessage.textContent = `File size exceeds ${maxFileSizeMB}MB`;
                    input.value = ''; // Clear the input field
                } else {
                    errorMessage.textContent = '';
                }
            }
        }
    </script>



@endsection
