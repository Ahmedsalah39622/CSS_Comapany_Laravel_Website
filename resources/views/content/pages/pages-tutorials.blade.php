@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutfront')

@section('title', __('Tutorial Videos'))

@section('vendor-style')
@vite([
'"resources/assets/vendor/libs/nouislider/nouislider.scss"',
'"resources/assets/vendor/libs/swiper/swiper.scss"'
])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
<style>
  .video-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 2.2rem;
    margin-top: 2.5rem;
  }

  .video-card {
    background: #232b47;
    border-radius: 1.2rem;
    box-shadow: 0 4px 24px #2563eb22;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    transition: box-shadow 0.18s, transform 0.18s;
  }

  .video-card:hover {
    box-shadow: 0 8px 32px #2563eb44;
    transform: translateY(-4px) scale(1.01);
  }

  .video-thumb {
    width: 100%;
    aspect-ratio: 16/9;
    background: #1e293b;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .video-thumb iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 0.7rem 0.7rem 0 0;
    background: #1e293b;
  }

  .video-title {
    color: #fff;
    font-weight: 700;
    font-size: 1.08rem;
    margin: 1.1rem 0 0.2rem 0;
    text-align: center;
    letter-spacing: 0.01em;
  }

  .video-desc {
    color: #8cb4ff;
    font-size: 0.97rem;
    text-align: center;
    margin-bottom: 1.1rem;
    padding: 0 1.2rem;
  }

  @media (max-width: 900px) {
    .video-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }
  }

  @media (max-width: 600px) {
    .video-grid {
      grid-template-columns: 1fr;
      gap: 1rem;
    }

    .video-title {
      font-size: 1rem;
    }

    .video-desc {
      font-size: 0.93rem;
    }
  }
</style>
@endsection

@section('vendor-script')
@vite([
'"resources/assets/vendor/libs/nouislider/nouislider.js"',
'"resources/assets/vendor/libs/swiper/swiper.js"'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/front-page-landing.js'])
<script>
  document.addEventListener('DOMContentLoaded', function () {
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
  });
</script>
@endsection

@section('content')
<a id="top"></a>
<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Tutorials Hero: Start -->
  <section id="tutorial-hero">
    <div class="section-py landing-hero position-relative">
      <div class="container">
        <div class="hero-text-box text-center position-relative mb-5">
          <h1 class="text-primary hero-title display-6 fw-extrabold">{{ __('Tutorial Videos') }}</h1>
          <h2 class="hero-sub-title h6 mb-6">
            {{ __('Watch step-by-step video guides for the system') }}<br class="d-none d-lg-block" />
            {{ __('Learn how to use every feature easily!') }}
          </h2>
        </div>
      </div>
    </div>
    <div class="landing-hero-blank"></div>
  </section>
  <!-- Tutorials Hero: End -->

  <!-- Tutorials Videos: Start -->
  <section id="tutorialVideos" class="section-py landing-features">
    <div class="container">
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">{{ __('Video Tutorials') }}</span>
      </div>
      <div class="text-center mb-4">
        <a href="/tutorials" class="btn btn-primary">{{ __('Go to Tutorials') }}</a>
      </div>
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">{{ __('All you need to master the system') }}
          <span style="cursor:pointer" onclick="window.location.href='/'">
            <img src="{{asset('assets/img/front-pages/icons/section-title-icon.png')}}" alt="{{ __('css icon') }}"
              class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
          </span>
        </span>
      </h4>
      <p class="text-center mb-12">{{ __('Browse the puzzle of video guides below and click any video to start
        learning!') }}</p>
      <div class="video-grid">
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/l1br4A6-bIg?start=19" title="Tutorial 1"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">Part1</div>
        </div>
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/ljH2fyVs1us?start=260" title="Tutorial 2"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">HR Salary</div>
        </div>
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/36GzNyQGwJU?start=280" title="Tutorial 3"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">SalseOrder</div>
        </div>
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/chkkzqH19tQ?start=283" title="Tutorial 4"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">ERPLite</div>
        </div>
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/lXDeqoNoYPQ?start=132" title="Tutorial 5"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">PO</div>
        </div>
        <div class="video-card">
          <div class="video-thumb">
            <iframe src="https://www.youtube.com/embed/E9Hrdq62lqc?start=145" title="Tutorial 6"
              allowfullscreen></iframe>
          </div>
          <div class="video-title">إيصال الاستلام والشبكات</div>
        </div>
      </div>

      <!-- Topics Accordion: Start -->
      <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
          <div class="accordion" id="topicsAccordion">
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingPO">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapsePO" aria-expanded="false" aria-controls="collapsePO">
                  P.O اوامر الشراء للموردين
                </button>
              </h2>
              <div id="collapsePO" class="accordion-collapse collapse" aria-labelledby="headingPO"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال أوامر الشراء الخاص بالموردين وربطها بطلب الشراء الخاص سواء كانت مشتريات استيرادية أو
                      مشتريات محلية واختيار المورد المطلوب لعمل أمر شراء</li>
                    <li>ادخال المصاريف الخاصة بأمر الشراء سواء كانت مصاريف شحنات استيرادية من خلال شاشة الشحنة أو ادخال
                      شاشة مصاريف مشتريات المحلية وربطها بأمر الشراء</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingInspection">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseInspection" aria-expanded="false" aria-controls="collapseInspection">
                  فحص واستلام
                </button>
              </h2>
              <div id="collapseInspection" class="accordion-collapse collapse" aria-labelledby="headingInspection"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال بيانات واختيار الاصناف الموجودة فى امر الشراء وربطها بشاشة الفحص والاستلام لتحديد الاصناف
                      الصالحة والغير صالحة لفحصها من قبل مسئول الجودة قبل البدء فى عملية اضافتها على المخازن</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingStoreAdd">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseStoreAdd" aria-expanded="false" aria-controls="collapseStoreAdd">
                  اذن الاضافة على المخازن
                </button>
              </h2>
              <div id="collapseStoreAdd" class="accordion-collapse collapse" aria-labelledby="headingStoreAdd"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>
                      يتم من خلالها ادخال اصناف اذن الاضافة وتحديد نوع الاضافة (اضافة من خلال اذن فحص واستلام رقم وغير
                      ذلك ) وربط رقم الفحص والاستلام بإذن الاضافة مباشرة على حسب نوع الاضافة سواء كانت اضافة من خلال فحص
                      واستلام أو اضافة مرتجع أواضافة من خلال امر شغل تصنيع منتجات
                    </li>
                    <li>
                      امكانية ايضا من خلال شاشة اذن الاضافة اضافة المواد الخام اللازمة لعملية التصنيع ويتم فى هذة الشاشة
                      انشاء قيد محاسبى اتوماتيكيا وهو<br>
                      من ح / تكلفة المخزون<br>
                      الى ح / بضاعة بغرض البيع
                    </li>
                    <li>
                      ويتم فى اعداد الدليل المحاسبى تحديد حساب كل مخزون على حدة لسهولة تحديد تكلفة انواع المخزون كلا على
                      حده
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingInvoice">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseInvoice" aria-expanded="false" aria-controls="collapseInvoice">
                  فاتورة شراء استيرادية / محلية
                </button>
              </h2>
              <div id="collapseInvoice" class="accordion-collapse collapse" aria-labelledby="headingInvoice"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>
                      يتم من خلالها اختيار اذن الاضافة المرتبط بالمورد لعمل فاتورة شراء سواء كانت فاتورة شراء محلية او
                      كانت فاتورة شراء استيرادية ويتم من خلالها انشاء قيد المشتريات اتوماتيكيا وتحديد التوجية المحاسبى
                      حسب نوع الشراء
                    </li>
                    <li>
                      فى حالة فاتورة شراء استيرادية:<br>
                      من ح / مشتريات استيرادية<br>
                      من ح / خصم مسموح به<br>
                      الى ح / المورد<br>
                      الى ح / ضريبة خصم واضافة
                    </li>
                    <li>
                      فى حالة فاتورة شراء محلية:<br>
                      من ح / مشتريات محلية<br>
                      من ح / خصم مسموح به<br>
                      الى ح / المورد<br>
                      الى ح / ضريبة خصم واضافة
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingPurchaseReports">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapsePurchaseReports" aria-expanded="false"
                  aria-controls="collapsePurchaseReports">
                  تقارير المشتريات
                </button>
              </h2>
              <div id="collapsePurchaseReports" class="accordion-collapse collapse"
                aria-labelledby="headingPurchaseReports" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>تفصيلي سداد فواتير المشتريات</li>
                    <li>آخر أسعار المشتريات</li>
                    <li>صافي يومية المشتريات</li>
                    <li>سجل المشتريات</li>
                    <li>تقارير عروض الاسعار</li>
                    <li>سجل عروض الأسعار</li>
                    <li>تجميع اوامر الشراء</li>
                    <li>الإلتزامات المالية للمشتريات</li>
                    <li>سجل اوامر الشراء</li>
                    <li>متابعة أوامر الشراء</li>
                    <li>تقارير الضرائب</li>
                    <li>تقرير يومية المشتريات خلال فترة بدون اصناف</li>
                    <li>تقرير يومية المشتريات من الاصناف خلال فترة</li>
                    <li>تقرير دفعات الموردين خلال فترة (فواتير شراء - دفعات)</li>
                    <li>تقرير دفعات الموردين</li>
                    <li>الخصومات على المشتريات</li>
                    <li>تفصيلى مشتريات الاصناف</li>
                    <li>مشتريات الموردين الشهرى</li>
                    <li>مشتريات الأصناف الشهرى</li>
                    <li>تحليلي مشتريات الموردين مع الأصناف</li>
                    <li>تحليلي مشتريات الأصناف مع الموردين</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingWarehouse">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseWarehouse" aria-expanded="false" aria-controls="collapseWarehouse">
                  برنامج المخازن والمستودعات
                </button>
              </h2>
              <div id="collapseWarehouse" class="accordion-collapse collapse" aria-labelledby="headingWarehouse"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>إضافة عدد كبير من المخازن والمنتجات وسهولة إدارتها</li>
                    <li>سهولة إجراء عمليات التحويل من مخزن إلى آخر</li>
                    <li>مجموعة واسعة من وحدات القياس وإمكانية الإضافة إليها</li>
                    <li>تحديد الحد الأقصى والأدنى لكل كمية من المنتجات وتنبيه المستخدم عند الوصول إليها</li>
                    <li>ربط حركة المخازن والأصناف ببرنامج المحاسبة</li>
                    <li>مراقبة تفصيلية لحركة المخازن (خروج بضاعة - استلام بضاعة - مردود استلام بضاعة)</li>
                    <li>عند إضافة الصنف يتم تعريف كل التفاصيل الخاصة به</li>
                    <li>يمكنك البرنامج المحاسبي من التعامل مع المخزن كنقطة بيع</li>
                    <li>مراقبة المخزون وتواريخ الإنتاج والانتهاء</li>
                    <li>إجراء تسويات مخزنية والمعالجة المحاسبية للعجز والزيادة</li>
                    <li>إمكانية عمل جرد على الخامات والأصناف تامة الصنع في أي تاريخ</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingAccounts">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseAccounts" aria-expanded="false" aria-controls="collapseAccounts">
                  برنامج الحسابات العامة
                </button>
              </h2>
              <div id="collapseAccounts" class="accordion-collapse collapse" aria-labelledby="headingAccounts"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>• يحتوى البرنامج على اعداد دليل مراكز التكلفة بشكل شجرى بعدد غير محدود من المستويات</li>
                    <li>• يحتوى البرنامج على ربط اى حساب من ارقام الحسابات بمراكز التكلفة خاصة برقم الحساب بسهولة وربط
                      الادارات والاقسام ايضا بمراكز التكلفة</li>
                    <li>• يحتوى البرنامج على منظومة خاصة بالقيود المحاسبية وكيفية استخراج التقارير الخاصة بكل نوع من
                      انواع القيود المحاسبية سواء كانت قيود محاسبية خاصة بالمبيعات او المشتريات او المقبوضات والمدفوعات
                      الخ ..... </li>
                    <li>• يحتوى البرنامج على شكل خاصة بايصالات الدفع والاستلام الخاصة بالمقبوضات حيث يمكن اضافة ايصال
                      القبض والاستلام النقدى او الشيكات فى ايصال واحد ومرفق به مستند PDF او اى نوع من المستندات وعمل
                      عملية البحث من على الايصالات مباشرة وطباعة الايصال صورة واصل حيث يسهل من عملية التشغيل</li>
                    <li>• يحتوى البرنامج على اعداد دليل حسابات بشكل شجرى بعدد غير محدود من المستويات</li>
                    <li>• يحتوى البرنامج على حافظة استلام شيكات من داخل الايصالات الخاصة بالايصالات مباشرة حيث يمكن
                      متابعة الشيكات الواردة مباشرة من على شاشة البحث على بالايصالات وبالتالى متابعة حركة الشيكات
                      الواردة</li>
                    <li>• يحتوى البرنامج على شكل خاصة بايصالات الصرف الخاصة بالمدفوعات حيث يمكن اضافة ايصال الصرف النقدى
                      او الشيكات فى ايصال واحد ومرفق به مستند PDF او اى نوع من المستندات وعمل عملية البحث من على
                      الايصالات مباشرة وطباعة الايصال صورة واصل حيث يسهل من عملية التشغيل</li>
                    <li>• يحتوى البرنامج على حافظة صرف للشيكات من داخل الايصالات الخاصة بالايصالات مباشرة حيث يمكن
                      متابعة الشيكات المنصرفة مباشرة من على شاشة البحث على الايصالات وبالتالى متابعة حركة الشيكات
                      المنصرفة</li>
                    <li>يحتوى البرنامج على تحليل حركة البنوك ومتابعة تقارير البنوك بشكل يومي من خلال Dashboard خاصة لذلك
                      ومتابعة التحصيلات اليومية ايضا والتحويلات البنكية والايداعات البنكية من خلال منظومة يومية لمتابعة
                      ذلك</li>
                    <li>يحتوى البرنامج على متابعة حركة الحسابات وربطها بمراكز التكلفة من اكثر من تقرير</li>
                    <li>يحتوى البرنامج تحليل لحركة المصروفات فى الفترات المطلوبة من على البرنامج</li>
                    <li>يحتوى البرنامج على تحليل لحركة المقبوضات فى الفترات المطلوبة من على البرنامج</li>
                    <li>يحتوى البرنامج على منظومة خاصة لمتابعة ميزان المراجعة بشكل مجمع وبشكل تحليلى حيث يمكن تحليل اى
                      حساب رئيسى بالحسابات الفرعية له من على الحساب الرئيسى مباشرة واظهار تحليلات الحساب مباشرة</li>
                    <li>يحتوى البرنامج على منظومة خاصة بالقوائم الدخل وتحليل كامل على كل المستويات الخاصة بشجرة الحسابات
                      واستخراج تقارير خاصة شاملة حركة الايرادات والمصروفات من داخل قائمة الدخل</li>
                    <li>يحتوى البرنامج على منظومة خاصة بالتدفقات النقدية واستخراج تقارير خاصة بالتدفقات النقدية سواء
                      كانت تشغيلية</li>
                    <li>يحتوى البرنامج على كيفية استخراج الميزانيات العمومية الشهرية او السنوية وتقيم موقف المؤسسة بشكل
                      مستمر من خلال الميزانيات بشكل تفصيلى</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingAccountsReports">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseAccountsReports" aria-expanded="false"
                  aria-controls="collapseAccountsReports">
                  تقارير برنامج الحسابات العامة ومراكز التكلفة
                </button>
              </h2>
              <div id="collapseAccountsReports" class="accordion-collapse collapse"
                aria-labelledby="headingAccountsReports" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>تقارير المقبوضات وسندات القبض والاستلامات النقدية اليومية</li>
                    <li>تقارير المدفوعات وسندات الصرف والمصروفات النقدية اليومية</li>
                    <li>تقارير مراكز التكلفة خلال فترة تحليلى</li>
                    <li>تقارير قيود اليومية خلال فترة</li>
                    <li>تقارير بانواع القيود المحاسبية خلال فترة</li>
                    <li>تقارير الخاصة بالبنوك ومتابعة حركة البنك مجمع وتحليلى</li>
                    <li>تقارير خاصة بالمصروفات وتحليل المصروفات يومية او خلال فترة محددة</li>
                    <li>تقارير خاصة بتحليل قوائم الدخل خلال فترة محددة</li>
                    <li>تقارير خاصة بالتعامل مع الخزن وتحليل حركة النقدية بشكل كامل خلال فترة محددة</li>
                    <li>تقارير خاصة بالميزانيات خلال فترة وتحليل الفترة المختارة</li>
                    <li>استخراج اكثر من ميزانية لاكثر من فرع</li>
                    <li>استخراج ميزانيات مجمعة</li>
                    <li>ارسال حركة الخزينة وحركة الشيكات وتحصيلات العملاء عن طريق الإيميل من داخل البرنامج</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingProduction">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseProduction" aria-expanded="false" aria-controls="collapseProduction">
                  برنامج مراقبة الانتاج والتصنيع
                </button>
              </h2>
              <div id="collapseProduction" class="accordion-collapse collapse" aria-labelledby="headingProduction"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>
                      يوفر برنامج محاسبه تكاليف التصنيع وادارة المصانع التحكم الكامل بالعملية الإنتاجية من حيث الخامات،
                      التكاليف وحتى تسعير الأصناف والسلع المنتجة، ويتيح لك تخطيط عمليات الإنتاج المتوقعة أو طلبات
                      العملاء الجديدة من خلال تحليل الوقت والخامات المطلوبة والمتاحة، كما يعطيك تحكم ممتاز لأرصدة
                      الخامات والمنتجات بالمخازن.
                    </li>
                    <li>
                      مراقبة الجودة: يتيح إثبات رقم إفراج أو للخامات المقبولة، ويتم التعامل مع الخامات من خلال هذا الرقم
                      في المراحل التالية من الإنتاج.
                    </li>
                    <li>
                      أنشاء امر شغل: يتم عمل أمر شغل لإنتاج كمية معينة من المنتج التام، ليقوم النظام بعرض الخامات
                      المطلوبة ومدى توافرها بمخازن الخامات والتعبئة.
                    </li>
                    <li>
                      صرف الخامات: يتم صرف الخامات من خلال إصدار أذونات صرف من المخازن لأمر الشغل المطلوب، أو يتم إثبات
                      الخامات داخل شاشة أمر الشغل.
                    </li>
                    <li>
                      التصنيع لدى الغير: يمكن ان يمر المنتج في خلال أحد مراحل تصنيعه بمرحلة تتم خارج المصنع، يتم إثبات
                      ذلك بأمر الشغل، ويؤثر على قيمة المنتج التام.
                    </li>
                    <li>
                      إنهاء التشغيلة: يتم إثبات الكمية المنتجة فعليا، وفي حال وجود فرق بين الكمية المطلوب إنتاجها
                      والكمية المنتجة فعليا، يتم حساب قيمة الهدر. في حالة عمليات الانتاج اليدوية: يمكن إثبات حجم إنتاج
                      كل موظف بكل أمر شغل، لنحصل بعدها على تقرير يبين حجم إنتاج العامل.
                    </li>
                    <li>
                      تقييم التشغيل: يقوم البرنامج بعرض تقرير يبين إنحراف التكاليف الفعلية عن التكاليف المخطط لها.
                    </li>
                    <li>
                      التخطيط للإنتاج: عند ورود طلب شراء من أحد العملاء، نستخدم هذه الشاشة لمعرفة الكمية الموجودة من
                      المنتج التام والكمية الممكن إنتاجها من الخامات المتاحة. يتكامل النظام مع نظام المشتريات، ونظام
                      المبيعات والحسابات العامة، والمخازن، والموارد البشرية.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingHR">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseHR" aria-expanded="false" aria-controls="collapseHR">
                  برنامج الموارد البشرية والرواتب
                </button>
              </h2>
              <div id="collapseHR" class="accordion-collapse collapse" aria-labelledby="headingHR"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>• إضافة وتعريف جميع بنود الاستحقاقات والاستقطاعات مع تحديد طريقة احتساب كل منهما</li>
                    <li>احتواء النظام على جدول لجميع قيم ونسب قانون العمل والضرائب والتأمينات التي يحتسب عليها الأجر،
                      هذا الجدول قابل للتعديل بواسطة المستخدم</li>
                    <li>تحديد طبيعة صرف المرتب لكل موظف</li>
                    <li>تحديد خضوع / عدم خضوع الموظفين لضرائب كسب العمل</li>
                    <li>احتساب الحافز بعد أخذ المؤثرات الخاصة بنسب الحضور والتقييم والجزاءات والمرضي والتأخيرات في
                      الاعتبار</li>
                    <li>تسجيل تعلية بنود المرتب عند الحاجة لذلك والاحتفاظ بتعليمات المرتب واستدعاء تقرير بها في أي لحظة
                    </li>
                    <li>· متابعة دقيقة لأرصدة الإجازات</li>
                    <li>طباعة كشوف المرتبات، كشوف الحضور والانصراف، وكافة عمليات شئون الموظفين</li>
                    <li>احتساب حصة الشركة وحصة العامل من التأمينات الاجتماعية بشكل دقيق</li>
                    <li>يدعم استمارة راتب أساسي وأيضا استمارة راتب إضافي للموظفين</li>
                    <li>إنشاء استمارات المرتبات لكل الموظفين او لكل موظف على حدة او لمجموعة مختارة من الموظفين</li>
                    <li>احتساب استمارات الرواتب للموظفين بالشهر واليوح</li>
                    <li>مرونة كبيرة في هيكلة الورديات وتوقيتات الحضور والانصراف، وطرق حساب التأخير والإضافي</li>
                    <li>• ربط مباشر مع أجهزة الحضور والانصراف بمختلف انواعها</li>
                    <li>· امكانيه انشاء ادارات مختلفة</li>
                    <li>· امكانيه انشاء فروع مختلفة وربط الادارات بها</li>
                    <li>· استخراج الحضور اليومي عن طريق استخدام جهاز البصمة</li>
                    <li>اضافه الجزاءات والغياب وللتأخيرات</li>
                    <li>اضافه المكافئات بأنواعها حسب الرغبة (قيمه محدده-نسبه من المرتب)</li>
                    <li>اضافه السياسات الضريبية داخل النظام</li>
                    <li>اضافه القانون الخاص بالتأمينات الاجتماعية لسهوله تطبيقه على مرتبات الموظفين</li>
                    <li>انشاء سياسات مختلفة للوقت الإضافي للعمل</li>
                    <li>اضافه أكبر عد من المستخدمين للنظام مع اضاه صلاحيات مختلفة حسب الرغبة</li>
                    <li>العمل بأكثر من عمله في النظام</li>
                    <li>تقرير مرتبات الموظفين تقرير مرتبات الموظفين - مفصل</li>
                    <li>تقرير مرتبات الموظفين حسب كل ادارة</li>
                    <li>اشعار مرتبات الموظفين</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingLC">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseLC" aria-expanded="false" aria-controls="collapseLC">
                  برنامج الاعتمادات المستندية
                </button>
              </h2>
              <div id="collapseLC" class="accordion-collapse collapse" aria-labelledby="headingLC"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>• يتيح البرنامج المحاسبي اضافة عدد غير محدود من الاعتمادات المستندية مع سهولة العمل عليها
                      وتعديلها</li>
                    <li>· تحديد كافة التفاصيل الخاصة بكل اعتماد مستندي من المستخدم في البرنامج المحاسبي</li>
                    <li>· ربط الاعتمادات المستندية مع برنامج الحسابات</li>
                    <li>· قائمة مفصلة بجميع الاعتمادات المستندية المحاسبية</li>
                    <li>· قائمة بالتسهيلات (بنكية - موردين)</li>
                    <li>تعريف جميع انواع المصروفات وتحديد النسبة منها والقيمة وكيفية تأثير المصروفات علي المخزون</li>
                    <li>تحديد قيمة الإعتماد ونوعة (تسهيلات بنكية - تسهيلات موردين)</li>
                    <li>• تسجيل شروط الدفع أو إستدعائها من أمر الشراء</li>
                    <li>• تحديد نسبة أو قيمة غطاء الإعتماد</li>
                    <li>تعريف جميع انواع المصروفات وتحديد النسبة منها والقيمة وكيفية تأثير المصروفات علي المخزون</li>
                    <li>• تحديد نوع الشحن (كلى - جذئ)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingLCReports">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseLCReports" aria-expanded="false" aria-controls="collapseLCReports">
                  تقارير برنامج الاعتمادات المستندية
                </button>
              </h2>
              <div id="collapseLCReports" class="accordion-collapse collapse" aria-labelledby="headingLCReports"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>الإعتمادات المنتهية</li>
                    <li>الإعتمادات المفتوحة</li>
                    <li>تكلفة الاعتماد</li>
                    <li>تقرير مصفوفة مصروفات الإعتماد</li>
                    <li>تقرير مصفوفة مصروفات الشحنات</li>
                    <li>المصروفات و الضرائب على الاعتمادات</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingGeneralFeatures">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseGeneralFeatures" aria-expanded="false"
                  aria-controls="collapseGeneralFeatures">
                  مميزات عامة للبرنامج
                </button>
              </h2>
              <div id="collapseGeneralFeatures" class="accordion-collapse collapse"
                aria-labelledby="headingGeneralFeatures" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>· البرنامج يدعم ربط الفروع والاجهزة اوتوماتيكيا أي كان موقعها</li>
                    <li>البرنامج يدعم نظام تعدد العملات والتحويل فيما بينها</li>
                    <li>البرنامج يدعم النسخ الاحتياطي واسترجاع البيانات</li>
                    <li>البرنامج يدعم تعدد المستخدمين مع تحديد صلاحيات لكل مستخدم</li>
                    <li>البرنامج يدعم انظمة التصنيع من مواد خام وحساب تكاليف</li>
                    <li>امكانية تعريف المنتج بعدد لا حصر له لوحدات القياس</li>
                    <li>البرنامج يدعم انظمة التقسيط وسداد المديونيات مقسطة سواء بأقساط متساوية او غير متساوية</li>
                    <li>البرنامج يدعم انظمة المرتبات والموظفين والحضور والانصراف الآلي واليدوي</li>
                    <li>البرنامج يحتوي على نظام اشعارات يومية مثل الصلاحية للمنتجات، تحصيل وسداد الشيكات</li>
                    <li>إمكانية تصميم الفواتير بما يناسب كل شركة</li>
                    <li>إمكانية ارفاق وثائق لجميع المستندات داخل البرنامج</li>
                    <li>ترحيل تلقائي للعمليات كالبيع والشراء والمرتبات إلى المحاسبة</li>
                    <li>· دعم كامل لقوانين الضرائب المصرية والتأمينات</li>
                    <li>· مراجعة سريعة للسنة المالية واغلاق السنة المالية بكل سهولة</li>
                    <li>• امكانية انشاء التقارير المطلوبة من خلال فريق العمل الموجود في الادارة او فريق ال IT الخاص
                      بشركتكم من خلال قائمة تسمى "Smart Report" داخل البرنامج</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- في هذا العرض التقديمي -->
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSales">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSales" aria-expanded="false" aria-controls="collapseSales">
                  برنامج المبيعات والعملاء
                </button>
              </h2>
              <div id="collapseSales" class="accordion-collapse collapse" aria-labelledby="headingSales"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية تصنيف العملاء الى مجموعة تعريف مميزة</li>
                    <li>تعريف بيانات العملاء وربطها بشجرة الحسابات برقم حساب</li>
                    <li>تسجيل رقم الملف الضريبى - رقم التسجيل الضريبى - رقم السجل التجارى الخاص بالعميل</li>
                    <li>تصنيف المناطق الى بيانات العملاء لسهولة البحث فى كل منطقة للعميل</li>
                    <li>اضافة اسم المندوب المرتبط بالعميل</li>
                    <li>اضافة وتحديد العملة فى سجل العملاء</li>
                    <li>اضافة حد الائتمان للعملاء لسهولة وتحديد مدى التعامل مع العميل فى حدود حد الائتمان المسموح به
                    </li>
                    <li>اضافة حالة العميل الى ملف تسجيل العملاء متوقف - سارى</li>
                    <li>اضافة نوع التعامل فى عقود صيانة للعملاء أو لا يوجد تعامل</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingQuotes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseQuotes" aria-expanded="false" aria-controls="collapseQuotes">
                  عروض الاسعار
                </button>
              </h2>
              <div id="collapseQuotes" class="accordion-collapse collapse" aria-labelledby="headingQuotes"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية اضافة عروض اسعار للعملاء</li>
                    <li>امكانية تعريف شروط التسليم للعملاء حسب الاتفاق فى عرض السعر</li>
                    <li>امكانية تعريف شروط الدفع ودمج هذه الشروط مع عرض السعر</li>
                    <li>امكانية ادخال عروض اسعار ضريبية وغير ضريبية</li>
                    <li>امكانية ادخال شروط عرض السعر</li>
                    <li>امكانية ادخال انواع عروض الاسعار حسب تنوع العرض المقدم للعميل</li>
                    <li>امكانية طباعة عرض السعر باللغتين العربية - الانجليزية</li>
                    <li>امكانية اضافة اسم مندوب البيع فى عرض السعر</li>
                    <li>امكانية طباعة فى عرض السعر باللوجو او بدون لوجو</li>
                    <li>يمكن استخراج كشف الحساب لعميل سابق من عرض السعر وايضا معرفة التعاملات السابقة قبل اصدار عرض سعر
                      جديد</li>
                    <li>لايفعل عرض السعر الا بموافقة من المسئول (OWNER)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingEngineering">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseEngineering" aria-expanded="false" aria-controls="collapseEngineering">
                  المكتب الهندسى
                </button>
              </h2>
              <div id="collapseEngineering" class="accordion-collapse collapse" aria-labelledby="headingEngineering"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>يقوم المكتب الهندسى بالمصنع بمسئولية التسعير الفنى بالكامل لعرض السعر المقدم للعميل من بنود فنية
                      وهندسية</li>
                    <li>التسعير عن طريق حساب الاصناف الموجودة بالكامل فى عرض السعر</li>
                    <li>يوجد تنبيهات فى النظام لمعرفة انتهاء التسعير الهندسى أو غير منتهى</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSupplyOrders">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSupplyOrders" aria-expanded="false" aria-controls="collapseSupplyOrders">
                  أوامر التوريد
                </button>
              </h2>
              <div id="collapseSupplyOrders" class="accordion-collapse collapse" aria-labelledby="headingSupplyOrders"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية معرفة عروض الاسعار التى تم الموافقة عليها او الغير موافق عليها لأستخراج أمر توريد</li>
                    <li>امكانية اضافة طلبيه عميل لكل فرع من الفروع على حده برمز خاص لكل فرع</li>
                    <li>امكانية اضافة أوامر توريد مرتبطة بعروض الاسعار المقدمة الى العميل بعد موافقة المسئول</li>
                    <li>عروض الاسعار الضريبية والغير ضريبية</li>
                    <li>امكانية اضافة مدة التوريد لمعرفة عدد الايام الذى يتم فيها انتهاء التوريد</li>
                    <li>امكانية ربط امر التوريد بشروط الدفع وشروط التسليم المعروفة سابقا على عرض السعر</li>
                    <li>امكانية معرفة أوامر التوريد المنتهية أو الغير منتهية من خلال شاشة بحث سهلة داخل امر التوريد</li>
                    <li>امكانية عمل فحص للطلبية لمعرفة مدى الاحتياج لمعرفة توجية اوامر التوريد الى قسم الانتاج والتصنيع
                      أو قسم المشتريات لسد احتياجات التوريد من خلال ادارة المشتريات أوعن طريق الصرف المباشر من خلال
                      المخزن عن طريق موظف مختص</li>
                    <li>معرفة الاصناف المتبقية وما لم يتم توريده فى اوامر التوريد عن طريق تنبيهات النظام</li>
                    <li>اضافة مرفقات العميل وربطها بأمر التوريد عن طريق اضافة ملفات PDF خاصة بالعميل مثل موافقة العميل
                      على الطلبية بشكل رسمى وايميلات العميل</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingCustomerReceipt">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseCustomerReceipt" aria-expanded="false"
                  aria-controls="collapseCustomerReceipt">
                  أستلام عميل
                </button>
              </h2>
              <div id="collapseCustomerReceipt" class="accordion-collapse collapse"
                aria-labelledby="headingCustomerReceipt" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية معرفة اوامر التوريد التى تم الانتهاء منها فى قسم الانتاج عن طريق تنبيهات النظام</li>
                    <li>امكانية صرف الاصناف المنتهية فى قسم الانتاج من المخزن وتسليم العميل المنتهى منها</li>
                    <li>امكانية تسليم العميل الاصناف المطلوبة فى امر التوريد فى حالة وجود رصيد فى المخزن منها</li>
                    <li>امكانية ربط أمر التوريد بأذن تسليم العميل مباشراً</li>
                    <li>امكانية عمل جرد على اى صنف من الاصناف داخل شاشة استلام العميل</li>
                    <li>استخراج كارت صنف تحليلى بوحدات الصنف المختلفة بالكامل مع امكانية استخراج رصيد الوحدة 1 أو الوحدة
                      2</li>
                    <li>امكانية معرفة الاصناف المنصرفة والاصناف المطلوبة للتسليم من خلال شاشة التنبيهات</li>
                    <li>امكانية صرف منتجات جاهزة للأستلام المباشر الى العميل عن طريق ربط العميل باذن صرف المخازن مباشراً
                    </li>
                    <li>يتم صرف الاصناف عن طريق طلب صرف يتم من خلال امين المخزن بموافقة من المسئول ولا يتم الصرف الا عن
                      طريق موافقة المسئول عن صرف المنتجات</li>
                    <li>امكانية التنبيه فى قائمة التنبيهات بالاصناف التى تم صرفها للعميل لأستخراج فاتورة له</li>
                    <li>يتم عمل رقم مسلسل لإذونات الصرف التى يتم صرفها صرف مباشر للعميل</li>
                    <li>التنبيه فى ادارة الحسابات بأذونات الصرف المختلفة سواء كانت عن طريق اوامر توريد أو عن طريق اذونات
                      صرف مباشرة</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSalesInvoice">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSalesInvoice" aria-expanded="false" aria-controls="collapseSalesInvoice">
                  فواتير البيع
                </button>
              </h2>
              <div id="collapseSalesInvoice" class="accordion-collapse collapse" aria-labelledby="headingSalesInvoice"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية عمل فاتورة بيع عن طريق اذونات الاستلام الخاصة العميل بشكل مباشر ويتم ذلك عن طريق استدعاء
                      اذونات استلام العميل من شاشة الفواتير وفيها يتم معرفة اذونات التسليم المنتظرة استخراج الفواتير من
                      اذونات التسليم المستخرج لها فواتير</li>
                    <li>امكانية استخراج فواتير ضريبية وغير ضريبة فى شاشة الفواتير ويتم التوجية المحاسبى حسب اختيار
                      فواتير ضريبية أو غير ضريبية</li>
                    <li>امكانية اضافة خصومات للعميل من خلال شاشة الفاتورة وحساب الخصومات على الفواتير واستخراج التقارير
                      الخاصة بها</li>
                    <li>عن استخراج فاتورة بيع يتم عمل القيد المحاسبى اتوماتيكاً واظهار رقم القيد على الفاتورة لتمكين
                      المحاسب من مراجعة قيد كل فاتورة بيع بسهولة لمعرفة تأثير ذلك فى الحسابات</li>
                    <li>امكانية استدعاء كشف الحساب للعميل من خلال الفاتورة مباشراً</li>
                    <li>امكانية فتح مدفوعات العميل من خلال الفاتورة مباشراً</li>
                    <li>امكانية طباعة الفاتورة باللغتين العربية - الانجليزية</li>
                    <li>امكانية طباعة الفاتورة مع لوجو او بدون لوجو لطباعة على ورق الشركة الخاصة بك</li>
                    <li>امكانية استخراج فاتورة مبدئية غير مرحلة الى الحسابات ولا تؤثر فى حساب العميل</li>
                    <li>امكانية ارجاع الفواتير بعد الترحيل من خلال ال Admin فقط فى حالة وجود خطا فى الفاتورة</li>
                    <li>تقريب ارقام الخاصة بالفواتير الى رقمين عشري فقط وفى حالة طلب التقريب اكثر من رقم لابد من ارسال
                      ايميل لشركتنا لتحديث ذلك</li>
                    <li>اضافة اسم مندوب البيع على الفاتورة لأستخرج له التقارير الخاصة بالبيع بعد ذلك</li>
                    <li>امكانية فتح اذن استلام العميل من خلال الفاتورة</li>
                    <li>امكانية فتح اذن صرف العميل من المخازن من خلال الفاتورة</li>
                    <li>امكانية الغاء الفاتورة وفى حالة الإلغاء لا يتم استرجعها مرة اخرى</li>
                    <li>امكانية تسلسل ارقام الفواتير الضريبية و الغير ضريبية على حده</li>
                    <li>اضافة رمز لكل فواتير الفروع على حده لمعرفة فواتير كل فرع</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSalesReturn">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSalesReturn" aria-expanded="false" aria-controls="collapseSalesReturn">
                  مرتجع البيع
                </button>
              </h2>
              <div id="collapseSalesReturn" class="accordion-collapse collapse" aria-labelledby="headingSalesReturn"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>امكانية عمل فاتورة مرتجع بيع من خلال ربط اذن اضافة المخزن ويكون نوع الاذن ( مرتجع )</li>
                    <li>امكانية طباعة فاتورة المرتجع باللغتين العربية - الانجليزية</li>
                    <li>امكانية طباعة فاتورة المرتجع مع لوجو او بدون لوجو للطباعة على ورق الشركة الخاصة بك</li>
                    <li>امكانية فتح اذن اضافة مرتجع من خلال فاتورة مرتجع العملاء</li>
                    <li>انشاء قيد المرتجع اوتوماتيكيا وخصم قيم المرتجع من حساب العميل</li>
                    <li>امكانية اضافة خصم على فاتورة المرتجع</li>
                    <li>امكانية فتح قيد المرتجع للمراجعة بشكل سهل وسريع</li>
                    <li>امكانية حساب الضريبة على فاتورة المرتجع</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSalesReports">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSalesReports" aria-expanded="false" aria-controls="collapseSalesReports">
                  تقارير المبيعات
                </button>
              </h2>
              <div id="collapseSalesReports" class="accordion-collapse collapse" aria-labelledby="headingSalesReports"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>تقرير مديونية العملاء خلال فترة (شامل المناديب)</li>
                    <li>تقرير اجمالى فواتير العملاء بالأصناف</li>
                    <li>تقرير يومية المبيعات للعملاء بدون اصناف خلال فترة</li>
                    <li>تحصيلات العملاء خلال فترة</li>
                    <li>تقرير اعمار المديونية للعملاء خلال فترة</li>
                    <li>تقرير مرتجع العملاء خلال فترة</li>
                    <li>اذون استلام البضاعة للعملاء من المخازن</li>
                    <li>تقرير مبيعات المناديب من الاصناف و المنطقة</li>
                    <li>تقرير موقف عروض الاسعار خلال فترة</li>
                    <li>تقرير اسعار الاصناف خلال فترة</li>
                    <li>تقرير اذون الصرف بفاتورة او بدون فاتورة</li>
                    <li>تقرير اوامر التوريد المنتظرة - اذون استلام من المخازن</li>
                    <li>تقرير مبيعات المناطق المناديب خلال فترة</li>
                    <li>تقرير تحصيلات المناديب خلال فترة</li>
                    <li>تقرير الفواتير المسددة و الغير مسددة</li>
                    <li>تقرير متابعة طلبيات العميل</li>
                    <li>تقرير العملاء المتوقفين عن السداد</li>
                    <li>تقرير مبيعات العملاء الشهرى</li>
                    <li>تقرير مبيعات و تحصيلات المناديب الشهرى</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingImportPurchases">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseImportPurchases" aria-expanded="false"
                  aria-controls="collapseImportPurchases">
                  المشتريات الاستيرادية والمشتريات المحلية
                </button>
              </h2>
              <div id="collapseImportPurchases" class="accordion-collapse collapse"
                aria-labelledby="headingImportPurchases" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال شاشة عروض الاسعار الخاصة بالموردين</li>
                    <li>تحديد العملات في شاشة طلبات الشراء للموردين بعملة اجنبية - عملة محلية</li>
                    <li>ادخال شاشة اوامر الشراء للموردين</li>
                    <li>ادخال شاشة فحص واستلام</li>
                    <li>ادخال شاشة اذن الاضافة الى المخازن</li>
                    <li>ادخال فاتورة شراء استيرادية - محلية</li>
                    <li>تعريف بيانات الموردين تفصيلى</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingImportOnly">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseImportOnly" aria-expanded="false" aria-controls="collapseImportOnly">
                  المشتريات الاستيرادية
                </button>
              </h2>
              <div id="collapseImportOnly" class="accordion-collapse collapse" aria-labelledby="headingImportOnly"
                data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال طلب شراء نوعه (خارجى) ثم الموافقة علية من قبل ال Owner بعد الاستعلام عن رصيد الاصناف
                      بالمخازن</li>
                    <li>عمل امر شراء مرتبط بطلب الشراء الموافق عليه</li>
                    <li>ادخال بيانات الشحنة تفصيلى وربطها بأمر شراء المورد (P.O)</li>
                    <li>ادخال مصاريف الشحنة الاستيرادية وربط المصاريف بارقام الحسابات الخاصة بها</li>
                    <li>فى حالة ادخال المصاريف على الشحنة ينشئ قيد خاص بالمصاريف على الشحنة</li>
                    <li>
                      من ح / مصاريف الشحنة<br>
                      الى ح / بضاعة فى الطريق
                    </li>
                    <li>بعد ذلك يتم حساب تكلفة الشحنة اتوماتيكياً بناءاً على المصاريف المدمجة على الشحنة ثم
                      يتم بعد ذلك فحص الشحنة عند الوصول بادخال محتويات الشحنة على شاشة الفحص
                      والاستلام من قبل مسئول الفحص الاستلام ( قسم الجودة ) وبعد ذلك يتم اضافة الشحنة

                      من خلال مسئول المخازن من خلال شاشة اذن اضافة الى المخازن ويتم اختيار نوع الاضافة (
                      اضافة أمر شراء ) وادخال رقم الشحنة وتكلفة الشحنة صنف بصنف فى المخازن لحساب

                      التكلفة بعد ذلك وبالتالى حساب تكلفة المخزون وتكلفة الشحنة بالكامل من داخل المخازن

                      ثم انشاء فاتورة شراء استيرادية من شاشة فواتير الشراء
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingLocalPurchases">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseLocalPurchases" aria-expanded="false" aria-controls="collapseLocalPurchases">
                  المشتريات المحلية
                </button>
              </h2>
              <div id="collapseLocalPurchases" class="accordion-collapse collapse"
                aria-labelledby="headingLocalPurchases" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال طلب شراء نوعه (داخلى) ثم الموافقة علية من قبل ال Owner بعد الاستعلام عن رصيد الاصناف
                      بالمخازن</li>
                    <li>عمل امر شراء مرتبط بطلب الشراء الموافق عليه</li>
                    <li>ادخال مصاريف الشراء من شاشة مصاريف المشتريات الداخلية أو المحلية</li>
                    <li>ادخال واختيار الاصناف فى شاشة الفحص والاستلام عن طريق مسئول الفحص والاستلام</li>
                    <li>عمل اذن اضافة داخل المخزن عن طريق امين المخزن وادخال تكلفة شراء الصنف داخل المخزن لحساب التكلفة
                    </li>
                    <li>ربط اذن الاضافة فى المخازن بفاتورة الشراء المحلية</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSupplierDetails">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSupplierDetails" aria-expanded="false"
                  aria-controls="collapseSupplierDetails">
                  بيانات الموردين تفصيلى
                </button>
              </h2>
              <div id="collapseSupplierDetails" class="accordion-collapse collapse"
                aria-labelledby="headingSupplierDetails" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>تعريف بيانات الموردين تفصيلي وتحديد الموردين واختيار العملة المستخدمة مع المورد وتحديد محتويات
                      المورد بشكل كامل سواء عنوان او تليفونات وسجل تجارى</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card accordion-item">
              <h2 class="accordion-header" id="headingSupplierQuotes">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSupplierQuotes" aria-expanded="false" aria-controls="collapseSupplierQuotes">
                  عروض الاسعار الخاصة بالموردين
                </button>
              </h2>
              <div id="collapseSupplierQuotes" class="accordion-collapse collapse"
                aria-labelledby="headingSupplierQuotes" data-bs-parent="#topicsAccordion">
                <div class="accordion-body">
                  <ul style="direction:rtl;text-align:right;">
                    <li>ادخال عرض سعر المورد من خلال شاشة عروض الاسعار بالموردين والاصناف المطلوبة</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Topics Accordion: End -->
    </div>
  </section>
  <!-- Tutorials Videos: End -->
</div>
@endsection