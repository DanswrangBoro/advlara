<!-- resources/views/contact.blade.php -->
@extends('layouts.base')

@section('title', 'Contact Us - Get in Touch | AdventureCode')
@section('description', 'Contact AdventureCode for your web development, digital marketing, and technology needs. We are here to help transform your business.')
@section('keywords', 'contact, get in touch, AdventureCode contact, email, phone, support')

@section('content')

{{-- Enhanced Hero Section --}}
<section class="relative bg-white pt-32 pb-24 md:pt-40 md:pb-32 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-slate-50"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(59,130,246,0.1),transparent_50%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(99,102,241,0.08),transparent_50%)]"></div>
    
    {{-- Decorative Elements --}}
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-indigo-200/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div class="space-y-8 animate-fade-in-left">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-700 text-sm font-bold rounded-full border border-blue-200">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    Available 24/7
                </div>
                
                {{-- Main Heading --}}
                <div class="space-y-4">
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 leading-[1.1] tracking-tight">
                        Let's Bring Your
                        <span class="relative inline-block mt-2">
                            <span class="relative z-10 text-blue-600">Vision to Life</span>
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-blue-200" viewBox="0 0 300 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10C50 5 100 2 150 2C200 2 250 5 298 10" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </h1>
                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Ready to transform your ideas into reality? Our expert team is here to help you build something extraordinary.
                    </p>
                </div>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-4">
                    <a href="#contact-form" class="group inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-bold text-sm rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg shadow-blue-600/30 hover:shadow-xl hover:shadow-blue-600/40 hover:scale-105">
                        Get Started
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="tel:08011294860" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-slate-900 font-bold text-sm rounded-xl border-2 border-slate-200 hover:border-blue-600 hover:text-blue-600 transition-all duration-300 shadow-sm hover:shadow-md">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.23.615a16.036 16.036 0 006.837 6.837l.615-1.23a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        Call Now
                    </a>
                </div>
                
                {{-- Trust Indicators --}}
                <div class="flex flex-wrap items-center gap-8 pt-4">
                    <div class="flex items-center gap-3">
                        <div class="flex -space-x-2">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 border-2 border-white flex items-center justify-center text-white font-bold text-sm">J</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 border-2 border-white flex items-center justify-center text-white font-bold text-sm">S</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 border-2 border-white flex items-center justify-center text-white font-bold text-sm">A</div>
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 border-2 border-white flex items-center justify-center text-white font-bold text-sm">M</div>
                        </div>
                        <div class="text-left">
                            <div class="font-black text-slate-900 text-sm">500+ Happy Clients</div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-sm font-bold text-slate-700">4.9/5</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="h-12 w-px bg-slate-200"></div>
                    
                    <div class="text-left">
                        <div class="font-black text-slate-900 text-sm">Response Time</div>
                        <div class="text-blue-600 font-bold text-sm">< 24 Hours</div>
                    </div>
                </div>
            </div>
            
            {{-- Right Visual --}}
            <div class="relative animate-fade-in-right hidden lg:block">
                {{-- Main Card --}}
                <div class="relative">
                    {{-- Floating Card 1 --}}
                    <div class="absolute -top-8 -left-8 bg-white rounded-2xl shadow-xl p-4 border border-slate-100 animate-float z-10" style="animation-delay: 0.5s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900 text-sm">Quick Response</div>
                                <div class="text-slate-500 text-xs">We reply fast</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Floating Card 2 --}}
                    <div class="absolute -bottom-8 -right-8 bg-white rounded-2xl shadow-xl p-4 border border-slate-100 animate-float z-10" style="animation-delay: 1s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                                    <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-900 text-sm">Expert Support</div>
                                <div class="text-slate-500 text-xs">Always here</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Main Illustration --}}
                    <div class="relative bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl p-12 shadow-2xl">
                        <div class="space-y-6">
                            {{-- Mock Form Elements --}}
                            <div class="space-y-4">
                                <div class="h-12 bg-white/20 backdrop-blur-sm rounded-xl animate-pulse"></div>
                                <div class="h-12 bg-white/20 backdrop-blur-sm rounded-xl animate-pulse" style="animation-delay: 0.2s;"></div>
                                <div class="h-32 bg-white/20 backdrop-blur-sm rounded-xl animate-pulse" style="animation-delay: 0.4s;"></div>
                                <div class="h-12 bg-white rounded-xl flex items-center justify-center font-bold text-blue-600 shadow-lg">
                                    Send Message →
                                </div>
                            </div>
                        </div>
                        
                        {{-- Decorative Elements --}}
                        <div class="absolute top-4 right-4 w-16 h-16 bg-yellow-400 rounded-full opacity-20 blur-2xl"></div>
                        <div class="absolute bottom-4 left-4 w-20 h-20 bg-pink-400 rounded-full opacity-20 blur-2xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form & Info Section --}}
