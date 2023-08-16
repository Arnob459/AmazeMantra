@extends('admin.layouts.template')
@section('content')

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Details /</span> User</h4>
                @include('alart.messages')


                <div class="row">
                  <div class="col-md-12">
                    <div class="card mb-4">
                      <h5 class="card-header">User Details</h5>
                      <!-- Account -->
                      <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">

                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card">
                                  <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Balance </span>
                                    <h3 class="card-title text-nowrap mb-1">${{ $userbalance->balance }}</h3>
                                  </div>
                                </div>
                              </div>


                        </div>
                      </div>
                      <hr class="my-0" />
                      <div class="card-body">
                        <form  action="{{route('admin.user.detailsupdate', $user->id) }}" method="POST" >
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
                            <div class="mb-3 col-md-6">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}"  />
                            </div>
                            <div class="mb-3 col-md-6">
                              <label for="state" class="form-label">State</label>
                              <input class="form-control" type="text" id="state" name="state" value="{{ $user->zipcode }}"   />
                            </div>
                            <div class="mb-3 col-md-6">
                              <label for="zipcode" class="form-label">Zip Code</label>
                              <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $user->zipcode }}"  />

                            </div>
                            <div class="mb-3 col-md-6">
                              <label class="form-label" for="country">Country</label>
                              {{-- <select class="selectpicker countrypicker"></select> --}}
                              <select id="country" name="country" class="select2 form-select">
                                <option value="{{ $user->country }}"> {{ $user->country }}</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                              </select>
                            </div>

                            <div class="mb-4 col-md-6">
                            <div class=" form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" name="email_verified" id="email_verified" value="1" {{ ($user->email_verified) ? 'checked' : '' }}  />
                                <label class="form-check-label" for="email_verified" >Email Verified</label>
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
