@extends('layouts.base')

@section('title', 'Performance Marketing Services - Data-Driven Campaigns for Maximum ROI')
@section('description', 'Transform your marketing with data-driven campaigns that deliver measurable results. Expert PPC, paid social, and conversion optimization for maximum ROI.')
@section('keywords', 'performance marketing, PPC, paid advertising, ROI optimization, digital marketing, conversion optimization, remarketing, retargeting')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900">
    <!-- Animated Data Grid Background -->
    <div class="absolute inset-0">
        <div class="data-grid absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(59, 130, 246, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(59, 130, 246, 0.3) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <!-- Floating Data Points -->
        <div class="data-point absolute w-2 h-2 bg-blue-400 rounded-full top-1/4 left-1/4 animate-pulse"></div>
        <div class="data-point absolute w-3 h-3 bg-orange-500 rounded-full top-1/3 right-1/3 animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="data-point absolute w-2 h-2 bg-blue-300 rounded-full bottom-1/4 left-1/3 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="data-point absolute w-4 h-4 bg-orange-400 rounded-full top-1/2 right-1/4 animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="data-point absolute w-2 h-2 bg-blue-500 rounded-full bottom-1/3 right-1/2 animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Gradient Orbs -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gradient-to-br from-blue-600/20 to-transparent rounded-full blur-3xl hero-orb"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-gradient-to-tr from-orange-500/20 to-transparent rounded-full blur-3xl hero-orb-2"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <div class="hero-badge inline-flex items-center gap-3 px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-500 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-orange-500"></span>
                    </span>
                    <span class="text-sm font-medium text-white">Performance Marketing</span>
                </div>
                
                <h1 class="hero-title text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                    <span class="text-white">Data-Driven</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-300 to-orange-400">Campaigns</span><br>
                    <span class="text-white">for Maximum</span>
                    <span class="text-orange-500"> ROI</span>
                </h1>
                
                <p class="hero-desc text-xl text-blue-100/80 max-w-lg leading-relaxed">
                    Our data-driven approach ensures your marketing campaigns deliver tangible outcomes. We turn clicks into customers and budgets into growth.
                </p>
                
                <div class="hero-cta flex flex-wrap gap-4">
                    <a href="#contact" class="group relative px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold rounded-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:shadow-orange-500/30 hover:scale-105">
                        <span class="relative z-10 flex items-center gap-2">
                            Start Scaling Now
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </a>
                    <a href="#services" class="group px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-xl hover:bg-white/10 transition-all duration-300 backdrop-blur-sm flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        View Results
                    </a>
                </div>
                
                <!-- Live Stats Ticker -->
                <div class="hero-stats grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div class="stat-item text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white">
                            <span class="counter" data-target="340">0</span>%
                        </div>
                        <div class="text-sm text-blue-200/70">Avg. ROI Increase</div>
                    </div>
                    <div class="stat-item text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white">
                            $<span class="counter" data-target="50">0</span>M+
                        </div>
                        <div class="text-sm text-blue-200/70">Ad Spend Managed</div>
                    </div>
                    <div class="stat-item text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white">
                            <span class="counter" data-target="200">0</span>+
                        </div>
                        <div class="text-sm text-blue-200/70">Campaigns Launched</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Visual - Dashboard Mockup -->
            <div class="hero-visual relative">
                <div class="relative">
                    <!-- Main Dashboard Card -->
                    <div class="dashboard-main bg-white/10 backdrop-blur-xl rounded-3xl p-6 border border-white/20 shadow-2xl">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-white font-semibold">Campaign Dashboard</div>
                                    <div class="text-blue-200/60 text-sm">Real-time Analytics</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></span>
                                <span class="text-green-400 text-sm">Live</span>
                            </div>
                        </div>
                        
                        <!-- Chart Area -->
                        <div class="bg-white/5 rounded-2xl p-4 mb-4">
                            <div class="flex items-end justify-between h-32 gap-2">
                                <div class="chart-bar w-full bg-gradient-to-t from-blue-500/50 to-blue-400/80 rounded-t-lg" style="height: 40%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-blue-500/50 to-blue-400/80 rounded-t-lg" style="height: 60%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-blue-500/50 to-blue-400/80 rounded-t-lg" style="height: 45%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-blue-500/50 to-blue-400/80 rounded-t-lg" style="height: 80%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-orange-500/50 to-orange-400/80 rounded-t-lg" style="height: 65%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-orange-500/50 to-orange-400/80 rounded-t-lg" style="height: 90%;"></div>
                                <div class="chart-bar w-full bg-gradient-to-t from-orange-500/50 to-orange-400/80 rounded-t-lg" style="height: 75%;"></div>
                            </div>
                        </div>
                        
                        <!-- Metrics Row -->
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white/5 rounded-xl p-3 text-center">
                                <div class="text-orange-400 text-lg font-bold">+127%</div>
                                <div class="text-blue-200/60 text-xs">Conversions</div>
                            </div>
                            <div class="bg-white/5 rounded-xl p-3 text-center">
                                <div class="text-green-400 text-lg font-bold">-43%</div>
                                <div class="text-blue-200/60 text-xs">Cost/Lead</div>
                            </div>
                            <div class="bg-white/5 rounded-xl p-3 text-center">
                                <div class="text-blue-400 text-lg font-bold">4.2x</div>
                                <div class="text-blue-200/60 text-xs">ROAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Notification Card -->
                    <div class="floating-notif absolute -top-6 -right-6 bg-white rounded-2xl p-4 shadow-2xl max-w-[200px]">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">ROI Increased</div>
                                <div class="text-xs text-gray-500">+340% this month</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Channel Card -->
                    <div class="floating-channel absolute -bottom-6 -left-6 bg-white rounded-2xl p-4 shadow-2xl">
                        <div class="flex items-center gap-4">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center border-2 border-white">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                                <div class="w-8 h-8 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full flex items-center justify-center border-2 border-white">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                                <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center border-2 border-white">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                </div>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Multi-Channel</div>
                                <div class="text-xs text-gray-500">12 active campaigns</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
        <span class="text-sm text-blue-200/50">Discover More</span>
        <div class="w-6 h-10 border-2 border-blue-200/30 rounded-full flex justify-center pt-2">
            <div class="w-1.5 h-3 bg-orange-500 rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Trusted By Section -->
