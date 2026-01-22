<!-- resources/views/careers.blade.php -->
@extends('layouts.base')

@section('title', 'Careers - Join Our Team | AdventureCode')
@section('description', 'Join AdventureCode and build your career with a dynamic team. Explore exciting job opportunities in technology, design, product, and more.')
@section('keywords', 'careers, jobs, employment, tech careers, AdventureCode jobs, software developer jobs, designer jobs')

@section('content')

{{-- Enhanced Hero Section --}}
<section class="relative bg-white pt-32 pb-24 md:pt-40 md:pb-32 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-slate-50"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(59,130,246,0.1),transparent_50%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(99,102,241,0.08),transparent_50%)]"></div>
    
    {{-- Decorative Elements --}}
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-indigo-200/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-8">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 text-sm font-bold rounded-full border border-blue-200">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                </span>
                We're Hiring!
            </div>
            
            {{-- Main Heading --}}
            <div class="space-y-4">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-slate-900 leading-[1.1] tracking-tight">
                    Build Your Career
                    <span class="relative inline-block mt-2">
                        <span class="relative z-10 text-blue-600">With Innovation</span>
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-blue-200" viewBox="0 0 300 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10C50 5 100 2 150 2C200 2 250 5 298 10" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed max-w-3xl mx-auto">
                    Join a team of passionate innovators creating the future of technology
                </p>
            </div>
            
            {{-- Stats - Responsive Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 max-w-3xl mx-auto pt-4">
                <div class="bg-white rounded-2xl border-2 border-slate-100 p-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl font-black text-blue-600 mb-1">12</div>
                    <p class="text-slate-600 text-sm font-semibold">Open Positions</p>
                </div>
                <div class="bg-white rounded-2xl border-2 border-slate-100 p-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl font-black text-blue-600 mb-1">50+</div>
                    <p class="text-slate-600 text-sm font-semibold">Team Members</p>
                </div>
                <div class="bg-white rounded-2xl border-2 border-slate-100 p-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl font-black text-blue-600 mb-1">20+</div>
                    <p class="text-slate-600 text-sm font-semibold">Countries</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Main Content Section --}}
