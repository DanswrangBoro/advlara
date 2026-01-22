@extends('layouts.base')

@section('title', 'The Future of Web Development: Trends & Innovations to Watch in 2025')
@section('description', 'In-depth insights into the latest trends in web development, AI, and progressive technologies.')
@section('keywords', 'blog post, web development, AI, technology trends')

@section('content')
    <div class="bg-[#fdfbf7] text-gray-900 font-sans antialiased pt-16">
        
        {{-- HEADER SECTION --}}
        <header class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl pt-16 pb-10 text-center">
            <div class="mb-6 flex justify-center items-center space-x-3">
                <span class="h-px w-8 bg-gray-400"></span>
                <span class="uppercase tracking-[0.2em] text-xs font-bold text-gray-500">Technology</span>
                <span class="h-px w-8 bg-gray-400"></span>
            </div>
            
            <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight mb-6 tracking-tight">
                The Future of <span class="italic text-gray-600">Web Development</span>
            </h1>
            
            <p class="font-serif text-xl md:text-2xl text-gray-600 italic max-w-3xl mx-auto mb-8 leading-relaxed">
                "Discover the emerging technologies and best practices setting the stage for the next chapter of digital innovation."
            </p>

            <div class="flex items-center justify-center space-x-6 text-sm font-medium text-gray-500 uppercase tracking-wider">
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Alex+Morgan&background=000&color=fff" alt="Alex Morgan" class="w-8 h-8 rounded-full mr-3 border border-gray-200">
                    <span>By Alex Morgan</span>
                </div>
                <span>&bull;</span>
                <span>Nov 12, 2025</span>
                <span>&bull;</span>
                <span>8 Min Read</span>
            </div>
        </header>

        {{-- FEATURED IMAGE --}}
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1400px] mb-16">
            <div class="relative aspect-w-21 aspect-h-9 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1600&h=900&fit=crop" alt="Featured Image" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 ease-in-out">
                <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-[#fdfbf7] to-transparent"></div>
            </div>
            <p class="text-center text-xs text-gray-400 mt-2 italic">Photo by Unsplash / Tech Collection</p>
        </div>

        {{-- MAIN CONTENT GRID --}}
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl pb-24">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16">
                
                {{-- ARTICLE BODY --}}
                <div class="lg:col-span-8">
                    <article class="prose prose-lg prose-stone max-w-none font-serif">
                        
                        {{-- DROP CAP PARAGRAPH --}}
                        <p class="first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 first-letter:mr-3 first-letter:float-left first-letter:leading-[0.8] text-xl leading-8 text-gray-800 mb-8">
                            In the swiftly evolving world of web development, 2025 promises to be a landmark year. Developers across the globe are embracing cutting-edge tools, methodologies, and technologies that enhance productivity, performance, and user experiences. The landscape is shifting beneath our feet, and adaptability has never been more crucial.
                        </p>

                        <h2 class="font-sans text-3xl font-bold text-gray-900 mt-12 mb-6 tracking-tight uppercase border-b-2 border-black pb-2 inline-block">Empowering Development with AI</h2>
                        <p>
                            Artificial Intelligence is profoundly transforming the software development lifecycle. From AI-powered code autocompletion tools to automated testing suites, developers can now write cleaner, more efficient code faster than ever before. This paradigm shift allows engineers to focus on creative problem-solving and strategic architecture rather than repetitive coding tasks.
                        </p>

                        {{-- PULL QUOTE --}}
                        <div class="my-12 py-8 border-y border-gray-200 text-center">
                            <span class="block text-4xl text-gray-300 mb-4">“</span>
                            <p class="text-3xl font-serif italic font-bold text-gray-900 leading-snug px-8">
                                AI is not a replacement for developers but a collaborator that elevates our capabilities.
                            </p>
                            <span class="block text-4xl text-gray-300 mt-4">”</span>
                        </div>

                        <h2 class="font-sans text-3xl font-bold text-gray-900 mt-12 mb-6 tracking-tight uppercase border-b-2 border-black pb-2 inline-block">Progressive Web Apps</h2>
                        <p>
                            Progressive Web Apps (PWAs) are quickly becoming the preferred method for cross-platform app delivery. They combine the best of web and mobile applications, providing smooth offline operation, push notifications, and native-like performance without the need for app store distribution.
                        </p>

                        <ul class="list-none pl-0 space-y-4 my-8">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full bg-black text-white text-xs font-bold mr-4">1</span>
                                <span class="text-lg text-gray-800">Enhanced user retention due to near-instant loading times.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full bg-black text-white text-xs font-bold mr-4">2</span>
                                <span class="text-lg text-gray-800">Cost-efficiency by having a single codebase for multiple platforms.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 h-6 w-6 flex items-center justify-center rounded-full bg-black text-white text-xs font-bold mr-4">3</span>
                                <span class="text-lg text-gray-800">SEO advantages with discoverable content.</span>
                            </li>
                        </ul>

                        <h3 class="font-sans text-xl font-bold text-gray-900 mt-10 mb-4 uppercase tracking-wide">The Modern Toolbox</h3>
                        <p>To thrive in this new ecosystem, developers must master:</p>
                        <p>
                            <strong>React & Next.js</strong> for server-side rendering, <strong>TypeScript</strong> for type safety, and <strong>Tailwind CSS</strong> for rapid UI development are now non-negotiable skills in the modern stack.
                        </p>

                        <figure class="my-10">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1000&h=500&fit=crop" alt="Code Editor" class="w-full rounded-sm shadow-sm">
                            <figcaption class="text-center text-sm text-gray-500 mt-3 italic">Modern development environments are becoming increasingly intelligent.</figcaption>
                        </figure>

                        <h2 class="font-sans text-3xl font-bold text-gray-900 mt-12 mb-6 tracking-tight uppercase border-b-2 border-black pb-2 inline-block">Performance & SEO</h2>
                        <p>
                            Search engines increasingly prioritize fast, reliable, and engaging websites. Techniques such as code splitting, lazy loading images, and switching to edge computing prove essential. Well-optimized websites convert better and create trust with visitors.
                        </p>

                        <p class="text-xl font-medium text-gray-900 mt-8">
                            In summary, 2025 brings an exciting fusion of AI, modern frameworks, accessibility, and performance-driven development—equipping web developers to create remarkable digital experiences.
                        </p>
                    </article>

                    {{-- SHARE & TAGS --}}
                    <div class="mt-16 pt-8 border-t border-gray-300 flex flex-col md:flex-row justify-between items-center gap-6">
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 text-xs font-bold uppercase tracking-wider">#WebDev</span>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 text-xs font-bold uppercase tracking-wider">#Future</span>
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 text-xs font-bold uppercase tracking-wider">#AI</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-sm font-bold uppercase tracking-widest text-gray-500">Share Article</span>
                            <a href="#" class="text-gray-900 hover:text-gray-600"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                            <a href="#" class="text-gray-900 hover:text-gray-600"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                        </div>
                    </div>
                </div>

                {{-- SIDEBAR --}}
                <div class="lg:col-span-4 mt-16 lg:mt-0">
                    <div class="sticky top-24 space-y-12">
                        
                        {{-- AUTHOR WIDGET --}}
                        <div class="bg-white p-8 border border-gray-200 text-center shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                            <img src="https://ui-avatars.com/api/?name=Alex+Morgan&background=000&color=fff&size=128" alt="Author" class="w-24 h-24 rounded-full mx-auto mb-4 border-2 border-gray-900">
                            <h4 class="font-sans font-bold text-lg uppercase tracking-wide mb-2">Alex Morgan</h4>
                            <p class="font-serif text-gray-600 italic text-sm mb-4">"Exploring the intersection of code, design, and human experience."</p>
                            <a href="#" class="inline-block text-xs font-bold uppercase tracking-widest border-b border-black pb-1 hover:text-gray-600">View Profile</a>
                        </div>

                        {{-- TRENDING POSTS --}}
                        <div>
                            <h3 class="font-sans font-bold text-xl uppercase tracking-widest border-b-2 border-black pb-3 mb-6">Trending Now</h3>
                            <ul class="space-y-6">
                                <li class="group cursor-pointer">
                                    <span class="block text-xs font-bold text-gray-400 mb-1">01</span>
                                    <h5 class="font-serif font-bold text-lg leading-tight group-hover:underline">The Rise of No-Code Tools in 2025</h5>
                                </li>
                                <li class="group cursor-pointer">
                                    <span class="block text-xs font-bold text-gray-400 mb-1">02</span>
                                    <h5 class="font-serif font-bold text-lg leading-tight group-hover:underline">Why TypeScript is Here to Stay</h5>
                                </li>
                                <li class="group cursor-pointer">
                                    <span class="block text-xs font-bold text-gray-400 mb-1">03</span>
                                    <h5 class="font-serif font-bold text-lg leading-tight group-hover:underline">Designing for Accessibility First</h5>
                                </li>
                                <li class="group cursor-pointer">
                                    <span class="block text-xs font-bold text-gray-400 mb-1">04</span>
                                    <h5 class="font-serif font-bold text-lg leading-tight group-hover:underline">Micro-Frontends: A Practical Guide</h5>
                                </li>
                            </ul>
                        </div>

                        {{-- NEWSLETTER --}}
                        <div class="bg-black text-white p-8 text-center">
                            <h3 class="font-sans font-bold text-xl uppercase tracking-widest mb-4">The Weekly Digest</h3>
                            <p class="font-serif text-gray-400 text-sm italic mb-6">Curated tech news delivered to your inbox every Friday.</p>
                            <form class="space-y-3">
                                <input type="email" placeholder="Your Email" class="w-full bg-gray-900 border border-gray-700 text-white px-4 py-3 text-sm focus:outline-none focus:border-white transition-colors">
                                <button class="w-full bg-white text-black font-bold uppercase tracking-widest text-xs py-3 hover:bg-gray-200 transition-colors">Subscribe</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        {{-- FOOTER NAV --}}
        <div class="border-t border-gray-200 bg-white py-12">
            <div class="container mx-auto px-4 text-center">
                <a href="#" class="font-serif italic text-gray-500 hover:text-black transition-colors">Back to Blog</a>
            </div>
        </div>

    </div>
@endsection
