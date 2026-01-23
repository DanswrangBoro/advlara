@extends('admin.layouts.app')

@section('title', 'Content Management')

@section('content')
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 sm:gap-8">
        <!-- Pages Management -->
        <div class="xl:col-span-2 space-y-4 sm:space-y-6">
            <div class="bg-white shadow-sm rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                        <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2 sm:mb-0">Website Pages</h3>
                        <button class="inline-flex items-center px-3 sm:px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Add New Page
                        </button>
                    </div>
                </div>
                
                <!-- Mobile Card View -->
                <div class="block sm:hidden divide-y divide-gray-200">
                    @php
                        $pages = [
                            ['name' => 'Home Page', 'url' => '/', 'status' => 'Published', 'updated' => '2 hours ago'],
                            ['name' => 'About Us', 'url' => '/about', 'status' => 'Published', 'updated' => '1 day ago'],
                            ['name' => 'Contact Us', 'url' => '/contact-us', 'status' => 'Published', 'updated' => '3 days ago'],
                            ['name' => 'Services', 'url' => '/services', 'status' => 'Draft', 'updated' => '1 week ago'],
                            ['name' => 'Blog', 'url' => '/blog', 'status' => 'Published', 'updated' => '2 weeks ago'],
                        ];
                    @endphp

                    @foreach($pages as $page)
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
                                            <h4 class="text-sm font-semibold text-gray-900 truncate">{{ $page['name'] }}</h4>
                                            <p class="text-xs text-gray-500 truncate">{{ $page['url'] }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2">
                                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                                {{ $page['status'] === 'Published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                {{ $page['status'] }}
                                            </span>
                                            <span class="text-xs text-gray-500">{{ $page['updated'] }}</span>
                                        </div>
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 hover:text-blue-800 text-xs font-medium">Edit</button>
                                            <button class="text-green-600 hover:text-green-800 text-xs font-medium">View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Desktop Table View -->
                <div class="hidden sm:block overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($pages as $page)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-3">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-sm font-semibold text-gray-900">{{ $page['name'] }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500 font-mono">{{ $page['url'] }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full
                                            {{ $page['status'] === 'Published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $page['status'] }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $page['updated'] }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-3">
                                            <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors">Edit</button>
                                            <button class="text-green-600 hover:text-green-800 text-sm font-medium transition-colors">View</button>
                                            <button class="text-red-600 hover:text-red-800 text-sm font-medium transition-colors">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Media Library -->
            <div class="bg-white shadow-sm rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                        <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-2 sm:mb-0">Media Library</h3>
                        <button class="inline-flex items-center px-3 sm:px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 transition-colors">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            Upload Media
                        </button>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
                        @for($i = 1; $i <= 8; $i++)
                            <div class="group relative aspect-square bg-gray-100 rounded-lg overflow-hidden hover:bg-gray-200 transition-colors cursor-pointer">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-200 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                    <div class="flex space-x-1 sm:space-x-2">
                                        <button class="p-1.5 sm:p-2 bg-white rounded-full text-gray-700 hover:text-blue-600">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 sm:p-2 bg-white rounded-full text-gray-700 hover:text-red-600">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-4 sm:space-y-6">
            <!-- Quick Stats -->
            <div class="bg-white shadow-sm rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
                    <h3 class="text-base sm:text-lg font-bold text-gray-900">Content Stats</h3>
                </div>
                <div class="p-4 sm:p-6 space-y-3 sm:space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm text-gray-600">Total Pages</span>
                        <span class="text-xs sm:text-sm font-semibold text-gray-900">12</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm text-gray-600">Published</span>
                        <span class="text-xs sm:text-sm font-semibold text-green-600">10</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm text-gray-600">Drafts</span>
                        <span class="text-xs sm:text-sm font-semibold text-yellow-600">2</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs sm:text-sm text-gray-600">Media Files</span>
                        <span class="text-xs sm:text-sm font-semibold text-gray-900">45</span>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white shadow-sm rounded-2xl border border-gray-200">
                <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
                    <h3 class="text-base sm:text-lg font-bold text-gray-900">Recent Activity</h3>
                </div>
                <div class="divide-y divide-gray-200">
                    @php
                        $activities = [
                            ['action' => 'Updated Home Page', 'time' => '2 hours ago', 'type' => 'edit'],
                            ['action' => 'Added new blog post', 'time' => '1 day ago', 'type' => 'create'],
                            ['action' => 'Uploaded 3 images', 'time' => '2 days ago', 'type' => 'upload'],
                            ['action' => 'Published About page', 'time' => '3 days ago', 'type' => 'publish'],
                        ];
                    @endphp

                    @foreach($activities as $activity)
                        <div class="px-4 sm:px-6 py-2 sm:py-3">
                            <div class="flex items-center space-x-2 sm:space-x-3">
                                <div class="flex-shrink-0">
                                    @if($activity['type'] === 'edit')
                                        <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                                    @elseif($activity['type'] === 'create')
                                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                    @elseif($activity['type'] === 'upload')
                                        <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                    @else
                                        <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs sm:text-sm text-gray-900">{{ $activity['action'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $activity['time'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection