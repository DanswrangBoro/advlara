<style>
    /* ===== CTA SECTION ANIMATIONS ===== */
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
        50% { transform: translateY(-15px); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.05); }
    }

    @keyframes waveMove {
        0% { transform: translateX(0) translateY(0); }
        100% { transform: translateX(-50%) translateY(0); }
    }

    /* CTA Section - LIGHT BACKGROUND */
    .cta-section {
        position: relative;
        overflow: hidden;
        padding: 5rem 0;
        background: linear-gradient(135deg, #dbeafe 0%, #e0f2fe 50%, #e0e7ff 100%);
    }

    /* Wave Pattern Background */
    .cta-waves {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120' preserveAspectRatio='none'%3E%3Cpath d='M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z' opacity='.25' fill='%233b82f6'/%3E%3Cpath d='M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z' opacity='.5' fill='%233b82f6'/%3E%3Cpath d='M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z' fill='%233b82f6'/%3E%3C/svg%3E");
        background-size: 50% 100%;
        background-repeat: repeat-x;
        opacity: 0.08;
        animation: waveMove 30s linear infinite;
        z-index: 1;
    }

    /* Dots Pattern */
    .cta-dots {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, rgba(59, 130, 246, 0.08) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.4;
        z-index: 2;
    }

    /* Floating Shapes */
    .cta-shape {
        position: absolute;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.12);
        z-index: 3;
    }

    .cta-shape-1 {
        top: 10%;
        left: 8%;
        width: 80px;
        height: 80px;
        animation: float 15s ease-in-out infinite;
    }

    .cta-shape-2 {
        top: 60%;
        right: 10%;
        width: 60px;
        height: 60px;
        animation: float 20s ease-in-out infinite reverse;
    }

    .cta-shape-3 {
        bottom: 20%;
        left: 15%;
        width: 100px;
        height: 100px;
        animation: float 18s ease-in-out infinite;
        animation-delay: 2s;
    }

    /* Content Container */
    .cta-content {
        position: relative;
        z-index: 10;
        text-align: center;
        max-width: 48rem;
        margin: 0 auto;
    }

    /* Badge */
    .cta-badge {
        opacity: 0;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(59, 130, 246, 0.1);
        border: 1px solid rgba(59, 130, 246, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(59, 130, 246, 0.1);
    }

    .cta-badge.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .cta-pulse-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #3b82f6;
        animation: pulse 2s ease-in-out infinite;
        box-shadow: 0 0 15px rgba(59, 130, 246, 0.6);
    }

    /* Heading */
    .cta-heading {
        opacity: 0;
        font-size: 2.25rem;
        font-weight: 900;
        color: #0f172a;
        margin-bottom: 1.25rem;
        line-height: 1.1;
    }

    .cta-heading.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.2s;
    }

    @media (min-width: 768px) {
        .cta-heading {
            font-size: 3rem;
        }
    }

    .gradient-text-cta {
        background: linear-gradient(90deg, #2563eb, #0891b2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Description */
    .cta-description {
        opacity: 0;
        font-size: 1rem;
        color: #475569;
        margin-bottom: 2rem;
        max-width: 38rem;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    .cta-description.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.4s;
    }

    /* Buttons Container */
    .cta-buttons {
        opacity: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        justify-content: center;
        align-items: center;
    }

    .cta-buttons.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.6s;
    }

    @media (min-width: 640px) {
        .cta-buttons {
            flex-direction: row;
        }
    }

    /* Primary Button */
    .cta-btn-primary {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 0.625rem;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: #ffffff;
        font-size: 0.9375rem;
        font-weight: 900;
        border-radius: 9999px;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 40px rgba(59, 130, 246, 0.3);
        overflow: hidden;
    }

    .cta-btn-primary::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }

    .cta-btn-primary:hover::before {
        transform: translateX(100%);
    }

    .cta-btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 50px rgba(59, 130, 246, 0.4);
    }

    .cta-btn-primary svg {
        width: 18px;
        height: 18px;
        transition: transform 0.3s ease;
    }

    .cta-btn-primary:hover svg {
        transform: translateX(4px);
    }

    /* Secondary Button */
    .cta-btn-secondary {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 0.625rem;
        padding: 1rem 2rem;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        color: #1e40af;
        font-size: 0.9375rem;
        font-weight: 900;
        border-radius: 9999px;
        border: 2px solid rgba(59, 130, 246, 0.3);
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 40px rgba(59, 130, 246, 0.15);
        overflow: hidden;
    }

    .cta-btn-secondary::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(59, 130, 246, 0.05);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .cta-btn-secondary:hover::before {
        opacity: 1;
    }

    .cta-btn-secondary:hover {
        border-color: #3b82f6;
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 50px rgba(59, 130, 246, 0.25);
    }

    .cta-btn-secondary svg {
        width: 18px;
        height: 18px;
        transition: transform 0.3s ease;
    }

    .cta-btn-secondary:hover svg {
        transform: scale(1.2);
    }
</style>

<!-- CTA Section -->
<section class="cta-section" id="cta-section">
    <!-- Wave Background -->
    <div class="cta-waves"></div>
    
    <!-- Dots Pattern -->
    <div class="cta-dots"></div>
    
    <!-- Floating Shapes -->
    <div class="cta-shape cta-shape-1"></div>
    <div class="cta-shape cta-shape-2"></div>
    <div class="cta-shape cta-shape-3"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="cta-content">
            <!-- Badge -->
            <div class="cta-badge">
                <span class="cta-pulse-dot"></span>
                <span class="text-xs font-black text-blue-600 uppercase tracking-wider">Let's Get Started</span>
            </div>

            <!-- Heading -->
            <h2 class="cta-heading">
                Ready to Transform Your <span class="gradient-text-cta">Business?</span>
            </h2>

            <!-- Description -->
            <p class="cta-description">
                Let's work together to create innovative digital solutions that drive real results for your business
            </p>

            <!-- Buttons -->
            <div class="cta-buttons">
                <a href="/contact" class="cta-btn-primary">
                    Get Started Today
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>

                <a href="/portfolio" class="cta-btn-secondary">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    View Our Work
                </a>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctaSection = document.getElementById('cta-section');
        const ctaBadge = ctaSection.querySelector('.cta-badge');
        const ctaHeading = ctaSection.querySelector('.cta-heading');
        const ctaDescription = ctaSection.querySelector('.cta-description');
        const ctaButtons = ctaSection.querySelector('.cta-buttons');

        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (ctaBadge) ctaBadge.classList.add('in-view');
                    if (ctaHeading) ctaHeading.classList.add('in-view');
                    if (ctaDescription) ctaDescription.classList.add('in-view');
                    if (ctaButtons) ctaButtons.classList.add('in-view');
                } else {
                    if (ctaBadge) ctaBadge.classList.remove('in-view');
                    if (ctaHeading) ctaHeading.classList.remove('in-view');
                    if (ctaDescription) ctaDescription.classList.remove('in-view');
                    if (ctaButtons) ctaButtons.classList.remove('in-view');
                }
            });
        }, observerOptions);

        observer.observe(ctaSection);
    });
</script>
