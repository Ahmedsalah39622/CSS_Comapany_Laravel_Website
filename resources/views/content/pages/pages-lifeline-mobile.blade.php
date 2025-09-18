@extends('layouts/layoutfront')
@section('title', 'Landing - Mobile Lifeline')

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/nouislider/nouislider.scss',
'resources/assets/vendor/libs/swiper/swiper.scss'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
<style>
  /* Mobile-specific overrides */
  .main-content {
    @vite(['resources/assets/vendor/scss/pages/front-page-mobile.scss']) <div class="feature-desc">تجربة سلسة عبر جميع الأجهزة وأحجام الشاشات.</div></div><div class="feature-block"><img src="/assets/img/front-pages/icons/rocket.png" alt="High Performance" /><div class="feature-title">أداء عالي</div><div class="feature-desc">محسن لسرعة التحميل وتفاعلات سلسة CSS.</div></div><div class="feature-block"><img src="/assets/img/front-pages/icons/paper.png" alt="Customizable Themes" /><div class="feature-title">ثيمات قابلة للتخصيص</div><div class="feature-desc">تخصيص الأنماط بسهولة لتناسب علامتك التجارية.</div></div></section></div>
