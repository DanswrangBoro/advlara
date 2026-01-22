<!-- resources/views/services.blade.php -->
@extends('layouts.base')

@section('title', 'Web Development Services - Transform Your Digital Presence')
@section('description', 'Custom web development services including e-commerce solutions, web applications, CMS development, and AI-powered web solutions.')
@section('keywords', 'web development, custom websites, e-commerce, web applications, CMS, API integration, SEO, mobile-first development')

@section('content')
    <!-- Hero Section - Clean & Simple with Parallax -->
    <section class="hero-parallax relative bg-gradient-to-br from-slate-50 via-white to-blue-50 py-20 lg:py-32 overflow-hidden">
        <!-- Subtle background pattern with parallax -->
        <div class="parallax-bg absolute inset-0 opacity-[0.03]" data-speed="0.5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #3b82f6 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <!-- Floating shapes with parallax -->
        <div class="parallax-shape absolute top-20 right-10 w-20 h-20 bg-blue-500/10 rounded-full blur-2xl" data-speed="0.3"></div>
        <div class="parallax-shape absolute bottom-32 left-10 w-32 h-32 bg-orange-500/10 rounded-full blur-3xl" data-speed="0.4"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Simple badge with fade-in -->
                <div class="fade-up inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full text-blue-600 text-sm font-medium mb-6 border border-blue-100">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    Premium Digital Services
                </div>

                <h1 class="fade-up text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight" style="animation-delay: 0.1s">
                    Transform Your Vision Into
                    <span class="block mt-2 bg-gradient-to-r from-blue-600 to-orange-500 bg-clip-text text-transparent">
                        Digital Reality
                    </span>
                </h1>

                <p class="fade-up text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed" style="animation-delay: 0.2s">
                    We craft exceptional web experiences that drive growth and engage your audience with modern technology and creative design
                </p>

                <!-- Simple CTA buttons with fade-in -->
                <div class="fade-up flex flex-col sm:flex-row gap-4 justify-center" style="animation-delay: 0.3s">
                    <a href="#get-started" class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5">
                        Get Started
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 px-8 py-4 rounded-lg font-medium border-2 border-slate-200 hover:border-blue-600 transition-all duration-300">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section - Minimal with Counter Animation -->
    <section class="py-16 bg-white border-y border-slate-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <div class="text-center scroll-reveal" data-delay="0">
                    <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </div>
                    <div class="text-sm text-slate-600">Projects Completed</div>
                </div>
                <div class="text-center scroll-reveal" data-delay="100">
                    <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent mb-2">
                        <span class="counter" data-target="98">0</span>%
                    </div>
                    <div class="text-sm text-slate-600">Client Satisfaction</div>
                </div>
                <div class="text-center scroll-reveal" data-delay="200">
                    <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-2">
                        <span class="counter" data-target="10">0</span>+
                    </div>
                    <div class="text-sm text-slate-600">Years Experience</div>
                </div>
                <div class="text-center scroll-reveal" data-delay="300">
                    <div class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent mb-2">
                        <span class="counter" data-target="24">0</span>/7
                    </div>
                    <div class="text-sm text-slate-600">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section - Clean Grid with Stagger Animation -->
    <section id="services" class="py-20 lg:py-28 bg-gradient-to-b from-white to-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Our Services
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Comprehensive solutions designed to elevate your digital presence
                </p>
            </div>

            <!-- Services Grid with Staggered Animation -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Service Card 1 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <!-- Centered Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        Custom Web Development
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Tailored websites built from scratch to match your unique business needs and goals
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Responsive Design</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Modern UI/UX</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Performance Optimized</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-orange-200 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        E-commerce Solutions
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Full-featured online stores with secure payment processing and inventory management
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Secure Payments</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Inventory System</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Order Management</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        Web Applications
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Complex web-based applications that power your business operations
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Custom Features</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>User Authentication</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Data Management</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 4 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-orange-200 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        CMS Development
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Easy-to-use content management systems for your team to update content
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>User-Friendly Interface</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Content Scheduling</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Media Management</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 5 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        API Integration
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Connect your website with third-party services and applications
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Payment Gateways</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Social Media</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Analytics Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 6 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-orange-200 hover:shadow-xl transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        Website Maintenance
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Keep your website secure, updated, and performing optimally
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Security Updates</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Performance Monitoring</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Regular Backups</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 7 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-blue-600 transition-colors">
                        SEO & Analytics
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Improve your website's visibility and track performance metrics
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Search Optimization</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Traffic Analysis</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-orange-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Performance Reports</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Card 8 -->
                <div class="service-card scroll-reveal group bg-white rounded-2xl p-8 border border-slate-100 hover:border-orange-200 hover:shadow-xl transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mb-3 text-center group-hover:text-orange-600 transition-colors">
                        Mobile-First Development
                    </h3>
                    <p class="text-slate-600 text-center mb-6 leading-relaxed">
                        Websites optimized for all devices with a focus on mobile experience
                    </p>

                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.1s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Responsive Design</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.2s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Touch-Friendly</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-700 feature-item" style="animation-delay: 0.3s">
                            <div class="w-5 h-5 flex items-center justify-center rounded-full bg-blue-100 flex-shrink-0">
                                <svg class="w-3 h-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span>Fast Loading</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Section - Simple Dark with Slide-In Effect -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 parallax-bg" data-speed="0.3" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-500/20 rounded-full text-orange-300 text-sm font-medium mb-6 border border-orange-500/30">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                    </svg>
                    AI-Powered Solutions
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Next-Generation AI Integration
                </h2>
                <p class="text-lg text-slate-300 max-w-2xl mx-auto">
                    Leverage artificial intelligence to create smarter, more adaptive web experiences
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- AI Feature 1 -->
                <div class="scroll-reveal bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-300" data-delay="0">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 text-center">Personalized Experiences</h3>
                    <p class="text-sm text-slate-300 text-center leading-relaxed">
                        Deliver tailored content and recommendations to each user
                    </p>
                </div>

                <!-- AI Feature 2 -->
                <div class="scroll-reveal bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-300" data-delay="100">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 text-center">Automated Tasks</h3>
                    <p class="text-sm text-slate-300 text-center leading-relaxed">
                        Streamline workflows with intelligent automation
                    </p>
                </div>

                <!-- AI Feature 3 -->
                <div class="scroll-reveal bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-300" data-delay="200">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 text-center">Predictive Analytics</h3>
                    <p class="text-sm text-slate-300 text-center leading-relaxed">
                        Make data-driven decisions with AI insights
                    </p>
                </div>

                <!-- AI Feature 4 -->
                <div class="scroll-reveal bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-300" data-delay="300">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 text-center">Enhanced Decisions</h3>
                    <p class="text-sm text-slate-300 text-center leading-relaxed">
                        Intelligent systems that learn and improve over time
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Clean with Zoom Effect -->
    <section id="get-started" class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Let's bring your vision to life with innovative web solutions tailored to your business needs
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-10 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5">
                    Contact Us Today
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 px-10 py-4 rounded-lg font-medium border-2 border-orange-500 hover:border-orange-600 transition-all duration-300 hover:-translate-y-0.5">
                    View Portfolio
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

