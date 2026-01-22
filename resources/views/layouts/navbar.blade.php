<style>
    /* ===== CORE FIXES ===== */
    * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    
    html {
        scroll-behavior: smooth;
        overflow-y: scroll;
    }
    
    body {
        overflow-x: hidden;
        background: #fdfbf7;
    }

    /* ===== FULL WIDTH TOPBAR ===== */
    .topbar {
        background: #1e293b;
        border-bottom: 1px solid rgba(148, 163, 184, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 50;
        height: 36px;
    }
    
    .topbar-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }
    
    .topbar-link {
        transition: all 0.3s ease;
        color: rgba(255, 255, 255, 0.75);
        font-size: 0.75rem;
        font-weight: 500;
    }
    
    .topbar-link:hover {
        color: #f97316;
    }
    
    .topbar-divider {
        width: 1px;
        height: 14px;
        background: rgba(148, 163, 184, 0.2);
    }
    
    @media (max-width: 640px) {
        .topbar {
            display: none;
        }
    }

    /* ===== FULL WIDTH NAVBAR ===== */
    .navbar {
        background: #fdfdfdff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        position: fixed !important;
        top: 36px;
        left: 0;
        right: 0;
        z-index: 40;
        height: 70px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .navbar-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }
    
    @media (max-width: 1024px) {
        .navbar {
            height: 64px;
        }
    }
    
    @media (max-width: 640px) {
        .navbar {
            top: 0;
            height: 60px;
            background: white;
        }
    }
    
    /* ===== LOGO ===== */
    .logo-image {
        height: 38px;
        width: auto;
        transition: all 0.3s ease;
        object-fit: contain;
    }

    .logo-image:hover {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .logo-image {
            height: 32px;
        }
    }

    /* ===== NAVBAR LINKS ===== */
    .navbar-link {
        position: relative;
        font-weight: 500;
        font-size: 0.9375rem;
        color: #1e293b;
        transition: all 0.2s ease;
        padding: 8px 12px;
        display: flex;
        align-items: center;
        gap: 4px;
    }
    
    .navbar-link:hover {
        color: #f97316;
    }
    
    .navbar-link.active {
        color: #f97316;
    }
    
    @media (max-width: 1024px) {
        .navbar-link {
            font-size: 0.875rem;
            padding: 6px 10px;
        }
    }
    
    /* ===== MODERN MEGA MENU (3-COLUMN + HIGHLIGHT) ===== */
    .mega-menu-wrapper {
        position: relative;
    }
    
    .mega-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 0;
        padding-top: 12px;
        background: transparent;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        pointer-events: none;
        z-index: 100;
    }
    
    .mega-menu-content-wrapper {
        background: white;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 16px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        width: 920px;
        max-width: calc(100vw - 32px);
        overflow: hidden;
    }
    
    .mega-menu-wrapper:hover .mega-menu {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }
    
    .mega-menu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 280px;
        padding: 0;
        gap: 0;
    }
    
    /* Menu Sections */
    .mega-menu-section {
        display: flex;
        flex-direction: column;
        gap: 2px;
        padding: 28px 24px;
        border-right: 1px solid rgba(0, 0, 0, 0.06);
    }
    
    .mega-menu-section:last-child {
        border-right: none;
    }
    
    .mega-menu-title {
        font-size: 0.6875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.9px;
        color: #64748b;
        margin-bottom: 16px;
        padding: 0 12px;
    }
    
    .mega-menu-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 12px;
        border-radius: 8px;
        transition: all 0.2s ease;
        text-decoration: none;
        cursor: pointer;
    }
    
    .mega-menu-item:hover {
        background: #f8fafc;
        transform: translateX(2px);
    }
    
    .mega-menu-icon {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        margin-top: 2px;
        color: #f97316;
    }
    
    .mega-menu-content {
        flex: 1;
    }
    
    .mega-menu-label {
        display: flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
        font-size: 0.875rem;
        color: #1e293b;
        margin-bottom: 3px;
    }
    
    .mega-menu-desc {
        font-size: 0.8125rem;
        color: #64748b;
        line-height: 1.4;
    }
    
    /* ===== HIGHLIGHT SECTION ===== */
    .mega-menu-highlight {
        background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
        padding: 28px 24px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: white;
    }
    
    .highlight-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        width: fit-content;
        margin-bottom: 16px;
    }
    
    .highlight-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.3;
    }
    
    .highlight-desc {
        font-size: 0.875rem;
        line-height: 1.6;
        opacity: 0.95;
        margin-bottom: 20px;
    }
    
    .highlight-features {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .highlight-feature-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.8125rem;
    }
    
    .highlight-feature-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }
    
    .highlight-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: white;
        color: #f97316;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.875rem;
        text-decoration: none;
        transition: all 0.3s ease;
        width: fit-content;
    }
    
    .highlight-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    
    @media (max-width: 1024px) {
        .mega-menu-content-wrapper {
            width: calc(100vw - 32px);
        }
        
        .mega-menu-grid {
            grid-template-columns: 1fr;
            gap: 0;
        }
        
        .mega-menu-section {
            border-right: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            padding: 20px;
        }
        
        .mega-menu-section:last-child {
            border-bottom: none;
        }
        
        .mega-menu-highlight {
            padding: 24px 20px;
        }
    }
    
    /* ===== SIDEBAR OVERLAY ===== */
    .sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0);
        transition: background 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
        z-index: 60;
    }
    
    .sidebar-overlay.active {
        background: rgba(0, 0, 0, 0.6);
        pointer-events: all;
        backdrop-filter: blur(2px);
    }
    
    /* ===== MODERN MOBILE SIDEBAR ===== */
    .mobile-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 85%;
        max-width: 380px;
        height: 100vh;
        background: linear-gradient(180deg, #ffffff 0%, #fafafa 100%);
        z-index: 70;
        transform: translateX(-100%);
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        overflow-y: auto;
        box-shadow: 4px 0 24px rgba(0, 0, 0, 0.12);
        display: flex;
        flex-direction: column;
    }
    
    .mobile-sidebar.active {
        transform: translateX(0);
    }
    
    /* Modern Header with Gradient */
    .sidebar-header {
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        padding: 24px 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .sidebar-header-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .sidebar-logo {
        height: 34px;
        width: auto;
        filter: brightness(0) invert(1);
    }
    
    .sidebar-close-btn {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        color: white;
        transition: all 0.3s ease;
        cursor: pointer;
        border: none;
    }
    
    .sidebar-close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }
    
    /* Scrollable Menu Content */
    .mobile-sidebar-content {
        flex: 1;
        overflow-y: auto;
        padding: 16px 0 80px 0;
    }
    
    .mobile-sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    
    /* Modern Menu Items */
    .mobile-sidebar-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        color: #1e293b;
        font-weight: 600;
        font-size: 0.9375rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-left: 3px solid transparent;
        position: relative;
    }
    
    .mobile-sidebar-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, #f97316, #fb923c);
        transform: scaleY(0);
        transition: transform 0.3s ease;
    }
    
    .mobile-sidebar-item:hover::before,
    .mobile-sidebar-item.active::before {
        transform: scaleY(1);
    }
    
    .mobile-sidebar-item:hover {
        color: #f97316;
        background: linear-gradient(90deg, rgba(249, 115, 22, 0.08) 0%, transparent 100%);
        padding-left: 24px;
    }
    
    .mobile-sidebar-item.active {
        background: linear-gradient(90deg, rgba(249, 115, 22, 0.12) 0%, rgba(249, 115, 22, 0.02) 100%);
        color: #f97316;
    }
    
    .mobile-sidebar-item-icon {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        opacity: 0.7;
    }
    
    .mobile-sidebar-item:hover .mobile-sidebar-item-icon,
    .mobile-sidebar-item.active .mobile-sidebar-item-icon {
        opacity: 1;
    }
    
    /* Services Button with Icon */
    .mobile-sidebar-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        width: 100%;
        background: none;
        border: none;
        text-align: left;
    }
    
    .mobile-sidebar-button-content {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    
    .sidebar-services-arrow {
        width: 18px;
        height: 18px;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: #f97316;
        flex-shrink: 0;
    }
    
    .sidebar-services-arrow.rotated {
        transform: rotate(180deg);
    }
    
    /* ===== MODERN DROPDOWN ===== */
    .mobile-dropdown {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
    }
    
    .mobile-dropdown.expanded {
        max-height: 1400px;
    }
    
    .mobile-dropdown-section {
        padding: 16px 20px 12px 20px;
    }
    
    .mobile-dropdown-title {
        font-size: 0.6875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #64748b;
        margin-bottom: 12px;
        padding-left: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .mobile-dropdown-title::before {
        content: '';
        width: 3px;
        height: 12px;
        background: linear-gradient(180deg, #f97316, #fb923c);
        border-radius: 2px;
    }
    
    .mobile-dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 12px 12px 24px;
        color: #334155;
        font-size: 0.875rem;
        font-weight: 600;
        transition: all 0.25s ease;
        border-radius: 8px;
        margin-bottom: 4px;
        position: relative;
    }
    
    .mobile-dropdown-item::before {
        content: '';
        position: absolute;
        left: 12px;
        width: 4px;
        height: 4px;
        background: #f97316;
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.25s ease;
    }
    
    .mobile-dropdown-item:hover::before {
        opacity: 1;
    }
    
    .mobile-dropdown-item:hover {
        color: #f97316;
        background: white;
        transform: translateX(4px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
    
    /* Divider */
    .mobile-sidebar-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.1), transparent);
        margin: 16px 20px;
    }
    
    /* Footer CTA Section */
    .sidebar-footer {
        position: sticky;
        bottom: 0;
        background: linear-gradient(180deg, transparent 0%, #ffffff 20%);
        padding: 20px;
        border-top: 1px solid rgba(0, 0, 0, 0.06);
    }
    
    .sidebar-cta-button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 14px 24px;
        background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
        color: white;
        font-weight: 600;
        font-size: 0.9375rem;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
    }
    
    .sidebar-cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249, 115, 22, 0.4);
    }
    
    /* ===== LAYOUT ===== */
    .page-content {
        padding-top: 106px;
    }
    
    @media (max-width: 640px) {
        .page-content {
            padding-top: 60px;
        }
    }
</style>

<!-- ===== FULL WIDTH TOPBAR ===== -->
<div class="topbar">
    <div class="topbar-container h-full">
        <div class="flex justify-between items-center h-full">
            <div class="hidden md:flex items-center space-x-3">
                <div class="flex items-center space-x-1.5 topbar-link">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.23.615a16.036 16.036 0 006.837 6.837l.615-1.23a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <span>+1 (555) 123-4567</span>
                </div>
                <div class="topbar-divider"></div>
                <div class="flex items-center space-x-1.5 topbar-link">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    <span>support@adventurecode.com</span>
                </div>
            </div>
            <div class="flex items-center space-x-2.5">
                <span class="topbar-link hidden sm:inline text-xs">Follow:</span>
                <div class="flex items-center space-x-2.5">
                    <a href="#" class="topbar-link">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="topbar-link">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="#" class="topbar-link">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== FULL WIDTH NAVBAR ===== -->
<nav class="navbar">
    <div class="navbar-container h-full">
        <div class="flex justify-between items-center h-full">
            <div class="flex-shrink-0">
                <a href="/">
                    <img src="/images/logo.png" alt="AdventureCode" class="logo-image">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="/" class="navbar-link active">Home</a>
                <a href="{{ route('about') }}" class="navbar-link">About</a>
                
                <!-- Services Mega Menu -->
                <div class="mega-menu-wrapper">
                    <button class="navbar-link">
                        <span>Services</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <div class="mega-menu">
                        <div class="mega-menu-content-wrapper">
                            <div class="mega-menu-grid">
                                <!-- Column 1: Development -->
                                <div class="mega-menu-section">
                                    <div class="mega-menu-title">Development</div>
                                    
                                    <a href="{{route('web_development')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Web Development</div>
                                            <div class="mega-menu-desc">Modern websites & web apps</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('app_development')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">App Development</div>
                                            <div class="mega-menu-desc">Native & cross-platform apps</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('travel_solution')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Travel Solutions</div>
                                            <div class="mega-menu-desc">Booking & CRM systems</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('outsourcing')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Outsourcing</div>
                                            <div class="mega-menu-desc">Dedicated dev teams</div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Column 2: Marketing -->
                                <div class="mega-menu-section">
                                    <div class="mega-menu-title">Marketing</div>
                                    
                                    <a href="{{route('digital_marketing')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Digital Marketing</div>
                                            <div class="mega-menu-desc">Strategic campaigns</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('performance_marketing')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Performance Marketing</div>
                                            <div class="mega-menu-desc">Measurable results</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('seo')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">SEO Services</div>
                                            <div class="mega-menu-desc">Rank higher organically</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('social_media')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Social Media</div>
                                            <div class="mega-menu-desc">Grow your audience</div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Column 3: Design -->
                                <div class="mega-menu-section">
                                    <div class="mega-menu-title">Design</div>
                                    
                                    <a href="{{route('graphic_design')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">Graphic Design</div>
                                            <div class="mega-menu-desc">Visual content creation</div>
                                        </div>
                                    </a>
                                    
                                    <a href="{{route('ui_ux')}}" class="mega-menu-item">
                                        <div class="mega-menu-icon">
                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div class="mega-menu-content">
                                            <div class="mega-menu-label">UI/UX Design</div>
                                            <div class="mega-menu-desc">Beautiful experiences</div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Highlight Section -->
                                <div class="mega-menu-highlight">
                                    <div>
                                        <div class="highlight-badge">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span>Popular</span>
                                        </div>
                                        
                                        <div class="highlight-title">Need a Complete Solution?</div>
                                        <div class="highlight-desc">Get a custom package tailored to your business needs with end-to-end support.</div>
                                        
                                        <div class="highlight-features">
                                            <div class="highlight-feature-item">
                                                <svg class="highlight-feature-icon" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>Free consultation</span>
                                            </div>
                                            <div class="highlight-feature-item">
                                                <svg class="highlight-feature-icon" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>Dedicated support</span>
                                            </div>
                                            <div class="highlight-feature-item">
                                                <svg class="highlight-feature-icon" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>Flexible pricing</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{route('contact_us')}}" class="highlight-cta">
                                        <span>Get Started</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- <a href="{{route('blog')}}" class="navbar-link">Blog</a> -->
                <!-- <a href="{{route('career')}}" class="navbar-link">Career</a> -->
                <a href="{{route('contact_us')}}" class="navbar-link">Contact</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobileMenuBtn" class="p-2 text-gray-600 hover:text-orange-500 transition">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- ===== OVERLAY ===== -->
