@extends('layouts.base')

@section('title', 'Digital Marketing Services – SEO, PPC, Social, Content & More')
@section('description', 'Boost visibility, engagement and revenue with our 360° digital marketing services: SEO, PPC, Social, Content, Email, Analytics.')
@section('keywords', 'digital marketing, SEO, PPC, social media, content marketing, email marketing, analytics')

@section('content')
{{-- HERO – diagonal overflow --}}
<section class="relative bg-white pt-24 pb-32 lg:pt-32 lg:pb-44 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-50 via-white to-orange-50 -skew-y-12 origin-top-left"></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-400/20 rounded-full filter blur-3xl animate-float"></div>
    <div class="absolute bottom-20 right-0 w-96 h-96 bg-orange-400/20 rounded-full filter blur-3xl animate-float-delayed"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div class="fade-up">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-6 shadow-sm">
                <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                360° Digital Marketing
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 mb-6 leading-tight">
                Growth Engine<br/>
                <span class="bg-gradient-to-r from-blue-600 to-orange-500 bg-clip-text text-transparent">For Ambitious Brands</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-600 mb-8 max-w-xl">
                Boost visibility, engagement and revenue with data-driven SEO, PPC, Social, Content, Email & Analytics services.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#services" class="group inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-7 py-3 rounded-xl font-semibold shadow-lg shadow-blue-600/30 transition-all hover:shadow-xl hover:-translate-y-0.5">
                    Explore Services
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="{{ route('contact_us') }}" class="inline-flex items-center gap-2 bg-white/70 backdrop-blur border-2 border-slate-300 hover:border-blue-600 text-slate-900 px-7 py-3 rounded-xl font-semibold transition-all hover:bg-white">
                    Get Free Audit
                </a>
            </div>
        </div>

        {{-- right – overlapping cards --}}
        <div class="relative fade-up-delay-2 h-96 lg:h-auto">
            <div class="absolute top-0 left-0 w-full max-w-sm bg-white/80 backdrop-blur rounded-2xl border border-white/20 shadow-xl p-6 rotate-3 hover:rotate-0 transition-transform">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m-6 3l6 3m0 0l6-3m-6 3v10"/></svg></div>
                    <div class="text-sm font-bold text-slate-900">SEO</div>
                </div>
                <div class="text-2xl font-bold text-slate-900">+186 %</div>
                <div class="text-xs text-slate-500">Organic traffic (6 mo)</div>
            </div>

            <div class="absolute top-24 right-0 w-full max-w-sm bg-white/80 backdrop-blur rounded-2xl border border-white/20 shadow-xl p-6 -rotate-2 hover:rotate-0 transition-transform">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div>
                    <div class="text-sm font-bold text-slate-900">PPC</div>
                </div>
                <div class="text-2xl font-bold text-slate-900">5.2 ×</div>
                <div class="text-xs text-slate-500">ROAS last quarter</div>
            </div>

            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full max-w-sm bg-white/80 backdrop-blur rounded-2xl border border-white/20 shadow-xl p-6 rotate-1 hover:rotate-0 transition-transform">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center"><svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
                    <div class="text-sm font-bold text-slate-900">Social</div>
                </div>
                <div class="text-2xl font-bold text-slate-900">+72 %</div>
                <div class="text-xs text-slate-500">Follower growth (3 mo)</div>
            </div>
        </div>
    </div>
</section>

{{-- STICKY STATS BAR – counters fixed --}}
<section class="sticky top-0 z-20 bg-white/80 backdrop-blur border-b border-slate-200 py-3">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-around gap-4 text-center">
        <div>
            <div class="text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent"
                 data-target="186" data-suffix="%">0%</div>
            <div class="text-xs text-slate-500">Traffic Boost</div>
        </div>
        <div class="h-8 w-px bg-slate-300 hidden sm:block"></div>
        <div>
            <div class="text-xl md:text-2xl font-bold bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent"
                 data-target="5" data-suffix="x">0x</div>
            <div class="text-xs text-slate-500">Avg. ROAS</div>
        </div>
        <div class="h-8 w-px bg-slate-300 hidden sm:block"></div>
        <div>
            <div class="text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent"
                 data-target="98" data-suffix="%">0%</div>
            <div class="text-xs text-slate-500">Client Retention</div>
        </div>
        <div class="h-8 w-px bg-slate-300 hidden sm:block"></div>
        <div>
            <div class="text-xl md:text-2xl font-bold bg-gradient-to-r from-slate-700 to-slate-900 bg-clip-text text-transparent"
                 data-target="24" data-suffix="/7">0/7</div>
            <div class="text-xs text-slate-500">Support</div>
        </div>
    </div>
</section>