<section class="py-16 bg-white border-b border-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <p class="text-gray-500 text-sm uppercase tracking-wider">Trusted by Industry Leaders</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-12 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-500">
            <div class="text-2xl font-bold text-gray-400">TechCorp</div>
            <div class="text-2xl font-bold text-gray-400">Innovate</div>
            <div class="text-2xl font-bold text-gray-400">GrowthLab</div>
            <div class="text-2xl font-bold text-gray-400">ScaleUp</div>
            <div class="text-2xl font-bold text-gray-400">DataDriven</div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-32 bg-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-blue-50/50 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-orange-100/30 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="section-label inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <span class="text-sm font-medium text-blue-700">Our Services</span>
            </div>
            <h2 class="section-title text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Comprehensive Performance <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-orange-500">Marketing Solutions</span>
            </h2>
            <p class="section-desc text-xl text-gray-600">
                End-to-end services designed to maximize your digital advertising investment and drive measurable growth.
            </p>
        </div>
        
        <!-- Services Grid - Bento Style -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Campaign Management - Large Card -->
            <div class="service-card lg:col-span-2 group relative bg-gradient-to-br from-blue-600 to-blue-700 rounded-3xl p-8 overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 border border-white/20 rounded-full"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Campaign Management</h3>
                    <p class="text-blue-100 mb-6 max-w-md">We design, execute, and optimize campaigns to drive results and maximize ROI through continuous strategy refinement and A/B testing.</p>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">Google Ads</span>
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">Meta Ads</span>
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">LinkedIn Ads</span>
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">TikTok Ads</span>
                    </div>
                </div>
            </div>
            
            <!-- Real-time Data Analysis -->
            <div class="service-card group relative bg-white rounded-3xl p-8 border border-gray-100 shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-500/10 to-transparent rounded-bl-full"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Conversion Optimization</h3>
                    <p class="text-gray-600">A/B testing, landing page optimization, and funnel analysis to maximize every click.</p>
                </div>
            </div>
            
            <!-- Audience Targeting -->
            <div class="service-card group relative bg-gradient-to-br from-orange-500 to-orange-600 rounded-3xl p-8 overflow-hidden">
                <div class="absolute top-0 right-0 w-48 h-48 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Audience Targeting</h3>
                    <p class="text-orange-100">Precision targeting using demographics, interests, behaviors, and custom audiences for maximum relevance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-32 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="section-label inline-flex items-center gap-2 px-4 py-2 bg-orange-50 rounded-full mb-6">
                <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                </svg>
                <span class="text-sm font-medium text-orange-700">Proven Results</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Numbers That <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-orange-500">Speak for Themselves</span>
            </h2>
        </div>
        
        <!-- Results Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Result Card 1 -->
            <div class="result-card group bg-white rounded-3xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-5xl font-bold text-gray-900 mb-2">
                    <span class="result-counter" data-target="340">0</span>%
                </div>
                <div class="text-gray-600 font-medium">Average ROI Increase</div>
                <div class="mt-4 text-sm text-gray-400">Across all campaigns</div>
            </div>
            
            <!-- Result Card 2 -->
            <div class="result-card group bg-white rounded-3xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-orange-100 to-orange-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <div class="text-5xl font-bold text-gray-900 mb-2">
                    <span class="result-counter" data-target="65">0</span>%
                </div>
                <div class="text-gray-600 font-medium">Lower Cost Per Click</div>
                <div class="mt-4 text-sm text-gray-400">Optimized bidding</div>
            </div>
            
            <!-- Result Card 3 -->
            <div class="result-card group bg-white rounded-3xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-green-100 to-green-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-5xl font-bold text-gray-900 mb-2">
                    <span class="result-counter" data-target="4">0</span>.2x
                </div>
                <div class="text-gray-600 font-medium">Average ROAS</div>
                <div class="mt-4 text-sm text-gray-400">Return on ad spend</div>
            </div>
            
            <!-- Result Card 4 -->
            <div class="result-card group bg-white rounded-3xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-5xl font-bold text-gray-900 mb-2">
                    <span class="result-counter" data-target="2">0</span>M+
                </div>
                <div class="text-gray-600 font-medium">Leads Generated</div>
                <div class="mt-4 text-sm text-gray-400">Qualified prospects</div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-32 bg-white relative overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-blue-50/30 to-transparent"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="section-label inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <span class="text-sm font-medium text-blue-700">Data-Driven Strategies</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our Proven <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-orange-500">Approach</span>
            </h2>
            <p class="text-xl text-gray-600">
                A systematic methodology that turns data into actionable insights and measurable results.
            </p>
        </div>
        
        <!-- Process Timeline -->
        <div class="max-w-5xl mx-auto">
            <div class="relative">
                <!-- Connection Line -->
                <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-orange-500 to-blue-500 transform -translate-y-1/2 rounded-full"></div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                    <!-- Step 1 -->
                    <div class="process-step group">
                        <div class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200">
                            <!-- Step Number -->
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                                1
                            </div>
                            <div class="pt-4">
                                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:bg-blue-600 transition-colors duration-300">
                                    <svg class="w-7 h-7 text-blue-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Analysis</h3>
                                <p class="text-gray-600 text-center text-sm">We assess data to identify trends, opportunities, and enhance campaign effectiveness.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="process-step group">
                        <div class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-orange-200">
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-orange-500 to-orange-400 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-orange-500/30 group-hover:scale-110 transition-transform duration-300">
                                2
                            </div>
                            <div class="pt-4">
                                <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:bg-orange-500 transition-colors duration-300">
                                    <svg class="w-7 h-7 text-orange-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Strategy</h3>
                                <p class="text-gray-600 text-center text-sm">We develop data-driven strategies to achieve your goals and accelerate growth.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="process-step group">
                        <div class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200">
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-300">
                                3
                            </div>
                            <div class="pt-4">
                                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:bg-blue-600 transition-colors duration-300">
                                    <svg class="w-7 h-7 text-blue-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Implementation</h3>
                                <p class="text-gray-600 text-center text-sm">We execute strategies efficiently across all channels to deliver impactful results.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="process-step group">
                        <div class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-orange-200">
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-orange-600 to-orange-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-orange-500/30 group-hover:scale-110 transition-transform duration-300">
                                4
                            </div>
                            <div class="pt-4">
                                <div class="w-14 h-14 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:bg-orange-500 transition-colors duration-300">
                                    <svg class="w-7 h-7 text-orange-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Reporting</h3>
                                <p class="text-gray-600 text-center text-sm">Detailed reports provide insights into progress and guide data-driven decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms Section -->
