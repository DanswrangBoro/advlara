{{-- resources/views/components/client-approach.blade.php --}}
<section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 overflow-hidden py-16 lg:py-24"
         x-data="{ 
             scrollY: 0,
             sectionProgress: 0,
             cards: [
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 }
             ],
             mouseX: 0,
             mouseY: 0
         }"
         x-init="
             const updateScroll = () => {
                 scrollY = window.pageYOffset;
                 const rect = $el.getBoundingClientRect();
                 const windowHeight = window.innerHeight;
                 
                 // Section progress
                 if (rect.top <= windowHeight && rect.bottom >= 0) {
                     const visible = Math.min(windowHeight, rect.bottom) - Math.max(0, rect.top);
                     sectionProgress = Math.max(0, Math.min(1, visible / windowHeight));
                 }
                 
                 // Individual card tracking
                 document.querySelectorAll('[data-card]').forEach((card, index) => {
                     const cardRect = card.getBoundingClientRect();
                     const cardTop = cardRect.top;
                     const cardBottom = cardRect.bottom;
                     
                     // Check if card is in viewport
                     if (cardTop < windowHeight && cardBottom > 0) {
                         cards[index].visible = true;
                         
                         // Calculate progress (0 to 1)
                         const cardCenter = cardTop + cardRect.height / 2;
                         const viewportCenter = windowHeight / 2;
                         const distance = Math.abs(viewportCenter - cardCenter);
                         cards[index].progress = Math.max(0, Math.min(1, 1 - (distance / windowHeight)));
                     } else if (cardBottom < 0) {
                         cards[index].visible = true;
                         cards[index].progress = 1;
                     }
                 });
             };
             
             window.addEventListener('scroll', updateScroll);
             window.addEventListener('resize', updateScroll);
             setTimeout(updateScroll, 100);
             updateScroll();
             
             window.addEventListener('mousemove', (e) => {
                 mouseX = (e.clientX / window.innerWidth - 0.5) * 20;
                 mouseY = (e.clientY / window.innerHeight - 0.5) * 20;
             });
         ">
    
    {{-- Scroll-Driven Background --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 right-1/4 w-[500px] h-[500px] bg-blue-500/20 rounded-full blur-3xl transition-all duration-300"
             :style="`transform: translate(${20 + sectionProgress * 100}px, ${-50 + sectionProgress * 150}px) translate(${mouseX * 2}px, ${mouseY * 2}px) scale(${1 + sectionProgress * 0.3})`"></div>
        <div class="absolute bottom-1/4 left-1/4 w-[400px] h-[400px] bg-orange-500/15 rounded-full blur-3xl transition-all duration-300"
             :style="`transform: translate(${-50 - sectionProgress * 100}px, ${50 - sectionProgress * 100}px) translate(${-mouseX * 2}px, ${-mouseY * 2}px) scale(${1 + sectionProgress * 0.2})`"></div>
        <div class="absolute top-1/2 left-1/2 w-[300px] h-[300px] bg-purple-500/10 rounded-full blur-3xl transition-all duration-300"
             :style="`transform: translate(-50%, -50%) translate(${mouseX * 3}px, ${mouseY * 3}px) rotate(${sectionProgress * 180}deg) scale(${0.8 + sectionProgress * 0.4})`"></div>
    </div>
    
    {{-- Animated Grid --}}
    <div class="absolute inset-0 transition-opacity duration-500"
         :style="`opacity: ${0.01 + sectionProgress * 0.02}`">
        <div class="absolute inset-0" style="background-image: 
            linear-gradient(rgba(255, 255, 255, 0.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.5) 1px, transparent 1px);
            background-size: 40px 40px;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Header with Parallax --}}
        <div class="text-center mb-12 lg:mb-16 transition-all duration-500"
             :style="`transform: translateY(${-sectionProgress * 50}px); opacity: ${1 - sectionProgress * 0.5}`">
            
            <div class="inline-flex items-center gap-3 mb-4">
                <div class="h-px bg-gradient-to-r from-transparent to-blue-400 transition-all duration-500"
                     :style="`width: ${32 + sectionProgress * 32}px`"></div>
                <span class="text-blue-400 text-xs font-bold uppercase tracking-widest">How We Work</span>
                <div class="h-px bg-gradient-to-l from-transparent to-blue-400 transition-all duration-500"
                     :style="`width: ${32 + sectionProgress * 32}px`"></div>
            </div>
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4 leading-tight">
                <div class="overflow-hidden">
                    <span class="inline-block transition-transform duration-500"
                          :style="`transform: translateY(${sectionProgress * 20}px)`">
                        Client-Centric
                    </span>
                </div>
                <div class="overflow-hidden">
                    <span class="inline-block bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 bg-clip-text text-transparent transition-transform duration-500"
                          :style="`transform: translateY(${-sectionProgress * 20}px)`">
                        Excellence
                    </span>
                </div>
            </h2>
            
            <p class="text-slate-400 text-sm lg:text-base max-w-xl mx-auto transition-opacity duration-500"
               :style="`opacity: ${1 - sectionProgress * 0.7}`">
                Three core principles driving our commitment to your success
            </p>
        </div>
        
        {{-- Bento Grid with Scroll Animations --}}
        <div class="grid lg:grid-cols-3 gap-4 lg:gap-6 max-w-6xl mx-auto">
            
            {{-- Card 1 --}}
            <div class="lg:col-span-2 group" 
                 data-card="0"
                 x-data="{ hover: false }"
                 @mouseenter="hover = true"
                 @mouseleave="hover = false">
                
                <div class="relative h-full bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 lg:p-8 overflow-hidden transition-all duration-700"
                     :style="`
                         opacity: ${cards[0].visible ? 1 : 0};
                         transform: translateY(${cards[0].visible ? 0 : 80}px) scale(${0.9 + cards[0].progress * 0.1});
                         border-color: rgba(96, 165, 250, ${0.1 + cards[0].progress * 0.3});
                     `"
                     :class="hover && 'shadow-2xl shadow-blue-500/20'">
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="flex-shrink-0 w-12 h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-500"
                                 :style="`transform: rotate(${cards[0].progress * 360}deg) scale(${hover ? 1.1 : 1})`">
                                <span class="text-white text-lg lg:text-xl font-black" :style="`transform: rotate(${-cards[0].progress * 360}deg)`">01</span>
                            </div>
                            
                            <div class="flex-1">
                                <h3 class="text-xl lg:text-2xl font-black text-white mb-2 group-hover:text-blue-300 transition-colors duration-300">
                                    Client-Centric Approach
                                </h3>
                                <div class="flex gap-1.5">
                                    <div class="h-1 bg-blue-500 rounded-full transition-all duration-700"
                                         :style="`width: ${10 + cards[0].progress * 30 + (hover ? 24 : 0)}px`"></div>
                                    <div class="h-1 w-6 bg-blue-500/60 rounded-full"></div>
                                    <div class="h-1 w-3 bg-blue-500/30 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 pl-0 lg:pl-[72px]"
                             :style="`opacity: ${0.4 + cards[0].progress * 0.6}`">
                            <p class="text-slate-300 text-sm lg:text-base leading-relaxed">
                                At Adventure Code, we <span class="text-white font-semibold">prioritize our client's objectives</span> by profoundly understanding their challenges, goals, and vision.
                            </p>
                            
                            <p class="text-slate-400 text-xs lg:text-sm leading-relaxed">
                                This enables us to develop specialized solutions that promote development and produce significant outcomes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Card 2 --}}
            <div class="lg:col-span-1 group"
                 data-card="1"
                 x-data="{ hover: false }"
                 @mouseenter="hover = true"
                 @mouseleave="hover = false">
                
                <div class="relative h-full bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 overflow-hidden transition-all duration-700"
                     :style="`
                         opacity: ${cards[1].visible ? 1 : 0};
                         transform: translateY(${cards[1].visible ? 0 : 80}px) scale(${0.9 + cards[1].progress * 0.1});
                         border-color: rgba(251, 146, 60, ${0.1 + cards[1].progress * 0.3});
                     `"
                     :class="hover && 'shadow-2xl shadow-orange-500/20'">
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 h-full flex flex-col">
                        <div class="mb-4">
                            <div class="w-12 h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-all duration-500"
                                 :style="`transform: rotate(${-cards[1].progress * 360}deg) scale(${hover ? 1.1 : 1})`">
                                <span class="text-white text-lg lg:text-xl font-black" :style="`transform: rotate(${cards[1].progress * 360}deg)`">02</span>
                            </div>
                            
                            <h3 class="text-xl lg:text-2xl font-black text-white mb-2 group-hover:text-orange-300 transition-colors duration-300">
                                Customized Solutions
                            </h3>
                            
                            <div class="flex gap-1.5">
                                <div class="h-1 bg-orange-500 rounded-full transition-all duration-700"
                                     :style="`width: ${10 + cards[1].progress * 30 + (hover ? 24 : 0)}px`"></div>
                                <div class="h-1 w-6 bg-orange-500/60 rounded-full"></div>
                                <div class="h-1 w-3 bg-orange-500/30 rounded-full"></div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 flex-1"
                             :style="`opacity: ${0.4 + cards[1].progress * 0.6}`">
                            <p class="text-slate-300 text-sm lg:text-base leading-relaxed">
                                We believe in the <span class="text-white font-semibold">value of customization</span>. Our professionals work directly with each client.
                            </p>
                            
                            <p class="text-slate-400 text-xs lg:text-sm leading-relaxed">
                                Strategies specific to their needs, providing the best possible results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Card 3 --}}
            <div class="lg:col-span-1 group"
                 data-card="2"
                 x-data="{ hover: false }"
                 @mouseenter="hover = true"
                 @mouseleave="hover = false">
                
                <div class="relative h-full bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 overflow-hidden transition-all duration-700"
                     :style="`
                         opacity: ${cards[2].visible ? 1 : 0};
                         transform: translateY(${cards[2].visible ? 0 : 80}px) scale(${0.9 + cards[2].progress * 0.1});
                         border-color: rgba(147, 197, 253, ${0.1 + cards[2].progress * 0.3});
                     `"
                     :class="hover && 'shadow-2xl shadow-blue-400/20'">
                    
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 h-full flex flex-col">
                        <div class="mb-4">
                            <div class="w-12 h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-blue-300 to-blue-500 rounded-xl flex items-center justify-center shadow-lg mb-4 group-hover:scale-110 transition-all duration-500"
                                 :style="`transform: rotate(${cards[2].progress * 360}deg) scale(${hover ? 1.1 : 1})`">
                                <span class="text-white text-lg lg:text-xl font-black" :style="`transform: rotate(${-cards[2].progress * 360}deg)`">03</span>
                            </div>
                            
                            <h3 class="text-xl lg:text-2xl font-black text-white mb-2 group-hover:text-blue-200 transition-colors duration-300">
                                Ongoing Support
                            </h3>
                            
                            <div class="flex gap-1.5">
                                <div class="h-1 bg-blue-400 rounded-full transition-all duration-700"
                                     :style="`width: ${10 + cards[2].progress * 30 + (hover ? 24 : 0)}px`"></div>
                                <div class="h-1 w-6 bg-blue-400/60 rounded-full"></div>
                                <div class="h-1 w-3 bg-blue-400/30 rounded-full"></div>
                            </div>
                        </div>
                        
                        <div class="space-y-3 flex-1"
                             :style="`opacity: ${0.4 + cards[2].progress * 0.6}`">
                            <p class="text-slate-300 text-sm lg:text-base leading-relaxed">
                                Our attention to our clients <span class="text-white font-semibold">goes beyond completion</span> of a project.
                            </p>
                            
                            <p class="text-slate-400 text-xs lg:text-sm leading-relaxed">
                                Guaranteeing solutions remain practical, relevant, and aligned with changing requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Card 4 - Stats --}}
            <div class="lg:col-span-2 group"
                 data-card="3"
                 x-data="{ hover: false }"
                 @mouseenter="hover = true"
                 @mouseleave="hover = false">
                
                <div class="relative bg-gradient-to-r from-blue-500/10 via-purple-500/10 to-orange-500/10 backdrop-blur-xl border border-white/10 rounded-2xl p-6 lg:p-8 overflow-hidden transition-all duration-700"
                     :style="`
                         opacity: ${cards[3].visible ? 1 : 0};
                         transform: translateY(${cards[3].visible ? 0 : 80}px) scale(${0.9 + cards[3].progress * 0.1});
                         border-color: rgba(168, 85, 247, ${0.1 + cards[3].progress * 0.2});
                     `"
                     :class="hover && 'shadow-2xl shadow-purple-500/20'">
                    
                    <div class="relative z-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                        <div class="flex-1">
                            <div class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-1.5 mb-3">
                                <svg class="w-4 h-4 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-white text-xs font-bold">Why Choose Us</span>
                            </div>
                            
                            <h3 class="text-xl lg:text-2xl font-black text-white mb-3">
                                Trusted by <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-orange-400 bg-clip-text text-transparent">innovative companies</span> worldwide
                            </h3>
                            
                            <p class="text-slate-300 text-sm lg:text-base max-w-xl"
                               :style="`opacity: ${0.5 + cards[3].progress * 0.5}`">
                                We combine technical expertise with creative solutions to deliver exceptional results that exceed expectations.
                            </p>
                        </div>
                        
                        <div class="flex flex-wrap sm:flex-col gap-3">
                            <div class="text-center bg-white/5 rounded-xl px-4 py-3 min-w-[100px] transition-all duration-500"
                                 :style="`transform: scale(${0.5 + cards[3].progress * 0.5}); opacity: ${cards[3].progress}`">
                                <div class="text-2xl lg:text-3xl font-black bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">50+</div>
                                <div class="text-slate-400 text-xs">Projects</div>
                            </div>
                            <div class="text-center bg-white/5 rounded-xl px-4 py-3 min-w-[100px] transition-all duration-500"
                                 :style="`transform: scale(${0.5 + cards[3].progress * 0.5}); opacity: ${cards[3].progress}`">
                                <div class="text-2xl lg:text-3xl font-black bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">98%</div>
                                <div class="text-slate-400 text-xs">Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
