<style>
    /* Smooth Gradient Animation */
    @keyframes gradientFlow {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    .footer-gradient-text {
        background: linear-gradient(90deg, #2563eb, #3b82f6, #60a5fa, #2563eb);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradientFlow 3s ease infinite;
    }

    /* Shine Effect for Social Icons */
    @keyframes shine {
        0% { left: -100%; }
        50%, 100% { left: 100%; }
    }

    .social-icon-shine {
        position: relative;
        overflow: hidden;
    }

    .social-icon-shine::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
        animation: shine 3s infinite;
    }

    /* Glass Effect */
    .glass-card {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
    }
</style>

<!-- Ultra Modern Sharp Footer -->
<footer class="relative bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 overflow-hidden">
    
    {{-- Modern Gradient Waves --}}
    <div class="absolute top-0 left-0 w-full h-32 opacity-20">
        <svg class="w-full h-full" viewBox="0 0 1440 120" fill="none" preserveAspectRatio="none">
            <path d="M0,60 C320,95 640,25 960,60 C1280,95 1440,40 1440,60 L1440,0 L0,0 Z" fill="url(#wave1)" opacity="0.5"/>
            <path d="M0,45 C360,80 720,20 1080,55 C1440,90 1440,30 1440,55 L1440,0 L0,0 Z" fill="url(#wave2)" opacity="0.3"/>
            <defs>
                <linearGradient id="wave1" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#3b82f6"/>
                    <stop offset="100%" style="stop-color:#2563eb"/>
                </linearGradient>
                <linearGradient id="wave2" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#60a5fa"/>
                    <stop offset="100%" style="stop-color:#3b82f6"/>
                </linearGradient>
            </defs>
        </svg>
    </div>

    {{-- Floating Orbs --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-indigo-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-orange-400/20 to-blue-400/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Main Content --}}
        <div class="py-12 sm:py-16 lg:py-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12">
                
                {{-- Company Info - 4 cols --}}
                <div class="lg:col-span-4">
                    <div class="mb-6">
                        <h3 class="text-3xl sm:text-4xl font-black text-gray-900 mb-3">
                            Adventure<span class="footer-gradient-text">Code</span>
                        </h3>
                        <div class="h-1.5 w-20 bg-gradient-to-r from-blue-600 via-blue-500 to-orange-500"></div>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-8 text-sm max-w-sm">
                        We transform how brands communicate with their audiences using trendy digital technology. Our digital solutions help improve strategy and increase online visibility.
                    </p>
                    
                    {{-- ISO Certifications --}}
                    <!-- <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-blue-600 animate-pulse"></div>
                            <p class="text-xs font-black text-blue-700 uppercase tracking-wider">ISO Certified</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="glass-card p-4 hover:scale-110 transition-all duration-300">
                                <img src="/images/iso1.png" alt="ISO 9001:2015" class="h-16 w-auto object-contain">
                            </div>
                            <div class="glass-card p-4 hover:scale-110 transition-all duration-300">
                                <img src="/images/iso3.png" alt="ISO 27001:2013" class="h-16 w-auto object-contain">
                            </div>
                        </div>
                    </div> -->

                    {{-- Social Media with Shine --}}
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2 h-2 bg-orange-500 animate-pulse"></div>
                            <p class="text-xs font-black text-orange-600 uppercase tracking-wider">Follow Us</p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a href="#" class="social-icon-shine w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                <svg class="w-5 h-5 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="social-icon-shine w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-500 flex items-center justify-center text-white hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                <svg class="w-5 h-5 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="social-icon-shine w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 flex items-center justify-center text-white hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                <svg class="w-5 h-5 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            <a href="#" class="social-icon-shine w-12 h-12 bg-gradient-to-br from-pink-500 to-orange-500 flex items-center justify-center text-white hover:scale-110 hover:-translate-y-1 transition-all duration-300">
                                <svg class="w-5 h-5 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                {{-- Quick Links - 2 cols --}}
                <div class="lg:col-span-2">
                    <h4 class="text-gray-900 font-black text-base mb-6 uppercase tracking-wider">
                        Quick Links
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Home
                        </a></li>
                        <li><a href="/about" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            About Us
                        </a></li>
                        <li><a href="/services" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Services
                        </a></li>
                        <li><a href="/portfolio" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Portfolio
                        </a></li>
                        <li><a href="/blog" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Blog
                        </a></li>
                        <li><a href="/contact" class="text-sm text-gray-700 hover:text-blue-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-blue-600 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Contact
                        </a></li>
                    </ul>
                </div>
                
                {{-- Services - 2 cols --}}
                <div class="lg:col-span-2">
                    <h4 class="text-gray-900 font-black text-base mb-6 uppercase tracking-wider">
                        Services
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="/services/web-development" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Web Development
                        </a></li>
                        <li><a href="/services/digital-marketing" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Digital Marketing
                        </a></li>
                        <li><a href="/services/seo" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            SEO Services
                        </a></li>
                        <li><a href="/services/graphic-design" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Graphic Design
                        </a></li>
                        <li><a href="/services/travel-solutions" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            Travel Solutions
                        </a></li>
                        <li><a href="/services/app-development" class="text-sm text-gray-700 hover:text-orange-600 hover:translate-x-2 transition-all duration-300 flex items-center group font-medium">
                            <span class="w-0 h-0.5 bg-orange-500 group-hover:w-5 mr-0 group-hover:mr-2 transition-all duration-300"></span>
                            App Development
                        </a></li>
                    </ul>
                </div>
                
                {{-- Offices & Support - 4 cols --}}
                <div class="lg:col-span-4 space-y-8">
                    
                    {{-- Offices Section --}}
                    <div>
                        <h4 class="text-gray-900 font-black text-base mb-6 uppercase tracking-wider">
                            Our Offices
                        </h4>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4">
                            {{-- USA Office --}}
                            <div class="glass-card p-4 hover:scale-[1.02] transition-all duration-300">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-gray-600 text-xs leading-relaxed">
                                            486 State Route 10 Ste 8 Randolph,<br> NJ 07869-2133
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- India Office --}}
                            <div class="glass-card p-4 hover:scale-[1.02] transition-all duration-300">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-gray-600 text-xs leading-relaxed">
                                            RG Baruah Rd, Sarania Hills<br>
                                            Guwahati, Assam 781003, India
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Support Section --}}
                    <div>
                        <h4 class="text-gray-900 font-black text-base mb-6 uppercase tracking-wider">
                            Support
                        </h4>
                        
                        <div class="space-y-3">
                            <a href="mailto:support@adventurecode.io" class="glass-card p-4 flex items-center gap-3 hover:scale-[1.02] transition-all duration-300 group">
                                <div class="w-10 h-10 bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wide mb-0.5">Email</p>
                                    <p class="text-sm font-black text-gray-900 truncate">support@adventurecode.io</p>
                                </div>
                            </a>
                            
                            <a href="tel:+1234567890" class="glass-card p-4 flex items-center gap-3 hover:scale-[1.02] transition-all duration-300 group">
                                <div class="w-10 h-10 bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wide mb-0.5">Phone</p>
                                    <p class="text-sm font-black text-gray-900">+1 (234) 567-890</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Clean Bottom Bar --}}
        <div class="py-8">
            <div class="h-px bg-gradient-to-r from-transparent via-gray-300 to-transparent mb-6"></div>
            
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-600">
                    © 2025 <span class="font-black text-gray-900">AdventureCode</span>. All rights reserved.
                </p>
                
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <a href="/privacy" class="text-sm text-gray-600 hover:text-blue-600 font-bold transition-colors">
                        Privacy Policy
                    </a>
                    <a href="/terms" class="text-sm text-gray-600 hover:text-blue-600 font-bold transition-colors">
                        Terms of Service
                    </a>
                    <a href="/sitemap" class="text-sm text-gray-600 hover:text-blue-600 font-bold transition-colors">
                        Sitemap
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
