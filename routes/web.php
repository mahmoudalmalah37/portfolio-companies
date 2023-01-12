<?php

use App\Http\Livewire\AboutCompount;
use App\Http\Livewire\ContactCompount;
use App\Http\Livewire\DetailsPortfolio;
use App\Http\Livewire\HomeCompount;
use App\Http\Livewire\PlanCompount;
use App\Http\Livewire\PortfolioCompount;
//use App\Http\Livewire\ServicesCompount;
use App\Http\Livewire\TestimonialsCompount;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', HomeCompount::class)->name('home');
        Route::get('/about', AboutCompount::class)->name('about');
//        Route::get('/services', ServicesCompount::class)->name('services');
        Route::get('/portfolio', PortfolioCompount::class)->name('portfolio');
        Route::get('/portfolio/{id}', DetailsPortfolio::class)->name('portfolio.details');
        Route::get('/testimonials', TestimonialsCompount::class)->name('testimonials');
        Route::get('/plan', PlanCompount::class)->name('plan');
        Route::get('/contact', ContactCompount::class)->name('contact');
    }
);
