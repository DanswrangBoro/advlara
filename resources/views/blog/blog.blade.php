<!-- resources/views/blog.blade.php -->
@extends('layouts.base')

@section('title', 'Blog - Latest Insights & Articles | AdventureCode')
@section('description', 'Explore the latest articles, insights, and trends in web development, digital marketing, design, and technology from AdventureCode experts.')
@section('keywords', 'blog, articles, insights, web development, digital marketing, technology trends, design tips')

@section('content')

<style>
    /* ===== BASE & RESPONSIVE UTILITIES ===== */
    * {
        box-sizing: border-box;
    }
    
    /* ===== PROFESSIONAL HERO ===== */
    .blog-hero {
        background: white;
        padding: 140px 0 40px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
    }
    
    .hero-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }
    
    .hero-left {
        flex: 1;
    }
    
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        background: #fef3c7;
        border-radius: 50px;
        font-size: 0.8125rem;
        font-weight: 600;
        color: #92400e;
        margin-bottom: 16px;
    }
    
    .blog-title {
        font-size: clamp(1.75rem, 4vw, 2.75rem);
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 12px;
        line-height: 1.2;
    }
    
    .blog-subtitle {
        font-size: clamp(0.875rem, 2vw, 1rem);
        color: #64748b;
        line-height: 1.6;
        max-width: 500px;
    }
    
    .hero-right {
        display: flex;
        gap: 16px;
    }
    
    .stat-card {
        text-align: center;
        padding: clamp(12px, 2vw, 20px);
        background: #f8fafc;
        border-radius: 12px;
        border: 1px solid rgba(0, 0, 0, 0.06);
        min-width: 80px;
    }
    
    .stat-number {
        font-size: clamp(1.25rem, 3vw, 1.75rem);
        font-weight: 800;
        color: #f97316;
        display: block;
        margin-bottom: 4px;
    }
    
    .stat-label {
        font-size: clamp(0.75rem, 1.5vw, 0.8125rem);
        color: #64748b;
        font-weight: 500;
    }
    
    /* ===== ADVANCED FILTER BAR ===== */
    .filter-section {
        background: white;
        padding: 16px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 106px;
        z-index: 30;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }
    
    .filter-container {
        display: flex;
        gap: 12px;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .search-box {
        position: relative;
        flex: 1 1 100%;
        min-width: 0;
    }
    
    .search-input {
        width: 100%;
        padding: 10px 16px 10px 40px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-size: 0.875rem;
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: #f97316;
        box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
    }
    
    .search-icon {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
        color: #64748b;
    }
    
    .filter-tabs {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        flex: 1 1 100%;
    }
    
    .filter-tab {
        padding: 8px 12px;
        border-radius: 8px;
        font-weight: 500;
        font-size: 0.8125rem;
        transition: all 0.2s ease;
        cursor: pointer;
        border: 1px solid transparent;
        background: transparent;
        color: #64748b;
        white-space: nowrap;
    }
    
    .filter-tab:hover {
        background: #f8fafc;
        color: #1e293b;
    }
    
    .filter-tab.active {
        background: #1e293b;
        color: white;
    }
    
    .sort-dropdown {
        padding: 8px 16px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-size: 0.8125rem;
        font-weight: 500;
        color: #1e293b;
        cursor: pointer;
        background: white;
        min-width: 120px;
    }
    
    /* ===== BLOG LAYOUT WITH SIDEBAR ===== */
    .blog-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
        padding: 32px 0;
    }
    
    /* ===== BENTO GRID LAYOUT - MOBILE FIRST ===== */
    .blog-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    /* ===== BLOG CARD DESIGN ===== */
    .blog-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        background: white;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .blog-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }
    
    .card-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 200px;
        flex-shrink: 0;
        background: #f1f5f9;
    }
    
    .card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .blog-card:hover .card-image {
        transform: scale(1.08);
    }
    
    .card-category {
        position: absolute;
        top: 12px;
        left: 12px;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        color: #1e293b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 1;
    }
    
    .card-content {
        padding: 16px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .card-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
        font-size: 0.8125rem;
        color: #64748b;
        flex-wrap: wrap;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .card-title {
        font-size: 1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .card-excerpt {
        font-size: 0.875rem;
        color: #64748b;
        line-height: 1.6;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 16px;
        flex: 1;
    }
    
    .card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 14px;
        border-top: 1px solid rgba(0, 0, 0, 0.06);
        margin-top: auto;
        gap: 12px;
    }
    
    .author-info {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 0;
    }
    
    .author-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #f8fafc;
        flex-shrink: 0;
    }
    
    .author-name {
        font-weight: 600;
        font-size: 0.8125rem;
        color: #1e293b;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .read-more {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #f97316;
        font-weight: 600;
        font-size: 0.8125rem;
        transition: gap 0.3s ease;
        flex-shrink: 0;
    }
    
    .blog-card:hover .read-more {
        gap: 10px;
    }
    
    /* ===== SIDEBAR ===== */
    .sidebar {
        width: 100%;
    }
    
    .sidebar-section {
        background: white;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
    }
    
    .sidebar-title {
        font-size: 1rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .trending-item {
        display: flex;
        gap: 12px;
        padding: 12px;
        border-radius: 8px;
        transition: all 0.2s ease;
        cursor: pointer;
        margin-bottom: 8px;
    }
    
    .trending-item:hover {
        background: #f8fafc;
    }
    
    .trending-rank {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #f97316, #fb923c);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 0.875rem;
        color: white;
        flex-shrink: 0;
    }
    
    .trending-content {
        flex: 1;
        min-width: 0;
    }
    
    .trending-title {
        font-size: 0.8125rem;
        font-weight: 600;
        color: #1e293b;
        line-height: 1.4;
        margin-bottom: 4px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .trending-views {
        font-size: 0.75rem;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .tag-cloud {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    
    .tag {
        padding: 6px 12px;
        background: #f8fafc;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 500;
        color: #64748b;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .tag:hover {
        background: #1e293b;
        color: white;
        border-color: #1e293b;
    }
    
    /* ===== PAGINATION ===== */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        margin-top: 32px;
        padding-bottom: 40px;
        flex-wrap: wrap;
    }
    
    .pagination-btn {
        padding: 8px 12px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        font-size: 0.875rem;
        font-weight: 500;
        color: #1e293b;
        background: white;
        cursor: pointer;
        transition: all 0.2s ease;
        min-width: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .pagination-btn:hover:not(.active):not(:disabled) {
        background: #f8fafc;
        border-color: rgba(0, 0, 0, 0.15);
    }
    
    .pagination-btn.active {
        background: #1e293b;
        color: white;
        border-color: #1e293b;
    }
    
    .pagination-btn:disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }
    
    /* ===== TABLET RESPONSIVE (640px+) ===== */
    @media (min-width: 640px) {
        .blog-hero {
            padding: 120px 0 40px;
        }
        
        .filter-section {
            top: 80px;
            padding: 20px 0;
        }
        
        .search-box {
            flex: 1 1 300px;
            max-width: 400px;
        }
        
        .filter-tabs {
            flex: 1 1 auto;
        }
        
        .blog-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        
        .card-image-wrapper {
            height: 220px;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-title {
            font-size: 1.125rem;
        }
        
        .author-avatar {
            width: 36px;
            height: 36px;
        }
        
        .sidebar-section {
            padding: 24px;
        }
    }
    
    /* ===== DESKTOP RESPONSIVE (1024px+) ===== */
    @media (min-width: 1024px) {
        .blog-hero {
            padding: 140px 0 40px;
        }
        
        .hero-container {
            flex-direction: row;
        }
        
        .hero-right {
            gap: 24px;
        }
        
        .stat-card {
            min-width: 100px;
        }
        
        .filter-section {
            top: 106px;
        }
        
        .filter-container {
            flex-wrap: nowrap;
        }
        
        .search-box {
            flex: 0 0 400px;
        }
        
        .blog-layout {
            grid-template-columns: 1fr 320px;
            gap: 40px;
            padding: 48px 0;
        }
        
        /* Bento Grid Pattern for Desktop */
        .blog-grid {
            grid-template-columns: repeat(12, 1fr);
        }
        
        .blog-card:nth-child(1) {
            grid-column: span 8;
            grid-row: span 2;
        }
        
        .blog-card:nth-child(2),
        .blog-card:nth-child(3) {
            grid-column: span 4;
        }
        
        .blog-card:nth-child(4),
        .blog-card:nth-child(5) {
            grid-column: span 6;
        }
        
        .blog-card:nth-child(6),
        .blog-card:nth-child(7),
        .blog-card:nth-child(8) {
            grid-column: span 4;
        }
        
        .blog-card:nth-child(9),
        .blog-card:nth-child(10) {
            grid-column: span 6;
        }
        
        .blog-card:nth-child(11),
        .blog-card:nth-child(12) {
            grid-column: span 4;
        }
        
        /* Adjust image heights for bento layout */
        .blog-card:nth-child(1) .card-image-wrapper {
            height: 360px;
        }
        
        .blog-card:nth-child(1) .card-content {
            padding: 28px;
        }
        
        .blog-card:nth-child(1) .card-title {
            font-size: 1.75rem;
            -webkit-line-clamp: 3;
        }
        
        .blog-card:nth-child(1) .card-excerpt {
            -webkit-line-clamp: 3;
            font-size: 0.9375rem;
        }
        
        .blog-card:nth-child(4) .card-image-wrapper,
        .blog-card:nth-child(5) .card-image-wrapper,
        .blog-card:nth-child(9) .card-image-wrapper,
        .blog-card:nth-child(10) .card-image-wrapper {
            height: 240px;
        }
        
        /* Sticky sidebar for desktop */
        .sidebar {
            position: sticky;
            top: 180px;
            height: fit-content;
        }
        
        .pagination {
            gap: 8px;
            margin-top: 48px;
            padding-bottom: 60px;
        }
        
        .pagination-btn {
            padding: 10px 16px;
            min-width: 40px;
        }
    }
    
    /* ===== LARGE DESKTOP (1280px+) ===== */
    @media (min-width: 1280px) {
        .hero-right {
            gap: 32px;
        }
    }
    
    /* ===== MOBILE SPECIFIC ADJUSTMENTS ===== */
    @media (max-width: 639px) {
        .blog-hero {
            padding: 100px 0 30px;
        }
        
        .hero-container {
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
        }
        
        .hero-right {
            width: 100%;
            justify-content: space-between;
            gap: 12px;
        }
        
        .stat-card {
            flex: 1;
        }
        
        .filter-section {
            top: 60px;
        }
        
        .filter-tab {
            font-size: 0.75rem;
            padding: 6px 10px;
        }
        
        .sort-dropdown {
            width: 100%;
            flex: 1 1 100%;
        }
        
        .blog-card:hover {
            transform: translateY(-2px);
        }
    }
    
    /* ===== TOUCH DEVICE OPTIMIZATION ===== */
    @media (hover: none) and (pointer: coarse) {
        .blog-card:hover {
            transform: none;
        }
        
        .blog-card:active {
            transform: scale(0.98);
        }
        
        .filter-tab,
        .tag,
        .trending-item,
        .pagination-btn {
            min-height: 44px; /* iOS touch target */
        }
    }
    
    /* ===== PRINT STYLES ===== */
    @media print {
        .filter-section,
        .sidebar,
        .pagination {
            display: none;
        }
        
        .blog-card {
            break-inside: avoid;
        }
    }
</style>

{{-- Professional Hero --}}
<section class="blog-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="hero-container">
            <div class="hero-left">
                <span class="hero-badge">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                    </svg>
                    Knowledge Hub
                </span>
                <h1 class="blog-title">Blog & Insights</h1>
                <p class="blog-subtitle">Expert insights, industry trends, and practical tips to help you stay ahead in the digital world.</p>
            </div>
            <div class="hero-right">
                <div class="stat-card">
                    <span class="stat-number">150+</span>
                    <span class="stat-label">Articles</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">25K+</span>
                    <span class="stat-label">Readers</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">6</span>
                    <span class="stat-label">Categories</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Advanced Filter Bar --}}
<section class="filter-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="filter-container">
            <div class="search-box">
                <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search articles..." id="searchInput">
            </div>
            
            <div class="filter-tabs">
                <button class="filter-tab active" data-category="all">All</button>
                <button class="filter-tab" data-category="development">Development</button>
                <button class="filter-tab" data-category="design">Design</button>
                <button class="filter-tab" data-category="marketing">Marketing</button>
                <button class="filter-tab" data-category="technology">Technology</button>
                <button class="filter-tab" data-category="business">Business</button>
            </div>
            
            <select class="sort-dropdown" id="sortDropdown">
                <option value="latest">Latest</option>
                <option value="popular">Most Popular</option>
                <option value="oldest">Oldest</option>
            </select>
        </div>
    </div>
</section>

{{-- Blog Layout with Sidebar --}}
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="blog-layout">
        
        {{-- Main Content with Bento Grid --}}
        <div>
            <div class="blog-grid">
                
                {{-- Dynamic Ready: @foreach($posts as $post) --}}
                
                {{-- Large Featured Post --}}
                <article class="blog-card" data-category="development">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=500&fit=crop" alt="Web Development" class="card-image">
                        <span class="card-category">Development</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 10, 2025</span>
                            <span class="meta-item">8 min read</span>
                        </div>
                        <h2 class="card-title">The Future of Web Development: Top Trends to Watch in 2025</h2>
                        <p class="card-excerpt">Explore the latest trends shaping web development, from AI integration to progressive web apps, and learn how to stay ahead in this rapidly evolving field.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=12" alt="Sarah Johnson" class="author-avatar">
                                <span class="author-name">Sarah Johnson</span>
                            </div>
                            <a href="{{route('blog_details')}}" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Small Posts --}}
                <article class="blog-card" data-category="design">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=400&h=300&fit=crop" alt="Design" class="card-image">
                        <span class="card-category">Design</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 8</span>
                            <span class="meta-item">5 min</span>
                        </div>
                        <h2 class="card-title">UI/UX Design Principles</h2>
                        <p class="card-excerpt">Essential design principles every designer should master.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=33" alt="Mike Chen" class="author-avatar">
                                <span class="author-name">Mike Chen</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card" data-category="marketing">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=300&fit=crop" alt="Marketing" class="card-image">
                        <span class="card-category">Marketing</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 6</span>
                            <span class="meta-item">6 min</span>
                        </div>
                        <h2 class="card-title">SEO Best Practices for 2025</h2>
                        <p class="card-excerpt">Boost your website's visibility with latest SEO strategies.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=25" alt="Emma Davis" class="author-avatar">
                                <span class="author-name">Emma Davis</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Medium Posts --}}
                <article class="blog-card" data-category="technology">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=600&h=400&fit=crop" alt="Technology" class="card-image">
                        <span class="card-category">Technology</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 5</span>
                            <span class="meta-item">7 min</span>
                        </div>
                        <h2 class="card-title">AI & Machine Learning in Digital Products</h2>
                        <p class="card-excerpt">How AI is revolutionizing digital product development.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=15" alt="Alex Turner" class="author-avatar">
                                <span class="author-name">Alex Turner</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card" data-category="business">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Business" class="card-image">
                        <span class="card-category">Business</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 3</span>
                            <span class="meta-item">9 min</span>
                        </div>
                        <h2 class="card-title">Building Successful Digital Products</h2>
                        <p class="card-excerpt">Complete guide to launching digital products successfully.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=47" alt="Lisa Martinez" class="author-avatar">
                                <span class="author-name">Lisa Martinez</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Small Posts --}}
                <article class="blog-card" data-category="development">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=300&fit=crop" alt="Laravel" class="card-image">
                        <span class="card-category">Development</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Nov 1</span>
                            <span class="meta-item">4 min</span>
                        </div>
                        <h2 class="card-title">Laravel Best Practices</h2>
                        <p class="card-excerpt">Write clean, maintainable code.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=8" alt="David Kim" class="author-avatar">
                                <span class="author-name">David Kim</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card" data-category="design">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=400&h=300&fit=crop" alt="Color Theory" class="card-image">
                        <span class="card-category">Design</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Oct 28</span>
                            <span class="meta-item">5 min</span>
                        </div>
                        <h2 class="card-title">Color Theory in Design</h2>
                        <p class="card-excerpt">Master color combinations.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=20" alt="Nina Patel" class="author-avatar">
                                <span class="author-name">Nina Patel</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="blog-card" data-category="marketing">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=400&h=300&fit=crop" alt="Social Media" class="card-image">
                        <span class="card-category">Marketing</span>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="meta-item">Oct 25</span>
                            <span class="meta-item">6 min</span>
                        </div>
                        <h2 class="card-title">Social Media Strategies</h2>
                        <p class="card-excerpt">Grow your audience effectively.</p>
                        <div class="card-footer">
                            <div class="author-info">
                                <img src="https://i.pravatar.cc/150?img=38" alt="Tom Anderson" class="author-avatar">
                                <span class="author-name">Tom Anderson</span>
                            </div>
                            <a href="#" class="read-more">
                                Read
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

            </div>
            
            {{-- Pagination --}}
            <div class="pagination">
                <button class="pagination-btn" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">4</button>
                <button class="pagination-btn">...</button>
                <button class="pagination-btn">10</button>
                <button class="pagination-btn">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
        
        {{-- Sidebar --}}
        <aside class="sidebar">
            
            {{-- Trending Posts --}}
            <div class="sidebar-section">
                <h3 class="sidebar-title">
                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                    </svg>
                    Trending Now
                </h3>
                
                <div class="trending-item">
                    <div class="trending-rank">1</div>
                    <div class="trending-content">
                        <div class="trending-title">AI in Web Development</div>
                        <div class="trending-views">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            12.5K views
                        </div>
                    </div>
                </div>
                
                <div class="trending-item">
                    <div class="trending-rank">2</div>
                    <div class="trending-content">
                        <div class="trending-title">Modern CSS Grid</div>
                        <div class="trending-views">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            9.8K views
                        </div>
                    </div>
                </div>
                
                <div class="trending-item">
                    <div class="trending-rank">3</div>
                    <div class="trending-content">
                        <div class="trending-title">SEO Strategies 2025</div>
                        <div class="trending-views">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            8.2K views
                        </div>
                    </div>
                </div>
                
                <div class="trending-item">
                    <div class="trending-rank">4</div>
                    <div class="trending-content">
                        <div class="trending-title">Laravel RESTful APIs</div>
                        <div class="trending-views">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            7.1K views
                        </div>
                    </div>
                </div>
                
                <div class="trending-item">
                    <div class="trending-rank">5</div>
                    <div class="trending-content">
                        <div class="trending-title">Design Systems Guide</div>
                        <div class="trending-views">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            6.5K views
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Popular Tags --}}
            <div class="sidebar-section">
                <h3 class="sidebar-title">
                    <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"/>
                    </svg>
                    Popular Tags
                </h3>
                <div class="tag-cloud">
                    <span class="tag">React</span>
                    <span class="tag">Laravel</span>
                    <span class="tag">UI/UX</span>
                    <span class="tag">SEO</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">CSS</span>
                    <span class="tag">AI/ML</span>
                    <span class="tag">Node.js</span>
                    <span class="tag">Design</span>
                    <span class="tag">Marketing</span>
                </div>
            </div>
            
        </aside>
        
    </div>
</section>

<script>
    // Filter functionality
    const filterTabs = document.querySelectorAll('.filter-tab');
    const blogCards = document.querySelectorAll('.blog-card');
    const searchInput = document.getElementById('searchInput');
    
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.dataset.category;
            
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            blogCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Search functionality
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        
        blogCards.forEach(card => {
            const title = card.querySelector('.card-title').textContent.toLowerCase();
            const excerpt = card.querySelector('.card-excerpt').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                card.style.display = '';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>

@endsection
