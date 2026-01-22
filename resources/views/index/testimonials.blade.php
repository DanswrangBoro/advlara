<style>
    /* ===== TESTIMONIALS CAROUSEL ANIMATIONS ===== */
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

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    /* Testimonials Section */
    .testimonials-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0f172a 100%);
        padding: 3rem 0 4rem 0;
    }

    @media (min-width: 768px) {
        .testimonials-section {
            padding: 5rem 0 6rem 0;
        }
    }

    /* Background Image Overlay */
    .testimonials-bg-overlay {
        position: absolute;
        inset: 0;
        background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1920');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        opacity: 0.1;
        z-index: 0;
    }

    /* Accent Blobs */
    .testimonial-blob-1 {
        position: absolute;
        top: -100px;
        left: -100px;
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.2), transparent);
        border-radius: 50%;
        filter: blur(60px);
        z-index: 1;
        animation: float 15s ease-in-out infinite;
    }

    @media (min-width: 768px) {
        .testimonial-blob-1 {
            width: 400px;
            height: 400px;
        }
    }

    .testimonial-blob-2 {
        position: absolute;
        bottom: -150px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(6, 182, 212, 0.15), transparent);
        border-radius: 50%;
        filter: blur(70px);
        z-index: 1;
        animation: float 20s ease-in-out infinite reverse;
    }

    @media (min-width: 768px) {
        .testimonial-blob-2 {
            width: 500px;
            height: 500px;
        }
    }

    /* Subtle Grid Pattern */
    .testimonials-grid-pattern {
        position: absolute;
        inset: 0;
        opacity: 0.03;
        background-image: 
            repeating-linear-gradient(0deg, transparent, transparent 2px, #ffffff 2px, #ffffff 4px),
            repeating-linear-gradient(90deg, transparent, transparent 2px, #ffffff 2px, #ffffff 4px);
        background-size: 50px 50px;
        z-index: 1;
    }

    /* Header */
    .testimonials-header {
        opacity: 0;
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
        z-index: 10;
        padding: 0 1rem;
    }

    @media (min-width: 768px) {
        .testimonials-header {
            margin-bottom: 3rem;
        }
    }

    .testimonials-header.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .testimonials-header .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        margin-bottom: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
    }

    .testimonials-header .pulse-dot {
        width: 6px;
        height: 6px;
        background: #ffffff;
        border-radius: 50%;
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .testimonials-header h2 {
        font-size: 1.75rem;
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 0.75rem;
        line-height: 1.2;
    }

    @media (min-width: 640px) {
        .testimonials-header h2 {
            font-size: 2rem;
        }
    }

    @media (min-width: 768px) {
        .testimonials-header h2 {
            font-size: 2.5rem;
        }
    }

    .gradient-text-testimonial {
        background: linear-gradient(90deg, #60a5fa, #06b6d4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 900;
    }

    .testimonials-header p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.875rem;
        max-width: 36rem;
        margin: 0 auto;
        padding: 0 1rem;
    }

    @media (min-width: 768px) {
        .testimonials-header p {
            font-size: 1rem;
        }
    }

    /* 3D Carousel Container */
    .carousel-3d-wrapper {
        position: relative;
        width: 100%;
        height: 320px;
        perspective: 1000px;
        margin: 0 auto 1.5rem auto;
        z-index: 10;
    }

    @media (min-width: 640px) {
        .carousel-3d-wrapper {
            height: 350px;
        }
    }

    @media (min-width: 768px) {
        .carousel-3d-wrapper {
            height: 380px;
            margin-bottom: 2rem;
        }
    }

    .carousel-3d-container {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Testimonial Card */
    .testimonial-card-3d {
        position: absolute;
        width: 280px;
        max-width: 85vw;
        left: 50%;
        top: 50%;
        transform-style: preserve-3d;
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
        backdrop-filter: blur(20px);
        border-radius: 1rem;
        padding: 1.25rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
    }

    @media (min-width: 640px) {
        .testimonial-card-3d {
            width: 300px;
            padding: 1.5rem;
            border-radius: 1.25rem;
        }
    }

    @media (min-width: 768px) {
        .testimonial-card-3d {
            width: 320px;
            padding: 1.75rem;
        }
    }

    .testimonial-card-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.8), transparent);
    }

    .testimonial-card-3d::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 0% 0%, rgba(59, 130, 246, 0.15), transparent 50%);
        border-radius: 1.25rem;
    }

    /* Quote Icon */
    .quote-icon {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
        box-shadow: 0 6px 16px rgba(59, 130, 246, 0.4);
    }

    @media (min-width: 768px) {
        .quote-icon {
            width: 36px;
            height: 36px;
            margin-bottom: 1rem;
        }
    }

    /* Stars */
    .stars {
        display: flex;
        align-items: center;
        gap: 0.15rem;
        margin-bottom: 0.75rem;
    }

    @media (min-width: 768px) {
        .stars {
            gap: 0.2rem;
            margin-bottom: 1rem;
        }
    }

    .star {
        width: 0.75rem;
        height: 0.75rem;
        color: #fbbf24;
    }

    @media (min-width: 768px) {
        .star {
            width: 0.875rem;
            height: 0.875rem;
        }
    }

    /* Review Text */
    .review-text {
        color: rgba(255, 255, 255, 0.95);
        font-size: 0.75rem;
        line-height: 1.5;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
        font-style: italic;
    }

    @media (min-width: 640px) {
        .review-text {
            font-size: 0.8125rem;
        }
    }

    @media (min-width: 768px) {
        .review-text {
            margin-bottom: 1.25rem;
        }
    }

    /* Reviewer Info */
    .reviewer {
        display: flex;
        align-items: center;
        gap: 0.625rem;
        position: relative;
        z-index: 2;
    }

    @media (min-width: 768px) {
        .reviewer {
            gap: 0.75rem;
        }
    }

    .reviewer-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 800;
        font-size: 0.8125rem;
        flex-shrink: 0;
        box-shadow: 0 6px 16px rgba(59, 130, 246, 0.4);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    @media (min-width: 768px) {
        .reviewer-avatar {
            width: 42px;
            height: 42px;
            font-size: 0.9375rem;
        }
    }

    .reviewer-info {
        flex: 1;
    }

    .reviewer-name {
        font-weight: 800;
        color: #ffffff;
        font-size: 0.75rem;
        margin-bottom: 0.125rem;
    }

    @media (min-width: 768px) {
        .reviewer-name {
            font-size: 0.8125rem;
        }
    }

    .reviewer-role {
        font-size: 0.625rem;
        color: rgba(255, 255, 255, 0.7);
    }

    @media (min-width: 768px) {
        .reviewer-role {
            font-size: 0.6875rem;
        }
    }

    /* GMB Badge */
    .gmb-badge {
        position: absolute;
        top: 0.75rem;
        right: 0.75rem;
        background: linear-gradient(135deg, #ffffff, #f3f4f6);
        padding: 0.25rem 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.5rem;
        font-weight: 800;
        color: #1f2937;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        z-index: 3;
    }

    @media (min-width: 768px) {
        .gmb-badge {
            top: 1rem;
            right: 1rem;
            font-size: 0.5625rem;
        }
    }

    /* Carousel Controls */
    .carousel-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.25rem;
        position: relative;
        z-index: 10;
        padding: 0 1rem;
    }

    @media (min-width: 768px) {
        .carousel-controls {
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }
    }

    .carousel-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(6, 182, 212, 0.1));
        border: 2px solid rgba(255, 255, 255, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        color: #ffffff;
        font-weight: 900;
        font-size: 1rem;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        flex-shrink: 0;
    }

    @media (min-width: 768px) {
        .carousel-btn {
            width: 44px;
            height: 44px;
            font-size: 1.125rem;
        }
    }

    .carousel-btn:hover {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.4), rgba(6, 182, 212, 0.2));
        border-color: #3b82f6;
        box-shadow: 0 10px 28px rgba(59, 130, 246, 0.4);
        transform: scale(1.08);
    }

    .carousel-btn:active {
        transform: scale(0.95);
    }

    /* Carousel Indicators */
    .carousel-indicators {
        display: flex;
        gap: 0.5rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    @media (min-width: 768px) {
        .carousel-indicators {
            gap: 0.625rem;
        }
    }

    .carousel-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        border: 2px solid rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    @media (min-width: 768px) {
        .carousel-indicator {
            width: 10px;
            height: 10px;
        }
    }

    .carousel-indicator.active {
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        border-color: #ffffff;
        width: 10px;
        height: 10px;
        box-shadow: 0 0 16px rgba(59, 130, 246, 0.6);
    }

    @media (min-width: 768px) {
        .carousel-indicator.active {
            width: 12px;
            height: 12px;
        }
    }

    /* Play/Pause Button */
    .play-pause-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 0;
        padding: 0 1rem;
    }

    .play-pause-btn {
        padding: 0.5rem 1rem;
        border-radius: 0.75rem;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(6, 182, 212, 0.1));
        border: 2px solid rgba(255, 255, 255, 0.3);
        color: rgba(255, 255, 255, 0.95);
        font-size: 0.75rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    @media (min-width: 768px) {
        .play-pause-btn {
            padding: 0.625rem 1.25rem;
            font-size: 0.8125rem;
        }
    }

    .play-pause-btn:hover {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.3), rgba(6, 182, 212, 0.15));
        border-color: #3b82f6;
        box-shadow: 0 10px 28px rgba(59, 130, 246, 0.4);
        transform: translateY(-2px);
    }

    .play-pause-btn:active {
        transform: scale(0.98);
    }

    .play-pause-btn.paused {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(5, 150, 105, 0.1));
        border-color: rgba(16, 185, 129, 0.4);
    }

    .play-pause-btn.paused:hover {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.15));
        border-color: #10b981;
    }

    .play-pause-icon {
        font-size: 0.875rem;
    }

    @media (min-width: 768px) {
        .play-pause-icon {
            font-size: 1rem;
        }
    }
