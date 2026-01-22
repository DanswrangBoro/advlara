@extends('layouts.base')

@section('title', 'UI/UX Design Services - User-Centered Digital Experiences')
@section('description', 'Transform user experiences with intuitive UI/UX design. We create digital products that users love and businesses thrive on.')
@section('keywords', 'UI design, UX design, user experience, user interface, digital product design, web design, app design')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700;800&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    /* Advanced Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes morphBlob {
        0%, 100% {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            transform: rotate(0deg) scale(1);
        }
        25% {
            border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
            transform: rotate(90deg) scale(1.1);
        }
        50% {
            border-radius: 50% 60% 30% 60% / 30% 60% 70% 40%;
            transform: rotate(180deg) scale(0.95);
        }
        75% {
            border-radius: 60% 40% 60% 40% / 70% 30% 50% 60%;
            transform: rotate(270deg) scale(1.05);
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        33% {
            transform: translateY(-20px) rotate(5deg);
        }
        66% {
            transform: translateY(-10px) rotate(-5deg);
        }
    }

    @keyframes floatSlow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-30px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.7;
            transform: scale(1.05);
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }
        100% {
            background-position: 1000px 0;
        }
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes gridMove {
        0% { transform: translate(0, 0); }
        100% { transform: translate(50px, 50px); }
    }

    @keyframes marqueeScroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    @keyframes floatLayer1 {
        0%, 100% { transform: translateY(0) rotate(-3deg); }
        50% { transform: translateY(-25px) rotate(-5deg); }
    }

    @keyframes floatLayer2 {
        0%, 100% { transform: translateY(0) rotate(3deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }

    @keyframes floatLayer3 {
        0%, 100% { transform: translateY(0) rotate(-2deg); }
        50% { transform: translateY(-30px) rotate(-4deg); }
    }

    .fade-in-up {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    .delay-5 { animation-delay: 0.5s; }
    .delay-6 { animation-delay: 0.6s; }

    /* Hero Section */
    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);
        position: relative;
        display: flex;
        align-items: center;
        padding: 3rem 5%;
        overflow: hidden;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        color: #0a0a0a;
    }

    .hero-animated-bg {
        position: absolute;
        inset: 0;
        z-index: 1;
        overflow: hidden;
    }

    .hero-blob {
        position: absolute;
        animation: morphBlob 15s ease-in-out infinite;
    }

    .hero-blob-1 {
        width: 600px;
        height: 600px;
        top: -200px;
        right: -100px;
        background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 100%);
        filter: blur(80px);
        opacity: 0.4;
    }

    .hero-blob-2 {
        width: 500px;
        height: 500px;
        bottom: -150px;
        left: -100px;
        background: linear-gradient(135deg, #fed7aa 0%, #fdba74 100%);
        filter: blur(80px);
        opacity: 0.35;
        animation-delay: 5s;
    }

    .hero-grid-pattern {
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(37, 99, 235, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(37, 99, 235, 0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
    }

    .hero-particles {
        position: absolute;
        inset: 0;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: #2563eb;
        border-radius: 50%;
        opacity: 0.3;
        animation: float 8s ease-in-out infinite;
    }

    .particle:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .particle:nth-child(2) {
        top: 60%;
        left: 80%;
        animation-delay: 2s;
        background: #f97316;
    }

    .particle:nth-child(3) {
        top: 80%;
        left: 30%;
        animation-delay: 4s;
    }

    .particle:nth-child(4) {
        top: 40%;
        left: 60%;
        animation-delay: 6s;
        background: #f97316;
    }

    .hero-container {
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
        position: relative;
        z-index: 10;
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        gap: 3rem;
        align-items: center;
    }

    .hero-content {
        max-width: 650px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        background: #2563eb;
        color: #ffffff;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        border-radius: 50px;
        margin-bottom: 1.25rem;
        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.25);
        animation: fadeInDown 1s ease-out;
    }

    .badge-icon {
        width: 14px;
        height: 14px;
        animation: pulse 2s ease-in-out infinite;
    }

    .hero-title {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 1.25rem;
        font-family: 'Space Grotesk', sans-serif;
        animation: fadeInUp 1s ease-out 0.2s both;
    }

    .hero-title .word {
        display: inline-block;
    }

    .hero-title .highlight {
        background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
    }

    .hero-title .accent {
        color: #f97316;
        position: relative;
    }

    .hero-title .accent::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: #f97316;
        animation: shimmer 3s linear infinite;
        background-size: 200% 100%;
    }

    .hero-description {
        font-size: 1rem;
        color: #525252;
        line-height: 1.6;
        margin-bottom: 2rem;
        max-width: 580px;
        animation: fadeInUp 1s ease-out 0.4s both;
    }

    .hero-buttons {
        display: flex;
        gap: 0.875rem;
        flex-wrap: wrap;
        animation: fadeInUp 1s ease-out 0.6s both;
    }

    .btn-primary {
        padding: 12px 28px;
        background: #0a0a0a;
        color: #ffffff;
        font-size: 0.875rem;
        font-weight: 700;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        text-decoration: none;
        display: inline-block;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(249, 115, 22, 0.3), transparent);
        transition: left 0.6s;
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:hover {
        background: #f97316;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.35);
    }

    .btn-secondary {
        padding: 12px 28px;
        background: transparent;
        color: #0a0a0a;
        font-size: 0.875rem;
        font-weight: 700;
        border: 2px solid #e5e5e5;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        text-decoration: none;
        display: inline-block;
        position: relative;
        overflow: hidden;
    }

    .btn-secondary::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: rgba(37, 99, 235, 0.1);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .btn-secondary:hover::after {
        width: 300px;
        height: 300px;
    }

    .btn-secondary:hover {
        border-color: #2563eb;
        color: #2563eb;
        transform: translateY(-3px);
    }

    .hero-visual {
        position: relative;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeInUp 1s ease-out 0.8s both;
    }

    .visual-illustration {
        width: 100%;
        max-width: 420px;
        position: relative;
    }

    .illustration-circle {
        animation: floatSlow 6s ease-in-out infinite;
    }

    .illustration-square {
        animation: float 7s ease-in-out infinite;
    }

    .illustration-line {
        animation: shimmer 3s linear infinite;
    }

    /* Marquee Section */
    .marquee-section {
        background: #0a0a0a;
        padding: 2rem 0;
        overflow: hidden;
        position: relative;
    }

    .marquee-track {
        display: flex;
        gap: 5rem;
        animation: marqueeScroll 40s linear infinite;
        width: fit-content;
    }

    .marquee-item {
        font-size: 1.5rem;
        font-weight: 900;
        color: transparent;
        -webkit-text-stroke: 2px rgba(255, 255, 255, 0.3);
        white-space: nowrap;
        font-family: 'Space Grotesk', sans-serif;
        transition: all 0.3s ease;
    }

    .marquee-item:hover {
        color: #ffffff;
        -webkit-text-stroke: 0;
        transform: scale(1.1);
    }

    .marquee-item.highlight {
        color: #f97316;
        -webkit-text-stroke: 0;
    }

    /* Stats Section */
    .stats-section {
        background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
        padding: 3rem 5%;
        position: relative;
        overflow: hidden;
    }

    .stats-bg-pattern {
        position: absolute;
        inset: 0;
        opacity: 0.03;
        background-image: 
            repeating-linear-gradient(45deg, #ffffff 0, #ffffff 1px, transparent 1px, transparent 20px);
    }

    .stats-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2rem;
        position: relative;
        z-index: 10;
    }

    .stat-card {
        text-align: center;
        padding: 1.75rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        backdrop-filter: blur(10px);
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.1), transparent);
        transition: left 0.6s;
    }

    .stat-card:hover::before {
        left: 100%;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        background: rgba(37, 99, 235, 0.1);
        border-color: #2563eb;
        box-shadow: 0 15px 40px rgba(37, 99, 235, 0.2);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 900;
        color: #ffffff;
        line-height: 1;
        margin-bottom: 0.625rem;
        font-family: 'Space Grotesk', sans-serif;
    }

    .stat-card:hover .stat-number {
        background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 0.825rem;
        color: #a3a3a3;
        font-weight: 600;
    }

    /* Services Section */
    .services-section {
        padding: 5rem 5%;
        background: #ffffff;
        position: relative;
    }

    .services-container {
        max-width: 1400px;
        margin: 0 auto;
    }

    .section-header {
        max-width: 750px;
        margin-bottom: 3.5rem;
    }

    .section-tag {
        font-size: 0.75rem;
        color: #2563eb;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.8px;
        margin-bottom: 0.875rem;
        display: inline-block;
        position: relative;
        padding-bottom: 6px;
    }

    .section-tag::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: #2563eb;
    }

    .section-title {
        font-size: clamp(1.75rem, 4vw, 3rem);
        font-weight: 900;
        line-height: 1.2;
        margin-bottom: 1rem;
        font-family: 'Space Grotesk', sans-serif;
    }

    .section-description {
        font-size: 1rem;
        color: #525252;
        line-height: 1.65;
    }

    /* Featured Service Card */
    .services-featured {
        margin-bottom: 3.5rem;
    }

    .featured-card {
        background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        border-radius: 20px;
        padding: 3rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(37, 99, 235, 0.25);
    }

    .featured-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.2), transparent);
        border-radius: 50%;
        animation: pulse 8s ease-in-out infinite;
    }

    .featured-content {
        position: relative;
        z-index: 10;
    }

    .featured-badge {
        display: inline-block;
        padding: 6px 16px;
        background: #f97316;
        color: #ffffff;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        border-radius: 50px;
        margin-bottom: 1.5rem;
    }

    .featured-title {
        font-size: clamp(1.75rem, 3.5vw, 2.5rem);
        font-weight: 900;
        color: #ffffff;
        margin-bottom: 1.25rem;
        font-family: 'Space Grotesk', sans-serif;
    }

    .featured-description {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.65;
        margin-bottom: 1.75rem;
    }

    .featured-list {
        list-style: none;
        margin-bottom: 2rem;
    }

    .featured-list li {
        display: flex;
        align-items: center;
        gap: 10px;
        color: rgba(255, 255, 255, 0.95);
        font-size: 0.95rem;
        margin-bottom: 0.875rem;
        font-weight: 500;
    }

    .featured-list li svg {
        width: 18px;
        height: 18px;
        stroke: #f97316;
        flex-shrink: 0;
    }

    .featured-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        background: #ffffff;
        color: #0a0a0a;
        font-size: 0.9rem;
        font-weight: 800;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .featured-btn svg {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
    }

    .featured-btn:hover {
        background: #f97316;
        color: #ffffff;
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    .featured-btn:hover svg {
        transform: translateX(5px);
    }

    .featured-visual {
        position: relative;
        z-index: 10;
        height: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .featured-visual-content {
        position: relative;
        width: 100%;
        max-width: 340px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .featured-mockup {
        width: 260px;
        height: 300px;
        background: #ffffff;
        border-radius: 18px;
        padding: 1.75rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        position: relative;
        z-index: 10;
    }

    .mockup-header {
        display: flex;
        gap: 5px;
        margin-bottom: 1.25rem;
    }

    .mockup-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
    }

    .mockup-dot:nth-child(1) { background: #f97316; }
    .mockup-dot:nth-child(2) { background: #fb923c; }
    .mockup-dot:nth-child(3) { background: #2563eb; }

    .mockup-content-line {
        height: 9px;
        background: #f0f0f0;
        border-radius: 4.5px;
        margin-bottom: 10px;
    }

    .mockup-content-line:nth-child(1) { width: 80%; }
    .mockup-content-line:nth-child(2) { width: 60%; background: #dbeafe; }
    .mockup-content-line:nth-child(3) { width: 90%; }
    .mockup-content-line:nth-child(4) { width: 70%; background: #fed7aa; }

    .mockup-icon-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-top: 1.75rem;
    }

    .mockup-icon {
        width: 100%;
        aspect-ratio: 1;
        background: linear-gradient(135deg, #eff6ff, #dbeafe);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mockup-icon svg {
        width: 20px;
        height: 20px;
        stroke: #2563eb;
    }

    .featured-floating-element {
        position: absolute;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .floating-1 {
        width: 110px;
        height: 75px;
        background: #f97316;
        top: -15px;
        right: -25px;
        animation: floatLayer1 6s ease-in-out infinite;
    }

    .floating-2 {
        width: 95px;
        height: 95px;
        background: #2563eb;
        bottom: -25px;
        left: -35px;
        animation: floatLayer2 7s ease-in-out infinite;
    }

    /* Modern Service Grid */
    .services-modern-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.75rem;
    }

    .service-card-modern {
        background: #ffffff;
        border-radius: 18px;
        padding: 2.5rem 2rem;
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: pointer;
        border: 2px solid #f0f0f0;
        display: flex;
        flex-direction: column;
        min-height: 300px;
    }

    .service-number {
        position: absolute;
        top: 1.25rem;
        right: 1.75rem;
        font-size: 2.5rem;
        font-weight: 900;
        color: #f0f0f0;
        font-family: 'Space Grotesk', sans-serif;
        line-height: 1;
        transition: all 0.4s ease;
    }

    .service-card-modern:hover .service-number {
        color: #2563eb;
        transform: scale(1.2);
    }

    .service-card-modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: #2563eb;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .service-card-modern:hover::before {
        transform: scaleX(1);
    }

    .service-card-modern:hover {
        border-color: #2563eb;
        transform: translateY(-8px);
        box-shadow: 0 25px 60px rgba(37, 99, 235, 0.2);
    }

    .service-card-modern:nth-child(2)::before {
        background: linear-gradient(90deg, #2563eb, #3b82f6);
    }

    .service-card-modern:nth-child(3)::before {
        background: #f97316;
    }

    .service-card-modern:nth-child(3):hover {
        border-color: #f97316;
        box-shadow: 0 25px 60px rgba(249, 115, 22, 0.2);
    }

    .service-card-modern:nth-child(3):hover .service-number {
        color: #f97316;
    }

    .service-card-modern:nth-child(4)::before {
        background: linear-gradient(90deg, #2563eb, #60a5fa);
    }

    .service-card-modern:nth-child(6)::before {
        background: linear-gradient(90deg, #3b82f6, #2563eb);
    }

    .service-icon-modern {
        width: 60px;
        height: 60px;
        background: #eff6ff;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.75rem;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        z-index: 10;
        border: 2px solid #dbeafe;
    }

    .service-card-modern:hover .service-icon-modern {
        background: #2563eb;
        border-color: #2563eb;
        transform: scale(1.1) rotate(-10deg);
        box-shadow: 0 12px 35px rgba(37, 99, 235, 0.3);
    }

    .service-card-modern:nth-child(3):hover .service-icon-modern {
        background: #f97316;
        border-color: #f97316;
        box-shadow: 0 12px 35px rgba(249, 115, 22, 0.3);
    }

    .service-icon-modern svg {
        width: 28px;
        height: 28px;
        stroke: #0a0a0a;
        transition: all 0.4s ease;
    }

    .service-card-modern:hover .service-icon-modern svg {
        stroke: #ffffff;
        transform: scale(1.15);
    }

    .service-title-modern {
        font-size: 1.3rem;
        font-weight: 800;
        margin-bottom: 0.875rem;
        color: #0a0a0a;
        position: relative;
        z-index: 10;
        transition: color 0.4s ease;
    }

    .service-description-modern {
        font-size: 0.9rem;
        color: #525252;
        line-height: 1.65;
        margin-bottom: auto;
        position: relative;
        z-index: 10;
        transition: color 0.4s ease;
    }

    .service-hover-overlay {
        position: relative;
        z-index: 10;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        margin-top: 1.25rem;
    }

    .service-card-modern:hover .service-hover-overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .service-learn-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #2563eb;
        font-weight: 700;
        text-decoration: none;
        font-size: 0.85rem;
        transition: gap 0.3s ease;
    }

    .service-card-modern:nth-child(3) .service-learn-more {
        color: #f97316;
    }

    .service-learn-more svg {
        width: 14px;
        height: 14px;
        transition: transform 0.3s ease;
    }

    .service-learn-more:hover {
        gap: 10px;
    }

    .service-learn-more:hover svg {
        transform: translateX(3px);
    }

    /* Process Section - GSAP Stack Effect */
    .process-section {
        padding: 5rem 5% 10rem 5%;
        background: linear-gradient(180deg, #fafafa 0%, #ffffff 100%);
        position: relative;
    }

    .process-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .process-wrapper {
        position: relative;
        padding-top: 3.5rem;
    }

    .process-step-card {
        background: #ffffff;
        border: 2px solid #f0f0f0;
        border-radius: 16px;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        will-change: transform, opacity;
        transform-origin: top center;
    }

    .process-step-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 5px;
        height: 100%;
        background: linear-gradient(180deg, #2563eb, #3b82f6);
        transition: width 0.3s ease;
    }

    .process-step-card:hover::before {
        width: 8px;
    }

    .step-header {
        padding: 2rem 2.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 2rem;
    }

    .step-left {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        flex: 1;
    }

    .step-number-badge {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2563eb, #3b82f6);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 900;
        color: #ffffff;
        font-family: 'Space Grotesk', sans-serif;
        flex-shrink: 0;
    }

    .step-title-inline h3 {
        font-size: 1.4rem;
        font-weight: 800;
        color: #2563eb;
        margin-bottom: 0.375rem;
    }

    .step-subtitle {
        font-size: 0.85rem;
        color: #737373;
        font-weight: 500;
    }

    .step-icon-container {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(59, 130, 246, 0.1));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transform: rotate(-10deg);
    }

    .step-icon-container svg {
        width: 26px;
        height: 26px;
        stroke: #2563eb;
    }

    .step-content {
        padding: 0 2.5rem 2.5rem 2.5rem;
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 2.5rem;
        align-items: start;
    }

    .step-description {
        font-size: 1rem;
        color: #525252;
        line-height: 1.7;
        margin-bottom: 1.75rem;
    }

    .step-features {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.875rem;
    }

    .step-features li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.875rem;
        color: #0a0a0a;
        font-weight: 600;
    }

    .step-features li svg {
        width: 16px;
        height: 16px;
        stroke: #f97316;
        flex-shrink: 0;
    }

    .step-visual {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }

    .visual-icon-large {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, #eff6ff, #dbeafe);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: float 6s ease-in-out infinite;
    }

    .visual-icon-large svg {
        width: 60px;
        height: 60px;
        stroke: #2563eb;
    }

    /* CTA Section */
    .cta-section {
        padding: 5rem 5%;
        background: linear-gradient(135deg, #1e40af 0%, #2563eb 100%);
        position: relative;
        overflow: hidden;
        margin-top: 5rem;
    }

    .cta-circles {
        position: absolute;
        inset: 0;
    }

    .cta-circle {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.15), transparent);
        animation: pulse 8s ease-in-out infinite;
    }

    .cta-circle:nth-child(1) {
        width: 400px;
        height: 400px;
        top: -200px;
        right: -100px;
    }

    .cta-circle:nth-child(2) {
        width: 500px;
        height: 500px;
        bottom: -250px;
        left: -150px;
        animation-delay: 4s;
    }

    .cta-container {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 10;
    }

    .cta-title {
        font-size: clamp(2rem, 4.5vw, 3.5rem);
        font-weight: 900;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 1.25rem;
        font-family: 'Space Grotesk', sans-serif;
        animation: scaleIn 1s ease-out;
    }

    .cta-description {
        font-size: 1.05rem;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.65;
        margin-bottom: 2.5rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-button {
        padding: 14px 38px;
        background: #ffffff;
        color: #0a0a0a;
        font-size: 0.95rem;
        font-weight: 800;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        position: relative;
        overflow: hidden;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: #f97316;
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .cta-button:hover::before {
        width: 400px;
        height: 400px;
    }

    .cta-button:hover {
        color: #ffffff;
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
    }

    .cta-button span {
        position: relative;
        z-index: 10;
    }

    /* Scroll Reveal Animation */
    .scroll-reveal {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .scroll-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .services-modern-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 1024px) {
        .hero-container {
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }

        .hero-visual {
            height: 350px;
        }

        .featured-card {
            grid-template-columns: 1fr;
            padding: 2.5rem;
        }
        
        .featured-visual {
            height: 280px;
        }

        .stats-container {
            grid-template-columns: repeat(2, 1fr);
        }

        .step-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .step-visual {
            display: none;
        }

        .step-features {
            grid-template-columns: 1fr;
        }

        .process-step-card {
            position: relative !important;
            top: auto !important;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 2.5rem 5%;
            min-height: auto;
        }

        .hero-title {
            font-size: 2rem;
        }

        .hero-description {
            font-size: 0.95rem;
        }

        .hero-buttons {
            flex-direction: column;
            align-items: flex-start;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
            text-align: center;
            justify-content: center;
        }

        .hero-visual {
            height: 300px;
        }

        .visual-illustration {
            max-width: 100%;
        }

        .marquee-item {
            font-size: 1.25rem;
        }

        .stats-container {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .stat-number {
            font-size: 2rem;
        }

        .services-section,
        .process-section,
        .cta-section {
            padding: 4rem 5%;
        }

        .section-header {
            margin-bottom: 2.5rem;
        }

        .section-title {
            font-size: 1.75rem;
        }

        .section-description {
            font-size: 0.95rem;
        }

        .featured-card {
            padding: 2rem;
        }

        .featured-title {
            font-size: 1.75rem;
        }

        .featured-description {
            font-size: 0.95rem;
        }

        .featured-list li {
            font-size: 0.875rem;
        }

        .services-modern-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .service-card-modern {
            padding: 2rem 1.75rem;
            min-height: 280px;
        }

        .service-number {
            font-size: 2rem;
            top: 1rem;
            right: 1.5rem;
        }

        .service-title-modern {
            font-size: 1.2rem;
        }

        .service-description-modern {
            font-size: 0.875rem;
        }

        .step-header {
            padding: 1.75rem 1.5rem;
            gap: 1rem;
        }

        .step-left {
            gap: 1rem;
        }

        .step-number-badge {
            width: 50px;
            height: 50px;
            font-size: 1.25rem;
        }

        .step-title-inline h3 {
            font-size: 1.2rem;
        }

        .step-subtitle {
            font-size: 0.8rem;
        }

        .step-icon-container {
            width: 44px;
            height: 44px;
        }

        .step-icon-container svg {
            width: 22px;
            height: 22px;
        }

        .step-content {
            padding: 0 1.5rem 2rem 1.5rem;
        }

        .step-description {
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .step-features {
            gap: 0.75rem;
        }

        .step-features li {
            font-size: 0.825rem;
        }

        .cta-title {
            font-size: 2rem;
        }

        .cta-description {
            font-size: 1rem;
        }

        .cta-button {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            padding: 2rem 5%;
        }

        .hero-badge {
            font-size: 0.65rem;
            padding: 5px 12px;
        }

        .hero-title {
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }

        .hero-description {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }

        .btn-primary,
        .btn-secondary {
            padding: 10px 24px;
            font-size: 0.8rem;
        }

        .hero-visual {
            height: 250px;
        }

        .stats-section {
            padding: 2.5rem 5%;
        }

        .stat-number {
            font-size: 1.75rem;
        }

        .stat-label {
            font-size: 0.75rem;
        }

        .services-section,
        .process-section {
            padding: 3rem 5%;
        }

        .section-tag {
            font-size: 0.7rem;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .featured-card {
            padding: 1.75rem;
        }

        .featured-title {
            font-size: 1.5rem;
        }

        .featured-badge {
            font-size: 0.65rem;
            padding: 5px 14px;
        }

        .featured-btn {
            padding: 12px 28px;
            font-size: 0.825rem;
        }

        .service-card-modern {
            padding: 1.75rem 1.5rem;
        }

        .service-icon-modern {
            width: 55px;
            height: 55px;
        }

        .service-icon-modern svg {
            width: 26px;
            height: 26px;
        }

        .step-header {
            padding: 1.5rem 1.25rem;
            flex-direction: column;
            align-items: flex-start;
        }

        .step-left {
            width: 100%;
        }

        .step-number-badge {
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
        }

        .step-title-inline h3 {
            font-size: 1.1rem;
        }

        .step-icon-container {
            position: absolute;
            top: 1.5rem;
            right: 1.25rem;
        }

        .step-content {
            padding: 0 1.25rem 1.75rem 1.25rem;
        }

        .cta-section {
            padding: 3rem 5%;
        }

        .cta-title {
            font-size: 1.75rem;
        }

        .cta-button {
            padding: 12px 32px;
            font-size: 0.875rem;
        }
    }
</style>

<!-- GSAP Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-animated-bg">
        <div class="hero-blob hero-blob-1"></div>
        <div class="hero-blob hero-blob-2"></div>
        <div class="hero-grid-pattern"></div>
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </div>
    
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/>
                </svg>
                Award-Winning Design
            </div>
            
            <h1 class="hero-title">
                <span class="word">Design</span>
                <span class="word highlight">Exceptional</span>
                <span class="word accent">Experiences</span>
            </h1>
            
            <p class="hero-description">
                We craft digital products that combine stunning aesthetics with seamless functionality. 
                Transform your vision into user-centric experiences that drive real business results.
            </p>
            
            <div class="hero-buttons">
                <a href="#contact" class="btn-primary">Start Your Project</a>
                <a href="#services" class="btn-secondary">Explore Services</a>
            </div>
        </div>
        
        <div class="hero-visual">
            <div class="visual-illustration">
                <svg viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="illustration-circle" cx="250" cy="250" r="200" fill="#eff6ff"/>
                    <rect x="150" y="100" width="200" height="300" rx="20" fill="#ffffff" stroke="#2563eb" stroke-width="3"/>
                    <rect x="170" y="130" width="160" height="10" rx="5" fill="#2563eb"/>
                    <rect x="170" y="155" width="120" height="10" rx="5" fill="#93c5fd"/>
                    <rect x="170" y="180" width="140" height="10" rx="5" fill="#2563eb" opacity="0.6"/>
                    <circle class="illustration-circle" cx="100" cy="150" r="30" fill="#f97316"/>
                    <rect class="illustration-square" x="350" y="180" width="60" height="60" rx="10" fill="#2563eb"/>
                    <path class="illustration-line" d="M 80 350 Q 150 320 220 350" stroke="#2563eb" stroke-width="3" fill="none"/>
                    <path class="illustration-line" d="M 280 350 Q 350 320 420 350" stroke="#f97316" stroke-width="3" fill="none"/>
                    <circle cx="250" cy="280" r="40" fill="#eff6ff"/>
                    <path d="M 250 260 L 260 280 L 240 280 Z" fill="#2563eb"/>
                    <rect x="190" y="340" width="120" height="35" rx="17.5" fill="#f97316"/>
                    <text x="250" y="363" text-anchor="middle" fill="#ffffff" font-family="Inter" font-size="14" font-weight="700">Get Started</text>
                    <circle cx="370" cy="120" r="8" fill="#2563eb"/>
                    <circle cx="130" cy="320" r="8" fill="#f97316"/>
                    <circle cx="400" cy="350" r="6" fill="#60a5fa"/>
                    <circle cx="80" cy="250" r="5" fill="#f97316" opacity="0.7"/>
                    <circle cx="420" cy="280" r="5" fill="#2563eb" opacity="0.7"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Marquee Section -->
<section class="marquee-section">
    <div class="marquee-track">
        <span class="marquee-item">User Experience</span>
        <span class="marquee-item highlight">Interface Design</span>
        <span class="marquee-item">Brand Identity</span>
        <span class="marquee-item highlight">Digital Products</span>
        <span class="marquee-item">User Research</span>
        <span class="marquee-item highlight">Prototyping</span>
        <span class="marquee-item">User Experience</span>
        <span class="marquee-item highlight">Interface Design</span>
        <span class="marquee-item">Brand Identity</span>
        <span class="marquee-item highlight">Digital Products</span>
        <span class="marquee-item">User Research</span>
        <span class="marquee-item highlight">Prototyping</span>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="stats-bg-pattern"></div>
    <div class="stats-container">
        <div class="stat-card scroll-reveal">
            <div class="stat-number">500+</div>
            <div class="stat-label">Projects Delivered</div>
        </div>
        <div class="stat-card scroll-reveal">
            <div class="stat-number">98%</div>
            <div class="stat-label">Client Satisfaction</div>
        </div>
        <div class="stat-card scroll-reveal">
            <div class="stat-number">12+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-card scroll-reveal">
            <div class="stat-number">40+</div>
            <div class="stat-label">Team Members</div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="services-container">
        <div class="section-header scroll-reveal">
            <span class="section-tag">Our Services</span>
            <h2 class="section-title">Comprehensive Design Solutions</h2>
            <p class="section-description">
                From research to execution, we deliver end-to-end design services that bring your digital vision to life with precision and creativity.
            </p>
        </div>
        
        <!-- Featured Service -->
        <div class="services-featured scroll-reveal">
            <div class="featured-card">
                <div class="featured-content">
                    <div class="featured-badge">Most Popular</div>
                    <h3 class="featured-title">Complete UI/UX Design</h3>
                    <p class="featured-description">
                        End-to-end design services from research and strategy to high-fidelity mockups and prototypes. 
                        We create exceptional digital experiences that drive engagement and conversions.
                    </p>
                    <ul class="featured-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            User Research & Testing
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Wireframing & Prototyping
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Visual Design & Branding
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            Design System Creation
                        </li>
                    </ul>
                    <a href="#contact" class="featured-btn">
                        Get Started
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                
                <div class="featured-visual">
                    <div class="featured-visual-content">
                        <div class="featured-mockup">
                            <div class="mockup-header">
                                <div class="mockup-dot"></div>
                                <div class="mockup-dot"></div>
                                <div class="mockup-dot"></div>
                            </div>
                            <div class="mockup-content-line"></div>
                            <div class="mockup-content-line"></div>
                            <div class="mockup-content-line"></div>
                            <div class="mockup-content-line"></div>
                            <div class="mockup-icon-grid">
                                <div class="mockup-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                                    </svg>
                                </div>
                                <div class="mockup-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                </div>
                                <div class="mockup-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="featured-floating-element floating-1"></div>
                        <div class="featured-floating-element floating-2"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service Grid -->
        <div class="services-modern-grid">
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">01</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <path d="M3 9h18M9 21V9"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">User Research</h3>
                <p class="service-description-modern">
                    Deep insights through interviews, surveys, and behavioral analysis to understand your users.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">02</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">Wireframing</h3>
                <p class="service-description-modern">
                    Strategic wireframes that map user journeys and optimize information architecture.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">03</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">Prototyping</h3>
                <p class="service-description-modern">
                    Interactive prototypes that validate concepts and accelerate development cycles.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">04</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="4" y="4" width="16" height="16" rx="2"/>
                        <rect x="9" y="9" width="6" height="6"/>
                        <path d="M9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 14h3M1 9h3M1 14h3"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">Design Systems</h3>
                <p class="service-description-modern">
                    Scalable component libraries ensuring consistency across all platforms.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">05</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="5" y="2" width="14" height="20" rx="2"/>
                        <path d="M12 18h.01"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">Mobile Design</h3>
                <p class="service-description-modern">
                    Native mobile experiences optimized for iOS and Android platforms.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card-modern scroll-reveal">
                <div class="service-number">06</div>
                <div class="service-icon-modern">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="service-title-modern">UX Consulting</h3>
                <p class="service-description-modern">
                    Expert guidance on improving existing products and user experiences.
                </p>
                <div class="service-hover-overlay">
                    <a href="#" class="service-learn-more">
                        Learn More
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section - Overlapping Stack -->
<section class="process-section">
    <div class="process-container">
        <div class="section-header scroll-reveal">
            <span class="section-tag">Our Process</span>
            <h2 class="section-title">Proven Design Methodology</h2>
            <p class="section-description">
                A battle-tested approach that transforms ideas into exceptional digital experiences through collaboration and iteration.
            </p>
        </div>
        
        <div class="process-wrapper">
            <div class="process-step-card">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number-badge">01</div>
                        <div class="step-title-inline">
                            <h3>Discovery & Research</h3>
                            <p class="step-subtitle">Understanding Your Vision</p>
                        </div>
                    </div>
                    <div class="step-icon-container">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                    </div>
                </div>
                <div class="step-content">
                    <div>
                        <p class="step-description">
                            We dive deep into understanding your business goals, target audience, and market landscape through comprehensive research, stakeholder interviews, and competitive analysis.
                        </p>
                        <ul class="step-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Stakeholder Interviews
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Market Analysis
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                User Research
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Competitive Audit
                            </li>
                        </ul>
                    </div>
                    <div class="step-visual">
                        <div class="visual-icon-large">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="11" cy="11" r="8"/>
                                <path d="M21 21l-4.35-4.35"/>
                                <circle cx="11" cy="11" r="3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="process-step-card">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number-badge">02</div>
                        <div class="step-title-inline">
                            <h3>Strategy & Planning</h3>
                            <p class="step-subtitle">Creating the Roadmap</p>
                        </div>
                    </div>
                    <div class="step-icon-container">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                </div>
                <div class="step-content">
                    <div>
                        <p class="step-description">
                            We develop strategic roadmaps with clear objectives, define user personas, and establish information architecture that guides the entire design process.
                        </p>
                        <ul class="step-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                User Personas
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Journey Mapping
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Information Architecture
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Strategic Roadmap
                            </li>
                        </ul>
                    </div>
                    <div class="step-visual">
                        <div class="visual-icon-large">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="process-step-card">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number-badge">03</div>
                        <div class="step-title-inline">
                            <h3>Design & Prototype</h3>
                            <p class="step-subtitle">Bringing Ideas to Life</p>
                        </div>
                    </div>
                    <div class="step-icon-container">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M3 9h18M9 21V9"/>
                        </svg>
                    </div>
                </div>
                <div class="step-content">
                    <div>
                        <p class="step-description">
                            We craft beautiful visual designs and create interactive prototypes that bring your concepts to life, ensuring every pixel serves a purpose.
                        </p>
                        <ul class="step-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Wireframes
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Visual Design
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Interactive Prototypes
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Design Systems
                            </li>
                        </ul>
                    </div>
                    <div class="step-visual">
                        <div class="visual-icon-large">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <path d="M3 9h18M9 21V9"/>
                                <circle cx="7" cy="14" r="1"/>
                                <circle cx="12" cy="14" r="1"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="process-step-card">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number-badge">04</div>
                        <div class="step-title-inline">
                            <h3>Testing & Iteration</h3>
                            <p class="step-subtitle">Refining for Perfection</p>
                        </div>
                    </div>
                    <div class="step-icon-container">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                </div>
                <div class="step-content">
                    <div>
                        <p class="step-description">
                            We validate designs through comprehensive usability testing, gather valuable feedback, and iterate continuously to ensure optimal user experience.
                        </p>
                        <ul class="step-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Usability Testing
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                A/B Testing
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                User Feedback
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Design Refinement
                            </li>
                        </ul>
                    </div>
                    <div class="step-visual">
                        <div class="visual-icon-large">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="process-step-card">
                <div class="step-header">
                    <div class="step-left">
                        <div class="step-number-badge">05</div>
                        <div class="step-title-inline">
                            <h3>Launch & Support</h3>
                            <p class="step-subtitle">Delivering Success</p>
                        </div>
                    </div>
                    <div class="step-icon-container">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                        </svg>
                    </div>
                </div>
                <div class="step-content">
                    <div>
                        <p class="step-description">
                            We deploy your product with meticulous attention to detail and provide ongoing support to ensure continued success and user satisfaction.
                        </p>
                        <ul class="step-features">
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Product Launch
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Performance Monitoring
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Ongoing Support
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Continuous Improvement
                            </li>
                        </ul>
                    </div>
                    <div class="step-visual">
                        <div class="visual-icon-large">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="cta-circles">
        <div class="cta-circle"></div>
        <div class="cta-circle"></div>
    </div>
    
    <div class="cta-container">
        <h2 class="cta-title">Ready to Build Something Amazing?</h2>
        <p class="cta-description">
            Let's collaborate to create digital experiences that your users will love and your business will thrive on.
        </p>
        <a href="#" class="cta-button"><span>Get Started Today</span></a>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
        
        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // GSAP Stack Scroll Effect for Process Cards
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
            
            const cards = gsap.utils.toArray('.process-step-card');
            
            cards.forEach((card, index) => {
                // Skip the last card (no need to pin it)
                if (index === cards.length - 1) return;
                
                // Set initial state
                gsap.set(card, { scale: 1, opacity: 1 });
                
                ScrollTrigger.create({
                    trigger: card,
                    start: 'top 80px',
                    end: () => `+=${card.offsetHeight + 40}`,
                    pin: true,
                    pinSpacing: false,
                    onUpdate: (self) => {
                        // Only apply transformations when scrolling is active
                        if (self.progress > 0) {
                            const progress = self.progress;
                            const scale = 1 - (progress * 0.05); // Scale down to 0.95
                            const opacity = 1 - (progress * 0.3); // Fade to 0.7
                            
                            gsap.to(card, {
                                scale: scale,
                                opacity: opacity,
                                duration: 0.1,
                                ease: 'none'
                            });
                        }
                    },
                    onLeave: () => {
                        // Keep the card scaled and faded when scrolled past
                        gsap.to(card, {
                            scale: 0.95,
                            opacity: 0.7,
                            duration: 0.3
                        });
                    },
                    onEnterBack: () => {
                        // Reset when scrolling back up
                        gsap.to(card, {
                            scale: 1,
                            opacity: 1,
                            duration: 0.3
                        });
                    }
                });
            });
        }
    });
</script>
@endsection
