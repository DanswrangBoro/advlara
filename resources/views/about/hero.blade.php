{{-- resources/views/components/about-hero.blade.php --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900"
         x-data="{ scrollY: 0 }"
         x-init="window.addEventListener('scroll', () => scrollY = window.pageYOffset)">
    
    {{-- Animated Grid Background --}}
    <div class="absolute inset-0 opacity-20" 
         :style="`transform: translateY(${scrollY * 0.5}px)`">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>
    
    {{-- Gradient Orbs --}}
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 -left-20 sm:top-20 sm:-left-40 w-48 h-48 sm:w-96 sm:h-96 bg-blue-500/30 rounded-full blur-3xl animate-pulse"
             :style="`transform: translate(${scrollY * -0.2}px, ${scrollY * 0.3}px)`"></div>
        <div class="absolute bottom-10 -right-20 sm:bottom-20 sm:-right-40 w-48 h-48 sm:w-96 sm:h-96 bg-orange-500/30 rounded-full blur-3xl animate-pulse" 
             style="animation-delay: 1.5s"
             :style="`transform: translate(${scrollY * 0.15}px, ${scrollY * -0.25}px)`"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 sm:w-72 sm:h-72 bg-purple-500/20 rounded-full blur-3xl animate-pulse" 
             style="animation-delay: 3s"
             :style="`transform: translate(-50%, -50%) translateY(${scrollY * -0.2}px) scale(${1 + scrollY * 0.0005})`"></div>
    </div>
    
    {{-- Floating Technical Elements - Reduced on Mobile --}}
    <div class="absolute inset-0 pointer-events-none hidden sm:block">
        <div class="absolute top-32 left-20 text-orange-400/40 text-3xl sm:text-5xl font-bold animate-float" 
             :style="`transform: translateY(${scrollY * 0.2}px) rotate(${scrollY * 0.05}deg)`">
            {'{ }'}
        </div>
        
        <div class="absolute top-60 right-32 text-blue-400/40 text-2xl sm:text-4xl font-mono animate-float" 
             style="animation-delay: 1s" 
             :style="`transform: translateY(${scrollY * -0.15}px) rotate(${scrollY * -0.03}deg)`">
            &lt;/&gt;
        </div>
        
        <div class="absolute bottom-40 left-1/4 text-purple-400/40 text-2xl sm:text-4xl font-mono animate-float" 
             style="animation-delay: 2s" 
             :style="`transform: translateY(${scrollY * 0.25}px) translateX(${scrollY * -0.1}px)`">
            =&gt;
        </div>
        
        <div class="absolute bottom-32 right-1/4 text-green-400/40 text-xl sm:text-3xl font-mono animate-float" 
             style="animation-delay: 0.5s" 
             :style="`transform: translateY(${scrollY * -0.18}px) translateX(${scrollY * 0.08}px)`">
            $_
        </div>
        
        <div class="absolute top-1/3 right-1/4 animate-float" 
             style="animation-delay: 1.5s" 
             :style="`transform: translateY(${scrollY * 0.12}px) rotate(${scrollY * -0.02}deg) scale(${1 - scrollY * 0.0003})`">
            <svg class="w-8 h-8 sm:w-12 sm:h-12 text-orange-400/30" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21.007 8.222A3.738 3.738 0 0 0 15.045 5.2a3.737 3.737 0 0 0 1.156 6.583 2.988 2.988 0 0 1-2.668 1.67h-2.99a4.456 4.456 0 0 0-2.989 1.165V7.4a3.737 3.737 0 1 0-1.494 0v9.117a3.776 3.776 0 1 0 1.816.099 2.99 2.99 0 0 1 2.668-1.667h2.99a4.484 4.484 0 0 0 4.223-3.039 3.736 3.736 0 0 0 3.25-3.687zM4.565 3.738a2.242 2.242 0 1 1 4.484 0 2.242 2.242 0 0 1-4.484 0zm4.484 16.441a2.242 2.242 0 1 1-4.484 0 2.242 2.242 0 0 1 4.484 0zm8.221-9.715a2.242 2.242 0 1 1 0-4.485 2.242 2.242 0 0 1 0 4.485z"/>
            </svg>
        </div>
        
        <div class="absolute top-1/2 left-10 text-blue-300/30 text-lg sm:text-2xl font-bold animate-float" 
             style="animation-delay: 2.5s" 
             :style="`transform: translateY(${scrollY * -0.22}px) translateX(${scrollY * 0.05}px)`">
            API
        </div>
        
        <div class="absolute bottom-1/4 right-20 animate-float" 
             style="animation-delay: 3s" 
             :style="`transform: translateY(${scrollY * 0.18}px) scale(${1 + scrollY * 0.0002})`">
            <svg class="w-8 h-8 sm:w-10 sm:h-10 text-purple-400/30" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3C7.58 3 4 4.79 4 7s3.58 4 8 4 8-1.79 8-4-3.58-4-8-4zM4 9v3c0 2.21 3.58 4 8 4s8-1.79 8-4V9c0 2.21-3.58 4-8 4s-8-1.79-8-4zm0 5v3c0 2.21 3.58 4 8 4s8-1.79 8-4v-3c0 2.21-3.58 4-8 4s-8-1.79-8-4z"/>
            </svg>
        </div>
    </div>
    
    {{-- Main Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 w-full">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-8 items-center">
            
            {{-- LEFT: Content --}}
            <div class="lg:col-span-7 text-white space-y-4 sm:space-y-6"
                 x-data="{ 
                     show: false,
                     years: 0,
                     clients: 0,
                     projects: 0
                 }"
                 x-init="
                     setTimeout(() => show = true, 100);
                     const observer = new IntersectionObserver((entries) => {
                         entries.forEach(entry => {
                             if (entry.isIntersecting) {
                                 let y = 0, c = 0, p = 0;
                                 const yearInt = setInterval(() => {
                                     if (y < 10) years = ++y;
                                     else clearInterval(yearInt);
                                 }, 100);
                                 const clientInt = setInterval(() => {
                                     if (c < 300) clients = c += 15;
                                     else clearInterval(clientInt);
                                 }, 30);
                                 const projectInt = setInterval(() => {
                                     if (p < 500) projects = p += 25;
                                     else clearInterval(projectInt);
                                 }, 20);
                             }
                         });
                     });
                     observer.observe($el);
                 ">
                
                {{-- ISO Badge --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 -translate-x-8 scale-90"
                     x-transition:enter-end="opacity-100 translate-x-0 scale-100">
                    <div class="inline-flex items-center gap-2 sm:gap-2.5 bg-gradient-to-r from-orange-500/10 to-blue-500/10 backdrop-blur-xl border border-orange-500/30 rounded-xl sm:rounded-2xl px-3 py-2 sm:px-4 sm:py-2.5 hover:border-orange-500/60 transition-all duration-500 group">
                        <div class="relative">
                            <div class="absolute inset-0 bg-orange-500/50 blur-lg rounded-lg group-hover:bg-orange-500/80 transition-all"></div>
                            <div class="relative bg-white rounded-lg sm:rounded-xl p-1 sm:p-1.5 shadow-lg">
                                <img src="{{ asset('images/iso3.png') }}" alt="ISO Certified" class="h-5 sm:h-7 w-auto">
                            </div>
                        </div>
                        <div>
                            <span class="text-[10px] sm:text-xs font-black text-white block tracking-wide">ISO CERTIFIED</span>
                            <span class="text-[9px] sm:text-[10px] text-orange-300 font-medium">Excellence Standards</span>
                        </div>
                    </div>
                </div>
                
                {{-- Main Heading --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-100"
                     x-transition:enter-start="opacity-0 -translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="space-y-2 sm:space-y-3">
                    <div class="inline-block">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-none tracking-tight">
                            <span class="block text-white">We Build</span>
                            <span class="block mt-1 sm:mt-2 bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 bg-clip-text text-transparent animate-gradient">
                                Digital Future
                            </span>
                        </h1>
                        <div class="flex items-center gap-1.5 sm:gap-2 mt-3 sm:mt-4">
                            <div class="h-1 sm:h-1.5 w-12 sm:w-16 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full"></div>
                            <div class="h-1 sm:h-1.5 w-8 sm:w-10 bg-gradient-to-r from-orange-500/70 to-orange-600/70 rounded-full"></div>
                            <div class="h-1 sm:h-1.5 w-4 sm:w-6 bg-gradient-to-r from-orange-500/40 to-orange-600/40 rounded-full"></div>
                        </div>
                    </div>
                </div>
                
                {{-- Tagline --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-200"
                     x-transition:enter-start="opacity-0 -translate-x-8"
                     x-transition:enter-end="opacity-100 translate-x-0">
                    <p class="text-base sm:text-lg md:text-xl font-semibold text-blue-200/90 max-w-2xl leading-relaxed">
                        Transforming bold ideas into exceptional digital experiences through innovation, creativity, and cutting-edge technology
                    </p>
                </div>
                
                {{-- Animated Stats Grid --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-300"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="grid grid-cols-3 gap-2 sm:gap-3 pt-2 sm:pt-4">
                    
                    {{-- Stat 1 --}}
                    <div class="group relative overflow-hidden bg-gradient-to-br from-white/5 to-white/[0.02] backdrop-blur-sm border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-4 hover:border-orange-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/20">
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/0 to-orange-500/0 group-hover:from-orange-500/10 group-hover:to-transparent transition-all duration-500"></div>
                        <div class="relative">
                            <div class="text-2xl sm:text-4xl font-black bg-gradient-to-br from-orange-400 to-orange-600 bg-clip-text text-transparent mb-1 sm:mb-1.5" x-text="years + '+'"></div>
                            <div class="text-[9px] sm:text-[10px] text-slate-300 font-bold uppercase tracking-wider">Years</div>
                            <div class="text-[8px] sm:text-[10px] text-slate-400 font-medium">Experience</div>
                        </div>
                    </div>

                    {{-- Stat 2 --}}
                    <div class="group relative overflow-hidden bg-gradient-to-br from-white/5 to-white/[0.02] backdrop-blur-sm border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-4 hover:border-blue-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-500/0 group-hover:from-blue-500/10 group-hover:to-transparent transition-all duration-500"></div>
                        <div class="relative">
                            <div class="text-2xl sm:text-4xl font-black text-white mb-1 sm:mb-1.5" x-text="clients + '+'"></div>
                            <div class="text-[9px] sm:text-[10px] text-slate-300 font-bold uppercase tracking-wider">Happy</div>
                            <div class="text-[8px] sm:text-[10px] text-slate-400 font-medium">Clients</div>
                        </div>
                    </div>

                    {{-- Stat 3 --}}
                    <div class="group relative overflow-hidden bg-gradient-to-br from-white/5 to-white/[0.02] backdrop-blur-sm border border-white/10 rounded-xl sm:rounded-2xl p-3 sm:p-4 hover:border-purple-500/50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/0 to-purple-500/0 group-hover:from-purple-500/10 group-hover:to-transparent transition-all duration-500"></div>
                        <div class="relative">
                            <div class="text-2xl sm:text-4xl font-black bg-gradient-to-br from-purple-400 to-purple-600 bg-clip-text text-transparent mb-1 sm:mb-1.5" x-text="projects + '+'"></div>
                            <div class="text-[9px] sm:text-[10px] text-slate-300 font-bold uppercase tracking-wider">Projects</div>
                            <div class="text-[8px] sm:text-[10px] text-slate-400 font-medium">Delivered</div>
                        </div>
                    </div>
                </div>
                
                {{-- CTA Buttons --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-400"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="flex flex-wrap gap-2 sm:gap-3 pt-2 sm:pt-3">
                    
                    <a href="#services" class="group relative overflow-hidden inline-flex items-center px-5 py-2.5 sm:px-6 sm:py-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white text-xs sm:text-sm font-bold rounded-xl sm:rounded-2xl transition-all duration-500 hover:shadow-2xl hover:shadow-orange-500/50 hover:scale-105">
                        <span class="absolute inset-0 bg-gradient-to-r from-orange-600 to-orange-700 translate-y-full group-hover:translate-y-0 transition-transform duration-500"></span>
                        <span class="relative flex items-center gap-1.5 sm:gap-2">
                            <span>Explore Services</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                    
                    <a href="#contact" class="group relative overflow-hidden inline-flex items-center px-5 py-2.5 sm:px-6 sm:py-3 bg-white/5 backdrop-blur-md text-white text-xs sm:text-sm font-bold rounded-xl sm:rounded-2xl border-2 border-white/20 hover:bg-white hover:text-slate-900 transition-all duration-500 hover:scale-105 hover:border-white">
                        <span>Get In Touch</span>
                    </a>
                </div>
            </div>
            
            {{-- RIGHT: Stacked Cards - Desktop Only --}}
            <div class="lg:col-span-5 relative h-[650px] hidden lg:block"
                 x-data="{ 
                     show: false,
                     activeCard: 0
                 }"
                 x-init="
                     setTimeout(() => show = true, 300);
                     setInterval(() => {
                         activeCard = (activeCard + 1) % 3;
                     }, 4000);
                 ">
                
                {{-- Card 1: Innovation --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 scale-90 -translate-x-20"
                     x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                     :style="`transform: translateY(${scrollY * 0.18}px) translateX(${scrollY * -0.05}px)`"
                     class="absolute top-0 left-0 w-64 group cursor-pointer transition-all duration-700"
                     :class="{ 'z-50 scale-100 opacity-100': activeCard === 0, 'z-20 scale-95 opacity-70': activeCard !== 0 }"
                     @click="activeCard = 0">
                    <div class="relative overflow-hidden bg-gradient-to-br from-blue-500/10 to-blue-700/10 backdrop-blur-xl border border-blue-500/30 rounded-3xl p-6 transition-all duration-700 hover:scale-105 hover:border-blue-400/60 hover:shadow-2xl hover:shadow-blue-500/30"
                         :class="activeCard === 0 && 'border-blue-400/60 shadow-2xl shadow-blue-500/30 scale-105'">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/20 rounded-full blur-3xl group-hover:bg-blue-500/30 transition-all duration-700"></div>
                        
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-4 shadow-xl group-hover:rotate-12 transition-transform duration-700">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            
                            <h3 class="text-lg font-black text-white mb-2">Innovation</h3>
                            <p class="text-blue-200/80 leading-relaxed text-xs">Pioneering solutions that push boundaries and redefine digital possibilities</p>
                            
                            <div class="mt-4 flex items-center text-blue-300 font-semibold text-xs group-hover:text-blue-200 transition-colors">
                                <span>Learn More</span>
                                <svg class="w-3 h-3 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Excellence --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-100"
                     x-transition:enter-start="opacity-0 scale-90 translate-x-20"
                     x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                     :style="`transform: translateY(${scrollY * 0.12}px) translateX(${scrollY * 0.04}px)`"
                     class="absolute top-28 right-0 w-72 group cursor-pointer transition-all duration-700"
                     :class="{ 'z-50 scale-100 opacity-100': activeCard === 1, 'z-30 scale-95 opacity-70': activeCard !== 1 }"
                     @click="activeCard = 1">
                    <div class="relative overflow-hidden bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 rounded-3xl p-6 shadow-2xl transition-all duration-700 hover:scale-105 hover:shadow-orange-500/50"
                         :class="activeCard === 1 && 'shadow-orange-500/50 scale-105'">
                        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
                        
                        <div class="relative">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 shadow-xl group-hover:-rotate-12 transition-transform duration-700">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            
                            <h3 class="text-lg font-black text-white mb-2">Excellence</h3>
                            <p class="text-orange-50/90 leading-relaxed text-xs">Uncompromising quality and attention to detail in every project we deliver</p>
                            
                            <div class="mt-4 pt-4 border-t border-white/20">
                                <div class="flex items-center justify-between text-white">
                                    <span class="text-[10px] font-bold uppercase tracking-wider">Success Rate</span>
                                    <span class="text-lg font-black">99%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 3: Collaboration --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-200"
                     x-transition:enter-start="opacity-0 scale-90 -translate-x-20"
                     x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                     :style="`transform: translateY(${scrollY * 0.15}px) translateX(${scrollY * -0.03}px)`"
                     class="absolute bottom-16 left-8 w-64 group cursor-pointer transition-all duration-700"
                     :class="{ 'z-50 scale-100 opacity-100': activeCard === 2, 'z-20 scale-95 opacity-70': activeCard !== 2 }"
                     @click="activeCard = 2">
                    <div class="relative overflow-hidden bg-gradient-to-br from-purple-500/10 to-purple-700/10 backdrop-blur-xl border border-purple-500/30 rounded-3xl p-6 transition-all duration-700 hover:scale-105 hover:border-purple-400/60 hover:shadow-2xl hover:shadow-purple-500/30"
                         :class="activeCard === 2 && 'border-purple-400/60 shadow-2xl shadow-purple-500/30 scale-105'">
                        <div class="absolute bottom-0 left-0 w-28 h-28 bg-purple-500/20 rounded-full blur-3xl group-hover:bg-purple-500/30 transition-all duration-700"></div>
                        
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center mb-4 shadow-xl group-hover:rotate-12 transition-transform duration-700">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            
                            <h3 class="text-lg font-black text-white mb-2">Collaboration</h3>
                            <p class="text-purple-200/80 leading-relaxed text-xs">Working together to transform visions into reality through partnership</p>
                            
                            <div class="mt-4 flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-purple-900/50"></div>
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 border-2 border-purple-900/50"></div>
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-green-400 to-green-600 border-2 border-purple-900/50"></div>
                                <div class="w-8 h-8 rounded-full bg-purple-800/50 border-2 border-purple-900/50 flex items-center justify-center">
                                    <span class="text-white text-[10px] font-bold">10+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Navigation Indicators --}}
                <div class="absolute -right-6 top-1/2 -translate-y-1/2 flex flex-col gap-2 z-[60]">
                    <button @click="activeCard = 0" 
                            :class="activeCard === 0 ? 'h-7 bg-orange-500' : 'h-2 bg-white/30'"
                            class="w-1.5 rounded-full transition-all duration-300 hover:bg-orange-400"></button>
                    <button @click="activeCard = 1" 
                            :class="activeCard === 1 ? 'h-7 bg-orange-500' : 'h-2 bg-white/30'"
                            class="w-1.5 rounded-full transition-all duration-300 hover:bg-orange-400"></button>
                    <button @click="activeCard = 2" 
                            :class="activeCard === 2 ? 'h-7 bg-orange-500' : 'h-2 bg-white/30'"
                            class="w-1.5 rounded-full transition-all duration-300 hover:bg-orange-400"></button>
                </div>

                {{-- Tech Badge --}}
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000 delay-300"
                     x-transition:enter-start="opacity-0 scale-50"
                     x-transition:enter-end="opacity-100 scale-100"
                     :style="`transform: translateY(${scrollY * -0.1}px) scale(${1 - scrollY * 0.0002})`"
                     class="absolute bottom-0 right-0 w-48 group cursor-pointer z-25">
                    <div class="bg-gradient-to-br from-slate-800 to-slate-900 border border-slate-700 rounded-2xl p-4 shadow-2xl hover:scale-105 transition-all duration-500 hover:shadow-slate-500/30">
                        <div class="flex items-center gap-2 mb-2.5">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-slate-300 text-[10px] font-bold uppercase tracking-wider">Active Now</span>
                        </div>
                        <div class="text-white text-base font-black mb-0.5">24/7 Support</div>
                        <p class="text-slate-400 text-[10px]">Always here to help you succeed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-6 sm:bottom-10 left-1/2 -translate-x-1/2 z-20"
         x-data="{ bounce: true }"
         x-init="setInterval(() => bounce = !bounce, 2000)"
         :style="`opacity: ${1 - scrollY * 0.003}`">
        <div class="flex flex-col items-center gap-2 cursor-pointer group"
             :class="bounce && 'animate-bounce'">
            <span class="text-[9px] sm:text-[10px] text-slate-400 font-bold uppercase tracking-widest group-hover:text-orange-400 transition-colors">Scroll Down</span>
            <div class="relative">
                <div class="absolute inset-0 bg-orange-500/50 blur-xl rounded-full group-hover:bg-orange-500/80 transition-all"></div>
                <div class="relative w-6 h-10 sm:w-7 sm:h-11 border-2 border-white/40 rounded-full flex items-start justify-center p-1.5 group-hover:border-orange-400 transition-colors">
                    <div class="w-1 h-2 sm:h-2.5 bg-gradient-to-b from-orange-400 to-orange-600 rounded-full animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 3s ease infinite;
}
</style>
