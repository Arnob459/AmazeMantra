@extends('admin.layouts.template')
@section('content')

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Details /</span> Admin</h4>
                @include('alart.messages')


                <div class="row">
                  <div class="col-md-6">
                    <div class="card mb-4">
                      <h5 class="card-header"> Password Change</h5>
                      <!-- Account -->
                      <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">

                        <form  action="{{route('admin.passdetailsupdate', $user->id) }}" method="POST" >
                            @csrf

                          <div class="row">
                            <div class="mb-4 col-md-8">
                              <label for="oldpassword" class="form-label">Old Password</label>
                                <input type="text" class="form-control" id="oldpassword" name="oldpassword" required  />

                            </div>

                            <div class="mb-4 col-md-8">
                              <label for="newpassword" class="form-label">New Password</label>
                              <input type="text" class="form-control" id="newpassword" name="newpassword"  required  />

                            </div>
                            <div class="mb-4 col-md-8">
                              <label for="confirmpassword" class="form-label">Confirm Password</label>
                              <input type="text" class="form-control" id="confirmpassword" name="confirmpassword" required  />

                            </div>

                          </div>
                          <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          </div>
                        </form>
                      </div>
                      <!-- /Account -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Content -->

@endsection
