@extends('admin.layouts.template')
@section('content')

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Details /</span> Admin</h4>
                @include('alart.messages')


                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-4">
                      <h5 class="card-header"> Details</h5>
                      <!-- Account -->
                      <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">

                            <div class="col-lg-5 col-md-12 col-6 mb-4">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Name:</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $user->name }} </h3>


                                    <span class="fw-semibold d-block mb-1">Email:</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $user->email }}</h3>

                                    <span class="fw-semibold d-block mb-1"> Username:</span>
                                    <h3 class="card-title text-nowrap mb-1">{{ $user->username }}</h3>

                                    <span class="fw-semibold d-block mb-1"> Mobile Number:</span>


                                    <h3 class="card-title text-nowrap mb-1">{{ $user->phone }}</h3>
                                  </div>
                                </div>
                              </div>

                        <form  action="{{route('admin.detailsupdate', $user->id) }}" method="POST" >
                            @csrf

                          <div class="row">
                            <div class="mb-3 col-md-6">
                              <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required  />

                            </div>

                            <div class="mb-3 col-md-6">
                              <label for="email" class="form-label">E-mail</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required  />

                            </div>
                            <div class="mb-3 col-md-6">
                              <label for="username" class="form-label">Username</label>
                              <input type="number" class="form-control" id="username" name="username" value="{{ $user->username }}" required  />

                            </div>
                            <div class="mb-3 col-md-6">
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                              <div class="input-group input-group-merge">
                                <input type="number" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required  />

                              </div>
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
