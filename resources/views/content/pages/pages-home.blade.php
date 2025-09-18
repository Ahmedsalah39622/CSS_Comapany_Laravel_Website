<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

@extends('layouts/layoutMaster')

@section('title', 'Dashboard - Lifeline Hospital')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/dashboards-crm.js'])
@endsection

@section('content')
<div class="row g-6">

  <!-- Appointments Today -->
  <div class="col-xxl-2 col-md-4 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-3">
        <h5 class="card-title mb-1">{{ __('Appointments') }}</h5>
        <p class="card-subtitle">{{ __('Today') }}</p>
      </div>
      <div class="card-body">
        <div id="appointmentsToday"></div>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="mb-0">42</h4>
          <small class="text-success">+8.6%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Patients Admitted Last Month -->
  <div class="col-xxl-2 col-md-4 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="card-title mb-1">{{ __('Patients') }}</h5>
        <p class="card-subtitle">{{ __('Last Month') }}</p>
      </div>
      <div id="patientsLastMonth"></div>
      <div class="card-body pt-0">
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">175</h4>
          <small class="text-danger">-5.2%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Revenue -->
  <div class="col-xxl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="badge p-2 bg-label-danger mb-3 rounded"><i class="ti ti-credit-card ti-28px"></i></div>
        <h5 class="card-title mb-1">{{ __('Total Revenue') }}</h5>
        <p class="card-subtitle">{{ __('Last Week') }}</p>
        <p class="text-heading mb-3 mt-1">$28.5k</p>
        <div>
          <span class="badge bg-label-danger">-3.2%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Operations -->
  <div class="col-xxl-2 col-md-5 col-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="badge p-2 bg-label-success mb-3 rounded"><i class="ti ti-scissors ti-28px"></i></div>
        <h5 class="card-title mb-1">{{ __('Total Operations') }}</h5>
        <p class="card-subtitle">{{ __('Last Week') }}</p>
        <p class="text-heading mb-3 mt-1">24</p>
        <div>
          <span class="badge bg-label-success">+12.5%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Patient Growth -->
  <div class="col-xxl-4 col-md-7">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex flex-column me-xl-7">
          <div class="card-title mb-auto">
            <h5 class="mb-2 text-nowrap">{{ __('Patient Growth') }}</h5>
            <p class="mb-0">{{ __('Weekly Report') }}</p>
          </div>
          <div class="chart-statistics">
            <h3 class="card-title mb-1">+124</h3>
            <span class="badge bg-label-success">+15.2%</span>
          </div>
        </div>
        <div id="patientGrowth"></div>
      </div>
    </div>
  </div>

  <!-- Doctor Performance Tabs -->
  <div class="col-xl-8 col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0">
          <h5 class="mb-1">{{ __('Doctor Performance') }}</h5>
          <p class="card-subtitle">{{ __('Yearly Performance Overview') }}</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
            id="doctorPerformanceTabsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="doctorPerformanceTabsId">
            <a class="dropdown-item" href="javascript:void(0);">{{ __('View More') }}</a>
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Delete') }}</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="nav nav-tabs widget-nav-tabs pb-8 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
          <li class="nav-item">
            <a href="javascript:void(0);"
              class="nav-link btn active d-flex flex-column align-items-center justify-content-center" role="tab"
              data-bs-toggle="tab" data-bs-target="#navs-appointments-id" aria-controls="#navs-appointments-id"
              aria-selected="true">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-calendar ti-md"></i></div>
              <h6 class="tab-widget-title mb-0 mt-2">{{ __('Appointments') }}</h6>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);"
              class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab"
              data-bs-toggle="tab" data-bs-target="#navs-surgeries-id" aria-controls="#navs-surgeries-id"
              aria-selected="false">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-scissors ti-md"></i></div>
              <h6 class="tab-widget-title mb-0 mt-2">{{ __('Surgeries') }}</h6>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);"
              class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab"
              data-bs-toggle="tab" data-bs-target="#navs-revenue-id" aria-controls="#navs-revenue-id"
              aria-selected="false">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-currency-dollar ti-md"></i></div>
              <h6 class="tab-widget-title mb-0 mt-2">{{ __('Revenue') }}</h6>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);"
              class="nav-link btn d-flex flex-column align-items-center justify-content-center" role="tab"
              data-bs-toggle="tab" data-bs-target="#navs-feedback-id" aria-controls="#navs-feedback-id"
              aria-selected="false">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-message-circle ti-md"></i></div>
              <h6 class="tab-widget-title mb-0 mt-2">{{ __('Feedback') }}</h6>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link btn d-flex align-items-center justify-content-center disabled"
              role="tab" data-bs-toggle="tab" aria-selected="false">
              <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-plus ti-md"></i></div>
            </a>
          </li>
        </ul>
        <div class="tab-content p-0 ms-0 ms-sm-2">
          <div class="tab-pane fade show active" id="navs-appointments-id" role="tabpanel">
            <div id="doctorPerformanceAppointments"></div>
          </div>
          <div class="tab-pane fade" id="navs-surgeries-id" role="tabpanel">
            <div id="doctorPerformanceSurgeries"></div>
          </div>
          <div class="tab-pane fade" id="navs-revenue-id" role="tabpanel">
            <div id="doctorPerformanceRevenue"></div>
          </div>
          <div class="tab-pane fade" id="navs-feedback-id" role="tabpanel">
            <div id="doctorPerformanceFeedback"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Patient Demographics -->
  <div class="col-xl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">{{ __('Patient Demographics') }}</h5>
          <p class="card-subtitle">{{ __('Monthly Overview') }}</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
            id="patientDemographics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="patientDemographics">
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Download') }}</a>
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Refresh') }}</a>
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Share') }}</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-us rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">1,245</h6>
                </div>
                <small class="text-body">United States</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  25.8%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-in rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">865</h6>
                </div>
                <small class="text-body">India</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  12.4%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-cn rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">1,024</h6>
                </div>
                <small class="text-body">China</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  14.8%
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Activity Timeline -->
  <div class="col-xxl-6 order-2">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center"><i class="ti ti-list-details me-3"></i> {{
          __('Activity Timeline') }}</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button"
            id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Download') }}</a>
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Refresh') }}</a>
            <a class="dropdown-item" href="javascript:void(0);">{{ __('Share') }}</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-xxl-0">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">12 {{ __('Appointments Completed') }}</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">
                {{ __('Appointments have been successfully completed.') }}
              </p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">{{ __('New Patient Admitted') }}</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">
                {{ __('Patient John Doe admitted for surgery.') }}
              </p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">{{ __('New Doctor Onboarded') }}</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">
                {{ __('Dr. Jane Smith joined the cardiology department.') }}
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Place this in your main layout, e.g., layouts/layoutMaster.blade.php -->
<form method="POST" action="{{ route('change.language') }}">
  @csrf
  <select name="locale" onchange="this.form.submit()">
    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
    <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>العربية</option>
  </select>
</form>
@endsection