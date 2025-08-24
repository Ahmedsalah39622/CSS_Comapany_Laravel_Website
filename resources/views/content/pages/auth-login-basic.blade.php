@php
use Illuminate\Support\Facades\Route;
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
<!-- Page -->
@vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="app-brand auth-cover-brand">
    <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
    <span class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-8 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center"
        style="background-image: url(''); background-size: cover; background-position: center;">
        <img src="{{ asset('assets/img/illustrations/auth-login-illustration-'.$configData['style'].'.png') }}" alt=""
          class="my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png"
          data-app-dark-img="illustrations/auth-login-illustration-dark.png">

        <img src="{{ asset('assets/img/illustrations/bg-shape-image-'.$configData['style'].'.png') }}"
          alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
          data-app-dark-img="illustrations/bg-shape-image-dark.png">
      </div>
    </div>
    <!-- /Left Text 00-->


    @section('title', 'Login')
    @section('content')

    <!-- Login form -->
    <div class="d-flex col-12 col-lg-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        <h4 class="mb-1">مرحبًا بك في {{ config('variables.templateName') }}! 👋</h4>
        <p class="mb-6">يرجى تسجيل الدخول إلى حسابك وبدء رحلتك معنا</p>

        @if (session('status'))
        <div class="alert alert-success mb-1 rounded-0" role="alert">
          <div class="alert-body">
            {{ session('status') }}
          </div>
        </div>
        @endif

        <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-6">
            <label for="login-email" class="form-label">البريد الإلكتروني</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email"
              placeholder="example@domain.com" autofocus value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <span class="fw-medium">{{ $message }}</span>
            </span>
            @enderror
          </div>
          <div class="mb-6 form-password-toggle">
            <label class="form-label" for="login-password">كلمة المرور</label>
            <div class="input-group input-group-merge @error('password') is-invalid @enderror">
              <input type="password" id="login-password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="••••••••••••" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
              <span class="fw-medium">{{ $message }}</span>
            </span>
            @enderror
          </div>
          <div class="my-8">
            <div class="d-flex justify-content-between">
              <div class="form-check mb-0 ms-2">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember')
                  ? 'checked' : '' }}>
                <label class="form-check-label" for="remember-me">
                  تذكرني
                </label>
              </div>
              @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                <p class="mb-0">نسيت كلمة المرور؟</p>
              </a>
              @endif
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100" type="submit">تسجيل الدخول</button>
        </form>

        <p class="text-center">
          <span>ليس لديك حساب؟</span>
          <a href="/auth/register-basic">
            <span>إنشاء حساب جديد</span>
          </a>
        </p>

        <div class="divider my-6">
          <div class="divider-text">أو</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-facebook me-1_5"
            title="تسجيل الدخول عبر فيسبوك">
            <i class="tf-icons ti ti-brand-facebook-filled"></i>
          </a>
          <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-twitter me-1_5"
            title="تسجيل الدخول عبر تويتر">
            <i class="tf-icons ti ti-brand-twitter-filled"></i>
          </a>
          <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-github me-1_5"
            title="تسجيل الدخول عبر GitHub">
            <i class="tf-icons ti ti-brand-github-filled"></i>
          </a>
          <a href="javascript:;" class="btn btn-sm btn-icon rounded-pill btn-text-google-plus"
            title="تسجيل الدخول عبر Google">
            <i class="tf-icons ti ti-brand-google-filled"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
@endsection