</style>

<!-- Testimonials Section -->
<section class="testimonials-section" id="testimonials-section">
    <!-- Background Elements -->
    <div class="testimonials-bg-overlay"></div>
    <div class="testimonial-blob-1"></div>
    <div class="testimonial-blob-2"></div>
    <div class="testimonials-grid-pattern"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="testimonials-header">
            <div class="badge">
                <span class="pulse-dot"></span>
                <span class="text-xs font-bold text-white uppercase tracking-wider">Testimonials</span>
            </div>
            
            <h2>
                What Our <span class="gradient-text-testimonial">Clients Say</span>
            </h2>
            
            <p>
                Discover authentic reviews from our satisfied clients on Google My Business
            </p>
        </div>

        <!-- 3D Carousel -->
        <div class="carousel-3d-wrapper">
            <div class="carousel-3d-container" id="carousel-3d">
                <!-- Testimonial Cards will be positioned via JavaScript -->
            </div>
        </div>

        <!-- Carousel Controls -->
        <div class="carousel-controls">
            <button class="carousel-btn" id="carousel-prev" title="Previous">‹</button>
            
            <div class="carousel-indicators" id="carousel-indicators">
                <!-- Indicators will be generated via JavaScript -->
            </div>
            
            <button class="carousel-btn" id="carousel-next" title="Next">›</button>
        </div>

        <!-- Play/Pause Button -->
        <div class="play-pause-wrapper">
            <button class="play-pause-btn" id="play-pause-btn">
                <span class="play-pause-icon" id="play-pause-icon">⏸</span>
                <span id="play-pause-text">Pause</span>
            </button>
        </div>
    </div>
