
    <style>
        /* ===== SERVICES ANIMATIONS ===== */
        @keyframes slideInLeftFar {
            from {
                opacity: 0;
                transform: translateX(-200px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRightFar {
            from {
                opacity: 0;
                transform: translateX(200px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInTopFar {
            from {
                opacity: 0;
                transform: translateY(-200px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleInBig {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes rotateInBig {
            from {
                opacity: 0;
                transform: rotate(-20deg) scale(0.6);
            }
            to {
                opacity: 1;
                transform: rotate(0deg) scale(1);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        /* Service Card Base - STARTS INVISIBLE */
        .service-card {
            opacity: 0;
            transform: translateX(0);
        }

        /* ANIMATION CLASSES - Can be applied and removed repeatedly */
        
        /* Card 1: Slide from LEFT */
        .service-card.card-1.in-view {
            animation: slideInLeftFar 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        /* Card 2: Slide from TOP */
        .service-card.card-2.in-view {
            animation: slideInTopFar 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.15s;
        }

        /* Card 3: Slide from RIGHT */
        .service-card.card-3.in-view {
            animation: slideInRightFar 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.3s;
        }

        /* Card 4: Slide from RIGHT */
        .service-card.card-4.in-view {
            animation: slideInRightFar 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.45s;
        }

        /* Card 5: Scale from Center */
        .service-card.card-5.in-view {
            animation: scaleInBig 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.6s;
        }

        /* Card 6: Rotate from Corner */
        .service-card.card-6.in-view {
            animation: rotateInBig 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.75s;
        }

        /* Icon Float Animation */
        .service-icon {
            animation: float 3s ease-in-out infinite;
        }

        .service-card:hover .service-icon {
            animation: none;
            transform: scale(1.2);
        }

        /* Hover Effects */
        .service-card:hover {
            transform: translateY(-12px);
        }

        /* Header Animation */
        .services-header {
            opacity: 0;
        }

        .services-header.in-view {
            animation: slideInTopFar 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }
    </style>

    <!-- Services Section -->
    <section class="py-24 bg-white" id="services-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 services-header">
                <div class="inline-flex items-center space-x-2 bg-orange-50 px-4 py-2 rounded-full mb-4">
                    <span class="w-1.5 h-1.5 bg-orange-500 rounded-full animate-pulse"></span>
                    <span class="text-xs font-bold text-orange-600 uppercase tracking-wider">Our Services</span>
                </div>
                
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4">
                    What We're <span class="gradient-animate">Offering?</span>
                </h2>
                
                <p class="text-base text-gray-600 leading-relaxed">
                    We prioritize understanding your goals to deliver solutions that meet your expectations and exceed them.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1: Slides from LEFT -->
                <div class="service-card card-1 group bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-8 text-white hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black mb-3">Web Development</h3>
                    <p class="text-blue-100 leading-relaxed mb-4 text-sm">
                        Our web development services create secure, responsive websites tailored to your brand, boosting user engagement and business growth.
                    </p>
                    <a href="/services/web-development" class="inline-flex items-center text-white font-semibold text-sm hover:text-blue-100 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Service 2: Slides from TOP -->
                <div class="service-card card-2 group bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-8 text-white hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black mb-3">Digital Marketing</h3>
                    <p class="text-orange-100 leading-relaxed mb-4 text-sm">
                        To drive quality traffic to conversions, we focus on the right audience and use comprehensive digital marketing strategies.
                    </p>
                    <a href="/services/digital-marketing" class="inline-flex items-center text-white font-semibold text-sm hover:text-orange-100 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Service 3: Slides from RIGHT -->
                <div class="service-card card-3 group bg-white rounded-2xl p-8 border-3 border-gray-900 hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-orange-500 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">SEO Services</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm">
                        SEO services increase your website's search engine rankings, organic traffic, and user experience.
                    </p>
                    <a href="/services/seo" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-orange-500 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Service 4: Slides from RIGHT -->
                <div class="service-card card-4 group bg-white rounded-2xl p-8 border-3 border-gray-900 hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black text-gray-900 mb-3">Graphic Design</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm">
                        Graphic design services enable organizations to develop a strong brand identity and engage audiences.
                    </p>
                    <a href="/services/graphic-design" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-orange-500 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Service 5: Scales In from Center -->
                <div class="service-card card-5 group bg-gradient-to-br from-purple-600 to-purple-700 rounded-2xl p-8 text-white hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black mb-3">Travel Solutions</h3>
                    <p class="text-purple-100 leading-relaxed mb-4 text-sm">
                        Our travel solutions simplify every journey, adapting to your unique needs from booking to real-time updates.
                    </p>
                    <a href="/services/travel" class="inline-flex items-center text-white font-semibold text-sm hover:text-purple-100 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Service 6: Rotates In from Corner -->
                <div class="service-card card-6 group bg-gradient-to-br from-green-600 to-green-700 rounded-2xl p-8 text-white hover:shadow-xl smooth cursor-pointer">
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth service-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-black mb-3">App Development</h3>
                    <p class="text-green-100 leading-relaxed mb-4 text-sm">
                        App development services boost customer engagement, streamline operations with custom mobile apps.
                    </p>
                    <a href="/services/app-development" class="inline-flex items-center text-white font-semibold text-sm hover:text-green-100 smooth">
                        Learn more
                        <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Repeatable Scroll Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');
            const servicesHeader = document.querySelector('.services-header');
            const servicesSection = document.getElementById('services-section');

            // Intersection Observer - Adds and removes classes on scroll in/out
            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Card is visible - ADD animation class
                        entry.target.classList.add('in-view');
                    } else {
                        // Card is NOT visible - REMOVE animation class
                        // This allows animation to replay when scrolling back
                        entry.target.classList.remove('in-view');
                    }
                });
            }, observerOptions);

            // Observe all service cards
            serviceCards.forEach(card => {
                observer.observe(card);
            });

            // Observe header
            if (servicesHeader) {
                observer.observe(servicesHeader);
            }
        });
    </script>
