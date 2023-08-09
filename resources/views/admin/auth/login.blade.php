

@extends('admin.layouts.app')
@section('content')



<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('loginpage/images/bg-01') }}');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{ route('admin.login') }}" method="POST">
                @csrf
                <span class="login100-form-logo">
                    <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>


                <div  >
                    <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}"  placeholder="User ID">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>
                <br>

                <div >
                    <input id="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" type="password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>
                <br>



                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" value="Login">
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection





{{-- @extends('layouts.logintemp')

@section('content')
<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark">
    <div class="container">
      <div class="row  justify-content-center align-items-center d-flex-row text-center mt-5">

      <div class="col-12 col-md-6 col-lg-6  mt-5">
        <img src="{{ asset('assets/img/login.png') }}" class="p-5 img-fluid">
      </div>
        <div class="col-12  col-md-6 col-lg-6 mt-5">
          <div class="card shadow">
            <div class="card-body">
              <h4 class="card-title mt-3 text-center">Sign In</h4>
              <p class="text-center">Get started in the world of many possibilities.</p>

              <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-id-card-alt"></i> </span>
                  </div>
                  <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="User ID" >
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                </div>


                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                  </div>
                  <input id="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" type="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block"> Sign In </button>
                </div>
                <p class="text-center mt-2">Dont have an account?
                  <a href="{{ route('register') }}"><strong>Sign Up<strong></a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 </section>
@endsection --}}


