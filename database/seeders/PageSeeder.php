<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\User;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        
        if (!$admin) {
            $admin = User::first();
        }

        $pages = [
            [
                'title' => 'Home Page',
                'slug' => 'home',
                'content' => '<h1>Welcome to Our Website</h1><p>This is the home page content. You can edit this content through the admin panel.</p>',
                'excerpt' => 'Welcome to our website homepage',
                'type' => 'page',
                'status' => 'published',
                'template' => 'default',
                'meta_title' => 'Home - Your Website',
                'meta_description' => 'Welcome to our website. Discover our services and solutions.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'show_in_menu' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'About Us',
                'slug' => 'about',
                'content' => '<h1>About Our Company</h1><p>Learn more about our company, mission, and values. We are dedicated to providing excellent services.</p>',
                'excerpt' => 'Learn more about our company and mission',
                'type' => 'page',
                'status' => 'published',
                'template' => 'default',
                'meta_title' => 'About Us - Your Website',
                'meta_description' => 'Learn about our company, mission, and the team behind our success.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'show_in_menu' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => '<h1>Get In Touch</h1><p>Contact us for any inquiries or support. We are here to help you.</p>',
                'excerpt' => 'Get in touch with our team',
                'type' => 'page',
                'status' => 'published',
                'template' => 'default',
                'meta_title' => 'Contact Us - Your Website',
                'meta_description' => 'Contact us for inquiries, support, or to learn more about our services.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'show_in_menu' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Our Services',
                'slug' => 'services',
                'content' => '<h1>Our Services</h1><p>Discover the range of services we offer to help your business grow.</p>',
                'excerpt' => 'Explore our comprehensive service offerings',
                'type' => 'service',
                'status' => 'published',
                'template' => 'service',
                'meta_title' => 'Services - Your Website',
                'meta_description' => 'Explore our comprehensive range of services designed to help your business succeed.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'show_in_menu' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Welcome to Our Blog',
                'slug' => 'welcome-blog-post',
                'content' => '<h1>Welcome to Our Blog</h1><p>This is our first blog post. Stay tuned for more updates and insights.</p>',
                'excerpt' => 'Our first blog post welcoming you to our blog',
                'type' => 'blog',
                'status' => 'published',
                'template' => 'blog',
                'meta_title' => 'Welcome to Our Blog - Your Website',
                'meta_description' => 'Read our latest blog posts and stay updated with industry insights.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'is_featured' => true,
                'show_in_menu' => false,
                'sort_order' => 5,
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => '<h1>Privacy Policy</h1><p>This page contains our privacy policy and data protection information.</p>',
                'excerpt' => 'Our privacy policy and data protection information',
                'type' => 'page',
                'status' => 'published',
                'template' => 'default',
                'meta_title' => 'Privacy Policy - Your Website',
                'meta_description' => 'Read our privacy policy to understand how we protect your data.',
                'published_at' => now(),
                'author_id' => $admin->id,
                'show_in_menu' => false,
                'sort_order' => 6,
            ],
            [
                'title' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'content' => '<h1>Terms of Service</h1><p>Please read our terms of service carefully before using our website.</p>',
                'excerpt' => 'Terms and conditions for using our services',
                'type' => 'page',
                'status' => 'draft',
                'template' => 'default',
                'meta_title' => 'Terms of Service - Your Website',
                'meta_description' => 'Read our terms of service and conditions for using our website.',
                'author_id' => $admin->id,
                'show_in_menu' => false,
                'sort_order' => 7,
            ],
        ];

        foreach ($pages as $pageData) {
            Page::create($pageData);
        }
    }
}