<div id="sidebarOverlay" class="sidebar-overlay"></div>

<!-- ===== MODERN MOBILE SIDEBAR ===== -->
<div id="mobileSidebar" class="mobile-sidebar">
    <!-- Modern Header -->
    <div class="sidebar-header">
        <div class="sidebar-header-content">
            <a href="/">
                <img src="/images/logo.png" alt="AdventureCode" class="sidebar-logo">
            </a>
            <button id="sidebarCloseBtn" class="sidebar-close-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Scrollable Content -->
    <div class="mobile-sidebar-content">
        <div class="mobile-sidebar-menu">
            <a href="/" class="mobile-sidebar-item active">
                <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Home</span>
            </a>
            
            <a href="{{route('about')}}" class="mobile-sidebar-item">
                <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>About</span>
            </a>
            
            <button id="sidebarServicesBtn" class="mobile-sidebar-item mobile-sidebar-button">
                <div class="mobile-sidebar-button-content">
                    <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <span>Services</span>
                </div>
                <svg id="sidebarServicesArrow" class="sidebar-services-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            
            <div id="sidebarServicesList" class="mobile-dropdown">
                <div class="mobile-dropdown-section">
                    <div class="mobile-dropdown-title">Development</div>
                    <a href="{{route('web_development')}}" class="mobile-dropdown-item">Web Development</a>
                    <a href="{{route('app_development')}}" class="mobile-dropdown-item">App Development</a>
                    <a href="{{route('travel_solution')}}" class="mobile-dropdown-item">Travel Solutions</a>
                    <a href="{{route('outsourcing')}}" class="mobile-dropdown-item">Outsourcing Solution</a>
                </div>
                
                <div class="mobile-dropdown-section">
                    <div class="mobile-dropdown-title">Marketing</div>
                    <a href="{{route('digital_marketing')}}" class="mobile-dropdown-item">Digital Marketing</a>
                    <a href="{{route('performance_marketing')}}" class="mobile-dropdown-item">Performance Marketing</a>
                    <a href="{{route('seo')}}" class="mobile-dropdown-item">SEO Services</a>
                    <a href="{{route('social_media')}}" class="mobile-dropdown-item">Social Media</a>
                </div>
                
                <div class="mobile-dropdown-section">
                    <div class="mobile-dropdown-title">Design</div>
                    <a href="{{route('graphic_design')}}" class="mobile-dropdown-item">Graphic Design</a>
                    <a href="{{route('ui_ux')}}" class="mobile-dropdown-item">UI/UX Design</a>
                </div>
            </div>
            
            <div class="mobile-sidebar-divider"></div>
            
            <!-- <a href="{{route('blog')}}" class="mobile-sidebar-item">
                <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <span>Blog</span>
            </a> -->
            
            <!-- <a href="{{route('career')}}" class="mobile-sidebar-item">
                <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Career</span>
            </a> -->
            
            <a href="{{route('contact_us')}}" class="mobile-sidebar-item">
                <svg class="mobile-sidebar-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>Contact</span>
            </a>
        </div>
    </div>
    
    <!-- Sticky Footer CTA -->
    <div class="sidebar-footer">
        <a href="{{route('contact_us')}}" class="sidebar-cta-button">
            <span>Get a Free Quote</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
        </a>
    </div>
