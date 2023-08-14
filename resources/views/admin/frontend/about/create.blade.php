@extends('admin.layouts.template')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> About</h4>
      @include('alart.messages')


      <form action="{{route('admin.about.update')}}" method="POST"  enctype="multipart/form-data">
        @csrf

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">About Layout</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="about_title" id="about_title" value="{{ $main->about_title }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message" >Subtitle</label>
                  <div class="col-sm-10">
                    <textarea id="basic-default-message" name="about_substitle" class="form-control" required >{{ $main->about_substitle }}
                    </textarea>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                        <img style="height:30vh" src="{{url($main->about_pic) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png. | Will be resized to: 886x1075 px.</label>
                        <input type="file" class="form-control" id="imageInput"  onchange="validateImageSize()" name="about_pic" />
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
    </form>
    </div>
    <!-- / Content -->
    <script>
        function validateImageSize() {
            const input = document.getElementById('imageInput');
            const errorMessage = document.getElementById('errorMessage');
            const maxFileSizeMB = 2; // Maximum file size in megabytes

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