{{-- SERVICES – your 6 blocks --}}
<section id="services" class="py-20 lg:py-28 bg-gradient-to-br from-slate-50 to-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4">Our Services</div>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Everything You Need to Grow Online</h2>
            <p class="text-lg text-slate-600">From discovery to conversion — we’ve got you covered.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- SEO --}}
            <div class="scroll-reveal bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-1.447-.894L15 4m-6 3l6 3m0 0l6-3m-6 3v10"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">SEO</h3>
                </div>
                <h4 class="text-sm font-semibold text-blue-600 mb-2">Search Engine Optimization</h4>
                <p class="text-slate-600 text-sm">Effective SEO boosts search visibility, attracts targeted visitors, strengthens brand authority, and drives sales and engagement.</p>
            </div>

            {{-- Content Marketing --}}
            <div class="scroll-reveal-delay-1 bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">Content Marketing</h3>
                </div>
                <h4 class="text-sm font-semibold text-orange-600 mb-2">Content Marketing</h4>
                <p class="text-slate-600 text-sm">Content marketing drives growth by engaging audiences, building authority, and boosting conversions.</p>
            </div>

            {{-- Social Media Management --}}
            <div class="scroll-reveal-delay-2 bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">Social Media Management</h3>
                </div>
                <h4 class="text-sm font-semibold text-slate-600 mb-2">Social Media Management</h4>
                <p class="text-slate-600 text-sm">Managing social media effectively enhances brand visibility, engages customers, boosts community, and promotes organizational growth and loyalty.</p>
            </div>

            {{-- PPC Advertising --}}
            <div class="scroll-reveal bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">PPC Advertising</h3>
                </div>
                <h4 class="text-sm font-semibold text-orange-600 mb-2">Pay-Per-Click (PPC) Advertising</h4>
                <p class="text-slate-600 text-sm">PPC advertising boosts business growth by driving targeted traffic, enhancing brand visibility, and delivering cost-effective results.</p>
            </div>

            {{-- Email Marketing --}}
            <div class="scroll-reveal-delay-1 bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">Email Marketing</h3>
                </div>
                <h4 class="text-sm font-semibold text-blue-600 mb-2">Email Marketing</h4>
                <p class="text-slate-600 text-sm">Email marketing fuels growth by boosting engagement, building customer relationships, and driving conversions.</p>
            </div>

            {{-- Analytics & Reporting --}}
            <div class="scroll-reveal-delay-2 bg-white rounded-2xl border border-slate-200 p-6 shadow hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center"><svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg></div>
                    <h3 class="text-xl font-bold text-slate-900">Analytics & Reporting</h3>
                </div>
                <h4 class="text-sm font-semibold text-slate-600 mb-2">Analytics and Reporting</h4>
                <p class="text-slate-600 text-sm">Analytics and reporting provide insights for data-driven decisions that optimize performance and drive growth.</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US – your 3 points --}}
<section class="py-20 lg:py-28 bg-gradient-to-br from-white to-blue-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="scroll-reveal">
            <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4">Why Choose Us</div>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Custom, Creative & Data-Driven</h2>
            <p class="text-slate-600 mb-8">We don’t do cookie-cutter. Every strategy is built for your goals, your market, your growth.</p>

            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                    <div>
                        <h3 class="font-bold text-slate-900">Custom Solutions</h3>
                        <p class="text-sm text-slate-600">Tailored strategies that meet your specific business requirements and achieve results.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                    <div>
                        <h3 class="font-bold text-slate-900">Expert Team</h3>
                        <p class="text-sm text-slate-600">A skilled team with the knowledge to provide unique solutions to enhance your brand.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center flex-shrink-0"><svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
                    <div>
                        <h3 class="font-bold text-slate-900">Comprehensive Approach</h3>
                        <p class="text-sm text-slate-600">Leveraging creativity, data, and innovation to drive your brand's growth and success.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-reveal-delay-1">
            <img src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?auto=format&fit=crop&w=800&q=60" alt="Team brainstorming" class="rounded-2xl shadow-xl">
        </div>
    </div>
</section>

