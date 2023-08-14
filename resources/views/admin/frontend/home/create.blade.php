@extends('admin.layouts.template')
@section('content')

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Layouts/</span> Banner</h4>
      @include('alart.messages')


      <form action="{{route('admin.home.update')}}" method="POST"  enctype="multipart/form-data">
        @csrf

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Banner Layout</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="home_title" id="home_title" value="{{ $main->home_title }}" required />
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-message" >Subtitle</label>
                  <div class="col-sm-10">
                    {{-- <textarea class="form-control" id="home_subtitle" name="home_subtitle"  required >{{ $main->home_subtitle }} --}}
                    <textarea id="basic-default-message" name="home_subtitle" class="form-control" required >{{ $main->home_subtitle }}

                    </textarea>
                    <div class="invalid-feedback">
                        Please enter a message.
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                        <img style="height:30vh" src="{{url($main->home_pic) }}" class="img-thumbnail"> <br>
                        <label >Supported files: jpeg, jpg, png. | Will be resized to: 688x555 px.</label>
                        <input type="file" class="form-control"  id="imageInput"  onchange="validateImageSize()" name="home_pic"  />
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
