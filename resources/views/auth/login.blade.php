@extends('frontend.front_master')
@section('page-title', 'Home | Login | Registration')
@section('page-content')

<!-- BREADCRUMB AREA START -->
          <div class="breadcrumb-area">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="breadcurmb-inner">
                              <!-- breadcrumb-menu -->
                              <div class="breadcrumb-menu">
                                  <nav>
                                      <ul>
                                          <li><a href="index.html" title="Home Page"><i class="fa fa-home"></i></a></li>
                                          <li>My Account</li>
                                      </ul>
                                  </nav>
                              </div>
                              <!-- breadcrumb-title -->
                              <div class="breadcrumb-title line-bottom">
                                  <h2>My Account</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- BREADCRUMB AREA END -->

          <!-- LOGIN REGISTER AREA START -->
          <div class="login-register-area mt-0 mb-0">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="xl-pr-15">
                              <div class="login-area">
                                  <h2>Login</h2>
                                  <form action="{{route('login')}}" method="post"> @csrf
                                      <input type="email" name="email" placeholder="Email">
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                      <input type="password" name="password" placeholder="Password">
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                      <input type="submit" value="Login">
                                  </form>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="xl-pl-15">
                              <div class="register-area">
                                  <h2>Register</h2>
                                  <form action="{{route('register')}}" method="post"> @csrf
                                      <input type="text" name="name" placeholder="Name">
                                      @if ($errors->has('name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                      <input type="email" name="email" placeholder="Email">
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                      <input type="password" name="password" placeholder="Password">
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                      <div class="mb-20">
                                          <label><input type="checkbox"> I agree <a href="terms-conditions.html">Tarms & Conditions</a></label>
                                      </div>
                                      <input type="submit" value="Register">
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- LOGIN REGISTER AREA END -->

@endsection
