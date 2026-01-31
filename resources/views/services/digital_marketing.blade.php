@extends('layouts.base')

@section('title', 'Digital Marketing Services – SEO, PPC, Social, Content & More')
@section('description', 'Boost visibility, engagement and revenue with our 360° digital marketing services: SEO, PPC, Social, Content, Email, Analytics.')
@section('keywords', 'digital marketing, SEO, PPC, social media, content marketing, email marketing, analytics')

@section('content')
{{-- HERO – clean, app-like layout --}}
<section class="relative overflow-hidden bg-slate-950 text-slate-50">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(59,130,246,.25),transparent_60%),radial-gradient(circle_at_bottom,_rgba(249,115,22,.2),transparent_55%)]"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-20 lg:pt-28 lg:pb-28">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="max-w-xl space-y-6">
                <div class="inline-flex items-center gap-2 rounded-full border border-slate-800 bg-slate-900/70 px-3 py-1 text-xs font-semibold text-slate-200">
                    <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                    Performance Digital Marketing
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold tracking-tight">
                    Modern digital marketing
                    <span class="bg-gradient-to-r from-sky-400 via-emerald-300 to-orange-300 bg-clip-text text-transparent">
                        built for measurable growth
                    </span>
                </h1>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    We design and run integrated SEO, paid media, social and lifecycle campaigns with clear targets,
                    transparent reporting and a focus on pipeline, not vanity metrics.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-2">
                    <a href="#channels" class="inline-flex items-center justify-center gap-2 rounded-lg bg-slate-50 px-5 py-2.5 text-sm font-medium text-slate-900 shadow-sm transition hover:bg-white">
                        View channel mix
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0-5 5m5-5H6"/></svg>
                    </a>
                    <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-700 bg-slate-900/60 px-5 py-2.5 text-sm font-medium text-slate-50 transition hover:border-slate-500">
                        Get roadmap in 7 days
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-4 pt-6 text-xs text-slate-300">
                    <div>
                        <div class="font-semibold text-slate-100">+186%</div>
                        <div class="mt-1 text-slate-400">Median organic lift</div>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-100">5.2×</div>
                        <div class="mt-1 text-slate-400">Avg. paid ROAS</div>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-100">90 days</div>
                        <div class="mt-1 text-slate-400">To full ramp‑up</div>
                    </div>
                </div>
            </div>

            {{-- Right: “metrics board” style card --}}
            <div class="w-full max-w-md lg:max-w-lg">
                <div class="rounded-3xl border border-slate-800 bg-slate-900/60 p-5 sm:p-6 shadow-[0_18px_60px_rgba(15,23,42,0.7)]">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.18em] text-slate-400">Pipeline</p>
                            <p class="mt-1 text-sm font-medium text-slate-100">Next 90‑day plan</p>
                        </div>
                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-3 py-1 text-[11px] font-medium text-emerald-300 ring-1 ring-emerald-500/30">
                            Live in 2 weeks
                        </span>
                    </div>

                    <dl class="mt-6 grid grid-cols-3 gap-4 text-xs text-slate-300">
                        <div class="rounded-2xl bg-slate-900/80 p-3 ring-1 ring-slate-800">
                            <dt class="text-[11px] text-slate-400">SEO</dt>
                            <dd class="mt-2 text-sm font-semibold text-slate-50">+124%</dd>
                            <dd class="mt-1 text-[11px] text-emerald-400">traffic QoQ</dd>
                        </div>
                        <div class="rounded-2xl bg-slate-900/80 p-3 ring-1 ring-slate-800">
                            <dt class="text-[11px] text-slate-400">Paid</dt>
                            <dd class="mt-2 text-sm font-semibold text-slate-50">4.8×</dd>
                            <dd class="mt-1 text-[11px] text-orange-300">ROAS</dd>
                        </div>
                        <div class="rounded-2xl bg-slate-900/80 p-3 ring-1 ring-slate-800">
                            <dt class="text-[11px] text-slate-400">Lifecycle</dt>
                            <dd class="mt-2 text-sm font-semibold text-slate-50">+32%</dd>
                            <dd class="mt-1 text-[11px] text-sky-300">LTV</dd>
                        </div>
                    </dl>

                    <div class="mt-6 flex items-center justify-between gap-3 rounded-2xl border border-dashed border-slate-700/80 bg-slate-900/80 px-4 py-3 text-xs">
                        <div>
                            <p class="font-medium text-slate-100">Plug into your stack</p>
                            <p class="mt-1 text-[11px] text-slate-400">GA4 · Looker · HubSpot · Segment · Meta · Google Ads</p>
                        </div>
                        <div class="flex -space-x-2">
                            <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-sky-500/20 text-[11px] font-semibold text-sky-200 ring-1 ring-sky-500/40">GA</span>
                            <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-emerald-500/20 text-[11px] font-semibold text-emerald-200 ring-1 ring-emerald-500/40">FB</span>
                            <span class="inline-flex h-7 w-7 items-center justify-center rounded-full bg-orange-500/20 text-[11px] font-semibold text-orange-200 ring-1 ring-orange-500/40">ADS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Channel mix – tabbed, Next.js style cards --}}
<section id="channels" class="border-b border-slate-200 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-14">
            <div class="max-w-md space-y-4">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Channel mix</p>
                <h2 class="text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900">
                    One growth team, all your channels.
                </h2>
                <p class="text-sm text-slate-600">
                    Pick the lever you care about right now – acquisition, retention or brand.
                    We orchestrate SEO, performance media, social and lifecycle so they compound.
                </p>
            </div>

            <div class="flex-1">
                <div class="inline-flex rounded-full border border-slate-200 bg-slate-50 p-1 text-xs font-medium text-slate-600 mb-6 max-w-full overflow-x-auto" data-dm-tabs>
                    <button class="dm-tab active">SEO</button>
                    <button class="dm-tab">Paid</button>
                    <button class="dm-tab">Social</button>
                    <button class="dm-tab">Content</button>
                    <button class="dm-tab">Lifecycle</button>
                </div>

                <div class="space-y-4">
                    {{-- SEO --}}
                    <article class="dm-panel rounded-2xl border border-slate-200 bg-white/80 p-6 shadow-sm">
                        <header class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-sky-100 text-sky-600 text-xs font-semibold">SEO</span>
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900">Technical & product‑led SEO</h3>
                                    <p class="text-xs text-slate-500">Architecture, speed, schema, content systems.</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-sky-50 px-2.5 py-1 text-[11px] font-medium text-sky-700">+186% organic / 6 mo</span>
                        </header>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-[11px] text-slate-600">
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Technical audits & migration support</li>
                                <li>Topic clusters & intent mapping</li>
                                <li>Search‑led content roadmaps</li>
                            </ul>
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>On‑page & internal linking systems</li>
                                <li>Schema & rich results playbooks</li>
                                <li>Bespoke reporting in GA4 / Looker</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Paid --}}
                    <article class="dm-panel hidden rounded-2xl border border-slate-200 bg-white/80 p-6 shadow-sm">
                        <header class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-orange-100 text-orange-600 text-xs font-semibold">Paid</span>
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900">Multi‑channel performance media</h3>
                                    <p class="text-xs text-slate-500">Google, Meta, LinkedIn, programmatic.</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-orange-50 px-2.5 py-1 text-[11px] font-medium text-orange-700">5.2× blended ROAS</span>
                        </header>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-[11px] text-slate-600">
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Account structure & naming conventions</li>
                                <li>Creative & messaging sprints</li>
                                <li>Bid strategies & budget pacing</li>
                            </ul>
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Lookalike & intent audience design</li>
                                <li>Landing tests wired to analytics</li>
                                <li>Weekly experiment backlog</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Social --}}
                    <article class="dm-panel hidden rounded-2xl border border-slate-200 bg-white/80 p-6 shadow-sm">
                        <header class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-900 text-slate-100 text-xs font-semibold">Social</span>
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900">Organic + paid social systems</h3>
                                    <p class="text-xs text-slate-500">LinkedIn, Instagram, TikTok, X.</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-slate-900 px-2.5 py-1 text-[11px] font-medium text-slate-100">+72% follower QoQ</span>
                        </header>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-[11px] text-slate-600">
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Content pillars & posting cadence</li>
                                <li>Creator & UGC workflows</li>
                                <li>Brand safety guardrails</li>
                            </ul>
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Signal‑based boosting rules</li>
                                <li>Lead‑gen & pipeline tie‑ins</li>
                                <li>Community & DM frameworks</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Content --}}
                    <article class="dm-panel hidden rounded-2xl border border-slate-200 bg-white/80 p-6 shadow-sm">
                        <header class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-violet-100 text-violet-700 text-xs font-semibold">Content</span>
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900">Editorial & programmatic content</h3>
                                    <p class="text-xs text-slate-500">Blogs, resources, landing frameworks.</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-violet-50 px-2.5 py-1 text-[11px] font-medium text-violet-700">SERP + brand lift</span>
                        </header>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-[11px] text-slate-600">
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Editorial calendars & briefs</li>
                                <li>Design systems for visuals</li>
                                <li>Review & approval workflows</li>
                            </ul>
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Programmatic page generation</li>
                                <li>Topic → funnel mapping</li>
                                <li>Content performance dashboards</li>
                            </ul>
                        </div>
                    </article>

                    {{-- Lifecycle --}}
                    <article class="dm-panel hidden rounded-2xl border border-slate-200 bg-white/80 p-6 shadow-sm">
                        <header class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3">
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-100 text-emerald-700 text-xs font-semibold">Lifecycle</span>
                                <div>
                                    <h3 class="text-sm font-semibold text-slate-900">Email, CRM & in‑product</h3>
                                    <p class="text-xs text-slate-500">Onboarding, nurture, win‑back, expansion.</p>
                                </div>
                            </div>
                            <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-medium text-emerald-700">+32% LTV</span>
                        </header>
                        <div class="mt-4 grid grid-cols-2 gap-4 text-[11px] text-slate-600">
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Lifecycle architecture & flows</li>
                                <li>Event & property tracking plans</li>
                                <li>Templates for each lifecycle stage</li>
                            </ul>
                            <ul class="space-y-1.5 list-disc list-inside">
                                <li>Playbooks for churn & win‑back</li>
                                <li>Experiments tied to revenue</li>
                                <li>Reporting per cohort / segment</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Process / timeline --}}
