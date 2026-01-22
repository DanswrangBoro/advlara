@extends('layouts.base')

@section('title', 'Performance Marketing Services - Data-Driven Campaigns for Maximum ROI')
@section('description', 'Transform your marketing with data-driven campaigns that deliver measurable results. Expert PPC, paid social, and conversion optimization for maximum ROI.')
@section('keywords', 'performance marketing, PPC, paid advertising, ROI optimization, digital marketing, conversion optimization, remarketing, retargeting')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Flip.min.js"></script>

<style>
    :root {
        --primary-blue: #2563eb;
        --secondary-blue: #3b82f6;
        --light-blue: #eff6ff;
        --primary-orange: #f97316;
        --secondary-orange: #fb923c;
        --light-orange: #fff7ed;
        --white: #ffffff;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-400: #9ca3af;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-900: #111827;
    }


    .page-wrapper {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        background: var(--white);
        color: var(--gray-900);
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* Hero Section - Full Screen with Split Layout */
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        background: linear-gradient(135deg, #fafbff 0%, var(--white) 50%, var(--light-blue) 100%);
        overflow: hidden;
        padding: 4rem 0;
    }

    .hero-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        width: 100%;
        position: relative;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        min-height: 70vh;
    }

    .hero-content-left {
        padding: 2rem 0;
        z-index: 10;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.625rem;
        padding: 0.625rem 1.5rem;
        background: var(--white);
        color: var(--primary-blue);
        border-radius: 50px;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 2rem;
        border: 2px solid var(--light-blue);
        box-shadow: 0 8px 24px rgba(37, 99, 235, 0.12);
    }

    .hero-badge svg {
        width: 16px;
        height: 16px;
        fill: var(--primary-orange);
    }

    .hero-content-left h1 {
        font-size: clamp(2rem, 5vw, 4.5rem);
        font-weight: 900;
        line-height: 1.2;
        color: var(--gray-900);
        margin-bottom: 2rem;
        letter-spacing: -0.04em;
    }

    /* FORCE Data-Driven to stay together */
    .no-break-word {
        display: inline-block;
        white-space: nowrap !important;
    }

    .hero-content-left h1 .gradient-text {
        background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        display: inline;
    }

    .text-highlight {
        position: relative;
        display: inline-block;
        white-space: nowrap;
    }

    .text-highlight::after {
        content: '';
        position: absolute;
        bottom: 0.25em;
        left: 0;
        width: 100%;
        height: 0.15em;
        background: linear-gradient(90deg, var(--primary-blue), var(--primary-orange));
        opacity: 0.3;
        border-radius: 2px;
    }

    .hero-content-left p {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: var(--gray-600);
        line-height: 1.8;
        margin-bottom: 2.5rem;
        max-width: 600px;
    }

    /* Quick Features Row */
    .quick-features {
        display: flex;
        gap: 2rem;
        margin-bottom: 2.5rem;
        flex-wrap: wrap;
    }

    .quick-feature-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--gray-700);
    }

    .quick-feature-item svg {
        width: 20px;
        height: 20px;
        padding: 4px;
        background: var(--light-blue);
        border-radius: 6px;
        stroke: var(--primary-blue);
        stroke-width: 3;
        fill: none;
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 3rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        z-index: 10;
        cursor: pointer;
    }

    .scroll-text {
        font-size: 0.8125rem;
        font-weight: 600;
        color: var(--gray-600);
        text-transform: uppercase;
        letter-spacing: 0.15em;
    }

    .scroll-arrow {
        width: 32px;
        height: 32px;
        border: 2px solid var(--primary-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: bounceArrow 2s infinite;
    }

    .scroll-arrow svg {
        width: 20px;
        height: 20px;
        stroke: var(--primary-blue);
        stroke-width: 2;
        fill: none;
    }

    @keyframes bounceArrow {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    .hero-buttons {
        display: flex;
        gap: 1.25rem;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }

    .btn-primary {
        padding: 1.125rem 2.5rem;
        background: var(--primary-blue);
        color: var(--white);
        font-weight: 700;
        font-size: 1rem;
        border-radius: 12px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 16px rgba(37, 99, 235, 0.3);
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: left 0.6s;
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:hover {
        background: #1d4ed8;
        transform: translateY(-3px);
        box-shadow: 0 12px 32px rgba(37, 99, 235, 0.5);
    }

    .btn-primary svg {
        width: 18px;
        height: 18px;
        fill: none;
        stroke: currentColor;
        stroke-width: 2;
        transition: transform 0.3s;
    }

    .btn-primary:hover svg {
        transform: translateX(5px);
    }

    .btn-secondary {
        padding: 1.125rem 2.5rem;
        background: var(--white);
        color: var(--gray-700);
        font-weight: 700;
        font-size: 1rem;
        border-radius: 12px;
        text-decoration: none;
        border: 2px solid var(--gray-200);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .btn-secondary:hover {
        border-color: var(--primary-blue);
        color: var(--primary-blue);
        background: var(--light-blue);
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(37, 99, 235, 0.15);
    }

    /* Hero Right Side - Stats Cards */
    .hero-content-right {
        position: relative;
        z-index: 10;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stats-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        width: 100%;
        max-width: 400px;
    }

    .stat-card {
        background: var(--white);
        border: 2px solid var(--gray-100);
        border-radius: 24px;
        padding: 2.5rem;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, var(--primary-blue), var(--primary-orange));
    }

    .stat-card:hover {
        transform: translateX(10px);
        border-color: var(--primary-blue);
        box-shadow: 0 16px 48px rgba(37, 99, 235, 0.2);
    }

    .stat-card h3 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 900;
        background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-orange) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.75rem;
        line-height: 1;
    }

    .stat-card p {
        font-size: clamp(1rem, 2vw, 1.125rem);
        color: var(--gray-600);
        font-weight: 600;
        line-height: 1.5;
        margin: 0;
    }

    /* Services Section - Bento Grid Layout */
    .services-section {
        padding: 8rem 2rem;
        background: var(--white);
        position: relative;
    }

    .services-wrapper {
        max-width: 1400px;
        margin: 0 auto;
    }

    .section-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 5rem;
    }

    .section-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.875rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: var(--primary-blue);
        margin-bottom: 1.5rem;
    }

    .section-eyebrow::before,
    .section-eyebrow::after {
        content: '';
        width: 30px;
        height: 2px;
        background: var(--primary-blue);
    }

    .section-title {
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 900;
        color: var(--gray-900);
        margin-bottom: 1.5rem;
        letter-spacing: -0.04em;
        line-height: 1.1;
    }

    .section-description {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: var(--gray-600);
        line-height: 1.7;
    }

    /* Bento Grid for Services */
    .services-bento {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 2rem;
        margin-top: 5rem;
    }

    .service-card-large {
        grid-column: span 7;
        background: linear-gradient(135deg, var(--light-blue) 0%, var(--white) 100%);
        border: 2px solid var(--gray-200);
        border-radius: 32px;
        padding: 3.5rem;
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-card-small {
        grid-column: span 5;
        background: var(--white);
        border: 2px solid var(--gray-200);
        border-radius: 32px;
        padding: 3rem;
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-card-full {
        grid-column: span 12;
        background: linear-gradient(135deg, var(--gray-900) 0%, #1e293b 100%);
        border: 2px solid var(--gray-900);
        border-radius: 32px;
        padding: 4rem;
        position: relative;
        overflow: hidden;
        color: var(--white);
    }

    .service-card-large:hover,
    .service-card-small:hover,
    .service-card-full:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 64px rgba(0, 0, 0, 0.12);
        border-color: var(--primary-blue);
    }

    .service-icon-wrapper {
        width: 80px;
        height: 80px;
        background: var(--white);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        transition: all 0.4s;
    }

    .service-card-full .service-icon-wrapper {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }

    .service-card-large:hover .service-icon-wrapper,
    .service-card-small:hover .service-icon-wrapper,
    .service-card-full:hover .service-icon-wrapper {
        transform: scale(1.1) rotate(-5deg);
    }

    .service-icon-wrapper svg {
        width: 40px;
        height: 40px;
        fill: var(--primary-blue);
    }

    .service-card-full .service-icon-wrapper svg {
        fill: var(--white);
    }

    .service-badge {
        display: inline-block;
        padding: 0.5rem 1.25rem;
        background: var(--light-orange);
        color: var(--primary-orange);
        font-size: 0.75rem;
        font-weight: 700;
        border-radius: 8px;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 1.5rem;
    }

    .service-card-full .service-badge {
        background: rgba(249, 115, 22, 0.2);
        color: var(--secondary-orange);
    }

    .service-card h3 {
        font-size: clamp(1.5rem, 3vw, 2rem);
        font-weight: 800;
        color: var(--gray-900);
        margin-bottom: 1.25rem;
        line-height: 1.2;
    }

    .service-card-full h3 {
        color: var(--white);
        font-size: clamp(1.75rem, 3vw, 2.5rem);
    }

    .service-card p {
        font-size: clamp(0.9375rem, 2vw, 1.0625rem);
        color: var(--gray-600);
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .service-card-full p {
        color: rgba(255, 255, 255, 0.85);
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }

    .feature-icon {
        width: 24px;
        height: 24px;
        background: var(--primary-blue);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .feature-icon svg {
        width: 14px;
        height: 14px;
        stroke: var(--white);
        stroke-width: 3;
        fill: none;
    }

    .feature-text {
        font-size: 0.9375rem;
        color: var(--gray-700);
        font-weight: 500;
        line-height: 1.6;
    }

    .service-card-full .feature-text {
        color: rgba(255, 255, 255, 0.9);
    }

    .metrics-row {
        display: flex;
        gap: 3rem;
        padding-top: 2rem;
        border-top: 1px solid var(--gray-200);
        flex-wrap: wrap;
    }

    .service-card-full .metrics-row {
        border-top-color: rgba(255, 255, 255, 0.2);
    }

    .metric {
        flex: 1;
        min-width: 150px;
    }

    .metric-value {
        font-size: clamp(1.75rem, 4vw, 2.5rem);
        font-weight: 900;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
        line-height: 1;
    }

    .service-card-full .metric-value {
        background: linear-gradient(135deg, var(--white), var(--secondary-orange));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .metric-label {
        font-size: 0.875rem;
        color: var(--gray-600);
        font-weight: 600;
    }

    .service-card-full .metric-label {
        color: rgba(255, 255, 255, 0.7);
    }

    /* Process Section - Fixed Alignment */
    .process-section {
        padding: 8rem 2rem;
        background: linear-gradient(180deg, var(--gray-50) 0%, var(--white) 100%);
        overflow: hidden;
    }

    .process-wrapper {
        max-width: 1400px;
        margin: 0 auto;
    }

    .process-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 5rem;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        align-items: start;
    }

    .process-card {
        background: var(--white);
        border: 2px solid var(--gray-200);
        border-radius: 32px;
        padding: 3rem;
        position: relative;
        transition: all 0.4s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .process-card:hover {
        border-color: var(--primary-blue);
        transform: translateY(-8px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }

    .process-number {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-orange));
        color: var(--white);
        font-size: 2rem;
        font-weight: 900;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
        box-shadow: 0 12px 32px rgba(37, 99, 235, 0.3);
        position: relative;
        flex-shrink: 0;
    }

    .process-number::before {
        content: '';
        position: absolute;
        inset: -8px;
        border: 3px solid var(--primary-blue);
        border-radius: 50%;
        opacity: 0.2;
    }

    .process-card h3 {
        font-size: clamp(1.5rem, 3vw, 1.75rem);
        font-weight: 800;
        color: var(--gray-900);
        margin-bottom: 1rem;
        line-height: 1.3;
    }

    .process-card p {
        font-size: clamp(0.9375rem, 2vw, 1.0625rem);
        color: var(--gray-600);
        line-height: 1.8;
        flex-grow: 1;
    }

    /* CTA Section - Full Width Banner */
    .cta-section {
        position: relative;
        background: linear-gradient(135deg, var(--primary-blue) 0%, #1e40af 100%);
        overflow: hidden;
    }

    .cta-wrapper {
        max-width: 1400px;
        margin: 0 auto;
        padding: 6rem 2rem;
    }

    .cta-grid {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 10;
    }

    .cta-content h2 {
        font-size: clamp(2rem, 5vw, 4rem);
        font-weight: 900;
        color: var(--white);
        margin-bottom: 1.5rem;
        letter-spacing: -0.03em;
        line-height: 1.1;
    }

    .cta-content p {
        font-size: clamp(1rem, 2vw, 1.25rem);
        color: rgba(255, 255, 255, 0.95);
        margin-bottom: 3rem;
        line-height: 1.8;
    }

    .cta-buttons {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .btn-white {
        padding: 1.25rem 3rem;
        background: var(--white);
        color: var(--primary-blue);
        font-weight: 700;
        font-size: 1.0625rem;
        border-radius: 12px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.4s;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }

    .btn-white:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
    }

    .btn-white svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
    }

    .btn-white:hover svg {
        transform: translateX(5px);
    }

    .btn-outline-white {
        padding: 1.25rem 3rem;
        background: rgba(255, 255, 255, 0.1);
        color: var(--white);
        font-weight: 700;
        font-size: 1.0625rem;
        border-radius: 12px;
        text-decoration: none;
        border: 2px solid rgba(255, 255, 255, 0.3);
        transition: all 0.4s;
        backdrop-filter: blur(10px);
    }

    .btn-outline-white:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: var(--white);
        transform: translateY(-4px);
    }

    .cta-visual {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    .cta-stat {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
    }

    .cta-stat h4 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        font-weight: 900;
        color: var(--white);
        margin-bottom: 0.5rem;
    }

    .cta-stat p {
        font-size: 0.9375rem;
        color: rgba(255, 255, 255, 0.85);
        margin: 0;
    }

    .cta-pattern {
        position: absolute;
        inset: 0;
        opacity: 0.05;
        background-image: radial-gradient(circle, white 2px, transparent 2px);
        background-size: 50px 50px;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
            text-align: center;
        }

        .hero-content-left {
            padding: 1rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-content-left p {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            justify-content: center;
        }

        .quick-features {
            justify-content: center;
        }

        .services-bento .service-card-large,
        .services-bento .service-card-small {
            grid-column: span 12;
        }

        .feature-grid {
            grid-template-columns: 1fr;
        }

        .cta-grid {
            grid-template-columns: 1fr;
            gap: 3rem;
            text-align: center;
        }

        .cta-buttons {
            justify-content: center;
        }

        .stats-container {
            max-width: 500px;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .page-wrapper {
            padding-top: 70px;
        }

        .hero-section {
            min-height: auto;
            padding: 3rem 0 2rem;
        }

        .hero-container {
            padding: 0 1.5rem;
        }

        .hero-grid {
            min-height: auto;
            gap: 2rem;
            text-align: left;
        }

        .hero-content-left {
            align-items: flex-start;
        }

        .hero-content-left h1 {
            text-align: left;
        }

        .hero-content-left p {
            text-align: left;
            margin-left: 0;
            margin-right: 0;
        }

        .hero-buttons {
            justify-content: flex-start;
        }

        .quick-features {
            flex-direction: column;
            gap: 1rem;
            align-items: flex-start;
        }

        .scroll-indicator {
            bottom: 1.5rem;
        }

        .services-section,
        .process-section {
            padding: 4rem 1.5rem;
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .services-bento {
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .process-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .process-card {
            padding: 2rem;
        }

        .section-eyebrow::before,
        .section-eyebrow::after {
            width: 20px;
        }

        .metrics-row {
            gap: 2rem;
        }

        .cta-visual {
            grid-template-columns: 1fr;
        }

        .hero-buttons,
        .cta-buttons {
            flex-direction: column;
            width: 100%;
        }

        .btn-primary,
        .btn-secondary,
        .btn-white,
        .btn-outline-white {
            width: 100%;
            justify-content: center;
            text-align: center;
        }

        .cta-wrapper {
            padding: 4rem 1.5rem;
        }

        .service-card-large,
        .service-card-small,
        .service-card-full {
            padding: 2rem;
        }
    }

    @media (max-width: 480px) {
        .hero-container {
            padding: 0 1rem;
        }

        .hero-content-left h1 {
            font-size: clamp(1.75rem, 7vw, 2.5rem);
        }

        .stat-card {
            padding: 1.5rem;
        }

        .process-number {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .services-section,
        .process-section {
            padding: 3rem 1rem;
        }

        .service-card-large,
        .service-card-small,
        .service-card-full {
            padding: 1.5rem;
        }

        .cta-wrapper {
            padding: 3rem 1rem;
        }

        .btn-primary,
        .btn-secondary {
            padding: 1rem 2rem;
            font-size: 0.9375rem;
        }

        .btn-white,
        .btn-outline-white {
            padding: 1rem 2rem;
            font-size: 0.9375rem;
        }
    }

    @media (max-width: 360px) {
        .hero-buttons {
            gap: 0.75rem;
        }

        .quick-features {
            gap: 0.75rem;
        }

        .stat-card {
            padding: 1.25rem;
        }
    }
</style>

<div class="page-wrapper">

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-grid">
            <div class="hero-content-left">
                <div class="hero-badge" data-hero-elem>
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                    Performance Marketing
                </div>
                
                <h1 data-hero-elem>
                    <span class="no-break-word">Data-Driven</span> Campaigns for <span class="gradient-text text-highlight">Maximum&nbsp;ROI</span>
                </h1>
                
                <p data-hero-elem>Our data-driven approach ensures your marketing campaigns deliver tangible outcomes and maximize return on investment through continuous optimization and strategic refinement.</p>
                
                <!-- Quick Features Row -->
                <div class="quick-features" data-hero-elem>
                    <div class="quick-feature-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        <span>Real-time Analytics</span>
                    </div>
                    <div class="quick-feature-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        <span>AI-Powered Optimization</span>
                    </div>
                    <div class="quick-feature-item">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        <span>24/7 Support</span>
                    </div>
                </div>
                
                <div class="hero-buttons" data-hero-elem>
                    <a href="#contact" class="btn-primary">
                        Get Started Today
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#services" class="btn-secondary">View Our Services</a>
                </div>
            </div>
            
            <div class="hero-content-right">
                <div class="stats-container">
                    <div class="stat-card" data-stat-card>
                        <h3 data-count="350">0%</h3>
                        <p>Average ROI Increase</p>
                    </div>
                    <div class="stat-card" data-stat-card>
                        <h3 data-count="500">0+</h3>
                        <p>Successful Campaigns</p>
                    </div>
                    <div class="stat-card" data-stat-card>
                        <h3 data-count="50">$0M+</h3>
                        <p>Ad Spend Managed</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator" data-scroll-indicator>
            <div class="scroll-text">Scroll to explore</div>
            <div class="scroll-arrow">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5v14M5 12l7 7 7-7"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="services-wrapper">
        <div class="section-header" data-section-header>
            <div class="section-eyebrow">OUR SERVICES</div>
            <h2 class="section-title">Comprehensive Marketing Solutions</h2>
            <p class="section-description">We offer end-to-end performance marketing services designed to drive measurable results and accelerate your business growth.</p>
        </div>
        
        <div class="services-bento">
            <!-- Large Card 1 -->
            <div class="service-card-large" data-service-card>
                <span class="service-badge">Popular</span>
                <div class="service-icon-wrapper">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <h3>Campaign Management</h3>
                <p>We design, execute, and optimize campaigns to drive results and maximize ROI through continuous strategy refinement and performance monitoring.</p>
                
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Multi-channel campaign execution</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">A/B testing and optimization</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Budget allocation strategy</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Performance tracking dashboards</span>
                    </div>
                </div>
                
                <div class="metrics-row">
                    <div class="metric">
                        <div class="metric-value">45%</div>
                        <div class="metric-label">Avg. CTR Increase</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">3.2x</div>
                        <div class="metric-label">ROI Multiplier</div>
                    </div>
                </div>
            </div>
            
            <!-- Small Card 1 -->
            <div class="service-card-small" data-service-card>
                <span class="service-badge">Advanced</span>
                <div class="service-icon-wrapper">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 3v18h18"/>
                        <path d="m19 9-5 5-4-4-3 3"/>
                    </svg>
                </div>
                <h3>Real-time Analysis</h3>
                <p>Instant performance monitoring and quick adjustments for optimal ROI and campaign effectiveness.</p>
                
                <div class="metrics-row">
                    <div class="metric">
                        <div class="metric-value">24/7</div>
                        <div class="metric-label">Monitoring</div>
                    </div>
                </div>
            </div>
            
            <!-- Small Card 2 -->
            <div class="service-card-small" data-service-card>
                <span class="service-badge">High ROI</span>
                <div class="service-icon-wrapper">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                        <path d="M11 8a3 3 0 0 0-3 3"/>
                    </svg>
                </div>
                <h3>Remarketing</h3>
                <p>Re-engage visitors with personalized ads to boost conversions and maximize customer lifetime value.</p>
                
                <div class="metrics-row">
                    <div class="metric">
                        <div class="metric-value">4.5x</div>
                        <div class="metric-label">ROAS Average</div>
                    </div>
                </div>
            </div>
            
            <!-- Large Card 2 -->
            <div class="service-card-large" data-service-card>
                <span class="service-badge">Enterprise</span>
                <div class="service-icon-wrapper">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>Complete Performance Suite</h3>
                <p>Full-service performance marketing with integrated analytics, optimization, and strategic consulting to drive exponential growth for your business.</p>
                
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Integrated analytics platform</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Strategic consulting</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Custom reporting dashboards</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="feature-text">Dedicated account manager</span>
                    </div>
                </div>

                <div class="metrics-row">
                    <div class="metric">
                        <div class="metric-value">$50M+</div>
                        <div class="metric-label">Ad Spend Managed</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">500+</div>
                        <div class="metric-label">Active Campaigns</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">98%</div>
                        <div class="metric-label">Client Retention</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="process-wrapper">
        <div class="process-header" data-section-header>
            <div class="section-eyebrow">OUR APPROACH</div>
            <h2 class="section-title">How We Drive Success</h2>
            <p class="section-description">Our proven four-step process ensures your campaigns are optimized for maximum performance and deliver measurable results.</p>
        </div>
        
        <div class="process-grid">
            <div class="process-card" data-process-card>
                <div class="process-number">01</div>
                <h3>Analysis</h3>
                <p>We assess comprehensive data to identify trends, opportunities, and areas for improvement to enhance campaign effectiveness.</p>
            </div>
            
            <div class="process-card" data-process-card>
                <div class="process-number">02</div>
                <h3>Strategy</h3>
                <p>We develop data-driven strategies tailored to your specific goals to achieve results and accelerate business growth.</p>
            </div>
            
            <div class="process-card" data-process-card>
                <div class="process-number">03</div>
                <h3>Implementation</h3>
                <p>We execute strategies efficiently with precision and attention to detail to deliver impactful and measurable results.</p>
            </div>
            
            <div class="process-card" data-process-card>
                <div class="process-number">04</div>
                <h3>Reporting</h3>
                <p>Our comprehensive reports provide deep insights into campaign progress and performance to guide strategic decisions.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="cta-pattern"></div>
    
    <div class="cta-wrapper">
        <div class="cta-grid">
            <div class="cta-content" data-cta-content>
                <h2>Boost Your Business with Performance Marketing</h2>
                <p>Get started optimizing your campaigns today and achieve the results you want with our data-driven marketing solutions.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn-white">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                        Start Your Campaign
                    </a>
                    <a href="#" class="btn-outline-white">Schedule a Call</a>
                </div>
            </div>
            
            <div class="cta-visual" data-cta-visual>
                <div class="cta-stat">
                    <h4>350%</h4>
                    <p>Avg. ROI</p>
                </div>
                <div class="cta-stat">
                    <h4>500+</h4>
                    <p>Campaigns</p>
                </div>
                <div class="cta-stat">
                    <h4>$50M+</h4>
                    <p>Ad Spend</p>
                </div>
                <div class="cta-stat">
                    <h4>98%</h4>
                    <p>Retention</p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger, Flip);

    // Initial state - ensure all elements are visible
    gsap.set('[data-hero-elem], [data-stat-card], [data-section-header], [data-service-card], [data-process-card], [data-cta-content], [data-cta-visual] .cta-stat', {
        opacity: 1,
        y: 0,
        x: 0,
        rotation: 0
    });

    // Hero Section - Advanced Staggered Entrance
    const heroTimeline = gsap.timeline();
    
    heroTimeline.from('[data-hero-elem]', {
        opacity: 0,
        y: 80,
        duration: 1.2,
        stagger: 0.2,
        ease: "power4.out"
    });

    // Scroll Indicator Smooth Click
    document.querySelector('.scroll-indicator')?.addEventListener('click', function() {
        gsap.to(window, {
            duration: 1.5,
            scrollTo: { y: '.services-section', offsetY: 100 },
            ease: "power3.inOut"
        });
    });

    // Hide scroll indicator on scroll
    ScrollTrigger.create({
        start: 'top -10',
        onEnter: () => {
            gsap.to('.scroll-indicator', {
                opacity: 0,
                y: 20,
                duration: 0.3
            });
        },
        onLeaveBack: () => {
            gsap.to('.scroll-indicator', {
                opacity: 1,
                y: 0,
                duration: 0.3
            });
        }
    });

    // Stat Cards - Flip Animation
    const statCards = document.querySelectorAll('[data-stat-card]');
    statCards.forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            x: 100,
            rotationY: 90,
            duration: 1,
            delay: i * 0.15,
            ease: "back.out(1.7)"
        });
    });

    // Animate Numbers with Smooth Counting
    document.querySelectorAll('[data-count]').forEach(el => {
        const target = parseInt(el.dataset.count);
        const suffix = el.textContent.includes('%') ? '%' : 
                      el.textContent.includes('+') ? '+' : 
                      el.textContent.includes('$') ? 'M+' : '';
        
        gsap.to(el, {
            innerHTML: target,
            duration: 3,
            delay: 1.5,
            ease: "power2.out",
            snap: { innerHTML: 1 },
            onUpdate: function() {
                const value = Math.round(this.targets()[0].innerHTML);
                if (suffix === 'M+') {
                    el.innerHTML = '$' + value + 'M+';
                } else {
                    el.innerHTML = value + suffix;
                }
            }
        });
    });

    // Magnetic Button Effect
    document.querySelectorAll('.btn-primary, .btn-secondary, .btn-white').forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            gsap.to(btn, {
                x: (x - rect.width / 2) * 0.1,
                y: (y - rect.height / 2) * 0.1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: "elastic.out(1, 0.5)"
            });
        });
    });

    // Section Headers - Scale Animation
    document.querySelectorAll('[data-section-header]').forEach(header => {
        gsap.from(header, {
            scrollTrigger: {
                trigger: header,
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 100,
            scale: 0.9,
            duration: 1.2,
            ease: "back.out(1.7)"
        });
    });

    // Service Cards - 3D Flip with Stagger
    const serviceCards = document.querySelectorAll('[data-service-card]');
    serviceCards.forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 100,
            rotationX: 15,
            duration: 1,
            delay: i * 0.1,
            ease: "power3.out"
        });

        // Hover 3D effect
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                rotationY: 5,
                rotationX: -5,
                duration: 0.3,
                ease: "power2.out"
            });
        });
        
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotationY: 0,
                rotationX: 0,
                duration: 0.5,
                ease: "elastic.out(1, 0.5)"
            });
        });
    });

    // Process Cards - Staggered Grid Animation
    const processCards = document.querySelectorAll('[data-process-card]');
    gsap.from(processCards, {
        scrollTrigger: {
            trigger: '.process-grid',
            start: 'top 70%',
            toggleActions: 'play none none reverse'
        },
        opacity: 0,
        y: 80,
        stagger: {
            amount: 0.6,
            grid: "auto",
            from: "center"
        },
        duration: 1,
        ease: "power3.out"
    });

    // Process Numbers - Continuous Rotation on Scroll
    document.querySelectorAll('.process-number').forEach(num => {
        gsap.to(num, {
            scrollTrigger: {
                trigger: num,
                start: 'top 80%',
                end: 'bottom 20%',
                scrub: 1
            },
            rotation: 360,
            ease: "none"
        });
    });

    // CTA Section - Split Text Animation
    const ctaContent = document.querySelector('[data-cta-content]');
    if (ctaContent) {
        gsap.from(ctaContent.children, {
            scrollTrigger: {
                trigger: ctaContent,
                start: 'top 80%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 50,
            stagger: 0.2,
            duration: 1,
            ease: "power3.out"
        });
    }

    // CTA Stats - Bounce In
    gsap.from('[data-cta-visual] .cta-stat', {
        scrollTrigger: {
            trigger: '[data-cta-visual]',
            start: 'top 80%',
            toggleActions: 'play none none reverse'
        },
        opacity: 0,
        scale: 0,
        y: 60,
        stagger: 0.15,
        duration: 0.8,
        ease: "back.out(1.7)"
    });

    // Smooth Scroll for Anchors with Offset
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                gsap.to(window, {
                    duration: 1.5,
                    scrollTo: { 
                        y: target, 
                        offsetY: 100 
                    },
                    ease: "power3.inOut"
                });
            }
        });
    });

    // Text reveal animation for headings - EXCLUDE H1 to prevent word breaking
    document.querySelectorAll('.section-title').forEach(heading => {
        const text = heading.textContent;
        heading.innerHTML = text.split('').map(char => 
            `<span style="display: inline-block;">${char === ' ' ? '&nbsp;' : char}</span>`
        ).join('');
        
        gsap.from(heading.querySelectorAll('span'), {
            scrollTrigger: {
                trigger: heading,
                start: 'top 85%',
                toggleActions: 'play none none reverse'
            },
            opacity: 0,
            y: 50,
            rotationX: 90,
            stagger: 0.03,
            duration: 1,
            ease: "power3.out"
        });
    });
});
</script>

@endsection
