<!-- resources/views/about.blade.php -->
@extends('layouts.base')

@section('title', 'About Us - AdventureCode')
@section('description', 'Learn more about AdventureCode, our mission, vision, and the passionate team driving innovation through technology and creativity.')
@section('keywords', 'about AdventureCode, our team, mission, vision, digital agency, tech company')

@section('content')
    <!-- About Section -->
    @include('about.hero')
    @include('about.mission_vision')
    @include('about.client_centric')
    @include('about.tech_expert')
    @include('about.vision_for_growth')
@endsection
