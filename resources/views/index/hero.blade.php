
    <style>
        /* ===== RESPONSIVE NETWORK CONTAINER ===== */
        .network-container {
            position: relative;
            width: 100%;
            max-width: 550px;
            height: 0;
            padding-bottom: 100%;
            perspective: 1000px;
        }
        
        @media (max-width: 1024px) {
            .network-container {
                max-width: 450px;
            }
        }
        
        @media (max-width: 768px) {
            .network-container {
                max-width: 350px;
            }
        }
        
        @media (max-width: 480px) {
            .network-container {
                max-width: 300px;
            }
        }
        
        .network-web {
            position: absolute;
            inset: 0;
            transform-style: preserve-3d;
        }
        
        /* ===== NETWORK NODES ===== */
        .network-node {
            position: absolute;
            width: 20px;
            height: 20px;
            background: radial-gradient(circle, #3b82f6, #1e40af);
            border-radius: 50%;
            box-shadow: 
                0 0 20px rgba(59, 130, 246, 0.8),
                0 0 40px rgba(59, 130, 246, 0.4),
                inset 0 0 10px rgba(147, 197, 253, 0.6);
            animation: nodePulse 3s ease-in-out infinite;
            border: 2px solid rgba(147, 197, 253, 0.5);
            margin: -10px 0 0 -10px;
            z-index: 5;
        }
        
        @media (max-width: 768px) {
            .network-node {
                width: 16px;
                height: 16px;
                margin: -8px 0 0 -8px;
            }
        }
        
        @media (max-width: 480px) {
            .network-node {
                width: 12px;
                height: 12px;
                margin: -6px 0 0 -6px;
            }
        }
        
        @keyframes nodePulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 
                    0 0 20px rgba(59, 130, 246, 0.8),
                    0 0 40px rgba(59, 130, 246, 0.4);
            }
            50% { 
                transform: scale(1.3);
                box-shadow: 
                    0 0 30px rgba(59, 130, 246, 1),
                    0 0 60px rgba(59, 130, 246, 0.6);
            }
        }
        
        /* ===== CENTRAL HUB ===== */
        .network-hub {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60px;
            height: 60px;
            margin: -30px 0 0 -30px;
            background: radial-gradient(circle, #f97316, #ea580c);
            border-radius: 50%;
            box-shadow: 
                0 0 40px rgba(249, 115, 22, 1),
                0 0 80px rgba(249, 115, 22, 0.6),
                0 0 120px rgba(249, 115, 22, 0.3),
                inset 0 0 20px rgba(253, 186, 116, 0.8);
            animation: hubPulse 2s ease-in-out infinite;
            border: 3px solid rgba(253, 186, 116, 0.8);
            z-index: 10;
        }
        
        @media (max-width: 768px) {
            .network-hub {
                width: 50px;
                height: 50px;
                margin: -25px 0 0 -25px;
            }
        }
        
        @media (max-width: 480px) {
            .network-hub {
                width: 40px;
                height: 40px;
                margin: -20px 0 0 -20px;
            }
        }
        
        @keyframes hubPulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 
                    0 0 40px rgba(249, 115, 22, 1),
                    0 0 80px rgba(249, 115, 22, 0.6);
            }
            50% { 
                transform: scale(1.15);
                box-shadow: 
                    0 0 60px rgba(249, 115, 22, 1),
                    0 0 120px rgba(249, 115, 22, 0.8);
            }
        }
        
        /* ===== CONNECTION LINES ===== */
        .connection-line {
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: 0 0;
        }
        
        .line {
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, 
                rgba(59, 130, 246, 0.3), 
                rgba(59, 130, 246, 0.6), 
                rgba(59, 130, 246, 0.3)
            );
        }
        
        @media (max-width: 480px) {
            .line {
                height: 1.5px;
            }
        }
        
        /* ===== DATA PARTICLES ===== */
        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: radial-gradient(circle, #60a5fa, transparent);
            border-radius: 50%;
            box-shadow: 0 0 10px #60a5fa, 0 0 20px #3b82f6;
            top: -3px;
            left: 0;
            animation: moveParticle 3s linear infinite;
        }
        
        .particle-orange {
            background: radial-gradient(circle, #fb923c, transparent);
            box-shadow: 0 0 10px #fb923c, 0 0 20px #f97316;
            animation: moveParticle 2.5s linear infinite;
        }
        
        @media (max-width: 768px) {
            .particle, .particle-orange {
                width: 6px;
                height: 6px;
                top: -2px;
            }
        }
        
        @media (max-width: 480px) {
            .particle, .particle-orange {
                width: 5px;
                height: 5px;
                top: -1.5px;
            }
        }
        
        @keyframes moveParticle {
            0% {
                left: 0;
                opacity: 0;
                transform: scale(0.5);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                left: 100%;
                opacity: 0;
                transform: scale(1.5);
            }
        }
        
        /* ===== TECH GRID ===== */
        .tech-grid {
            position: absolute;
            inset: 0;
            background-image: 
                linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            animation: gridMove 20s linear infinite;
        }
        
        @media (max-width: 768px) {
            .tech-grid {
                background-size: 30px 30px;
            }
        }
        
        @media (max-width: 480px) {
            .tech-grid {
                background-size: 20px 20px;
            }
        }
        
        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(40px, 40px); }
        }
        
        /* ===== DATA LABELS ===== */
        .data-label {
            position: absolute;
            background: rgba(59, 130, 246, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(59, 130, 246, 0.3);
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 600;
            color: #60a5fa;
            white-space: nowrap;
            animation: labelFloat 4s ease-in-out infinite;
            z-index: 15;
        }
        
        @media (max-width: 768px) {
            .data-label {
                padding: 4px 8px;
                font-size: 9px;
            }
        }
        
        @media (max-width: 480px) {
            .data-label {
                padding: 3px 6px;
                font-size: 8px;
            }
        }
        
        @keyframes labelFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* ===== PARALLAX BACKGROUND ===== */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        @media (max-width: 768px) {
            .parallax {
                background-attachment: scroll;
            }
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes scaleUp {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        
        .reveal { opacity: 0; }
        .reveal.active.fade-up { animation: fadeInUp 0.8s ease-out forwards; }
        .reveal.active.slide-left { animation: slideInLeft 0.8s ease-out forwards; }
        .reveal.active.slide-right { animation: slideInRight 0.8s ease-out forwards; }
        .reveal.active.scale-up { animation: scaleUp 0.6s ease-out forwards; }
        
        /* ===== SCROLL TEXT ===== */
        .scroll-text {
            display: flex;
            animation: scroll 30s linear infinite;
            white-space: nowrap;
        }
        
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        /* ===== VIDEO OVERLAY ===== */
        .video-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.95), rgba(37, 99, 235, 0.85));
            z-index: 1;
        }
        
        /* ===== COUNTER ===== */
        .counter { font-variant-numeric: tabular-nums; }
        
        /* ===== ZOOM ON SCROLL ===== */
        .zoom-on-scroll {
            transform: scale(1.2);
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .zoom-on-scroll.in-view { transform: scale(1); }
        
        /* ===== SMOOTH TRANSITIONS ===== */
        .smooth { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        
        /* ===== GRADIENT TEXT ===== */
        @keyframes gradient-text {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .gradient-animate {
            background: linear-gradient(90deg, #2563eb, #f97316, #2563eb);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-text 3s ease infinite;
        }
        
        /* ===== FLOAT ANIMATION ===== */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .float { animation: float 6s ease-in-out infinite; }
        
        /* ===== CARD TILT ===== */
        .card-tilt { transition: transform 0.3s ease; }
        .card-tilt:hover { transform: translateY(-4px); }
        
        /* ===== FLOATING CARD ===== */
        .floating-card {
            position: absolute;
            z-index: 20;
        }
        
        @media (max-width: 768px) {
            .floating-card {
                transform: scale(0.8);
            }
        }
        
        @media (max-width: 480px) {
            .floating-card {
                transform: scale(0.7);
            }
        }
    </style>

    <!-- ===== HERO SECTION ===== -->
    <section class="relative min-h-screen flex items-center overflow-hidden parallax" style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920');">
        <!-- Video Overlay -->
        <div class="video-overlay"></div>
        
        <!-- Animated Background Particles -->
        <div class="absolute inset-0 z-0">
            <div class="absolute w-1.5 h-1.5 bg-blue-400 rounded-full top-20 left-10 animate-pulse"></div>
            <div class="absolute w-2 h-2 bg-orange-400 rounded-full top-40 right-20 float" style="animation-delay: 1s"></div>
            <div class="absolute w-1.5 h-1.5 bg-blue-300 rounded-full bottom-32 left-1/4 animate-pulse" style="animation-delay: 2s"></div>
            <div class="absolute w-3 h-3 bg-orange-300 rounded-full bottom-20 right-1/3 float" style="animation-delay: 0.5s"></div>
        </div>
        
        <!-- Main Content Grid -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24 w-full">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                
                <!-- LEFT: Text Content (Appears FIRST on mobile, TOP on desktop) -->
                <div class="text-white space-y-4 sm:space-y-6 reveal fade-up">
                    
                    <!-- Badge -->
                    <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-3 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span>
                        </span>
                        <span class="text-xs font-semibold">Worldwide Services • 24/7 Support</span>
                    </div>
                    
                    <!-- Headline -->
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-tight">
                        Empowering
                        <span class="block gradient-animate">Brands with</span>
                        <span class="block">Technology</span>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-base sm:text-lg md:text-xl text-gray-200 leading-relaxed max-w-2xl">
                        We transform how brands communicate with their audiences using trendy digital technology. Our digital solutions help improve strategy, increase online visibility.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-3 pt-2 sm:pt-4">
                        <a href="/services" class="group inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 bg-blue-600 text-white font-semibold text-sm rounded-lg hover:bg-orange-500 smooth shadow-xl hover:scale-105">
                            <span>Explore Services</span>
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 smooth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        
                        <a href="/contact" class="inline-flex items-center px-5 sm:px-6 py-2.5 sm:py-3 bg-white/10 backdrop-blur-md text-white font-semibold text-sm rounded-lg border-2 border-white/30 hover:bg-white hover:text-gray-900 smooth">
                            Let's Talk
                        </a>
                    </div>
                    
                    <!-- Metrics Grid -->
                    <div class="grid grid-cols-3 gap-4 sm:gap-6 pt-6 sm:pt-8 border-t border-white/20">
                        <div>
                            <div class="counter text-2xl sm:text-3xl font-black text-white mb-1" data-target="300">0</div>
                            <div class="text-xs text-gray-300 font-medium uppercase tracking-wider">Projects</div>
                        </div>
                        <div>
                            <div class="counter text-2xl sm:text-3xl font-black text-orange-400 mb-1" data-target="266">0</div>
                            <div class="text-xs text-gray-300 font-medium uppercase tracking-wider">Clients</div>
                        </div>
                        <div>
                            <div class="counter text-2xl sm:text-3xl font-black text-blue-400 mb-1" data-target="20">0</div>
                            <div class="text-xs text-gray-300 font-medium uppercase tracking-wider">Workers</div>
                        </div>
                    </div>
                </div>
                
                <!-- RIGHT: Network Visualization (Appears SECOND on mobile BOTTOM, RIGHT on desktop) -->
                <div class="relative reveal scale-up flex items-center justify-center mt-8 lg:mt-0">
                    <div class="network-container mx-auto">
                        <!-- Grid Background -->
                        <div class="tech-grid"></div>
                        
                        <!-- Network Web -->
                        <div class="network-web">
                            <!-- Central Hub -->
                            <div class="network-hub"></div>
                            
                            <!-- 8 Network Nodes -->
                            <div class="network-node" style="top: 10%; left: 50%;"></div>
                            <div class="network-node" style="top: 25%; left: 85%;"></div>
                            <div class="network-node" style="top: 50%; left: 95%;"></div>
                            <div class="network-node" style="top: 75%; left: 85%;"></div>
                            <div class="network-node" style="top: 90%; left: 50%;"></div>
                            <div class="network-node" style="top: 75%; left: 15%;"></div>
                            <div class="network-node" style="top: 50%; left: 5%;"></div>
                            <div class="network-node" style="top: 25%; left: 15%;"></div>
                            
                            <!-- Connection 1: Top (rotate -90deg = top) -->
                            <div class="connection-line" style="width: 220px; transform: rotate(-90deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 0s;"></div>
                                <div class="particle-orange" style="animation-delay: 0.8s;"></div>
                            </div>
                            
                            <!-- Connection 2: Top-Right -->
                            <div class="connection-line" style="width: 200px; transform: rotate(-45deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 0.3s;"></div>
                                <div class="particle-orange" style="animation-delay: 1.1s;"></div>
                            </div>
                            
                            <!-- Connection 3: Right -->
                            <div class="connection-line" style="width: 220px; transform: rotate(0deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 0.6s;"></div>
                                <div class="particle-orange" style="animation-delay: 1.4s;"></div>
                            </div>
                            
                            <!-- Connection 4: Bottom-Right -->
                            <div class="connection-line" style="width: 200px; transform: rotate(45deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 0.9s;"></div>
                                <div class="particle-orange" style="animation-delay: 1.7s;"></div>
                            </div>
                            
                            <!-- Connection 5: Bottom -->
                            <div class="connection-line" style="width: 220px; transform: rotate(90deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 1.2s;"></div>
                                <div class="particle-orange" style="animation-delay: 2s;"></div>
                            </div>
                            
                            <!-- Connection 6: Bottom-Left -->
                            <div class="connection-line" style="width: 200px; transform: rotate(135deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 1.5s;"></div>
                                <div class="particle-orange" style="animation-delay: 2.3s;"></div>
                            </div>
                            
                            <!-- Connection 7: Left -->
                            <div class="connection-line" style="width: 220px; transform: rotate(180deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 1.8s;"></div>
                                <div class="particle-orange" style="animation-delay: 0.2s;"></div>
                            </div>
                            
                            <!-- Connection 8: Top-Left -->
                            <div class="connection-line" style="width: 200px; transform: rotate(225deg);">
                                <div class="line"></div>
                                <div class="particle" style="animation-delay: 2.1s;"></div>
                                <div class="particle-orange" style="animation-delay: 0.5s;"></div>
                            </div>
                            
                            <!-- Data Labels (Hidden on mobile/tablet) -->
                            <div class="data-label hidden sm:block" style="top: 2%; left: 42%;">API Gateway</div>
                            <div class="data-label hidden md:block" style="top: 18%; right: 5%;">Cloud Server</div>
                            <div class="data-label hidden md:block" style="bottom: 18%; right: 5%;">Database</div>
                            <div class="data-label hidden sm:block" style="bottom: 2%; left: 38%;">CDN Network</div>
                            <div class="data-label hidden md:block" style="top: 45%; left: -5%;">Analytics</div>
                        </div>
                    </div>
                    
                    <!-- Floating Rating Card -->
                    <div class="floating-card -bottom-4 sm:-bottom-6 -left-4 sm:-left-6 bg-white/95 backdrop-blur-xl rounded-xl p-3 sm:p-4 shadow-2xl">
                        <div class="flex items-center space-x-2 sm:space-x-3">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg animate-pulse">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs text-gray-600 font-semibold mb-0.5">Rating</div>
                                <div class="text-xl sm:text-2xl font-black text-gray-900">4.9<span class="text-orange-500">/5</span></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Uptime Badge -->
                    <div class="floating-card -top-3 sm:-top-4 -right-3 sm:-right-4 bg-blue-600 text-white rounded-xl px-3 sm:px-4 py-1.5 sm:py-2 shadow-lg">
                        <div class="text-base sm:text-lg font-black">99.9%</div>
                        <div class="text-xs font-semibold">Uptime</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        // Scroll Reveal Animation
        function reveal() {
            const reveals = document.querySelectorAll('.reveal');
            reveals.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 100;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        }
        
        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(counter);
            });
        }
        
        // Initialize
        window.addEventListener('scroll', reveal);
        window.addEventListener('load', () => {
            reveal();
            animateCounters();
        });
    </script>