</section>

<!-- JavaScript (Keep the same as before) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Testimonials Data
        const testimonials = [
            {
                initials: 'JD',
                name: 'John Doe',
                role: 'CEO, Tech Company',
                review: 'Exceptional service and outstanding results. Adventure Code transformed our digital presence completely. Highly professional team!'
            },
            {
                initials: 'SS',
                name: 'Sarah Smith',
                role: 'Marketing Director',
                review: 'Professional, responsive, and delivered beyond our expectations. The team truly understands client needs. Highly recommend!'
            },
            {
                initials: 'MJ',
                name: 'Mike Johnson',
                role: 'Product Manager',
                review: 'The team at Adventure Code is incredible. They understood our needs perfectly and delivered exactly what we wanted!'
            },
            {
                initials: 'EW',
                name: 'Emily Wilson',
                role: 'Startup Founder',
                review: 'Outstanding technical expertise combined with excellent customer service. They helped us launch ahead of schedule!'
            },
            {
                initials: 'DB',
                name: 'David Brown',
                role: 'Operations Head',
                review: 'Impressed by their attention to detail and commitment to quality. Every interaction was professional and productive!'
            }
        ];

        const testimonialsSection = document.getElementById('testimonials-section');
        const testimonialsHeader = testimonialsSection.querySelector('.testimonials-header');
        const carouselContainer = document.getElementById('carousel-3d');
        const indicatorsContainer = document.getElementById('carousel-indicators');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const playPauseBtn = document.getElementById('play-pause-btn');
        const playPauseIcon = document.getElementById('play-pause-icon');
        const playPauseText = document.getElementById('play-pause-text');

        let currentIndex = 0;
        let autoplayInterval;
        let isPlaying = true;

        // Generate Testimonial Cards
        function generateCards() {
            carouselContainer.innerHTML = '';
            indicatorsContainer.innerHTML = '';

            testimonials.forEach((testimonial, index) => {
                // Create Card
                const card = document.createElement('div');
                card.className = 'testimonial-card-3d';
                card.innerHTML = `
                    <div class="gmb-badge">Google Review</div>
                    
                    <div class="quote-icon">
                        <svg class="w-3 h-3 md:w-4 md:h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                    </div>

                    <div class="stars">
                        ${'<svg class="star" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>'.repeat(5)}
                    </div>

                    <p class="review-text">"${testimonial.review}"</p>

                    <div class="reviewer">
                        <div class="reviewer-avatar">${testimonial.initials}</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name">${testimonial.name}</div>
                            <div class="reviewer-role">${testimonial.role}</div>
                        </div>
                    </div>
                `;
                carouselContainer.appendChild(card);

                // Create Indicator
                const indicator = document.createElement('div');
                indicator.className = 'carousel-indicator' + (index === 0 ? ' active' : '');
                indicator.addEventListener('click', () => goToSlide(index));
                indicatorsContainer.appendChild(indicator);
            });
        }

        // Position Cards in 3D Space
        function positionCards() {
            const cards = carouselContainer.querySelectorAll('.testimonial-card-3d');
            const angleStep = 360 / testimonials.length;
            
            // Adjust radius based on screen size
            const radius = window.innerWidth < 640 ? 300 : window.innerWidth < 768 ? 350 : 400;

            cards.forEach((card, index) => {
                const angle = (angleStep * (index - currentIndex)) * (Math.PI / 180);
                const x = Math.sin(angle) * radius;
                const z = Math.cos(angle) * radius;
                const rotateY = -angleStep * (index - currentIndex);

                const scale = z > 0 ? 1 : 0.75;
                const opacity = z > 0 ? 1 : 0.35;
                const zIndex = z > 0 ? 10 : 1;

                card.style.transform = `translateX(calc(-50% + ${x}px)) translateY(-50%) translateZ(${z}px) rotateY(${rotateY}deg) scale(${scale})`;
                card.style.opacity = opacity;
                card.style.zIndex = zIndex;
            });

            // Update Indicators
            document.querySelectorAll('.carousel-indicator').forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentIndex);
            });
        }

        // Go to Specific Slide
        function goToSlide(index) {
            currentIndex = index;
            positionCards();
        }

        // Next Slide
        function nextSlide() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            positionCards();
        }

        // Previous Slide
        function prevSlide() {
            currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
            positionCards();
        }

        // Auto-play
        function startAutoplay() {
            autoplayInterval = setInterval(nextSlide, 4000);
            isPlaying = true;
            playPauseIcon.textContent = '⏸';
            playPauseText.textContent = 'Pause';
            playPauseBtn.classList.remove('paused');
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
            isPlaying = false;
            playPauseIcon.textContent = '▶';
            playPauseText.textContent = 'Play';
            playPauseBtn.classList.add('paused');
        }

        // Event Listeners
        prevBtn.addEventListener('click', () => {
            prevSlide();
        });

        nextBtn.addEventListener('click', () => {
            nextSlide();
        });

        playPauseBtn.addEventListener('click', () => {
            if (isPlaying) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });

        // Handle Window Resize
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                positionCards();
            }, 250);
        });

        // Scroll Animation Observer
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (testimonialsHeader) testimonialsHeader.classList.add('in-view');
                } else {
                    if (testimonialsHeader) testimonialsHeader.classList.remove('in-view');
                }
            });
        }, observerOptions);

        observer.observe(testimonialsSection);

        // Initialize
        generateCards();
        positionCards();
        startAutoplay();
    });
</script>