</div>

<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    const sidebarCloseBtn = document.getElementById('sidebarCloseBtn');
    const sidebarServicesBtn = document.getElementById('sidebarServicesBtn');
    const sidebarServicesList = document.getElementById('sidebarServicesList');
    const sidebarServicesArrow = document.getElementById('sidebarServicesArrow');
    
    function openSidebar() {
        mobileSidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function closeSidebar() {
        mobileSidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
    
    mobileMenuBtn.addEventListener('click', function() {
        const isActive = mobileSidebar.classList.contains('active');
        isActive ? closeSidebar() : openSidebar();
    });
    
    sidebarOverlay.addEventListener('click', closeSidebar);
    sidebarCloseBtn.addEventListener('click', closeSidebar);
    
    sidebarServicesBtn.addEventListener('click', function() {
        const isExpanded = sidebarServicesList.classList.contains('expanded');
        
        if (isExpanded) {
            sidebarServicesList.classList.remove('expanded');
            sidebarServicesArrow.classList.remove('rotated');
        } else {
            sidebarServicesList.classList.add('expanded');
            sidebarServicesArrow.classList.add('rotated');
        }
    });
    
    document.querySelectorAll('.mobile-sidebar-item[href], .mobile-dropdown-item[href]').forEach(link => {
        link.addEventListener('click', closeSidebar);
    });
</script>
