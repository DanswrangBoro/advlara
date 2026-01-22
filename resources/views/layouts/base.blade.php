<!-- resources/views/layouts/base.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'AdventureCode - Empowering brands with innovative technology solutions')">
    <meta name="keywords" content="@yield('keywords', 'web development, app development, digital marketing, SEO, travel solutions')">
    
    <title>@yield('title', 'AdventureCode - Empowering Brands with Technology')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Styles -->
    @stack('styles')
    
    <style>
        /* ===== FLOATING ACTION BUTTONS ===== */
        .floating-btn {
            position: fixed;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
        }

        .floating-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            bottom: 24px;
            background: linear-gradient(135deg, #25D366, #128C7E);
            transition: all 0.3s ease;
        }

        .whatsapp-btn.move-up {
            bottom: 96px;
        }

        .whatsapp-btn:hover {
            background: linear-gradient(135deg, #128C7E, #075E54);
        }

        .whatsapp-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: #25D366;
            animation: pulse-ring 2s ease-out infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(1.2);
                opacity: 0;
            }
        }

        /* Scroll to Top Button */
        .scroll-top-btn {
            bottom: 24px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .scroll-top-btn.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top-btn:hover {
            background: linear-gradient(135deg, #2563eb, #1e40af);
        }

        .progress-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-90deg);
        }

        .progress-ring-circle {
            transition: stroke-dashoffset 0.1s;
            transform-origin: 50% 50%;
        }
    </style>
</head>
<body class="bg-white text-gray-900" x-data="{ open: false }">
    
    <!-- Navigation -->
    @include('layouts.navbar')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    @include('index.subscribe')
    <!-- Footer -->
    @include('layouts.footer')

    <!-- WhatsApp Button (Right Bottom) -->
    <a href="https://wa.me/1234567890?text=Hello%20AdventureCode!" 
       target="_blank" 
       id="whatsappBtn"
       class="floating-btn whatsapp-btn"
       title="Chat on WhatsApp">
        <svg class="w-7 h-7 text-white relative z-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    <!-- Scroll to Top Button (Right Bottom) -->
    <button id="scrollToTop" 
            class="floating-btn scroll-top-btn" 
            title="Back to top"
            onclick="scrollToTop()">
        <svg class="progress-ring" width="56" height="56">
            <circle
                class="progress-ring-circle"
                stroke="white"
                stroke-width="3"
                fill="transparent"
                r="24"
                cx="28"
                cy="28"
                style="stroke-dasharray: 150.8; stroke-dashoffset: 150.8;"
                id="progressCircle"
            />
        </svg>
        <svg class="w-6 h-6 text-white relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <script>
        // ===== SCROLL TO TOP FUNCTIONALITY =====
        const scrollToTopBtn = document.getElementById('scrollToTop');
        const whatsappBtn = document.getElementById('whatsappBtn');
        const progressCircle = document.getElementById('progressCircle');
        const circumference = 2 * Math.PI * 24;

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = scrollTop / docHeight;
            const offset = circumference - (scrollPercent * circumference);

            progressCircle.style.strokeDashoffset = offset;

            if (scrollTop > 300) {
                scrollToTopBtn.classList.add('show');
                whatsappBtn.classList.add('move-up');
            } else {
                scrollToTopBtn.classList.remove('show');
                whatsappBtn.classList.remove('move-up');
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    
    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
