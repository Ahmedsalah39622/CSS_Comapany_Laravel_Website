{{-- Force default RTL and Arabic language on every load --}}
@section('html-attributes') dir="rtl" lang="ar" @endsection

@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutfront')

@section('title', 'Landing - Front Pages')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
'resources/assets/vendor/libs/nouislider/nouislider.scss',
'resources/assets/vendor/libs/swiper/swiper.scss'
])
@endsection

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
<style>
  .pricing-list {
    margin-bottom: 0;
  }

  .btn-pricing {
    background: #222 !important;
    color: #fff !important;
    font-weight: bold;
    border: 2px solid #222 !important;
    border-radius: 8px;
    transition: background 0.2s, color 0.2s, border 0.2s;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  }

  .btn-pricing:hover,
  .btn-pricing:focus {
    background: #111 !important;
    color: #fff !important;
    border-color: #111 !important;
  }

  /* Dark mode support */
  body.dark-mode .btn-pricing {
    background: #fff !important;
    color: #222 !important;
    border: 2px solid #fff !important;
  }

  body.dark-mode .btn-pricing:hover,
  body.dark-mode .btn-pricing:focus {
    background: #e2e2e2 !important;
    color: #111 !important;
    border-color: #e2e2e2 !important;
  }

  /* RTL support: apply when html[dir="rtl"] is set */
  html[dir="rtl"] body {
    direction: rtl;
    text-align: right;
  }

  html[dir="rtl"] .text-start {
    text-align: right !important;
  }

  html[dir="rtl"] .text-end {
    text-align: left !important;
  }

  html[dir="rtl"] .ms-auto {
    margin-left: 0 !important;
    margin-right: auto !important;
  }

  html[dir="rtl"] .me-2 {
    margin-left: .5rem !important;
    margin-right: 0 !important;
  }

  html[dir="rtl"] .ms-4 {
    margin-right: 1.5rem !important;
    margin-left: 0 !important;
  }

  html[dir="rtl"] .ps-4 {
    padding-right: 1.5rem !important;
    padding-left: 0 !important;
  }

  html[dir="rtl"] .pe-4 {
    padding-left: 1.5rem !important;
    padding-right: 0 !important;
  }

  html[dir="rtl"] .navbar .ms-auto {
    margin-left: 0 !important;
    margin-right: auto !important;
  }

  html[dir="rtl"] .form-label {
    float: right;
  }

  html[dir="rtl"] .form-control {
    text-align: right;
  }

  html[dir="rtl"] .card-header,
  html[dir="rtl"] .card-body {
    text-align: right;
  }

  html[dir="rtl"] .accordion-button {
    text-align: right;
    justify-content: flex-end;
  }

  html[dir="rtl"] .accordion-button::after {
    margin-left: 0;
    margin-right: auto;
  }

  html[dir="rtl"] .landing-hero-btn {
    text-align: right;
  }

  html[dir="rtl"] .hero-text-box {
    text-align: right;
  }

  html[dir="rtl"] .text-center {
    text-align: center !important;
  }
</style>
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
'resources/assets/vendor/libs/nouislider/nouislider.js',
'resources/assets/vendor/libs/swiper/swiper.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/front-page-landing.js'])
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Smooth scroll for same-page anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const targetId = this.getAttribute('href');
        if (targetId.length > 1 && document.querySelector(targetId)) {
          e.preventDefault();
          document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });

    // Smooth scroll for cross-page anchors (after navigation)
    if (window.location.hash && document.querySelector(window.location.hash)) {
      setTimeout(function () {
        document.querySelector(window.location.hash).scrollIntoView({
          behavior: 'smooth'
        });
      }, 300);
    }

    // Swiper slow auto-scroll for reviews
    if (window.Swiper) {
      var swiper = new Swiper('#swiper-reviews', {
        slidesPerView: 3,
        spaceBetween: 24,
        loop: true,
        autoplay: {
          delay: 3500, // 3.5 seconds per slide
          disableOnInteraction: false,
        },
        speed: 1200, // slow transition speed
        navigation: {
          nextEl: '#reviews-next-btn',
          prevEl: '#reviews-previous-btn',
        },
        breakpoints: {
          0: { slidesPerView: 1 },
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
        }
      });
    }
  });

  function switchToArabicRTL() {
    document.documentElement.setAttribute('dir', 'rtl');
    localStorage.setItem('templateCustomizer-landing-front--Rtl', 'true');
    localStorage.setItem('templateCustomizer-landing-front--Lang', 'ar');
    document.cookie = 'direction=rtl; path=/;';
    window.location.reload();
  }
  // Example: document.getElementById('arabic-btn').onclick = switchToArabicRTL;
</script>
@endsection

<script>
  (function() {
  // Utility to set direction and language
  function setDirectionAndLang(dir, lang) {
    document.documentElement.setAttribute('dir', dir);
    document.documentElement.setAttribute('lang', lang);
    localStorage.setItem('templateCustomizer-landing-front--Rtl', dir === 'rtl' ? 'true' : 'false');
    localStorage.setItem('templateCustomizer-landing-front--Lang', lang);
    document.cookie = 'direction=' + dir + '; path=/;';
    window.location.reload();
  }

  // Attach to language switcher
  document.addEventListener('DOMContentLoaded', function() {
    // Example: if you have a button or dropdown for language
    var arBtn = document.getElementById('arabic-btn');
    var enBtn = document.getElementById('english-btn');
    if (arBtn) {
      arBtn.onclick = function(e) {
        e.preventDefault();
        setDirectionAndLang('rtl', 'ar');
      };
    }
    if (enBtn) {
      enBtn.onclick = function(e) {
        e.preventDefault();
        setDirectionAndLang('ltr', 'en');
      };
    }
  });

  // On page load, set direction/lang if needed
  var isRTL = false;
  var lang = localStorage.getItem('templateCustomizer-landing-front--Lang');
  if (lang === 'ar' || localStorage.getItem('templateCustomizer-landing-front--Rtl') === 'true' || document.cookie.indexOf('direction=rtl') !== -1) {
    isRTL = true;
  }
  if (isRTL) {
    document.documentElement.setAttribute('dir', 'rtl');
    document.documentElement.setAttribute('lang', 'ar');
  } else {
    document.documentElement.setAttribute('dir', 'ltr');
    document.documentElement.setAttribute('lang', 'en');
  }
})();
</script>

