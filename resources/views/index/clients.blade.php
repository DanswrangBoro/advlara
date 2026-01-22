    <style>
        /* ===== CLIENTS SECTION ANIMATIONS ===== */
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

        @keyframes slideRightToLeft {
            from {
                opacity: 0;
                transform: translateX(300px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Clients Section */
        .clients-section {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 50%, #ffffff 100%);
            padding: 6rem 0;
        }

        /* Accent Blobs */
        .accent-blob-top {
            position: absolute;
            top: -100px;
            left: 5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.15), transparent);
            border-radius: 50%;
            filter: blur(60px);
            z-index: 1;
            animation: float 15s ease-in-out infinite;
        }

        .accent-blob-mid {
            position: absolute;
            top: 50%;
            right: -50px;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(8, 145, 178, 0.1), transparent);
            border-radius: 50%;
            filter: blur(50px);
            z-index: 1;
            animation: float 20s ease-in-out infinite reverse;
        }

        .accent-blob-bottom {
            position: absolute;
            bottom: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.08), transparent);
            border-radius: 50%;
            filter: blur(45px);
            z-index: 1;
            animation: float 18s ease-in-out infinite;
        }

        /* Subtle Grid Pattern */
        .grid-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.02;
            background-image: 
                repeating-linear-gradient(0deg, transparent, transparent 2px, #1e293b 2px, #1e293b 4px),
                repeating-linear-gradient(90deg, transparent, transparent 2px, #1e293b 2px, #1e293b 4px);
            background-size: 50px 50px;
            z-index: 0;
        }

        /* Header */
        .clients-header {
            opacity: 0;
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            z-index: 10;
        }

        .clients-header.in-view {
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .clients-header .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, rgba(2, 132, 199, 0.1), rgba(8, 145, 178, 0.05));
            border: 1px solid rgba(2, 132, 199, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(2, 132, 199, 0.1);
            backdrop-filter: blur(10px);
        }

        .clients-header .pulse-dot {
            width: 6px;
            height: 6px;
            background: #2563eb;
            border-radius: 50%;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .clients-header .text-badge {
            font-size: 0.75rem;
            font-weight: 700;
            color: #0284c7;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .clients-header h2 {
            font-size: 2.25rem;
            font-weight: 900;
            color: #111827;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        @media (min-width: 768px) {
            .clients-header h2 {
                font-size: 3rem;
            }
        }

        .gradient-text {
            background: linear-gradient(90deg, #2563eb, #0891b2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
        }

        .clients-header p {
            color: #6b7280;
            font-size: 1rem;
            max-width: 40rem;
            margin: 0 auto;
        }

        /* Horizontal Scroll Container */
        .clients-scroll-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-top: 3rem;
            z-index: 10;
        }

        /* Gradient Overlay - Left */
        .clients-scroll-wrapper::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 120px;
            background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0));
            z-index: 20;
            pointer-events: none;
        }

        /* Gradient Overlay - Right */
        .clients-scroll-wrapper::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 120px;
            background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0));
            z-index: 20;
            pointer-events: none;
        }

        /* Scroll Container - HIDDEN SCROLLBAR */
        .clients-scroll-container {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 1.5rem 0;
            cursor: grab;
            user-select: none;
            
            /* Hide scrollbar for Chrome, Safari and Opera */
            -webkit-overflow-scrolling: touch;
        }

        .clients-scroll-container::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .clients-scroll-container {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .clients-scroll-container.dragging {
            cursor: grabbing;
            scroll-behavior: auto;
        }

        /* Client Logo Item */
        .client-logo {
            opacity: 0;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 8rem;
            min-width: 8rem;
            width: 8rem;
            border-radius: 1rem;
            border: 2px solid rgba(2, 132, 199, 0.2);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05), inset 0 0 0 1px rgba(255, 255, 255, 0.8);
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            pointer-events: none;
        }

        /* Logo Scroll Animation */
        .client-logo.in-view {
            animation: slideRightToLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .client-logo:nth-child(1).in-view {
            animation-delay: 0.1s;
        }

        .client-logo:nth-child(2).in-view {
            animation-delay: 0.15s;
        }

        .client-logo:nth-child(3).in-view {
            animation-delay: 0.2s;
        }

        .client-logo:nth-child(4).in-view {
            animation-delay: 0.25s;
        }

        .client-logo:nth-child(5).in-view {
            animation-delay: 0.3s;
        }

        .client-logo:nth-child(n+6).in-view {
            animation-delay: 0.35s;
        }

        /* Logo Text */
        .client-logo span {
            color: #6b7280;
            font-weight: 700;
            font-size: 0.75rem;
            text-align: center;
            position: relative;
            z-index: 2;
            padding: 0.5rem;
            word-break: break-word;
        }

        /* Scroll Controls */
        .scroll-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-top: 3rem;
            position: relative;
            z-index: 10;
        }

        .scroll-button {
            width: 44px;
            height: 44px;
            border-radius: 0.75rem;
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            border: 2px solid rgba(2, 132, 199, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            color: #2563eb;
            font-weight: 900;
            font-size: 1.125rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .scroll-button:hover {
            border-color: #2563eb;
            background: linear-gradient(135deg, #eff6ff, #e0f2fe);
            box-shadow: 0 12px 30px rgba(2, 132, 199, 0.2);
            transform: translateY(-2px);
        }

        .scroll-button:active {
            transform: scale(0.95);
        }

        .scroll-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #6b7280;
            font-size: 0.875rem;
        }

        .scroll-dot {
            width: 6px;
            height: 6px;
            background: linear-gradient(90deg, #2563eb, #0891b2);
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }
    </style>

    <!-- Clients Section -->
    <section class="clients-section" id="clients-section">
        <!-- Accent Blobs -->
        <div class="accent-blob-top"></div>
        <div class="accent-blob-mid"></div>
        <div class="accent-blob-bottom"></div>
        <div class="grid-pattern"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="clients-header">
                <div class="badge">
                    <span class="pulse-dot"></span>
                    <span class="text-badge">Our Partners</span>
                </div>
                
                <h2>
                    Proudly Serving <span class="gradient-text">Global Leaders</span>
                </h2>
                
                <p>Join hundreds of organizations trusting us with their digital transformation</p>
            </div>

            <!-- Horizontal Scroll Container -->
            <div class="clients-scroll-wrapper">
                <div class="clients-scroll-container" id="clients-scroll">
                    <!-- Client Logos -->
                    <div class="client-logo">
                        <span>Client 1</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 2</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 3</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 4</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 5</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 6</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 7</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 8</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 9</span>
                    </div>
                    <div class="client-logo">
                        <span>Client 10</span>
                    </div>
                    <!-- Add more as needed (can go to 100+) -->
                </div>
            </div>

            <!-- Scroll Controls -->
            <div class="scroll-controls">
                <button class="scroll-button" id="scroll-left" title="Scroll left">←</button>
                <div class="scroll-info">
                    <span>Drag or swipe to explore</span>
                    <span class="scroll-dot"></span>
                </div>
                <button class="scroll-button" id="scroll-right" title="Scroll right">→</button>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const clientsSection = document.getElementById('clients-section');
            const clientsHeader = clientsSection.querySelector('.clients-header');
            const clientLogos = clientsSection.querySelectorAll('.client-logo');
            const scrollContainer = document.getElementById('clients-scroll');
            const scrollLeftBtn = document.getElementById('scroll-left');
            const scrollRightBtn = document.getElementById('scroll-right');

            // Scroll Animations Observer
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (clientsHeader) clientsHeader.classList.add('in-view');
                        clientLogos.forEach(logo => {
                            logo.classList.add('in-view');
                        });
                    } else {
                        if (clientsHeader) clientsHeader.classList.remove('in-view');
                        clientLogos.forEach(logo => {
                            logo.classList.remove('in-view');
                        });
                    }
                });
            }, observerOptions);

            observer.observe(clientsSection);

            // Scroll Controls
            scrollLeftBtn.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: -300,
                    behavior: 'smooth'
                });
            });

            scrollRightBtn.addEventListener('click', function() {
                scrollContainer.scrollBy({
                    left: 300,
                    behavior: 'smooth'
                });
            });

            // Drag/Swipe Functionality
            let isDown = false;
            let startX;
            let scrollLeft;

            scrollContainer.addEventListener('mousedown', (e) => {
                isDown = true;
                scrollContainer.classList.add('dragging');
                startX = e.pageX - scrollContainer.offsetLeft;
                scrollLeft = scrollContainer.scrollLeft;
            });

            scrollContainer.addEventListener('mouseleave', () => {
                isDown = false;
                scrollContainer.classList.remove('dragging');
            });

            scrollContainer.addEventListener('mouseup', () => {
                isDown = false;
                scrollContainer.classList.remove('dragging');
            });

            scrollContainer.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 2; // Scroll speed multiplier
                scrollContainer.scrollLeft = scrollLeft - walk;
            });

            // Touch Events for Mobile
            let touchStartX = 0;
            let touchScrollLeft = 0;

            scrollContainer.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].pageX;
                touchScrollLeft = scrollContainer.scrollLeft;
            }, { passive: true });

            scrollContainer.addEventListener('touchmove', (e) => {
                const touchX = e.touches[0].pageX;
                const walk = (touchStartX - touchX) * 1.5; // Scroll speed multiplier
                scrollContainer.scrollLeft = touchScrollLeft + walk;
            }, { passive: true });
        });
    </script>
