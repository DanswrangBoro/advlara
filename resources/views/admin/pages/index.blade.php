@extends('admin.layouts.app')

@section('title', 'Page Management')

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
        <div class="mb-4 sm:mb-0">
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold topbar-title">Page Management</h1>
            <div class="mt-1 sm:mt-2 flex items-center space-x-2 sm:space-x-4">
                <div class="breadcrumb-modern flex items-center space-x-2 text-xs sm:text-sm text-gray-600">
                    <svg class="w-3 h-3 sm:w-4 sm:h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="font-medium">{{ now()->format('M d, Y') }}</span>
                    <span class="text-gray-400 hidden sm:inline">•</span>
                    <span class="font-medium hidden sm:inline">{{ now()->format('l') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div x-data="pageManager()" x-init="initEditor()">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-xl bg-blue-100">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3 sm:ml-4">
                    <dl>
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Total Pages</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $stats['total'] }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-xl bg-green-100">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3 sm:ml-4">
                    <dl>
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Published</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $stats['published'] }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-xl bg-yellow-100">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3 sm:ml-4">
                    <dl>
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Drafts</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $stats['draft'] }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-xl bg-purple-100">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3 sm:ml-4">
                    <dl>
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Archived</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $stats['archived'] }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white shadow-sm rounded-2xl border border-gray-200 overflow-hidden">
        <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-3 sm:mb-0">All Pages</h3>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <div class="relative">
                        <input type="text" x-model="searchQuery" @input="filterPages" placeholder="Search pages..." class="block w-full sm:w-auto pl-8 sm:pl-10 pr-3 py-2 border border-gray-300 rounded-lg text-xs sm:text-sm placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-2 sm:pl-3 flex items-center pointer-events-none">
                            <svg class="h-3 h-3 sm:h-4 sm:w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <select x-model="statusFilter" @change="filterPages" class="block w-full sm:w-auto pl-3 pr-8 sm:pr-10 py-2 text-xs sm:text-sm border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-lg">
                        <option value="">All Status</option>
                        <option value="published">Published</option>
                        <option value="draft">Draft</option>
                        <option value="archived">Archived</option>
                    </select>
                    <select x-model="typeFilter" @change="filterPages" class="block w-full sm:w-auto pl-3 pr-8 sm:pr-10 py-2 text-xs sm:text-sm border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-lg">
                        <option value="">All Types</option>
                        <option value="page">Static Page</option>
                        <option value="blog">Blog Post</option>
                        <option value="service">Service Page</option>
                    </select>
                    <button @click="openAddModal()" class="inline-flex items-center px-3 sm:px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add New Page
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Card View -->
        <div class="block sm:hidden divide-y divide-gray-200">
            @forelse($pages as $page)
                <div class="px-4 py-4 hover:bg-gray-50 transition-colors">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center space-x-2 mb-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-semibold text-gray-900 truncate">{{ $page->title }}</h4>
                                    <p class="text-xs text-gray-500 truncate">{{ $page->slug }}</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                        {{ $page->status === 'published' ? 'bg-green-100 text-green-800' : 
                                           ($page->status === 'draft' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                        {{ ucfirst($page->status) }}
                                    </span>
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ ucfirst($page->type) }}
                                    </span>
                                    <span class="text-xs text-gray-500">{{ $page->updated_at->diffForHumans() }}</span>
                                </div>
                                <div class="flex space-x-2">
                                    <button @click="openEditModal({{ $page->id }})" class="text-blue-600 hover:text-blue-800 text-xs font-medium">Edit</button>
                                    <a href="{{ $page->getUrl() }}" target="_blank" class="text-green-600 hover:text-green-800 text-xs font-medium">View</a>
                                    <button @click="deletePage({{ $page->id }}, '{{ addslashes($page->title) }}')" class="text-red-600 hover:text-red-800 text-xs font-medium">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="px-4 py-8 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No pages found</h3>
                    <p class="mt-1 text-sm text-gray-500">Get started by creating a new page.</p>
                </div>
            @endforelse
        </div>

        <!-- Desktop Table View -->
        <div class="hidden sm:block overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Author</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">Updated</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($pages as $page)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 sm:h-10 sm:w-10">
                                        <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-2 sm:ml-4">
                                        <div class="text-xs sm:text-sm font-medium text-gray-900">{{ $page->title }}</div>
                                        <div class="text-xs text-gray-500 font-mono">{{ $page->slug }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    {{ ucfirst($page->type) }}
                                </span>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    {{ $page->status === 'published' ? 'bg-green-100 text-green-800' : 
                                       ($page->status === 'draft' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($page->status) }}
                                </span>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-gray-500 hidden md:table-cell">
                                {{ $page->author->name ?? 'Unknown' }}
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-gray-500 hidden lg:table-cell">
                                {{ $page->updated_at->diffForHumans() }}
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm font-medium">
                                <div class="flex space-x-1 sm:space-x-2">
                                    <button @click="openEditModal({{ $page->id }})" class="text-blue-600 hover:text-blue-900 text-xs sm:text-sm transition-colors">Edit</button>
                                    <a href="{{ $page->getUrl() }}" target="_blank" class="text-green-600 hover:text-green-900 text-xs sm:text-sm transition-colors">View</a>
                                    <button @click="duplicatePage({{ $page->id }})" class="text-purple-600 hover:text-purple-900 text-xs sm:text-sm transition-colors">Copy</button>
                                    <button @click="deletePage({{ $page->id }}, '{{ addslashes($page->title) }}')" class="text-red-600 hover:text-red-900 text-xs sm:text-sm transition-colors">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 sm:px-6 py-6 sm:py-8 text-center">
                                <div class="flex flex-col items-center">
                                    <svg class="mx-auto h-8 w-8 sm:h-12 sm:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No pages found</h3>
                                    <p class="mt-1 text-xs sm:text-sm text-gray-500">Get started by creating a new page.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($pages->hasPages())
            <div class="px-4 sm:px-6 py-3 sm:py-4 border-t border-gray-200">
                {{ $pages->links() }}
            </div>
        @endif
    </div>

    <!-- Add/Edit Page Modal -->
    <div x-show="showPageModal" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" 
         @click="showPageModal = false">
        
        <div class="relative top-10 mx-auto p-4 sm:p-5 w-full max-w-2xl lg:max-w-4xl">
            <div @click.stop class="relative bg-white rounded-2xl shadow-xl border border-gray-200 max-h-[90vh] overflow-y-auto">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-200 sticky top-0 bg-white rounded-t-2xl">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900" x-text="isEditing ? 'Edit Page' : 'Add New Page'"></h3>
                    <button @click="closeModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <form @submit.prevent="submitForm" class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Left Column -->
                        <div class="space-y-4 sm:space-y-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Page Title *</label>
                                <input type="text" id="title" name="title" required 
                                       x-model="formData.title"
                                       @input="generateSlug"
                                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                       placeholder="Enter page title">
                                <div x-show="errors.title" class="mt-1 text-sm text-red-600" x-text="errors.title?.[0]"></div>
                            </div>
                            
                            <div>
                                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">URL Slug *</label>
                                <div class="mt-1 flex rounded-lg shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">{{ url('/') }}/</span>
                                    <input type="text" id="slug" name="slug" required 
                                           x-model="formData.slug"
                                           class="flex-1 block w-full rounded-none rounded-r-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                           placeholder="page-url">
                                </div>
                                <div x-show="errors.slug" class="mt-1 text-sm text-red-600" x-text="errors.slug?.[0]"></div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Page Type *</label>
                                    <select id="type" name="type" x-model="formData.type"
                                            class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                                        <option value="page">Static Page</option>
                                        <option value="blog">Blog Post</option>
                                        <option value="service">Service Page</option>
                                    </select>
                                    <div x-show="errors.type" class="mt-1 text-sm text-red-600" x-text="errors.type?.[0]"></div>
                                </div>
                                
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status *</label>
                                    <select id="status" name="status" x-model="formData.status"
                                            class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                        <option value="archived">Archived</option>
                                    </select>
                                    <div x-show="errors.status" class="mt-1 text-sm text-red-600" x-text="errors.status?.[0]"></div>
                                </div>
                            </div>

                            <div>
                                <label for="template" class="block text-sm font-medium text-gray-700 mb-1">Template</label>
                                <select id="template" name="template" x-model="formData.template"
                                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                                    <option value="default">Default Template</option>
                                    <option value="blog">Blog Template</option>
                                    <option value="service">Service Template</option>
                                    <option value="landing">Landing Page</option>
                                </select>
                            </div>

                            <div>
                                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1">Excerpt</label>
                                <textarea id="excerpt" name="excerpt" rows="3" 
                                          x-model="formData.excerpt"
                                          class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                          placeholder="Brief description of the page..."></textarea>
                                <div x-show="errors.excerpt" class="mt-1 text-sm text-red-600" x-text="errors.excerpt?.[0]"></div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="space-y-4 sm:space-y-6">
                            <div>
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-1">SEO Title</label>
                                <input type="text" id="meta_title" name="meta_title" 
                                       x-model="formData.meta_title"
                                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                       placeholder="SEO optimized title">
                                <p class="mt-1 text-xs text-gray-500">Leave blank to use page title</p>
                            </div>

                            <div>
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-1">SEO Description</label>
                                <textarea id="meta_description" name="meta_description" rows="3" 
                                          x-model="formData.meta_description"
                                          class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                          placeholder="SEO meta description..."></textarea>
                            </div>

                            <div>
                                <label for="meta_keywords" class="block text-sm font-medium text-gray-700 mb-1">SEO Keywords</label>
                                <input type="text" id="meta_keywords" name="meta_keywords" 
                                       x-model="formData.meta_keywords"
                                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                       placeholder="keyword1, keyword2, keyword3">
                            </div>

                            <div x-show="formData.status === 'published'">
                                <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">Publish Date</label>
                                <input type="datetime-local" id="published_at" name="published_at" 
                                       x-model="formData.published_at"
                                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                            </div>

                            <div class="space-y-3">
                                <div class="flex items-center">
                                    <input id="is_featured" name="is_featured" type="checkbox" 
                                           x-model="formData.is_featured"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="is_featured" class="ml-3 text-sm text-gray-700">Featured page</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="show_in_menu" name="show_in_menu" type="checkbox" 
                                           x-model="formData.show_in_menu"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <label for="show_in_menu" class="ml-3 text-sm text-gray-700">Show in navigation menu</label>
                                </div>
                            </div>

                            <div>
                                <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
                                <input type="number" id="sort_order" name="sort_order" 
                                       x-model="formData.sort_order"
                                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                       placeholder="0">
                                <p class="mt-1 text-xs text-gray-500">Lower numbers appear first</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content Editor -->
                    <div class="lg:col-span-2">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                        <textarea id="content" name="content" rows="12"
                                  x-model="formData.content"
                                  class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                  placeholder="Enter page content..."></textarea>
                        <div x-show="errors.content" class="mt-1 text-sm text-red-600" x-text="errors.content?.[0]"></div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-3 pt-4 border-t border-gray-200">
                        <button type="button" @click="closeModal" 
                                class="w-full sm:w-auto px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" :disabled="isSubmitting"
                                class="w-full sm:w-auto px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!isSubmitting" x-text="isEditing ? 'Update Page' : 'Create Page'"></span>
                            <span x-show="isSubmitting" class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span x-text="isEditing ? 'Updating...' : 'Creating...'"></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
function pageManager() {
    return {
        showPageModal: false,
        isSubmitting: false,
        isEditing: false,
        editingPageId: null,
        searchQuery: '',
        statusFilter: '',
        typeFilter: '',
        errors: {},
        formData: {
            title: '',
            slug: '',
            content: '',
            excerpt: '',
            type: 'page',
            status: 'draft',
            template: 'default',
            meta_title: '',
            meta_description: '',
            meta_keywords: '',
            featured_image: '',
            published_at: '',
            is_featured: false,
            show_in_menu: false,
            sort_order: 0
        },
        
        resetForm() {
            this.formData = {
                title: '',
                slug: '',
                content: '',
                excerpt: '',
                type: 'page',
                status: 'draft',
                template: 'default',
                meta_title: '',
                meta_description: '',
                meta_keywords: '',
                featured_image: '',
                published_at: '',
                is_featured: false,
                show_in_menu: false,
                sort_order: 0
            };
            this.errors = {};
            this.isEditing = false;
            this.editingPageId = null;
        },
        
        closeModal() {
            this.showPageModal = false;
            this.resetForm();
        },
        
        openAddModal() {
            this.resetForm();
            this.showPageModal = true;
        },
        
        async openEditModal(pageId) {
            this.resetForm();
            this.isEditing = true;
            this.editingPageId = pageId;
            
            try {
                const response = await fetch(`/admin/pages/${pageId}`, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    const page = data.page;
                    this.formData.title = page.title;
                    this.formData.slug = page.slug;
                    this.formData.content = page.content || '';
                    this.formData.excerpt = page.excerpt || '';
                    this.formData.type = page.type;
                    this.formData.status = page.status;
                    this.formData.template = page.template;
                    this.formData.meta_title = page.meta_title || '';
                    this.formData.meta_description = page.meta_description || '';
                    this.formData.meta_keywords = page.meta_keywords || '';
                    this.formData.featured_image = page.featured_image || '';
                    this.formData.published_at = page.published_at || '';
                    this.formData.is_featured = page.is_featured;
                    this.formData.show_in_menu = page.show_in_menu;
                    this.formData.sort_order = page.sort_order || 0;
                    this.showPageModal = true;
                } else {
                    this.showErrorMessage('Failed to load page data');
                }
            } catch (error) {
                console.error('Error:', error);
                this.showErrorMessage('Failed to load page data');
            }
        },
        
        generateSlug() {
            if (!this.isEditing && this.formData.title) {
                this.formData.slug = this.formData.title
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim('-');
            }
        },

        initEditor() {
            const self = this;
            const init = () => {
                if (typeof ClassicEditor === 'undefined') {
                    return;
                }
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .then(editor => {
                        window.pageEditor = editor;
                        editor.model.document.on('change:data', () => {
                            self.formData.content = editor.getData();
                        });
                    })
                    .catch(error => {
                        console.error('CKEditor initialization error:', error);
                    });
            };

            if (document.readyState === 'complete' || document.readyState === 'interactive') {
                init();
            } else {
                document.addEventListener('DOMContentLoaded', init);
            }
        },
        
        async submitForm() {
            this.isSubmitting = true;
            this.errors = {};
            
            const url = this.isEditing 
                ? `/admin/pages/${this.editingPageId}` 
                : '{{ route('admin.pages.store') }}';
            
            const method = this.isEditing ? 'PUT' : 'POST';
            
            try {
                const response = await fetch(url, {
                    method: method,
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(this.formData)
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.showSuccessMessage(data.message);
                    this.closeModal();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                } else {
                    if (data.errors) {
                        this.errors = data.errors;
                    } else {
                        this.showErrorMessage(data.message || 'An error occurred');
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                this.showErrorMessage('An error occurred. Please try again.');
            } finally {
                this.isSubmitting = false;
            }
        },
        
        filterPages() {
            // This would be implemented with server-side filtering
            // For now, we'll just reload the page with query parameters
            const params = new URLSearchParams();
            if (this.searchQuery) params.set('search', this.searchQuery);
            if (this.statusFilter) params.set('status', this.statusFilter);
            if (this.typeFilter) params.set('type', this.typeFilter);
            
            const queryString = params.toString();
            const url = queryString ? `?${queryString}` : window.location.pathname;
            window.location.href = url;
        },
        
        showSuccessMessage(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        },
        
        showErrorMessage(message) {
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 5000);
        }
    }
}

function deletePage(pageId, pageTitle) {
    if (confirm(`Are you sure you want to delete "${pageTitle}"? This action cannot be undone.`)) {
        fetch(`/admin/pages/${pageId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showSuccessMessage(data.message);
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            } else {
                showErrorMessage(data.message || 'Failed to delete page');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showErrorMessage('An error occurred. Please try again.');
        });
    }
}

function duplicatePage(pageId) {
    fetch(`/admin/pages/${pageId}/duplicate`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showSuccessMessage(data.message);
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            showErrorMessage(data.message || 'Failed to duplicate page');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showErrorMessage('An error occurred. Please try again.');
    });
}

function showSuccessMessage(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

function showErrorMessage(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
    notification.textContent = message;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 5000);
}
</script>
@endpush