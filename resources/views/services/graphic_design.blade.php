@extends('layouts.base')

@section('title', 'Graphic Design Services - Creative Visual Solutions That Convert')
@section('description', 'Transform your brand with stunning graphic design. From logos to marketing materials, we create visual experiences that captivate and convert.')
@section('keywords', 'graphic design, logo design, brand identity, visual design, creative services, design agency')

@section('content')
    <style>
        /* Base Styles */
        .gd-wrapper {
            width: 100%;
            overflow-x: hidden;
        }
        
        :root {
            --primary: #0066ff;
            --secondary: #ff8c00;
            --dark: #1a1a2e;
            --light: #f8fafc;
            --accent: #00cc99;
            --text: #333333;
        }
        
        /* Hero Section - Creative Graphic Design Focus */
        .gd-hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        /* Animated Geometric Background */
        .gd-geometric-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.1;
        }
        
        .gd-geometric-shape {
            position: absolute;
            border: 2px solid rgba(255, 140, 0, 0.3);
            animation: floatGeometric 20s infinite ease-in-out;
        }
        
        .gd-geometric-1 {
            top: 10%;
            left: 5%;
            width: 120px;
            height: 120px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation-delay: 0s;
        }
        
        .gd-geometric-2 {
            top: 70%;
            right: 10%;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            animation-delay: 5s;
        }
        
        .gd-geometric-3 {
            bottom: 20%;
            left: 15%;
            width: 100px;
            height: 100px;
            border-radius: 20px;
            transform: rotate(45deg);
            animation-delay: 10s;
        }
        
        .gd-geometric-4 {
            top: 30%;
            right: 20%;
            width: 60px;
            height: 60px;
            border-radius: 40% 60% 60% 40% / 60% 30% 70% 40%;
            animation-delay: 15s;
        }
        
        @keyframes floatGeometric {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(40px, -30px) rotate(90deg); }
            50% { transform: translate(-20px, 40px) rotate(180deg); }
            75% { transform: translate(30px, 20px) rotate(270deg); }
        }
        
        /* Color Palette Swatches */
        .gd-color-swatches {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .gd-swatch {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            filter: blur(20px);
            opacity: 0.4;
            animation: pulseSwatch 8s infinite ease-in-out;
        }
        
        .gd-swatch-1 {
            background: #ff8c00;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .gd-swatch-2 {
            background: #0066ff;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }
        
        .gd-swatch-3 {
            background: #00cc99;
            bottom: 25%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .gd-swatch-4 {
            background: #ff4081;
            top: 40%;
            right: 25%;
            animation-delay: 6s;
        }
        
        @keyframes pulseSwatch {
            0%, 100% { transform: scale(1); opacity: 0.4; }
            50% { transform: scale(1.5); opacity: 0.2; }
        }
        
        /* Typography Elements */
        .gd-typo-elements {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .gd-typo {
            position: absolute;
            font-size: 4rem;
            font-weight: 900;
            color: rgba(255, 255, 255, 0.03);
            animation: floatTypo 25s infinite linear;
        }
        
        .gd-typo-1 {
            top: 20%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .gd-typo-2 {
            top: 65%;
            right: 8%;
            animation-delay: 8s;
        }
        
        .gd-typo-3 {
            bottom: 30%;
            left: 12%;
            animation-delay: 16s;
        }
        
        @keyframes floatTypo {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(100px, -100px) rotate(360deg); }
        }
        
        /* Hero Content */
        .gd-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            padding: 20px;
            max-width: 900px;
        }
        
        .gd-hero-badge {
            display: inline-block;
            padding: 12px 28px;
            background: rgba(255, 140, 0, 0.15);
            border: 2px solid rgba(255, 140, 0, 0.4);
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeInUp 1s forwards 0.2s;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .gd-hero-content h1 {
            font-size: 5rem;
            font-weight: 900;
            margin-bottom: 25px;
            letter-spacing: -3px;
            line-height: 1.05;
            opacity: 0;
            animation: fadeInUp 1s forwards 0.4s;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .gd-hero-content h1 span {
            background: linear-gradient(90deg, #ff8c00, #ff4081, #0066ff, #00cc99);
            background-size: 300% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 5s linear infinite;
        }
        
        @keyframes gradientShift {
            to { background-position: 300% center; }
        }
        
        .gd-hero-content p {
            font-size: 1.5rem;
            opacity: 0;
            animation: fadeInUp 1s forwards 0.6s;
            font-weight: 300;
            letter-spacing: 0.5px;
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }
        
        /* Creative CTA Button */
        .gd-hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 18px 42px;
            background: linear-gradient(135deg, #ff8c00, #ff7700);
            color: white;
            border: none;
            border-radius: 60px;
            font-size: 1.1rem;
            font-weight: 800;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            opacity: 0;
            animation: fadeInUp 1s forwards 0.8s;
            box-shadow: 0 15px 40px rgba(255, 140, 0, 0.4);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .gd-hero-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }
        
        .gd-hero-btn:hover::before {
            left: 100%;
        }
        
        .gd-hero-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(255, 140, 0, 0.6);
        }
        
        .gd-hero-btn svg {
            width: 20px;
            height: 20px;
            transition: transform 0.3s;
        }
        
        .gd-hero-btn:hover svg {
            transform: translateX(5px);
        }
        
        /* Design Tool Icons */
        .gd-tool-icons {
            position: absolute;
            bottom: 40px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 30px;
            opacity: 0;
            animation: fadeIn 1s forwards 1s;
        }
        
        .gd-tool-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }
        
        .gd-tool-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        
        .gd-tool-icon svg {
            width: 28px;
            height: 28px;
            opacity: 0.7;
        }
        
        /* Scroll Indicator */
        .gd-scroll-indicator {
            position: absolute;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0;
            animation: fadeIn 1s forwards 1.2s;
            cursor: pointer;
        }
        
        .gd-scroll-line {
            width: 2px;
            height: 50px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 2px;
            position: relative;
            overflow: hidden;
        }
        
        .gd-scroll-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 20px;
            background: white;
            border-radius: 2px;
            animation: scrollLine 2s infinite;
        }
        
        @keyframes scrollLine {
            0% { top: -20px; }
            50%, 100% { top: 50px; }
        }
        
        /* Main Content */
        .gd-main {
            position: relative;
            background: white;
        }
        
        .gd-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 120px 40px;
        }
        
        /* Section Header */
        .gd-section-header {
            text-align: center;
            margin-bottom: 90px;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .gd-section-header.visible {
            animation: fadeInUp 0.8s forwards;
        }
        
        .gd-section-subtitle {
            display: inline-block;
            color: #ff8c00;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 15px;
            padding: 8px 20px;
            background: rgba(255, 140, 0, 0.1);
            border-radius: 20px;
        }
        
        .gd-section-title {
            font-size: 3.2rem;
            font-weight: 900;
            color: #1a1a2e;
            letter-spacing: -2px;
            line-height: 1.2;
        }
        
        /* Services Grid - Creative Bento Layout */
        .gd-services-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 25px;
            margin-bottom: 120px;
        }
        
        .gd-service-item {
            background: white;
            border-radius: 24px;
            padding: 45px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 40px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 0, 0, 0.05);
            opacity: 0;
            transform: translateY(50px) scale(0.95);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .gd-service-item:nth-child(1) { grid-column: span 6; }
        .gd-service-item:nth-child(2) { grid-column: span 6; }
        .gd-service-item:nth-child(3) { grid-column: span 4; }
        .gd-service-item:nth-child(4) { grid-column: span 4; }
        .gd-service-item:nth-child(5) { grid-column: span 4; }
        .gd-service-item:nth-child(6) { grid-column: span 12; text-align: center; }
        
        .gd-service-item.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        
        .gd-service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0066ff, #ff8c00);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .gd-service-item:hover::before {
            transform: scaleX(1);
        }
        
        .gd-service-item:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 70px rgba(0, 102, 255, 0.15);
            border-color: rgba(0, 102, 255, 0.2);
        }
        
        .gd-service-item::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 102, 255, 0.03) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s;
        }
        
        .gd-service-item:hover::after {
            opacity: 1;
        }
        
        .gd-service-icon-wrap {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(0, 102, 255, 0.1), rgba(0, 102, 255, 0.05));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border: 2px solid rgba(0, 102, 255, 0.1);
        }
        
        .gd-service-item:hover .gd-service-icon-wrap {
            background: linear-gradient(135deg, #0066ff, #0052cc);
            transform: rotate(-10deg) scale(1.1);
            border-color: transparent;
        }
        
        .gd-service-icon-wrap svg {
            width: 38px;
            height: 38px;
            transition: all 0.5s;
        }
        
        .gd-service-item:hover .gd-service-icon-wrap svg {
            transform: scale(1.1);
        }
        
        .gd-service-item:hover .gd-service-icon-wrap svg path,
        .gd-service-item:hover .gd-service-icon-wrap svg circle,
        .gd-service-item:hover .gd-service-icon-wrap svg line,
        .gd-service-item:hover .gd-service-icon-wrap svg polyline,
        .gd-service-item:hover .gd-service-icon-wrap svg rect {
            stroke: white;
            fill: white;
        }
        
        .gd-service-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1a1a2e;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }
        
        .gd-service-desc {
            font-size: 0.98rem;
            color: #6b7280;
            line-height: 1.75;
        }
        
        /* Marquee Section */
        .gd-marquee-section {
            padding: 60px 0;
            background: linear-gradient(90deg, #f8fafc, #ffffff, #f8fafc);
            overflow: hidden;
            margin-bottom: 120px;
            opacity: 0;
        }
        
        .gd-marquee-section.visible {
            animation: fadeIn 1s forwards;
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }
        
        .gd-marquee {
            display: flex;
            animation: marquee 30s linear infinite;
        }
        
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .gd-marquee-item {
            flex-shrink: 0;
            padding: 0 60px;
            font-size: 2.5rem;
            font-weight: 900;
            color: #e5e7eb;
            white-space: nowrap;
            letter-spacing: -1px;
        }
        
        /* CTA Section with Split Design */
        .gd-cta-section {
            background: linear-gradient(135deg, #ff8c00, #ff7700, #ff8c00);
            background-size: 200% 200%;
            border-radius: 40px;
            padding: 0;
            position: relative;
            overflow: hidden;
            margin-bottom: 120px;
            opacity: 0;
            transform: scale(0.95);
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
            animation: gradientShift 8s ease infinite;
        }
        
        .gd-cta-section.visible {
            animation: scaleIn 0.8s forwards, gradientShift 8s ease infinite;
        }
        
        @keyframes scaleIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .gd-cta-content {
            position: relative;
            z-index: 2;
            color: white;
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .gd-cta-visual {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .gd-cta-shape {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.3; }
            50% { transform: scale(1.3); opacity: 0.1; }
        }
        
        .gd-cta-title {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }
        
        .gd-cta-text {
            font-size: 1.15rem;
            margin-bottom: 40px;
            opacity: 0.95;
            line-height: 1.6;
        }
        
        /* Updated Button Styles for Responsiveness */
        .gd-cta-btn, .gd-final-btn {
            display: inline-block;
            text-decoration: none;
            font-weight: 800;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            width: fit-content;
        }

        .gd-cta-btn {
            background: white;
            color: #ff8c00;
            padding: 18px 40px;
            border-radius: 60px;
            font-size: 1rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .gd-final-btn {
            background: #ff8c00;
            color: white;
            padding: 18px 45px;
            border-radius: 60px;
            font-size: 1.05rem;
            box-shadow: 0 15px 40px rgba(255, 140, 0, 0.4);
        }

        /* Button hover effects */
        .gd-cta-btn::before, .gd-final-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(0, 102, 255, 0.15);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .gd-cta-btn:hover::before, .gd-final-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .gd-cta-btn:hover, .gd-final-btn:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .gd-final-btn:hover {
            box-shadow: 0 20px 50px rgba(255, 140, 0, 0.6);
        }
        
        /* Features with Card Design */
        .gd-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-bottom: 120px;
        }
        
        .gd-feature-card {
            background: linear-gradient(135deg, #f8fafc, #ffffff);
            border-radius: 30px;
            padding: 50px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.05);
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.5s;
        }
        
        .gd-feature-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .gd-feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 102, 255, 0.05), transparent);
            opacity: 0;
            transition: opacity 0.5s;
        }
        
        .gd-feature-card:hover::before {
            opacity: 1;
        }
        
        .gd-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 102, 255, 0.12);
        }
        
        .gd-feature-number {
            font-size: 5rem;
            font-weight: 900;
            color: rgba(0, 102, 255, 0.08);
            line-height: 1;
            margin-bottom: 20px;
        }
        
        .gd-feature-icon {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
        }
        
        .gd-feature-card:hover .gd-feature-icon {
            transform: translateY(-5px) rotate(5deg);
            box-shadow: 0 15px 40px rgba(0, 102, 255, 0.2);
        }
        
        .gd-feature-icon svg {
            width: 34px;
            height: 34px;
        }
        
        .gd-feature-card h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #1a1a2e;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }
        
        .gd-feature-card p {
            font-size: 1.02rem;
            color: #6b7280;
            line-height: 1.8;
        }
        
        /* Final CTA */
        .gd-final-cta {
            background: linear-gradient(135deg, #0066ff, #0052cc);
            border-radius: 40px;
            padding: 100px 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .gd-final-cta.visible {
            animation: fadeInUp 0.8s forwards;
        }
        
        .gd-final-pattern {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.03;
            background-image: 
                repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,.5) 35px, rgba(255,255,255,.5) 70px);
        }
        
        .gd-final-cta-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .gd-final-cta h2 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            letter-spacing: -2px;
            line-height: 1.1;
        }
        
        .gd-final-cta p {
            font-size: 1.25rem;
            margin-bottom: 45px;
            opacity: 0.95;
        }
        
        /* Animations */
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
        
        /* Responsive */
        @media (max-width: 1200px) {
            .gd-service-item:nth-child(1),
            .gd-service-item:nth-child(2),
            .gd-service-item:nth-child(3),
            .gd-service-item:nth-child(4),
            .gd-service-item:nth-child(5),
            .gd-service-item:nth-child(6) {
                grid-column: span 6;
            }
            
            .gd-features {
                grid-template-columns: 1fr;
            }
            
            .gd-cta-section {
                grid-template-columns: 1fr;
            }
            
            .gd-cta-visual {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .gd-hero-content h1 { font-size: 3.2rem; }
            .gd-section-title { font-size: 2.2rem; }
            .gd-service-item:nth-child(1),
            .gd-service-item:nth-child(2),
            .gd-service-item:nth-child(3),
            .gd-service-item:nth-child(4),
            .gd-service-item:nth-child(5),
            .gd-service-item:nth-child(6) {
                grid-column: span 12;
            }
            .gd-cta-title { font-size: 2.2rem; }
            .gd-final-cta h2 { font-size: 2.5rem; }
            .gd-container { padding: 80px 20px; }
            
            /* Responsive adjustments for buttons */
            .gd-cta-btn, .gd-final-btn {
                padding: 16px 32px;
                font-size: 0.95rem;
                width: 100%; /* Make buttons full width on mobile */
                max-width: 280px; /* But limit maximum width */
                margin: 0 auto; /* Center the buttons */
                display: block; /* Ensure they take full width */
            }
            
            .gd-cta-content {
                text-align: center; /* Center content on mobile */
                padding: 60px 30px;
            }
            
            .gd-cta-btn {
                margin: 0 auto; /* Center the button */
            }
            
            .gd-feature-card {
                padding: 30px;
            }
            
            .gd-tool-icons {
                gap: 20px;
            }
            
            .gd-tool-icon {
                width: 40px;
                height: 40px;
            }
            
            .gd-tool-icon svg {
                width: 22px;
                height: 22px;
            }
            
            .gd-typo {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .gd-cta-btn, .gd-final-btn {
                padding: 14px 28px;
                font-size: 0.9rem;
                max-width: 250px;
            }
            
            .gd-hero-content h1 { font-size: 2.5rem; }
            .gd-section-title { font-size: 1.8rem; }
            .gd-cta-title { font-size: 1.8rem; }
            .gd-final-cta h2 { font-size: 2rem; }
            .gd-service-item { padding: 30px; }
            .gd-geometric-shape { width: 60px !important; height: 60px !important; }
        }
    </style>

    <div class="gd-wrapper">
        <!-- Hero Section -->
        <section class="gd-hero">
            <!-- Animated Geometric Background -->
            <div class="gd-geometric-bg">
                <div class="gd-geometric-shape gd-geometric-1"></div>
                <div class="gd-geometric-shape gd-geometric-2"></div>
                <div class="gd-geometric-shape gd-geometric-3"></div>
                <div class="gd-geometric-shape gd-geometric-4"></div>
            </div>
            
            <!-- Color Palette Swatches -->
            <div class="gd-color-swatches">
                <div class="gd-swatch gd-swatch-1"></div>
                <div class="gd-swatch gd-swatch-2"></div>
                <div class="gd-swatch gd-swatch-3"></div>
                <div class="gd-swatch gd-swatch-4"></div>
            </div>
            
            <!-- Typography Elements -->
            <div class="gd-typo-elements">
                <div class="gd-typo gd-typo-1">DESIGN</div>
                <div class="gd-typo gd-typo-2">CREATIVE</div>
                <div class="gd-typo gd-typo-3">VISUAL</div>
            </div>
            
            <!-- Hero Content -->
            <div class="gd-hero-content">
                <div class="gd-hero-badge">Visual Storytelling Through Design</div>
                <h1>Graphic Design <span>That Speaks Volumes</span></h1>
                <p>Transforming ideas into compelling visual narratives that captivate audiences and elevate brands beyond expectations.</p>
                <a href="#contact" class="gd-hero-btn">
                    Start Your Visual Journey
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            
            <!-- Design Tool Icons -->
            <div class="gd-tool-icons">
                <div class="gd-tool-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l10 6.5v7L12 22 2 15.5v-7L12 2z"/>
                        <path d="M12 22v-6.5"/>
                        <path d="M22 8.5l-10 7-10-7"/>
                        <path d="M2 15.5l10-7 10 7"/>
                        <path d="M12 2v6.5"/>
                    </svg>
                </div>
                <div class="gd-tool-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                        <circle cx="8.5" cy="8.5" r="1.5"/>
                        <polyline points="21 15 16 10 5 21"/>
                    </svg>
                </div>
                <div class="gd-tool-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <polyline points="7.5 4.21 12 6.81 16.5 4.21"/>
                        <polyline points="7.5 19.79 7.5 14.6 3 12"/>
                        <polyline points="21 12 16.5 14.6 16.5 19.79"/>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                        <line x1="12" y1="22.08" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="gd-tool-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <line x1="8" y1="12" x2="16" y2="12"/>
                        <line x1="12" y1="8" x2="12" y2="16"/>
                    </svg>
                </div>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="gd-scroll-indicator" id="scrollToContent">
                <div class="gd-scroll-line"></div>
                Scroll to Explore
            </div>
        </section>
        
        <!-- Main Content -->
        <main class="gd-main">
            <div class="gd-container">
                <!-- Services Section -->
                <div class="gd-section-header">
                    <div class="gd-section-subtitle">What We Offer</div>
                    <h2 class="gd-section-title">Our Graphic Design Offerings</h2>
                </div>
                
                <div class="gd-services-grid">
                    <!-- Logo Design -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M8 12l2 2 4-4"/>
                                <path d="M12 2v4M12 18v4M2 12h4M18 12h4"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Logo Design</h3>
                        <p class="gd-service-desc">Create a unique and memorable logo that represents your brand identity and resonates with your target audience.</p>
                    </div>
                    
                    <!-- Marketing Materials -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <line x1="7" y1="8" x2="17" y2="8"/>
                                <line x1="7" y1="12" x2="17" y2="12"/>
                                <line x1="7" y1="16" x2="13" y2="16"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Marketing Materials</h3>
                        <p class="gd-service-desc">Design eye-catching brochures, flyers, and promotional materials that drive engagement and conversions.</p>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="2"/>
                                <circle cx="8" cy="8" r="2"/>
                                <path d="M14 8h6M14 12h6M14 16h6M8 12h2M8 16h2"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Social Media Graphics</h3>
                        <p class="gd-service-desc">Create engaging visuals for social platforms to boost engagement and build brand presence.</p>
                    </div>
                    
                    <!-- Brand Identity -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Brand Identity</h3>
                        <p class="gd-service-desc">Develop comprehensive brand guidelines including color palettes, typography, and visual language.</p>
                    </div>
                    
                    <!-- Packaging Design -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                                <line x1="12" y1="22.08" x2="12" y2="12"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Packaging Design</h3>
                        <p class="gd-service-desc">Design attractive product packaging that stands out on shelves and communicates your brand values effectively.</p>
                    </div>
                    
                    <!-- Business Stationery -->
                    <div class="gd-service-item">
                        <div class="gd-service-icon-wrap">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                <polyline points="14 2 14 8 20 8"/>
                                <line x1="16" y1="13" x2="8" y2="13"/>
                                <line x1="16" y1="17" x2="8" y2="17"/>
                                <polyline points="10 9 9 9 8 9"/>
                            </svg>
                        </div>
                        <h3 class="gd-service-title">Business Stationery</h3>
                        <p class="gd-service-desc">Create professional business cards, letterheads, and corporate materials that make lasting impressions.</p>
                    </div>
                </div>
                
                <!-- Marquee Section -->
                <div class="gd-marquee-section">
                    <div class="gd-marquee">
                        <div class="gd-marquee-item">CREATIVE • BOLD • INNOVATIVE •</div>
                        <div class="gd-marquee-item">CREATIVE • BOLD • INNOVATIVE •</div>
                        <div class="gd-marquee-item">CREATIVE • BOLD • INNOVATIVE •</div>
                    </div>
                </div>
                
                <!-- CTA Section -->
                <div class="gd-cta-section">
                    <div class="gd-cta-content">
                        <h2 class="gd-cta-title">Let's Create Something Amazing</h2>
                        <p class="gd-cta-text">Ready to transform your brand with exceptional design? Our team is here to bring your vision to life.</p>
                        <a href="#contact" class="gd-cta-btn">Get Started Today</a>
                    </div>
                    <div class="gd-cta-visual">
                        <div class="gd-cta-shape"></div>
                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none">
                            <circle cx="100" cy="100" r="80" stroke="rgba(255,255,255,0.3)" stroke-width="2" stroke-dasharray="10 5"/>
                            <circle cx="100" cy="100" r="60" stroke="rgba(255,255,255,0.3)" stroke-width="2"/>
                            <circle cx="100" cy="100" r="40" stroke="rgba(255,255,255,0.3)" stroke-width="2" stroke-dasharray="5 5"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Features Section -->
                <div class="gd-section-header">
                    <div class="gd-section-subtitle">Why Choose Us</div>
                    <h2 class="gd-section-title">Why Choose Our Graphic Design Services?</h2>
                </div>
                
                <div class="gd-features">
                    <!-- Feature 1 -->
                    <div class="gd-feature-card">
                        <div class="gd-feature-number">01</div>
                        <div class="gd-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        </div>
                        <h3>Creative Excellence</h3>
                        <p>Our team of skilled designers brings creativity and innovation to every project, ensuring standout results that captivate your audience and drive engagement.</p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="gd-feature-card">
                        <div class="gd-feature-number">02</div>
                        <div class="gd-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <h3>Brand Consistency</h3>
                        <p>We ensure your visual elements align perfectly with your brand identity across all touchpoints, creating a cohesive and memorable brand experience.</p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="gd-feature-card">
                        <div class="gd-feature-number">03</div>
                        <div class="gd-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <h3>Timely Delivery</h3>
                        <p>We understand the importance of deadlines and always deliver on time without compromising on quality, creativity, or attention to detail.</p>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="gd-feature-card">
                        <div class="gd-feature-number">04</div>
                        <div class="gd-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#0066ff" stroke-width="2">
                                <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
                            </svg>
                        </div>
                        <h3>Unlimited Revisions</h3>
                        <p>We work closely with you through revisions until you're completely satisfied with the final design, ensuring perfection in every detail.</p>
                    </div>
                </div>
                
                <!-- Final CTA -->
                <div class="gd-final-cta">
                    <div class="gd-final-pattern"></div>
                    <div class="gd-final-cta-content">
                        <h2>Elevate Your Brand With Creative Designs</h2>
                        <p>Boost your brand with designs that leave a lasting impression and drive real results for your business.</p>
                        <a href="#contact" class="gd-final-btn">Start Your Project</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -80px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Initialize animations on load
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll(
                '.gd-section-header, .gd-service-item, .gd-cta-section, .gd-feature-card, .gd-final-cta, .gd-marquee-section'
            );
            
            animatedElements.forEach((el, index) => {
                el.style.transitionDelay = `${index * 0.08}s`;
                observer.observe(el);
            });
            
            // Smooth scroll for scroll indicator
            const scrollIndicator = document.querySelector('#scrollToContent');
            if (scrollIndicator) {
                scrollIndicator.addEventListener('click', () => {
                    document.querySelector('.gd-main').scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            }
            
            // Parallax effect on hero
            let ticking = false;
            window.addEventListener('scroll', () => {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        const scrolled = window.pageYOffset;
                        const hero = document.querySelector('.gd-hero-content');
                        const floatElements = document.querySelectorAll('.gd-geometric-shape');
                        const heroSection = document.querySelector('.gd-hero');
                        
                        if (hero && scrolled < window.innerHeight) {
                            hero.style.transform = `translateY(${scrolled * 0.4}px)`;
                            hero.style.opacity = 1 - (scrolled / 600);
                        }
                        
                        floatElements.forEach((element, index) => {
                            const speed = 0.15 + (index * 0.08);
                            element.style.transform = `translate(${scrolled * speed}px, ${scrolled * speed * 0.5}px) rotate(${scrolled * 0.2}deg)`;
                        });
                        
                        if (heroSection) {
                            const colorSwatches = heroSection.querySelectorAll('.gd-swatch');
                            colorSwatches.forEach((swatch, index) => {
                                const speed = 0.05 + (index * 0.03);
                                swatch.style.transform = `translate(${scrolled * speed}px, ${scrolled * speed * 0.7}px)`;
                            });
                        }
                        
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            
            // Add hover effect to service cards
            const serviceItems = document.querySelectorAll('.gd-service-item');
            serviceItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
            
            // Magnetic effect for buttons
            const buttons = document.querySelectorAll('.gd-cta-btn, .gd-final-btn, .gd-hero-btn');
            buttons.forEach(button => {
                button.addEventListener('mousemove', (e) => {
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    button.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) translateY(-6px)`;
                });
                
                button.addEventListener('mouseleave', () => {
                    button.style.transform = '';
                });
            });
        });
    </script>
@endsection