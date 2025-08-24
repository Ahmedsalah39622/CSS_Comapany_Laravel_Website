{{-- About Us Page --}}
@extends('layouts/layoutfront')
@section('title', __('About Us'))
@section('content')
<div class="container section-py">
  <div class="row align-items-center mb-8">
    <div class="col-lg-7 mb-4 mb-lg-0">
      <h1 class="text-primary display-3 fw-extrabold mb-3">{{ __('About Us') }}</h1>
      <p class="lead mb-4">{{ __('We are dedicated to providing modern and robust CSS solutions for software.') }}</p>
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="d-flex align-items-center mb-2">
            <i class="ti ti-bulb text-warning display-6 me-3"></i>
            <span class="fs-5 fw-bold">{{ __('Innovation') }}</span>
          </div>
          <p class="text-muted">{{ __('We constantly innovate to deliver the best design and UI/UX solutions.')}}</p>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center mb-2">
            <i class="ti ti-shield-check text-success display-6 me-3"></i>
            <span class="fs-5 fw-bold">{{ __('Quality') }}</span>
          </div>
          <p class="text-muted">{{ __('Our commitment to quality ensures reliable, scalable products') }}</p>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center mb-2">
            <i class="ti ti-users text-info display-6 me-3"></i>
            <span class="fs-5 fw-bold">{{ __('Customer Focus') }}</span>
          </div>
          <p class="text-muted">{{ __('We put our clients at the center of everything we do.') }}</p>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center mb-2">
            <i class="ti ti-heart text-danger display-6 me-3"></i>
            <span class="fs-5 fw-bold">{{ __('Integrity') }}</span>
          </div>
          <p class="text-muted">{{ __('We act with honesty, transparency, and respect in all our relationships.') }}</p>
        </div>
      </div>
      <a href="#landingContact" class="btn btn-lg btn-outline-primary mt-2 px-5 py-2">{{ __('Contact Us') }}</a>
    </div>
    <div class="col-lg-5 text-center">
      <img src="{{ asset('assets/img/front-pages/landing-page/CSS.png') }}" alt="About Us"
        class="img-fluid rounded-4 shadow-lg" style="max-height:420px;object-fit:cover;" />
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-md-6 mb-4 mb-md-0">
      <div class="card border-0 shadow h-100 bg-light">
        <div class="card-body">
          <h3 class="fw-bold text-primary mb-3"><i class="ti ti-eye me-2"></i>{{ __('Our Vision') }}</h3>
          <p class="fs-5">{{ __('To be the leading provider of innovative CSS toolkits and design systems') }}</p>
          <ul class="list-unstyled mt-3">
            <li><i class="ti ti-check text-success me-2"></i>{{ __('Empowering digital transformation') }}</li>
            <li><i class="ti ti-check text-success me-2"></i>{{ __('Setting new standards in UI/UX') }}</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-0 shadow h-100 bg-light">
        <div class="card-body">
          <h3 class="fw-bold text-primary mb-3"><i class="ti ti-star me-2"></i>{{ __('Our Values') }}</h3>
          <ul class="fs-5 mb-0">
            <li>{{ __('Innovation') }}</li>
            <li>{{ __('Quality') }}</li>
            <li>{{ __('Customer Focus') }}</li>
            <li>{{ __('Integrity') }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row align-items-center mb-8">
    <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
      <img src="{{ asset('assets/img/front-pages/landing-page/faq-boy-with-logos.png') }}" alt="Team"
        class="img-fluid rounded-4 shadow-lg" style="max-height:420px;object-fit:cover;" />
    </div>
    <div class="col-lg-6 order-lg-1">
      <h2 class="fw-bold mb-3">{{ __('Meet Our Team') }}</h2>
      <p class="fs-5 mb-4">{{ __('Our team consists of passionate designers, developers, and strategists.') }}</p>
      <div class="row">
        <div class="col-6 mb-3">
          <div class="d-flex align-items-center">
            <img src="{{ asset('') }}" alt="Lead CSS Architect" class="rounded-circle me-3" width="48" height="48" />
            <div>
              <div class="fw-bold">{{ __('Lead CSS Architect') }}</div>
              <div class="text-muted small">{{ __('10+ years experience') }}</div>
            </div>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="d-flex align-items-center">
            <img src="{{ asset('') }}" alt="UI Designer" class="rounded-circle me-3" width="48" height="48" />
            <div>
              <div class="fw-bold">{{ __('UI Designer') }}</div>
              <div class="text-muted small">{{ __('Award-winning designer') }}</div>
            </div>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="d-flex align-items-center">
            <img src="{{ asset('') }}" alt="ERP Integration Lead" class="rounded-circle me-3" width="48" height="48" />
            <div>
              <div class="fw-bold">{{ __('ERP Integration Lead') }}</div>
              <div class="text-muted small">{{ __('Expert in enterprise systems') }}</div>
            </div>
          </div>
        </div>
        <div class="col-6 mb-3">
          <div class="d-flex align-items-center">
            <img src="{{ asset('') }}" alt="Documentation & Support" class="rounded-circle me-3" width="48"
              height="48" />
            <div>
              <div class="fw-bold">{{ __('Documentation & Support') }}</div>
              <div class="text-muted small">{{ __('Always here to help') }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-12">
      <div class="card border-0 shadow-sm bg-gradient-primary text-white">
        <div class="card-body">
          <h2 class="fw-bold mb-3"><i class="ti ti-target me-2"></i>{{ __('Why Choose Us?') }}</h2>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="text-center">
                <i class="ti ti-award display-4 mb-2"></i>
                <h5 class="fw-bold">{{ __('Award-Winning Solutions') }}</h5>
                <p>{{ __('Recognized for excellence in UI/UX and enterprise design systems.') }}</p>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="text-center">
                <i class="ti ti-rocket display-4 mb-2"></i>
                <h5 class="fw-bold">{{ __('Cutting-Edge Technology') }}</h5>
                <p>{{ __('We use the latest technologies to deliver fast, secure, and scalable solutions.') }}</p>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="text-center">
                <i class="ti ti-users display-4 mb-2"></i>
                <h5 class="fw-bold">{{ __('Client-Centric Approach') }}</h5>
                <p>{{ __('Your business goals are our top priority. We work closely with you for success.') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-12">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h2 class="fw-bold text-primary mb-3"><i class="ti ti-world me-2"></i>{{ __('Our Global Impact') }}</h2>
          <p class="fs-5">{{ __('We have empowered thousands of businesses to achieve digital transformation.') }}</p>
          <div class="row mt-4">
            <div class="col-md-3 text-center">
              <h3 class="fw-bold text-primary">10k+</h3>
              <p>{{ __('Projects Delivered') }}</p>
            </div>
            <div class="col-md-3 text-center">
              <h3 class="fw-bold text-primary">100k+</h3>
              <p>{{ __('Users Empowered') }}</p>
            </div>
            <div class="col-md-3 text-center">
              <h3 class="fw-bold text-primary">4.9/5</h3>
              <p>{{ __('Satisfaction Rate') }}</p>
            </div>
            <div class="col-md-3 text-center">
              <h3 class="fw-bold text-primary">100%</h3>
              <p>{{ __('Money Back Guarantee') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-12">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h2 class="fw-bold text-primary mb-3"><i class="ti ti-message-dots me-2"></i>{{ __('Testimonials') }}</h2>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="bg-light rounded-3 p-4 shadow-sm h-100">
                <p class="mb-2">{{ __('“The CSS toolkit transformed our ERP interface. Highly recommended!”') }}</p>
                <p class="text-muted mb-0"><strong>{{ __('John Doe') }}</strong>, {{ __('CTO, Tech Company') }}</p>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="bg-light rounded-3 p-4 shadow-sm h-100">
                <p class="mb-2">{{ __('“A game changer for our software development process. The design system is
                  top-notch.”') }}</p>
                <p class="text-muted mb-0"><strong>{{ __('Jane Smith') }}</strong>, {{ __('Product Manager, Another Tech
                  Co') }}</p>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="bg-light rounded-3 p-4 shadow-sm h-100">
                <p class="mb-2">{{ __('“Easy to integrate and customize. Our software UI is now consistent and
                  beautiful.”') }}</p>
                <p class="text-muted mb-0"><strong>{{ __('Emily Johnson') }}</strong>, {{ __('Lead Developer, Startup')
                  }}</p>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="bg-light rounded-3 p-4 shadow-sm h-100">
                <p class="mb-2">{{ __('“The support and documentation are outstanding. Made our implementation a
                  breeze.”') }}</p>
                <p class="text-muted mb-0"><strong>{{ __('Michael Brown') }}</strong>, {{ __('CEO, Established
                  Business') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-8">
    <div class="col-12">
      <div class="card border-0 shadow-sm bg-light">
        <div class="card-body">
          <h2 class="fw-bold text-primary mb-3"><i class="ti ti-phone me-2"></i>{{ __('Contact Information') }}</h2>
          <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
              <ul class="list-unstyled fs-5 mb-0">
                <li class="mb-3 d-flex align-items-center">
                  <i class="ti ti-mail text-primary me-3"></i>
                  <span><strong>{{ __('Email') }}:</strong> <a href="mailto:info@csscompany.com"
                      class="text-decoration-underline">info@csscompany.com</a></span>
                </li>
                <li class="mb-3 d-flex align-items-center">
                  <i class="ti ti-phone-call text-success me-3"></i>
                  <span><strong>{{ __('Phone') }}:</strong> <a href="tel:+1234567890"
                      class="text-decoration-underline">+1 234 567 890</a></span>
                </li>
                <li class="mb-3 d-flex align-items-center">
                  <i class="ti ti-map-pin text-danger me-3"></i>
                  <span><strong>{{ __('Address') }}:</strong> {{ __('123 CSS Street, Tech City, Country') }}</span>
                </li>
                <li class="mb-3 d-flex align-items-center">
                  <i class="ti ti-world text-info me-3"></i>
                  <span><strong>{{ __('Website') }}:</strong> <a href="https://www.csscompany.com" target="_blank"
                      class="text-decoration-underline">www.csscompany.com</a></span>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <form class="p-4 bg-white rounded-3 shadow-sm">
                <h5 class="fw-bold mb-3">{{ __('Send us a message') }}</h5>
                <div class="mb-3">
                  <label for="contactName" class="form-label">{{ __('Full Name') }}</label>
                  <input type="text" class="form-control" id="contactName" placeholder="{{ __('Enter your name') }}">
                </div>
                <div class="mb-3">
                  <label for="contactEmail" class="form-label">{{ __('Email') }}</label>
                  <input type="email" class="form-control" id="contactEmail" placeholder="{{ __('Enter your email') }}">
                </div>
                <div class="mb-3">
                  <label for="contactMessage" class="form-label">{{ __('Message') }}</label>
                  <textarea class="form-control" id="contactMessage" rows="4"
                    placeholder="{{ __('Type your message here...') }}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">{{ __('Send Message') }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection