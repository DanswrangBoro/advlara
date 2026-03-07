@extends('layouts.base')

@section('title', 'Terms of Service - Adventure Code')
@section('description', 'Read the terms and conditions for using Adventure Code services and website.')

@section('content')
<style>
    .legal-page {
        min-height: 100vh;
        background: #fafbfc;
        padding: 7rem 1.5rem 3rem;
    }
    
    .legal-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        padding: 3rem 3.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        border: 1px solid #e5e7eb;
    }
    
    .legal-header {
        margin-bottom: 2.5rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .legal-title {
        font-size: 1.875rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.5rem;
        letter-spacing: -0.025em;
    }
    
    .legal-updated {
        font-size: 0.8125rem;
        color: #6b7280;
        font-weight: 400;
    }
    
    .legal-content {
        color: #374151;
        line-height: 1.7;
        font-size: 0.9375rem;
    }
    
    .legal-content h2 {
        font-size: 1.125rem;
        font-weight: 700;
        color: #111827;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #f3f4f6;
    }
    
    .legal-content h2::before {
        content: attr(data-number);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        background: #f97316;
        color: white;
        border-radius: 6px;
        font-size: 0.8125rem;
        font-weight: 600;
        flex-shrink: 0;
    }
    
    .legal-content h3 {
        font-size: 1rem;
        font-weight: 600;
        color: #1f2937;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }
    
    .legal-content p {
        margin-bottom: 1rem;
        font-size: 0.9375rem;
        line-height: 1.7;
    }
    
    .legal-content ul {
        margin: 1rem 0 1.5rem 0;
        padding-left: 1.5rem;
    }
    
    .legal-content li {
        margin-bottom: 0.5rem;
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .legal-content li::marker {
        color: #f97316;
        font-size: 0.875rem;
    }
    
    .legal-content strong {
        font-weight: 600;
        color: #1f2937;
    }
    
    .legal-content a {
        color: #f97316;
        text-decoration: underline;
        transition: color 0.2s;
    }
    
    .legal-content a:hover {
        color: #ea580c;
    }
    
    .contact-box {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 1.75rem;
        margin-top: 2.5rem;
        text-align: center;
    }
    
    .contact-box h3 {
        font-size: 1.125rem;
        font-weight: 600;
        color: #111827;
        margin-bottom: 0.5rem;
    }
    
    .contact-box p {
        color: #6b7280;
        margin-bottom: 1.25rem;
        font-size: 0.875rem;
    }
    
    .contact-email {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.625rem 1.25rem;
        background: #f97316;
        color: white;
        font-weight: 500;
        font-size: 0.875rem;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    
    .contact-email:hover {
        background: #ea580c;
        transform: translateY(-1px);
    }
    
    .contact-email svg {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }
    
    @media (max-width: 768px) {
        .legal-page {
            padding: 5rem 1rem 2rem;
        }
        
        .legal-container {
            padding: 2rem 1.5rem;
            border-radius: 8px;
        }
        
        .legal-title {
            font-size: 1.5rem;
        }
        
        .legal-content h2 {
            font-size: 1rem;
        }
        
        .legal-content h2::before {
            width: 24px;
            height: 24px;
            font-size: 0.75rem;
        }
        
        .legal-content p,
        .legal-content li {
            font-size: 0.875rem;
        }
    }
</style>

<div class="legal-page">
    <div class="legal-container">
        <div class="legal-header">
            <h1 class="legal-title">Terms of Service</h1>
            <p class="legal-updated">Last Updated: {{ date('F d, Y') }}</p>
        </div>
        
        <div class="legal-content">
            <h2 data-number="1">Introduction</h2>
            <p>The terms of this website govern your access to and use of the website, which is operated by Adventure Code ("we," "our," or "us"). If you access or use the Website, you agree to accept and abide by these Terms. If you disagree with these Terms, do not access or use the Website.</p>
            
            <h2 data-number="2">Acceptance of Terms</h2>
            <p>If you are using or visiting our Website, you confirm that you have read, understand, and agree to these terms of service. This agreement is a legally enforceable agreement between you and Adventure Code. To use or access our Website and services, you must be at least 18 years of age. We do not accept responsibility for confirming age or guardian consent, and any illegal use of our services by children without such consent is strictly prohibited.</p>
            
            <h2 data-number="3">Links to Third-Party Websites</h2>
            <p>The Website may contain links to third-party-managed external sites. These links are provided solely for your convenience and do not constitute an endorsement of the Website's content or practices. We have no control over, and are not responsible for, the privacy policies, terms, or content of any third-party websites. You understand and agree that browsing these external websites is at your own risk. You are responsible for reading their terms of service and privacy policies before providing personal information or using their services.</p>
            
            <h2 data-number="4">Intellectual Property</h2>
            <p>All the content and other materials included on this Website are the intellectual property of Adventure Code. This covers all proprietary rights, whether registered or not, and is protected by copyright, trademark, and intellectual property laws. You agree not to duplicate, distribute, edit, display, or use any part of the Content without Adventure Code's prior written permission, except for personal, non-commercial use or as expressly permitted by these Terms.</p>
            
            <h2 data-number="5">Privacy</h2>
            <p>Your use of the Adventure Code website and services is subject to our thorough Privacy Policy, which describes how we collect, use, keep, and protect your personal information. We are committed to maintaining the privacy and security of your data according to industry standards and applicable regulations. We suggest you read the <a href="{{ route('privacy') }}" style="color: #f97316; text-decoration: underline;">Privacy Policy</a> carefully to understand our responsibility and your rights regarding your personal information.</p>
            <p>By utilizing our products or services, the terms of our Privacy Policy are accepted by you, which include our data retention practices, cookie use, and your rights to access, update, and remove your information.</p>
            
            <h2 data-number="6">Governing Law</h2>
            <p>These Terms of Use shall be governed by and construed in accordance with the laws applicable in the jurisdiction where Adventure Code operates, without regard to its conflict of law provisions. Any disputes arising from these Terms or your use of the Website shall be subject to the exclusive jurisdiction of the courts in that jurisdiction.</p>
            
            <h2 data-number="7">Changes to the Terms</h2>
            <p>We may revise these Terms of Use periodically to reflect updates or changes in our practices, services, or legal requirements. The most recent update will be displayed at the top of this page, followed by an orderly list of modifications. The terms of the Website have been modified, and you agree to the new terms by continuing to use the Website after the changes have been made. We encourage you to review these Terms regularly to stay informed of any updates.</p>
            
            <div class="contact-box">
                <h3>Questions About Our Terms?</h3>
                <p>If you have any questions or require further information about these Terms of Use, please feel free to reach out to us:</p>
                <a href="mailto:advnturecode@gmail.com" class="contact-email">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span style="color:white">advnturecode@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
