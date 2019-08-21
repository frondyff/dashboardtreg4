@extends('auth.main')
@section('title','Login')
@section('content')
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Dashboard Performance Treg IV</h1>
                  </div>
                  <form class="user" method="POST" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="email"
                      class="form-control form-control-user {{$errors->has('email') ? 'is-invalid':'' }}"
                      name="email"
                      id="exampleInputEmail" aria-describedby="emailHelp"
                      placeholder="Masukkan email...">
                      @if($errors->has('email'))
                      <div class="invalid-feedback">{{$errors->first('email')}}</div>
                      @endif

                    </div>
                    <div class="form-group">
                      <input type="password"
                      class="form-control form-control-user {{$errors->has('password') ? 'is-invalid':'' }}"
                      name="password"
                      id="exampleInputPassword" placeholder="Password">

                      @if($errors->has('password'))
                      <div class="invalid-feedback">{{$errors->first('password')}}</div>
                      @endif
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck" name="remember" {{old('remember') ? 'checked' : '' }}>Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">
                      Login
                    </button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{route('password.request')}}">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection
