<!-- resources/views/app-development.blade.php -->
@extends('layouts.base')

@section('title', 'Mobile App Development - iOS, Android & Cross-Platform')
@section('description', 'Expert mobile app development services for iOS, Android, and cross-platform. Transform your ideas into powerful mobile applications.')
@section('keywords', 'mobile app development, iOS development, Android development, React Native, Flutter, mobile applications')

@section('content')
    <!-- Hero Section with Parallax -->
    <section class="hero-parallax relative bg-gradient-to-br from-slate-50 via-white to-orange-50 py-20 lg:py-32 overflow-hidden">
        <!-- Subtle background pattern with parallax -->
        <div class="parallax-bg absolute inset-0 opacity-[0.03]" data-speed="0.5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #f97316 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <!-- Floating shapes with parallax -->
        <div class="parallax-shape absolute top-20 right-10 w-20 h-20 bg-orange-500/10 rounded-full blur-2xl" data-speed="0.3"></div>
        <div class="parallax-shape absolute bottom-32 left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-3xl" data-speed="0.4"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Simple badge with fade-in -->
                <div class="fade-up inline-flex items-center gap-2 px-4 py-2 bg-orange-50 rounded-full text-orange-600 text-sm font-medium mb-6 border border-orange-100">
                    <span class="w-2 h-2 bg-orange-600 rounded-full animate-pulse"></span>
                    Mobile App Development
                </div>

                <h1 class="fade-up text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight" style="animation-delay: 0.1s">
                    Transforming Ideas Into
                    <span class="block mt-2 bg-gradient-to-r from-orange-500 to-blue-600 bg-clip-text text-transparent">
                        Powerful Mobile Apps
                    </span>
                </h1>

                <p class="fade-up text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed" style="animation-delay: 0.2s">
                    We craft innovative, user-centric mobile applications that drive business growth and user engagement
                </p>

                <!-- Simple CTA buttons with fade-in -->
                <div class="fade-up flex flex-col sm:flex-row gap-4 justify-center" style="animation-delay: 0.3s">
                    <a href="#get-started" class="inline-flex items-center justify-center gap-2 bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-orange-500/30 hover:-translate-y-0.5">
                        Start Your Project
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#platforms" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 px-8 py-4 rounded-lg font-medium border-2 border-slate-200 hover:border-orange-600 transition-all duration-300">
                        Explore Platforms
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section id="platforms" class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Platforms We Excel In
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Native and cross-platform development expertise for all major mobile platforms
                </p>
            </div>

            <!-- Platforms Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <!-- iOS Platform -->
                <div class="platform-card scroll-reveal group bg-gradient-to-br from-slate-50 to-blue-50 rounded-2xl p-8 border border-slate-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-slate-700 to-slate-900 rounded-xl flex items-center justify-center shadow-lg shadow-slate-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        iOS
                    </h3>
                    <p class="text-slate-600 text-center mb-4 leading-relaxed">
                        Native iOS development for iPhone and iPad
                    </p>
                    <div class="flex justify-center gap-3 flex-wrap">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">Swift</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">SwiftUI</span>
                    </div>
                </div>

                <!-- Android Platform -->
                <div class="platform-card scroll-reveal group bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-slate-100 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg shadow-green-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.523 15.341c-.635 0-1.154.52-1.154 1.154 0 .636.519 1.154 1.154 1.154.635 0 1.154-.518 1.154-1.154 0-.634-.519-1.154-1.154-1.154zm-11.046 0c-.635 0-1.154.52-1.154 1.154 0 .636.519 1.154 1.154 1.154.635 0 1.154-.518 1.154-1.154 0-.634-.519-1.154-1.154-1.154zm9.47-9.241l1.208-2.207a.177.177 0 00-.064-.241.174.174 0 00-.24.064l-1.224 2.236a8.945 8.945 0 00-3.627-.773 8.928 8.928 0 00-3.627.773L7.149 3.716a.174.174 0 00-.24-.064.177.177 0 00-.064.241l1.208 2.207A9.149 9.149 0 003 14.076h18a9.149 9.149 0 00-5.053-7.976z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-3 text-center group-hover:text-green-600 transition-colors">
                        Android
                    </h3>
                    <p class="text-slate-600 text-center mb-4 leading-relaxed">
                        Native Android development for all devices
                    </p>
                    <div class="flex justify-center gap-3 flex-wrap">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Kotlin</span>
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">Java</span>
                    </div>
                </div>

                <!-- Cross-platform -->
                <div class="platform-card scroll-reveal group bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-slate-100 hover:border-orange-300 hover:shadow-xl transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        Cross-platform
                    </h3>
                    <p class="text-slate-600 text-center mb-4 leading-relaxed">
                        Build once, deploy everywhere approach
                    </p>
                    <div class="flex justify-center gap-3 flex-wrap">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">React Native</span>
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm font-medium">Flutter</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-b from-white to-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Key Features We Implement
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Essential features that make your mobile app powerful and user-friendly
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <!-- Feature 1 -->
                <div class="feature-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        User Authentication
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Secure and seamless user login experiences
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-orange-200 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        Push Notifications
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Keep users engaged with timely updates
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        Data Synchronization
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Ensure data consistency across devices
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- App Categories Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    App Categories We Specialize In
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Expertise across diverse mobile app categories and industries
                </p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                <!-- Category 1 -->
                <div class="category-card scroll-reveal group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100 hover:border-purple-300 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-purple-600 transition-colors">
                        Social Networking
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Connect users and share experiences globally
                    </p>
                </div>

                <!-- Category 2 -->
                <div class="category-card scroll-reveal group bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 border border-orange-100 hover:border-orange-300 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        E-commerce
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Create seamless shopping experiences on mobile
                    </p>
                </div>

                <!-- Category 3 -->
                <div class="category-card scroll-reveal group bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-100 hover:border-green-300 hover:shadow-xl transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg shadow-green-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-green-600 transition-colors">
                        Health & Fitness
                    </h3>
                    <p class="text-slate-600 text-center leading-relaxed">
                        Empower users to lead healthier lifestyles
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Light Background -->
    <section id="get-started" class="py-20 lg:py-28 bg-gradient-to-br from-blue-50 via-white to-orange-50 relative overflow-hidden">
        <!-- Subtle pattern background with parallax -->
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0 parallax-bg" data-speed="0.3" style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>

        <!-- Gradient orbs -->
        <div class="parallax-shape absolute top-20 right-20 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl" data-speed="0.2"></div>
        <div class="parallax-shape absolute bottom-20 left-20 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl" data-speed="0.4"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                Ready to Launch Your Dream App?
            </h2>
            <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Join the ranks of successful businesses with a cutting-edge mobile app. Our team is ready to turn your vision into reality
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-10 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5">
                    Get Started Today
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 px-10 py-4 rounded-lg font-medium border-2 border-orange-500 hover:border-orange-600 transition-all duration-300 hover:-translate-y-0.5">
                    View Our Work
                </a>
            </div>
        </div>
    </section>

<style>
/* Smooth transitions */
* {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

html {
    scroll-behavior: smooth;
}

/* Initial fade-up animation for hero */
.fade-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.8s ease-out forwards;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Scroll reveal animation */
.scroll-reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.scroll-reveal.revealed {
    opacity: 1;
    transform: translateY(0);
}

/* Platform/Feature/Category card hover effect */
.platform-card,
.feature-card,
.category-card {
    transform: translateY(0);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.platform-card:hover,
.feature-card:hover,
.category-card:hover {
    transform: translateY(-8px);
}

/* Parallax effect will be handled by JS */
.parallax-bg,
.parallax-shape {
    will-change: transform;
}

/* Smooth performance */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Script loaded'); // Debug log

    // ==========================================
    // SCROLL REVEAL ANIMATIONS
    // ==========================================
    const revealElements = document.querySelectorAll('.scroll-reveal');
    console.log('Found scroll-reveal elements:', revealElements.length); // Debug log
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                console.log('Element intersecting:', entry.target); // Debug log
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.add('revealed');
                    console.log('Added revealed class'); // Debug log
                }, delay);
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
        console.log('Observing element:', el); // Debug log
    });

    // ==========================================
    // PARALLAX SCROLL EFFECT
    // ==========================================
    const parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-shape');
    console.log('Found parallax elements:', parallaxElements.length); // Debug log
    
    let ticking = false;
    function updateParallax() {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = parseFloat(element.dataset.speed) || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });

    // Initial parallax update
    updateParallax();

    // ==========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ==========================================
    // CARD ICON ROTATION ON HOVER
    // ==========================================
    const cards = document.querySelectorAll('.platform-card, .feature-card, .category-card');
    
    cards.forEach(card => {
        const icon = card.querySelector('.w-16');
        if (icon) {
            card.addEventListener('mouseenter', () => {
                icon.style.transition = 'transform 0.3s ease';
                icon.style.transform = 'scale(1.1) rotate(5deg)';
            });
            card.addEventListener('mouseleave', () => {
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        }
    });

    console.log('All event listeners attached'); // Debug log
});
</script>
@endsection
