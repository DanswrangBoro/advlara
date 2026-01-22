<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/blog', function () {
    return view('blog/blog');
})->name('blog');

Route::get('/blog-details', function () {
    return view('blog/blog_details');
})->name('blog_details');

Route::get('/web-development', function () {
    return view('services/web_development');
})->name('web_development');

Route::get('/app-development', function () {
    return view('services/app_development');
})->name('app_development');

Route::get('/seo', function () {
    return view('services/seo');
})->name('seo');

Route::get('/travel-solution', function () {
    return view('services/travel_solution');
})->name('travel_solution');

Route::get('/outsourcing', function () {
    return view('services/outsourcing');
})->name('outsourcing');

Route::get('/digital-marketing', function () {
    return view('services/digital_marketing');
})->name('digital_marketing');

Route::get('/social-media', function () {
    return view('services/social_media');
})->name('social_media');

Route::get('/graphic-design', function () {
    return view('services/graphic_design');
})->name('graphic_design');

Route::get('/ui-ux', function () {
    return view('services/ui_ux');
})->name('ui_ux');

Route::get('/performance-marketing', function () {
    return view('services/performance_marketing');
})->name('performance_marketing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