/* Service card hover effect */
.service-card {
    transform: translateY(0);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-card:hover {
    transform: translateY(-8px);
}

/* Feature items slide in on hover */
.service-card:hover .feature-item {
    animation: slideInLeft 0.4s ease-out forwards;
}

@keyframes slideInLeft {
    from {
        opacity: 0.5;
        transform: translateX(-10px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Counter animation */
.counter {
    display: inline-block;
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
    // ==========================================
    // SCROLL REVEAL ANIMATIONS
    // ==========================================
    const revealElements = document.querySelectorAll('.scroll-reveal');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.dataset.delay || 0;
                setTimeout(() => {
                    entry.target.classList.add('revealed');
                }, delay);
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // ==========================================
    // PARALLAX SCROLL EFFECT
    // ==========================================
    const parallaxElements = document.querySelectorAll('.parallax-bg, .parallax-shape');
    
    let ticking = false;
    function updateParallax() {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
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

    // ==========================================
    // COUNTER ANIMATION
    // ==========================================
    const counters = document.querySelectorAll('.counter');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = parseInt(target.dataset.target);
                const duration = 2000; // 2 seconds
                const increment = finalValue / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < finalValue) {
                        target.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        target.textContent = finalValue;
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(target);
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => counterObserver.observe(counter));

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
    // CARD ICON ROTATION ON SCROLL
    // ==========================================
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        const icon = card.querySelector('.w-16');
        if (icon) {
            card.addEventListener('mouseenter', () => {
                icon.style.transform = 'scale(1.1) rotate(5deg)';
            });
            card.addEventListener('mouseleave', () => {
                icon.style.transform = 'scale(1) rotate(0deg)';
            });
        }
    });
});
</script>
@endsection