<section id="contact-form" class="relative py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-12 items-start">
            
            {{-- Contact Information --}}
            <div class="lg:col-span-2 space-y-6">
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-wide rounded-full animate-slide-in-left">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        Contact Information
                    </div>
                    <h2 class="text-2xl font-black text-slate-900 leading-tight animate-slide-in-left" style="animation-delay: 0.1s;">
                        Get in Touch<br/>
                        <span class="text-blue-600">We're Here to Help</span>
                    </h2>
                    <p class="text-slate-600 text-sm leading-relaxed animate-slide-in-left" style="animation-delay: 0.2s;">
                        Share your project details and our team will craft the perfect solution for you.
                    </p>
                </div>
                
                {{-- Contact Cards --}}
                <div class="space-y-4">
                    {{-- Phone Card --}}
                    <div class="group bg-white rounded-xl border-2 border-slate-100 p-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300 animate-slide-in-left" style="animation-delay: 0.3s;">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.23.615a16.036 16.036 0 006.837 6.837l.615-1.23a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-black text-slate-900 mb-1">Phone</h3>
                                <p class="text-slate-500 text-xs mb-2 font-medium">Mon-Fri 8am to 5pm</p>
                                <a href="tel:08011294860" class="inline-flex items-center gap-2 text-blue-600 text-sm font-bold hover:text-blue-800 transition-colors">
                                    080112 94860
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Email Card --}}
                    <div class="group bg-white rounded-xl border-2 border-slate-100 p-6 hover:border-blue-500 hover:shadow-lg transition-all duration-300 animate-slide-in-left" style="animation-delay: 0.4s;">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-14 h-14 bg-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-all duration-300 shadow-sm">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-black text-slate-900 mb-1">Email</h3>
                                <p class="text-slate-500 text-xs mb-2 font-medium">We're here to help 24/7</p>
                                <a href="mailto:support@adventurecode.com" class="text-blue-600 text-sm font-bold hover:text-blue-800 transition-colors break-all">
                                    support@adventurecode.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Social Links --}}
                <div class="pt-4 animate-slide-in-left" style="animation-delay: 0.5s;">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-4 flex items-center gap-2">
                        <span class="w-8 h-px bg-blue-500"></span>
                        Connect With Us
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-400 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-blue-700 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-11 h-11 bg-slate-100 rounded-xl flex items-center justify-center text-slate-600 hover:bg-pink-600 hover:text-white transition-all duration-300 shadow-sm hover:shadow-md hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            {{-- Contact Form --}}
            <div class="lg:col-span-3 animate-slide-in-right">
                <div class="bg-slate-50 rounded-2xl border-2 border-slate-200 shadow-xl p-8 md:p-10">
                    {{-- Success/Error Messages --}}
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-green-800 font-medium text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-red-800 font-medium text-sm">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif
                    
                    <div class="mb-6 text-center">
                        <h2 class="text-2xl font-black text-slate-900 mb-2">Send us a Message</h2>
                        <p class="text-slate-600 text-sm">We'll craft the perfect solution for your needs</p>
                    </div>
                    
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" id="contactForm">
                        @csrf
                        
                        {{-- Name & Email Row --}}
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div class="relative">
                                <label for="name" class="block text-sm font-bold text-slate-900 mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       value="{{ old('name') }}"
                                       class="w-full px-4 py-3 text-sm rounded-xl border-2 @error('name') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-white"
                                       placeholder="John Doe">
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="relative">
                                <label for="email" class="block text-sm font-bold text-slate-900 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       value="{{ old('email') }}"
                                       class="w-full px-4 py-3 text-sm rounded-xl border-2 @error('email') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-white"
                                       placeholder="john@example.com">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- Phone & Subject Row --}}
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div class="relative">
                                <label for="phone" class="block text-sm font-bold text-slate-900 mb-2">
                                    Phone Number
                                </label>
                                <input type="tel" 
                                       id="phone" 
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       class="w-full px-4 py-3 text-sm rounded-xl border-2 @error('phone') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-white"
                                       placeholder="+1 (555) 123-4567">
                                @error('phone')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="relative">
                                <label for="subject" class="block text-sm font-bold text-slate-900 mb-2">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="subject" 
                                       name="subject" 
                                       required
                                       value="{{ old('subject') }}"
                                       class="w-full px-4 py-3 text-sm rounded-xl border-2 @error('subject') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all bg-white"
                                       placeholder="How can we help?">
                                @error('subject')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        {{-- Message with Character Counter --}}
                        <div class="relative">
                            <label for="message" class="block text-sm font-bold text-slate-900 mb-2">
                                Your Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="6" 
                                      required
                                      maxlength="500"
                                      class="w-full px-4 py-3 text-sm rounded-xl border-2 @error('message') border-red-500 @else border-slate-200 @enderror focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all resize-none bg-white"
                                      placeholder="Tell us about your project..."
                                      oninput="updateCharCount(this)">{{ old('message') }}</textarea>
                            <div class="absolute bottom-3 right-4 px-2 py-1 bg-slate-100 rounded-full text-xs font-bold text-slate-500">
                                <span id="charCount">{{ strlen(old('message', '')) }}</span>/500
                            </div>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        {{-- Privacy Notice --}}
                        <div class="flex items-start gap-3 p-4 bg-blue-50 rounded-xl border border-blue-100">
                            <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-xs text-slate-700 leading-relaxed font-medium">
                                By submitting this form, you agree to our <a href="#" class="font-bold text-blue-600 hover:text-blue-800 hover:underline">Privacy Policy</a> and <a href="#" class="font-bold text-blue-600 hover:text-blue-800 hover:underline">Terms of Service</a>.
                            </p>
                        </div>
                        
                        {{-- Submit Button --}}
                        {{-- Submit Button --}}
                        <button type="submit" 
                                id="submitBtn"
                                class="w-full py-4 px-6 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold text-sm rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center gap-3 disabled:opacity-75 disabled:cursor-not-allowed">
                            <span id="btnText">Send Message</span>
                            <svg id="btnArrow" class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                            <svg id="btnLoader" class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                
                {{-- Trust Badges --}}
                <div class="mt-8 flex flex-wrap items-center justify-center gap-6">
                    <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-slate-200 text-slate-600 hover:border-green-500 hover:shadow-md transition-all cursor-pointer">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-xs font-bold">SSL Secured</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-slate-200 text-slate-600 hover:border-green-500 hover:shadow-md transition-all cursor-pointer">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-xs font-bold">GDPR Compliant</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full border border-slate-200 text-slate-600 hover:border-green-500 hover:shadow-md transition-all cursor-pointer">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-xs font-bold">24h Response</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Office Locations Section --}}
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 text-xs font-bold uppercase tracking-wide rounded-full mb-4">
                Our Locations
            </div>
            <h2 class="text-2xl font-black text-slate-900 mb-4">Visit Our Offices</h2>
            <p class="text-slate-600 text-base max-w-2xl mx-auto">
                We have offices in two locations to serve you better
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            {{-- US Office --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 overflow-hidden hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                {{-- Map --}}
                <div class="relative h-64 overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3012.8901234567!2d-74.5701234!3d40.8445678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c39a123456789%3A0x123456789abcdef!2s486%20NJ-10%2C%20Randolph%2C%20NJ%2007869%2C%20USA!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale group-hover:grayscale-0 transition-all duration-500"></iframe>
                </div>
                
                {{-- Office Info --}}
                <div class="p-8">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 mb-2">United States Office</h3>
                            <p class="text-slate-600 text-sm font-medium leading-relaxed">
                                486 NJ-10<br/>
                                Randolph, NJ 07869<br/>
                                United States
                            </p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.23.615a16.036 16.036 0 006.837 6.837l.615-1.23a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <a href="tel:08011294860" class="text-slate-700 font-semibold hover:text-blue-600 transition-colors">080112 94860</a>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <a href="mailto:support@adventurecode.com" class="text-slate-700 font-semibold hover:text-blue-600 transition-colors">support@adventurecode.com</a>
                        </div>
                    </div>
                    
                    <a href="https://www.google.com/maps?q=486+NJ-10+Randolph+NJ+07869+USA" target="_blank" class="mt-6 inline-flex items-center gap-2 px-5 py-3 bg-blue-600 text-white font-bold text-sm rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
                        Get Directions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            {{-- India Office --}}
            <div class="group bg-white rounded-2xl border-2 border-slate-200 overflow-hidden hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                {{-- Map - Updated with correct Adventure Code location --}}
                <div class="relative h-64 overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.5407988301836!2d91.77270377535599!3d26.179080591232825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59573007069b%3A0x9e14904269239fa5!2sAdventure%20Code!5e0!3m2!1sen!2sin!4v1729166582048!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale group-hover:grayscale-0 transition-all duration-500"></iframe>
                </div>
                
                {{-- Office Info --}}
                <div class="p-8">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 mb-2">India Office</h3>
                            <p class="text-slate-600 text-sm font-medium leading-relaxed">
                                RG Baruah Rd, Sarania Hills<br/>
                                Guwahati, Assam 781003<br/>
                                India
                            </p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.23.615a16.036 16.036 0 006.837 6.837l.615-1.23a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <a href="tel:08011294860" class="text-slate-700 font-semibold hover:text-blue-600 transition-colors">080112 94860</a>
                        </div>
                        <div class="flex items-center gap-3 text-sm">
                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <a href="mailto:support@adventurecode.com" class="text-slate-700 font-semibold hover:text-blue-600 transition-colors">support@adventurecode.com</a>
                        </div>
                    </div>
                    
                    <a href="https://www.google.com/maps/place/Adventure+Code/@26.1790806,91.7727038,17z" target="_blank" class="mt-6 inline-flex items-center gap-2 px-5 py-3 bg-blue-600 text-white font-bold text-sm rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
                        Get Directions
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Custom Animations & JavaScript --}}
<style>
    html {
        scroll-behavior: smooth;
    }
    
    @keyframes fade-in-left {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes fade-in-right {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slide-in-left {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slide-in-right {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0px) translateX(0px);
        }
        50% {
            transform: translateY(-20px) translateX(10px);
        }
    }
    
    .animate-fade-in-left {
        animation: fade-in-left 0.8s ease-out forwards;
    }
    
    .animate-fade-in-right {
        animation: fade-in-right 0.8s ease-out forwards;
    }
    
    .animate-slide-in-left {
        animation: slide-in-left 0.6s ease-out forwards;
    }
    
    .animate-slide-in-right {
        animation: slide-in-right 0.6s ease-out forwards;
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    
    input:focus,
    textarea:focus,
    select:focus {
        outline: none;
    }
</style>

<script>
    function updateCharCount(textarea) {
        const count = textarea.value.length;
        const charCountElement = document.getElementById('charCount');
        if (charCountElement) {
            charCountElement.textContent = count;
            
            // Change color based on character count
            if (count > 450) {
                charCountElement.classList.add('text-red-500');
                charCountElement.classList.remove('text-slate-500', 'text-yellow-500');
            } else if (count > 400) {
                charCountElement.classList.add('text-yellow-500');
                charCountElement.classList.remove('text-slate-500', 'text-red-500');
            } else {
                charCountElement.classList.add('text-slate-500');
                charCountElement.classList.remove('text-yellow-500', 'text-red-500');
            }
        }
    }
    
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const btn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const btnArrow = document.getElementById('btnArrow');
        const btnLoader = document.getElementById('btnLoader');
        
        // Validate form before showing loading state
        const form = e.target;
        if (!form.checkValidity()) {
            return; // Let browser handle validation
        }
        
        // Show loading state
        btnText.textContent = 'Sending...';
        btnArrow.classList.add('hidden');
        btnLoader.classList.remove('hidden');
        btn.disabled = true;
        
        // Add a timeout to reset button if form submission takes too long
        setTimeout(() => {
            if (btn.disabled) {
                btnText.textContent = 'Send Message';
                btnArrow.classList.remove('hidden');
                btnLoader.classList.add('hidden');
                btn.disabled = false;
            }
        }, 10000); // Reset after 10 seconds
    });

    // Initialize character count on page load
    document.addEventListener('DOMContentLoaded', function() {
        const messageTextarea = document.getElementById('message');
        if (messageTextarea) {
            updateCharCount(messageTextarea);
            
            // Add real-time validation feedback
            messageTextarea.addEventListener('input', function() {
                updateCharCount(this);
                
                // Remove error styling when user starts typing
                if (this.classList.contains('border-red-500')) {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-slate-200');
                }
            });
        }
        
        // Add real-time validation for all form fields
        const formFields = document.querySelectorAll('#contactForm input, #contactForm textarea');
        formFields.forEach(field => {
            field.addEventListener('input', function() {
                if (this.classList.contains('border-red-500')) {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-slate-200');
                }
            });
            
            field.addEventListener('focus', function() {
                this.classList.add('border-blue-500', 'ring-4', 'ring-blue-500/10');
            });
            
            field.addEventListener('blur', function() {
                this.classList.remove('border-blue-500', 'ring-4', 'ring-blue-500/10');
                if (!this.classList.contains('border-red-500')) {
                    this.classList.add('border-slate-200');
                }
            });
        });
        
        // Auto-resize textarea
        const textarea = document.getElementById('message');
        if (textarea) {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });
        }
    });
    
    // Add form validation enhancement
    function validateForm() {
        const form = document.getElementById('contactForm');
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('border-red-500');
                input.classList.remove('border-slate-200');
                isValid = false;
            }
        });
        
        return isValid;
    }
</script>

@endsection
