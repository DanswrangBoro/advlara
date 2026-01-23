@extends('admin.layouts.app')

@section('title', 'User Management')

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center justify-between">
        <div class="mb-4 sm:mb-0">
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold topbar-title">User Management</h1>
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
<div x-data="userManager()">
    <div class="bg-white shadow-sm rounded-2xl border border-gray-200 overflow-hidden">
        <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                <h3 class="text-base sm:text-lg font-bold text-gray-900 mb-3 sm:mb-0">All Users</h3>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search users..." class="block w-full sm:w-auto pl-8 sm:pl-10 pr-3 py-2 border border-gray-300 rounded-lg text-xs sm:text-sm placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-2 sm:pl-3 flex items-center pointer-events-none">
                            <svg class="h-3 h-3 sm:h-4 sm:w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <select class="block w-full sm:w-auto pl-3 pr-8 sm:pr-10 py-2 text-xs sm:text-sm border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 rounded-lg">
                        <option>All Roles</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                    <button @click="openAddModal()" class="inline-flex items-center px-3 sm:px-4 py-2 border border-transparent text-xs sm:text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add New User
                    </button>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Role</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Last Login</th>
                        <th class="px-4 sm:px-6 py-2 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($users as $user)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 sm:h-10 sm:w-10">
                                        <div class="h-8 w-8 sm:h-10 sm:w-10 rounded-full {{ $user->isAdmin() ? 'bg-blue-600' : 'bg-gray-400' }} flex items-center justify-center">
                                            <span class="text-xs sm:text-sm font-medium text-white">{{ substr($user->name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 sm:ml-4">
                                        <div class="text-xs sm:text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                        <div class="text-xs text-gray-500">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap hidden sm:table-cell">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    {{ $user->isAdmin() ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ ucfirst($user->role ?? 'user') }}
                                </span>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                    {{ $user->email_verified_at ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $user->email_verified_at ? 'Active' : 'Pending' }}
                                </span>
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm text-gray-500 hidden md:table-cell">
                                {{ $user->updated_at->diffForHumans() }}
                            </td>
                            <td class="px-4 sm:px-6 py-3 sm:py-4 whitespace-nowrap text-xs sm:text-sm font-medium">
                                <div class="flex space-x-1 sm:space-x-2">
                                    <button @click="openEditModal({{ $user->id }})" class="text-blue-600 hover:text-blue-900 text-xs sm:text-sm transition-colors">Edit</button>
                                    @if(!$user->isAdmin() || auth()->user()->isSuperAdmin())
                                        <button onclick="deleteUser({{ $user->id }}, '{{ addslashes($user->name) }}')" class="text-red-600 hover:text-red-900 text-xs sm:text-sm transition-colors">Delete</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 sm:px-6 py-6 sm:py-8 text-center">
                                <div class="flex flex-col items-center">
                                    <svg class="mx-auto h-8 w-8 sm:h-12 sm:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                    <h3 class="mt-2 text-sm font-medium text-gray-900">No users found</h3>
                                    <p class="mt-1 text-xs sm:text-sm text-gray-500">Get started by creating a new user.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($users->hasPages())
            <div class="px-4 sm:px-6 py-3 sm:py-4 border-t border-gray-200">
                {{ $users->links() }}
            </div>
        @endif
    </div>

    <!-- User Stats -->
    <div class="mt-6 sm:mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="flex h-10 w-10 sm:h-12 sm:w-12 items-center justify-center rounded-xl bg-blue-100">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="ml-3 sm:ml-4">
                    <dl>
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Total Users</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $users->total() }}</dd>
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
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Admin Users</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $users->where('role', 'admin')->count() }}</dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-sm rounded-2xl border border-gray-200 p-4 sm:p-6 sm:col-span-2 lg:col-span-1">
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
                        <dt class="text-xs sm:text-sm font-medium text-gray-500">Active Today</dt>
                        <dd class="text-xl sm:text-2xl font-bold text-gray-900">{{ $users->where('updated_at', '>=', today())->count() }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Add User Modal -->
    <div x-show="showAddUserModal" 
         x-transition:enter="transition ease-out duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:enter-end="opacity-100" 
         x-transition:leave="transition ease-in duration-200" 
         x-transition:leave-start="opacity-100" 
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50" 
         @click="showAddUserModal = false">
        
        <div class="relative top-20 mx-auto p-4 sm:p-5 w-full max-w-md sm:max-w-lg">
            <div @click.stop class="relative bg-white rounded-2xl shadow-xl border border-gray-200">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-200">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-900" x-text="isEditing ? 'Edit User' : 'Add New User'"></h3>
                    <button @click="closeModal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Modal Body -->
                <form @submit.prevent="submitForm" class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name" required 
                                   x-model="formData.name"
                                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                   placeholder="Enter full name">
                            <div x-show="errors.name" class="mt-1 text-sm text-red-600" x-text="errors.name?.[0]"></div>
                        </div>
                        
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input type="email" id="email" name="email" required 
                                   x-model="formData.email"
                                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                   placeholder="Enter email address">
                            <div x-show="errors.email" class="mt-1 text-sm text-red-600" x-text="errors.email?.[0]"></div>
                        </div>
                        
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                                Password <span x-show="!isEditing" class="text-red-500">*</span>
                                <span x-show="isEditing" class="text-xs text-gray-500">(leave blank to keep current)</span>
                            </label>
                            <input type="password" id="password" name="password" 
                                   :required="!isEditing"
                                   x-model="formData.password"
                                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                   placeholder="Enter password">
                            <div x-show="errors.password" class="mt-1 text-sm text-red-600" x-text="errors.password?.[0]"></div>
                        </div>
                        
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                                Confirm Password <span x-show="!isEditing" class="text-red-500">*</span>
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation" 
                                   :required="!isEditing"
                                   x-model="formData.password_confirmation"
                                   class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base"
                                   placeholder="Confirm password">
                        </div>
                        
                        <div class="sm:col-span-2">
                            <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                            <select id="role" name="role" x-model="formData.role"
                                    class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div x-show="errors.role" class="mt-1 text-sm text-red-600" x-text="errors.role?.[0]"></div>
                        </div>
                    </div>

                    <div class="space-y-3" x-show="!isEditing">
                        <div class="flex items-center">
                            <input id="send_welcome_email" name="send_welcome_email" type="checkbox" 
                                   x-model="formData.send_welcome_email"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="send_welcome_email" class="ml-3 text-sm text-gray-700">Send welcome email</label>
                        </div>
                        <div class="flex items-center">
                            <input id="email_verified" name="email_verified" type="checkbox" 
                                   x-model="formData.email_verified"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="email_verified" class="ml-3 text-sm text-gray-700">Mark email as verified</label>
                        </div>
                    </div>

                    <div class="space-y-3" x-show="isEditing">
                        <div class="flex items-center">
                            <input id="email_verified_edit" name="email_verified" type="checkbox" 
                                   x-model="formData.email_verified"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="email_verified_edit" class="ml-3 text-sm text-gray-700">Email verified</label>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-3 pt-4 border-t border-gray-200">
                        <button type="button" @click="closeModal" 
                                class="w-full sm:w-auto px-4 py-2 border border-gray-300 text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" :disabled="isSubmitting"
                                class="w-full sm:w-auto px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!isSubmitting" x-text="isEditing ? 'Update User' : 'Create User'"></span>
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
<script>
function userManager() {
    return {
        showAddUserModal: false,
        isSubmitting: false,
        isEditing: false,
        editingUserId: null,
        errors: {},
        formData: {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            role: 'user',
            send_welcome_email: true,
            email_verified: false
        },
        
        resetForm() {
            this.formData = {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                role: 'user',
                send_welcome_email: true,
                email_verified: false
            };
            this.errors = {};
            this.isEditing = false;
            this.editingUserId = null;
        },
        
        closeModal() {
            this.showAddUserModal = false;
            this.resetForm();
        },
        
        openAddModal() {
            this.resetForm();
            this.showAddUserModal = true;
        },
        
        async openEditModal(userId) {
            this.resetForm();
            this.isEditing = true;
            this.editingUserId = userId;
            
            try {
                const response = await fetch(`/admin/users/${userId}`, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.formData.name = data.user.name;
                    this.formData.email = data.user.email;
                    this.formData.role = data.user.role;
                    this.formData.email_verified = !!data.user.email_verified_at;
                    this.formData.password = '';
                    this.formData.password_confirmation = '';
                    this.showAddUserModal = true;
                } else {
                    this.showErrorMessage('Failed to load user data');
                }
            } catch (error) {
                console.error('Error:', error);
                this.showErrorMessage('Failed to load user data');
            }
        },
        
        async submitForm() {
            this.isSubmitting = true;
            this.errors = {};
            
            const url = this.isEditing 
                ? `/admin/users/${this.editingUserId}` 
                : '{{ route('admin.users.store') }}';
            
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

function deleteUser(userId, userName) {
    if (confirm(`Are you sure you want to delete user "${userName}"? This action cannot be undone.`)) {
        fetch(`/admin/users/${userId}`, {
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
                showErrorMessage(data.message || 'Failed to delete user');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showErrorMessage('An error occurred. Please try again.');
        });
    }
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