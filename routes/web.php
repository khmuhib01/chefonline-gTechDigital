<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Frontend\AboutUs;
use App\Http\Controllers\Frontend\Contact;
use App\Http\Controllers\Frontend\CookiePolicy;
use App\Http\Controllers\Frontend\CustomSoftwareDevelopment;
use App\Http\Controllers\Frontend\DigitalMarketing;
use App\Http\Controllers\Frontend\GraphicDesign;
use App\Http\Controllers\Frontend\Meet;
use App\Http\Controllers\Frontend\MobileAppDevelopment;
use App\Http\Controllers\Frontend\Package;
use App\Http\Controllers\Frontend\Portfolio;
use App\Http\Controllers\Frontend\PrivacyPolicy;
use App\Http\Controllers\Frontend\ServiceContentManagement;
use App\Http\Controllers\Frontend\ServiceEmailMarketing;
use App\Http\Controllers\Frontend\ServiceFacebookAdvertisement;
use App\Http\Controllers\Frontend\ServiceMobile;
use App\Http\Controllers\Frontend\ServiceRestaurantSeo;
use App\Http\Controllers\Frontend\ServiceSeo;
use App\Http\Controllers\Frontend\ServiceSocialMedia;
use App\Http\Controllers\Frontend\WebDesign;
use App\Http\Controllers\Learn\PersonController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/portfolio', [Portfolio::class, 'index'])->name('portfolio');
Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/packages-and-pricing', [Package::class, 'index'])->name('packages');
Route::get('/web-development', [WebDesign::class, 'index'])->name('web-development');
Route::get('/digital-marketing', [DigitalMarketing::class, 'index'])->name('digital-marketing');
Route::get('/mobile-app-development', [MobileAppDevelopment::class, 'index'])->name('mobile-app-development');
Route::get('/custom-software-development', [CustomSoftwareDevelopment::class, 'index'])->name('custom-software-development');
Route::get('/graphic-design', [GraphicDesign::class, 'index'])->name('graphic-design');

Route::get('/service-seo', [ServiceSeo::class, 'index'])->name('service-seo');
Route::get('/service-social-media', [ServiceSocialMedia::class, 'index'])->name('service-social-media');
Route::get('/service-facebook-advertisement', [ServiceFacebookAdvertisement::class, 'index'])->name('service-facebook-advertisement');
Route::get('/service-email-marketing', [ServiceEmailMarketing::class, 'index'])->name('service-email-marketing');
Route::get('/service-content-management', [ServiceContentManagement::class, 'index'])->name('service-content-management');
Route::get('/service-restaurant-seo', [ServiceRestaurantSeo::class, 'index'])->name('service-restaurant-seo');
Route::get('/service-mobile', [ServiceMobile::class, 'index'])->name('service-mobile');

Route::get('/about-us', [AboutUs::class, 'index'])->name('about-us');
Route::get('/privacy-policy', [PrivacyPolicy::class, 'index'])->name('privacy-policy');
Route::get('/cookie-policy', [CookiePolicy::class, 'index'])->name('cookie-policy');
Route::get('/meet', [Meet::class, 'index'])->name('meet');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('mohibbullah.chefonline@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/person', [PersonController::class, 'index'])->name('person.index');
Route::get('/person-add', [PersonController::class, 'create'])->name('person.create');
Route::get('/person-edit', [PersonController::class, 'edit'])->name('person.edit');
Route::get('/person-edit/{id}', [PersonController::class, 'update'])->name('person.edit');
Route::get('/person-delete/{id}', [PersonController::class, 'delete'])->name('person.delete');


Route::get('/department', [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department-add', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department-store', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department-edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department-update/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department-delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');


Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course-add', [CourseController::class, 'create'])->name('course.create');
Route::post('/course-store', [CourseController::class, 'store'])->name('course.store');
Route::get('/course-edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/course-update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/course-delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
