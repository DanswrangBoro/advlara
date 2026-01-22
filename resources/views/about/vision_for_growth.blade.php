{{-- resources/views/components/vision-timeline.blade.php --}}
<section class="relative min-h-screen bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 overflow-hidden py-16 lg:py-24"
         x-data="{ 
             scrollY: 0,
             sectionTop: 0,
             sectionProgress: 0,
             timeline: [
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 },
                 { visible: false, progress: 0 }
             ],
             lineProgress: 0
         }"
         x-init="
             const section = $el;
             const updateScroll = () => {
                 scrollY = window.pageYOffset;
                 sectionTop = section.offsetTop;
                 const sectionHeight = section.offsetHeight;
                 const viewportHeight = window.innerHeight;
                 const scrolled = scrollY - sectionTop + viewportHeight;
                 sectionProgress = Math.max(0, Math.min(1, scrolled / (sectionHeight + viewportHeight)));
                 
                 // Calculate line progress
                 const lineElement = document.querySelector('[data-timeline-line]');
                 if (lineElement) {
                     const lineRect = lineElement.getBoundingClientRect();
                     const lineStart = lineRect.top + scrollY - viewportHeight * 0.5;
                     const lineEnd = lineRect.bottom + scrollY - viewportHeight * 0.5;
                     lineProgress = Math.max(0, Math.min(1, (scrollY - lineStart) / (lineEnd - lineStart)));
                 }
                 
                 // Track individual timeline items
                 document.querySelectorAll('[data-timeline-item]').forEach((item, index) => {
                     const rect = item.getBoundingClientRect();
                     if (rect.top < viewportHeight * 0.8 && rect.bottom > 0) {
                         timeline[index].visible = true;
                         const itemCenter = rect.top + rect.height / 2;
                         const viewportCenter = viewportHeight / 2;
                         const distance = Math.abs(viewportCenter - itemCenter);
                         timeline[index].progress = Math.max(0, Math.min(1, 1 - (distance / viewportHeight)));
                     }
                 });
             };
             
             window.addEventListener('scroll', updateScroll);
             window.addEventListener('resize', updateScroll);
             setTimeout(updateScroll, 100);
             updateScroll();
         ">
    
    {{-- Simplified Background --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-3xl"
             :style="`transform: translate(${sectionProgress * 100}px, ${-sectionProgress * 100}px)`"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-orange-500/15 rounded-full blur-3xl"
             :style="`transform: translate(${-sectionProgress * 100}px, ${sectionProgress * 80}px)`"></div>
    </div>
    
    {{-- Subtle Grid --}}
    <div class="absolute inset-0 opacity-[0.02]">
        <div class="absolute inset-0" style="background-image: 
            linear-gradient(rgba(255, 255, 255, 0.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.5) 1px, transparent 1px);
            background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Clean Header --}}
        <div class="text-center mb-12 lg:mb-20">
            <span class="text-blue-400 text-xs sm:text-sm font-bold uppercase tracking-widest block mb-4">The Future</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white mb-4 leading-tight">
                Our Vision for<br/>
                <span class="bg-gradient-to-r from-orange-400 to-orange-600 bg-clip-text text-transparent">Growth</span>
            </h2>
            <p class="text-slate-400 text-sm sm:text-base lg:text-lg max-w-2xl mx-auto">
                Our vision for growth, innovation, and excellence
            </p>
        </div>
        
        {{-- Timeline --}}
        <div class="relative" data-timeline-line>
            
            {{-- Animated Progress Line --}}
            <div class="absolute left-0 lg:left-1/2 top-0 bottom-0 lg:-translate-x-1/2 w-px bg-white/10">
                <div class="absolute inset-0 bg-gradient-to-b from-blue-500 via-orange-500 to-purple-500 transition-all duration-300"
                     :style="`transform: scaleY(${lineProgress}); transform-origin: top`"></div>
            </div>
            
            <div class="space-y-8 lg:space-y-16">
                
                {{-- Item 1: Global Impact - Center --}}
                <div data-timeline-item="0"
                     class="relative pl-8 lg:pl-0 transition-all duration-700"
                     :style="`
                         opacity: ${timeline[0].visible ? 1 : 0};
                         transform: translateY(${timeline[0].visible ? 0 : 60}px);
                     `">
                    
                    <div class="flex items-center gap-6 lg:gap-0 lg:grid lg:grid-cols-12">
                        {{-- Icon --}}
                        <div class="flex-shrink-0 lg:col-span-5 lg:flex lg:justify-end lg:pr-8">
                            <div class="relative w-16 h-16 lg:w-20 lg:h-20 transition-transform duration-500"
                                 :style="`transform: scale(${0.9 + timeline[0].progress * 0.1})`">
                                <div class="absolute inset-0 bg-orange-500 rounded-full blur-xl opacity-40"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-orange-500 to-orange-700 rounded-full flex items-center justify-center shadow-xl border-4 border-slate-900">
                                    <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Content --}}
                        <div class="flex-1 lg:col-span-7 lg:pl-8">
                            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-5 lg:p-8 transition-all duration-500 hover:bg-white/10 hover:border-orange-400/50 hover:shadow-2xl hover:shadow-orange-500/20"
                                 :style="`border-color: rgba(249, 115, 22, ${0.1 + timeline[0].progress * 0.3})`">
                                <h3 class="text-xl lg:text-2xl font-black text-white mb-3">
                                    Expanding Our Global Impact
                                </h3>
                                <p class="text-slate-300 text-sm lg:text-base leading-relaxed">
                                    With ambitious growth plans, we aim to expand into new markets and industries, delivering our expertise to a broader audience and maximizing our positive impact.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Item 2: Market Reach - Left --}}
                <div data-timeline-item="1"
                     class="relative pl-8 lg:pl-0 transition-all duration-700"
                     :style="`
                         opacity: ${timeline[1].visible ? 1 : 0};
                         transform: translateY(${timeline[1].visible ? 0 : 60}px);
                     `">
                    
                    <div class="flex items-center gap-6 lg:gap-0 lg:grid lg:grid-cols-12">
                        <div class="flex-1 lg:col-span-5 lg:pr-8">
                            <div class="bg-white/5 backdrop-blur-xl border-l-4 border-blue-500 rounded-r-2xl p-5 lg:p-6 transition-all duration-500 hover:bg-white/10 hover:shadow-2xl hover:shadow-blue-500/20"
                                 :style="`border-left-width: ${4 + timeline[1].progress * 4}px`">
                                
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 lg:w-6 lg:h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg lg:text-xl font-black text-white">Expand Market Reach</h4>
                                </div>
                                
                                <p class="text-slate-300 text-xs lg:text-sm leading-relaxed">
                                    We aim to expand our reach by delivering exceptional adventures through partnerships and targeted marketing.
                                </p>
                            </div>
                        </div>
                        
                        <div class="hidden lg:block lg:col-span-7"></div>
                    </div>
                </div>
                
                {{-- Item 3: Technology - Right --}}
                <div data-timeline-item="2"
                     class="relative pl-8 lg:pl-0 transition-all duration-700"
                     :style="`
                         opacity: ${timeline[2].visible ? 1 : 0};
                         transform: translateY(${timeline[2].visible ? 0 : 60}px);
                     `">
                    
                    <div class="flex items-center gap-6 lg:gap-0 lg:grid lg:grid-cols-12">
                        <div class="hidden lg:block lg:col-span-5"></div>
                        
                        <div class="flex-1 lg:col-span-7 lg:pl-8">
                            <div class="bg-white/5 backdrop-blur-xl border-r-4 lg:border-r-4 border-l-4 lg:border-l-0 border-orange-500 rounded-2xl lg:rounded-l-2xl lg:rounded-r-none p-5 lg:p-6 transition-all duration-500 hover:bg-white/10 hover:shadow-2xl hover:shadow-orange-500/20"
                                 :style="`border-right-width: ${4 + timeline[2].progress * 4}px`">
                                
                                <div class="flex items-center gap-3 mb-3 lg:justify-end">
                                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center flex-shrink-0 lg:order-2">
                                        <svg class="w-5 h-5 lg:w-6 lg:h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg lg:text-xl font-black text-white lg:order-1">Cutting-Edge Technology</h4>
                                </div>
                                
                                <p class="text-slate-300 text-xs lg:text-sm leading-relaxed text-left lg:text-right">
                                    Our goal is to lead in technology, enhancing booking, trip personalization, and real-time updates for seamless adventures.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Item 4: Talent - Left --}}
                <div data-timeline-item="3"
                     class="relative pl-8 lg:pl-0 transition-all duration-700"
                     :style="`
                         opacity: ${timeline[3].visible ? 1 : 0};
                         transform: translateY(${timeline[3].visible ? 0 : 60}px);
                     `">
                    
                    <div class="flex items-center gap-6 lg:gap-0 lg:grid lg:grid-cols-12">
                        <div class="flex-1 lg:col-span-5 lg:pr-8">
                            <div class="bg-white/5 backdrop-blur-xl border-l-4 border-blue-400 rounded-r-2xl p-5 lg:p-6 transition-all duration-500 hover:bg-white/10 hover:shadow-2xl hover:shadow-blue-400/20"
                                 :style="`border-left-width: ${4 + timeline[3].progress * 4}px`">
                                
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 lg:w-6 lg:h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg lg:text-xl font-black text-white">Exceptional Talent</h4>
                                </div>
                                
                                <p class="text-slate-300 text-xs lg:text-sm leading-relaxed">
                                    We invest in continuous learning and advanced tools to keep our team at the forefront of adventure technology and deliver exceptional results.
                                </p>
                            </div>
                        </div>
                        
                        <div class="hidden lg:block lg:col-span-7"></div>
                    </div>
                </div>
                
                {{-- Item 5: User Experience - Right --}}
                <div data-timeline-item="4"
                     class="relative pl-8 lg:pl-0 transition-all duration-700"
                     :style="`
                         opacity: ${timeline[4].visible ? 1 : 0};
                         transform: translateY(${timeline[4].visible ? 0 : 60}px);
                     `">
                    
                    <div class="flex items-center gap-6 lg:gap-0 lg:grid lg:grid-cols-12">
                        <div class="hidden lg:block lg:col-span-5"></div>
                        
                        <div class="flex-1 lg:col-span-7 lg:pl-8">
                            <div class="bg-white/5 backdrop-blur-xl border-r-4 lg:border-r-4 border-l-4 lg:border-l-0 border-orange-400 rounded-2xl lg:rounded-l-2xl lg:rounded-r-none p-5 lg:p-6 transition-all duration-500 hover:bg-white/10 hover:shadow-2xl hover:shadow-orange-400/20"
                                 :style="`border-right-width: ${4 + timeline[4].progress * 4}px`">
                                
                                <div class="flex items-center gap-3 mb-3 lg:justify-end">
                                    <div class="w-10 h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0 lg:order-2">
                                        <svg class="w-5 h-5 lg:w-6 lg:h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-lg lg:text-xl font-black text-white lg:order-1">Enhance User Experience</h4>
                                </div>
                                
                                <p class="text-slate-300 text-xs lg:text-sm leading-relaxed text-left lg:text-right">
                                    Design intuitive, user-friendly interfaces and support systems that make technology accessible and valuable to all users.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
