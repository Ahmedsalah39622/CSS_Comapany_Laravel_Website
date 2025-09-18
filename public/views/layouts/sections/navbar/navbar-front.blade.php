@php
use Illuminate\Support\Facades\Route;
$currentRouteName = Route::currentRouteName();
$activeRoutes = ['front-pages-pricing', 'front-pages-payment', 'front-pages-checkout', 'front-pages-help-center'];
$activeClass = in_array($currentRouteName, $activeRoutes) ? 'active' : '';
@endphp
<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
      <!-- Menu logo wrapper: Start -->
      <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4 me-xl-8">
        <!-- Mobile menu toggle: Start-->
        <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="ti ti-menu-2 ti-lg align-middle text-heading fw-medium"></i>
        </button>
        <!-- Mobile menu toggle: End-->
        <a href="/" class="app-brand-link">
          <span class="app-brand-logo demo"
            style="font-size: 3.5rem; font-weight: 900; letter-spacing: 0.25em; color: #C3C6DF; line-height: 1; display: inline-block;">CSS</span>
          <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">{{ config('variables.templateName') }}</span>
        </a>
      </div>
      <!-- Menu logo wrapper: End -->
      <!-- Menu wrapper: Start -->
      <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
        <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button"
          data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <i class="ti ti-x ti-lg"></i>
        </button>
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/#top">{{ __('Home') }}</a>
          </li>
          <li class="nav-item">
            <a href="/#landingFeatures" class="nav-link">{{ __('Features') }}</a>
          </li>
          <li class="nav-item">
            <a href="/#landingPricing" class="nav-link">{{ __('Pricing') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#landingFAQ">{{ __('FAQ') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#landingContact">{{ __('Contact us') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#pages" id="pagesDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ __('Pages') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
              <li><a class="dropdown-item" href="#landingPricing">{{ __('Pricing') }}</a></li>
              <li><a class="dropdown-item" href="#help-center">{{ __('Help Center') }}</a></li>
              <!-- Add more dropdown items as needed -->
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/about-us">{{ __('About Us') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/business-partners">{{ __('Business Partners') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/product-details">{{ __('Products') }}</a>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <!-- Menu wrapper: End -->
      <!-- Toolbar: Start -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Language Switcher -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ strtoupper(app()->getLocale()) }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
            <li><a class="dropdown-item" href="/lang/en">English</a></li>
            <li><a class="dropdown-item" href="/lang/ar">العربية</a></li>
          </ul>
        </li>
        @if($configData['hasCustomizer'] == true)
        <!-- Style Switcher -->
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='ti ti-lg'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                <span class="align-middle"><i class='ti ti-sun me-3'></i>Light</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                <span class="align-middle"><i class="ti ti-moon-stars me-3"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                <span class="align-middle"><i class="ti ti-device-desktop-analytics me-3"></i>System</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- / Style Switcher-->
        @endif
        <!-- navbar button: Start -->
        <li>
          <a href="/auth/login-basic" class="btn btn-primary">
            Login/Register <i class="ti ti-login"></i>
          </a>
        </li>
        <!-- navbar button: End -->
      </ul>
      <!-- Toolbar: End -->
    </div>
  </div>
</nav>
<!-- Navbar: End -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('a.nav-link, .dropdown-item').forEach(function(link) {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href && href.startsWith('#') && href.length > 1) {
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });
});
</script>
