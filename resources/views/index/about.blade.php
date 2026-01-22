
    <style>
        /* ===== ENHANCED CASE STUDY ANIMATIONS ===== */
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

        @keyframes glitchPulse {
            0%, 100% { 
                opacity: 1;
                transform: translateX(0);
            }
            25% { 
                opacity: 0.8;
                transform: translateX(-2px);
            }
            50% { 
                opacity: 1;
                transform: translateX(2px);
            }
            75% { 
                opacity: 0.9;
                transform: translateX(-1px);
            }
        }

        @keyframes barGrow {
            from {
                width: 0;
                opacity: 0;
            }
            to {
                width: 100%;
                opacity: 1;
            }
        }

        @keyframes barGrowUp {
            from {
                height: 0;
                opacity: 0;
            }
            to {
                height: var(--bar-height, 100%);
                opacity: 1;
            }
        }

        @keyframes drawLine {
            from {
                stroke-dashoffset: 100;
            }
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes pulsePoint {
            0%, 100% { r: 1.5; opacity: 0.6; }
            50% { r: 2.5; opacity: 1; }
        }

        @keyframes scaleInBold {
            from {
                opacity: 0;
                transform: scale(0.7) rotateZ(-5deg);
            }
            to {
                opacity: 1;
                transform: scale(1) rotateZ(0);
            }
        }

        @keyframes borderGradient {
            0% { border-color: rgba(2, 132, 199, 0.3); }
            50% { border-color: rgba(2, 132, 199, 0.8); }
            100% { border-color: rgba(2, 132, 199, 0.3); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        /* Case Study Section */
        .case-study-section {
            position: relative;
            overflow: hidden;
            background: linear-gradient(to bottom, #ffffff 0%, #f8fafc 50%, #ffffff 100%);
        }

        /* Accent Elements */
        .accent-top-left {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.08), transparent);
            border-radius: 50%;
            z-index: 0;
        }

        .accent-bottom-right {
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.08), transparent);
            border-radius: 50%;
            z-index: 0;
        }

        /* Subtle Background Pattern */
        .case-study-bg-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.02;
            background-image: 
                repeating-linear-gradient(0deg, transparent, transparent 2px, #1e293b 2px, #1e293b 4px),
                repeating-linear-gradient(90deg, transparent, transparent 2px, #1e293b 2px, #1e293b 4px);
            background-size: 50px 50px;
            z-index: 1;
        }

        .case-study-left {
            opacity: 0;
        }

        .case-study-left.in-view {
            animation: slideInLeftHard 1s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .case-study-right {
            opacity: 0;
        }

        .case-study-right.in-view {
            animation: slideInRightHard 1s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.2s;
        }

        /* Problem/Solution Cards */
        .problem-card, .solution-card {
            opacity: 0;
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 2px solid;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(10px);
        }

        .problem-card {
            border-color: #e5e7eb;
        }

        .problem-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #dc2626, transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        .problem-card:hover {
            border-color: #dc2626;
            background: linear-gradient(135deg, #fef2f2 0%, #ffffff 100%);
            box-shadow: 0 16px 40px rgba(220, 38, 38, 0.12);
            transform: translateY(-6px);
        }

        .solution-card {
            border-color: #e5e7eb;
        }

        .solution-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #0891b2, transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        .solution-card:hover {
            border-color: #0891b2;
            background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 100%);
            box-shadow: 0 16px 40px rgba(8, 145, 178, 0.12);
            transform: translateY(-6px);
        }

        .case-study-left.in-view .problem-card:nth-child(1) {
            animation-delay: 0.3s;
        }

        .case-study-left.in-view .solution-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        /* Metrics */
        .metric-badge {
            opacity: 0;
            animation: scaleInBold 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            border: 2px solid;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            perspective: 1000px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .metric-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(2, 132, 199, 0.5), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .metric-badge:hover {
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
            transform: translateY(-6px);
        }

        .metric-badge:hover::before {
            opacity: 1;
            animation: shimmer 2s ease-in-out infinite;
        }

        .metric-badge.metric-blue {
            border-color: #dbeafe;
        }

        .metric-badge.metric-blue:hover {
            border-color: #0284c7;
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
        }

        .metric-badge.metric-cyan {
            border-color: #cffafe;
        }

        .metric-badge.metric-cyan:hover {
            border-color: #0891b2;
            background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 100%);
        }

        .metric-badge.metric-slate {
            border-color: #e2e8f0;
        }

        .metric-badge.metric-slate:hover {
            border-color: #334155;
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
        }

        .case-study-right.in-view .metric-badge:nth-child(1) {
            animation-delay: 0.5s;
        }

        .case-study-right.in-view .metric-badge:nth-child(2) {
            animation-delay: 0.6s;
        }

        .case-study-right.in-view .metric-badge:nth-child(3) {
            animation-delay: 0.7s;
        }

        /* Flip Card */
        .flip-card {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
            cursor: pointer;
        }

        .flip-front, .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .flip-back {
            transform: rotateY(180deg);
        }

        .flip-card.flipped {
            transform: rotateY(180deg);
        }

        /* Main Result */
        .main-result {
            opacity: 0;
            animation: scaleInBold 1s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            background: linear-gradient(135deg, #1e3a8a 0%, #0c4a6e 50%, #164e63 100%);
            border: 3px solid;
            border-color: #e0e7ff;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 20px 50px rgba(30, 58, 138, 0.25);
        }

        .main-result::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        .main-result::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 50%, rgba(6, 182, 212, 0.1), transparent 50%);
        }

        .main-result:hover {
            border-color: #bfdbfe;
            box-shadow: 0 30px 60px rgba(30, 58, 138, 0.35);
            transform: translateY(-8px);
        }

        /* Decorative Shapes */
        .result-decor {
            position: absolute;
            opacity: 0.1;
            pointer-events: none;
        }

        .decor-circle {
            width: 100px;
            height: 100px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        /* Growth Bar */
        .growth-bar {
            animation: barGrow 2s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            background: linear-gradient(90deg, #06b6d4, #0891b2);
            box-shadow: 0 0 30px rgba(6, 182, 212, 0.5), inset 0 0 15px rgba(255, 255, 255, 0.3);
            border: 2px solid rgba(6, 182, 212, 0.8);
            position: relative;
            overflow: hidden;
        }

        .growth-bar::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: slideInLeftHard 2s ease-in-out infinite;
        }

        /* Counter */
        .counter {
            font-variant-numeric: tabular-nums;
            font-weight: 900;
        }

        /* Text Styles */
        .text-gradient-bold {
            background: linear-gradient(135deg, #0284c7, #0c4a6e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
        }

        /* Outcome Items */
        .outcome-item {
            opacity: 0;
            animation: slideUpHard 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            border-left: 4px solid;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
        }

        .outcome-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, currentColor, transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .outcome-item.outcome-blue { 
            border-left-color: #0284c7;
        }

        .outcome-item.outcome-blue:hover {
            background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 100%);
            box-shadow: 0 12px 30px rgba(2, 132, 199, 0.15);
            transform: translateX(6px);
        }

        .outcome-item.outcome-cyan { 
            border-left-color: #0891b2;
        }

        .outcome-item.outcome-cyan:hover {
            background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 100%);
            box-shadow: 0 12px 30px rgba(8, 145, 178, 0.15);
            transform: translateX(6px);
        }

        .outcome-item.outcome-slate { 
            border-left-color: #475569;
        }

        .outcome-item.outcome-slate:hover {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            box-shadow: 0 12px 30px rgba(71, 85, 105, 0.15);
            transform: translateX(6px);
        }

        .case-study-right.in-view .outcome-item:nth-child(1) {
            animation-delay: 0.8s;
        }

        .case-study-right.in-view .outcome-item:nth-child(2) {
            animation-delay: 0.9s;
        }

        .case-study-right.in-view .outcome-item:nth-child(3) {
            animation-delay: 1s;
        }

        /* Stat Icon */
        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            color: white;
            font-size: 20px;
            flex-shrink-0;
        }
    </style>

    <!-- Case Study Section -->
    <section class="relative py-32 case-study-section" id="case-study-section">
        <!-- Accent Elements -->
        <div class="accent-top-left"></div>
        <div class="accent-bottom-right"></div>
        <div class="case-study-bg-pattern"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-24">
                <div class="inline-flex items-center space-x-2 bg-blue-50 border border-blue-200 px-4 py-2 rounded-xl mb-4">
                    <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                    <span class="text-xs font-black text-blue-600 uppercase tracking-wider">Case Study</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 mb-6 leading-tight">
                    Solving <span class="text-gradient-bold">Real Problems</span>
                    <br/>With Real Solutions
                </h2>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    We tackle complex technical challenges head-on. The results speak for themselves: our clients consistently achieve 60% revenue growth through optimized infrastructure and enhanced user experience.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- LEFT: Problem & Solution -->
                <div class="case-study-left space-y-8">
                    <!-- The Challenge -->
                    <div class="problem-card rounded-2xl p-8">
                        <div class="relative z-10">
                            <div class="flex items-start space-x-4 mb-5">
                                <div class="stat-icon bg-gradient-to-br from-red-500 to-red-600 flex-shrink-0 p-2 rounded-full text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a1 1 0 00.86 1.5h18.64a1 1 0 00.86-1.5L13.71 3.86a1 1 0 00-1.72 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-black text-gray-900 mb-2">The Challenge</h3>
                                    <p class="text-sm text-gray-600">Technical bottlenecks crushing performance</p>
                                </div>
                            </div>

                            <ul class="space-y-3 pl-0">
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-red-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Slow Systems</strong> - Legacy infrastructure causing 5+ second delays</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-red-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Poor Scalability</strong> - Unable to handle 3x traffic growth</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-red-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">User Frustration</strong> - 40% churn rate in 6 months</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-red-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Revenue Loss</strong> - Monthly recurring revenue declining</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Our Solution -->
                    <div class="solution-card rounded-2xl p-8">
                        <div class="relative z-10">
                            <div class="flex items-start space-x-4 mb-5">
                                <div class="stat-icon bg-gradient-to-br from-cyan-500 to-cyan-600 flex-shrink-0">
                                    ✓
                                </div>
                                <div>
                                    <h3 class="text-2xl font-black text-gray-900 mb-2">Our Solution</h3>
                                    <p class="text-sm text-gray-600">Modern, scalable architecture for explosive growth</p>
                                </div>
                            </div>

                            <ul class="space-y-3 pl-0">
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-cyan-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Cloud Migration</strong> - Modern microservices architecture</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-cyan-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Auto-Scaling</strong> - Kubernetes orchestration for infinite scale</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-cyan-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Edge Optimization</strong> - CDN + caching = 0.8s response time</span>
                                </li>
                                <li class="flex items-start space-x-3 text-sm">
                                    <span class="w-2 h-2 bg-cyan-600 rounded-full mt-1.5 flex-shrink-0"></span>
                                    <span class="text-gray-700"><strong class="text-gray-900">Real-time Monitoring</strong> - 24/7 alerting + instant rollback</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Results & Impact -->
                <div class="case-study-right space-y-8">
                    <!-- Main Result Card -->
                    <div class="main-result rounded-3xl p-12 text-white relative">
                        <div class="result-decor decor-circle" style="top: 20px; right: 20px;"></div>
                        <div class="result-decor decor-circle" style="bottom: 30px; left: 30px; width: 80px; height: 80px;"></div>
                        
                        <div class="relative z-20">
                            <p class="text-sm font-black uppercase tracking-widest text-blue-200 mb-4">Average Client Achievement</p>
                            <div class="mb-8">
                                <div class="text-7xl lg:text-8xl font-black mb-2 tracking-tight">
                                    <span class="counter" data-target="60">0</span><span class="text-5xl lg:text-6xl">%</span>
                                </div>
                                <h3 class="text-2xl font-black leading-tight">Revenue Growth</h3>
                                <p class="text-sm text-blue-200 mt-2">In first 12 months</p>
                            </div>

                            <!-- Growth Bar -->
                            <div class="h-4 growth-bar rounded-full"></div>
                        </div>
                    </div>

                    <!-- Metrics -->
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Metric 1: Cost Reduction -->
                        <div class="metric-badge metric-blue rounded-2xl h-48">
                            <div class="flip-card w-full h-full">
                                <!-- Front -->
                                <div class="flip-front flex-col text-center rounded-2xl bg-gradient-to-br from-white to-blue-50">
                                    <div class="text-4xl font-black text-blue-600 mb-2">
                                        <span class="counter" data-target="45">0</span>%
                                    </div>
                                    <p class="text-xs font-bold text-gray-700 mb-1">Cost Reduction</p>
                                    <p class="text-xs text-gray-500">Infrastructure savings</p>
                                </div>

                                <!-- Back -->
                                <div class="flip-back flex-col text-center rounded-2xl bg-gradient-to-br from-blue-50 to-white p-4">
                                    <p class="text-xs font-bold text-blue-700 mb-4">Infrastructure Optimization</p>
                                    <div class="flex items-end justify-center space-x-1 flex-1 w-full">
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded" style="height: 3rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded" style="height: 2.5rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.1s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded" style="height: 2rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.2s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-blue-500 to-blue-400 rounded" style="height: 1.5rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.3s;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Metric 2: Performance Increase -->
                        <div class="metric-badge metric-cyan rounded-2xl h-48">
                            <div class="flip-card w-full h-full">
                                <!-- Front -->
                                <div class="flip-front flex-col text-center rounded-2xl bg-gradient-to-br from-white to-cyan-50">
                                    <div class="text-4xl font-black text-cyan-600 mb-2">
                                        <span class="counter" data-target="85">0</span>%
                                    </div>
                                    <p class="text-xs font-bold text-gray-700 mb-1">Faster Speed</p>
                                    <p class="text-xs text-gray-500">Response time improved</p>
                                </div>

                                <!-- Back -->
                                <div class="flip-back flex-col text-center rounded-2xl bg-gradient-to-br from-cyan-50 to-white p-4">
                                    <p class="text-xs font-bold text-cyan-700 mb-4">Performance Metrics</p>
                                    <div class="flex items-end justify-center space-x-1 flex-1 w-full">
                                        <div class="flex-1 bg-gradient-to-t from-cyan-500 to-cyan-400 rounded" style="height: 1rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-cyan-500 to-cyan-400 rounded" style="height: 1.25rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.1s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-cyan-500 to-cyan-400 rounded" style="height: 1.75rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.2s;"></div>
                                        <div class="flex-1 bg-gradient-to-t from-cyan-500 to-cyan-400 rounded" style="height: 2.5rem; animation: barGrowUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards; animation-delay: 0.3s;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Metric 3: Uptime -->
                        <div class="metric-badge metric-slate rounded-2xl h-48">
                            <div class="flip-card w-full h-full">
                                <!-- Front -->
                                <div class="flip-front flex-col text-center rounded-2xl bg-gradient-to-br from-white to-slate-50">
                                    <div class="text-4xl font-black text-slate-700 mb-2">
                                        <span class="counter" data-target="99">0</span>%
                                    </div>
                                    <p class="text-xs font-bold text-gray-700 mb-1">Uptime SLA</p>
                                    <p class="text-xs text-gray-500">From 96% to 99.9%</p>
                                </div>

                                <!-- Back -->
                                <div class="flip-back flex-col text-center rounded-2xl bg-gradient-to-br from-slate-50 to-white p-4">
                                    <p class="text-xs font-bold text-slate-700 mb-3">Reliability Growth</p>
                                    <svg class="w-full flex-1" viewBox="0 0 100 40" preserveAspectRatio="xMidYMid meet" style="opacity: 0.9;">
                                        <polyline
                                            points="0,35 15,25 30,20 45,15 60,18 75,10 90,5 100,8"
                                            fill="none"
                                            stroke="#475569"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-dasharray="100"
                                            stroke-dashoffset="100"
                                            style="animation: drawLine 2s ease-in-out forwards; animation-delay: 0.3s;"
                                        />
                                        ircle cx="0" cy="35" r="1.5" fill="#475569" opacityty="0.6" />
                                        ircle cx="100" cy="8" r="1.5" fill="#475569" style="animation: pulsePoint 2s ease-in-out infinitete;" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Outcomes -->
                    <div class="space-y-3">
                        <div class="outcome-item outcome-blue rounded-xl p-5">
                            <div class="flex items-start space-x-3">
                                <span class="stat-icon bg-blue-600 w-8 h-8 text-sm mt-1">✓</span>
                                <div>
                                    <p class="font-black text-blue-700 text-sm mb-1">Increased User Engagement</p>
                                    <p class="text-xs text-gray-600">Better performance drives higher retention and satisfaction</p>
                                </div>
                            </div>
                        </div>

                        <div class="outcome-item outcome-cyan rounded-xl p-5">
                            <div class="flex items-start space-x-3">
                                <span class="stat-icon bg-cyan-600 w-8 h-8 text-sm mt-1">✓</span>
                                <div>
                                    <p class="font-black text-cyan-700 text-sm mb-1">Massive Scalability</p>
                                    <p class="text-xs text-gray-600">Handle exponential growth without architecture changes</p>
                                </div>
                            </div>
                        </div>

                        <div class="outcome-item outcome-slate rounded-xl p-5">
                            <div class="flex items-start space-x-3">
                                <span class="stat-icon bg-slate-600 w-8 h-8 text-sm mt-1">✓</span>
                                <div>
                                    <p class="font-black text-slate-700 text-sm mb-1">Competitive Edge</p>
                                    <p class="text-xs text-gray-600">Stay ahead with cutting-edge technology and speed</p>
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
        document.addEventListener('DOMContentLoaded', function() {
            const caseStudySection = document.getElementById('case-study-section');
            const caseStudyLeft = caseStudySection.querySelector('.case-study-left');
            const caseStudyRight = caseStudySection.querySelector('.case-study-right');
            const counters = caseStudySection.querySelectorAll('.counter');
            const flipCards = caseStudySection.querySelectorAll('.flip-card');
            let animationTriggered = false;

            // Flip Card Functionality
            flipCards.forEach(card => {
                card.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    this.classList.toggle('flipped');
                });

                const parentBadge = card.closest('.metric-badge');
                
                parentBadge.addEventListener('mouseenter', function() {
                    card.classList.add('flipped');
                });

                parentBadge.addEventListener('mouseleave', function() {
                    card.classList.remove('flipped');
                });
            });

            // Intersection Observer
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (caseStudyLeft) caseStudyLeft.classList.add('in-view');
                        if (caseStudyRight) caseStudyRight.classList.add('in-view');

                        if (!animationTriggered) {
                            triggerCounters();
                            animationTriggered = true;
                        }
                    } else {
                        if (caseStudyLeft) caseStudyLeft.classList.remove('in-view');
                        if (caseStudyRight) caseStudyRight.classList.remove('in-view');
                        
                        counters.forEach(counter => {
                            counter.textContent = '0';
                        });
                        
                        animationTriggered = false;
                    }
                });
            }, observerOptions);

            observer.observe(caseStudySection);

            // Counter Animation
            function triggerCounters() {
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 1500;
                    const increment = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                });
            }
        });
    </script>

