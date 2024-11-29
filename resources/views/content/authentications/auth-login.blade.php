@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
              <span class="app-brand-text demo text-heading fw-bold">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-1 ms-5 me-5">Welcome to {{config('variables.templateName')}}! 👋</h4>
          <p class="mb-6 ms-5 me-5">Please sign-in to your Account</p>

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <!-- Tabs Navigation -->
          <ul class="nav nav-pills justify-content-center" id="loginTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="rider-login-tab" data-bs-toggle="tab" data-bs-target="#rider-login" type="button" role="tab" aria-controls="rider-login" aria-selected="true">Passenger Login</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="driver-login-tab" data-bs-toggle="tab" data-bs-target="#driver-login" type="button" role="tab" aria-controls="driver-login" aria-selected="false">Driver Login</button>
            </li>
          </ul>

          <!-- Tabs Content -->
          <div class="tab-content mt-3" id="loginTabsContent">
            <div class="tab-pane fade show active" id="rider-login" role="tabpanel" aria-labelledby="rider-login-tab">
            <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                  <select class="form-control hidden" id="role" name="role" hidden>
                    <option value="Passenger" selected >Passenger</option>
                    <option value="Driver">Driver</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>
                <div class="mb-6">
                  <label for="mobile_number" class="form-label">Mobile Number</label>
                  <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="070 0000 000" autofocus>
                </div>
                <div class="mb-6 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-8">
                  <div class="d-flex justify-content-between mt-8">
                    <div class="form-check mb-0 ms-2">
                      <input class="form-check-input" type="checkbox" id="remember-me">
                      <label class="form-check-label" for="remember-me">
                        Remember Me
                      </label>
                    </div>
                    <a href="{{url('auth/forgot-password')}}">
                      <span>Forgot Password?</span>
                    </a>
                  </div>
                </div>
                <div class="mb-6">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                  <a class="btn btn-primary d-grid w-100 mt-2 bg-dark border-dark" href="{{ route('auth-register-passenger')}}">Register</a>

                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="driver-login" role="tabpanel" aria-labelledby="driver-login-tab">
              <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
                  @csrf
                  <div class="mb-6">
                    <select class="form-control hidden" id="role" name="role" hidden>
                      <option value="Passenger">Passenger</option>
                      <option value="Driver" selected>Driver</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                  <div class="mb-6">
                    <label for="mobile_number" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="070 0000 000" autofocus>
                  </div>
                  <div class="mb-6 form-password-toggle">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                  <div class="mb-8">
                    <div class="d-flex justify-content-between mt-8">
                      <div class="form-check mb-0 ms-2">
                        <input class="form-check-input" type="checkbox" id="remember-me">
                        <label class="form-check-label" for="remember-me">
                          Remember Me
                        </label>
                      </div>
                      <a href="{{url('auth/forgot-password')}}">
                        <span>Forgot Password?</span>
                      </a>
                    </div>
                  </div>
                  <div class="mb-6">
                    <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                    <a class="btn btn-primary d-grid w-100 mt-2 bg-dark border-dark" href="{{ route('auth-register-driver')}}">Register</a>
                  </div>
                </form>
            </div>
          </div>
        </div>

          <!--
          <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{url('auth/register-passenger')}}">
              <span>Create an account</span>
            </a>
          </p> -->
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection
