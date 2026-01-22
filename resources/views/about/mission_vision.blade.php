{{-- resources/views/components/mission-vision.blade.php --}}
<section class="relative bg-white py-16 sm:py-24 lg:py-32 overflow-hidden">
    
    {{-- Subtle Background Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 -right-40 w-80 h-80 bg-blue-100 rounded-full blur-3xl opacity-60"></div>
        <div class="absolute bottom-20 -left-40 w-80 h-80 bg-orange-100 rounded-full blur-3xl opacity-60"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center mb-16 sm:mb-20 lg:mb-24">
            <div class="inline-block mb-4">
                <span class="text-blue-600 text-sm font-bold uppercase tracking-widest">What Drives Us</span>
            </div>
            <h2 class="text-4xl sm:text-5xl lg:text-7xl font-black text-slate-900 mb-4 leading-tight">
                Our Purpose & Direction
            </h2>
            <div class="w-24 h-1.5 bg-blue-600 mx-auto rounded-full"></div>
        </div>
        
        {{-- Vision & Mission - Unique Diagonal Split Layout --}}
        <div class="relative mb-20 sm:mb-28">
            <div class="grid lg:grid-cols-2 gap-0">
                
                {{-- Vision - Left Side with Diagonal Cut --}}
                <div class="relative bg-blue-50 lg:clip-diagonal-right overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-100/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative p-8 sm:p-12 lg:p-16 lg:pr-20">
                        {{-- Number Badge --}}
                        <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
                            <span class="text-2xl font-black text-blue-600">01</span>
                        </div>
                        
                        {{-- Content --}}
                        <div class="max-w-xl">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Vision Statement</span>
                                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900">Our Vision</h3>
                                </div>
                            </div>
                            
                            <div class="h-1 w-20 bg-blue-600 rounded-full mb-6"></div>
                            
                            <p class="text-slate-700 text-lg leading-relaxed mb-8">
                                Our goal is to <strong class="text-slate-900">enable organizations to leverage innovation</strong>, transform digital landscapes, and <strong class="text-slate-900">unlock opportunities for lasting success</strong> through adaptability and continuous learning.
                            </p>
                            
                            {{-- Key Points as Pills --}}
                            <div class="flex flex-wrap gap-3">
                                <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-sm font-semibold text-slate-900">Innovation</span>
                                </div>
                                <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-sm font-semibold text-slate-900">Transform</span>
                                </div>
                                <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm">
                                    <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                    <span class="text-sm font-semibold text-slate-900">Adapt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Mission - Right Side with Diagonal Cut --}}
                <div class="relative bg-orange-50 lg:clip-diagonal-left overflow-hidden group lg:mt-12">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-100/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative p-8 sm:p-12 lg:p-16 lg:pl-20">
                        {{-- Number Badge --}}
                        <div class="absolute top-8 left-8 lg:left-auto lg:right-8 w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
                            <span class="text-2xl font-black text-orange-600">02</span>
                        </div>
                        
                        {{-- Content --}}
                        <div class="max-w-xl lg:ml-auto">
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-xs font-semibold text-orange-600 uppercase tracking-wider mb-1">Mission Statement</span>
                                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900">Our Mission</h3>
                                </div>
                            </div>
                            
                            <div class="h-1 w-20 bg-orange-600 rounded-full mb-6"></div>
                            
                            <p class="text-slate-700 text-lg leading-relaxed mb-8">
                                We aim to <strong class="text-slate-900">empower businesses through cutting-edge solutions</strong> that increase efficiency and encourage growth. We believe in <strong class="text-slate-900">cultivating lasting partnerships</strong> grounded in integrity, creativity, and excellence.
                            </p>
                            
                            {{-- Core Values as List --}}
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-5 h-5 bg-orange-600 rounded-full flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-900">Integrity • Creativity • Excellence</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-5 h-5 bg-orange-600 rounded-full flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-semibold text-slate-900">Growth • Partnership • Quality</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Core Principles - Horizontal Scroll on Mobile --}}
        <div class="relative">
            <div class="text-center mb-12">
                <h3 class="text-3xl sm:text-4xl font-black text-slate-900 mb-3">Core Principles</h3>
                <div class="w-16 h-1 bg-slate-900 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                {{-- Principle 1 --}}
                <div class="group relative bg-slate-50 rounded-2xl p-8 border-2 border-slate-200 hover:border-blue-600 hover:shadow-xl transition-all duration-300">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">Innovation</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Driven solutions that push boundaries</p>
                    </div>
                </div>
                
                {{-- Principle 2 --}}
                <div class="group relative bg-slate-50 rounded-2xl p-8 border-2 border-slate-200 hover:border-orange-600 hover:shadow-xl transition-all duration-300">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-orange-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">Growth</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Focused approach for continuous improvement</p>
                    </div>
                </div>
                
                {{-- Principle 3 --}}
                <div class="group relative bg-slate-50 rounded-2xl p-8 border-2 border-slate-200 hover:border-purple-600 hover:shadow-xl transition-all duration-300">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">Partnership</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Building lasting and meaningful relationships</p>
                    </div>
                </div>
                
                {{-- Principle 4 --}}
                <div class="group relative bg-slate-50 rounded-2xl p-8 border-2 border-slate-200 hover:border-green-600 hover:shadow-xl transition-all duration-300">
                    <div class="absolute -top-4 left-8 w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-xl font-black text-slate-900 mb-2">Quality</h4>
                        <p class="text-sm text-slate-600 leading-relaxed">Excellence assured in every interaction</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Custom Clip Path for Diagonal Effect (Desktop Only) --}}
<style>
    @media (min-width: 1024px) {
        .lg\:clip-diagonal-right {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
        }
        
        .lg\:clip-diagonal-left {
            clip-path: polygon(5% 0, 100% 0, 100% 100%, 0 100%);
        }
    }
</style>
