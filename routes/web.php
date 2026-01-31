<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactSubmissionController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
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

// Contact routes
Route::get('/contact-us', [ContactSubmissionController::class, 'create'])->name('contact_us');
Route::post('/contact-us', [ContactSubmissionController::class, 'store'])->name('contact.store');

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

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/content', [AdminController::class, 'content'])->name('content');
        Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs.index');
        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
        
        // User Management Routes
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class, [
            'except' => ['create', 'edit']
        ]);
        
        // Page Management Routes
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class, [
            'except' => ['create', 'edit']
        ]);
        Route::post('pages/{page}/duplicate', [\App\Http\Controllers\Admin\PageController::class, 'duplicate'])
            ->name('pages.duplicate');
        
        // Contact Submissions Management
        Route::resource('contact-submissions', ContactSubmissionController::class, [
            'only' => ['index', 'show', 'destroy']
        ]);
        Route::patch('contact-submissions/{contactSubmission}/mark-read', [ContactSubmissionController::class, 'markAsRead'])
            ->name('contact-submissions.mark-read');
        Route::patch('contact-submissions/{contactSubmission}/mark-replied', [ContactSubmissionController::class, 'markAsReplied'])
            ->name('contact-submissions.mark-replied');
        Route::get('contact-submissions-stats', [ContactSubmissionController::class, 'statistics'])
            ->name('contact-submissions.statistics');
    });
});

require __DIR__.'/auth.php';