<section class="py-32 bg-gray-900 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0); background-size: 32px 32px;"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="section-label inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-6">
                <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                </svg>
                <span class="text-sm font-medium text-white/80">Platforms We Master</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Multi-Channel <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-orange-400">Expertise</span>
            </h2>
            <p class="text-xl text-gray-400">
                We optimize campaigns across all major advertising platforms to maximize your reach and results.
            </p>
        </div>
        
        <!-- Platforms Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <!-- Google Ads -->
            <div class="platform-card group bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-white/30 hover:bg-white/10 transition-all duration-300 text-center">
                <div class="w-16 h-16 mx-auto bg-white/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                    </svg>
                </div>
                <h4 class="text-white font-semibold">TikTok Ads</h4>
                <p class="text-gray-400 text-sm mt-1">Gen Z & Millennials</p>
            </div>
            
            <!-- YouTube Ads -->
            <div class="platform-card group bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-white/30 hover:bg-white/10 transition-all duration-300 text-center">
                <div class="w-16 h-16 mx-auto bg-white/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </div>
                <h4 class="text-white font-semibold">YouTube Ads</h4>
                <p class="text-gray-400 text-sm mt-1">Video Marketing</p>
            </div>
            
            <!-- Twitter/X Ads -->
            <div class="platform-card group bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-white/30 hover:bg-white/10 transition-all duration-300 text-center">
                <div class="w-16 h-16 mx-auto bg-white/10 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </div>
                <h4 class="text-white font-semibold">X (Twitter)</h4>
                <p class="text-gray-400 text-sm mt-1">Real-time Engagement</p>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="py-32 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <div class="section-label inline-flex items-center gap-2 px-4 py-2 bg-orange-50 rounded-full mb-6">
                <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                <span class="text-sm font-medium text-orange-700">Case Studies</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Success Stories <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-orange-500">That Inspire</span>
            </h2>
        </div>
        
        <!-- Case Studies Grid -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Case Study 1 -->
            <div class="case-study group relative bg-gradient-to-br from-blue-600 to-blue-800 rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="relative z-10 p-10">
                    <div class="flex items-center justify-between mb-8">
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">E-Commerce</span>
                        <span class="text-blue-200 text-sm">Google Ads + Meta</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Fashion Retailer Scales 5x Revenue</h3>
                    <p class="text-blue-100 mb-8">Through strategic audience segmentation and dynamic product ads, we transformed their digital presence.</p>
                    
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">487%</div>
                            <div class="text-blue-200 text-sm">ROI Increase</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">5.2x</div>
                            <div class="text-blue-200 text-sm">ROAS</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">-62%</div>
                            <div class="text-blue-200 text-sm">CPA</div>
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center gap-2 text-white font-semibold group-hover:gap-4 transition-all duration-300">
                        Read Case Study
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Case Study 2 -->
            <div class="case-study group relative bg-gradient-to-br from-orange-500 to-orange-700 rounded-3xl overflow-hidden">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="relative z-10 p-10">
                    <div class="flex items-center justify-between mb-8">
                        <span class="px-4 py-2 bg-white/20 text-white text-sm rounded-full backdrop-blur-sm">SaaS</span>
                        <span class="text-orange-200 text-sm">LinkedIn + Google</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">B2B Software Triples Lead Volume</h3>
                    <p class="text-orange-100 mb-8">Precision B2B targeting and compelling ad creative drove exceptional lead quality and volume.</p>
                    
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">312%</div>
                            <div class="text-orange-200 text-sm">More Leads</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">-48%</div>
                            <div class="text-orange-200 text-sm">Cost/Lead</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-white">67%</div>
                            <div class="text-orange-200 text-sm">SQL Rate</div>
                        </div>
                    </div>
                    
                    <a href="#" class="inline-flex items-center gap-2 text-white font-semibold group-hover:gap-4 transition-all duration-300">
                        Read Case Study
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-32 bg-gray-50 relative overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="testimonial-card relative bg-white rounded-3xl p-12 shadow-2xl">
                <!-- Quote Icon -->
                <div class="absolute -top-6 left-12">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-orange-500 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>
                </div>
                
                <div class="pt-4">
                    <!-- Stars -->
                    <div class="flex items-center gap-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-6 h-6 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                    
                    <p class="text-2xl text-gray-700 leading-relaxed mb-8">
                        "Working with this team transformed our digital marketing completely. We saw a <span class="text-blue-600 font-semibold">340% increase in ROI</span> within the first quarter. Their data-driven approach and constant optimization made all the difference. Highly recommend!"
                    </p>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            MK
                        </div>
                        <div>
                            <div class="font-bold text-gray-900 text-lg">Michael Kennedy</div>
                            <div class="text-gray-500">CMO, TechScale Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-32 bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-orange-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(59, 130, 246, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(59, 130, 246, 0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Badge -->
            <div class="cta-badge inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-8">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-500 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
                <span class="text-sm font-medium text-white">Drive Your Success</span>
            </div>
            
            <h2 class="cta-title text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Boost Your Business with<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-orange-400 to-blue-400">Performance Marketing</span>
            </h2>
            
            <p class="cta-desc text-xl text-blue-100/80 mb-12 max-w-2xl mx-auto">
                Get started optimizing your campaigns today and achieve the results you've always wanted. Free strategy session included.
            </p>
            
            <div class="cta-buttons flex flex-wrap justify-center gap-6 mb-12">
                <a href="/contact" class="group relative px-10 py-5 bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold rounded-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:shadow-orange-500/30 hover:scale-105">
                    <span class="relative z-10 flex items-center gap-3">
                        Get Free Strategy Session
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                </a>
                <a href="tel:+1234567890" class="px-10 py-5 border-2 border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-all duration-300 backdrop-blur-sm flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Schedule a Call
                </a>
            </div>
            
            <!-- Trust Elements -->
            <div class="cta-trust grid grid-cols-2 md:grid-cols-4 gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">24hr</div>
                    <div class="text-blue-200/60 text-sm">Response Time</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">Free</div>
                    <div class="text-blue-200/60 text-sm">Initial Audit</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">100%</div>
                    <div class="text-blue-200/60 text-sm">Transparent</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">No</div>
                    <div class="text-blue-200/60 text-sm">Long Contracts</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* Custom Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
        50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.6); }
    }
    
    @keyframes data-flow {
        0% { transform: translateY(100%); opacity: 0; }
        50% { opacity: 1; }
        100% { transform: translateY(-100%); opacity: 0; }
    }
    
    .floating-notif {
        animation: float 4s ease-in-out infinite;
    }
    
    .floating-channel {
        animation: float 4s ease-in-out infinite 1s;
    }
    
    .chart-bar {
        transition: height 0.5s ease-out;
    }
    
    .dashboard-main {
        animation: pulse-glow 4s ease-in-out infinite;
    }
    
    /* Data point animations */
    .data-point {
        animation: data-flow 8s linear infinite;
    }
    
    .data-point:nth-child(2) { animation-delay: 1s; }
    .data-point:nth-child(3) { animation-delay: 2s; }
    .data-point:nth-child(4) { animation-delay: 3s; }
    .data-point:nth-child(5) { animation-delay: 4s; }