<section class="bg-slate-50 border-b border-slate-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-start">
            <div class="max-w-md space-y-4">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">How we work</p>
                <h2 class="text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900">
                    Productized, not rigid.
                </h2>
                <p class="text-sm text-slate-600">
                    Four clear phases, weekly async updates, and shared dashboards – formatted the way modern product teams expect.
                </p>
            </div>
            <ol class="flex-1 space-y-6 text-sm">
                <li class="flex gap-4">
                    <div class="mt-1 h-7 w-7 rounded-full bg-slate-900 text-slate-50 text-xs flex items-center justify-center">1</div>
                    <div>
                        <h3 class="font-semibold text-slate-900">Discovery & diagnostic</h3>
                        <p class="mt-1 text-slate-600 text-[13px]">
                            We audit channels, tracking, messaging and funnel. You get a loom walkthrough and a Notion doc with issues + opportunities.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="mt-1 h-7 w-7 rounded-full bg-slate-200 text-slate-900 text-xs flex items-center justify-center">2</div>
                    <div>
                        <h3 class="font-semibold text-slate-900">Roadmap & targets</h3>
                        <p class="mt-1 text-slate-600 text-[13px]">
                            We define a 90‑day experiment backlog, channel split and budget ranges. Everything lives in a shared board you can re‑prioritize with us.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="mt-1 h-7 w-7 rounded-full bg-slate-200 text-slate-900 text-xs flex items-center justify-center">3</div>
                    <div>
                        <h3 class="font-semibold text-slate-900">Build, ship, measure</h3>
                        <p class="mt-1 text-slate-600 text-[13px]">
                            We launch in 2‑3 sprints: tracking fixes, landing templates, creatives and flows. You get weekly async recaps, not endless calls.
                        </p>
                    </div>
                </li>
                <li class="flex gap-4">
                    <div class="mt-1 h-7 w-7 rounded-full bg-slate-200 text-slate-900 text-xs flex items-center justify-center">4</div>
                    <div>
                        <h3 class="font-semibold text-slate-900">Scale or switch focus</h3>
                        <p class="mt-1 text-slate-600 text-[13px]">
                            Once a motion works, we scale it and move to the next constraint – new segment, geography or product line.
                        </p>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</section>

{{-- Simple FAQ --}}
<section class="bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <div class="max-w-2xl mb-8">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">FAQ</p>
            <h2 class="mt-2 text-2xl sm:text-3xl font-semibold tracking-tight text-slate-900">A few things founders ask us.</h2>
        </div>
        <div class="space-y-3 text-sm" id="dm-faq">
            <details class="group rounded-xl border border-slate-200 bg-slate-50/60 px-4 py-3 open:bg-slate-50">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-slate-900">
                    <span>How fast can we start?</span>
                    <span class="text-xs text-slate-500 group-open:rotate-90 transition-transform">›</span>
                </summary>
                <p class="mt-2 text-[13px] text-slate-600">
                    Typically 7–10 business days from signed scope to first campaigns live, assuming we have access to your tools and analytics.
                </p>
            </details>
            <details class="group rounded-xl border border-slate-200 bg-slate-50/60 px-4 py-3 open:bg-slate-50">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-slate-900">
                    <span>Do you work as an extension of our team?</span>
                    <span class="text-xs text-slate-500 group-open:rotate-90 transition-transform">›</span>
                </summary>
                <p class="mt-2 text-[13px] text-slate-600">
                    Yes. We plug into your Slack, PM tool and analytics stack. You get a dedicated lead plus specialists per channel.
                </p>
            </details>
            <details class="group rounded-xl border border-slate-200 bg-slate-50/60 px-4 py-3 open:bg-slate-50">
                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-slate-900">
                    <span>What does pricing look like?</span>
                    <span class="text-xs text-slate-500 group-open:rotate-90 transition-transform">›</span>
                </summary>
                <p class="mt-2 text-[13px] text-slate-600">
                    We usually work on a flat monthly retainer scoped around your channels + an optional performance component for paid media.
                </p>
            </details>
        </div>
    </div>
</section>

{{-- CTA – compact --}}
<section class="bg-slate-950 text-slate-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14 lg:py-16 flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
        <div>
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Next step</p>
            <h2 class="mt-2 text-2xl font-semibold tracking-tight">Share your numbers, we’ll share a plan.</h2>
            <p class="mt-2 text-sm text-slate-300 max-w-lg">
                Send us access to read‑only analytics and ad accounts. We’ll come back with a 90‑day growth canvas – no obligation.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
            <a href="{{ route('contact_us') }}" class="inline-flex items-center justify-center rounded-lg bg-slate-50 px-5 py-2.5 text-sm font-medium text-slate-900 shadow-sm hover:bg-white">
                Request free growth canvas
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Simple "tab" behaviour for channel mix
document.addEventListener('DOMContentLoaded', () => {
    const tabsContainer = document.querySelector('[data-dm-tabs]');
    if (!tabsContainer) return;

    const tabs = Array.from(tabsContainer.querySelectorAll('.dm-tab'));
    const panels = Array.from(document.querySelectorAll('.dm-panel'));

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.add('hidden'));
            tab.classList.add('active');
            if (panels[index]) panels[index].classList.remove('hidden');
        });
    });

    // Scroll reveal – subtle
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document
        .querySelectorAll('.scroll-reveal, .scroll-reveal-delay-1, .scroll-reveal-delay-2, .scroll-reveal-delay-3')
        .forEach(el => revealObserver.observe(el));
});
</script>
<style>
/* Tabs */
[data-dm-tabs] .dm-tab {
    @apply whitespace-nowrap rounded-full px-3 py-1.5 text-xs text-slate-500 transition;
}
[data-dm-tabs] .dm-tab.active {
    @apply bg-white text-slate-900 shadow-sm;
}

/* Reveal */
.scroll-reveal,
.scroll-reveal-delay-1,
.scroll-reveal-delay-2,
.scroll-reveal-delay-3 {
    opacity: 0;
    transform: translateY(16px);
    transition: opacity .4s ease-out, transform .4s ease-out;
}
.scroll-reveal-delay-1 { transition-delay: .08s; }
.scroll-reveal-delay-2 { transition-delay: .16s; }
.scroll-reveal-delay-3 { transition-delay: .24s; }
.scroll-reveal.is-visible,
.scroll-reveal-delay-1.is-visible,
.scroll-reveal-delay-2.is-visible,
.scroll-reveal-delay-3.is-visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endpush