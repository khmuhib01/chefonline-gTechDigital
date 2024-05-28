<?php

use App\Http\Controllers\Frontend\AboutUs;
use App\Http\Controllers\Frontend\Contact;
use App\Http\Controllers\Frontend\CookiePolicy;
use App\Http\Controllers\Frontend\CustomSoftwareDevelopment;
use App\Http\Controllers\Frontend\DigitalMarketing;
use App\Http\Controllers\Frontend\MobileAppDevelopment;
use App\Http\Controllers\Frontend\Package;
use App\Http\Controllers\Frontend\Portfolio;
use App\Http\Controllers\Frontend\PrivacyPolicy;
use App\Http\Controllers\Frontend\WebDesign;
use Illuminate\Support\Facades\Route;

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
Route::get('/about-us', [AboutUs::class, 'index'])->name('about-us');
Route::get('/privacy-policy', [PrivacyPolicy::class, 'index'])->name('privacy-policy');
Route::get('/cookie-policy', [CookiePolicy::class, 'index'])->name('cookie-policy');
