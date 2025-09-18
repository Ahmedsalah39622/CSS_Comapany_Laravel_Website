@php
use Illuminate\Support\Facades\Route;
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp
@vite('resources/css/app.css')
@vite('resources/js/app.js')

@extends('layouts/blankLayout')

@section('title', 'Register Page')

@section('page-style')
<!-- Page -->
@vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">

    <!-- Left Side Image -->
    <div class="d-none d-lg-flex col-lg-8 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center"
        style="background-image: url(''); background-size: cover; background-position: center;">
        <img src="{{ asset('assets/img/illustrations/auth-register-illustration-'.$configData['style'].'.png') }}"
          alt="" class="my-5 auth-illustration" data-app-light-img="illustrations/auth-register-illustration-light.png"
          data-app-dark-img="illustrations/auth-register-illustration-dark.png">
      </div>
    </div>

    <!-- Register Form -->
    <div class="d-flex col-12 col-lg-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        <h4 class="mb-1">لأن كل ثانية تهم ⏰</h4>
        <p class="mb-6">رعاية متقدمة، وأيدٍ موثوقة! 👋</p>

        <form id="formAuthentication" class="mb-6" action="{{ route('register') }}" method="POST">
          @csrf

          <div class="mb-6">
            <label for="username" class="form-label">اسم المستخدم</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name"
              placeholder="اسم المستخدم" value="{{ old('name') }}" />
            @error('name')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="email" class="form-label">البريد الإلكتروني</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
              placeholder="example@domain.com" value="{{ old('email') }}" />
            @error('email')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="age" class="form-label">العمر</label>
            <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age"
              placeholder="أدخل عمرك" value="{{ old('age') }}" />
            @error('age')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="birthdate" class="form-label">تاريخ الميلاد</label>
            <input type="date" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate"
              name="birthdate" value="{{ old('birthdate') }}" />
            @error('birthdate')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="gender" class="form-label">الجنس</label>
            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
              <option value="">اختر الجنس</option>
              <option value="male" {{ old('gender')=='male' ? 'selected' : '' }}>ذكر</option>
              <option value="female" {{ old('gender')=='female' ? 'selected' : '' }}>أنثى</option>
              <option value="other" {{ old('gender')=='other' ? 'selected' : '' }}>آخر</option>
            </select>
            @error('gender')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="phone" class="form-label">رقم الهاتف</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
              placeholder="أدخل رقم هاتفك" value="{{ old('phone') }}" />
            @error('phone')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="blood_type" class="form-label">فصيلة الدم</label>
            <select class="form-control @error('blood_type') is-invalid @enderror" id="blood_type" name="blood_type">
              <option value="">اختر فصيلة الدم</option>
              @foreach(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $type)
              <option value="{{ $type }}" {{ old('blood_type')==$type ? 'selected' : '' }}>{{ $type }}</option>
              @endforeach
            </select>
            @error('blood_type')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6">
            <label for="insurance_provider" class="form-label">مزود التأمين</label>
            <input type="text" class="form-control @error('insurance_provider') is-invalid @enderror"
              id="insurance_provider" name="insurance_provider" placeholder="اسم مزود التأمين"
              value="{{ old('insurance_provider') }}" />
            @error('insurance_provider')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">كلمة المرور</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                name="password" placeholder="••••••••" />
              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert"><span class="fw-medium">{{ $message }}</span></span>
            @enderror
          </div>

          <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password-confirm">تأكيد كلمة المرور</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                placeholder="••••••••" />
              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
          </div>

          <button type="submit" class="btn btn-primary d-grid w-100">إنشاء حساب</button>
        </form>

        <p class="text-center">
          <span>لديك حساب بالفعل؟</span>
          <a href="/auth/login-basic">
            <span>تسجيل الدخول</span>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
