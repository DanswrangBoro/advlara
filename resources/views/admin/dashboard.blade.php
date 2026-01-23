@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Enhanced Stats Overview Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 mb-6 sm:mb-8 lg:mb-10">
        <!-- Total Contacts -->
        <div class="card-modern p-4 sm:p-6 lg:p-8 relative overflow-hidden group">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm font-semibold text-gray-600 mb-1">Total Contacts</p>
                            <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['total_contacts'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +2%
                        </span>
                        <span class="text-xs sm:text-sm text-gray-500">from last month</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-24 h-24 sm:w-32 sm:h-32 bg-gradient-to-br from-blue-50 to-blue-100 rounded-full -mr-12 sm:-mr-16 -mt-12 sm:-mt-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
        </div>

        <!-- New Contacts -->
        <div class="card-modern p-4 sm:p-6 lg:p-8 relative overflow-hidden group">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm font-semibold text-gray-600 mb-1">New Contacts</p>
                            <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['new_contacts'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold bg-red-100 text-red-800">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                            -5%
                        </span>
                        <span class="text-xs sm:text-sm text-gray-500">from last week</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-24 h-24 sm:w-32 sm:h-32 bg-gradient-to-br from-green-50 to-green-100 rounded-full -mr-12 sm:-mr-16 -mt-12 sm:-mt-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
        </div>

        <!-- This Month -->
        <div class="card-modern p-4 sm:p-6 lg:p-8 relative overflow-hidden group">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm font-semibold text-gray-600 mb-1">This Month</p>
                            <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['contacts_this_month'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-800">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +8%
                        </span>
                        <span class="text-xs sm:text-sm text-gray-500">from last month</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-24 h-24 sm:w-32 sm:h-32 bg-gradient-to-br from-purple-50 to-purple-100 rounded-full -mr-12 sm:-mr-16 -mt-12 sm:-mt-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
        </div>

        <!-- Today -->
        <div class="card-modern p-4 sm:p-6 lg:p-8 relative overflow-hidden group">
            <div class="flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl sm:rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 lg:w-7 lg:h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs sm:text-sm font-semibold text-gray-600 mb-1">Today</p>
                            <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900">{{ $stats['contacts_today'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold bg-gray-100 text-gray-600">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                            0%
                        </span>
                        <span class="text-xs sm:text-sm text-gray-500">no change</span>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-24 h-24 sm:w-32 sm:h-32 bg-gradient-to-br from-orange-50 to-orange-100 rounded-full -mr-12 sm:-mr-16 -mt-12 sm:-mt-16 opacity-50 group-hover:opacity-70 transition-opacity"></div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-4 gap-6 sm:gap-8 lg:gap-10">
        <!-- Left Column - Main Content -->
        <div class="xl:col-span-3 space-y-6 sm:space-y-8 lg:space-y-10">
            <!-- Enhanced Contact Submissions -->
            <div class="card-modern p-4 sm:p-6 lg:p-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 sm:mb-8">
                    <div class="mb-4 sm:mb-0">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">Contact Submissions</h3>
                        <p class="text-xs sm:text-sm text-gray-600 mt-1">Manage and track all contact form submissions</p>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                        <div class="flex items-center space-x-2 text-xs sm:text-sm text-gray-500">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">{{ now()->format('M d, Y') }}</span>
                        </div>
                        <button class="inline-flex items-center px-3 sm:px-4 py-2 bg-blue-600 text-white text-xs sm:text-sm font-medium rounded-xl hover:bg-blue-700 transition-colors">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Export
                        </button>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4 lg:gap-8 mb-6 sm:mb-8 lg:mb-10">
                    <div class="text-center p-3 sm:p-4 lg:p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl sm:rounded-2xl">
                        <div class="text-xs font-semibold text-blue-600 mb-1 sm:mb-2 uppercase tracking-wide">Total Submissions</div>
                        <div class="text-lg sm:text-2xl lg:text-3xl font-bold text-blue-900">{{ $stats['total_contacts'] }}</div>
                        <div class="text-xs text-blue-600 font-medium mt-1 sm:mt-2 flex items-center justify-center">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +2%
                        </div>
                    </div>
                    <div class="text-center p-3 sm:p-4 lg:p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-xl sm:rounded-2xl">
                        <div class="text-xs font-semibold text-green-600 mb-1 sm:mb-2 uppercase tracking-wide">New Submissions</div>
                        <div class="text-lg sm:text-2xl lg:text-3xl font-bold text-green-900">{{ $stats['new_contacts'] }}</div>
                        <div class="text-xs text-red-600 font-medium mt-1 sm:mt-2 flex items-center justify-center">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                            -5%
                        </div>
                    </div>
                    <div class="text-center p-3 sm:p-4 lg:p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl sm:rounded-2xl">
                        <div class="text-xs font-semibold text-purple-600 mb-1 sm:mb-2 uppercase tracking-wide">Read Submissions</div>
                        <div class="text-lg sm:text-2xl lg:text-3xl font-bold text-purple-900">{{ $stats['contacts_this_month'] }}</div>
                        <div class="text-xs text-green-600 font-medium mt-1 sm:mt-2 flex items-center justify-center">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +8%
                        </div>
                    </div>
                    <div class="text-center p-3 sm:p-4 lg:p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl sm:rounded-2xl">
                        <div class="text-xs font-semibold text-orange-600 mb-1 sm:mb-2 uppercase tracking-wide">Replied</div>
                        <div class="text-lg sm:text-2xl lg:text-3xl font-bold text-orange-900">{{ $stats['contacts_today'] }}</div>
                        <div class="text-xs text-gray-500 font-medium mt-1 sm:mt-2 flex items-center justify-center">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                            </svg>
                            0%
                        </div>
                    </div>
                    <div class="text-center p-3 sm:p-4 lg:p-6 bg-gradient-to-br from-red-50 to-red-100 rounded-xl sm:rounded-2xl col-span-2 sm:col-span-1">
                        <div class="text-xs font-semibold text-red-600 mb-1 sm:mb-2 uppercase tracking-wide">Pending</div>
                        <div class="text-lg sm:text-2xl lg:text-3xl font-bold text-red-900">22</div>
                        <div class="text-xs text-red-600 font-medium mt-1 sm:mt-2 flex items-center justify-center">
                            <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +12%
                        </div>
                    </div>
                </div>

                <!-- Enhanced Contact Submissions Table -->
                <div class="bg-gray-50 rounded-xl sm:rounded-2xl p-3 sm:p-4 lg:p-6 relative overflow-visible">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Contact Info</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider hidden sm:table-cell">Type</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Subject</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider hidden md:table-cell">Date</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider hidden lg:table-cell">Priority</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="text-left py-3 sm:py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @forelse($stats['recent_contacts'] as $contact)
                                    <tr class="hover:bg-white transition-colors group">
                                        <td class="py-3 sm:py-5 text-sm">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 sm:w-10 sm:h-10 lg:w-12 lg:h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl sm:rounded-2xl flex items-center justify-center text-white font-bold text-xs sm:text-sm mr-2 sm:mr-3 lg:mr-4 shadow-lg">
                                                    {{ substr($contact->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <div class="font-semibold text-gray-900 text-xs sm:text-sm">{{ $contact->name }}</div>
                                                    <div class="text-gray-500 text-xs">{{ $contact->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3 sm:py-5 text-sm hidden sm:table-cell">
                                            <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-[10px] font-semibold bg-blue-100 text-blue-800">
                                                <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                                Contact Form
                                            </span>
                                        </td>
                                        <td class="py-3 sm:py-5 text-xs text-gray-900 font-medium">{{ Str::limit($contact->subject, 20) }}</td>
                                        <td class="py-3 sm:py-5 text-xs sm:text-sm text-gray-500 font-medium hidden md:table-cell">{{ $contact->created_at->format('M d, Y') }}</td>
                                        <td class="py-3 sm:py-5 text-sm hidden lg:table-cell">
                                            <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
                                                <svg class="w-2 h-2 sm:w-3 sm:h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                </svg>
                                                Medium
                                            </span>
                                        </td>
                                        <td class="py-3 sm:py-5 text-sm">
                                            <span class="inline-flex items-center px-2 sm:px-3 py-1 rounded-full text-xs font-semibold {{ $contact->getStatusBadgeClass() }}">
                                                {{ ucfirst($contact->status) }}
                                            </span>
                                        </td>
                                        <td class="py-3 sm:py-5 text-sm">
                                            <div class="flex items-center space-x-1 sm:space-x-2">
                                                <button class="p-1 sm:p-2 text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="View Details">
                                                    <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </button>
                                                <button class="p-1 sm:p-2 text-gray-500 hover:text-green-600 hover:bg-green-50 rounded-lg transition-colors hidden sm:block" title="Reply">
                                                    <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                                                    </svg>
                                                </button>
                                                <div class="relative" x-data="{ open: false }">
                                                    <button @click="open = !open" class="p-1 sm:p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-50 rounded-lg transition-colors" title="More Actions">
                                                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                                        </svg>
                                                    </button>
                                                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 mt-2 w-40 sm:w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50">
                                                        <button class="w-full text-left px-3 sm:px-4 py-2 text-xs sm:text-sm text-gray-700 hover:bg-gray-50 flex items-center">
                                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                            </svg>
                                                            Edit
                                                        </button>
                                                        <button class="w-full text-left px-3 sm:px-4 py-2 text-xs sm:text-sm text-gray-700 hover:bg-gray-50 flex items-center">
                                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 3v10a2 2 0 002 2h6a2 2 0 002-2V7H7z"></path>
                                                            </svg>
                                                            Mark as Read
                                                        </button>
                                                        <hr class="my-1">
                                                        <button class="w-full text-left px-3 sm:px-4 py-2 text-xs sm:text-sm text-red-600 hover:bg-red-50 flex items-center">
                                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="py-12 sm:py-16 text-center">
                                            <div class="flex flex-col items-center">
                                                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-100 rounded-xl sm:rounded-2xl flex items-center justify-center mb-3 sm:mb-4">
                                                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m0 0V9a2 2 0 012-2h2m0 0V6a2 2 0 012-2h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V9M4 13v4a2 2 0 002 2h2m0 0h2m0 0h2m0 0h2m0 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4"></path>
                                                    </svg>
                                                </div>
                                                <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">No recent contacts</h3>
                                                <p class="text-sm text-gray-500">Contact submissions will appear here when received.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Enhanced Charts Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Contact to Client Conversion Rate -->
                <div class="card-modern p-8">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Contact to Client Conversion</h3>
                            <p class="text-sm text-gray-600 mt-1">Track your conversion success rate</p>
                        </div>
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="font-medium">{{ now()->format('M d, Y') }}</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center mb-8">
                        <div class="relative w-48 h-48">
                            <svg class="progress-ring w-48 h-48" viewBox="0 0 120 120">
                                <circle class="text-gray-200" stroke="currentColor" stroke-width="8" fill="none" r="40" cx="60" cy="60"></circle>
                                <circle class="text-blue-600 progress-ring-circle animate-progress" stroke="currentColor" stroke-width="8" fill="none" r="40" cx="60" cy="60"></circle>
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="text-4xl font-bold text-gray-900">70%</div>
                                    <div class="text-sm text-gray-500 font-medium mt-1">Success Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-center space-x-2 mb-6">
                            <div class="w-4 h-4 bg-blue-600 rounded-full"></div>
                            <span class="text-sm text-gray-600 font-medium">Contact to Client Success Rate</span>
                        </div>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 text-center">
                                <div class="text-2xl font-bold text-blue-900">{{ $stats['total_contacts'] }}</div>
                                <div class="text-sm text-blue-600 font-medium mt-1">Total Contacts</div>
                                <div class="text-xs text-blue-500 mt-2">This month</div>
                            </div>
                            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 text-center">
                                <div class="text-2xl font-bold text-green-900">{{ intval($stats['total_contacts'] * 0.7) }}</div>
                                <div class="text-sm text-green-600 font-medium mt-1">Converted</div>
                                <div class="text-xs text-green-500 mt-2">Successful</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Traffic Sources -->
                <div class="card-modern p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-6">Traffic Sources</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Organic Search</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-32 bg-gray-200 rounded-full h-2">
                                    <div class="bg-green-500 h-2 rounded-full transition-all duration-500" style="width: 45%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-8">45%</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Direct Traffic</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-32 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full transition-all duration-500" style="width: 30%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-8">30%</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-pink-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Social Media</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-32 bg-gray-200 rounded-full h-2">
                                    <div class="bg-pink-500 h-2 rounded-full transition-all duration-500" style="width: 15%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-8">15%</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Referral Sites</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-32 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full transition-all duration-500" style="width: 8%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-8">8%</span>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                                <span class="text-sm font-medium text-gray-700">Email Marketing</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-32 bg-gray-200 rounded-full h-2">
                                    <div class="bg-orange-500 h-2 rounded-full transition-all duration-500" style="width: 2%"></div>
                                </div>
                                <span class="text-sm font-bold text-gray-900 w-8">2%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 text-center">
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition-colors">View Analytics Report</a>
                    </div>
                </div>
            </div>

            <!-- Website Performance Status -->
            <div class="card-modern p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Website Performance</h3>
                <p class="text-sm text-gray-500 mb-6">{{ now()->format('d/m/Y') }} {{ now()->format('l') }}</p>
                
                <div class="grid grid-cols-4 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 text-white p-3 sm:p-4 rounded-xl text-center">
                        <div class="text-xs font-medium mb-1">Page Speed</div>
                        <div class="text-lg sm:text-2xl font-bold">95</div>
                        <div class="text-xs opacity-80">Score</div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-3 sm:p-4 rounded-xl text-center">
                        <div class="text-xs font-medium mb-1">SEO Score</div>
                        <div class="text-lg sm:text-2xl font-bold">88</div>
                        <div class="text-xs opacity-80">Points</div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-3 sm:p-4 rounded-xl text-center">
                        <div class="text-xs font-medium mb-1">Uptime</div>
                        <div class="text-lg sm:text-2xl font-bold">99.9%</div>
                        <div class="text-xs opacity-80">This Month</div>
                    </div>
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-3 sm:p-4 rounded-xl text-center">
                        <div class="text-xs font-medium mb-1">Security</div>
                        <div class="text-lg sm:text-2xl font-bold">A+</div>
                        <div class="text-xs opacity-80">Grade</div>
                    </div>
                </div>
                
                <!-- Performance chart placeholder -->
                <div class="h-40 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="text-gray-500 font-medium">Performance Analytics</span>
                        <p class="text-xs text-gray-400 mt-1">Real-time website metrics</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Sidebar -->
        <div class="space-y-6">
            <!-- Website Analytics -->
            <div class="card-modern p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold text-gray-900">Website Analytics</h3>
                    <div class="flex items-center space-x-2">
                        <span class="text-xs text-gray-500 font-medium">{{ now()->format('d/m/Y') }}</span>
                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-gray-900">Today's Visitors</h4>
                    <div class="text-right text-3xl font-bold text-gray-900">1,247</div>
                    
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-medium">Page Views</span>
                            <span class="font-bold text-gray-900">3,456</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-medium">Unique Visitors</span>
                            <span class="font-bold text-gray-900">1,247</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-medium">Bounce Rate</span>
                            <span class="font-bold text-gray-900">32%</span>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6">
                    <h4 class="text-sm font-bold text-gray-900 mb-4">Traffic Sources</h4>
                    <div class="relative w-32 h-32 mx-auto">
                        <svg class="w-32 h-32 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200" stroke="currentColor" stroke-width="3" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="text-blue-500" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="40, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="text-green-500" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="35, 100" stroke-dashoffset="-40" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="text-purple-500" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="25, 100" stroke-dashoffset="-75" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900">100%</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2 text-xs">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                <span class="text-gray-600">Direct</span>
                            </div>
                            <span class="font-bold text-gray-900">40%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-gray-600">Search</span>
                            </div>
                            <span class="font-bold text-gray-900">35%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                <span class="text-gray-600">Social</span>
                            </div>
                            <span class="font-bold text-gray-900">25%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Management -->
            <div class="card-modern p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold text-gray-900">Content Status</h3>
                    <span class="text-xs text-gray-500 font-medium">{{ now()->format('d/m/Y') }}</span>
                </div>
                
                <div class="space-y-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">24</div>
                        <div class="text-sm text-gray-500 font-medium">Total Pages</div>
                    </div>
                    
                    <div class="relative w-40 h-40 mx-auto">
                        <svg class="w-40 h-40 transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200" stroke="currentColor" stroke-width="3" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="text-green-500" stroke="currentColor" stroke-width="3" fill="none" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                    </div>
                    
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-gray-600 font-medium">Published</span>
                            </div>
                            <span class="font-bold text-gray-900">18</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <span class="text-gray-600 font-medium">Draft</span>
                            </div>
                            <span class="font-bold text-gray-900">4</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <span class="text-gray-600 font-medium">Needs Review</span>
                            </div>
                            <span class="font-bold text-gray-900">2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection