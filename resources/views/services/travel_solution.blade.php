<!-- resources/views/travel-solutions.blade.php -->
@extends('layouts.base')

@section('title', 'Travel Solutions - Smart Travel Management & Booking Systems')
@section('description', 'Transform your travel experience with our innovative digital solutions. From smart booking to expense tracking and analytics - streamline every aspect of your journey.')
@section('keywords', 'travel solutions, booking system, itinerary management, travel expense tracking, travel analytics, digital travel platform')

@section('content')
    <!-- Hero Section with Parallax -->
    <section class="relative bg-gradient-to-br from-cyan-600 via-blue-700 to-indigo-800 py-20 lg:py-32 overflow-hidden">
        <!-- Animated world map background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M20,30 Q30,20 40,30 T60,30\" stroke=\"white\" fill=\"none\" stroke-width=\"0.5\"/%3E%3Ccircle cx=\"50\" cy=\"50\" r=\"2\" fill=\"white\"/%3E%3C/svg%3E'); background-size: 100px 100px;"></div>
        </div>

        <!-- Floating travel icons -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-16 h-16 opacity-20">
                <svg class="w-full h-full text-white animate-float" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                </svg>
            </div>
            <div class="absolute top-40 right-20 w-20 h-20 opacity-20">
                <svg class="w-full h-full text-white animate-float-delayed" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="absolute bottom-32 left-1/4 w-14 h-14 opacity-20">
                <svg class="w-full h-full text-white animate-float-slow" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                </svg>
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <!-- Badge -->
                    <div class="fade-up inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-white text-sm font-medium mb-6">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                        Next-Gen Travel Technology
                    </div>

                    <h1 class="fade-up-delay-1 text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Your Journey,
                        <span class="block mt-2 bg-gradient-to-r from-cyan-300 via-blue-300 to-purple-300 bg-clip-text text-transparent">
                            Simplified & Optimized
                        </span>
                    </h1>

                    <p class="fade-up-delay-2 text-xl text-cyan-100 mb-8 leading-relaxed">
                        Intelligent travel solutions that transform how you plan, book, and manage every journey
                    </p>

                    <!-- Key Stats -->
                    <div class="fade-up-delay-3 grid grid-cols-3 gap-4 mb-8 p-5 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white mb-1">98%</div>
                            <div class="text-xs text-cyan-200">Booking Success</div>
                        </div>
                        <div class="text-center border-x border-white/20">
                            <div class="text-3xl font-bold text-white mb-1">24/7</div>
                            <div class="text-xs text-cyan-200">Support Available</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white mb-1">45%</div>
                            <div class="text-xs text-cyan-200">Cost Savings</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="fade-up-delay-3 flex flex-col sm:flex-row gap-4">
                        <a href="#solutions" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-cyan-50 text-blue-600 px-8 py-4 rounded-xl font-semibold transition-all duration-300 hover:shadow-2xl hover:shadow-white/20 hover:-translate-y-0.5">
                            Explore Solutions
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#demo" class="inline-flex items-center justify-center gap-2 bg-transparent hover:bg-white/10 text-white px-8 py-4 rounded-xl font-semibold border-2 border-white/30 hover:border-white/60 transition-all duration-300 backdrop-blur-sm">
                            Watch Demo
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right - Animated Dashboard/Phone Mockup -->
                <div class="fade-up-delay-2 relative hidden lg:block">
                    <!-- Phone mockup -->
                    <div class="relative mx-auto w-80 h-[600px]">
                        <!-- Phone frame -->
                        <div class="absolute inset-0 bg-slate-900 rounded-[3rem] shadow-2xl border-8 border-slate-800 overflow-hidden">
                            <!-- Phone notch -->
                            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-40 h-7 bg-slate-900 rounded-b-3xl z-10"></div>
                            
                            <!-- Screen content -->
                            <div class="h-full bg-gradient-to-br from-slate-50 to-slate-100 p-6 pt-12 overflow-hidden">
                                <!-- Header -->
                                <div class="mb-6">
                                    <h3 class="text-slate-900 font-bold text-lg mb-1">Upcoming Trip</h3>
                                    <p class="text-slate-500 text-sm">Tokyo, Japan</p>
                                </div>

                                <!-- Trip Card -->
                                <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-5 text-white mb-4 shadow-xl animate-float-slow">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-sm">Flight ANA 202</p>
                                                <p class="text-xs text-white/80">Dec 15, 2024</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-xs text-white/80">Gate</p>
                                            <p class="text-lg font-bold">A12</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between text-sm">
                                        <div>
                                            <p class="text-white/80 text-xs">NYC</p>
                                            <p class="font-bold text-lg">14:30</p>
                                        </div>
                                        <div class="flex-1 mx-3">
                                            <div class="h-0.5 bg-white/40 relative">
                                                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-white rounded-full flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <p class="text-center text-xs text-white/80 mt-1">13h 45m</p>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-white/80 text-xs">NRT</p>
                                            <p class="font-bold text-lg">18:15</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Actions -->
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="bg-white rounded-xl p-3 text-center shadow-md">
                                        <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                            </svg>
                                        </div>
                                        <p class="text-xs font-medium text-slate-700">Hotel</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-3 text-center shadow-md">
                                        <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                            </svg>
                                        </div>
                                        <p class="text-xs font-medium text-slate-700">Itinerary</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-3 text-center shadow-md">
                                        <div class="w-10 h-10 bg-purple-50 rounded-lg flex items-center justify-center mx-auto mb-2">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                            </svg>
                                        </div>
                                        <p class="text-xs font-medium text-slate-700">Expenses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating notification cards -->
                    <div class="absolute -top-4 -left-8 bg-white rounded-xl shadow-2xl p-4 animate-float max-w-xs">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">Booking Confirmed</p>
                                <p class="text-xs text-slate-500">Saved $245 on this trip</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="py-16 bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center scroll-reveal">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-1">Instant Booking</h4>
                    <p class="text-sm text-slate-600">Real-time availability</p>
                </div>
                <div class="text-center scroll-reveal-delay-1">
                    <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-1">Secure Payments</h4>
                    <p class="text-sm text-slate-600">Bank-level security</p>
                </div>
                <div class="text-center scroll-reveal-delay-2">
                    <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-1">Smart Analytics</h4>
                    <p class="text-sm text-slate-600">Data-driven insights</p>
                </div>
                <div class="text-center scroll-reveal-delay-3">
                    <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-1">24/7 Support</h4>
                    <p class="text-sm text-slate-600">Always here to help</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section id="solutions" class="py-20 lg:py-28 bg-gradient-to-b from-white to-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    Complete Solutions
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                    Everything You Need for
                    <span class="block mt-2 bg-gradient-to-r from-cyan-600 via-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Seamless Travel
                    </span>
                </h2>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                    From booking to analytics, our comprehensive platform handles every aspect of modern travel management
                </p>
            </div>

            <!-- Solutions Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Solution 1 - Smart Booking -->
                <div class="scroll-reveal-delay-1 group bg-white rounded-3xl p-8 lg:p-10 border-2 border-slate-200 hover:border-blue-400 hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <!-- Icon & Badge -->
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-full">CORE</span>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors">
                            Smart Booking System
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Simplify reservations with our intelligent booking platform featuring real-time availability, secure payment processing, and an intuitive interface that delights users.
                        </p>

                        <!-- Features -->
                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Real-Time Availability</p>
                                    <p class="text-sm text-slate-600">Instant updates on flights, hotels, and activities</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Multi-Provider Integration</p>
                                    <p class="text-sm text-slate-600">Access thousands of travel options in one place</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">One-Click Booking</p>
                                    <p class="text-sm text-slate-600">Streamlined checkout process with saved preferences</p>
                                </div>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-blue-600">98.7%</div>
                                <div class="text-xs text-slate-600">Success Rate</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600">&lt;3s</div>
                                <div class="text-xs text-slate-600">Booking Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solution 2 - Itinerary Management -->
                <div class="scroll-reveal-delay-2 group bg-white rounded-3xl p-8 lg:p-10 border-2 border-slate-200 hover:border-green-400 hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg shadow-green-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">POPULAR</span>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-green-600 transition-colors">
                            Itinerary Management
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Manage every detail of your journey with comprehensive planning tools, real-time updates, and seamless coordination from departure to arrival.
                        </p>

                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Personalized Plans</p>
                                    <p class="text-sm text-slate-600">AI-powered suggestions based on preferences</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Live Updates</p>
                                    <p class="text-sm text-slate-600">Flight delays, gate changes, and alerts</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Team Collaboration</p>
                                    <p class="text-sm text-slate-600">Share itineraries with colleagues and family</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-green-600">100%</div>
                                <div class="text-xs text-slate-600">Sync Accuracy</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-green-600">Real-time</div>
                                <div class="text-xs text-slate-600">Updates</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solution 3 - Expense Tracking -->
                <div class="scroll-reveal-delay-3 group bg-white rounded-3xl p-8 lg:p-10 border-2 border-slate-200 hover:border-purple-400 hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-bold rounded-full">BUSINESS</span>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-purple-600 transition-colors">
                            Expense Tracking
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Automated expense capture and reporting that ensures policy compliance, streamlines reimbursements, and optimizes travel budgets effectively.
                        </p>

                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Auto-Capture Receipts</p>
                                    <p class="text-sm text-slate-600">Scan and categorize expenses instantly</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Policy Compliance</p>
                                    <p class="text-sm text-slate-600">Automatic flagging of out-of-policy expenses</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Detailed Reporting</p>
                                    <p class="text-sm text-slate-600">Comprehensive financial insights and analytics</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-purple-600">45%</div>
                                <div class="text-xs text-slate-600">Cost Reduction</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-purple-600">5min</div>
                                <div class="text-xs text-slate-600">Report Time</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solution 4 - Travel Analytics -->
                <div class="scroll-reveal-delay-1 group bg-white rounded-3xl p-8 lg:p-10 border-2 border-slate-200 hover:border-orange-400 hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">INSIGHTS</span>
                        </div>

                        <h3 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4 group-hover:text-orange-600 transition-colors">
                            Travel Analytics
                        </h3>
                        <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                            Transform data into actionable insights with advanced analytics that reveal customer behavior, market trends, and opportunities for growth.
                        </p>

                        <div class="space-y-3 mb-6">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Behavior Tracking</p>
                                    <p class="text-sm text-slate-600">Understand traveler preferences and patterns</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">Predictive Insights</p>
                                    <p class="text-sm text-slate-600">Forecast demand and optimize pricing</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-900">ROI Measurement</p>
                                    <p class="text-sm text-slate-600">Track performance and revenue impact</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-200">
                            <div>
                                <div class="text-2xl font-bold text-orange-600">3.2x</div>
                                <div class="text-xs text-slate-600">Revenue Growth</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-orange-600">92%</div>
                                <div class="text-xs text-slate-600">Accuracy Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    How It Works
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Get Started in
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">3 Simple Steps</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="scroll-reveal-delay-1 text-center">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto shadow-xl">
                            <span class="text-3xl font-bold text-white">1</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Sign Up & Configure</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Create your account and customize your travel preferences, policies, and team settings in minutes
                    </p>
                </div>

                <div class="scroll-reveal-delay-2 text-center">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto shadow-xl">
                            <span class="text-3xl font-bold text-white">2</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Search & Book</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Find the best travel options with our smart search, compare prices, and book instantly with secure payments
                    </p>
                </div>

                <div class="scroll-reveal-delay-3 text-center">
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto shadow-xl">
                            <span class="text-3xl font-bold text-white">3</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Track & Optimize</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Monitor your travel in real-time, manage expenses automatically, and leverage analytics to optimize future trips
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left - Benefits List -->
                <div class="scroll-reveal">
                    <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-6">
                        Why Choose Us
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">
                        Travel Smarter,
                        <span class="block mt-2 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            Save More
                        </span>
                    </h2>
                    <p class="text-lg text-slate-600 mb-8">
                        Our platform combines cutting-edge technology with user-friendly design to deliver exceptional value
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-lg mb-2">Enterprise-Grade Security</h4>
                                <p class="text-slate-600">Bank-level encryption, PCI compliance, and secure data handling protect your sensitive travel information 24/7</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-lg mb-2">Real-Time Everything</h4>
                                <p class="text-slate-600">Live flight updates, instant booking confirmations, and real-time expense tracking keep you always informed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right - Stats Cards -->
                <div class="scroll-reveal-delay-2">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-300">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                                </svg>
                            </div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">50K+</div>
                            <div class="text-sm text-slate-600">Active Users</div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-300">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">185</div>
                            <div class="text-sm text-slate-600">Countries</div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-300">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                                </svg>
                            </div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">2.5M</div>
                            <div class="text-sm text-slate-600">Trips Booked</div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-xl border border-slate-200 hover:shadow-2xl transition-all duration-300">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="text-3xl font-bold text-slate-900 mb-1">4.9/5</div>
                            <div class="text-sm text-slate-600">User Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    Testimonials
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Loved by Travel Managers
                    <span class="block mt-2 text-2xl md:text-3xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Worldwide
                    </span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="scroll-reveal-delay-1 bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 italic leading-relaxed">
                        "This platform reduced our travel costs by 40% and saved our team countless hours. The analytics dashboard is incredibly insightful!"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                            SM
                        </div>
                        <div>
                            <div class="font-semibold text-slate-900">Sarah Mitchell</div>
                            <div class="text-sm text-slate-600">Travel Manager, TechCorp</div>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal-delay-2 bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 italic leading-relaxed">
                        "The itinerary management is a game-changer. Real-time updates keep everyone informed and our trips run so much smoother now."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold">
                            JC
                        </div>
                        <div>
                            <div class="font-semibold text-slate-900">James Chen</div>
                            <div class="text-sm text-slate-600">Operations Director, Global Inc</div>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal-delay-3 bg-slate-50 rounded-2xl p-8 border border-slate-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center gap-1 mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 italic leading-relaxed">
                        "Expense tracking has never been easier. Our finance team loves the automated reports and policy compliance features."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold">
                            ER
                        </div>
                        <div>
                            <div class="font-semibold text-slate-900">Emily Rodriguez</div>
                            <div class="text-sm text-slate-600">CFO, StartupHub</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-blue-600 via-cyan-600 to-teal-600 relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 animate-pulse-slow" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>

        <!-- Floating elements -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl animate-float"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl animate-float-delayed"></div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                Transform Your Travel Experience Today
            </h2>
            <p class="text-xl text-cyan-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Join thousands of businesses optimizing their travel management with our innovative platform
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="{{ route('contact_us') }}" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-cyan-50 text-blue-600 px-10 py-5 rounded-xl font-bold text-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    Get Started Free
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#demo" class="inline-flex items-center justify-center gap-2 bg-transparent hover:bg-white/10 text-white px-10 py-5 rounded-xl font-bold text-lg border-2 border-white/50 hover:border-white transition-all duration-300 backdrop-blur-sm">
                    Schedule Demo
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                    </svg>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-white/90">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">No credit card required</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">14-day free trial</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Cancel anytime</span>
                </div>
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

