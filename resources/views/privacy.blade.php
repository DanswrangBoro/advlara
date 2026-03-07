@extends('layouts.base')

@section('title', 'Privacy Policy - Adventure Code')
@section('description', 'Learn how Adventure Code collects, uses, and protects your personal information.')

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
    
    .legal-content > p:first-child {
        font-size: 1rem;
        color: #4b5563;
        margin-bottom: 2rem;
        line-height: 1.65;
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
        background: #2563eb;
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
        list-style-type: disc;
    }
    
    .legal-content ol {
        margin: 1rem 0 1.5rem 0;
        padding-left: 1.5rem;
        list-style-type: disc;
    }
    
    .legal-content ol li::marker {
        color: #1f2937;
        font-weight: 400;
    }
    
    .legal-content li {
        margin-bottom: 0.5rem;
        font-size: 0.9375rem;
        line-height: 1.6;
    }
    
    .legal-content li::marker {
        color: #1f2937;
        font-size: 0.875rem;
    }
    
    .legal-content strong {
        font-weight: 600;
        color: #1f2937;
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
        background: #2563eb;
        color: white;
        font-weight: 500;
        font-size: 0.875rem;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s ease;
    }
    
    .contact-email:hover {
        background: #1d4ed8;
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
            <h1 class="legal-title">Privacy Policy</h1>
            <p class="legal-updated">Last Updated: {{ date('F d, Y') }}</p>
        </div>
        
        <div class="legal-content">
            <p>Adventure Code ("we," "us," or "our") respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, and protect your personal information when you visit our website. By using the Website, you agree to the collection and use of information under this policy.</p>
            
            <h2 data-number="1">Information We Collect</h2>
            
            <h3>Personal Information</h3>
            <p>We may collect personally identifiable information when you interact with our website, register for an account, request services, or contact us directly. This information is essential for providing the best possible service and includes details such as:</p>
            <ol>
                <li>Your name</li>
                <li>Email address</li>
                <li>Phone number</li>
                <li>Billing information</li>
                <li>Payment information</li>
                <li>Company name and business details</li>
            </ol>
            
            <h3>Non-Personal Information</h3>
            <p>We may also collect non-personally identifiable information such as your IP address, browser type, device type, operating system, and usage data to improve our Website's functionality and user experience.</p>
            
            <h2 data-number="2">How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ol>
                <li><strong>Provide and Maintain Services:</strong> To deliver, operate, and maintain our website and services, including processing transactions and managing your account</li>
                <li><strong>Process Transactions:</strong> To handle payments, send invoices, and provide transaction-related information including confirmations and receipts</li>
                <li><strong>Customer Support:</strong> To respond to your inquiries, provide technical support, and address any issues or concerns you may have</li>
                <li><strong>Improve User Experience:</strong> To analyze how you use our Website, understand user preferences, and enhance the overall functionality and user interface</li>
                <li><strong>Marketing Communications:</strong> To send you promotional materials, newsletters, special offers, and updates about our services (only if you have opted in to receive such communications)</li>
                <li><strong>Security and Fraud Prevention:</strong> To monitor and protect the security of our Website, detect and prevent fraudulent activities, and ensure compliance with our terms of service</li>
                <li><strong>Legal Compliance:</strong> To comply with applicable laws, regulations, legal processes, and enforceable governmental requests</li>
                <li><strong>Business Operations:</strong> To conduct internal research, analytics, and reporting to improve our business operations and service offerings</li>
            </ol>
            
            <h2 data-number="3">Sharing Your Information</h2>
            <p>We do not sell, rent, or share your personal information with third parties, except in the following circumstances:</p>
            <ol>
                <li><strong>Service Providers:</strong> With trusted service providers who help us run the website or deliver our services (e.g., payment processors, email marketing platforms, hosting providers)</li>
                <li><strong>Legal Requirements:</strong> As required by law or in response to legal inquiries (e.g., court orders, government regulations, or to protect our rights)</li>
                <li><strong>Business Transfers:</strong> In connection with any merger, sale of company assets, financing, or acquisition of all or a portion of our business</li>
                <li><strong>With Your Consent:</strong> When you explicitly authorize us to share your information</li>
            </ol>
            
            <h2 data-number="4">Cookies and Tracking Technologies</h2>
            <p>Our website uses cookies and similar tracking technologies to improve your browsing experience and track site usage. Cookies are small data files stored on your device that help us customize your content and remember your preferences.</p>
            
            <h3>Types of Cookies We Use:</h3>
            <ol>
                <li><strong>Essential Cookies:</strong> These cookies are necessary for the website to function properly. They enable core functionality such as security, network management, and accessibility. You cannot opt-out of these cookies as they are required for the website to work</li>
                <li><strong>Analytics Cookies:</strong> These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously. We use this data to improve website performance and user experience</li>
                <li><strong>Marketing Cookies:</strong> These cookies are used to track visitors across websites and deliver relevant advertisements. They help us measure the effectiveness of our marketing campaigns</li>
                <li><strong>Preference Cookies:</strong> These cookies remember your settings and preferences (such as language preference, region, or display settings) to provide a more personalized experience</li>
                <li><strong>Functional Cookies:</strong> These cookies enable enhanced functionality and personalization, such as videos and live chats. They may be set by us or by third-party providers</li>
            </ol>
            
            <h3>Managing Cookies:</h3>
            <p>You have complete control over cookies and can manage or disable them at any time through your browser settings. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. Please note that disabling cookies may affect the functionality of our website and limit your ability to use certain features.</p>
            
            <p>To learn more about cookies and how to manage them, visit <a href="https://www.allaboutcookies.org" target="_blank" rel="noopener">www.allaboutcookies.org</a>.</p>
            
            <h2 data-number="5">Data Security</h2>
            <p>We implement industry-standard security measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction. Ensuring the security of your data is our top priority.</p>
            
            <h3>Our Security Measures Include:</h3>
            <ol>
                <li><strong>Encryption:</strong> We use SSL/TLS encryption to protect data transmitted between your browser and our servers</li>
                <li><strong>Access Controls:</strong> We restrict access to personal information to authorized employees and contractors who need to know that information to operate, develop, or improve our services</li>
                <li><strong>Secure Storage:</strong> Personal information is stored on secure servers with restricted access and regular security audits</li>
                <li><strong>Regular Updates:</strong> We regularly update our security practices and software to protect against new threats and vulnerabilities</li>
                <li><strong>Data Backup:</strong> We maintain regular backups of data to prevent loss in case of system failures</li>
                <li><strong>Monitoring:</strong> We continuously monitor our systems for potential security breaches and suspicious activities</li>
            </ol>
            
            <p>However, you should be aware that no method of transmission over the Internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security. We encourage you to use strong passwords and keep your login credentials confidential.</p>
            
            <h2 data-number="6">Your Rights and Choices</h2>
            <p>You have the following rights regarding your personal information:</p>
            <ol>
                <li><strong>Right to Access:</strong> You have the right to request access to the personal information we hold about you. We will provide you with a copy of your data in a commonly used format</li>
                <li><strong>Right to Correction:</strong> You can request correction of any inaccurate or incomplete personal information we hold about you. We will make reasonable efforts to update your information promptly</li>
                <li><strong>Right to Deletion:</strong> You have the right to request deletion of your personal information, subject to certain legal exceptions. We will delete your data unless we are required to retain it for legal or legitimate business purposes</li>
                <li><strong>Right to Opt-Out:</strong> You can unsubscribe from marketing communications at any time by clicking the "unsubscribe" link in our emails or by contacting us directly. Please note that you may still receive transactional emails related to your account or services</li>
                <li><strong>Right to Data Portability:</strong> You can request a copy of your personal data in a portable, machine-readable format that can be transferred to another service provider</li>
                <li><strong>Right to Restrict Processing:</strong> You can request that we restrict the processing of your personal information in certain circumstances, such as when you contest the accuracy of the data</li>
                <li><strong>Right to Object:</strong> You have the right to object to our processing of your personal information for direct marketing purposes or when processing is based on legitimate interests</li>
            </ol>
            
            <p>To exercise any of these rights, please contact us at <a href="mailto:advnturecode@gmail.com">advnturecode@gmail.com</a>. We will respond to your request within 30 days. Please note that we may need to verify your identity before processing your request.</p>
            
            <h2 data-number="7">Links to Third-Party Websites</h2>
            <p>Our website may contain links to external websites that we do not administer or control. We are not responsible for these third-party websites' privacy policies, content, or activities. We recommend reviewing their privacy policies before sharing personal information on those websites.</p>
            
            <h2 data-number="8">Children's Privacy</h2>
            <p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have inadvertently collected information from a child, please contact us immediately so we can delete it.</p>
            
            <h2 data-number="9">International Data Transfers</h2>
            <p>Your information may be transferred to and maintained on computers located outside of your state, province, country, or other governmental jurisdiction where data protection laws may differ. By using our website, you consent to such transfers.</p>
            
            <h2 data-number="10">Changes to This Privacy Policy</h2>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. When we make changes, we will post the revised policy on this page with the new effective date. We encourage you to review this policy periodically for any updates.</p>
            
            <div class="contact-box">
                <h3>Questions About Our Privacy Policy?</h3>
                <p>If you have questions or require further information about this Privacy Policy, please feel free to reach out to us:</p>
                <a href="mailto:advnturecode@gmail.com" class="contact-email">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>advnturecode@gmail.com</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
