<!-- resources/views/index.blade.php -->
@extends('layouts.base')

@section('title', 'AdventureCode - Empowering Brands with Technology')
@section('description', 'We transform how brands communicate with their audiences using trendy digital technology. Our digital solutions help improve strategy, increase online visibility.')
@section('keywords', 'digital agency, web development, brand solutions, technology, creative services')

@section('content')
    <!-- Hero Section -->
    @include('index.hero')
    @include('index.services')
    @include('index.about')
    @include('index.why_us')
    @include('index.clients')
    @include('index.testimonials')
    @include('index.blog')
    @include('index.faq')
    @include('index.index_cta')
    
@endsection


