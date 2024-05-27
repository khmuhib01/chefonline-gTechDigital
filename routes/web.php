<?php

use App\Http\Controllers\Frontend\Contact;
use App\Http\Controllers\Frontend\Package;
use App\Http\Controllers\Frontend\Portfolio;
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