<section class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Enhanced Responsive Filter Bar --}}
        <div class="mb-12">
            <div class="bg-white rounded-2xl border-2 border-slate-200 shadow-lg p-4 sm:p-6">
                {{-- Search Input - Mobile First --}}
                <div class="mb-4 sm:hidden">
                    <input type="text" 
                           placeholder="Search positions..." 
                           class="w-full px-4 py-3 rounded-xl border-2 border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none text-sm transition-all">
                </div>
                
                {{-- Filter Buttons - Responsive Layout --}}
                <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                    {{-- Scrollable button container for mobile --}}
                    <div class="flex-1 overflow-x-auto">
                        <div class="flex gap-3 pb-2 sm:pb-0 min-w-max sm:min-w-0">
                            <button class="px-5 py-2.5 bg-blue-600 text-white rounded-xl text-sm font-bold transition-all duration-300 hover:bg-blue-700 hover:scale-105 shadow-md whitespace-nowrap">
                                All Jobs
                            </button>
                            <button class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-xl text-sm font-semibold hover:bg-slate-200 transition-all duration-300 hover:scale-105 whitespace-nowrap">
                                Engineering
                            </button>
                            <button class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-xl text-sm font-semibold hover:bg-slate-200 transition-all duration-300 hover:scale-105 whitespace-nowrap">
                                Design
                            </button>
                            <button class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-xl text-sm font-semibold hover:bg-slate-200 transition-all duration-300 hover:scale-105 whitespace-nowrap">
                                Product
                            </button>
                            <button class="px-5 py-2.5 bg-slate-100 text-slate-700 rounded-xl text-sm font-semibold hover:bg-slate-200 transition-all duration-300 hover:scale-105 whitespace-nowrap">
                                Marketing
                            </button>
                        </div>
                    </div>
                    
                    {{-- Search Input - Desktop --}}
                    <div class="hidden sm:block sm:ml-4">
                        <input type="text" 
                               placeholder="Search positions..." 
                               class="w-full sm:w-64 px-4 py-2.5 rounded-xl border-2 border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none text-sm transition-all">
                    </div>
                </div>
                
                {{-- Mobile hint for scrolling --}}
                <div class="sm:hidden mt-2 text-xs text-slate-500 text-center">
                    ← Swipe to see more categories →
                </div>
            </div>
        </div>
        
        {{-- Job Cards Grid - Enhanced Responsive --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            
            {{-- Job Card 1 - Full Stack Developer --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-blue-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 text-xs font-bold rounded-lg border border-green-200">Remote</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">Full Stack Developer</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        Engineering • 5+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Build scalable applications using Laravel and React. Work with modern cloud technologies and lead innovative projects.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">Laravel</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">React</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">AWS</span>
                    </div>
                    
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Job Card 2 - UI/UX Designer --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-purple-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 text-xs font-bold rounded-lg border border-green-200">Remote</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">UI/UX Designer</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                        Design • 3+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Create beautiful interfaces. Collaborate with teams to bring innovative ideas to life through design.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">Figma</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">UI/UX</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">Adobe</span>
                    </div>
                    
                    <button class="w-full py-3 bg-purple-600 text-white font-bold rounded-xl hover:bg-purple-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Job Card 3 - Product Manager --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-orange-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-yellow-50 text-yellow-700 text-xs font-bold rounded-lg border border-yellow-200">Hybrid</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">Product Manager</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                        Product • 4+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Lead product strategy. Work with teams to deliver innovative solutions that delight customers.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-orange-50 text-orange-700 text-xs font-semibold rounded-lg">Strategy</span>
                        <span class="px-3 py-1 bg-orange-50 text-orange-700 text-xs font-semibold rounded-lg">Agile</span>
                        <span class="px-3 py-1 bg-orange-50 text-orange-700 text-xs font-semibold rounded-lg">Analytics</span>
                    </div>
                    
                    <button class="w-full py-3 bg-orange-600 text-white font-bold rounded-xl hover:bg-orange-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Job Card 4 - Marketing Specialist --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-green-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 text-xs font-bold rounded-lg border border-green-200">Remote</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">Marketing Specialist</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                        Marketing • 3+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Drive marketing strategy. Build campaigns that grow our brand across digital channels.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-semibold rounded-lg">SEO</span>
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-semibold rounded-lg">Content</span>
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs font-semibold rounded-lg">Analytics</span>
                    </div>
                    
                    <button class="w-full py-3 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Job Card 5 - DevOps Engineer --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-blue-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"></path>
                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 text-xs font-bold rounded-lg border border-green-200">Remote</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">DevOps Engineer</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        Engineering • 4+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Manage infrastructure and CI/CD pipelines. Optimize deployment workflows and scale systems.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">AWS</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">Docker</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-lg">K8s</span>
                    </div>
                    
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Job Card 6 - Content Writer --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 shadow-md hover:shadow-2xl hover:border-purple-500 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg flex-shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1.5 bg-green-50 text-green-700 text-xs font-bold rounded-lg border border-green-200">Remote</span>
                    </div>
                    
                    <h3 class="text-xl font-black text-slate-900 mb-2">Content Writer</h3>
                    <p class="text-sm text-slate-600 mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 bg-purple-500 rounded-full"></span>
                        Marketing • 2+ years
                    </p>
                    
                    <p class="text-sm text-slate-700 leading-relaxed mb-6">
                        Create engaging content for blogs, social media, and marketing materials that resonate.
                    </p>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">Writing</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">SEO</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-lg">Social</span>
                    </div>
                    
                    <button class="w-full py-3 bg-purple-600 text-white font-bold rounded-xl hover:bg-purple-700 transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 flex items-center justify-center gap-2">
                        Apply Now
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        {{-- Enhanced CTA Section - Responsive --}}
        <div class="mt-16 relative overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-8 sm:p-12 text-white">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(255,255,255,0.1),transparent_70%)]"></div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-400/20 rounded-full blur-3xl"></div>
            <div class="relative z-10 text-center">
                <h3 class="text-2xl sm:text-3xl font-black mb-4">Can't Find Your Perfect Role?</h3>
                <p class="text-blue-100 text-base sm:text-lg mb-8 max-w-2xl mx-auto">
                    We're always on the lookout for exceptional talent. Send us your resume and let's explore future opportunities together.
                </p>
                <a href="mailto:careers@adventurecode.com" 
                   class="inline-flex items-center gap-2 px-6 sm:px-8 py-3 sm:py-4 bg-white text-blue-600 font-bold rounded-xl hover:bg-blue-50 transition-all duration-300 shadow-2xl hover:scale-105">
                    Send General Application
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Float Animation --}}
<style>
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
        }
        50% {
            transform: translateY(-20px) translateX(10px);
        }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    /* Smooth scroll for categories */
    .overflow-x-auto::-webkit-scrollbar {
        height: 4px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
    
    .overflow-x-auto::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
</style>

@endsection
