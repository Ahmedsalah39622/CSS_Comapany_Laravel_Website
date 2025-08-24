
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\lifelinehomepage;
use App\Http\Controllers\AuthController;


// 🔹 الصفحة الرئيسية بعد تسجيل الدخول
Route::get('/home', function () {
  return view('pages-home');
})->middleware(['auth', 'verified'])->name('pages-home');

// 🔹 الصفحة الرئيسية قبل تسجيل الدخول
Route::get('/', [lifelinehomepage::class, 'index'])->name('pages-lifeline');

// 🔹 لغة الموقع
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);

// 🔹 صفحات إضافية
Route::get('/page-2', [Page2::class, 'index']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

// ✅ تسجيل الدخول
// Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('login'); // عرض صفحة تسجيل الدخول
// Route::post('/auth/login-basic', [AuthController::class, 'login'])->name('login.post'); // معالجة بيانات تسجيل الدخول

// // ✅ التسجيل
// Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

// // ✅ تسجيل الخروج
// Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

// ✅ حماية الصفحات بعد تسجيل الدخول
Route::middleware('auth')->group(function () {
  Route::get('/dashboard', function () {
    return redirect()->route('pages-home'); // إعادة التوجيه بعد تسجيل الدخول
  })->name('dashboard');
});

// 🔹 صفحة فيديوهات الشرح
Route::get('/tutorials', function () {
  return view('content.pages.pages-tutorials');
})->name('pages-tutorials');

// 🔹 About Us Page
Route::get('/about-us', function () {
  return view('content.pages.about-us');
})->name('about-us');

// 🔹 Business Partners Page
Route::get('/business-partners', function () {
  return view('content.pages.business-partners');
})->name('business-partners');

// 🔹 Product Details Page
Route::get('/product-details', function () {
  return view('content.pages.product-details');
})->name('product-details');

// 🔹 صفحة تسجيل الدخول - غلاف
Route::get('/auth/login-cover', function () {
  return view('content.pages.auth-login-cover');
});
// 🔹 صفحة تسجيل حساب جديد - أساسي
Route::get('/auth/register-basic', function () {
  return view('content.pages.auth-register-basic');
});
// 🔹 صفحة تسجيل الدخول - غلاف
Route::get('/auth/login-basic', function () {
  return view('content.pages.auth-login-basic');
})->name('auth-login-basic');