{{-- PROCESS – numbered vertical line --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 scroll-reveal">
            <div class="inline-block px-4 py-2 bg-blue-50 border border-blue-200 rounded-full text-blue-600 text-sm font-semibold mb-4">Our Process</div>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">From Audit to Acceleration</h2>
            <p class="text-lg text-slate-600">Transparent, repeatable and built for speed.</p>
        </div>

        <div class="relative">
            <div class="absolute left-8 top-0 h-full w-0.5 bg-gradient-to-b from-blue-300 to-orange-300"></div>
            <div class="space-y-12">
                <div class="relative scroll-reveal">
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-16 h-16 bg-blue-100 border-4 border-white rounded-full flex items-center justify-center font-bold text-blue-700 shadow-md">1</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Deep-Dive Audit</h3>
                            <p class="text-slate-600">We dissect your analytics, competitors and tech stack to uncover quick wins and 90-day roadmaps.</p>
                        </div>
                    </div>
                </div>
                <div class="relative scroll-reveal-delay-1">
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-16 h-16 bg-orange-100 border-4 border-white rounded-full flex items-center justify-center font-bold text-orange-700 shadow-md">2</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Strategy & Forecast</h3>
                            <p class="text-slate-600">Budgets, channels, creatives and KPIs modelled in your own dashboard before we spend $1.</p>
                        </div>
                    </div>
                </div>
                <div class="relative scroll-reveal-delay-2">
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-16 h-16 bg-blue-100 border-4 border-white rounded-full flex items-center justify-center font-bold text-blue-700 shadow-md">3</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Launch & Iterate</h3>
                            <p class="text-slate-600">Campaigns go live within 7 days. We A/B test audiences, bids and creatives weekly.</p>
                        </div>
                    </div>
                </div>
                <div class="relative scroll-reveal-delay-3">
                    <div class="flex items-start gap-6">
                        <div class="shrink-0 w-16 h-16 bg-orange-100 border-4 border-white rounded-full flex items-center justify-center font-bold text-orange-700 shadow-md">4</div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Scale & Report</h3>
                            <p class="text-slate-600">Real-time Looker Studio dashboards + monthly CRO sprints to compound growth every quarter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 lg:py-28 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10"><div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div></div>
    <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full filter blur-3xl animate-float"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-400/10 rounded-full filter blur-3xl animate-float-delayed"></div>

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="scroll-reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur border border-white/20 rounded-full text-white text-sm font-semibold mb-6">
                <span class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></span>
                Ready to Scale?
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight">Let's Build Your Growth Engine</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-3xl mx-auto">Book a free 30-minute strategy call and get a bespoke growth forecast.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact_us') }}" class="group inline-flex items-center gap-2 bg-white hover:bg-gray-50 text-blue-600 px-8 py-4 rounded-xl font-semibold shadow-xl transition-all hover:shadow-2xl hover:-translate-y-0.5">
                    Book Free Strategy Call
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <a href="tel:+1234567890" class="inline-flex items-center gap-2 bg-blue-700/50 backdrop-blur border-2 border-white/30 hover:border-white/60 text-white px-8 py-4 rounded-xl font-semibold transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +1 (234) 567-890
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
/* scroll reveal */
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('is-visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.scroll-reveal, .scroll-reveal-delay-1, .scroll-reveal-delay-2, .scroll-reveal-delay-3, .fade-up, .fade-up-delay-1, .fade-up-delay-2, .fade-up-delay-3').forEach(el => observer.observe(el));

/* counters – fixed */
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const target = parseInt(entry.target.dataset.target);
            const suffix = entry.target.dataset.suffix || '';
            let current = 0; const inc = target / (2000 / 16);
            const timer = setInterval(() => {
                current += inc;
                if (current >= target) { clearInterval(timer); entry.target.textContent = target + suffix; }
                else entry.target.textContent = Math.floor(current) + suffix;
            }, 16);
        }
    });
}, { threshold: 0.5 });
document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));
</script>
<style>
/* floats */
@keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
@keyframes float-delayed { 0%, 100% { transform: translateY(0) rotate(0); } 50% { transform: translateY(-20px) rotate(4deg); } }
.animate-float { animation: float 6s ease-in-out infinite; }
.animate-float-delayed { animation: float-delayed 7s ease-in-out infinite; }
/* reveal */
.scroll-reveal, .scroll-reveal-delay-1, .scroll-reveal-delay-2, .scroll-reveal-delay-3, .fade-up, .fade-up-delay-1, .fade-up-delay-2, .fade-up-delay-3 { opacity: 0; transform: translateY(30px); transition: opacity .6s ease-out, transform .6s ease-out; }
.scroll-reveal-delay-1, .fade-up-delay-1 { transition-delay: .1s; }
.scroll-reveal-delay-2, .fade-up-delay-2 { transition-delay: .2s; }
.scroll-reveal-delay-3, .fade-up-delay-3 { transition-delay: .3s; }
.scroll-reveal.is-visible, .scroll-reveal-delay-1.is-visible, .scroll-reveal-delay-2.is-visible, .scroll-reveal-delay-3.is-visible, .fade-up.is-visible, .fade-up-delay-1.is-visible, .fade-up-delay-2.is-visible, .fade-up-delay-3.is-visible { opacity: 1; transform: translateY(0); }
</style>
@endpush