<!-- resources/views/outsourcing-solutions.blade.php -->
@extends('layouts.base')

@section('title', 'Outsourcing Solutions - IT, Business Process & HR Outsourcing')
@section('description', 'Transform your business with our comprehensive outsourcing solutions. Reduce costs, access specialized expertise, and focus on what matters most.')
@section('keywords', 'IT outsourcing, business process outsourcing, HR outsourcing, BPO services, technology solutions, workforce management')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-white py-20 lg:py-32 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-[0.03]">
            <div class="absolute inset-0" style="background-image: linear-gradient(#2563eb 1px, transparent 1px), linear-gradient(90deg, #2563eb 1px, transparent 1px); background-size: 60px 60px;"></div>
        </div>

        <!-- Geometric shapes -->
        <div class="absolute top-20 right-10 w-32 h-32 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-40 h-40 bg-orange-500/5 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/4 w-2 h-2 bg-blue-500 rounded-full"></div>
        <div class="absolute top-1/3 left-1/4 w-2 h-2 bg-orange-500 rounded-full"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <!-- Badge -->
                    <div class="fade-up inline-flex items-center gap-2 px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-6">
                        <div class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></div>
                        Enterprise Outsourcing Solutions
                    </div>

                    <h1 class="fade-up-delay-1 text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                        Focus on
                        <span class="relative inline-block">
                            <span class="relative z-10">Growth,</span>
                            <span class="absolute bottom-2 left-0 w-full h-3 bg-blue-200 -rotate-1"></span>
                        </span>
                        <br/>
                        <span class="bg-gradient-to-r from-blue-600 via-blue-700 to-orange-600 bg-clip-text text-transparent">
                            We'll Handle the Rest
                        </span>
                    </h1>

                    <p class="fade-up-delay-2 text-xl text-slate-600 mb-8 leading-relaxed">
                        Strategic outsourcing solutions that reduce costs, boost efficiency, and give you access to world-class expertise
                    </p>

                    <!-- Key Metrics -->
                    <div class="fade-up-delay-3 grid grid-cols-3 gap-6 mb-10">
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent mb-1">60%</div>
                            <div class="text-sm text-slate-600">Cost Reduction</div>
                        </div>
                        <div class="text-center border-x border-slate-200">
                            <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent mb-1">10K+</div>
                            <div class="text-sm text-slate-600">Projects Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent mb-1">24/7</div>
                            <div class="text-sm text-slate-600">Support</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="fade-up-delay-3 flex flex-col sm:flex-row gap-4">
                        <a href="#solutions" class="group inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-8 py-4 rounded-xl font-semibold shadow-lg shadow-blue-600/30 transition-all duration-300 hover:shadow-xl hover:shadow-blue-600/40 hover:-translate-y-0.5">
                            Explore Solutions
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 px-8 py-4 rounded-xl font-semibold border-2 border-slate-300 hover:border-blue-600 transition-all duration-300">
                            Talk to Expert
                        </a>
                    </div>
                </div>

                <!-- Right - Illustration/Stats Dashboard -->
                <div class="fade-up-delay-2 relative hidden lg:block">
                    <!-- Main Card -->
                    <div class="relative bg-gradient-to-br from-slate-50 to-white border-2 border-slate-200 rounded-3xl p-8 shadow-2xl">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-slate-900 font-bold text-lg">Outsourcing Dashboard</h3>
                                <p class="text-slate-500 text-sm">Real-time Performance</p>
                            </div>
                            <div class="flex items-center gap-2 px-3 py-1.5 bg-green-50 border border-green-200 rounded-full">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-xs font-semibold text-green-700">Live</span>
                            </div>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-white border-2 border-blue-100 rounded-2xl p-5 hover:border-blue-300 transition-all duration-300">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Active Projects</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-900">248</div>
                                <div class="flex items-center gap-1 mt-1">
                                    <svg class="w-3 h-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-xs text-green-600 font-semibold">+12%</span>
                                </div>
                            </div>

                            <div class="bg-white border-2 border-orange-100 rounded-2xl p-5 hover:border-orange-300 transition-all duration-300">
                                <div class="flex items-center gap-2 mb-2">
                                    <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs font-medium text-slate-600">Cost Savings</span>
                                </div>
                                <div class="text-2xl font-bold text-slate-900">$4.2M</div>
                                <div class="flex items-center gap-1 mt-1">
                                    <svg class="w-3 h-3 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-xs text-green-600 font-semibold">+24%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Bars -->
                        <div class="space-y-4">
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">IT Services</span>
                                    <span class="text-sm font-bold text-blue-600">87%</span>
                                </div>
                                <div class="h-2 bg-slate-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full animate-progress-87" style="width: 87%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">BPO Services</span>
                                    <span class="text-sm font-bold text-orange-600">92%</span>
                                </div>
                                <div class="h-2 bg-slate-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-orange-500 to-orange-600 rounded-full animate-progress-92" style="width: 92%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-slate-700">HR Services</span>
                                    <span class="text-sm font-bold text-blue-600">78%</span>
                                </div>
                                <div class="h-2 bg-slate-200 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 rounded-full animate-progress-78" style="width: 78%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating badges -->
                    <div class="absolute -top-6 -right-6 bg-white border-2 border-blue-200 rounded-2xl p-4 shadow-xl animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">ISO Certified</div>
                                <div class="text-xs text-slate-600">Quality Assured</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-white border-2 border-orange-200 rounded-2xl p-4 shadow-xl animate-float-delayed">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900">Fast Delivery</div>
                                <div class="text-xs text-slate-600">2x Faster</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="py-12 bg-slate-50 border-y border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-slate-900">ISO 9001:2015</div>
                        <div class="text-sm text-slate-600">Certified Quality</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-slate-900">Data Security</div>
                        <div class="text-sm text-slate-600">Bank-Level Protection</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-slate-900">500+ Experts</div>
                        <div class="text-sm text-slate-600">Global Team</div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-slate-900">98% Satisfaction</div>
                        <div class="text-sm text-slate-600">Client Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4">
                    Our Solutions
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                    Comprehensive Outsourcing
                    <span class="block mt-2 bg-gradient-to-r from-blue-600 via-blue-700 to-orange-600 bg-clip-text text-transparent">
                        Services for Every Need
                    </span>
                </h2>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                    From IT infrastructure to business processes and human resources, we deliver excellence across all domains
                </p>
            </div>

            <!-- Solutions Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Solution 1 - IT Outsourcing -->
                <div class="scroll-reveal-delay-1 group bg-white border-2 border-slate-200 hover:border-blue-500 rounded-3xl p-8 lg:p-10 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <!-- Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <!-- Icon -->
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">
                            IT Outsourcing
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Reduce costs, increase efficiency, and access specialized technical skills that drive innovation and accelerate business growth.
                        </p>

                        <!-- Features List -->
                        <div class="space-y-3 mb-8">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Cloud Solutions & Security</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">24/7 Technical Support</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Software Development</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Infrastructure Management</span>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="pt-6 border-t-2 border-slate-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">65%</div>
                                    <div class="text-xs text-slate-600">Cost Savings</div>
                                </div>
                                <div class="h-10 w-px bg-slate-200"></div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">3x</div>
                                    <div class="text-xs text-slate-600">Faster Delivery</div>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <a href="{{ route('contact_us') }}" class="mt-6 inline-flex items-center gap-2 text-blue-600 font-semibold group-hover:gap-3 transition-all">
                            Learn More
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Solution 2 - Business Process Outsourcing -->
                <div class="scroll-reveal-delay-2 group bg-white border-2 border-slate-200 hover:border-orange-500 rounded-3xl p-8 lg:p-10 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-orange-600 transition-colors">
                            Business Process Outsourcing
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Boost productivity by outsourcing non-core functions, allowing your team to focus on strategic initiatives that drive business growth.
                        </p>

                        <div class="space-y-3 mb-8">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Customer Support Services</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Data Entry & Management</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Finance & Accounting</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Content Moderation</span>
                            </div>
                        </div>

                        <div class="pt-6 border-t-2 border-slate-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-2xl font-bold text-orange-600">50%</div>
                                    <div class="text-xs text-slate-600">Time Saved</div>
                                </div>
                                <div class="h-10 w-px bg-slate-200"></div>
                                <div>
                                    <div class="text-2xl font-bold text-orange-600">40%</div>
                                    <div class="text-xs text-slate-600">Cost Reduction</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('contact_us') }}" class="mt-6 inline-flex items-center gap-2 text-orange-600 font-semibold group-hover:gap-3 transition-all">
                            Learn More
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Solution 3 - Human Resources Outsourcing -->
                <div class="scroll-reveal-delay-3 group bg-white border-2 border-slate-200 hover:border-blue-500 rounded-3xl p-8 lg:p-10 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Human Resources Outsourcing
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Simplify employment tasks, reduce administrative costs, and empower your business to concentrate on core strategic goals.
                        </p>

                        <div class="space-y-3 mb-8">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Recruitment & Staffing</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Payroll Management</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Benefits Administration</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-medium">Training & Development</span>
                            </div>
                        </div>

                        <div class="pt-6 border-t-2 border-slate-100">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">35%</div>
                                    <div class="text-xs text-slate-600">Admin Reduction</div>
                                </div>
                                <div class="h-10 w-px bg-slate-200"></div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">99%</div>
                                    <div class="text-xs text-slate-600">Compliance Rate</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('contact_us') }}" class="mt-6 inline-flex items-center gap-2 text-blue-600 font-semibold group-hover:gap-3 transition-all">
                            Learn More
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-white border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4 shadow-sm">
                    Why Choose Us
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Your Trusted Outsourcing
                    <span class="block mt-2 bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent">
                        Partner
                    </span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="scroll-reveal-delay-1 bg-white border-2 border-slate-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Cost Effective</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Save up to 60% on operational costs while maintaining quality standards
                    </p>
                </div>

                <div class="scroll-reveal-delay-2 bg-white border-2 border-slate-200 rounded-2xl p-6 hover:border-orange-400 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Expert Team</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Access to 500+ certified professionals across multiple domains
                    </p>
                </div>

                <div class="scroll-reveal-delay-3 bg-white border-2 border-slate-200 rounded-2xl p-6 hover:border-blue-400 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Fast Turnaround</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Quick project kickoff with delivery times 2x faster than industry average
                    </p>
                </div>

                <div class="scroll-reveal-delay-1 bg-white border-2 border-slate-200 rounded-2xl p-6 hover:border-orange-400 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Secure & Compliant</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        ISO certified with bank-level security and full regulatory compliance
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4">
                    Our Process
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Simple & Streamlined
                    <span class="block mt-2 bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent">
                        Onboarding Process
                    </span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="scroll-reveal-delay-1 text-center relative">
                    <div class="relative inline-block mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-xl mx-auto">
                            <span class="text-3xl font-bold text-white">1</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Consultation</h3>
                    <p class="text-slate-600">
                        Discuss your needs and goals with our expert consultants
                    </p>
                    <!-- Connector -->
                    <div class="hidden md:block absolute top-10 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-blue-300 to-orange-300"></div>
                </div>

                <div class="scroll-reveal-delay-2 text-center relative">
                    <div class="relative inline-block mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-xl mx-auto">
                            <span class="text-3xl font-bold text-white">2</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Planning</h3>
                    <p class="text-slate-600">
                        Create a custom strategy tailored to your requirements
                    </p>
                    <div class="hidden md:block absolute top-10 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-orange-300 to-blue-300"></div>
                </div>

                <div class="scroll-reveal-delay-3 text-center relative">
                    <div class="relative inline-block mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-xl mx-auto">
                            <span class="text-3xl font-bold text-white">3</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Implementation</h3>
                    <p class="text-slate-600">
                        Deploy solutions with seamless integration and minimal disruption
                    </p>
                    <div class="hidden md:block absolute top-10 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-blue-300 to-orange-300"></div>
                </div>

                <div class="scroll-reveal-delay-1 text-center relative">
                    <div class="relative inline-block mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-xl mx-auto">
                            <span class="text-3xl font-bold text-white">4</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Optimization</h3>
                    <p class="text-slate-600">
                        Continuous monitoring and improvement for maximum efficiency
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <!-- Floating shapes -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-white/5 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl animate-float-delayed"></div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-semibold mb-6">
                    <div class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></div>
                    Start Your Outsourcing Journey
                </div>

                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Let's discuss how our outsourcing solutions can help you reduce costs, increase efficiency, and focus on what matters most - growing your business.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <a href="{{ route('contact_us') }}" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-gray-50 text-blue-600 px-8 py-4 rounded-xl font-semibold shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-0.5 min-w-[200px]">
                        Get Started Today
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="tel:+1234567890" class="inline-flex items-center justify-center gap-2 bg-blue-700/50 hover:bg-blue-700 text-white px-8 py-4 rounded-xl font-semibold border-2 border-white/20 hover:border-white/40 backdrop-blur-sm transition-all duration-300 min-w-[200px]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Call Us Now
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap items-center justify-center gap-8 pt-8 border-t border-white/20">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">10K+</div>
                        <div class="text-sm text-blue-200">Projects Completed</div>
                    </div>
                    <div class="h-12 w-px bg-white/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">500+</div>
                        <div class="text-sm text-blue-200">Expert Team</div>
                    </div>
                    <div class="h-12 w-px bg-white/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">98%</div>
                        <div class="text-sm text-blue-200">Client Satisfaction</div>
                    </div>
                    <div class="h-12 w-px bg-white/20"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">24/7</div>
                        <div class="text-sm text-blue-200">Support Available</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Scroll reveal animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal, .scroll-reveal-delay-1, .scroll-reveal-delay-2, .scroll-reveal-delay-3, .fade-up, .fade-up-delay-1, .fade-up-delay-2, .fade-up-delay-3').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Counter animation
    const animateCounter = (element, target, duration = 2000) => {
        let current = 0;
        const increment = target / (duration / 16);
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.dataset.suffix || '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + (element.dataset.suffix || '');
            }
        }, 16);
    };

    // Trigger counter animation when visible
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                entry.target.classList.add('counted');
                const target = parseInt(entry.target.dataset.target);
                animateCounter(entry.target, target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-target]').forEach(el => {
        counterObserver.observe(el);
    });
