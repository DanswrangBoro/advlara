{{-- resources/views/components/services.blade.php --}}
<section class="relative min-h-screen bg-gradient-to-br from-blue-50 via-white to-orange-50 overflow-hidden"
         x-data="{ 
             scrollY: 0,
             sectionTop: 0,
             sectionProgress: 0,
             activeService: null
         }"
         x-init="
             const section = $el;
             window.addEventListener('scroll', () => {
                 scrollY = window.pageYOffset;
                 sectionTop = section.offsetTop;
                 const sectionHeight = section.offsetHeight;
                 const viewportHeight = window.innerHeight;
                 const scrolled = scrollY - sectionTop + viewportHeight;
                 sectionProgress = Math.max(0, Math.min(1, scrolled / (sectionHeight + viewportHeight)));
             });
         ">
    
    {{-- Light Background Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[400px] sm:w-[500px] lg:w-[600px] h-[400px] sm:h-[500px] lg:h-[600px] bg-gradient-to-br from-blue-200/40 to-blue-300/20 rounded-full blur-3xl"
             :style="`transform: translate(${sectionProgress * 250}px, ${sectionProgress * -180}px)`"></div>
        <div class="absolute bottom-0 left-0 w-[350px] sm:w-[450px] lg:w-[500px] h-[350px] sm:h-[450px] lg:h-[500px] bg-gradient-to-br from-orange-200/40 to-orange-300/20 rounded-full blur-3xl"
             :style="`transform: translate(${sectionProgress * -200}px, ${sectionProgress * 130}px)`"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-24">
        
        {{-- Responsive Header --}}
        <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12 items-end mb-12 sm:mb-16 lg:mb-24">
            <div>
                <span class="text-orange-600 text-xs sm:text-sm font-bold uppercase tracking-widest block mb-3 sm:mb-4 lg:mb-6">Our Services</span>
                <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-slate-900 leading-none">
                    What We<br/>
                    <span class="bg-gradient-to-r from-blue-600 to-blue-800 bg-clip-text text-transparent">Deliver</span>
                </h2>
            </div>
            
            <div>
                <p class="text-slate-700 text-base sm:text-lg lg:text-xl leading-relaxed">
                    Innovative solutions powered by cutting-edge technology to transform your business operations
                </p>
            </div>
        </div>
        
        {{-- Services List --}}
        <div class="space-y-6 sm:space-y-8 lg:space-y-12">
            
            {{-- Service 1: Cloud Computing --}}
            <div @mouseenter="activeService = 1"
                 @mouseleave="activeService = null"
                 @click="activeService = activeService === 1 ? null : 1"
                 class="relative group cursor-pointer">
                
                <div class="relative grid lg:grid-cols-12 gap-4 sm:gap-6 lg:gap-8 items-center"
                     :style="`transform: translateX(${window.innerWidth >= 1024 ? (scrollY - sectionTop) * 0.08 : 0}px)`">
                    
                    {{-- Large Number - Hidden on mobile --}}
                    <div class="hidden sm:block lg:col-span-2 relative">
                        <div class="text-6xl sm:text-7xl lg:text-[8rem] font-black leading-none"
                             :style="`background: linear-gradient(135deg, rgba(59, 130, 246, ${activeService === 1 ? 0.25 : 0.08}), rgba(59, 130, 246, 0.02)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; transition: all 0.5s`">
                            01
                        </div>
                    </div>
                    
                    {{-- Content Card --}}
                    <div class="lg:col-span-7 relative">
                        <div class="bg-white/80 backdrop-blur-xl border-l-4 border-blue-600 rounded-r-2xl p-5 sm:p-6 lg:p-8 shadow-lg transition-all duration-500"
                             :class="activeService === 1 ? 'border-l-6 sm:border-l-8 shadow-2xl shadow-blue-600/20 scale-[1.02] sm:scale-105' : ''">
                            
                            <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">
                                {{-- Mobile number badge --}}
                                <div class="sm:hidden w-10 h-10 bg-blue-600/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-600 text-lg font-black">01</span>
                                </div>
                                
                                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 leading-tight">Cloud Computing</h3>
                            </div>
                            
                            <p class="text-slate-700 text-sm sm:text-base lg:text-lg leading-relaxed">
                                Cloud computing transforms businesses by increasing efficiency, enabling scalability, and encouraging innovation.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Tag --}}
                    <div class="lg:col-span-3 flex justify-start lg:justify-end">
                        <div class="px-4 sm:px-5 lg:px-6 py-2 sm:py-2.5 lg:py-3 bg-blue-100 border-2 border-blue-200 rounded-full">
                            <span class="text-blue-700 font-bold text-xs sm:text-sm">Infrastructure</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 2: AI & ML --}}
            <div @mouseenter="activeService = 2"
                 @mouseleave="activeService = null"
                 @click="activeService = activeService === 2 ? null : 2"
                 class="relative group cursor-pointer">
                
                <div class="relative grid lg:grid-cols-12 gap-4 sm:gap-6 lg:gap-8 items-center"
                     :style="`transform: translateX(${window.innerWidth >= 1024 ? (scrollY - sectionTop - 300) * -0.08 : 0}px)`">
                    
                    {{-- Tag --}}
                    <div class="lg:col-span-3 lg:order-1 order-3 flex justify-start lg:justify-start">
                        <div class="px-4 sm:px-5 lg:px-6 py-2 sm:py-2.5 lg:py-3 bg-orange-100 border-2 border-orange-200 rounded-full">
                            <span class="text-orange-700 font-bold text-xs sm:text-sm">Intelligence</span>
                        </div>
                    </div>
                    
                    {{-- Content Card --}}
                    <div class="lg:col-span-7 lg:order-2 order-2 relative">
                        <div class="bg-white/80 backdrop-blur-xl border-r-4 lg:border-r-4 border-l-4 lg:border-l-0 border-orange-600 rounded-2xl lg:rounded-l-2xl lg:rounded-r-none p-5 sm:p-6 lg:p-8 shadow-lg transition-all duration-500"
                             :class="activeService === 2 ? 'border-r-6 sm:border-r-8 shadow-2xl shadow-orange-600/20 scale-[1.02] sm:scale-105' : ''">
                            
                            <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-row lg:flex-row-reverse lg:justify-end">
                                {{-- Mobile number badge --}}
                                <div class="sm:hidden w-10 h-10 bg-orange-600/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-600 text-lg font-black">02</span>
                                </div>
                                
                                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0 lg:order-2">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 lg:order-1 leading-tight">AI & Machine Learning</h3>
                            </div>
                            
                            <p class="text-slate-700 text-sm sm:text-base lg:text-lg leading-relaxed text-left lg:text-right">
                                Boosts business growth through smarter decisions, automation, and personalized experiences.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Large Number --}}
                    <div class="hidden sm:block lg:col-span-2 lg:order-3 order-1 text-right">
                        <div class="text-6xl sm:text-7xl lg:text-[8rem] font-black leading-none"
                             :style="`background: linear-gradient(135deg, rgba(249, 115, 22, ${activeService === 2 ? 0.25 : 0.08}), rgba(249, 115, 22, 0.02)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; transition: all 0.5s`">
                            02
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 3: Data Analytics --}}
            <div @mouseenter="activeService = 3"
                 @mouseleave="activeService = null"
                 @click="activeService = activeService === 3 ? null : 3"
                 class="relative group cursor-pointer">
                
                <div class="relative grid lg:grid-cols-12 gap-4 sm:gap-6 lg:gap-8 items-center"
                     :style="`transform: translateX(${window.innerWidth >= 1024 ? (scrollY - sectionTop - 600) * 0.08 : 0}px)`">
                    
                    <div class="hidden sm:block lg:col-span-2 relative">
                        <div class="text-6xl sm:text-7xl lg:text-[8rem] font-black leading-none"
                             :style="`background: linear-gradient(135deg, rgba(96, 165, 250, ${activeService === 3 ? 0.25 : 0.08}), rgba(96, 165, 250, 0.02)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; transition: all 0.5s`">
                            03
                        </div>
                    </div>
                    
                    <div class="lg:col-span-7 relative">
                        <div class="bg-white/80 backdrop-blur-xl border-l-4 border-blue-500 rounded-r-2xl p-5 sm:p-6 lg:p-8 shadow-lg transition-all duration-500"
                             :class="activeService === 3 ? 'border-l-6 sm:border-l-8 shadow-2xl shadow-blue-500/20 scale-[1.02] sm:scale-105' : ''">
                            
                            <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4">
                                <div class="sm:hidden w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-blue-500 text-lg font-black">03</span>
                                </div>
                                
                                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 leading-tight">Data Analytics & BI</h3>
                            </div>
                            
                            <p class="text-slate-700 text-sm sm:text-base lg:text-lg leading-relaxed">
                                Enables informed business decisions through actionable insights and data-driven approaches.
                            </p>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 flex justify-start lg:justify-end">
                        <div class="px-4 sm:px-5 lg:px-6 py-2 sm:py-2.5 lg:py-3 bg-blue-100 border-2 border-blue-200 rounded-full">
                            <span class="text-blue-700 font-bold text-xs sm:text-sm">Insights</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Service 4: SaaS --}}
            <div @mouseenter="activeService = 4"
                 @mouseleave="activeService = null"
                 @click="activeService = activeService === 4 ? null : 4"
                 class="relative group cursor-pointer">
                
                <div class="relative grid lg:grid-cols-12 gap-4 sm:gap-6 lg:gap-8 items-center"
                     :style="`transform: translateX(${window.innerWidth >= 1024 ? (scrollY - sectionTop - 900) * -0.08 : 0}px)`">
                    
                    <div class="lg:col-span-3 lg:order-1 order-3 flex justify-start lg:justify-start">
                        <div class="px-4 sm:px-5 lg:px-6 py-2 sm:py-2.5 lg:py-3 bg-orange-100 border-2 border-orange-200 rounded-full">
                            <span class="text-orange-700 font-bold text-xs sm:text-sm">Platform</span>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-7 lg:order-2 order-2 relative">
                        <div class="bg-white/80 backdrop-blur-xl border-r-4 lg:border-r-4 border-l-4 lg:border-l-0 border-orange-500 rounded-2xl lg:rounded-l-2xl lg:rounded-r-none p-5 sm:p-6 lg:p-8 shadow-lg transition-all duration-500"
                             :class="activeService === 4 ? 'border-r-6 sm:border-r-8 shadow-2xl shadow-orange-500/20 scale-[1.02] sm:scale-105' : ''">
                            
                            <div class="flex items-center gap-3 sm:gap-4 mb-3 sm:mb-4 flex-row lg:flex-row-reverse lg:justify-end">
                                <div class="sm:hidden w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <span class="text-orange-500 text-lg font-black">04</span>
                                </div>
                                
                                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center shadow-lg flex-shrink-0 lg:order-2">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl sm:text-2xl lg:text-3xl font-black text-slate-900 lg:order-1 leading-tight">SaaS Solutions</h3>
                            </div>
                            
                            <p class="text-slate-700 text-sm sm:text-base lg:text-lg leading-relaxed text-left lg:text-right">
                                Creating scalable and efficient SaaS-based business solutions based on operational challenges.
                            </p>
                        </div>
                    </div>
                    
                    <div class="hidden sm:block lg:col-span-2 lg:order-3 order-1 text-right">
                        <div class="text-6xl sm:text-7xl lg:text-[8rem] font-black leading-none"
                             :style="`background: linear-gradient(135deg, rgba(251, 146, 60, ${activeService === 4 ? 0.25 : 0.08}), rgba(251, 146, 60, 0.02)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; transition: all 0.5s`">
                            04
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
