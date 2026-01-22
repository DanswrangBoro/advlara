<style>
    /* ===== BLOG SECTION ANIMATIONS ===== */
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

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-12px); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }

    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }

    /* Blog Section - LIGHT BACKGROUND */
    .blog-section {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 50%, #e0f2fe 100%);
        padding: 6rem 0;
    }

    /* Animated Grid Background */
    .blog-grid-bg {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(59, 130, 246, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(59, 130, 246, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 0;
    }

    /* Accent Blobs */
    .blog-blob-1 {
        position: absolute;
        top: 100px;
        left: -200px;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08), transparent);
        border-radius: 50%;
        filter: blur(80px);
        z-index: 1;
        animation: float 20s ease-in-out infinite;
    }

    .blog-blob-2 {
        position: absolute;
        bottom: -200px;
        right: -150px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(6, 182, 212, 0.06), transparent);
        border-radius: 50%;
        filter: blur(70px);
        z-index: 1;
        animation: float 18s ease-in-out infinite reverse;
    }

    /* Header */
    .blog-header {
        opacity: 0;
        text-align: center;
        margin-bottom: 4rem;
        position: relative;
        z-index: 10;
    }

    .blog-header.in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    .blog-header .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(6, 182, 212, 0.05));
        border: 1px solid rgba(59, 130, 246, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        margin-bottom: 1rem;
        box-shadow: 0 4px 20px rgba(59, 130, 246, 0.1);
        backdrop-filter: blur(10px);
    }

    .blog-header .pulse-dot {
        width: 6px;
        height: 6px;
        background: #3b82f6;
        border-radius: 50%;
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .blog-header h2 {
        font-size: 2.5rem;
        font-weight: 900;
        color: #0f172a;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    @media (min-width: 768px) {
        .blog-header h2 {
            font-size: 3.5rem;
        }
    }

    .gradient-text-blog {
        background: linear-gradient(90deg, #2563eb, #0891b2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 900;
    }

    .blog-header p {
        color: #64748b;
        font-size: 1rem;
        max-width: 42rem;
        margin: 0 auto;
    }

    /* Blog Grid */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 2rem;
        position: relative;
        z-index: 10;
    }

    @media (min-width: 768px) {
        .blog-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Blog Card */
    .blog-card {
        opacity: 0;
        position: relative;
        background: transparent;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Card 1: Slide from LEFT */
    .blog-card:nth-child(1).in-view {
        animation: slideInLeftHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    /* Card 2: Slide from BOTTOM */
    .blog-card:nth-child(2).in-view {
        animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.15s;
    }

    /* Card 3: Slide from RIGHT */
    .blog-card:nth-child(3).in-view {
        animation: slideInRightHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        animation-delay: 0.3s;
    }

    /* Card Inner Container */
    .blog-card-inner {
        position: relative;
        height: 100%;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 250, 252, 0.8));
        backdrop-filter: blur(20px);
        border: 2px solid rgba(59, 130, 246, 0.15);
        border-radius: 1.5rem;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
    }

    /* REMOVED BORDER COLOR CHANGE ON HOVER */
    .blog-card:hover .blog-card-inner {
        background: linear-gradient(135deg, rgba(255, 255, 255, 1), rgba(240, 249, 255, 0.9));
        box-shadow: 0 20px 60px rgba(59, 130, 246, 0.15);
        transform: translateY(-8px);
    }

    /* Animated Top Accent Line */
    .blog-card-accent {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #06b6d4, #3b82f6);
        background-size: 200% 100%;
        animation: shimmer 3s ease-in-out infinite;
    }

    /* Image Section */
    .blog-image-section {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .blog-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .blog-card:hover .blog-image {
        transform: scale(1.15);
    }

    /* Image Overlay */
    .blog-image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, transparent, rgba(15, 23, 42, 0.6));
        z-index: 1;
    }

    /* Floating Info on Image */
    .blog-floating-info {
        position: absolute;
        bottom: 1rem;
        left: 1.5rem;
        right: 1.5rem;
        z-index: 2;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .blog-category {
        padding: 0.375rem 0.875rem;
        border-radius: 0.5rem;
        font-size: 0.6875rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .blog-category.marketing {
        background: linear-gradient(135deg, rgba(249, 115, 22, 0.95), rgba(234, 88, 12, 0.95));
        color: white;
    }

    .blog-category.development {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.95), rgba(37, 99, 235, 0.95));
        color: white;
    }

    .blog-category.seo {
        background: linear-gradient(135deg, rgba(8, 145, 178, 0.95), rgba(14, 116, 144, 0.95));
        color: white;
    }

    .blog-date {
        padding: 0.375rem 0.75rem;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 0.5rem;
        font-size: 0.6875rem;
        color: #0f172a;
        font-weight: 700;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(59, 130, 246, 0.2);
    }

    /* Content Section */
    .blog-content {
        padding: 1.75rem 1.5rem 1.5rem 1.5rem;
    }

    .blog-title {
        font-size: 1.25rem;
        font-weight: 900;
        color: #0f172a;
        margin-bottom: 0.875rem;
        line-height: 1.3;
        transition: all 0.3s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-card:hover .blog-title {
        background: linear-gradient(90deg, #2563eb, #0891b2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .blog-excerpt {
        color: #64748b;
        font-size: 0.875rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Footer Section */
    .blog-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(59, 130, 246, 0.15);
    }

    .blog-read-time {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.75rem;
        color: #64748b;
    }

    .blog-read-time svg {
        width: 14px;
        height: 14px;
    }

    /* Read More Button */
    .blog-read-more {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(6, 182, 212, 0.05));
        border: 1px solid rgba(59, 130, 246, 0.3);
        border-radius: 0.5rem;
        color: #2563eb;
        font-size: 0.8125rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .blog-read-more:hover {
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(6, 182, 212, 0.1));
        border-color: #2563eb;
        transform: translateX(4px);
    }

    .blog-read-more svg {
        width: 14px;
        height: 14px;
        transition: transform 0.3s ease;
    }

    .blog-read-more:hover svg {
        transform: translateX(3px);
    }
</style>

<!-- Blog Section -->
<section class="blog-section" id="blog-section">
    <!-- Background Elements -->
    <div class="blog-grid-bg"></div>
    <div class="blog-blob-1"></div>
    <div class="blog-blob-2"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="blog-header">
            <div class="badge">
                <span class="pulse-dot"></span>
                <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Latest Insights</span>
            </div>
            
            <h2>
                Explore Our <span class="gradient-text-blog">Knowledge Hub</span>
            </h2>
            
            <p>
                Stay ahead with expert articles, industry insights, and practical guides to help your business thrive
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="blog-grid">
            <!-- Blog Card 1 -->
            <article class="blog-card">
                <div class="blog-card-inner">
                    <div class="blog-card-accent"></div>
                    
                    <div class="blog-image-section">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Digital Marketing Trends" class="blog-image">
                        <div class="blog-image-overlay"></div>
                        
                        <div class="blog-floating-info">
                            <span class="blog-category marketing">Marketing</span>
                            <span class="blog-date">Nov 1, 2025</span>
                        </div>
                    </div>
                    
                    <div class="blog-content">
                        <h3 class="blog-title">
                            Digital Marketing Trends Shaping 2025
                        </h3>
                        
                        <p class="blog-excerpt">
                            Discover the latest strategies and innovations reshaping digital marketing landscapes this year.
                        </p>
                        
                        <div class="blog-footer">
                            <div class="blog-read-time">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>5 min read</span>
                            </div>
                            
                            <a href="/blog/1" class="blog-read-more">
                                Read More
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Card 2 -->
            <article class="blog-card">
                <div class="blog-card-inner">
                    <div class="blog-card-accent"></div>
                    
                    <div class="blog-image-section">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=400&fit=crop" alt="Web Development" class="blog-image">
                        <div class="blog-image-overlay"></div>
                        
                        <div class="blog-floating-info">
                            <span class="blog-category development">Development</span>
                            <span class="blog-date">Oct 28, 2025</span>
                        </div>
                    </div>
                    
                    <div class="blog-content">
                        <h3 class="blog-title">
                            Modern Web Development Best Practices
                        </h3>
                        
                        <p class="blog-excerpt">
                            Learn how to build secure, responsive, and high-performance websites that users love.
                        </p>
                        
                        <div class="blog-footer">
                            <div class="blog-read-time">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>4 min read</span>
                            </div>
                            
                            <a href="/blog/2" class="blog-read-more">
                                Read More
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Blog Card 3 -->
            <article class="blog-card">
                <div class="blog-card-inner">
                    <div class="blog-card-accent"></div>
                    
                    <div class="blog-image-section">
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=600&h=400&fit=crop" alt="SEO Strategies" class="blog-image">
                        <div class="blog-image-overlay"></div>
                        
                        <div class="blog-floating-info">
                            <span class="blog-category seo">SEO</span>
                            <span class="blog-date">Oct 25, 2025</span>
                        </div>
                    </div>
                    
                    <div class="blog-content">
                        <h3 class="blog-title">
                            Proven SEO Strategies to Dominate Rankings
                        </h3>
                        
                        <p class="blog-excerpt">
                            Explore effective techniques to increase visibility and drive consistent organic traffic.
                        </p>
                        
                        <div class="blog-footer">
                            <div class="blog-read-time">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>6 min read</span>
                            </div>
                            
                            <a href="/blog/3" class="blog-read-more">
                                Read More
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const blogSection = document.getElementById('blog-section');
        const blogHeader = blogSection.querySelector('.blog-header');
        const blogCards = blogSection.querySelectorAll('.blog-card');

        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate in
                    if (blogHeader) blogHeader.classList.add('in-view');
                    blogCards.forEach(card => {
                        card.classList.add('in-view');
                    });
                } else {
                    // Animate out when scrolling away
                    if (blogHeader) blogHeader.classList.remove('in-view');
                    blogCards.forEach(card => {
                        card.classList.remove('in-view');
                    });
                }
            });
        }, observerOptions);

        observer.observe(blogSection);
    });
</script>
