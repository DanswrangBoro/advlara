    <style>
        /* ===== UNIQUE WHY CHOOSE US ANIMATIONS ===== */
        @keyframes slideInLeftHard {
            from {
                opacity: 0;
                transform: translateX(-300px) skewX(-10deg);
            }
            to {
                opacity: 1;
                transform: translateX(0) skewX(0);
            }
        }

        @keyframes slideInRightHard {
            from {
                opacity: 0;
                transform: translateX(300px) skewX(10deg);
            }
            to {
                opacity: 1;
                transform: translateX(0) skewX(0);
            }
        }

        @keyframes slideUpHard {
            from {
                opacity: 0;
                transform: translateY(50px) rotateX(20deg);
            }
            to {
                opacity: 1;
                transform: translateY(0) rotateX(0);
            }
        }

        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        @keyframes pulseRing {
            0% {
                box-shadow: 0 0 0 0 rgba(2, 132, 199, 0.7);
            }
            70% {
                box-shadow: 0 0 0 20px rgba(2, 132, 199, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(2, 132, 199, 0);
            }
        }

        @keyframes counterUp {
            from {
                opacity: 0;
                transform: scale(0.5) rotateZ(-10deg);
            }
            to {
                opacity: 1;
                transform: scale(1) rotateZ(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                max-height: 200px;
                transform: translateY(0);
            }
        }

        /* Why Choose Us Section */
        .why-choose-section {
            position: relative;
            overflow: hidden;
            background: linear-gradient(to bottom, #ffffff 0%, #f8fafc 50%, #ffffff 100%);
        }

        /* Accent Elements */
        .accent-blob-1 {
            position: absolute;
            top: 100px;
            left: -150px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.15), transparent);
            border-radius: 45% 55% 60% 40% / 55% 45% 55% 45%;
            filter: blur(60px);
            z-index: 0;
            animation: float 20s ease-in-out infinite;
        }

        .accent-blob-2 {
            position: absolute;
            bottom: -200px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(8, 145, 178, 0.12), transparent);
            border-radius: 40% 60% 50% 50% / 50% 50% 50% 50%;
            filter: blur(50px);
            z-index: 0;
            animation: float 15s ease-in-out infinite reverse;
        }

        /* Header */
        .why-header {
            opacity: 0;
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            text-align: center;
            max-width: 42rem;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 4rem;
            position: relative;
            z-index: 10;
        }

        .why-header.in-view {
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        /* Reason Cards - Unique Design */
        .reason-card {
            opacity: 0;
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            position: relative;
            height: 100%;
            cursor: pointer;
        }

        .reason-card:nth-child(1) {
            animation-delay: 0.3s;
        }

        .reason-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .reason-card:nth-child(3) {
            animation-delay: 0.5s;
        }

        /* Scroll Animation - Reset when out of view */
        .reason-card.in-view:nth-child(1) {
            animation: slideInLeftHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .reason-card.in-view:nth-child(2) {
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.15s;
        }

        .reason-card.in-view:nth-child(3) {
            animation: slideInRightHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.3s;
        }

        /* Card Container */
        .card-container {
            position: relative;
            height: 100%;
            background: white;
            border-radius: 1.5rem;
            border: 2px solid rgba(2, 132, 199, 0.2);
            padding: 2rem;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(2, 132, 199, 0.6), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-container::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 0% 0%, rgba(2, 132, 199, 0.05), transparent 50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .reason-card:hover .card-container::before {
            opacity: 1;
        }

        .reason-card:hover .card-container::after {
            opacity: 1;
        }

        .reason-card:hover .card-container {
            border-color: #0284c7;
            box-shadow: 0 20px 50px rgba(2, 132, 199, 0.15), inset 0 0 0 1px rgba(2, 132, 199, 0.1);
            transform: translateY(-8px);
        }

        /* Number Badge with Ring */
        .reason-number-wrapper {
            position: relative;
            width: 64px;
            height: 64px;
            margin-bottom: 1.5rem;
            flex-shrink: 0;
        }

        .reason-number {
            position: absolute;
            inset: 0;
            width: 64px;
            height: 64px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--color-from), var(--color-to));
            font-weight: 900;
            font-size: 1.75rem;
            color: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: counterUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .reason-card:nth-child(1) .reason-number {
            --color-from: #0284c7;
            --color-to: #0c4a6e;
        }

        .reason-card:nth-child(2) .reason-number {
            --color-from: #0891b2;
            --color-to: #164e63;
        }

        .reason-card:nth-child(3) .reason-number {
            --color-from: #0284c7;
            --color-to: #0c4a6e;
        }

        .reason-card:hover .reason-number {
            transform: scale(1.15) rotateZ(6deg);
            animation: pulseRing 1.5s ease-out infinite;
        }

        /* Title */
        .reason-title {
            font-size: 1.25rem;
            font-weight: 900;
            color: #111827;
            margin-bottom: 0.75rem;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .reason-card:hover .reason-title {
            color: #0284c7;
        }

        /* Description */
        .reason-description {
            font-size: 0.875rem;
            color: #4b5563;
            line-height: 1.6;
            transition: color 0.3s ease;
            position: relative;
            z-index: 2;
            flex-grow: 1;
            margin-bottom: 1rem;
        }

        .reason-card:hover .reason-description {
            color: #374151;
        }

        /* Feature List */
        .feature-list {
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(2, 132, 199, 0.1);
            space-y: 0.5rem;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            animation: slideDown 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0s;
            position: relative;
            z-index: 2;
        }

        .reason-card:hover .feature-list {
            max-height: 200px;
            opacity: 1;
            animation-delay: 0.1s;
        }

        .feature-item {
            display: flex;
            align-items: center;
            space-x: 0.5rem;
            font-size: 0.75rem;
            color: #6b7280;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            color: #0284c7;
            transform: translateX(4px);
        }

        .feature-item::before {
            content: '';
            width: 4px;
            height: 4px;
            background: var(--accent-color);
            border-radius: 50%;
            flex-shrink: 0;
            margin-right: 0.5rem;
        }

        .reason-card:nth-child(1) .feature-item::before {
            --accent-color: #0284c7;
        }

        .reason-card:nth-child(2) .feature-item::before {
            --accent-color: #0891b2;
        }

        .reason-card:nth-child(3) .feature-item::before {
            --accent-color: #0284c7;
        }

        /* Grid Layout */
        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 10;
        }

        @media (min-width: 768px) {
            .why-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Smooth Transitions */
        .smooth {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>

    <!-- Why Choose Us Section -->
    <section class="py-32 why-choose-section" id="why-choose-section">
        <!-- Animated Blob Accents -->
        <div class="accent-blob-1"></div>
        <div class="accent-blob-2"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="why-header">
                <div class="inline-flex items-center space-x-2 bg-blue-50 border border-blue-200 px-4 py-2 rounded-xl mb-4">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-xs font-black text-blue-600 uppercase tracking-wider">Why Choose Us?</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                    Why our clients
                    <br/>
                    <span class="bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">choose us?</span>
                </h2>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    Experience a dedicated partnership with tailored solutions that drive your success and deliver measurable results.
                </p>
            </div>

            <!-- Reason Cards Grid -->
            <div class="why-grid">
                <!-- Reason 1: Latest Technology -->
                <div class="reason-card">
                    <div class="card-container">
                        <!-- Number Badge -->
                        <div class="reason-number-wrapper">
                            <div class="reason-number">01</div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="reason-title">Latest Technology</h3>
                        
                        <!-- Description -->
                        <p class="reason-description">
                            We focus on utilizing your business growth with up-to-date technology to enhance performance and deliver exceptional results.
                        </p>

                        <!-- Feature List -->
                        <div class="feature-list">
                            <div class="feature-item">Cloud-native architecture</div>
                            <div class="feature-item">AI-powered optimization</div>
                            <div class="feature-item">Real-time scalability</div>
                        </div>
                    </div>
                </div>

                <!-- Reason 2: Innovative Solutions -->
                <div class="reason-card">
                    <div class="card-container">
                        <!-- Number Badge -->
                        <div class="reason-number-wrapper">
                            <div class="reason-number">02</div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="reason-title">Innovative Solutions</h3>
                        
                        <!-- Description -->
                        <p class="reason-description">
                            We specialize in creating innovative methods that adapt to the ever-changing business landscape with agility.
                        </p>

                        <!-- Feature List -->
                        <div class="feature-list">
                            <div class="feature-item">Custom implementations</div>
                            <div class="feature-item">Rapid prototyping</div>
                            <div class="feature-item">Agile methodology</div>
                        </div>
                    </div>
                </div>

                <!-- Reason 3: Data-Driven Insights -->
                <div class="reason-card">
                    <div class="card-container">
                        <!-- Number Badge -->
                        <div class="reason-number-wrapper">
                            <div class="reason-number">03</div>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="reason-title">Data-Driven Insights</h3>
                        
                        <!-- Description -->
                        <p class="reason-description">
                            We transform data into actionable insights that help you make informed decisions for sustainable growth.
                        </p>

                        <!-- Feature List -->
                        <div class="feature-list">
                            <div class="feature-item">Real-time analytics</div>
                            <div class="feature-item">Predictive modeling</div>
                            <div class="feature-item">Business intelligence</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const whySection = document.getElementById('why-choose-section');
            const whyHeader = whySection.querySelector('.why-header');
            const reasonCards = whySection.querySelectorAll('.reason-card');

            const observerOptions = {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add in-view class
                        whyHeader.classList.add('in-view');
                        reasonCards.forEach(card => {
                            card.classList.add('in-view');
                        });
                    } else {
                        // Remove in-view class when scrolling away
                        whyHeader.classList.remove('in-view');
                        reasonCards.forEach(card => {
                            card.classList.remove('in-view');
                        });
                    }
                });
            }, observerOptions);

            observer.observe(whySection);
        });
    </script>
