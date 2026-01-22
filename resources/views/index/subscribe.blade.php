<style>
    /* ===== SUBSCRIBE SECTION - DARK WITH BLUE/WHITE/ORANGE THEME ===== */
    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-60px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(60px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.6; }
    }

    /* Section Container - DARK BACKGROUND */
    .subscribe-section {
        position: relative;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        padding: 4rem 0;
        overflow: hidden;
    }

    /* Decorative Background Elements */
    .subscribe-bg-grid {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(59, 130, 246, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(59, 130, 246, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        z-index: 1;
    }

    .subscribe-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        z-index: 2;
    }

    .glow-blue {
        top: -100px; left: -100px;
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.15), transparent);
        animation: float 20s ease-in-out infinite;
    }

    .glow-orange {
        bottom: -150px; right: -100px;
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.12), transparent);
        animation: float 25s ease-in-out infinite reverse;
    }

    /* Main Container */
    .subscribe-container {
        position: relative;
        z-index: 10;
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Split Layout */
    .subscribe-split {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        align-items: center;
    }

    @media (min-width: 968px) {
        .subscribe-split {
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }
    }

    /* LEFT SIDE - CONTENT */
    .subscribe-content {
        opacity: 0;
    }

    .subscribe-content.in-view {
        animation: slideInLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .content-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(59, 130, 246, 0.1);
        border: 1.5px solid rgba(59, 130, 246, 0.3);
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 800;
        color: #60a5fa;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(10px);
    }

    .pulse-dot {
        width: 8px; height: 8px;
        background: #f97316;
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
        box-shadow: 0 0 10px rgba(249, 115, 22, 0.8);
    }

    .content-heading {
        font-size: 2.5rem;
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 1rem;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }

    .gradient-text {
        background: linear-gradient(90deg, #3b82f6, #f97316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .content-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1.0625rem;
        line-height: 1.7;
        margin-bottom: 2.5rem;
    }

    /* Features List */
    .content-features {
        display: grid;
        gap: 1.25rem;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(59, 130, 246, 0.2);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        background: rgba(59, 130, 246, 0.05);
        border-color: rgba(59, 130, 246, 0.4);
        transform: translateX(5px);
    }

    .feature-icon {
        width: 40px; height: 40px;
        border-radius: 10px;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
    }

    .feature-icon svg {
        width: 20px; height: 20px;
        color: white;
    }

    .feature-text {
        flex: 1;
    }

    .feature-title {
        font-size: 0.9375rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0.125rem;
    }

    .feature-desc {
        font-size: 0.8125rem;
        color: rgba(255, 255, 255, 0.6);
    }

    /* RIGHT SIDE - FORM */
    .subscribe-form-container {
        opacity: 0;
    }

    .subscribe-form-container.in-view {
        animation: slideInRight 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s forwards;
    }

    .form-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 2.5rem;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .form-heading {
        color: white;
        font-size: 1.75rem;
        font-weight: 900;
        margin-bottom: 0.75rem;
    }

    .form-subheading {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1rem;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    /* Form Group */
    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.875rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .form-input {
        width: 100%;
        padding: 1rem 1.25rem;
        background: rgba(255, 255, 255, 0.08);
        border: 1.5px solid rgba(59, 130, 246, 0.3);
        border-radius: 12px;
        color: white;
        font-size: 1rem;
        outline: none;
        transition: all 0.3s ease;
    }

    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .form-input:focus {
        background: rgba(255, 255, 255, 0.12);
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
    }

    .form-submit {
        width: 100%;
        padding: 1.125rem;
        background: linear-gradient(135deg, #3b82f6, #2563eb);
        color: white;
        font-size: 1rem;
        font-weight: 900;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        position: relative;
        overflow: hidden;
    }

    .form-submit::before {
        content: '';
        position: absolute;
        top: 0; left: -100%;
        width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s;
    }

    .form-submit:hover::before {
        left: 100%;
    }

    .form-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(59, 130, 246, 0.5);
    }

    .form-note {
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.8125rem;
    }

    .form-note-item {
        display: flex;
        align-items: center;
        gap: 0.375rem;
    }

    .form-note-item svg {
        width: 14px; height: 14px;
        color: #22c55e;
    }

    /* Success Message */
    .subscribe-success {
        display: none;
        padding: 1rem;
        background: rgba(34, 197, 94, 0.15);
        border: 1.5px solid rgba(34, 197, 94, 0.4);
        border-radius: 12px;
        margin-bottom: 1rem;
        align-items: center;
        gap: 0.75rem;
        color: #86efac;
    }

    .subscribe-success.show { display: flex; }

    .subscribe-success svg {
        width: 22px; height: 22px;
        flex-shrink: 0;
    }

    .success-text {
        font-size: 0.9375rem;
        font-weight: 700;
    }
</style>

<!-- Subscribe Section -->
<section class="subscribe-section" id="subscribe-section">
    <div class="subscribe-bg-grid"></div>
    <div class="subscribe-glow glow-blue"></div>
    <div class="subscribe-glow glow-orange"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="subscribe-container">
            <div class="subscribe-split">
                <!-- LEFT - CONTENT SIDE -->
                <div class="subscribe-content">
                    <div class="content-badge">
                        <span class="pulse-dot"></span>
                        <span>Newsletter</span>
                    </div>

                    <h2 class="content-heading">
                        Stay Updated with <span class="gradient-text">Latest Insights</span>
                    </h2>

                    <p class="content-description">
                        Get exclusive digital marketing tips, industry updates, and expert advice delivered straight to your inbox every week.
                    </p>

                    <div class="content-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <div class="feature-title">Weekly Insights</div>
                                <div class="feature-desc">Expert tips every Tuesday</div>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <div class="feature-title">No Spam Policy</div>
                                <div class="feature-desc">Your privacy matters to us</div>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <div class="feature-title">Cancel Anytime</div>
                                <div class="feature-desc">Unsubscribe with one click</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT - FORM SIDE -->
                <div class="subscribe-form-container">
                    <div class="form-card">
                        <h3 class="form-heading">Subscribe Now</h3>
                        <p class="form-subheading">
                            Join 2,000+ professionals getting weekly insights
                        </p>

                        <!-- Success Message -->
                        <div class="subscribe-success" id="subscribe-success">
                            <svg fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="success-text">Successfully subscribed!</span>
                        </div>

                        <form id="subscribe-form" onsubmit="handleSubscribe(event)">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input 
                                    type="email" 
                                    class="form-input" 
                                    placeholder="your@email.com"
                                    required
                                    id="subscribe-email"
                                >
                            </div>

                            <button type="submit" class="form-submit">
                                Subscribe to Newsletter
                            </button>
                        </form>

                        <div class="form-note">
                            <div class="form-note-item">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span>Free forever</span>
                            </div>
                            <div class="form-note-item">
                                <svg fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span>No credit card</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    function handleSubscribe(event) {
        event.preventDefault();
        
        const form = document.getElementById('subscribe-form');
        const email = document.getElementById('subscribe-email').value;
        const successMsg = document.getElementById('subscribe-success');
        
        successMsg.classList.add('show');
        form.reset();
        
        setTimeout(() => {
            successMsg.classList.remove('show');
        }, 5000);
        
        console.log('Subscribed:', email);
    }

    // Scroll Animation Observer
    document.addEventListener('DOMContentLoaded', function() {
        const subscribeSection = document.getElementById('subscribe-section');
        const subscribeContent = subscribeSection.querySelector('.subscribe-content');
        const subscribeFormContainer = subscribeSection.querySelector('.subscribe-form-container');

        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (subscribeContent) subscribeContent.classList.add('in-view');
                    if (subscribeFormContainer) subscribeFormContainer.classList.add('in-view');
                } else {
                    if (subscribeContent) subscribeContent.classList.remove('in-view');
                    if (subscribeFormContainer) subscribeFormContainer.classList.remove('in-view');
                }
            });
        }, observerOptions);

        observer.observe(subscribeSection);
    });
</script>