@section('content')
<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative overflow-hidden"
      style="background: linear-gradient(120deg, #1e2335 0%, #f7fafc 100%); min-height20: ; padding-top:; padding-bottom:100;">
      <!-- Animated gradient background -->
      <div class="hero-animated-bg position-absolute top-0 start-0 w-100 h-100 z-0">
        <svg width="100%" height="100%" viewBox="0 0 1440 520" fill="none" xmlns="http://www.w3.org/2000/svg"
          style="position:absolute;top:0;left:0;z-index:0;">
          <defs>
            <radialGradient id="heroGrad1" cx="50%" cy="50%" r="80%">
              <stop offset="0%" stop-color="#1abc9c33" />
              <stop offset="100%" stop-color="#e0e7ff00" />
            </radialGradient>
            <radialGradient id="heroGrad2" cx="50%" cy="50%" r="80%">
              <stop offset="0%" stop-color="#22304a33" />
              <stop offset="100%" stop-color="#f7fafc00" />
            </radialGradient>
          </defs>
          <circle cx="200" cy="120" r="120" fill="url(#heroGrad1)" opacity="20">
            <animate attributeName="cy" values="120;160;120" dur="6s" repeatCount="indefinite" />
          </circle>
          <circle cx="1240" cy="400" r="100" fill="url(#heroGrad2)" opacity="0.07">
            <animate attributeName="cy" values="400;340;400" dur="7s" repeatCount="indefinite" />
          </circle>
          <rect x="700" y="60" width="160" height="160" rx="60" fill="#1abc9c18">
            <animate attributeName="x" values="700;740;700" dur="8s" repeatCount="indefinite" />
          </rect>
        </svg>
        <!-- Floating icons -->
        <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" class="hero-float-icon"
          style="position:absolute;top:90px;left:12vw;width:48px;animation:floatY 5s ease-in-out infinite;z-index:1;"
          alt="Rocket" />
        <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" class="hero-float-icon"
          style="position:absolute;bottom:80px;right:10vw;width:54px;animation:floatY2 7s ease-in-out infinite;z-index:1;"
          alt="Laptop" />
        <!-- More floating icons for hero -->
        <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" class="hero-float-icon"
          style="position:absolute;top:30px;right:18vw;width:36px;animation:floatY3 8s ease-in-out infinite;z-index:1;"
          alt="Diamond" />
        <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}" class="hero-float-icon"
          style="position:absolute;bottom:40px;left:8vw;width:36px;animation:floatY4 9s ease-in-out infinite;z-index:1;"
          alt="User" />
        <!-- Sparkles -->
        <div class="hero-sparkle sparkle1"></div>
        <div class="hero-sparkle sparkle2"></div>
        <div class="hero-sparkle sparkle3"></div>
      </div>
      <div class="container position-relative z-2">
        <div class="row align-items-center flex-row-reverse">
          <div class="col-lg-6 text-center position-relative mb-5 mb-lg-0">
            <!-- Custom images for left area: two big images, stacked vertically with large gap -->
            <div
              style="display: flex; flex-direction: column; align-items: center; gap: 3.5rem; margin-bottom: 2.5rem;">
              <img src="{{ asset('assets/img/front-pages/landing-page/image.png') }}" alt="Custom Image 1"
                style="max-width: 370px; width: 100%; height: auto; border-radius: 1.2em; box-shadow: 0 4px 24px #1abc9c22;">
              <style>
                /* Remove green hover line from the hero image */
                img[alt="Custom Image 1"]:hover {
                  box-shadow: 0 4px 24px #ffffff22 !important;
                  border: none !important;
                  outline: none !important;
                  filter: none !important;
                }
              </style>
            </div>
            <!-- Main Lottie Animation with floating and parallax effect -->
            <div id="lottie-hero" style="max-width: 420px; margin: 0 auto; will-change: transform;z-index:2;"></div>
            <!-- Secondary Lottie Animation (small, bottom right) -->
            <div id="lottie-hero-secondary"
              style="position:absolute;bottom:0;right:10%;width:90px;height:90px;z-index:2;"></div>
            <!-- Parallax floating shapes -->
            <div class="hero-parallax-shape"
              style="position:absolute;top:10%;left:60%;width:60px;height:60px;z-index:1;pointer-events:none;">
              <svg width="60" height="60">
                <circle cx="30" cy="30" r="28" fill="#1abc9c22" />
              </svg>
            </div>
            <div class="hero-parallax-shape"
              style="position:absolute;bottom:12%;left:20%;width:40px;height:40px;z-index:1;pointer-events:none;">
              <svg width="40" height="40">
                <rect x="0" y="0" width="40" height="40" rx="12" fill="#22304a22" />
              </svg>
            </div>
            <!-- Charts removed from hero section as requested -->
          </div>
          <div class="col-lg-6 text-center text-lg-start" style="margin-top: rem;">
            <h1 class="display-4 fw-bold mb-3" id="welcome-headline" style="color:#22304a;"></h1>
            <section id="landingSubjectStatements"
              class="position-relative mt-2 d-flex justify-content-center align-items-center"
              style="background: linear-gradient(120deg, #e0e7ff 60%, #f7fafc 100%); min-height: 120px; border-radius:2em; box-shadow:0 2px 16px #1abc9c22; max-width: 700px; margin: 0 auto; padding: 1.2rem 0;">
              <!-- Floating icons framing the statement -->
              <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}"
                style="position:absolute;top:24px;left:3vw;width:44px;animation:floatY 7s ease-in-out infinite;z-index:2;"
                alt="Rocket" />
              <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}"
                style="position:absolute;top:24px;right:3vw;width:44px;animation:floatY2 8s ease-in-out infinite;z-index:2;"
                alt="Laptop" />
              <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}"
                style="position:absolute;bottom:24px;left:10vw;width:36px;animation:floatY3 9s ease-in-out infinite;z-index:2;"
                alt="Diamond" />
              <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}"
                style="position:absolute;bottom:24px;right:10vw;width:36px;animation:floatY4 10s ease-in-out infinite;z-index:2;"
                alt="User" />
              <div class="subject-sparkle sparkle1"></div>
              <div class="subject-sparkle sparkle2"></div>
              <div class="subject-sparkle sparkle3"></div>
              <div class="w-100 text-center position-relative" style="z-index:3;">
                <div style="margin-top: 2.5rem;">
                  <h1 class="big-welcome-headline mb-3" style="margin-top: 1.5rem;">مرحبًا بك في مستقبل أعمالك</h1>
                </div>
                <h2 class="lead mb-3 fw-bold" style="color:#22304a;">ابدأ رحلتك الرقمية مع أنظمة ERP وCSS الحديثة، وحقق
                  نمو أعمالك بثقة وسهولة.</h2>
                <a href="#landingPricing" class="btn btn-lg btn-glow px-5 py-3 mt-1"
                  style="font-size:1.25rem; border-radius:2rem; font-weight:bold; letter-spacing:1px;">ابدأ نجاحك
                  الآن</a>
                <h2 class="subject-animated-headline mb-2" id="subject-headline"></h2>
                <p class="subject-animated-desc mb-3" id="subject-desc"></p>
                <!-- Removed duplicate 'ابدأ نجاحك الآن' button as requested -->
              </div>
              <script src="https://cdn.jsdelivr.net/npm/typeit@8.7.1/dist/typeit.min.js"></script>
              <script>
                document.addEventListener('DOMContentLoaded', function () {
                  new TypeIt('#subject-headline', {
                    strings: [
                      '🚀 انطلق بأعمالك نحو المستقبل مع أقوى حلول الإدارة الذكية',
                      '💡 كل ما تحتاجه للنجاح في منصة واحدة متكاملة',
                      '📊 تحكم، حلل، وحقق النمو مع أنظمة ERP وCSS الحديثة',
                      '✨ انضم إلى رواد الأعمال وكن جزءًا من قصص النجاح'
                    ],
                    speed: 60,
                    breakLines: false,
                    nextStringDelay: 1600,
                    loop: true,
                    waitUntilVisible: true
                  }).go();
                  new TypeIt('#subject-desc', {
                    strings: [
                      'ابدأ رحلتك الرقمية اليوم، وحقق أقصى استفادة من بياناتك ومواردك.',
                      'حلولنا تدعمك في كل خطوة: من الإدارة إلى التحليل إلى الابتكار.',
                      'بيئة آمنة، دعم متواصل، ونتائج ملموسة في وقت قياسي.',
                      'لا تتردد، المستقبل يبدأ الآن مع برامجنا الذكية.'
                    ],
                    speed: 38,
                    breakLines: false,
                    nextStringDelay: 2200,
                    loop: true,
                    waitUntilVisible: true
                  }).go();
                  function animateSparkle(cls, delay, x1, y1, x2, y2) {
                    var el = document.querySelector(cls);
                    if (!el) return;
                    el.animate([
                      { transform: `translate(${x1}px,${y1}px) scale(1)` },
                      { transform: `translate(${x2}px,${y2}px) scale(1.3)` },
                      { transform: `translate(${x1}px,${y1}px) scale(1)` }
                    ], {
                      duration: 3200 + delay,
                      iterations: Infinity,
                      delay: delay
                    });
                  }
                  animateSparkle('.sparkle1', 0, 120, 40, 140, 60);
                  animateSparkle('.sparkle2', 1200, 1280, 60, 1300, 80);
                  animateSparkle('.sparkle3', 800, 700, 30, 720, 50);
                });
              </script>
              <style>
                .big-welcome-headline {
                  font-size: 2.7rem;
                  font-weight: 900;
                  color: #22304a;
                  background: linear-gradient(90deg, #1abc9c 0%, #6c63ff 100%);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  background-clip: text;
                  text-fill-color: transparent;
                  letter-spacing: 2px;
                  text-shadow: 0 0 32px #1abc9c33, 0 0 8px #6c63ff22;
                  margin-bottom: 0.7em;
                  animation: glowTextBig 2.5s ease-in-out infinite alternate;
                }

                .subject-animated-headline {
                  font-size: 1.6rem;
                  font-weight: bold;
                  background: linear-gradient(90deg, #22304a 10%, #1abc9c 90%);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  background-clip: text;
                  text-fill-color: transparent;
                  letter-spacing: 1px;
                  animation: glowText 2.5s ease-in-out infinite alternate;
                  text-shadow: 0 0 12px #1abc9c33;
                }

                .subject-animated-desc {
                  font-size: 1.12rem;
                  color: #22304a;
                  font-weight: 500;
                  text-shadow: 0 2px 8px #1abc9c22;
                }

                .btn-glow {
                  background: linear-gradient(90deg, #1abc9c 0%, #6c63ff 100%);
                  color: #fff;
                  box-shadow: 0 0 18px #1abc9c33, 0 0 8px #6c63ff22;
                  border: none;
                  transition: box-shadow 0.2s, transform 0.2s;
                }

                .btn-glow:hover {
                  box-shadow: 0 0 32px #1abc9c77, 0 0 12px #6c63ff55;
                  transform: scale(1.04);
                }

                .subject-sparkle {
                  position: absolute;
                  width: 14px;
                  height: 14px;
                  background: radial-gradient(circle, #fff 60%, #1abc9c22 100%);
                  border-radius: 50%;
                  opacity: 0.7;
                  z-index: 2;
                  pointer-events: none;
                  box-shadow: 0 0 8px #1abc9c33;
                }

                .sparkle1 {
                  top: 38px;
                  left: 13vw;
                }

                .sparkle2 {
                  top: 60px;
                  right: 12vw;
                }

                .sparkle3 {
                  top: 90px;
                  left: 50vw;
                }

                @keyframes glowTextBig {
                  0% {
                    text-shadow: 0 0 8px #fff4, 0 0 2px #1abc9c22;
                  }

                  100% {
                    text-shadow: 0 0 48px #1abc9c99, 0 0 16px #6c63ff55;
                  }
                }

                @keyframes glowText {
                  0% {
                    text-shadow: 0 0 4px #fff2, 0 0 1px #1abc9c11;
                  }

                  100% {
                    text-shadow: 0 0 16px #1abc9c55, 0 0 4px #fff3;
                  }
                }

                @keyframes floatY {
                  0% {
                    transform: translateY(0);
                  }

                  50% {
                    transform: translateY(-18px);
                  }

                  100% {
                    transform: translateY(0);
                  }
                }

                @keyframes floatY2 {
                  0% {
                    transform: translateY(0);
                  }

                  50% {
                    transform: translateY(14px);
                  }

                  100% {
                    transform: translateY(0);
                  }
                }

                @keyframes floatY3 {
                  0% {
                    transform: translateY(0);
                  }

                  50% {
                    transform: translateY(-12px);
                  }

                  100% {
                    transform: translateY(0);
                  }
                }

                @keyframes floatY4 {
                  0% {
                    transform: translateY(0);
                  }

                  50% {
                    transform: translateY(12px);
                  }

                  100% {
                    transform: translateY(0);
                  }
                }
              </style>
            </section>
            <!-- Arabic paragraph under the button (left side) -->
            <div class="mt-5" style="max-width: 520px; margin-left: 0; margin-right: auto; margin-top: 2.5rem;">
              <p class="lead text-start"
                style="color:#22304a; line-height:2; font-size:1.1rem; font-weight:bold; text-align:left;">
                حلولنا الذكية تدعمك في كل خطوة نحو النجاح.<br>
                إدارة متكاملة لجميع عملياتك التجارية بسهولة وفعالية.<br>
                تقارير دقيقة تساعدك على اتخاذ قرارات أفضل.<br>
                دعم فني متواصل لضمان استمرارية أعمالك.<br>
                انضم إلى نخبة العملاء وحقق أهدافك بسرعة واحترافية.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="landing-hero-blank" style="display:none;"></div>
    </div>
    <!-- Lottie & Typewriter Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@8.7.1/dist/typeit.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Typewriter headline
        new TypeIt('#welcome-headline', {
          strings: ['مرحبًا بك في مستقبل إدارة الأعمال', 'Welcome to the Future of Business Management'],
          speed: 55,
          breakLines: false,
          nextStringDelay: 1200,
          loop: true,
          waitUntilVisible: true
        }).go();
        // Main Lottie animation with floating and parallax effect
        var lottieMain = lottie.loadAnimation({
          container: document.getElementById('lottie-hero'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'https://assets2.lottiefiles.com/packages/lf20_49rdyysj.json'
        });
        // Floating effect
        var floatEl = document.getElementById('lottie-hero');
        let floatDir = 1, floatY = 0;
        setInterval(function(){
          floatY += floatDir * 0.7;
          if(floatY > 18 || floatY < -18) floatDir *= -1;
          floatEl.style.transform = 'translateY(' + floatY + 'px)';
        }, 30);
        // Parallax effect for shapes
        document.addEventListener('mousemove', function(e){
          var shapes = document.querySelectorAll('.hero-parallax-shape');
          var x = (e.clientX / window.innerWidth - 0.5) * 2;
          var y = (e.clientY / window.innerHeight - 0.5) * 2;
          shapes.forEach(function(shape, i){
            var factor = (i+1) * 10;
            shape.style.transform = 'translate(' + (x*factor) + 'px,' + (y*factor) + 'px)';
          });
        });
        // Secondary Lottie animation (e.g. checkmark or sparkles)
        lottie.loadAnimation({
          container: document.getElementById('lottie-hero-secondary'),
          renderer: 'svg',
          loop: true,
          autoplay: true,
          path: 'https://assets2.lottiefiles.com/packages/lf20_2ks3pjua.json'
        });
        // Sparkle animation
        function animateSparkle(cls, delay, x1, y1, x2, y2) {
          var el = document.querySelector(cls);
          if (!el) return;
          el.animate([
            { transform: `translate(${x1}px,${y1}px) scale(1)` },
            { transform: `translate(${x2}px,${y2}px) scale(1.3)` },
            { transform: `translate(${x1}px,${y1}px) scale(1)` }
          ], {
            duration: 3200 + delay,
            iterations: Infinity,
            delay: delay
          });
        }
        animateSparkle('.sparkle1', 0, 60, 120, 80, 100);
        animateSparkle('.sparkle2', 800, 300, 400, 320, 420);
        animateSparkle('.sparkle3', 1600, 900, 200, 920, 220);
      });
    </script>
    <style>
      .hero-animated-bg {
        pointer-events: none;
      }

      .hero-float-icon {
        filter: drop-shadow(0 4px 16px #1abc9c33);
        opacity: 0.92;
      }

      @keyframes floatY {
        0% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(-18px);
        }

        100% {
          transform: translateY(0);
        }
      }

      @keyframes floatY2 {
        0% {
          transform: translateY(0);
        }

        50% {
          transform: translateY(14px);
        }

        100% {
          transform: translateY(0);
        }
      }

      .hero-sparkle {
        position: absolute;
        width: 18px;
        height: 18px;
        background: radial-gradient(circle, #fff 60%, #1abc9c33 100%);
        border-radius: 50%;
        opacity: 0.7;
        z-index: 2;
        pointer-events: none;
        box-shadow: 0 0 12px #1abc9c55;
      }

      .sparkle1 {
        top: 90px;
        left: 22vw;
      }

      .sparkle2 {
        top: 320px;
        left: 38vw;
      }

      .sparkle3 {
        top: 180px;
        left: 70vw;
      }

      .hero-parallax-shape {
        transition: transform 0.3s cubic-bezier(.4, 2, .6, 1);
      }
    </style>
  </section>
  <!-- Hero: End -->

  <!-- Useful features: Start -->
  <section id="landingFeatures" class="section-py landing-features">
    <div class="container">
      <!-- Floating icons for features section -->
      <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" class="features-float-icon"
        style="position:absolute;top:10px;left:2vw;width:28px;animation:floatY 6s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Rocket" />
      <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" class="features-float-icon"
        style="position:absolute;top:60px;right:4vw;width:28px;animation:floatY2 7s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Laptop" />
      <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" class="features-float-icon"
        style="position:absolute;bottom:10px;left:10vw;width:22px;animation:floatY3 8s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Diamond" />
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">{{ __('Key CSS Features') }}</span>
      </div>
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">{{ __('Everything you need') }}
        </span>
        {{ __('for modern Software & ERP UI') }}
      </h4>
      <p class="text-center mb-12">{{ __('Our CSS toolkit empowers your software and ERP systems with professionally.')
        }}</p>
      <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" alt="Responsive Design" />
          </div>
          <h5 class="mb-2">{{ __('Responsive Design') }}</h5>
          <p class="features-icon-description">{{ __('Seamless experience across all devices and screen sizes.') }}</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" alt="Performance" />
          </div>
          <h5 class="mb-2">{{ __('High Performance') }}</h5>
          <p class="features-icon-description">{{ __('Optimized CSS for fast load times and smooth interactions.') }}
          </p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/paper.png')}}" alt="Customizable" />
          </div>
          <h5 class="mb-2">{{ __('Customizable Themes') }}</h5>
          <p class="features-icon-description">{{ __('Easily adapt styles to match your brand and workflow.') }}</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/check.png')}}" alt="Utility Classes" />
          </div>
          <h5 class="mb-2">{{ __('Utility Classes') }}</h5>
          <p class="features-icon-description">{{ __('Speed up development with a rich set of utility-first classes.')
            }}</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/user.png')}}" alt="Accessibility" />
          </div>
          <h5 class="mb-2">{{ __('Accessibility') }}</h5>
          <p class="features-icon-description">{{ __('Built-in support for accessible and inclusive interfaces.') }}</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4">
            <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="Documentation" />
          </div>
          <h5 class="mb-2">{{ __('Comprehensive Docs') }}</h5>
          <p class="features-icon-description">{{ __('Clear documentation and examples for rapid onboarding.') }}</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Useful features: End -->

  <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
    <!-- What people say slider: Start -->
    <div class="container">
      <!-- Floating icons for reviews section -->
      <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}" class="reviews-float-icon"
        style="position:absolute;top:20px;right:6vw;width:28px;animation:floatY4 8s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="User" />
      <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" class="reviews-float-icon"
        style="position:absolute;bottom:20px;left:8vw;width:24px;animation:floatY 7s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Rocket" />
      <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
        <div class="col-md-6 col-lg-5 col-xl-3">
          <div class="mb-4">
            <span class="badge bg-label-primary">Real Customers Reviews</span>
          </div>
          <h4 class="mb-1">
            <span class="position-relative fw-extrabold z-1">What people say
          </h4>
          <p class="mb-5 mb-md-12">
            See what our customers have to<br class="d-none d-xl-block" />
            say about their experience.
          </p>
          <div class="landing-reviews-btns">
            <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn me-4 scaleX-n1-rtl"
              type="button">
              <i class="ti ti-chevron-left ti-md"></i>
            </button>
            <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
              <i class="ti ti-chevron-right ti-md"></i>
            </button>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-9">
          <div class="swiper-reviews-carousel overflow-hidden">
            <div class="swiper" id="swiper-reviews">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-1.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        “Vuexy is hands down the most useful front end Bootstrap theme I've ever used. I can't wait
                        to use it again for my next project.”
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Cecilia Payne</h6>
                          <p class="small text-muted mb-0">CEO of Airbnb</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-2.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                        dashboard sites on almost any project.”
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Eugenia Moore</h6>
                          <p class="small text-muted mb-0">Founder of Hubspot</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-3.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        This template is really clean & well documented. The docs are really easy to understand and
                        it's always easy to find a screenshot from their website.
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Curtis Fletcher</h6>
                          <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-4.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        All the requirements for developers have been taken into consideration, so I’m able to build
                        any interface I want.
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Sara Smith</h6>
                          <p class="small text-muted mb-0">Founder of Continental</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-5.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        “I've never used a theme as versatile and flexible as Vuexy. It's my go to for building
                        dashboard sites on almost any project.”
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Eugenia Moore</h6>
                          <p class="small text-muted mb-0">Founder of Hubspot</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="card h-100">
                    <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                      <div class="mb-4">
                        <img src="{{asset('assets/img/front-pages/branding/logo-6.png')}}" alt="client logo"
                          class="client-logo img-fluid" />
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nemo mollitia, ad eum
                        officia numquam nostrum repellendus consequuntur!
                      </p>
                      <div class="text-warning mb-4">
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star-filled"></i>
                        <i class="ti ti-star"></i>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="avatar me-3 avatar-sm">
                          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div>
                          <h6 class="mb-0">Sara Smith</h6>
                          <p class="small text-muted mb-0">Founder of Continental</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- What people say slider: End -->
    <hr class="m-0 mt-6 mt-md-12" />
    <!-- Logo slider: Start -->
    <div class="container my-5 p-0" style="max-width:100vw;">
      <div class="brand-swiper-ribbon"
        style="width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw;background:linear-gradient(100deg,#22304a 0%,#3b82f6 50%,#6366f1 100%);border-radius:56px;box-shadow:0 8px 36px 0 rgba(34, 48, 74, 0.13),0 2px 12px 0 rgba(26,188,156,0.10),0 0 0 1.5px rgba(255,255,255,0.10) inset;border:1.5px solid #22304a33;padding:32px 0 30px 0;overflow:hidden;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(8px) saturate(1.2);transition:background 0.4s,box-shadow 0.3s,border 0.3s;position:relative;">
        <div class="swiper brand-swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide text-center"><img src="{{asset('assets/img/front-pages/landing-page/dk.png')}}"
                alt="Brand 1" style="max-height:50px;" /></div>
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/images-5-461x641-1.png')}}" alt="Brand 2"
                style="max-height:50px;" /></div>
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/189521941_1236120093474471_5030798641116395584_n.png')}}"
                alt="Brand 3" style="max-height:50px;" /></div>
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/119892522_103340761529552_1681279422379907272_n.png')}}"
                alt="Brand 4" style="max-height:50px;" /></div>
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/25487289_974450832702540_4555387533491905443_o.png')}}"
                alt="Brand 5" style="max-height:50px;" /></div>
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/887293_303903919738713_503662710_o.png')}}"
                alt="Brand 6" style="max-height:50px;" /></div>
            <!-- New Brand -->
            <div class="swiper-slide text-center"><img
                src="{{asset('assets/img/front-pages/landing-page/1.-Commercial-Fire-Door-Company-in-Egypt-Radwan-City-metal.png')}}"
                alt="Brand 7" style="max-height:50px;" /></div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .brand-swiper-ribbon {
        width: 100vw !important;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        background: linear-gradient(100deg, #22304a 0%, #3b82f6 50%, #6366f1 100%);
        border-radius: 56px;
        box-shadow: 0 8px 36px 0 rgba(34, 48, 74, 0.13), 0 2px 12px 0 rgba(26, 188, 156, 0.10), 0 0 0 1.5px rgba(255, 255, 255, 0.10) inset;
        border: 1.5px solid #22304a33;
        padding: 32px 0 30px 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(8px) saturate(1.2);
        transition: background 0.4s, box-shadow 0.3s, border 0.3s;
        position: relative;
      }

      @media (prefers-color-scheme: dark) {
        .brand-swiper-ribbon {
          background: linear-gradient(100deg, #1e2335 0%, #22304a 60%, #3b82f6 100%);
          border: 1.5px solid #3b82f655;
          box-shadow: 0 8px 36px 0 #1abc9c22, 0 2px 12px 0 #22304a44, 0 0 0 1.5px #fff1 inset;
        }
      }

      .brand-swiper-ribbon::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 56px;
        pointer-events: none;
        box-shadow: 0 0 48px 8px rgba(106, 140, 255, 0.10) inset, 0 0 0 2px rgba(255, 255, 255, 0.10) inset;
        z-index: 1;
      }

      .brand-swiper .swiper-slide img {
        filter: grayscale(0.04) contrast(1.10) drop-shadow(0 2px 8px #6a8cff33);
        transition: filter 0.2s, transform 0.2s, box-shadow 0.2s;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.22);
        padding: 6px 16px;
        box-shadow: 0 2px 12px 0 rgba(106, 140, 255, 0.08);
        position: relative;
        z-index: 2;
      }

      .brand-swiper .swiper-slide img:hover {
        filter: none;
        transform: scale(1.09) rotate(-2deg);
        background: #f7fafc;
        box-shadow: 0 4px 24px #6a8cff44, 0 2px 12px #aee9f988;
      }

      @media (max-width: 768px) {
        .brand-swiper-ribbon {
          border-radius: 22px;
          padding: 10px 0;
        }
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (window.Swiper) {
          new Swiper('.brand-swiper', {
            slidesPerView: 6,
            spaceBetween: 0,
            loop: true,
            centeredSlides: false,
            autoplay: {
              delay: 0,
              disableOnInteraction: false,
            },
            speed: 8000, // Slower scroll
            breakpoints: {
              0: { slidesPerView: 2 },
              576: { slidesPerView: 3 },
              992: { slidesPerView: 4 },
              1200: { slidesPerView: 6 }
            }
          });
        }
      });
    </script>
    <!-- Logo slider: End -->
  </section>
  <!-- Real customers reviews: End -->

  <!-- Our great team: Start -->

  <!-- Our great team: End -->

  <!-- Pricing plans: Start -->
  <section id="landingPricing" class="section-py bg-body landing-pricing">
    <div class="container">
      <!-- Floating icons for pricing section -->
      <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" class="pricing-float-icon"
        style="position:absolute;top:18px;left:4vw;width:24px;animation:floatY3 7s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Diamond" />
      <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" class="pricing-float-icon"
        style="position:absolute;bottom:18px;right:6vw;width:24px;animation:floatY2 8s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Laptop" />
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">{{ __('Pricing Plans') }}</span>
      </div>
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">{{ __('Flexible pricing for every business') }}
        </span>
      </h4>
      <p class="text-center pb-2 mb-7">{{ __('Choose the best plan for your software or ERP project.') }}</p>
      <div class="text-center mb-12">
        <div class="position-relative d-inline-block pt-3 pt-md-0">
          <label class="switch switch-sm switch-primary me-0">
            <span class="switch-label fs-6 text-body me-3">{{ __('Pay Monthly') }}</span>
            <input type="checkbox" class="switch-input price-duration-toggler" checked />
            <span class="switch-toggle-slider">
              <span class="switch-on"></span>
              <span class="switch-off"></span>
            </span>
            <span class="switch-label fs-6 text-body ms-3">{{ __('Pay Annual') }}</span>
          </label>
          <div class="pricing-plans-item position-absolute d-flex">
            <img src="{{asset('assets/img/front-pages/icons/pricing-plans-arrow.png')}}"
              alt="{{ __('pricing plans arrow') }}" class="scaleX-n1-rtl" />
            <span class="fw-medium mt-2 ms-1">{{ __('Save 25%') }}</span>
          </div>
        </div>
      </div>
      <div class="row g-6 pt-lg-5">
        <div class="col-xl-6 col-lg-6 mb-4">
          <!-- Main Plan: Start -->
          <div class="card" style="background:#FFF7B2;">
            <div class="card-header border-0" style="background:#FFF7B2;">
              <h2 class="fw-bold mb-0" style="color:#111;font-size:2.3rem;">{{ __('Focus ERP Programs') }}</h2>
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Enrich your growing community.') }}</p>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Special Features:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li><a href="/product-details">{{ __('• Sales and customer program') }}</a></li>
                <li><a href="/product-details">{{ __('• Supplier and procurement program') }}</a></li>
                <li><a href="/product-details">{{ __('• Direct integration with the tax system.') }}</a></li>
                <li><a href="/product-details">{{ __('• General accounts Program') }}</a></li>
                <li><a href="/product-details">{{ __('• Production and manufacturing control program') }}</a></li>
                <li><a href="/product-details">{{ __('• Human resources and payroll program') }}</a></li>
                <li><a href="/product-details">{{ __('• Documentary Credits Program') }}</a></li>
                <li><a href="/product-details">{{ __('• Maintenance Program') }}</a></li>
                <li><a href="/product-details">{{ __('• General features of the program') }}</a></li>
                <li><a href="/product-details">{{ __('• Points of Contact') }}</a></li>
                <li><a href="/product-details">{{ __('And more') }}</a></li>

              </ul>

              </ul>
            </div>
            <div class="card-body">
              <div class="d-grid mt-4">
                <a href="/product-details#focus-erp-section" class="btn btn-pricing">{{ __('Know more') }}</a>
              </div>
            </div>
          </div>
          <!-- Main Plan: End -->
        </div>
        <div class="col-xl-6 col-lg-6 mb-4">
          <!-- Elite Plan: Start -->
          <div class="card" style="background:#d8d8e7;">
            <div class="card-header border-0" style="background:#d8d8e7;">
              <h2 class="fw-bold mb-0" style="color:#111;font-size:2.3rem;">{{ __('ERPLite') }}</h2>
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Support Special Performance') }}</p>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Special Features:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Comprehensive management of sales, inventory, purchasing, and banking.') }}</li>
                <li>{{ __('• Full integration between departments (sales, purchasing, and accounting).') }}</li>
                <li>{{ __('• Smart alerts for credit limits and due dates.') }}</li>
                <li>{{ __('• Accurately determine representative commissions.') }}</li>
                <li>{{ __('• Detailed Smart Reports.') }}</li>
              </ul>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Benefits:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Smart management of company resources and inventory.') }}</li>
                <li>{{ __('• Full control of accounts and transactions.') }}</li>
                <li>{{ __('• Reduces waste and increases the efficiency of daily operations.') }}</li>
                <li>{{ __('• Compatible with barcode scanners and various devices.') }}</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="d-grid mt-4">
                <a href="/product-details#erplite-section" class="btn btn-pricing">{{ __('Know more') }}</a>
              </div>
            </div>
          </div>
          <!-- Elite Plan: End -->
        </div>
        <div class="col-xl-6 col-lg-6 mb-4">
          <!-- Premium Plan: Start -->
          <div class="card" style="background:#c6e7ee;">
            <div class="card-header border-0" style="background:#c6e7ee;">
              <h2 class="fw-bold mb-0" style="color:#111;font-size:2.3rem;">{{ __('HR') }}</h2>
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Take support to the next level.') }}</p>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Special Features:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Automatic payroll, tax, and insurance calculations.') }}</li>
                <li>{{ __('• Support for payroll variables (incentives, deductions, loans).') }}</li>
                <li>{{ __('• Direct integration with fingerprint devices.') }}</li>
                <li>{{ __('• Comprehensive management of absence, tardiness, and vacations.') }}</li>
                <li>{{ __('• Support for flexible policies tailored to each employee.') }}</li>
              </ul>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Benefits:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Saving time and effort in managing personnel affairs.') }}</li>
                <li>{{ __('• High accuracy in calculating payroll and insurance.') }}</li>
                <li>{{ __('• Effectively monitoring and managing employee performance.') }}</li>
                <li>{{ __('• Flexibility in structuring and distributing shifts.') }}</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="d-grid mt-4">
                <a href="/product-details#hr-management-section" class="btn btn-pricing">{{ __('Know more') }}</a>
              </div>
            </div>
          </div>
          <!-- Premium Plan: End -->
        </div>
        <div class="col-xl-6 col-lg-6 mb-4">
          <!-- E-Invoice Plan: Start -->
          <div class="card" style="background:#e0f7fa;">
            <div class="card-header border-0" style="background:#e0f7fa;">
              <h2 class="fw-bold mb-0" style="color:#111;font-size:2.3rem;">{{ __('E-Invoice') }}</h2>
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('All-inclusive for enterprises.') }}</p>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Special Features:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Compliant with Egyptian Tax Authority standards.') }}</li>
                <li>{{ __('• Supports EGS/GS1 unified coding.') }}</li>
                <li>{{ __('• Direct integration with the tax system.') }}</li>
                <li>{{ __('• Authenticated electronic signature.') }}</li>
                <li>{{ __('• Ability to import data from Excel.') }}</li>
              </ul>
              <hr style="border-top:2px solid #111;width:70%;margin:auto;">
              <p class="fw-bold mt-2 mb-2" style="color:#222;">{{ __('Benefits:') }}</p>
              <ul class="list-unstyled" style="color:#111;font-size:1.1rem;">
                <li>{{ __('• Ease of sending and approving invoices from tax authorities.') }}</li>
                <li>{{ __('• Reduced accounting errors.') }}</li>
                <li>{{ __('• Speed up tax processes and saved effort.') }}</li>
                <li>{{ __('• Comprehensive technical support and training.') }}</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="d-grid mt-4">
                <a href="/product-details#e-invoice-section" class="btn btn-pricing">{{ __('Know more') }}</a>
              </div>
            </div>
          </div>
          <!-- Ultimate Plan: End -->
        </div>
      </div>
      <div class="text-center mb-4" style="margin-bottom:0 !important;">
      </div>
  </section>
  <!-- Pricing plans: End -->

  <!-- Button to redirect to /tutorial -->


  <!-- Fun facts: Start -->
  <section id="landingFunFacts" class="section-py landing-fun-facts"
    style="padding-top:0 !important; padding-bottom:0 !important;">
    <div class="container" style="padding-top:0 !important; padding-bottom:0 !important;">
      <!-- Floating icons for fun facts section -->
      <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" class="funfacts-float-icon"
        style="position:absolute;top:8px;left:12vw;width:22px;animation:floatY 6s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Rocket" />
      <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}" class="funfacts-float-icon"
        style="position:absolute;bottom:8px;right:10vw;width:22px;animation:floatY4 7s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="User" />
      <div class="row gy-6">
        <div class="col-sm-6 col-lg-3">
          <div class="card border border-primary shadow-none">
            <div class="card-body text-center">
              <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" alt="laptop" class="mb-4" />
              <h3 class="mb-0">{{ __('10k+') }}</h3>
              <p class="fw-medium mb-0">
                {{ __('Projects') }}<br />
                {{ __('Styled') }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border border-success shadow-none">
            <div class="card-body text-center">
              <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}" alt="users" class="mb-4" />
              <h3 class="mb-0">{{ __('100k+') }}</h3>
              <p class="fw-medium mb-0">
                {{ __('Developers') }}<br />
                {{ __('Empowered') }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border border-info shadow-none">
            <div class="card-body text-center">
              <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" alt="rating" class="mb-4" />
              <h3 class="mb-0">{{ __('4.9/5') }}</h3>
              <p class="fw-medium mb-0">
                {{ __('User') }}<br />
                {{ __('Satisfaction') }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card border border-warning shadow-none">
            <div class="card-body text-center">
              <img src="{{asset('assets/img/front-pages/icons/check-warning.png')}}" alt="guarantee" class="mb-4" />
              <h3 class="mb-0">{{ __('100%') }}</h3>
              <p class="fw-medium mb-0">
                {{ __('Money Back') }}<br />
                {{ __('Guarantee') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fun facts: End -->

  <!-- Data Visualizations: Start -->
  <section id="landingGraphs" class="section-py landing-graphs bg-body"
    style="background: linear-gradient(120deg, #f7fafc 60%, #e0e7ff 100%);">
    <div class="container">
      <!-- Floating icons for graphs section -->
      <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" class="graphs-float-icon"
        style="position:absolute;top:12px;left:6vw;width:22px;animation:floatY3 7s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Diamond" />
      <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" class="graphs-float-icon"
        style="position:absolute;bottom:12px;right:8vw;width:22px;animation:floatY2 8s ease-in-out infinite;z-index:1;pointer-events:none;"
        alt="Laptop" />
      /* Floating icons for all sections */
      .features-float-icon, .reviews-float-icon, .pricing-float-icon, .funfacts-float-icon, .graphs-float-icon {
      position: absolute;
      opacity: 0.92;
      filter: drop-shadow(0 2px 8px #1abc9c22);
      pointer-events: none;
      }
      @media (max-width: 991px) {
      .features-float-icon, .reviews-float-icon, .pricing-float-icon, .funfacts-float-icon, .graphs-float-icon {
      display: none;
      }
      }
      <div class="text-center mb-4">
        <span class="badge bg-label-primary dashboard-badge">لوحة تحكم تفاعلية</span>
      </div>
      <h4 class="text-center mb-1 dashboard-heading">
        <span class="position-relative fw-extrabold z-1">رؤية بيانية متقدمة لأعمالك</span>
      </h4>
      <p class="text-center mb-12 dashboard-desc">تابع مؤشرات الأداء، المبيعات، الموارد البشرية، والمزيد عبر رسوم بيانية
        تفاعلية
        وجذابة.</p>
      <div class="row g-5 justify-content-center align-items-stretch">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow h-100">
            <div class="card-header bg-transparent border-0 pb-0 dashboard-card-header">
              <h5 class="mb-0 fw-bold text-primary dashboard-card-title">مبيعات السنة</h5>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <canvas id="salesBarChart" height="220"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow h-100">
            <div class="card-header bg-transparent border-0 pb-0 dashboard-card-header">
              <h5 class="mb-0 fw-bold text-success dashboard-card-title">مؤشر الأداء الشهري</h5>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <canvas id="performanceLineChart" height="220"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card shadow h-100">
            <div class="card-header bg-transparent border-0 pb-0 dashboard-card-header">
              <h5 class="mb-0 fw-bold text-info dashboard-card-title">توزيع الموارد البشرية</h5>
            </div>
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <canvas id="hrPieChart" height="220"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      /* Dashboard/Charts section text color: black in light mode, white in dark mode */
      .dashboard-badge,
      .dashboard-heading,
      .dashboard-desc,
      .dashboard-card-title,
      .dashboard-card-header,
      .dashboard-legend-label {
        color: #111 !important;
      }

      @media (prefers-color-scheme: dark) {

        .dashboard-badge,
        .dashboard-heading,
        .dashboard-desc,
        .dashboard-card-title,
        .dashboard-card-header,
        .dashboard-legend-label {
          color: #fff !important;
        }
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Sales Bar Chart
        new Chart(document.getElementById('salesBarChart').getContext('2d'), {
          type: 'bar',
          data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],

            datasets: [{
              label: 'المبيعات (ألف جنيه)',
              data: [120, 150, 180, 130, 200, 220, 210, 250, 230, 240, 260, 300],
              backgroundColor: 'rgba(26, 188, 156, 0.7)',
              borderColor: '#1abc9c',
              borderWidth: 2,
              borderRadius: 8,
              hoverBackgroundColor: '#1abc9c',
              hoverBorderColor: '#22304a',
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: { display: false },
              tooltip: { enabled: true }
            },
            animation: {
              duration: 1800,
              easing: 'easeOutBounce'
            },
            scales: {
              x: { grid: { display: false } },
              y: { beginAtZero: true, grid: { color: '#e0e7ff' } }
            }
          }
        });
        // Performance Line Chart
        new Chart(document.getElementById('performanceLineChart').getContext('2d'), {
          type: 'line',
          data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
            datasets: [{
              label: 'مؤشر الأداء',
              data: [70, 75, 80, 78, 85, 90, 88, 92, 95, 97, 99, 100],
              fill: true,
              borderColor: '#00b894',
              backgroundColor: 'rgba(0,184,148,0.12)',
              tension: 0.4,
              pointBackgroundColor: '#fff',
              pointBorderColor: '#00b894',
              pointRadius: 5,
              pointHoverRadius: 8,
              pointHoverBackgroundColor: '#1abc9c',
              pointHoverBorderColor: '#22304a',
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: { display: false },
              tooltip: { enabled: true }
            },
            animation: {
              duration: 2000,
              easing: 'easeInOutQuart'
            },
            scales: {
              x: { grid: { display: false } },
              y: { beginAtZero: true, grid: { color: '#e0e7ff' } }
            }
          }
        });
        // HR Pie Chart
        // Detect dark mode for chart legend labels
        function getLegendLabelColor() {
          return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? '#fff' : '#111';
        }
        new Chart(document.getElementById('hrPieChart').getContext('2d'), {
          type: 'doughnut',
          data: {
            labels: ['إدارة', 'مبيعات', 'دعم فني', 'موارد بشرية', 'مالية'],
            datasets: [{
              label: 'الموظفين',
              data: [12, 28, 16, 8, 6],
              backgroundColor: [
                'rgba(26, 188, 156, 0.8)',
                'rgba(34, 48, 74, 0.8)',
                'rgba(0, 184, 148, 0.8)',
                'rgba(52, 152, 219, 0.8)',
                'rgba(241, 196, 15, 0.8)'
              ],
              borderColor: '#fff',
              borderWidth: 3,
              hoverOffset: 16
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: true,
                position: 'bottom',
                labels: { color: getLegendLabelColor(), font: { size: 15, weight: 'bold' },
                  generateLabels: function(chart) {
                    // Add a class for custom CSS if needed
                    const original = Chart.defaults.plugins.legend.labels.generateLabels;
                    return original(chart).map(label => ({...label, fontColor: getLegendLabelColor()}));
                  }
                }
              },
              tooltip: { enabled: true }
            },
            animation: {
              animateRotate: true,
              animateScale: true,
              duration: 1800,
              easing: 'easeOutElastic'
            }
          }
        });
      });
    </script>
    <style>
      .landing-graphs .card {
        border-radius: 1.5rem;
        border: none;
        box-shadow: 0 4px 32px #1abc9c11;
      }

      .landing-graphs .card-header {
        background: none;
        border: none;
        text-align: center;
      }

      .landing-graphs .card-body {
        background: none;
      }

      .landing-graphs canvas {
        max-width: 100%;
      }

      @media (max-width: 991px) {
        .landing-graphs .card {
          margin-bottom: 2rem;
        }
      }
    </style>
  </section>
  <!-- Data Visualizations: End -->

  <!-- FAQ: Start -->
  <section id="landingFAQ" class="section-py bg-body landing-faq">
    <div class="container">
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">{{ __('FAQ') }}</span>
      </div>
      <h4 class="text-center mb-1">{{ __('Frequently asked questions') }}
        </span>
      </h4>
      <p class="text-center mb-12 pb-md-4">{{ __('Browse through these FAQs to find answers about our CSS toolkit') }}
      </p>
      <div class="row gy-12 align-items-center">
        <div class="col-lg-5">
          <div class="text-center">
            <img src="{{asset('assets/img/front-pages/landing-page/faq-boy-with-logos.png')}}" alt="faq css"
              class="faq-image" />
          </div>
        </div>
        <div class="col-lg-7">
          <div class="accordion" id="accordionExample">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne"
                  aria-expanded="true" aria-controls="accordionOne">
                  {{ __('Is this CSS toolkit compatible with all ERP systems?') }}
                </button>
              </h2>
              <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ __('CSS is designed to be framework-agnostic and works with all major ERP and software platforms.')
                  }}
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                  data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                  {{ __('Can I customize the styles for my brand?') }}
                </button>
              </h2>
              <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ __('The toolkit is built for easy customization and theming to match your brand identity.') }}
                </div>
              </div>
            </div>
            <div class="card accordion-item active">
              <h2 class="accordion-header" id="headingThree">
                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                  data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                  {{ __('Do you provide documentation and support?') }}
                </button>
              </h2>
              <div id="accordionThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ __('Yes, we offer comprehensive documentation and dedicated support for all users.') }}
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                  data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                  {{ __('Is there a money-back guarantee?') }}
                </button>
              </h2>
              <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ __("Yes, we offer a 100% money-back guarantee if you're not satisfied within 30 days.") }}
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                  data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                  {{ __('How do I get started?') }}
                </button>
              </h2>
              <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {{ __('follow our quick start guide to integrate the CSS toolkitinto your project.') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ: End -->

  <!-- CTA: Start -->
  <section id="landingCTA" class="section-py landing-cta position-relative p-lg-0 pb-0">
    <img src="{{asset('assets/img/front-pages/backgrounds/cta-bg-'.$configData['style'].'.png')}}"
      class="position-absolute bottom-0 end-0 scaleX-n1-rtl h-100 w-100 z-n1" alt="cta image"
      data-app-light-img="front-pages/backgrounds/cta-bg-light.png"
      data-app-dark-img="front-pages/backgrounds/cta-bg-dark.png" />
    <div class="container">
      <div class="row align-items-center gy-12">
        <div class="col-lg-6 text-start text-sm-center text-lg-start">
          <h3 class="cta-title text-primary fw-bold mb-0">موقع شركتنا</h3>
          <h5 class="text-body mb-8">
            Address: 57 Rabaa El-Estethmary, Buildings, Nasr City, Cairo Governorate 11765, Egypt
          </h5>
          <a href="https://maps.google.com/?q=30.074449371926555,31.335883724711987" target="_blank"
            class="btn btn-lg btn-primary">View Location on Map</a>
        </div>
        <div class="col-lg-6 pt-lg-12 text-center text-lg-end">
          <iframe src="https://www.google.com/maps?q=30.074449371926555,31.335883724711987&hl=ar&z=16&output=embed"
            width="100%" height="320"
            style="border:0;border-radius:1.2em;box-shadow:0 4px 24px #1abc9c22;min-width:280px;max-width:700px;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA: End -->

  <!-- Contact Us: Start -->
  <section id="landingContact" class="section-py bg-body landing-contact">
    <div class="container">
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">{{ __('Contact Us') }}</span>
      </div>
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">{{ __('Let\'s style your business') }}
        </span>
        {{ __('together') }}
      </h4>
      <p class="text-center mb-12 pb-md-4">{{ __('Any question or remark? Just write us a message about your software.')
        }}</p>
      <div class="row g-6">
        <div class="col-lg-5">
          <div class="contact-img-box position-relative border p-2 h-100">
            <img src="{{asset('assets/img/front-pages/icons/contact-border.png')}}" alt="{{ __('contact border') }}"
              class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />
            <img src="{{asset('assets/img/front-pages/landing-page/contact-customer-service.png')}}"
              alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
            <div class="p-4 pb-2">
              <div class="row g-4">
                <div class="col-md-6 col-lg-12 col-xl-6">
                  <div class="d-flex align-items-center">
                    <div class="badge bg-label-primary rounded p-1_5 me-3"><i class="ti ti-mail ti-lg"></i></div>
                    <div>
                      <p class="mb-0">{{ __('contact.email') }}</p>
                      <h6 class="mb-0"><a href="mailto:css-support@example.com"
                          class="text-heading">css-support@example.com</a>
                      </h6>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-12 col-xl-6">
                  <div class="d-flex align-items-center">
                    <div class="badge bg-label-success rounded p-1_5 me-3"><i class="ti ti-phone-call ti-lg"></i></div>
                    <div>
                      <p class="mb-0">{{ __('contact.phone') }}</p>
                      <h6 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="mb-2">{{ __('contact.send_message') }}</h4>
              <p class="mb-6">
                {{ __('contact.intro') }}<br class="d-none d-lg-block" />
                {{ __('contact.intro2') }}
              </p>
              <form>
                <div class="row g-4">
                  <div class="col-md-6">
                    <label class="form-label" for="contact-form-fullname">{{ __('Full Name') }}</label>
                    <input type="text" class="form-control" id="contact-form-fullname"
                      placeholder="{{ __('contact.full_name_placeholder') }}" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="contact-form-email">{{ __('Email') }}</label>
                    <input type="text" id="contact-form-email" class="form-control"
                      placeholder="{{ __('contact.email_placeholder') }}" />
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="contact-form-message">{{ __('contact.message') }}</label>
                    <textarea id="contact-form-message" class="form-control" rows="7"
                      placeholder="{{ __('contact.message_placeholder') }}"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('contact.send_inquiry') }}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us: End -->
</div>
@endsection