/* Hero Fade Up Animations */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-up {
  animation: fadeUp 0.8s ease-out forwards;
}

.fade-up-delay-1 {
  opacity: 0;
  animation: fadeUp 0.8s ease-out 0.1s forwards;
}

.fade-up-delay-2 {
  opacity: 0;
  animation: fadeUp 0.8s ease-out 0.2s forwards;
}

.fade-up-delay-3 {
  opacity: 0;
  animation: fadeUp 0.8s ease-out 0.3s forwards;
}

/* Scroll-triggered animations */
@keyframes scrollFadeUp {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.scroll-reveal {
  animation: scrollFadeUp 0.8s ease-out both;
  animation-timeline: view();
  animation-range: entry 0% cover 25%;
}

.scroll-reveal-delay-1 {
  animation: scrollFadeUp 0.8s ease-out both;
  animation-timeline: view();
  animation-range: entry 0% cover 25%;
  animation-delay: 0.1s;
}

.scroll-reveal-delay-2 {
  animation: scrollFadeUp 0.8s ease-out both;
  animation-timeline: view();
  animation-range: entry 0% cover 25%;
  animation-delay: 0.2s;
}

.scroll-reveal-delay-3 {
  animation: scrollFadeUp 0.8s ease-out both;
  animation-timeline: view();
  animation-range: entry 0% cover 25%;
  animation-delay: 0.3s;
}

/* Floating animations */
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

@keyframes float-delayed {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-30px);
  }
}

@keyframes float-slow {
  0%, 100% {
    transform: translateY(0px) translateX(0px);
  }
  50% {
    transform: translateY(-15px) translateX(5px);
  }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
  animation: float-delayed 8s ease-in-out infinite;
}

.animate-float-slow {
  animation: float-slow 10s ease-in-out infinite;
}

/* Pulse slow animation */
@keyframes pulse-slow {
  0%, 100% {
    opacity: 0.2;
  }
  50% {
    opacity: 0.4;
  }
}

.animate-pulse-slow {
  animation: pulse-slow 4s ease-in-out infinite;
}

/* Reduced motion support */
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
@endsection