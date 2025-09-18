<nav class="mobile-navbar">
  <span class="navbar-brand">CSS</span>
  <button class="navbar-menu-btn" onclick="document.querySelector('.mobile-menu').classList.toggle('show')">&#9776;</button>
</nav>
<div class="mobile-menu" style="display:none;">
  <a href="#home" onclick="closeMenu()">الرئيسية</a>
  <a href="#features" onclick="closeMenu()">الميزات</a>
  <a href="#pricing" onclick="closeMenu()">الأسعار</a>
  <a href="#faq" onclick="closeMenu()">الأسئلة الشائعة</a>
  <a href="#contact" onclick="closeMenu()">اتصل بنا</a>
  <a href="#pages" onclick="closeMenu()">الصفحات</a>
  <a href="#help" onclick="closeMenu()">مركز المساعدة</a>
  <a href="#about" onclick="closeMenu()">من نحن</a>
  <a href="#partners" onclick="closeMenu()">شركاء الأعمال</a>
  <a href="#products" onclick="closeMenu()">المنتجات</a>
  <a href="#login" onclick="closeMenu()">تسجيل الدخول / إنشاء حساب</a>
</div>
<script>
  // Show/hide menu on button click
  document.querySelector('.navbar-menu-btn').onclick = function() {
    var menu = document.querySelector('.mobile-menu');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
  };
  function closeMenu() {
    document.querySelector('.mobile-menu').style.display = 'none';
  }
</script>
<script>
  function closeMenu() {
    document.querySelector('.mobile-menu').classList.remove('show');
  }
</script>