</style>
@endpush

@push('scripts')
<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    // Register ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);
    
    // Hero Animations
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' }});
    
    heroTl
        .from('.hero-badge', { opacity: 0, y: 30, duration: 0.8 })
        .from('.hero-title', { opacity: 0, y: 50, duration: 1 }, '-=0.4')
        .from('.hero-desc', { opacity: 0, y: 30, duration: 0.8 }, '-=0.6')
        .from('.hero-cta', { opacity: 0, y: 30, duration: 0.8 }, '-=0.4')
        .from('.hero-stats .stat-item', { opacity: 0, y: 20, duration: 0.6, stagger: 0.15 }, '-=0.4')
        .from('.hero-visual', { opacity: 0, x: 100, duration: 1.2 }, '-=1.4')
        .from('.floating-notif', { opacity: 0, scale: 0.5, duration: 0.6 }, '-=0.6')
        .from('.floating-channel', { opacity: 0, scale: 0.5, duration: 0.6 }, '-=0.4')
        .from('.scroll-indicator', { opacity: 0, y: -20, duration: 0.6 }, '-=0.2');
    
    // Animate chart bars on load
    gsap.from('.chart-bar', {
        height: 0,
        duration: 1,
        stagger: 0.1,
        delay: 1.5,
        ease: 'power2.out'
    });
    
    // Hero Orbs Animation
    gsap.to('.hero-orb', {
        x: 50,
        y: 30,
        duration: 10,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });
    
    gsap.to('.hero-orb-2', {
        x: -40,
        y: -30,
        duration: 12,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });
    
    // Counter Animation
    const animateCounter = (el, target, duration = 2) => {
        gsap.to(el, {
            innerHTML: target,
            duration: duration,
            ease: 'power2.out',
            snap: { innerHTML: 1 },
            scrollTrigger: {
                trigger: el,
                start: 'top 85%'
            }
        });
    };
    
    document.querySelectorAll('.counter').forEach(counter => {
        animateCounter(counter, parseInt(counter.getAttribute('data-target')));
    });
    
    document.querySelectorAll('.result-counter').forEach(counter => {
        animateCounter(counter, parseInt(counter.getAttribute('data-target')));
    });
    
    // Service Cards Animation
    gsap.from('.service-card', {
        opacity: 0,
        y: 60,
        duration: 0.8,
        stagger: 0.15,
        scrollTrigger: {
            trigger: '.service-card',
            start: 'top 85%'
        }
    });
    
    // Result Cards Animation
    gsap.from('.result-card', {
        opacity: 0,
        y: 50,
        scale: 0.9,
        duration: 0.6,
        stagger: 0.1,
        scrollTrigger: {
            trigger: '.result-card',
            start: 'top 85%'
        }
    });
    
    // Process Steps Animation
    gsap.from('.process-step', {
        opacity: 0,
        y: 60,
        duration: 0.8,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.process-step',
            start: 'top 80%'
        }
    });
    
    // Platform Cards Animation
    gsap.from('.platform-card', {
        opacity: 0,
        scale: 0.8,
        duration: 0.5,
        stagger: 0.08,
        scrollTrigger: {
            trigger: '.platform-card',
            start: 'top 85%'
        }
    });
    
    // Case Studies Animation
    gsap.from('.case-study', {
        opacity: 0,
        y: 80,
        duration: 0.8,
        stagger: 0.2,
        scrollTrigger: {
            trigger: '.case-study',
            start: 'top 80%'
        }
    });
    
    // Testimonial Animation
    gsap.from('.testimonial-card', {
        opacity: 0,
        y: 50,
        scale: 0.95,
        duration: 1,
        scrollTrigger: {
            trigger: '.testimonial-card',
            start: 'top 80%'
        }
    });
    
    // CTA Section Animation
    const ctaTl = gsap.timeline({
        scrollTrigger: {
            trigger: '#contact',
            start: 'top 70%'
        }
    });
    
    ctaTl
        .from('.cta-badge', { opacity: 0, y: 30, duration: 0.6 })
        .from('.cta-title', { opacity: 0, y: 50, duration: 0.8 }, '-=0.3')
        .from('.cta-desc', { opacity: 0, y: 30, duration: 0.6 }, '-=0.4')
        .from('.cta-buttons', { opacity: 0, y: 30, duration: 0.6 }, '-=0.3')
        .from('.cta-trust > div', { opacity: 0, y: 20, duration: 0.4, stagger: 0.1 }, '-=0.2');
    
    // Section Labels & Titles Animation
    gsap.utils.toArray('.section-label').forEach(el => {
        gsap.from(el, {
            opacity: 0,
            y: 20,
            duration: 0.6,
            scrollTrigger: { trigger: el, start: 'top 85%' }
        });
    });
    
    gsap.utils.toArray('.section-title').forEach(el => {
        gsap.from(el, {
            opacity: 0,
            y: 40,
            duration: 0.8,
            scrollTrigger: { trigger: el, start: 'top 85%' }
        });
    });
    
    gsap.utils.toArray('.section-desc').forEach(el => {
        gsap.from(el, {
            opacity: 0,
            y: 30,
            duration: 0.6,
            scrollTrigger: { trigger: el, start: 'top 85%' }
        });
    });
    
    // Parallax Effects
    gsap.utils.toArray('[class*="orb"]').forEach(orb => {
        gsap.to(orb, {
            y: -80,
            ease: 'none',
            scrollTrigger: {
                trigger: orb,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1
            }
        });
    });
    
    // Data Grid Parallax
    gsap.to('.data-grid', {
        backgroundPosition: '50px 50px',
        ease: 'none',
        scrollTrigger: {
            trigger: '.data-grid',
            start: 'top top',
            end: 'bottom top',
            scrub: 1
        }
    });
    
    // Magnetic Button Effect
    document.querySelectorAll('a[href="#contact"], a[href="/contact"]').forEach(btn => {
        btn.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(this, {
                x: x * 0.15,
                y: y * 0.15,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
        
        btn.addEventListener('mouseleave', function() {
            gsap.to(this, {
                x: 0,
                y: 0,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
    
    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: { y: target, offsetY: 80 },
                    ease: 'power3.inOut'
                });
            }
        });
    });
    
    // Dashboard Metrics Animation
    const dashboardMetrics = document.querySelectorAll('.dashboard-main .bg-white\\/5');
    dashboardMetrics.forEach((metric, index) => {
        gsap.from(metric, {
            opacity: 0,
            y: 20,
            duration: 0.5,
            delay: 2 + (index * 0.1)
        });
    });
    
    // Hover animations for service cards
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                y: -10,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                y: 0,
                duration: 0.3,
                ease: 'power2.out'
            });
        });
    });
    
    // Chart bars continuous animation
    setInterval(() => {
        document.querySelectorAll('.chart-bar').forEach((bar, index) => {
            const randomHeight = 30 + Math.random() * 60;
            gsap.to(bar, {
                height: randomHeight + '%',
                duration: 1,
                ease: 'power2.inOut',
                delay: index * 0.05
            });
        });
    }, 3000);
    
    // Platform cards hover glow effect
    document.querySelectorAll('.platform-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            gsap.to(this, {
                boxShadow: '0 0 30px rgba(59, 130, 246, 0.3)',
                duration: 0.3
            });
        });
        
        card.addEventListener('mouseleave', function() {
            gsap.to(this, {
                boxShadow: 'none',
                duration: 0.3
            });
        });
    });
    
    // Scroll-triggered text reveal for stats
    gsap.utils.toArray('.stat-item').forEach(stat => {
        gsap.from(stat, {
            opacity: 0,
            scale: 0.8,
            duration: 0.6,
            scrollTrigger: {
                trigger: stat,
                start: 'top 90%',
                toggleActions: 'play none none reverse'
            }
        });
    });
</script>
@endpush