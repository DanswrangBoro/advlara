@extends('admin.layouts.app')

@section('title', 'Contact Submissions')

@section('content')
<div x-data="{ 
    showViewModal: false, 
    selectedSubmission: null,
    viewSubmission(submission) {
        this.selectedSubmission = submission;
        this.showViewModal = true;
    }
}">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <div class="card-modern p-4 sm:p-6 relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-500 mb-1">Total Submissions</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-900">{{ $statistics['total'] ?? 0 }}</p>
                    <p class="text-xs sm:text-sm text-blue-600 font-medium mt-1">All time</p>
                </div>
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m0 0V9a2 2 0 012-2h2m0 0V6a2 2 0 012-2h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V9M4 13v4a2 2 0 002 2h2m0 0h2m0 0h2m0 0h2m0 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4"></path>
                    </svg>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-16 h-16 sm:w-20 sm:h-20 bg-blue-50 rounded-full -mr-8 sm:-mr-10 -mt-8 sm:-mt-10"></div>
        </div>

        <div class="card-modern p-4 sm:p-6 relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-500 mb-1">New Messages</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-900">{{ $statistics['new'] ?? 0 }}</p>
                    <p class="text-xs sm:text-sm text-orange-600 font-medium mt-1">Needs attention</p>
                </div>
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-16 h-16 sm:w-20 sm:h-20 bg-orange-50 rounded-full -mr-8 sm:-mr-10 -mt-8 sm:-mt-10"></div>
        </div>

        <div class="card-modern p-4 sm:p-6 relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-500 mb-1">Read Messages</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-900">{{ $statistics['read'] ?? 0 }}</p>
                    <p class="text-xs sm:text-sm text-yellow-600 font-medium mt-1">In progress</p>
                </div>
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-16 h-16 sm:w-20 sm:h-20 bg-yellow-50 rounded-full -mr-8 sm:-mr-10 -mt-8 sm:-mt-10"></div>
        </div>

        <div class="card-modern p-4 sm:p-6 relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs sm:text-sm font-medium text-gray-500 mb-1">Replied</p>
                    <p class="text-2xl sm:text-3xl font-bold text-gray-900">{{ $statistics['replied'] ?? 0 }}</p>
                    <p class="text-xs sm:text-sm text-green-600 font-medium mt-1">Completed</p>
                </div>
                <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <div class="absolute top-0 right-0 w-16 h-16 sm:w-20 sm:h-20 bg-green-50 rounded-full -mr-8 sm:-mr-10 -mt-8 sm:-mt-10"></div>
        </div>
    </div>

    <!-- Contact Submissions Table -->
    <div class="card-modern p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 sm:mb-6">
            <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-0">Contact Submissions</h3>
            <p class="text-xs sm:text-sm text-gray-500 font-medium">{{ now()->format('d/m/Y') }} {{ now()->format('l') }}</p>
        </div>
        
        <!-- Filter Tabs -->
        <div class="border-b border-gray-200 mb-4 sm:mb-6">
            <nav class="-mb-px flex space-x-4 sm:space-x-8 overflow-x-auto">
                <a href="{{ route('admin.contact-submissions.index') }}" 
                   class="py-2 sm:py-3 px-1 border-b-2 font-bold text-xs sm:text-sm transition-colors whitespace-nowrap {{ !request('status') ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    All ({{ $statistics['total'] ?? 0 }})
                </a>
                <a href="{{ route('admin.contact-submissions.index', ['status' => 'new']) }}" 
                   class="py-2 sm:py-3 px-1 border-b-2 font-bold text-xs sm:text-sm transition-colors whitespace-nowrap {{ request('status') === 'new' ? 'border-orange-500 text-orange-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    New ({{ $statistics['new'] ?? 0 }})
                </a>
                <a href="{{ route('admin.contact-submissions.index', ['status' => 'read']) }}" 
                   class="py-2 sm:py-3 px-1 border-b-2 font-bold text-xs sm:text-sm transition-colors whitespace-nowrap {{ request('status') === 'read' ? 'border-yellow-500 text-yellow-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    Read ({{ $statistics['read'] ?? 0 }})
                </a>
                <a href="{{ route('admin.contact-submissions.index', ['status' => 'replied']) }}" 
                   class="py-2 sm:py-3 px-1 border-b-2 font-bold text-xs sm:text-sm transition-colors whitespace-nowrap {{ request('status') === 'replied' ? 'border-green-500 text-green-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                    Replied ({{ $statistics['replied'] ?? 0 }})
                </a>
            </nav>
        </div>

        <!-- Submissions Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-2 sm:py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">Contact</th>
                        <th class="text-left py-2 sm:py-3 text-xs font-bold text-gray-500 uppercase tracking-wider hidden sm:table-cell">Subject</th>
                        <th class="text-left py-2 sm:py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="text-left py-2 sm:py-3 text-xs font-bold text-gray-500 uppercase tracking-wider hidden md:table-cell">Date</th>
                        <th class="text-left py-2 sm:py-3 text-xs font-bold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($submissions ?? [] as $submission)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-3 sm:py-4 text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 sm:h-10 sm:w-10">
                                        <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                            <span class="text-xs sm:text-sm font-bold text-white">{{ substr($submission->name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 sm:ml-4">
                                        <div class="text-xs sm:text-sm font-bold text-gray-900">{{ $submission->name }}</div>
                                        <div class="text-xs text-gray-500 font-medium">{{ $submission->email }}</div>
                                        @if($submission->phone)
                                            <div class="text-xs text-gray-400 hidden sm:block">{{ $submission->phone }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 sm:py-4 text-sm hidden sm:table-cell">
                                <div class="text-xs sm:text-sm font-medium text-gray-900">{{ Str::limit($submission->subject, 30) }}</div>
                                <div class="text-xs text-gray-500 mt-1">{{ Str::limit($submission->message, 40) }}</div>
                            </td>
                            <td class="py-3 sm:py-4 text-sm">
                                <span class="status-badge {{ $submission->getStatusBadgeClass() }} text-xs">
                                    {{ ucfirst($submission->status) }}
                                </span>
                            </td>
                            <td class="py-3 sm:py-4 text-sm text-gray-500 font-medium hidden md:table-cell">
                                <div class="text-xs sm:text-sm">{{ $submission->created_at->format('d/m/Y') }}</div>
                                <div class="text-xs text-gray-400">{{ $submission->created_at->format('H:i') }}</div>
                            </td>
                            <td class="py-3 sm:py-4 text-sm">
                                <div class="flex items-center space-x-1 sm:space-x-3">
                                    <button @click="viewSubmission({
                                        id: {{ $submission->id }},
                                        name: '{{ addslashes($submission->name) }}',
                                        email: '{{ addslashes($submission->email) }}',
                                        phone: '{{ addslashes($submission->phone ?? '') }}',
                                        subject: '{{ addslashes($submission->subject) }}',
                                        message: '{{ addslashes($submission->message) }}',
                                        status: '{{ $submission->status }}',
                                        created_at: '{{ $submission->created_at->format('M d, Y \a\t H:i') }}',
                                        status_class: '{{ $submission->getStatusBadgeClass() }}'
                                    })" 
                                            class="inline-flex items-center px-2 sm:px-3 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-lg hover:bg-blue-200 transition-colors">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span class="hidden sm:inline">View</span>
                                    </button>
                                    @if($submission->status === 'new')
                                        <button onclick="markAsRead({{ $submission->id }})" 
                                                class="inline-flex items-center px-2 sm:px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-lg hover:bg-green-200 transition-colors hidden sm:inline-flex">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Mark Read
                                        </button>
                                    @endif
                                    @if($submission->status !== 'replied')
                                        <button onclick="markAsReplied({{ $submission->id }})" 
                                                class="inline-flex items-center px-2 sm:px-3 py-1 bg-purple-100 text-purple-700 text-xs font-bold rounded-lg hover:bg-purple-200 transition-colors hidden sm:inline-flex">
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                                            </svg>
                                            Reply
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 sm:py-12 text-center">
                                <svg class="w-8 h-8 sm:w-12 sm:h-12 mx-auto text-gray-300 mb-3 sm:mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m0 0V9a2 2 0 012-2h2m0 0V6a2 2 0 012-2h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 01.293.707V9M4 13v4a2 2 0 002 2h2m0 0h2m0 0h2m0 0h2m0 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4"></path>
                                </svg>
                                <p class="text-sm sm:text-base text-gray-500 font-medium">No contact submissions found</p>
                                <p class="text-xs sm:text-sm text-gray-400 mt-1">Contact submissions will appear here when received</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if(isset($submissions) && $submissions->hasPages())
            <div class="mt-6 flex items-center justify-between border-t border-gray-200 pt-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    @if ($submissions->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                            Previous
                        </span>
                    @else
                        <a href="{{ $submissions->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Previous
                        </a>
                    @endif

                    @if ($submissions->hasMorePages())
                        <a href="{{ $submissions->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                            Next
                        </a>
                    @else
                        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                            Next
                        </span>
                    @endif
                </div>

                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700 leading-5">
                            Showing
                            <span class="font-medium">{{ $submissions->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $submissions->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $submissions->total() }}</span>
                            results
                        </p>
                    </div>

                    <div>
                        <span class="relative z-0 inline-flex shadow-sm rounded-md">
                            {{-- Previous Page Link --}}
                            @if ($submissions->onFirstPage())
                                <span aria-disabled="true" aria-label="Previous">
                                    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @else
                                <a href="{{ $submissions->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($submissions->getUrlRange(1, $submissions->lastPage()) as $page => $url)
                                @if ($page == $submissions->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-blue-600 border border-blue-600 cursor-default leading-5">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page {{ $page }}">{{ $page }}</a>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($submissions->hasMorePages())
                                <a href="{{ $submissions->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            @else
                                <span aria-disabled="true" aria-label="Next">
                                    <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- View Submission Modal -->
    <div x-show="showViewModal" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" 
         @click="showViewModal = false">
        
        <div class="relative top-4 sm:top-20 mx-auto p-4 sm:p-5 w-full max-w-2xl sm:max-w-4xl">
            <div @click.stop class="relative bg-white rounded-2xl shadow-xl border border-gray-200 max-h-[90vh] overflow-y-auto">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-200 sticky top-0 bg-white rounded-t-2xl">
                    <div class="flex items-center space-x-3 sm:space-x-4">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-900">Contact Submission Details</h3>
                            <p class="text-sm text-gray-500" x-text="selectedSubmission?.created_at"></p>
                        </div>
                    </div>
                    <button @click="showViewModal = false" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-4 sm:p-6 space-y-6">
                    <!-- Contact Information -->
                    <div class="bg-gray-50 rounded-xl p-4 sm:p-6">
                        <h4 class="text-base sm:text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Contact Information
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                                        <span class="text-xs sm:text-sm font-bold text-white" x-text="selectedSubmission?.name?.charAt(0)"></span>
                                    </div>
                                    <span class="text-sm sm:text-base font-medium text-gray-900" x-text="selectedSubmission?.name"></span>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <a :href="'mailto:' + selectedSubmission?.email" class="text-sm sm:text-base text-blue-600 hover:text-blue-800 font-medium" x-text="selectedSubmission?.email"></a>
                                </div>
                            </div>
                            <div x-show="selectedSubmission?.phone">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    <a :href="'tel:' + selectedSubmission?.phone" class="text-sm sm:text-base text-blue-600 hover:text-blue-800 font-medium" x-text="selectedSubmission?.phone"></a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <span class="status-badge text-xs" :class="selectedSubmission?.status_class" x-text="selectedSubmission?.status?.charAt(0).toUpperCase() + selectedSubmission?.status?.slice(1)"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <div class="bg-white border border-gray-200 rounded-lg p-3 sm:p-4">
                            <p class="text-sm sm:text-base text-gray-900 font-medium" x-text="selectedSubmission?.subject"></p>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <div class="bg-white border border-gray-200 rounded-lg p-3 sm:p-4 min-h-[120px]">
                            <p class="text-sm sm:text-base text-gray-900 whitespace-pre-wrap leading-relaxed" x-text="selectedSubmission?.message"></p>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0 pt-4 border-t border-gray-200">
                        <div class="flex flex-wrap gap-2">
                            <template x-if="selectedSubmission?.status === 'new'">
                                <button @click="markAsRead(selectedSubmission.id); showViewModal = false" 
                                        class="inline-flex items-center px-3 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Mark as Read
                                </button>
                            </template>
                            <template x-if="selectedSubmission?.status !== 'replied'">
                                <button @click="markAsReplied(selectedSubmission.id); showViewModal = false" 
                                        class="inline-flex items-center px-3 py-2 bg-purple-600 text-white text-sm font-medium rounded-lg hover:bg-purple-700 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                                    </svg>
                                    Mark as Replied
                                </button>
                            </template>
                            <button :href="'mailto:' + selectedSubmission?.email + '?subject=Re: ' + selectedSubmission?.subject" 
                                    onclick="window.location.href = this.getAttribute('href')"
                                    class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Send Email
                            </button>
                        </div>
                        <button @click="showViewModal = false" 
                                class="w-full sm:w-auto px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function markAsRead(id) {
    fetch(`/admin/contact-submissions/${id}/mark-read`, {
        method: 'PATCH',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to mark as read'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
}

function markAsReplied(id) {
    fetch(`/admin/contact-submissions/${id}/mark-replied`, {
        method: 'PATCH',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('Error: ' + (data.message || 'Failed to mark as replied'));
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
}

function deleteSubmission(id) {
    if (confirm('Are you sure you want to delete this submission? This action cannot be undone.')) {
        fetch(`/admin/contact-submissions/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error: ' + (data.message || 'Failed to delete submission'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
}
</script>
@endpush