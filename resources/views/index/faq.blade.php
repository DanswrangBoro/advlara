<style>
    /* ===== FAQ SECTION ANIMATIONS ===== */
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
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(3deg); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.05); }
    }

    @keyframes gradientShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    @keyframes ripple {
        0% { transform: scale(0.8); opacity: 1; }
        100% { transform: scale(2.5); opacity: 0; }
    }

    /* FAQ Section - VIBRANT BACKGROUND - REDUCED PADDING */
    .faq-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(-45deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #00f2fe 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        padding: 4rem 0;
    }

    /* Overlay for Readability */
    .faq-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(30, 41, 59, 0.9) 100%);
        z-index: 1;
    }

    /* Floating Orbs - SMALLER */
    .faq-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(50px);
        opacity: 0.5;
        z-index: 2;
    }

    .faq-orb-1 {
        top: 10%;
        left: 10%;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.4), transparent);
        animation: float 20s ease-in-out infinite;
    }

    .faq-orb-2 {
        top: 50%;
        right: 5%;
        width: 180px;
        height: 180px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.3), transparent);
        animation: float 25s ease-in-out infinite reverse;
    }

    .faq-orb-3 {
        bottom: 15%;
        left: 40%;
        width: 150px;
        height: 150px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.35), transparent);
        animation: float 18s ease-in-out infinite;
    }

    /* Header - SMALLER */
    .faq-header {
        opacity: 0;
        text-align: center;
        margin-bottom: 2.5rem;
        position: relative;
        z-index: 10;
    }

    .faq-header.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .faq-header .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        margin-bottom: 1rem;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .faq-header .pulse-dot {
        width: 8px;
        height: 8px;
        background: linear-gradient(135deg, #60a5fa, #a78bfa);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
        box-shadow: 0 0 20px rgba(96, 165, 250, 0.8);
    }

    .faq-header h2 {
        font-size: 2rem;
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 0.75rem;
        line-height: 1.1;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    @media (min-width: 768px) {
        .faq-header h2 {
            font-size: 2.75rem;
        }
    }

    .gradient-text-faq {
        background: linear-gradient(90deg, #60a5fa, #a78bfa, #f0abfc);
        background-size: 200% 100%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: gradientShift 3s ease infinite;
    }

    .faq-header p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.9375rem;
        max-width: 36rem;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    /* FAQ Container - SMALLER MAX-WIDTH */
    .faq-container {
        max-width: 46rem;
        margin: 0 auto;
        position: relative;
        z-index: 10;
    }

    /* FAQ Item - SMALLER SPACING */
    .faq-item {
        opacity: 0;
        margin-bottom: 1rem;
        position: relative;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-item.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .faq-item:nth-child(1).in-view { animation-delay: 0.1s; }
    .faq-item:nth-child(2).in-view { animation-delay: 0.2s; }
    .faq-item:nth-child(3).in-view { animation-delay: 0.3s; }
    .faq-item:nth-child(4).in-view { animation-delay: 0.4s; }

    /* Card with Gradient Border Effect - SMALLER BORDER RADIUS */
    .faq-card-wrapper {
        position: relative;
        padding: 2px;
        border-radius: 1rem;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-card-wrapper::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 1rem;
        padding: 2px;
        background: linear-gradient(135deg, #60a5fa, #a78bfa, #f0abfc);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .faq-item.active .faq-card-wrapper::before,
    .faq-card-wrapper:hover::before {
        opacity: 1;
    }

    .faq-card {
        background: rgba(30, 41, 59, 0.6);
        backdrop-filter: blur(30px);
        border-radius: 1rem;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    .faq-card:hover {
        background: rgba(30, 41, 59, 0.7);
        box-shadow: 0 15px 50px rgba(96, 165, 250, 0.2);
        transform: translateY(-3px);
    }

    .faq-item.active .faq-card {
        background: rgba(30, 41, 59, 0.8);
        box-shadow: 0 20px 60px rgba(96, 165, 250, 0.3);
    }

    /* Shimmer Effect on Top - SMALLER */
    .faq-shimmer {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(96, 165, 250, 0.8), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }

    .faq-item.active .faq-shimmer {
        animation: shimmerSlide 1.5s ease infinite;
    }

    @keyframes shimmerSlide {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Question Button - SMALLER PADDING */
    .faq-question {
        width: 100%;
        text-align: left;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .faq-question-text {
        font-size: 1rem;
        font-weight: 900;
        color: #ffffff;
        line-height: 1.4;
        flex: 1;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-question-text {
        background: linear-gradient(90deg, #60a5fa, #a78bfa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Icon with Ripple Effect - SMALLER */
    .faq-icon-wrapper {
        position: relative;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
    }

    .faq-ripple {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: linear-gradient(135deg, #60a5fa, #a78bfa);
        opacity: 0;
    }

    .faq-item.active .faq-ripple {
        animation: ripple 1.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    }

    .faq-icon {
        position: relative;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(96, 165, 250, 0.2), rgba(167, 139, 246, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .faq-item.active .faq-icon {
        background: linear-gradient(135deg, #60a5fa, #a78bfa);
        transform: rotate(180deg);
        box-shadow: 0 6px 25px rgba(96, 165, 250, 0.4);
    }

    .faq-icon svg {
        width: 20px;
        height: 20px;
        color: #60a5fa;
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-icon svg {
        color: white;
    }

    /* Answer Content - SMALLER PADDING */
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1), padding 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-item.active .faq-answer {
        max-height: 400px;
        padding: 0 1.5rem 1.25rem 1.5rem;
    }

    .faq-answer-content {
        padding: 1.25rem;
        background: linear-gradient(135deg, rgba(96, 165, 250, 0.12), rgba(167, 139, 246, 0.08));
        border-radius: 0.75rem;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.875rem;
        line-height: 1.7;
        box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }

    /* Contact CTA - SMALLER */
    .faq-cta {
        opacity: 0;
        text-align: center;
        margin-top: 2.5rem;
    }

    .faq-cta.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.5s;
    }

    .faq-cta-button {
        display: inline-flex;
        align-items: center;
        gap: 0.625rem;
        padding: 0.875rem 2rem;
        background: linear-gradient(135deg, #60a5fa, #a78bfa);
        color: white;
        font-size: 0.875rem;
        font-weight: 900;
        border-radius: 9999px;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 12px 35px rgba(96, 165, 250, 0.4);
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .faq-cta-button::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), transparent);
        transform: translateX(-100%) rotate(45deg);
        transition: transform 0.6s ease;
    }

    .faq-cta-button:hover::before {
        transform: translateX(100%) rotate(45deg);
    }

    .faq-cta-button:hover {
        transform: translateY(-4px) scale(1.05);
        box-shadow: 0 20px 50px rgba(96, 165, 250, 0.6);
    }

    .faq-cta-button svg {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
    }

    .faq-cta-button:hover svg {
        transform: translateX(4px);
    }
</style>

<!-- FAQ Section -->
<section class="faq-section" id="faq-section">
    <!-- Overlay -->
    <div class="faq-overlay"></div>
    
    <!-- Floating Orbs -->
    <div class="faq-orb faq-orb-1"></div>
    <div class="faq-orb faq-orb-2"></div>
    <div class="faq-orb faq-orb-3"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="faq-header">
            <div class="badge">
                <span class="pulse-dot"></span>
                <span class="text-xs font-black text-white uppercase tracking-wider">Questions & Answers</span>
            </div>
            
            <h2>
                Got <span class="gradient-text-faq">Questions?</span>
            </h2>
            
            <p>
                Find everything you need to know about our services and solutions
            </p>
        </div>

        <!-- FAQ Container -->
        <div class="faq-container">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <div class="faq-card-wrapper">
                    <div class="faq-card">
                        <div class="faq-shimmer"></div>
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text">
                                How does email marketing help with customer retention?
                            </span>
                            <div class="faq-icon-wrapper">
                                <div class="faq-ripple"></div>
                                <div class="faq-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                By regularly communicating via email, you build trust, provide updates, and encourage repeat business. Email campaigns keep your brand top-of-mind and nurture long-term customer relationships.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <div class="faq-card-wrapper">
                    <div class="faq-card">
                        <div class="faq-shimmer"></div>
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text">
                                Do you offer both on-site and remote support?
                            </span>
                            <div class="faq-icon-wrapper">
                                <div class="faq-ripple"></div>
                                <div class="faq-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Yes, we offer both on-site and remote support to meet your business's needs. Our flexible approach ensures you get the right level of assistance wherever you are.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item">
                <div class="faq-card-wrapper">
                    <div class="faq-card">
                        <div class="faq-shimmer"></div>
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text">
                                How long does it take to see results from digital marketing?
                            </span>
                            <div class="faq-icon-wrapper">
                                <div class="faq-ripple"></div>
                                <div class="faq-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                The time varies based on the strategy implemented and your business goals. Typically, initial results can be seen within 3-6 months, with continuous improvement over time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <div class="faq-card-wrapper">
                    <div class="faq-card">
                        <div class="faq-shimmer"></div>
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span class="faq-question-text">
                                What IT services does Adventure Code provide?
                            </span>
                            <div class="faq-icon-wrapper">
                                <div class="faq-ripple"></div>
                                <div class="faq-icon">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                We offer custom web development, cybersecurity, IT consulting, and ongoing system support to help your business thrive in the digital age.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="faq-cta">
            <a href="/contact" class="faq-cta-button">
                Get In Touch
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    function toggleFAQ(button) {
        const faqItem = button.closest('.faq-item');
        const allItems = document.querySelectorAll('.faq-item');
        
        // Close all other items
        allItems.forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
            }
        });
        
        // Toggle current item
        faqItem.classList.toggle('active');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const faqSection = document.getElementById('faq-section');
        const faqHeader = faqSection.querySelector('.faq-header');
        const faqItems = faqSection.querySelectorAll('.faq-item');
        const faqCta = faqSection.querySelector('.faq-cta');

        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (faqHeader) faqHeader.classList.add('in-view');
                    if (faqCta) faqCta.classList.add('in-view');
                    faqItems.forEach(item => {
                        item.classList.add('in-view');
                    });
                } else {
                    if (faqHeader) faqHeader.classList.remove('in-view');
                    if (faqCta) faqCta.classList.remove('in-view');
                    faqItems.forEach(item => {
                        item.classList.remove('in-view');
                    });
                }
            });
        }, observerOptions);

        observer.observe(faqSection);
    });
</script>
