{{-- Business Partners Page --}}
@extends('layouts/layoutfront')
@section('title', __('Business Partners'))
@section('content')
<div class="container section-py">
  <h1 class="text-primary display-5 fw-bold mb-4">{{ __('Business Partners') }}</h1>
  <p class="lead mb-5">{{ __('We are proud to collaborate with industry-leading partners to deliver the best solutions
    for our clients.') }}</p>
  <div class="row gy-5 align-items-stretch">
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img
              src="{{ asset('assets/img/front-pages/landing-page/1.-Commercial-Fire-Door-Company-in-Egypt-Radwan-City-metal.png') }}"
              alt="Radwan City Metal" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-danger mb-2">Radwan City Metal</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Metal Products and Solutions') }}</h5>
            <p class="mb-2">Radwan City Metal guarantees the quality of all its products, with certain product ranges
              guaranteed for up to 7 years*. Our team of quality engineers and customer service representatives can
              provide advice on installation and maintenance, as well as the correct application of products.</p>
          </div>
        </div>
        <div class="position-absolute top-0 end-0 bg-primary rounded-circle"
          style="width:60px;height:60px;transform:translate(30%,-30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img src="{{ asset('assets/img/front-pages/landing-page/output-onlinepngtools00.png') }}"
              alt="Egyptian Canadian Group" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-dark mb-2">Egyptian Canadian Group for Industry & Trading</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Low voltage Power & Control Solutions') }}</h5>
            <p class="mb-2">Committed to providing the premium values of low voltage Power & Control Solutions with
              products along with international quality & standards, capitalizing on qualified human resources,
              expanding sales and distribution networking through a partnership with a leading technology provider.</p>
          </div>
        </div>
        <div class="position-absolute bottom-0 start-0 bg-danger rounded-circle"
          style="width:60px;height:60px;transform:translate(-30%,30%);"></div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('assets/img/front-pages/branding/logo-1.png')}}" alt="Partner 1"
        class="img-fluid mb-3 rounded-4 shadow" style="max-height:80px;" />
      <h5>{{ __('Partner One') }}</h5>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('assets/img/front-pages/branding/logo-2.png')}}" alt="Partner 2"
        class="img-fluid mb-3 rounded-4 shadow" style="max-height:80px;" />
      <h5>{{ __('Partner Two') }}</h5>
    </div>
    <div class="col-md-4 text-center">
      <img src="{{asset('assets/img/front-pages/branding/logo-3.png')}}" alt="Partner 3"
        class="img-fluid mb-3 rounded-4 shadow" style="max-height:80px;" />
      <h5>{{ __('Partner Three') }}</h5>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img src="{{ asset('assets/img/front-pages/landing-page/dk.png') }}" alt="Alfa Electric"
              class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-primary mb-2">KAISSY ENGINEERING INDUSTRIES</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Industrial cooling field & plastics') }}</h5>
            <p class="mb-2">An engineering firm that deals with the study, layout, budgeting, and recommendation of
              design and equipment for major engineering projects in different manufacturing fields according to
              requirements. specialized in the industrial cooling field as well as the plastics production of technical
              and medical products. Have many references in the field of process cooling in plastics, pharmaceutical,
              confectionery as well as many food industries. We have a long association and cooperation with Euroklimat
              S.P.A. in Italy in the production of water chillers for industrial and process applications & Have a
              substantial reference base of various chemical and process cooling projects developed by our engineers for
              our customers in the Middle East during the past several decades.</p>
          </div>
        </div>
        <div class="position-absolute top-0 end-0 bg-success rounded-circle"
          style="width:60px;height:60px;transform:translate(30%,-30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img src="{{ asset('assets/img/front-pages/landing-page/887293_303903919738713_503662710_o.png') }}"
              alt="Future Tech Solutions" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-info mb-2">New Chemical for detergents and disinfectants</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Detergents & Disinfectants') }}</h5>
            <p class="mb-2">A company for detergents and disinfectants for all types of farms “ phenic, formalin,
              iodine, liquid soap, chloro-sulfates, sulfates, permanganate, distilled water, and a compound to clean
              tanks, and water pipes </p>
          </div>
        </div>
        <div class="position-absolute bottom-0 start-0 bg-info rounded-circle"
          style="width:60px;height:60px;transform:translate(-30%,30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img src="{{ asset('assets/img/front-pages/landing-page/logo.png') }}" alt="Green Energy Group"
              class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-success mb-2">Argan deluxe professional</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __(' Luxury Cosmetics Made in Canada') }}</h5>
            <p class="mb-2">A company for Luxury Cosmetics “ oil Hair & Body Serum – Oil Nourishing Shampoo – Oil
              Nourishing Conditioner – Oil Curl-Defining Cream – Oil Refreshing Shine Spray – Oil Nutrition Infusing
              Mask ”</p>
          </div>
        </div>
        <div class="position-absolute top-0 end-0 bg-warning rounded-circle"
          style="width:60px;height:60px;transform:translate(30%,-30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img
              src="{{ asset('assets/img/front-pages/landing-page/119892522_103340761529552_1681279422379907272_n.png') }}"
              alt="Mega Construction" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-warning mb-2">WINTAG UPVC FOR WINDOWS – DOORS – SHUTTERS</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('UPVC WINDOWS SERVICES') }}</h5>
            <p class="mb-2">Win Tag Company is the exclusive agent of AXA Egypt for the Combin and Forna accessories
              sectors in Fayoum Governorate.</p>
          </div>
        </div>
        <div class="position-absolute bottom-0 start-0 bg-primary rounded-circle"
          style="width:60px;height:60px;transform:translate(-30%,30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img src="{{ asset('assets/img/front-pages/landing-page/images-5-461x641-1.png') }}" alt="Tech Innovators"
              class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-secondary mb-2">CORAL HILLS RESORT</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Luxury Resorts') }}</h5>
            <p class="mb-2">At the beginning of 2000, in the most wonderful spot in the world Sharm El Sheikh, started
              with our first creativity DIVE INN RESORT

              Then in 2007, we opened the magnificent CORAL HILLS RESORT – SHARM EL SHEIKH to guarantee a marvelous
              vacation for all the world humanity

              As we always believe that the client’s dreams are our main concern for success and continuity, we opened
              our second CORAL HILLS RESORT – MARSA ALAM in July 2010.

              Then we built CORAL HILLS RESORT– NORTH COAST. in Alexandria City ” 183 km “, on a charming Sea view spot
              on the Mediterranean over 300,000 m2</p>
          </div>
        </div>
        <div class="position-absolute top-0 end-0 bg-dark rounded-circle"
          style="width:60px;height:60px;transform:translate(30%,-30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img
              src="{{ asset('assets/img/front-pages/landing-page/25487289_974450832702540_4555387533491905443_o.png') }}"
              alt="NextGen Solutions" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-primary mb-2">FUTURE WINDOWS FOR UPVC WINDOWS & DOOR SYSTEMS</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('UPVC WINDOWS & DOOR SYSTEMS SERVICES') }}</h5>
            <p class="mb-2">Future Windows company one of the leading companies in manufacturing and installing UPVC
              windows and doors in Egypt according to quality</p>
          </div>
        </div>
        <div class="position-absolute bottom-0 start-0 bg-secondary rounded-circle"
          style="width:60px;height:60px;transform:translate(-30%,30%);"></div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card h-100 border-0 shadow-lg bg-light position-relative rounded-4" style="overflow:hidden;">
        <div class="row g-0 align-items-center h-100">
          <div class="col-md-5 text-center p-4">
            <img
              src="{{ asset('assets/img/front-pages/landing-page/189521941_1236120093474471_5030798641116395584_n.png') }}"
              alt="HealthCare Plus" class="img-fluid rounded-4 shadow"
              style="max-width:220px;max-height:140px;object-fit:cover;background:#fff;" />
          </div>
          <div class="col-md-7 p-4">
            <h3 class="fw-bold text-danger mb-2">Gawad SERVICE CENTER FOR CAR Maintenance</h3>
            <h5 class="fw-semibold text-secondary mb-3">{{ __('Vehicle body shop') }}</h5>
            <p class="mb-2">All maintenance services, New and imported car spare parts, installation of spare parts, car
              electricity services, Freon charging services, and oil change services</p>
          </div>
        </div>
        <div class="position-absolute top-0 end-0 bg-info rounded-circle"
          style="width:60px;height:60px;transform:translate(30%,-30%);"></div>
      </div>
    </div>
  </div>
</div>
@endsection