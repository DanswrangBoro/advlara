<!-- resources/views/seo.blade.php -->
@extends('layouts.base')

@section('title', 'SEO & Content Writing Services - Drive Organic Traffic & Rankings')
@section('description', 'Strategic SEO and content writing services that boost your search rankings, drive qualified traffic, and engage your audience with data-driven strategies.')
@section('keywords', 'SEO services, content writing, keyword research, on-page SEO, SEO optimization, organic traffic, search engine rankings')

@section('content')
    <!-- Hero Section with Live Metrics -->
    <section class="hero-parallax relative bg-gradient-to-br from-slate-900 via-slate-800 to-blue-900 py-20 lg:py-32 overflow-hidden">
        <!-- Animated grid background -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(59, 130, 246, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(59, 130, 246, 0.3) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <!-- Floating data particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-20 w-16 h-16 bg-blue-500/20 rounded-lg blur-sm animate-float-data"></div>
            <div class="absolute top-40 right-32 w-12 h-12 bg-green-500/20 rounded-lg blur-sm animate-float-data-delayed"></div>
            <div class="absolute bottom-32 left-1/4 w-20 h-20 bg-orange-500/20 rounded-lg blur-sm animate-float-data-slow"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <!-- Badge with pulse -->
                    <div class="fade-up inline-flex items-center gap-2 px-4 py-2 bg-blue-500/10 border border-blue-500/30 rounded-full text-blue-400 text-sm font-medium mb-6 backdrop-blur-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                        </span>
                        SEO Services Active
                    </div>

                    <h1 class="fade-up-delay-1 text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Rank Higher.
                        <span class="block mt-2 bg-gradient-to-r from-blue-400 via-green-400 to-emerald-400 bg-clip-text text-transparent">
                            Convert Better.
                        </span>
                        <span class="block mt-2 text-3xl md:text-4xl lg:text-5xl text-slate-300">
                            Grow Faster.
                        </span>
                    </h1>

                    <p class="fade-up-delay-2 text-lg md:text-xl text-slate-300 mb-8 leading-relaxed">
                        Data-driven SEO strategies that turn search engines into your biggest sales channel
                    </p>

                    <!-- Live Stats Bar -->
                    <div class="fade-up-delay-3 grid grid-cols-3 gap-4 mb-8 p-4 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-xl">
                        <div class="text-center">
                            <div class="text-2xl md:text-3xl font-bold text-green-400 mb-1">247%</div>
                            <div class="text-xs text-slate-400">Avg. Traffic Increase</div>
                        </div>
                        <div class="text-center border-x border-slate-700">
                            <div class="text-2xl md:text-3xl font-bold text-blue-400 mb-1">3.2x</div>
                            <div class="text-xs text-slate-400">ROI Multiplier</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl md:text-3xl font-bold text-orange-400 mb-1">89%</div>
                            <div class="text-xs text-slate-400">Client Retention</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="fade-up-delay-3 flex flex-col sm:flex-row gap-4">
                        <a href="#get-started" class="group inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-0.5">
                            Start Ranking Today
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </a>
                        <a href="#audit" class="inline-flex items-center justify-center gap-2 bg-slate-800/80 hover:bg-slate-700 text-white px-8 py-4 rounded-lg font-medium border border-slate-600 hover:border-blue-500 transition-all duration-300 backdrop-blur-sm">
                            Free SEO Audit
                        </a>
                    </div>
                </div>

                <!-- Right - Animated Dashboard -->
                <div class="fade-up-delay-2 relative hidden lg:block">
                    <div class="bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-6 shadow-2xl">
                        <!-- Dashboard Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <h3 class="text-white font-semibold mb-1">Search Performance</h3>
                                <p class="text-slate-400 text-sm">Last 30 days</p>
                            </div>
                            <div class="flex items-center gap-2 text-green-400 text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                                <span>+156%</span>
                            </div>
                        </div>

                        <!-- Metrics Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4">
                                <div class="text-slate-400 text-xs mb-2">Organic Traffic</div>
                                <div class="text-2xl font-bold text-white mb-1">24.5K</div>
                                <div class="flex items-center gap-1 text-green-400 text-xs">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>+34.2%</span>
                                </div>
                            </div>
                            <div class="bg-slate-900/50 border border-slate-700 rounded-lg p-4">
                                <div class="text-slate-400 text-xs mb-2">Keywords Ranking</div>
                                <div class="text-2xl font-bold text-white mb-1">1,247</div>
                                <div class="flex items-center gap-1 text-green-400 text-xs">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>+18.7%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Simulation -->
                        <div class="space-y-3">
                            <div class="flex items-end gap-2 h-24">
                                <div class="flex-1 bg-gradient-to-t from-blue-600/80 to-blue-500/40 rounded-t animate-chart-grow" style="height: 45%; animation-delay: 0s;"></div>
                                <div class="flex-1 bg-gradient-to-t from-blue-600/80 to-blue-500/40 rounded-t animate-chart-grow" style="height: 55%; animation-delay: 0.1s;"></div>
                                <div class="flex-1 bg-gradient-to-t from-blue-600/80 to-blue-500/40 rounded-t animate-chart-grow" style="height: 70%; animation-delay: 0.2s;"></div>
                                <div class="flex-1 bg-gradient-to-t from-blue-600/80 to-blue-500/40 rounded-t animate-chart-grow" style="height: 60%; animation-delay: 0.3s;"></div>
                                <div class="flex-1 bg-gradient-to-t from-green-600/80 to-green-500/40 rounded-t animate-chart-grow" style="height: 85%; animation-delay: 0.4s;"></div>
                                <div class="flex-1 bg-gradient-to-t from-green-600/80 to-green-500/40 rounded-t animate-chart-grow" style="height: 100%; animation-delay: 0.5s;"></div>
                            </div>
                            <div class="flex justify-between text-xs text-slate-500">
                                <span>Week 1</span>
                                <span>Week 6</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating metric cards -->
                    <div class="absolute -top-4 -right-4 bg-green-500/10 backdrop-blur-sm border border-green-500/30 rounded-lg p-3 animate-float-slow">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-green-400 text-xs font-medium">Page 1 Rankings ↑</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="bg-slate-50 border-y border-slate-200 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-center md:text-left">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-slate-900">500+</div>
                        <div class="text-sm text-slate-600">Clients Served</div>
                    </div>
                </div>
                <div class="hidden md:block w-px h-12 bg-slate-300"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-slate-900">2.5M+</div>
                        <div class="text-sm text-slate-600">Keywords Ranked</div>
                    </div>
                </div>
                <div class="hidden md:block w-px h-12 bg-slate-300"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-slate-900">847%</div>
                        <div class="text-sm text-slate-600">Avg. ROI Increase</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    Our Services
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Complete SEO Solutions for
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">Maximum Visibility</span>
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    From technical audits to content strategy, we cover every aspect of modern SEO
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Service 1 - Keyword Research -->
                <div class="service-card scroll-reveal-delay-1 group bg-white rounded-2xl p-8 border-2 border-slate-200 hover:border-blue-400 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <!-- Gradient overlay on hover -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Core Service</span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">
                            Advanced Keyword Research
                        </h3>
                        <p class="text-slate-600 mb-4 leading-relaxed">
                            Discover high-converting keywords with search intent analysis, competitor gap analysis, and search volume trends
                        </p>
                        
                        <!-- Key Features -->
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Header structure (H1-H6)
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Internal linking strategy
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4 - Content Strategy -->
                <div class="service-card scroll-reveal-delay-1 group bg-white rounded-2xl p-8 border-2 border-slate-200 hover:border-green-400 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg shadow-green-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-3 py-1 rounded-full">Content</span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-green-600 transition-colors">
                            SEO Content Writing
                        </h3>
                        <p class="text-slate-600 mb-4 leading-relaxed">
                            Create engaging, conversion-focused content that ranks and resonates with your target audience
                        </p>
                        
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Keyword-optimized articles
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Content gap analysis
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                E-A-T optimization
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 5 - Link Building -->
                <div class="service-card scroll-reveal-delay-2 group bg-white rounded-2xl p-8 border-2 border-slate-200 hover:border-cyan-400 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-cyan-600 bg-cyan-50 px-3 py-1 rounded-full">Authority</span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-cyan-600 transition-colors">
                            Strategic Link Building
                        </h3>
                        <p class="text-slate-600 mb-4 leading-relaxed">
                            Build high-quality backlinks from authoritative sources to boost domain authority and rankings
                        </p>
                        
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                White-hat link acquisition
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Guest posting outreach
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Broken link recovery
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 6 - Analytics & Reporting -->
                <div class="service-card scroll-reveal-delay-3 group bg-white rounded-2xl p-8 border-2 border-slate-200 hover:border-indigo-400 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    
                    <div class="relative">
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/30 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-3 py-1 rounded-full">Insights</span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">
                            Analytics & Reporting
                        </h3>
                        <p class="text-slate-600 mb-4 leading-relaxed">
                            Track performance with detailed analytics and actionable insights to continuously improve ROI
                        </p>
                        
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Monthly performance reports
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Rank tracking dashboard
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Conversion attribution
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Process Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    Our Process
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Data-Driven SEO That
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Delivers Results</span>
                </h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                    Our proven 4-phase methodology combines technical expertise with creative strategy
                </p>
            </div>

            <!-- Process Timeline -->
            <div class="relative">
                <!-- Connecting Line -->
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-200 via-purple-200 to-green-200 transform -translate-x-1/2"></div>

                <!-- Process Steps -->
                <div class="space-y-12">
                    <!-- Step 1 -->
                    <div class="scroll-reveal-delay-1 relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                            <div class="lg:text-right mb-8 lg:mb-0">
                                <div class="inline-block lg:block bg-white rounded-2xl p-8 shadow-lg border border-slate-200">
                                    <div class="flex items-center gap-4 lg:justify-end mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                            01
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900">Audit & Analysis</h3>
                                    </div>
                                    <p class="text-slate-600 leading-relaxed">
                                        Comprehensive site audit analyzing technical SEO, content quality, backlink profile, and competitor landscape to identify opportunities and gaps
                                    </p>
                                </div>
                            </div>
                            <div class="hidden lg:block">
                                <div class="absolute left-1/2 top-1/2 w-6 h-6 bg-blue-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 ring-4 ring-blue-100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="scroll-reveal-delay-2 relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                            <div class="hidden lg:block">
                                <div class="absolute left-1/2 top-1/2 w-6 h-6 bg-purple-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 ring-4 ring-purple-100"></div>
                            </div>
                            <div class="lg:col-start-2 mb-8 lg:mb-0">
                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                            02
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900">Strategy Development</h3>
                                    </div>
                                    <p class="text-slate-600 leading-relaxed">
                                        Create a customized roadmap with keyword targets, content calendar, technical fixes, and link building strategy tailored to your business goals
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="scroll-reveal-delay-3 relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                            <div class="lg:text-right mb-8 lg:mb-0">
                                <div class="inline-block lg:block bg-white rounded-2xl p-8 shadow-lg border border-slate-200">
                                    <div class="flex items-center gap-4 lg:justify-end mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                            03
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900">Implementation</h3>
                                    </div>
                                    <p class="text-slate-600 leading-relaxed">
                                        Execute optimization plans including on-page updates, content creation, technical improvements, and strategic link acquisition campaigns
                                    </p>
                                </div>
                            </div>
                            <div class="hidden lg:block">
                                <div class="absolute left-1/2 top-1/2 w-6 h-6 bg-orange-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 ring-4 ring-orange-100"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="scroll-reveal-delay-1 relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                            <div class="hidden lg:block">
                                <div class="absolute left-1/2 top-1/2 w-6 h-6 bg-green-500 rounded-full transform -translate-x-1/2 -translate-y-1/2 ring-4 ring-green-100"></div>
                            </div>
                            <div class="lg:col-start-2">
                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                            04
                                        </div>
                                        <h3 class="text-2xl font-bold text-slate-900">Monitor & Optimize</h3>
                                    </div>
                                    <p class="text-slate-600 leading-relaxed">
                                        Continuous performance tracking, algorithm adaptation, and strategy refinement to maintain and improve rankings over time
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results & Metrics Section -->
    <section class="py-20 lg:py-28 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-500/10 border border-blue-500/30 rounded-full text-blue-400 text-sm font-medium mb-4">
                    Proven Results
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Numbers That Speak for
                    <span class="block mt-2 bg-gradient-to-r from-blue-400 to-green-400 bg-clip-text text-transparent">
                        Themselves
                    </span>
                </h2>
                <p class="text-lg text-slate-300 max-w-2xl mx-auto">
                    Real metrics from real clients who trusted us with their SEO
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="scroll-reveal-delay-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-6 hover:border-blue-500 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <span class="text-slate-400 text-sm font-medium">Traffic Growth</span>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">387%</div>
                    <div class="text-slate-400 text-sm">Average increase in 6 months</div>
                </div>

                <div class="scroll-reveal-delay-2 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-6 hover:border-green-500 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-slate-400 text-sm font-medium">Page 1 Rankings</span>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">1,847</div>
                    <div class="text-slate-400 text-sm">Keywords in top 10 results</div>
                </div>

                <div class="scroll-reveal-delay-3 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-6 hover:border-purple-500 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-slate-400 text-sm font-medium">Revenue Impact</span>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">$12M+</div>
                    <div class="text-slate-400 text-sm">Generated for clients</div>
                </div>

                <div class="scroll-reveal-delay-1 bg-slate-800/50 backdrop-blur-sm border border-slate-700 rounded-2xl p-6 hover:border-orange-500 transition-all duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-slate-400 text-sm font-medium">Avg. Position</span>
                    </div>
                    <div class="text-4xl font-bold text-white mb-2">#3.2</div>
                    <div class="text-slate-400 text-sm">For target keywords</div>
                </div>
            </div>

            <!-- Case Study Highlight -->
            <div class="scroll-reveal mt-12 bg-gradient-to-r from-blue-500/10 to-green-500/10 backdrop-blur-sm border border-slate-700 rounded-2xl p-8">
                <div class="flex items-start gap-6">
                    <div class="hidden md:block w-16 h-16 bg-gradient-to-br from-blue-500 to-green-500 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <h3 class="text-xl font-bold text-white">E-commerce Client Success Story</h3>
                            <span class="px-3 py-1 bg-green-500/20 border border-green-500/30 text-green-400 text-xs font-semibold rounded-full">6 Months</span>
                        </div>
                        <p class="text-slate-300 mb-4">
                            "Increased organic revenue by 542% and reduced cost per acquisition by 67% through strategic keyword targeting and content optimization"
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center gap-2 text-sm">
                                <span class="text-slate-400">Traffic:</span>
                                <span class="text-green-400 font-semibold">+412%</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm">
                                <span class="text-slate-400">Rankings:</span>
                                <span class="text-blue-400 font-semibold">284 Page 1</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm">
                                <span class="text-slate-400">Conversions:</span>
                                <span class="text-purple-400 font-semibold">+198%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Free SEO Audit Section -->
    <section id="audit" class="py-20 lg:py-28 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 border-2 border-blue-200 rounded-3xl p-8 lg:p-12 scroll-reveal">
                <div class="text-center mb-8">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4 shadow-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Limited Time Offer
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                        Get Your Free SEO Audit
                    </h2>
                    <p class="text-lg text-slate-600 mb-8">
                        Discover exactly what's holding your website back from ranking on Page 1
                    </p>
                </div>

                <!-- Audit Features -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start gap-3 bg-white rounded-lg p-4">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-1">Technical SEO Analysis</h4>
                            <p class="text-sm text-slate-600">Identify critical issues affecting crawlability and indexation</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white rounded-lg p-4">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-1">Keyword Opportunities</h4>
                            <p class="text-sm text-slate-600">Find untapped keywords your competitors are ranking for</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white rounded-lg p-4">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-1">Backlink Profile Review</h4>
                            <p class="text-sm text-slate-600">Assess link quality and identify toxic backlinks</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white rounded-lg p-4">
                        <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-900 mb-1">Competitor Benchmarking</h4>
                            <p class="text-sm text-slate-600">See how you stack up against top-ranking competitors</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-lg font-medium transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/50 hover:-translate-y-0.5">
                        Claim Your Free Audit
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </a>
                    <p class="text-sm text-slate-500 mt-4">No credit card required • 100% free • Get results in 48 hours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-medium mb-4">
                    FAQ
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">
                    Common SEO Questions
                    <span class="block mt-2 text-2xl md:text-3xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Answered
                    </span>
                </h2>
            </div>

            <div class="space-y-4">
                <div class="scroll-reveal-delay-1 bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-blue-300 transition-all duration-300">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">How long does SEO take to show results?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Typically, you'll start seeing initial improvements within 3-4 months, with significant results by month 6-8. SEO is a long-term strategy, but our data-driven approach accelerates the timeline by focusing on quick wins alongside sustainable growth tactics.
                    </p>
                </div>

                <div class="scroll-reveal-delay-2 bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-blue-300 transition-all duration-300">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">What makes your SEO services different?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We combine technical expertise with content strategy and use proprietary tools to identify opportunities competitors miss. Every strategy is custom-built using real data from your industry, not cookie-cutter templates.
                    </p>
                </div>

                <div class="scroll-reveal-delay-3 bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-blue-300 transition-all duration-300">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Do you guarantee rankings?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We don't guarantee specific positions (no ethical SEO agency does), but we guarantee measurable improvements in organic traffic, keyword rankings, and visibility. Our average client sees 200%+ traffic growth within 6 months.
                    </p>
                </div>

                <div class="scroll-reveal-delay-1 bg-white border-2 border-slate-200 rounded-xl p-6 hover:border-blue-300 transition-all duration-300">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">What's included in your SEO packages?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        All packages include keyword research, technical audits, on-page optimization, content strategy, link building, and monthly reporting. We customize the focus based on your specific needs and goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="get-started" class="py-20 lg:py-28 bg-gradient-to-br from-blue-600 via-blue-700 to-purple-700 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl animate-float-delayed"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-reveal">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                Ready to Dominate Search Rankings?
            </h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Stop losing traffic to competitors. Let's build an SEO strategy that puts you on top.
            </p>

            <!-- Urgency elements -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="{{ route('contact_us') }}" class="group inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-blue-600 px-10 py-5 rounded-lg font-bold text-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    Start Your SEO Journey
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-blue-100">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Free consultation</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">No long-term contracts</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Results-driven approach</span>
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

/* Floating animation */
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
    transform: translateY(-15px) translateX(10px);
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

/* Data particle animations */
@keyframes float-data {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-30px) rotate(10deg);
  }
}

@keyframes float-data-delayed {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-25px) rotate(-10deg);
  }
}

@keyframes float-data-slow {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(5deg);
  }
}

.animate-float-data {
  animation: float-data 7s ease-in-out infinite;
}

.animate-float-data-delayed {
  animation: float-data-delayed 9s ease-in-out infinite 1s;
}

.animate-float-data-slow {
  animation: float-data-slow 11s ease-in-out infinite 2s;
}

/* Chart grow animation */
@keyframes chartGrow {
  from {
    transform: scaleY(0);
    opacity: 0;
  }
  to {
    transform: scaleY(1);
    opacity: 1;
  }
}

.animate-chart-grow {
  transform-origin: bottom;
  animation: chartGrow 1s ease-out forwards;
}

/* Card hover effects */
.service-card {
  transform: translateY(0);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-card:hover {
  transform: translateY(-8px);
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