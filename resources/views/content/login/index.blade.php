@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
              <h4 class="mb-2">Apotik</h4>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to Apotik 👋</h4>
          <p class="mb-4">Silakan masuk ke akun Anda dan mulai petualangan</p>
          @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first('loginError') }}
    </div>
@endif
          <form id="formAuthentication" class="mb-3" action="/proses-login" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Nim/Nidn</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"  value="{{ old('username') }}" autofocus>
              @error('username')
                  <small>{{ $message }}</small>
              @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                {{-- <a href="{{url('auth/forgot-password-basic')}}">
                  <small>Forgot Password?</small>
                </a> --}}
                @error('password')
                <small>{{ $message }}</small>
            @enderror
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>
            <div class="mb-3">
              {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me">
                  Remember Me
                </label>
              </div> --}}
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>

          {{-- <p class="text-center">
            <span>New on our platform?</span>
            <a href="{{url('auth/register-basic')}}">
              <span>Create an account</span>
            </a>
          </p> --}}
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
</div>
@endsection