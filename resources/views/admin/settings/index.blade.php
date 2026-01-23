@extends('admin.layouts.app')

@section('title', 'Settings')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
        <!-- Settings Navigation -->
        <div class="lg:col-span-1">
            <!-- Mobile Tab Navigation -->
            <div class="lg:hidden mb-4 sm:mb-6">
                <div class="bg-white rounded-xl border border-gray-200 p-1" x-data="{ activeTab: 'general' }">
                    <div class="grid grid-cols-2 gap-1">
                        <button @click="activeTab = 'general'" 
                                :class="activeTab === 'general' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-gray-900'"
                                class="px-3 py-2 text-xs sm:text-sm font-medium rounded-lg transition-colors">
                            General
                        </button>
                        <button @click="activeTab = 'email'" 
                                :class="activeTab === 'email' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-gray-900'"
                                class="px-3 py-2 text-xs sm:text-sm font-medium rounded-lg transition-colors">
                            Email
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-1 mt-1">
                        <button @click="activeTab = 'security'" 
                                :class="activeTab === 'security' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-gray-900'"
                                class="px-3 py-2 text-xs sm:text-sm font-medium rounded-lg transition-colors">
                            Security
                        </button>
                        <button @click="activeTab = 'backup'" 
                                :class="activeTab === 'backup' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-gray-900'"
                                class="px-3 py-2 text-xs sm:text-sm font-medium rounded-lg transition-colors">
                            Backup
                        </button>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:block space-y-1" x-data="{ activeTab: 'general' }">
                <button @click="activeTab = 'general'" 
                        :class="activeTab === 'general' ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900'"
                        class="group border-l-4 px-3 py-2 flex items-center text-sm font-medium w-full text-left transition-colors">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    General Settings
                </button>

                <button @click="activeTab = 'email'" 
                        :class="activeTab === 'email' ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900'"
                        class="group border-l-4 px-3 py-2 flex items-center text-sm font-medium w-full text-left transition-colors">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Email Settings
                </button>

                <button @click="activeTab = 'security'" 
                        :class="activeTab === 'security' ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900'"
                        class="group border-l-4 px-3 py-2 flex items-center text-sm font-medium w-full text-left transition-colors">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    Security
                </button>

                <button @click="activeTab = 'backup'" 
                        :class="activeTab === 'backup' ? 'bg-blue-50 border-blue-500 text-blue-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900'"
                        class="group border-l-4 px-3 py-2 flex items-center text-sm font-medium w-full text-left transition-colors">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                    Backup & Export
                </button>
            </nav>
        </div>

        <!-- Settings Content -->
        <div class="lg:col-span-2" x-data="{ activeTab: 'general' }">
            <!-- General Settings -->
            <div x-show="activeTab === 'general'" class="bg-white shadow-sm rounded-xl sm:rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">General Settings</h3>
                    <p class="text-sm text-gray-600 mt-1">Basic website configuration and information.</p>
                </div>
                <form class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="site_name" class="block text-sm font-medium text-gray-700 mb-1">Site Name</label>
                            <input type="text" id="site_name" value="AdventureCode" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                        <div>
                            <label for="site_tagline" class="block text-sm font-medium text-gray-700 mb-1">Tagline</label>
                            <input type="text" id="site_tagline" value="Digital Solutions & Innovation" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                    </div>

                    <div>
                        <label for="site_description" class="block text-sm font-medium text-gray-700 mb-1">Site Description</label>
                        <textarea id="site_description" rows="3" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">AdventureCode provides cutting-edge digital solutions including web development, mobile apps, and digital marketing services.</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="admin_email" class="block text-sm font-medium text-gray-700 mb-1">Admin Email</label>
                            <input type="email" id="admin_email" value="admin@adventurecode.com" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                        <div>
                            <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1">Contact Phone</label>
                            <input type="tel" id="contact_phone" value="080112 94860" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Email Settings -->
            <div x-show="activeTab === 'email'" class="bg-white shadow-sm rounded-xl sm:rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">Email Settings</h3>
                    <p class="text-sm text-gray-600 mt-1">Configure email notifications and SMTP settings.</p>
                </div>
                <form class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="smtp_host" class="block text-sm font-medium text-gray-700 mb-1">SMTP Host</label>
                            <input type="text" id="smtp_host" placeholder="smtp.gmail.com" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                        <div>
                            <label for="smtp_port" class="block text-sm font-medium text-gray-700 mb-1">SMTP Port</label>
                            <input type="number" id="smtp_port" placeholder="587" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <label for="smtp_username" class="block text-sm font-medium text-gray-700 mb-1">SMTP Username</label>
                            <input type="text" id="smtp_username" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                        <div>
                            <label for="smtp_password" class="block text-sm font-medium text-gray-700 mb-1">SMTP Password</label>
                            <input type="password" id="smtp_password" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-sm font-medium text-gray-900">Email Notifications</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input id="notify_new_contact" type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="notify_new_contact" class="ml-3 text-sm text-gray-700">New contact form submissions</label>
                            </div>
                            <div class="flex items-center">
                                <input id="notify_new_user" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="notify_new_user" class="ml-3 text-sm text-gray-700">New user registrations</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Save Email Settings
                        </button>
                    </div>
                </form>
            </div>

            <!-- Security Settings -->
            <div x-show="activeTab === 'security'" class="bg-white shadow-sm rounded-xl sm:rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">Security Settings</h3>
                    <p class="text-sm text-gray-600 mt-1">Manage security and access control settings.</p>
                </div>
                <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="space-y-4">
                        <h4 class="text-sm font-medium text-gray-900">Password Requirements</h4>
                        <div class="space-y-3">
                            <div class="flex items-start">
                                <input id="require_strong_password" type="checkbox" checked class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-0.5">
                                <label for="require_strong_password" class="ml-3 text-sm text-gray-700">Require strong passwords (8+ characters, mixed case, numbers)</label>
                            </div>
                            <div class="flex items-start">
                                <input id="force_password_change" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded mt-0.5">
                                <label for="force_password_change" class="ml-3 text-sm text-gray-700">Force password change every 90 days</label>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="text-sm font-medium text-gray-900">Session Management</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                            <div>
                                <label for="session_timeout" class="block text-sm font-medium text-gray-700 mb-1">Session Timeout (minutes)</label>
                                <input type="number" id="session_timeout" value="120" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                            </div>
                            <div>
                                <label for="max_login_attempts" class="block text-sm font-medium text-gray-700 mb-1">Max Login Attempts</label>
                                <input type="number" id="max_login_attempts" value="5" class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Save Security Settings
                        </button>
                    </div>
                </div>
            </div>

            <!-- Backup Settings -->
            <div x-show="activeTab === 'backup'" class="bg-white shadow-sm rounded-xl sm:rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900">Backup & Export</h3>
                    <p class="text-sm text-gray-600 mt-1">Manage data backups and exports.</p>
                </div>
                <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <div class="border border-gray-200 rounded-lg p-4 sm:p-6">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Database Backup</h4>
                            <p class="text-sm text-gray-600 mb-4">Export all database content including users, contacts, and settings.</p>
                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors w-full sm:w-auto justify-center sm:justify-start">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                                </svg>
                                Export Database
                            </button>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 sm:p-6">
                            <h4 class="text-sm font-medium text-gray-900 mb-2">Contact Forms Export</h4>
                            <p class="text-sm text-gray-600 mb-4">Export all contact form submissions as CSV file.</p>
                            <button class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors w-full sm:w-auto justify-center sm:justify-start">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Export Contacts
                            </button>
                        </div>
                    </div>

                    <div class="border border-yellow-200 bg-yellow-50 rounded-lg p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">Backup Recommendations</h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <ul class="list-disc pl-5 space-y-1">
                                        <li>Schedule regular automated backups</li>
                                        <li>Store backups in multiple locations</li>
                                        <li>Test backup restoration periodically</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection