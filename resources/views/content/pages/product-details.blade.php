{{-- Product Details Page --}}
@extends('layouts/layoutfront')
@section('title', __('Product Details'))
@section('content')
<!-- ================== Start Focus ERP Section ================== -->
<section id="focus-erp-section">
  <div class="container section-py" style="margin-bottom:0; padding-bottom:0;">
    <h1 class="text-primary display-5 fw-bold mb-4 text-center">{{ __('برامج ERP المتقدمة') }}</h1>
    <h2 class="fw-bold mb-4 text-center" style="color: #fff; font-size: 1.5rem;">{{ __('Product Details') }}</h2>
    <div class="row gy-5 mb-0">
      <div class="col-md-6">
        <h4 class="fw-bold">{{ __('Focus ERP Programs & Features') }}</h4>
        <p class="fs-5">{{ __('نظام Focus ERP هو حل ذكي ومتكامل لتخطيط موارد المؤسسات، صُمم خصيصًا لتلبية احتياجات
          الشركات
          من مختلف الأحجام والقطاعات. يوفر النظام إدارة كاملة ومرنة لجميع أقسام العمل مثل المبيعات، المشتريات، الحسابات،
          المخازن، الإنتاج، والموارد البشرية – كل ذلك في منصة واحدة مترابطة وسهلة الاستخدام. بفضل دعمه لتعدد الفروع
          والعملات والتقارير الذكية، يضمن Focus ERP تحسين الكفاءة التشغيلية، تقليل الأخطاء، واتخاذ قرارات أسرع وأكثر دقة
          بناءً على بيانات واقعية.') }}</p>
      </div>
      <div class="col-md-6">
        <img src="{{asset('assets/img/front-pages/landing-page/enterprise.png')}}" alt="Product Image"
          class="img-fluid rounded shadow d-block mx-auto" style="max-width: 90%; height: auto;" />
      </div>
    </div>




    <!-- All ERP Feature Cards 1-8 in order -->
    <style>
      .erp-modern-card {
        background: #22304a;
        color: #fff;
        border-radius: 1rem;
        box-shadow: 0 2px 8px 0 rgba(30, 42, 58, 0.10);
        border: 1px solid #1abc9c22;
        min-height: 320px;
        transition: box-shadow 0.15s;
      }

      .erp-modern-card:hover {
        box-shadow: 0 6px 24px 0 rgba(30, 42, 58, 0.16);
        border: 1px solid #1abc9c44;
      }

      .erp-modern-card .card-body {
        padding: 1.1rem 0.9rem !important;
      }

      .erp-modern-card h5 {
        font-weight: 700;
        color: #fff;
        font-size: 1.08rem;
        margin-bottom: 1rem;
        letter-spacing: 0.01em;
        text-shadow: none;
      }

      .erp-modern-card ul {
        padding-left: 1em;
        list-style: none;
        margin-bottom: 0;
      }

      .erp-modern-card ul li {
        margin-bottom: 0.45em;
        background: none;
        border-radius: 0.3em;
        font-weight: 500;
        padding: 0.35em 0.7em 0.35em 0.7em;
        border-left: 3px solid #1abc9c;
        box-shadow: none;
      }

      .erp-modern-card ul li:before {
        content: '\2022';
        color: #1abc9c;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
      }
    </style>
    <div class="row gy-4 mt-0">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">✅ 1. إدارة العمليات التجارية – Sales & Procurement</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>تحكم شامل في دورة البيع والشراء من البداية للنهاية.</li>
              <li>إدارة العملاء والمندوبين وعروض الأسعار والفواتير.</li>
              <li>متابعة أوامر التوريد والتسليم وربطها بالمخزون والإنتاج.</li>
              <li>إدارة الموردين وطلبات الشراء وأوامر الشراء سواء محلية أو استيرادية.</li>
              <li>تقارير تحليلية لمتابعة المبيعات والمشتريات والمديونيات.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🏭 2. الإدارة المالية والمحاسبية – Accounting & Cost
              Control</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>نظام محاسبي متكامل وتحليل مالي دقيق.</li>
              <li>دليل حسابات ومراكز تكلفة شجري غير محدود.</li>
              <li>قيود محاسبية تلقائية من كل العمليات.</li>
              <li>إدارة إيصالات الدفع والتحصيل والشيكات.</li>
              <li>إعداد الميزانيات، قائمة الدخل، والتدفقات النقدية بسهولة.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🏪 3. المخازن والإنتاج – Inventory & Manufacturing</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>تحكم كامل في المخزون وسير العمليات الإنتاجية.</li>
              <li>إنشاء عدد لا محدود من المخازن وتعريف المنتجات بوحدات متنوعة.</li>
              <li>تسويات وجرد المخزون وربطه بالحسابات.</li>
              <li>أوامر تشغيل لإنتاج المنتجات، تتبع الخامات والهدر.</li>
              <li>تخطيط الإنتاج وربطه بالطلبات ومراقبة التكاليف.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">👥 4. الموارد البشرية والرواتب – HR & Payroll</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>نظام مرن لإدارة الموظفين والحضور والمرتبات.</li>
              <li>احتساب تلقائي للمرتبات والضرائب والتأمينات.</li>
              <li>دعم أجهزة البصمة وتنظيم الورديات.</li>
              <li>تسجيل الحوافز، الخصومات، والإجازات.</li>
              <li>تقارير مفصلة للرواتب والحضور والانصراف.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🕒 5. الحضور والانصراف الآلي</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>ربط مباشر مع أجهزة البصمة لتنظيم الحضور والانصراف بدقة.</li>
              <li>متابعة الحضور اليومي للموظفين.</li>
              <li>احتساب التأخيرات والانصراف المبكر تلقائيًا.</li>
              <li>دعم الورديات وتخصيصها حسب كل قسم أو موظف.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">💼 6. إدارة الرواتب والمكافآت</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>نظام مرن لحساب المرتبات، الاستحقاقات، والخصومات.</li>
              <li>دعم مرتبات أساسية وإضافية.</li>
              <li>احتساب المرتب شهريًا أو يوميًا.</li>
              <li>إدخال المكافآت والجزاءات يدوياً أو تلقائياً.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">📄 7. تقارير مفصلة للموظفين</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>إمكانية استخراج تقارير شاملة ودقيقة.</li>
              <li>تقرير مفصل لمرتبات الموظفين شهريًا.</li>
              <li>تقارير الحضور والانصراف حسب الإدارات.</li>
              <li>إشعارات مرتبات فردية أو جماعية.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card h-100 erp-modern-card">
          <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
            <h5 class="fw-bold mb-2" style="font-size:1.05rem;">📜 8. توافق قانوني كامل</h5>
            <ul class="mb-0" style="font-size:0.98rem;">
              <li>التزام كامل بقوانين العمل والضرائب والتأمينات.</li>
              <li>احتساب الضريبة على كسب العمل بدقة.</li>
              <li>احتساب حصة الشركة والعامل في التأمينات الاجتماعية.</li>
              <li>دعم السياسات الضريبية المختلفة داخل النظام.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>




    <!-- Download Button after all cards, right-aligned -->
    <div class="row">
      <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3 flex-wrap">
        <a href="/assets/files/Focus%20ERP%20Programs%20%26%20Features.docx" class="btn btn-success px-5 py-3 fw-bold"
          style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;" download>
          <i class="ti ti-download me-2"></i> Download Focus ERP Programs & Features (Full guide)
        </a>
        <a href="/#landingContact" class="btn btn-primary px-5 py-3 fw-bold"
          style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;">
          <i class="ti ti-shopping-cart me-2"></i> Place Order / Request
        </a>
      </div>
    </div>


    <!-- ================== End Focus ERP Section ================== -->

    <!-- ================== Start ERPLite Section ================== -->
    <hr class="my-5" />
    <section id="erplite-section">
      <div class="container section-py">
        <h2 class="text-primary display-6 fw-bold mb-4">{{ __('ERPLite') }}</h2>
        <div class="row gy-5 mb-0">
          <div class="col-md-6">
            <h4 class="fw-bold">{{ __('ERPLite Programs & Features') }}</h4>
            <p class="fs-5">{{ __('ERP Lite هو نظام تخطيط موارد المؤسسات مصمم خصيصًا لتلبية احتياجات الشركات الصغيرة
              والمتوسطة بطريقة مرنة وخفيفة. يوفّر النظام أدوات متكاملة لإدارة المبيعات، المخازن، المشتريات، الحسابات،
              والعملاء في واجهة سهلة الاستخدام. يتميز بسرعة التنفيذ، وانخفاض التكلفة مقارنة بأنظمة ERP التقليدية. يدعم
              ERP
              Lite التكامل بين الأقسام المختلفة، مما يعزز كفاءة العمليات ويقلل من الأخطاء. كما يتيح تقارير تحليلية ذكية
              تساعد في اتخاذ قرارات دقيقة ومدروسة.') }}</p>
          </div>
          <div class="col-md-6">
            <img src="{{asset('assets/img/front-pages/landing-page/ERPLITE.png')}}" alt="ERPLite Product Image"
              class="img-fluid rounded shadow d-block mx-auto" style="max-width: 90%; height: auto;" />
          </div>
        </div>
        <div class="row gy-4 mt-0">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 erp-modern-card">
              <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� الإدارة الشاملة للمبيعات والعملاء</h5>
                <ul class="mb-0" style="font-size:0.98rem;">
                  <li>إنشاء فواتير متعددة الأنواع (نقدية، آجلة، مردودات).</li>
                  <li>تحديد حدود ائتمانية وأسعار بيع بحدود دنيا وعليا.</li>
                  <li>تنبيهات ذكية عند تجاوز الكميات أو الأسعار.</li>
                  <li>إدارة تحصيل المدفوعات وربطها بالفواتير.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 erp-modern-card">
              <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� دورة شراء متكاملة وإدارة الموردين</h5>
                <ul class="mb-0" style="font-size:0.98rem;">
                  <li>ربط أوامر الشراء بالفواتير والشيكات والمدفوعات.</li>
                  <li>متابعة مواعيد استحقاق الفواتير ومردودات الشراء.</li>
                  <li>تكامل كامل مع الحسابات لضمان شفافية العمليات.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 erp-modern-card">
              <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🏬 إدارة المخازن والعمليات اللوجستية</h5>
                <ul class="mb-0" style="font-size:0.98rem;">
                  <li>إمكانية إنشاء عدد غير محدود من المخازن.</li>
                  <li>تحويل البضائع بين المخازن وتتبع الكميات.</li>
                  <li>جرد وتسويات دقيقة، مع دعم تواريخ الإنتاج والانتهاء.</li>
                  <li>التعامل مع المخازن كنقطة بيع مباشرة.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 erp-modern-card">
              <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                <h5 class="fw-bold mb-2" style="font-size:1.05rem;">📊 نظام محاسبي متكامل مرتبط بكل العمليات</h5>
                <ul class="mb-0" style="font-size:0.98rem;">
                  <li>ترحيل تلقائي لجميع الحركات (بيع، شراء، مرتبات...).</li>
                  <li>مراجعة سريعة وإغلاق آمن للسنة المالية.</li>
                  <li>تقارير ذكية قابلة للتخصيص حسب احتياجات الشركة.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-4 mt-0">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card h-100 erp-modern-card">
              <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🔐 المرونة والأمان والتكامل التقني</h5>
                <ul class="mb-0" style="font-size:0.98rem;">
                  <li>نظام صلاحيات دقيق وتعدد المستخدمين.</li>
                  <li>دعم النسخ الاحتياطي الدوري واسترجاع البيانات.</li>
                  <li>واجهات احترافية سهلة الاستخدام.</li>
                  <li>التوافق مع أجهزة الباركود وأنظمة الحضور والانصراف.</li>
                  <li>ربط فروع الشركة تلقائيًا بغض النظر عن الموقع الجغرافي</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Download and Place Order Buttons for ERPLite section -->
        <div class="row">
          <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3 flex-wrap">
            <a href="/assets/files/ERPLite.docx" class="btn btn-success px-5 py-3 fw-bold"
              style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;" download>
              <i class="ti ti-download me-2"></i> Download ERPLite Programs & Features (Full guide)
            </a>
            <a href="/#landingContact" class="btn btn-primary px-5 py-3 fw-bold"
              style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;">
              <i class="ti ti-shopping-cart me-2"></i> Place Order / Request
            </a>
          </div>
        </div>
      </div>



      <!-- ================== End ERPLite Section ================== -->

      <!-- ================== Start HR Management System Section ================== -->
      <hr class="my-5" />
      <section id="hr-management-section">
        <div class="container section-py">
          <h2 class="text-primary display-6 fw-bold mb-4">{{ __('HR Management System') }}</h2>
          <div class="row gy-5 mb-0">
            <div class="col-md-6">
              <h4 class="fw-bold">{{ __('HR System & Features') }}</h4>
              <p class="fs-5">{{ __('برنامج الموارد البشرية هو نظام شامل لإدارة شؤون الموظفين داخل المؤسسة بكفاءة عالية.
                يتيح
                تعريف جميع بنود الاستحقاقات والاستقطاعات مع تحديد سياسات الحوافز، الضرائب، والتأمينات. يدعم النظام تسجيل
                الحضور والانصراف وربطه بأجهزة البصمة، إضافة إلى إدارة الإجازات، القروض، والسلف بدقة. يمكن تخصيص السياسات
                لكل
                موظف، وإنشاء إدارات وفروع مختلفة بصلاحيات مرنة. كما يوفر تقارير تفصيلية ومتابعة مستمرة لكل ما يتعلق
                بالموارد
                البشرية في بيئة عمل منظمة وآمنة.

                ') }}</p>
            </div>
            <div class="col-md-6">
              <img src="{{asset('assets/img/front-pages/landing-page/HR.png')}}" alt="Product 3 Image"
                class="img-fluid rounded shadow d-block mx-auto" style="max-width: 90%; height: auto;" />
            </div>
          </div>
          <div class="row gy-4 mt-0">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 erp-modern-card">
                <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                  <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� أهم المميزات والوظائف</h5>
                  <ul class="mb-0" style="font-size:0.98rem;">
                    <li>إضافة وتعريف بنود الاستحقاقات والاستقطاعات مع تحديد طريقة احتسابها.</li>
                    <li>جدول مرن لقوانين العمل والضرائب والتأمينات يمكن تعديله.</li>
                    <li>احتساب الحوافز بناءً على الحضور، التقييم، الجزاءات، والتأخيرات.</li>
                    <li>تسجيل المكافآت، الخصومات، القروض، والسلف بدقة وسهولة.</li>
                    <li>إدارة الإجازات والمتغيرات الشهرية وتسجيل قرارات الترقية أو الإحالة للمعاش.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 erp-modern-card">
                <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                  <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� إدارة الوقت والحضور</h5>
                  <ul class="mb-0" style="font-size:0.98rem;">
                    <li>ربط مباشر مع أجهزة البصمة بمختلف أنواعها.</li>
                    <li>استخراج الحضور اليومي تلقائيًا.</li>
                    <li>وضع سياسات خاصة بالتأخير، الغياب، والإضافي والانصراف المبكر.</li>
                    <li>مرونة في هيكلة الورديات وتوقيتات العمل.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card h-100 erp-modern-card">
                <div class="card-body p-3" style="padding:1rem 0.75rem !important;">
                  <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🛡️ الصلاحيات والتقسيم الإداري</h5>
                  <ul class="mb-0" style="font-size:0.98rem;">
                    <li>إمكانية إنشاء إدارات وفروع وربطها معًا.</li>
                    <li>دعم تعدد المستخدمين مع تحديد صلاحيات دقيقة لكل مستخدم.</li>
                    <li>إنشاء سياسات ضريبية ومالية مستقلة لكل موظف أو قسم.</li>
                    <li>دعم تعدد العملات داخل النظام.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Download and Place Order Buttons for Product 3 section -->
          <div class="row">
            <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3 flex-wrap">
              <a href="/assets/files/HR.docx" class="btn btn-success px-5 py-3 fw-bold"
                style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;" download>
                <i class="ti ti-download me-2"></i> Download HR Programs & Features (Full guide)
              </a>
              <a href="/#landingContact" class="btn btn-primary px-5 py-3 fw-bold"
                style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;">
                <i class="ti ti-shopping-cart me-2"></i> Place Order / Request
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ================== End HR Management System Section ================== -->

      <!-- ================== Start E-Invoice Section ================== -->
      <hr class="my-5" />
      <section id="e-invoice-section">
        <div class="container section-py">
          <h2 class="text-primary display-6 fw-bold mb-4">{{ __('E-Invoice System') }}</h2>
        </div>
      </section>
      <!-- ================== End E-Invoice Section ================== -->
      <div class="row gy-5 mb-0">
        <div class="col-md-6">
          <h4 class="fw-bold">{{ __('E-Invoice System & Features') }}</h4>
          <p class="fs-5">{{ __('برنامج الفاتورة الإلكترونية هو حل ذكي ومتكامل لإدارة الفواتير والمستندات التجارية بكل
            سهولة واحترافية. يتيح لك تسجيل الفواتير، تكويد الأصناف، وإدارة بيانات العملاء وفقًا لمعايير مصلحة الضرائب
            المصرية. يدعم النظام التوقيع الإلكتروني المعتمد، مع إمكانية إرسال الفواتير مباشرة إلى بوابة الضرائب للتحقق
            والاعتماد. كما يتيح استيراد وتصدير البيانات من خلال ملفات Excel لتسهيل عملية الدمج مع أي نظام محاسبي آخر.
            بفضل
            واجهته السهلة ودعمه الفني المتواصل، يعتبر البرنامج خيارًا مثاليًا لأصحاب الأنشطة التجارية.') }}</p>
        </div>
        <div class="col-md-6">
          <img src="{{asset('assets/img/front-pages/landing-page/invoice.png')}}" alt="Fourth Product Image"
            class="img-fluid rounded shadow d-block mx-auto" style="max-width: 90%; height: auto;" />
        </div>
      </div>
      <div class="row gy-4 mt-0">
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🧾 التكامل مع مصلحة الضرائب المصرية 🇪🇬</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>تسجيل الفواتير الإلكترونية بأنواعها (مبيعات، خصم، إضافة).</li>
                <li>التوافق التام مع المعايير الرسمية.</li>
                <li>دعم التوقيع الإلكتروني المعتمد.</li>
                <li>إرسال ومراجعة الفواتير واعتمادها عبر المنظومة.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">�️ إدارة وتكويد العملاء والأصناف</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>تسجيل بيانات العملاء: الاسم، النشاط، العنوان، الاتصال.</li>
                <li>تكويد الأصناف وفق EGS أو GS1.</li>
                <li>إدارة الأصناف والوحدات بكود الضرائب دون تغيير الباركود.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� استيراد وتصدير البيانات</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>استيراد/تصدير الفواتير والعملاء عبر ملفات Excel.</li>
                <li>تسهيل رفع البيانات ومزامنتها مع المنظومة.</li>
                <li>إمكانية الربط مع أنظمة ERP أخرى.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">⚙️ الدعم الفني والإعدادات</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>تدريب متكامل على استخدام النظام.</li>
                <li>إعدادات الربط مع الـ API والمصادقة.</li>
                <li>مرونة التخصيص حسب احتياجات النشاط التجاري.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">� التوقيع الإلكتروني والتحقق</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>التكامل مع التوقيع الإلكتروني المعتمد.</li>
                <li>التأكد من صحة ومطابقة الفاتورة.</li>
                <li>اعتماد الفواتير بعد التحقق من قبل مصلحة الضرائب.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex">
          <div class="card h-100 erp-modern-card flex-fill">
            <div class="card-body p-3 d-flex flex-column" style="padding:1rem 0.75rem !important;">
              <h5 class="fw-bold mb-2" style="font-size:1.05rem;">🖥️ سهولة الاستخدام وواجهة النظام</h5>
              <ul class="mb-0 flex-grow-1" style="font-size:0.98rem;">
                <li>واجهة بسيطة وسهلة التعامل.</li>
                <li>اختيار وإرسال فواتير فردية أو متعددة.</li>
                <li>مراجعة الفاتورة قبل الإرسال بسهولة.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Download and Place Order Buttons for Fourth Product section -->
      <div class="row">
        <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3 flex-wrap">
          <a href="/assets/files/E-Invoice.pdf" class="btn btn-success px-5 py-3 fw-bold"
            style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;" download>
            <i class="ti ti-download me-2"></i> Download E-Invoice & Features (Full guide)
          </a>
          <a href="/#landingContact" class="btn btn-primary px-5 py-3 fw-bold"
            style="font-size:1.2rem; border-radius:2rem; min-width:220px; letter-spacing:0.05em;">
            <i class="ti ti-shopping-cart me-2"></i> Place Order / Request
          </a>
        </div>
      </div>
      <!-- ================== Start Product Videos Section ================== -->
      <hr class="my-5" />
      <section id="product-videos-section">
        <div class="container section-py">
          <h2 class="text-primary display-6 fw-bold mb-4 text-center">{{ __('الشروحات بالفيديو') }}
          </h2>
          <div class="row gy-4">
            <!-- Video 1 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/l1br4A6-bIg?start=19" title="ERP Video 1"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح برنامج إدارة الموارد البشرية (HR)</h5>
                  <p class="card-text">فيديو يوضح كيفية استخدام نظام إدارة الموارد البشرية بشكل عملي ومبسط.</p>
                </div>
              </div>
            </div>
            <!-- Video 2 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/ljH2fyVs1us?start=260" title="ERP Video 2"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح برنامج إدارة الحسابات العامة</h5>
                  <p class="card-text">تعرف على كيفية إدارة الحسابات العامة والقيود اليومية في النظام.</p>
                </div>
              </div>
            </div>
            <!-- Video 3 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/36GzNyQGwJU?start=280" title="ERP Video 3"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح برنامج إدارة المخازن والمبيعات</h5>
                  <p class="card-text">دليل عملي لإدارة المخزون والمبيعات وربطها بالحسابات.</p>
                </div>
              </div>
            </div>
            <!-- Video 4 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/chkkzqH19tQ?start=283" title="ERP Video 4"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح إعدادات النظام وربط الفروع</h5>
                  <p class="card-text">تعلم كيفية ضبط إعدادات النظام وربط الفروع المختلفة لتحقيق إدارة مركزية فعالة.</p>
                </div>
              </div>
            </div>
            <!-- Video 5 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/lXDeqoNoYPQ?start=132" title="ERP Video 5"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح إعدادات المستخدمين والصلاحيات</h5>
                  <p class="card-text">دليل عملي لإضافة المستخدمين وتحديد الصلاحيات لضمان أمان البيانات وسهولة الإدارة.
                  </p>
                </div>
              </div>
            </div>
            <!-- Video 6 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/E9Hrdq62lqc?start=145" title="ERP Video 6"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح إعدادات الفواتير الإلكترونية</h5>
                  <p class="card-text">كيفية تفعيل وإدارة الفواتير الإلكترونية وربطها مع مصلحة الضرائب بسهولة.</p>
                </div>
              </div>
            </div>
            <!-- Video 7 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="card h-100 shadow-sm flex-fill">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.youtube.com/embed/H1fkpBBs7go?start=3" title="ERP Video 7"
                    allowfullscreen></iframe>
                </div>
                <div class="card-body">
                  <h5 class="card-title fw-bold mb-2">شرح التقارير والتحليلات الذكية</h5>
                  <p class="card-text">تعرف على استخراج التقارير الذكية وتحليل البيانات لدعم اتخاذ القرار.</p>
                </div>
              </div>
            </div>
            <!-- Friendly Channel Card (spans 2 columns on large screens) -->
            <div class="col-12 col-lg-8 mx-auto d-flex">
              <div
                class="card h-100 shadow-lg flex-fill text-center justify-content-center align-items-center flex-row flex-wrap p-4"
                style="background: #f7faff; border: 2px dashed #22304a; min-height: 220px;">
                <div class="d-flex flex-column flex-md-row align-items-center w-100 justify-content-center">
                  <img src="{{ asset('assets/img/front-pages/landing-page/image.png') }}" alt="YouTube Channel"
                    style="width:64px;height:64px;margin:0 1.5rem 0 0;">
                  <div>
                    <h4 class="fw-bold mb-2" style="color:#22304a;">{{ __('شاهد المزيد من الشروحات بالفيديو!') }}</h4>
                    <p class="mb-3" style="font-size:1.1rem; color:#22304a;">{{ __('للحصول على المزيد من الشروحات
                      والدروس العملية حول برامجنا، قم بزيارة قناتنا على يوتيوب:') }}</p>
                    <a href="https://www.youtube.com/@creativesmartsoftware8501" target="_blank" rel="noopener"
                      class="btn btn-danger px-4 py-2 fw-bold" style="font-size:1.1rem; border-radius:2rem;">
                      <i class="ti ti-brand-youtube me-2"></i> قناة Creative Smart Software
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ================== End Product Videos Section ================== -->
  </div>