</script>

<style>
    /* Animation keyframes */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(5deg); }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 8s ease-in-out infinite;
    }

    /* Progress bar animations */
    @keyframes progress-87 {
        from { width: 0%; }
        to { width: 87%; }
    }

    @keyframes progress-92 {
        from { width: 0%; }
        to { width: 92%; }
    }

    @keyframes progress-78 {
        from { width: 0%; }
        to { width: 78%; }
    }

    .animate-progress-87 {
        animation: progress-87 1.5s ease-out forwards;
    }

    .animate-progress-92 {
        animation: progress-92 1.5s ease-out forwards;
    }

    .animate-progress-78 {
        animation: progress-78 1.5s ease-out forwards;
    }

    /* Scroll reveal animations */
    .scroll-reveal,
    .scroll-reveal-delay-1,
    .scroll-reveal-delay-2,
    .scroll-reveal-delay-3,
    .fade-up,
    .fade-up-delay-1,
    .fade-up-delay-2,
    .fade-up-delay-3 {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .scroll-reveal-delay-1,
    .fade-up-delay-1 {
        transition-delay: 0.1s;
    }

    .scroll-reveal-delay-2,
    .fade-up-delay-2 {
        transition-delay: 0.2s;
    }

    .scroll-reveal-delay-3,
    .fade-up-delay-3 {
        transition-delay: 0.3s;
    }

    .scroll-reveal.is-visible,
    .scroll-reveal-delay-1.is-visible,
    .scroll-reveal-delay-2.is-visible,
    .scroll-reveal-delay-3.is-visible,
    .fade-up.is-visible,
    .fade-up-delay-1.is-visible,
    .fade-up-delay-2.is-visible,
    .fade-up-delay-3.is-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush
